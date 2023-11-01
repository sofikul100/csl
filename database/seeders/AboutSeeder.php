<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about = new About();
        $about->heading = 'Web Base Company';
        $about->content = 'hfjkfhjksf fksdjkfsjkf skfsjkfjksf sfjsdjkf';
        $about->save();
    }
}
