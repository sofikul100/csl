<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = new Contact();
        $contacts->name = 'Tuhin';
        $contacts->email = 'tuhin@gmail.com';
        $contacts->contact = '01521310761';
        $contacts->website = 'https://www.creativesoftltd.com/';
        $contacts->content = 'Web_Development';

        $contacts->save();

    }
}
