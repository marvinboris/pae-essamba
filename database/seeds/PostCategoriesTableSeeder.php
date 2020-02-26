<?php

use App\PostCategory;
use Illuminate\Database\Seeder;

class PostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PostCategory::create([
            'name_en' => 'Reports',
            'name_fr' => 'Rapports',
            'link' => 'reports'
        ]);

        PostCategory::create([
            'name_en' => 'Articles',
            'name_fr' => 'Articles',
            'link' => 'articles'
        ]);

        PostCategory::create([
            'name_en' => 'Echo Essamba',
            'name_fr' => 'Echo Essamba',
            'link' => 'essamba-echo'
        ]);

        PostCategory::create([
            'name_en' => 'Annual Procedure',
            'name_fr' => 'Procédure Annuelle',
            'link' => 'procedure'
        ]);
    }
}
