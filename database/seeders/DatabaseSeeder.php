<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
        ]);
        
        \App\Models\AboutPage::factory()->create([
            'image' => 'XNrCEOZyfFNVHfvJ6lefmECBZMDKQ4-metaYWJvdXRfYmFubmVyXzEuanBn-.jpg',
            'about' => '<p>Fly seed a it hath own light deep our meat land bearing won bring you two were together divide set kind stars firmament evning from forth seas let air whales which of gathering be sixth. Seed wont. Creature shed living said blessed. Rule plac also seasons was itself of for days subdue great own male itself</p><p>Fly seed a it hath own light deep our meat land bearing won bring you two were together divide set kind stars firmament evning from forth seas let air whales which of gathering be sixth. Seed wont. Creature shed living said blessed. Rule plac also seasons was itself of for days subdue great own male itself</p><p>Fly seed a it hath own light deep our meat land bearing won bring you two were together divide set kind stars firmament evning from forth seas let air whales which of gathering be sixth. Seed wont. Creature shed living said blessed. Rule plac also seasons was itself of for days subdue great own male itself</p><p>Fly seed a it hath own light deep our meat land bearing won bring you two were together divide set kind stars firmament evning from forth seas let air whales which of gathering be sixth. Seed wont. Creature shed living said blessed. Rule plac also seasons was itself of for days subdue great own male itself<p>',
        ]);

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            BankAccountSeeder::class,
        ]);

    }
}
