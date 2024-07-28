<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Linards',
            'email' => 'linards@linards.com',
        ]);

        Link::factory()->create([
            'long_url' => 'https://github.com/llinards/saisini',
            'short_url' => 'http://saisini.test/saisini_github',
        ]);
    }
}
