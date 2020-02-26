<?php

use App\NavItem;
use Illuminate\Database\Seeder;

class NavItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        NavItem::create([
            'title_en' => 'Home',
            'title_fr' => 'Accueil'
        ]);

        NavItem::create([
            'title_en' => 'Pae Essamba',
            'title_fr' => 'Pae Essamba'
        ]);

        NavItem::create([
            'title_en' => 'Posts',
            'title_fr' => 'Posts'
        ]);

        NavItem::create([
            'title_en' => 'News',
            'title_fr' => 'Actualités'
        ]);

        NavItem::create([
            'title_en' => 'Pae Events',
            'title_fr' => 'Evènements Pae'
        ]);

        NavItem::create([
            'title_en' => 'Contacts',
            'title_fr' => 'Contacts'
        ]);
    }
}
