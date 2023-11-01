<?php

namespace Database\Seeders;

use App\Models\FooterSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $footersetting = new FooterSetting();
        $footersetting->company_brief = 'Web Development Company';
        $footersetting->facebook_url = 'https://www.facebook.com/';
        $footersetting->twitter_url = 'https://twitter.com/';
        $footersetting->instagram_url = 'https://www.instagram.com/';
        $footersetting->pinterest_url = 'https://www.pinterest.com/';
        $footersetting->linkedin_url = 'https://www.linkedin.com/';

        $footersetting->save();
    }
}
