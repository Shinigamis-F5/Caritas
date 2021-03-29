<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create();
        \App\Models\Role::factory()->create();
        // \App\Models\Profile::factory()->create();
        // \App\Models\ContentSection::factory(3)->create();
        // \App\Models\Language::factory(1)->create();

        $this->call([
            ContentSectionSeeder::class,
        ]);

        $this->call([
            LanguageSeeder::class,
        ]);
    }
}
