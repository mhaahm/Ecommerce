<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu1 = new Menu();
        $menu1->path = "dashboard1";
        $menu1->menu_name = "dashboard1";
        $menu1->keyword = "dashboard1";
        $menu1->description_menu = "Interface de dashboards";
        $menu1->save();
    }
}
