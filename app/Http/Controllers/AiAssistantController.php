<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Services\AiDatasetService;

class AiAssistantController extends Controller
{
    /**
     * Endpoint API untuk memproses percakapan dengan Asisten AI SMEXA.
     * Menggunakan Cloudflare Workers AI API jika kredensial tersedia di .env,
     * atau beralih otomatis ke knowledge-base dataset resmi SMKN 1 Probolinggo.
     */
    public function chat(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:2000',
            'history' => 'nullable|array',
            'history.*.role' => 'nullable|string',
            'history.*.content' => 'nullable|string',
        ]);

        $userMessage = trim($validated['message']);
        $rawHistory = $validated['history'] ?? [];

        // Ambil kredensial Cloudflare Workers AI dari konfigurasi
        $accountId = config('services.cloudflare.account_id');
        $apiToken = config('services.cloudflare.api_token');
        $model = config('services.cloudflare.ai_model', '@cf/qwen/qwen3-30b-a3b-fp8');

        // Jika kredensial Cloudflare terpasang, panggil Cloudflare Workers AI API
        if (!empty($accountId) && !empty($apiToken)) {
            try {
                $systemPrompt = AiDatasetService::buildSystemPrompt();

                // Format messages array sesuai spesifikasi Cloudflare Workers AI
                $messages = [
                    ['role' => 'system', 'content' => $systemPrompt]
                ];

                // Batasi riwayat pesan maksimal 6 turn terakhir dan pangkas agar hemat token
                $recentHistory = array_slice($rawHistory, -6);
                foreach ($recentHistory as $item) {
                    if (empty($item['content'])) continue;
                    $role = (isset($item['role']) && in_array($item['role'], ['bot', 'assistant'])) ? 'assistant' : 'user';
                    $messages[] = [
                        'role' => $role,
                        'content' => mb_substr(trim($item['content']), 0, 800)
                    ];
                }

                // Tambahkan pesan user saat ini
                $messages[] = [
                    'role' => 'user',
                    'content' => $userMessage
                ];

                $url = "https://api.cloudflare.com/client/v4/accounts/{$accountId}/ai/run/{$model}";

                $response = Http::withoutVerifying()
                    ->withToken($apiToken)
                    ->timeout(35)
                    ->post($url, [
                        'messages' => $messages,
                        'max_tokens' => 1200,
                        'temperature' => 0.6,
                    ]);

                if ($response->successful()) {
                    $json = $response->json();
                    $result = $json['result'] ?? [];

                    // Ekstraksi respons: mendukung format result.choices[0].message.content maupun result.response
                    $reply = null;
                    if (isset($result['choices'][0]['message']['content']) && !empty(trim($result['choices'][0]['message']['content']))) {
                        $reply = trim($result['choices'][0]['message']['content']);
                    } elseif (isset($result['response']) && !empty(trim($result['response']))) {
                        $reply = trim($result['response']);
                    } elseif (isset($result['choices'][0]['message']['reasoning']) && !empty(trim($result['choices'][0]['message']['reasoning']))) {
                        $reply = trim($result['choices'][0]['message']['reasoning']);
                    }

                    if (!empty($reply)) {
                        return response()->json([
                            'success' => true,
                            'provider' => 'cloudflare',
                            'model' => $model,
                            'reply' => $reply,
                            'suggestions' => $this->deriveSuggestions($userMessage, $reply)
                        ]);
                    }
                }

                Log::warning('Cloudflare Workers AI returned unexpected response: ' . $response->body());
            } catch (\Throwable $e) {
                Log::error('Gagal terhubung ke Cloudflare Workers AI: ' . $e->getMessage());
            }
        }

        // Fallback cerdas menggunakan dataset komprehensif sekolah jika Cloudflare belum disetel atau offline
        $fallback = AiDatasetService::getFallbackResponse($userMessage);

        return response()->json([
            'success' => true,
            'provider' => 'dataset-local',
            'reply' => $fallback['reply'],
            'suggestions' => $fallback['suggestions'] ?? ['Info PPDB 2026', '5 Jurusan Resmi', 'Unduh Formulir PDF']
        ]);
    }

    /**
     * Turunan suggestion chips dinamis berdasarkan konteks percakapan
     */
    private function deriveSuggestions(string $userMsg, string $reply): array
    {
        $q = mb_strtolower($userMsg . ' ' . $reply);

        if (str_contains($q, 'ppdb') || str_contains($q, 'daftar') || str_contains($q, 'kuota')) {
            return ['Unduh Formulir PDF', 'Syarat Masuk RPL', 'Jalur Afirmasi', 'Cek Status PPDB'];
        }

        if (str_contains($q, 'rpl') || str_contains($q, 'coding') || str_contains($q, 'web')) {
            return ['Lab Software Engineering', 'Mitra Jagoan Hosting', 'Info PPDB 2026', 'Peluang Karir'];
        }

        if (str_contains($q, 'bisnis') || str_contains($q, 'bd') || str_contains($q, 'retail')) {
            return ['Studio Live Shopping', 'Alfamart Class', 'SMEXAMALL Mart', 'Info PPDB 2026'];
        }

        if (str_contains($q, 'mplb') || str_contains($q, 'kantor') || str_contains($q, 'administrasi')) {
            return ['Lab Perkantoran', 'Mitra Pelindo', 'Prospek Karir MPLB'];
        }

        if (str_contains($q, 'akl') || str_contains($q, 'akuntansi') || str_contains($q, 'keuangan')) {
            return ['Komputer Akuntansi MYOB', 'Mitra Bank Jatim', 'Peluang Kerja AKL'];
        }

        if (str_contains($q, 'lpb') || str_contains($q, 'bank') || str_contains($q, 'teller')) {
            return ['Mini Bank SMEXA', 'Peluang Kerja Teller', 'Syarat Masuk LPB'];
        }

        if (str_contains($q, 'mall') || str_contains($q, 'produk') || str_contains($q, 'beli')) {
            return ['Katalog SMEXAMALL', 'Produk Merchandise', 'Unit BLUD Sekolah'];
        }

        return ['Info PPDB 2026', '5 Jurusan Resmi', 'Katalog SMEXAMALL', 'Portal BKK'];
    }
}
