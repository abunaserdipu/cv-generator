<?php
namespace App\Services;

class LinkedinService
{
    public function fetchProfile(string $url): array
    {
        // Mocked LinkedIn data (Interview-safe)
        return [
            'name' => 'Abu Naser Dipu',
            'headline' => 'Full-Stack Developer | Laravel Developer',
            'location' => 'Dhaka, Bangladesh',
            'summary' => 'Passionate Full-Stack developer with experience in building scalable web applications.',
            'experience' => [
                [
                    'company' => 'Circle Technology',
                    'role' => 'Full-Stack Developer',
                    'duration' => '2023 - Present'
                ]
            ],
            'education' => [
                [
                    'institution' => 'XYZ University',
                    'degree' => 'BSc in Computer Science'
                ]
            ],
            'skills' => ['Laravel', 'PHP', 'MySQL', 'REST API']
        ];
    }
}