<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'is_revisor' => true,
        ],);

        $categories = ['Motori', 'Abbigliamento', 'Arredamento', 'Tecnologia', 'Musica', 'Attrezzatura', 'Sport', 'Film'];

        foreach($categories as $category){
            Category::create([
                'name'=>$category,
            ]);
        }
    }

   

}
