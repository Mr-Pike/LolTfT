<?php

use App\Origin;
use Illuminate\Database\Seeder;

class OriginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all origins.
        DB::table('origins')->delete();

        // Fill origins.
        Origin::create(['name' => 'Démon', 'description' => "(2) Les auto attaques des Démons ont 40% de chance de brûler 20 points de mana à l'adversaire, et d'en gagner 15. <br />(4) Les auto attaques des Démons ont 40% de chance de brûler 20 points de mana à l'adversaire, et d'en gagner 30. <br />(6) Les auto attaques des Démons ont 40% de chance de brûler 20 points de mana à l'adversaire, et d'en gagner 45.", 'image' => 'demon.png']);
        Origin::create(['name' => 'Dragon', 'description' => "(2) Les Dragons ont 83% de résitance magique.", 'image' => 'dragon.png']);
        Origin::create(['name' => 'Exilé', 'description' => "(1) Si un Exilé n'a pas d'allié adjacent au début du combat, il gagne un bouclier égal à ses PV maximum. 	LoL Combat tactique guide origine", 'image' => 'exile.png']);
        Origin::create(['name' => 'Glacial', 'description' => "(2) Les auto attaques des Glacials ont 20% de chance d'étourdir pendant 2 secondes. <br /> (4) Les auto attaques des Glacials ont 30% de chance d'étourdir pendant 2 secondes. <br /> (6) Les auto attaques des Glacials ont 45% de chance d'étourdir pendant 2 secondes.", 'image' => 'glacial.png']);
        Origin::create(['name' => 'Hextech', 'description' => "(2) Lancez une bombe vers un champion adverse aléatoire équipé d'un objet pour désactiver tous ses objets et ceux des autres champions dans un rayon d'1 case (7 cases totales max). <br /> (4) Lancez une bombe vers un champion adverse aléatoire équipé d'un objet pour désactiver tous ses objets et ceux des autres champions dans un rayon de 2 cases (13 cases totales max).", 'image' => 'hextech.png']);
        Origin::create(['name' => 'Robot', 'description' => "(1) Les Robots commencent le combat avec leur jauge de Mana pleine.", 'image' => 'robot.png']);
        Origin::create(['name' => 'Impérial', 'description' => "(2) Dégâts doublés pour 1 Impérial aléatoire.<br />(4) Dégâts doublés pour tous les Impériaux.", 'image' => 'imperial.png']);
        Origin::create(['name' => 'Noble', 'description' => "(3) +50 Armure, +50 résistance magique et 25 PV récupérés à chaque auto attaque pour 1 allié aléatoire.<br />(3) +50 Armure, +50 résistance magique et 25 PV récupérés à chaque auto attaque pour 1 allié aléatoire.", 'image' => 'noble.png']);
        Origin::create(['name' => 'Ninja', 'description' => "(1) Si vous avez exactement 1 Ninja, il gagne 50 de dégâts d'attaque et 50% de dégâts magiques.<br />(4) Si vous avez exactement 4 Ninjas, ils gagnent tous 70 de dégâts d'attaque et 70% de dégâts magiques.", 'image' => 'ninja.png']);
        Origin::create(['name' => 'Pirate', 'description' => "(3) Vous gagnez entre 0 et 4 pièces d'or supplémentaires à la fin de chaque combat contre un autre joueur.", 'image' => 'pirate.png']);
        Origin::create(['name' => 'Fantôme', 'description' => "(2) Au début du combat, maudit un adversaire aléatoire dont les PV maximum passent à 100.", 'image' => 'phantom.png']);
        Origin::create(['name' => 'Sauvage', 'description' => "(2) Les auto attaques des Sauvages génèrent des charges de Furie (jusqu'à 5). Chaque charge de Furie augmente leur Vitesse d'attaque de 12%.<br />(4) Les auto attaques de chaque allié génèrent des charges de Furie (jusqu'à 5). Chaque charge de Furie augmente leur Vitesse d'attaque de 12%.", 'image' => 'wild.png']);
        Origin::create(['name' => 'Néant', 'description' => "(3) Les champions du Néant infligent des dégâts purs.", 'image' => 'void.png']);
        Origin::create(['name' => 'Yordle', 'description' => "(3) Les auto attaques contre les Yordles alliés ont 35% de chance de rater.<br />(6) Les auto attaques contre les Yordles alliés ont 60% de chance de rater.", 'image' => 'yordle.png']);
    }
}
