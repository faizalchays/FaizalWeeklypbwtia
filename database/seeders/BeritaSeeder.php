<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beritas = [
            [
                'judul' => 'mbg mas burhan gunawan',
                'slug' => 'mbg-mas-burhan-gunawan',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut aliquam lacinia, nunc nisl aliquam nunc, eget aliquam nisl nunc vel nisl.',
                'tanggal' => '2024-06-01',
            ],
            [
                'judul' => 'Indonesia juara asean',
                'slug' => 'indonesia-juara-asean',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut aliquam lacinia, nunc nisl aliquam nunc, eget aliquam nisl nunc vel nisl.',
                'tanggal' => '2024-06-02',
            ],
            [
                'judul' => 'Berita 3',
                'slug' => 'berita-3',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut aliquam lacinia, nunc nisl aliquam nunc, eget aliquam nisl nunc vel nisl.',
                'tanggal' => '2024-06-03',
            ],
        ];

        foreach ($beritas as $berita) {
            Berita::query()->updateOrCreate(
                ['slug' => $berita['slug']],
                $berita,
            );
        }
    }
}
