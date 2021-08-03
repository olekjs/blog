<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = collect([
            ['iso639_2_code' => 'pol', 'iso639_1_code' => 'PL', 'name' => 'Polski'],
            ['iso639_2_code' => 'eng', 'iso639_1_code' => 'EN', 'name' => 'Angielski'],
        ]);

        $languages->each(function ($language) {
            Language::firstOrCreate($language);
        });
    }
}
