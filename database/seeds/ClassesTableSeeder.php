<?php

use Illuminate\Database\Seeder;
use App\Classs;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all classes.
        DB::table('classes')->delete();

        // Fill classes.
        Classs::create(['name' => 'Assassin', 'description' => "(3) → Les Assassins gagnent + 75 % aux dégâts des coups critiques & 10 % de chances d'infliger un coup critique. (6) → Les Assassins gagnent + 150 % aux dégâts des coups critiques & 25 % de chances d'infliger un coup critique.", 'image' => 'assassin.png']);
        Classs::create(['name' => 'Maître-lame', 'description' => "(3) → A chaque attaque, les Maîtres-lame ont 35 % de chance d'avoir 1 attaque additionnelle. (6) → A chaque attaque, les Maîtres-lame ont 35 % de chance d'avoir 2 attaques additionnelles. (9) → A chaque attaque, les Maîtres-lame ont 35 % de chance d'avoir 4 attaques additionnelles.", 'image' => 'blademaster.png']);
        Classs::create(['name' => 'Bagarreur', 'description' => "(2) → Les Combattants ont + 250 PV (4) → Les Combattants ont + 500 PV (6) → Les Combattants ont + 900 PV", 'image' => 'brawler.png']);
        Classs::create(['name' => 'Elémentaliste', 'description' => "(3) → Au début d'un round, invoque un Elémentaire PV : 2200 Dégâts : 100", 'image' => 'elementalist.png']);
        Classs::create(['name' => 'Gardien', 'description' => "(2) → Au début du combat, les alliés adjacents gagnent 35 d'Armure par Gardien. Ceux-ci ne se buffent pas.", 'image' => 'guardian.png']);
        Classs::create(['name' => 'Pistolero', 'description' => "(2) → Après avoir attaqué, les Pistoleros ont 50 % de chances de faire des dégâts additionnels sur un ennemi aléatoire. (4) → Après avoir attaqué, les Pistoleros ont 50 % de chances de faire des dégâts additionnels sur 2 ennemis aléatoires. (6) → Après avoir attaqué, les Pistoleros ont 50 % de chances de faire des dégâts additionnels sur 3 ennemis aléatoires.", 'image' => 'gunslinger.png']);
        Classs::create(['name' => 'Chevalier', 'description' => "(2) → Les alliés ignorent 15 dégâts par attaque. (4) →Les alliés ignorent 30 dégâts par attaque. (6) → Les alliés ignorent 55 dégâts par attaque.", 'image' => 'knight.png']);
        Classs::create(['name' => 'Rôdeur', 'description' => "(2) → Toutes les 3s, les Rangers ont 30 % de chances de doubler leur vitesse d'attaque pendant 3s. (4) → Toutes les 3s, les Rangers ont 70 % de chances de doubler leur vitesse d'attaque pendant 3s.", 'image' => 'ranger.png']);
        Classs::create(['name' => 'Métamorphe', 'description' => "((3) → Les Métamorphes gagnent 60 % de PV maximum lorsqu'ils se transforment. (6) → Les Métamorphes gagnent 120 % de PV maximum lorsqu'ils se transforment.", 'image' => 'shapeshifter.png']);
        Classs::create(['name' => 'Sorcier', 'description' => "(3) → Les Sorciers doublent le mana gagné par attaque et gagnent +40 % au spell power (6) → Les Sorciers doublent le mana gagné par attaque et gagnent +100 % au spell power", 'image' => 'sorcerer.png']);
    }
}
