<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    public function run(): void
    {
        Work::create([
            'title' => 'Portfolioサイト',
            'summary' => 'AstroとLaravelで作成したポートフォリオサイト',
        ]);
    }
}
