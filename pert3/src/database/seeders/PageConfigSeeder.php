<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageConfig;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PageConfig::create([
            'title' => 'Umam',
            'detail' => 'cinta damai bukan berarti tidak pandai berperang',
            'image' => ''
        ]);
    }
}
