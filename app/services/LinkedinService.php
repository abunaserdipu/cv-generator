<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class LinkedinService
{
    public function fetchProfile(string $linkedinUrl): array
    {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.proxycurl.key'),
        ])->get('https://enrichlayer.com/api/v2/profile', [
                    'url' => $linkedinUrl,
                ]);

        if ($response->failed()) {
            throw new \Exception('Unable to fetch LinkedIn data');
        }

        $data = $response->json();

        return [
            'name' => $data['full_name'] ?? '',
            'headline' => $data['headline'] ?? '',
            'location' => $data['location']['country'] ?? '',
            'summary' => $data['summary'] ?? '',
            'experience' => collect($data['experiences'] ?? [])->map(function ($exp) {
                return [
                    'company' => $exp['company'] ?? '',
                    'role' => $exp['title'] ?? '',
                    'duration' => ($exp['starts_at']['year'] ?? '') . ' - ' . ($exp['ends_at']['year'] ?? 'Present'),
                ];
            })->toArray(),
            'education' => collect($data['education'] ?? [])->map(function ($edu) {
                return [
                    'institution' => $edu['school'] ?? '',
                    'degree' => $edu['degree_name'] ?? '',
                ];
            })->toArray(),
            'skills' => $data['skills'] ?? [],
        ];

        // Mocked LinkedIn data (Interview-safe)
        // return [
        //     'name' => 'Abu Naser Dipu',
        //     'headline' => 'Full-Stack Developer | Laravel Developer',
        //     'location' => 'Dhaka, Bangladesh',
        //     'summary' => 'Passionate Full-Stack developer with experience in building scalable web applications.',
        //     'experience' => [
        //         [
        //             'company' => 'Circle Technology',
        //             'role' => 'Full-Stack Developer',
        //             'duration' => '2023 - Present'
        //         ]
        //     ],
        //     'education' => [
        //         [
        //             'institution' => 'XYZ University',
        //             'degree' => 'BSc in Computer Science'
        //         ]
        //     ],
        //     'skills' => ['Laravel', 'PHP', 'MySQL', 'REST API']
        // ];
    }
}