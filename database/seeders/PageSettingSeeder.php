<?php

namespace Database\Seeders;

use App\Models\PageSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pageSetting = new PageSetting();
        $pageSetting->logo = 'Logo Here';
        $pageSetting->banner_title = 'It Software & Design';
        $pageSetting->banner_heading = 'Leading It & Software';
        $pageSetting->banner_bief = 'Development Company in Bangladesh';
        $pageSetting->happy_clients = 40;
        $pageSetting->experience = 2;
        $pageSetting->products = 15;
        $pageSetting->team_mumbers=15;
        $pageSetting->company_address = 'Mohammadpur, Dhaka-1207';
        $pageSetting->company_email = 'hello.creativesoft@gmail.com';
        $pageSetting->company_contact = '+880 1605-637070';
        $pageSetting->working_hour_start='9:00am';
        $pageSetting->working_hour_end = '6:00pm';

        $pageSetting->save();


    }
}
