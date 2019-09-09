<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all items.
        DB::table('items')->delete();

        // Fill items.
        // Base items.
        Item::create(['name' => 'BF Glaive', 'description' => "+20 Dégâts d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'BFSword.png', 'enabled' => true]); // 1.
        Item::create(['name' => 'Manteau de Négatron', 'description' => '+20 Résistance magique', 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'NegatronCloak.png', 'enabled' => true]); // 2.
        Item::create(['name' => 'Larme de la Déesse', 'description' => '+20 Mana de base', 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'TearoftheGoddess.png', 'enabled' => true]); // 3.
        Item::create(['name' => 'Ceinture du Géant', 'description' => '+200 points de vie', 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'GiantsBelt.png', 'enabled' => true]); // 4.
        Item::create(['name' => 'Baguette Trop Grosse', 'description' => '+20 % de dégâts des sorts', 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'NeedlesslyLargeRod.png', 'enabled' => true]); // 5.
        Item::create(['name' => 'Arc Courbe', 'description' => "+15% de vitesse d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'RecurveBow.png', 'enabled' => true]); // 6.
        Item::create(['name' => 'Cotte de Mailles', 'description' => '+20 amure', 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'ChainVest.png', 'enabled' => true]); // 7.
        Item::create(['name' => 'Spatule', 'description' => 'Il doit bien servir à quelque chose...', 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'Spatula.png', 'enabled' => true]); // 8.
        Item::create(['name' => "Gant d'entraînement", 'description' => "+ 10 % esquive <br /> + 10 % chance d'infliger un coup critique", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'notavailable.png', 'enabled' => false]); // 9.

        // Combined items.
        Item::create(['name' => "Force de la nature", 'description' => "Poser une unité supplémentaire", 'item1_id' => 8, 'item2_id' => 8, 'image' => 'ForceofNature.png', 'enabled' => true]);
        Item::create(['name' => "Cœur gelé", 'description' => "Les ennemis adjacents attaquent 20 % moins vite", 'item1_id' => 3, 'item2_id' => 7, 'image' => 'FrozenHeart.png', 'enabled' => true]);
        Item::create(['name' => "Lame d'infini", 'description' => "Les dégâts des coups critiques sont augmzentés de 100 %", 'item1_id' => 1, 'item2_id' => 1, 'image' => 'InfinityEdge.png', 'enabled' => true]);
        Item::create(['name' => "Étincelle Ionique", 'description' => "Lorsqu'un ennemi envoie un sort, il subit 125 de dégâts bruts", 'item1_id' => 2, 'item2_id' => 5, 'image' => 'IonicSpark.png', 'enabled' => true]);
        Item::create(['name' => "Médaillon de l'Iron Solari", 'description' => "Au début du combat, 2 alliés à droite et à gauche obtiennent un bouclier de 250 pendant 6 secondes", 'item1_id' => 5, 'item2_id' => 7, 'image' => 'LocketoftheIronSolari.png', 'enabled' => true]);
        Item::create(['name' => "Écho de Luden", 'description' => "Quand le porteur inflige des dégâts avec son sort, la première cible touchée et jusqu'à 3.0 ennemis proches subissent 180.0 pts de dégâts magiques supplémentaires", 'item1_id' => 3, 'item2_id' => 5, 'image' => 'LudensEcho.png', 'enabled' => true]);
        Item::create(['name' => "Danseur fantôme", 'description' => "Evite tous les coups critiques", 'item1_id' => 6, 'item2_id' => 7, 'image' => 'PhantomDancer.png', 'enabled' => true]);
        Item::create(['name' => "Coiffe de Rabadon", 'description' => "Augmente les dégâts magiques du porteur de 50 %", 'item1_id' => 5, 'item2_id' => 5, 'image' => 'RabadonsDeathcap.png', 'enabled' => true]);
        Item::create(['name' => "Canon Ultrarapide", 'description' => "Double la portée. Les attaques ne peuvent pas rater", 'item1_id' => 6, 'item2_id' => 6, 'image' => 'RapidFirecannon.png', 'enabled' => true]);
        Item::create(['name' => "Rédemption", 'description' => "A la mort, soigne les alliés proches de 1000 PV", 'item1_id' => 3, 'item2_id' => 4, 'image' => 'Redemption.png', 'enabled' => true]);
        Item::create(['name' => "Ouragan de Runaan", 'description' => "Attaque deux ennemis supplémentaires en leur infligeant 50 % des dégâts", 'item1_id' => 2, 'item2_id' => 8, 'image' => 'RunaansHurricane.png', 'enabled' => true]);
        Item::create(['name' => "Étreinte du Séraphin", 'description' => "Regénère 20 % du mana après l'utilisation d'un sort", 'item1_id' => 3, 'item2_id' => 3, 'image' => 'SeraphsEmbrace.png', 'enabled' => true]);
        Item::create(['name' => "Lance de Shojin", 'description' => "Après une compétence, regénère 15 % du mana maximum restant par attaque", 'item1_id' => 1, 'item2_id' => 3, 'image' => 'SpearofShojin.png', 'enabled' => true]);
        Item::create(['name' => "Poignard de Statikk", 'description' => "Toutes les attaques, 100 points supplémentaires", 'item1_id' => 3, 'item2_id' => 6, 'image' => 'StatikkShiv.png', 'enabled' => true]);
        Item::create(['name' => "Épée du Divin", 'description' => "5% de chance chaque seconde d'avoir 100% de critique", 'item1_id' => 1, 'item2_id' => 6, 'image' => 'SwordoftheDivine.png', 'enabled' => true]);
        Item::create(['name' => "Soif de Sang", 'description' => "50% de vol de vie", 'item1_id' => 1, 'item2_id' => 2, 'image' => 'Bloodthirster.png', 'enabled' => true]);
        Item::create(['name' => "Cotte Épineuse", 'description' => "Renvoie 100 % des dégâts mitigés en dégâts bruts", 'item1_id' => 7, 'item2_id' => 7, 'image' => 'Thornmail.png', 'enabled' => true]);
        Item::create(['name' => "Hydre titanesque", 'description' => "Les attaques infligent 10% des PV max de dégâts éparpillés", 'item1_id' => 4, 'item2_id' => 6, 'image' => 'TitanicHydra.png', 'enabled' => true]);
        Item::create(['name' => "Warmog, armure vivante", 'description' => "Régénère 3 % des PV par seconde", 'item1_id' => 4, 'item2_id' => 4, 'image' => 'WarmogsArmor.png', 'enabled' => true]);
        Item::create(['name' => "Lame spectre de Youmuu", 'description' => "Le porteur devient un Assassin", 'item1_id' => 1, 'item2_id' => 8, 'image' => 'YoumuusGhostblade.png', 'enabled' => true]);
        Item::create(['name' => "Yuumi", 'description' => "Le porteur devient un Sorcier", 'item1_id' => 5, 'item2_id' => 8, 'image' => 'Yuumi.png', 'enabled' => true]);
        Item::create(['name' => "Convergence de Zeke", 'description' => "Les alliés sur deux cases à la gauche et à la droite du porteur gagnent +15 % de Vitesse d'Attaque", 'item1_id' => 1, 'item2_id' => 4, 'image' => 'ZekesHerald.png', 'enabled' => true]);
        Item::create(['name' => "Zephyr", 'description' => "Banni un ennemi pendant 5 secondes au début du combat", 'item1_id' => 1, 'item2_id' => 2, 'image' => 'Zephyr.png', 'enabled' => true]);
        Item::create(['name' => "Epée maudite", 'description' => "20% de chance de réduire le niveau d'un champion de 1 étoile", 'item1_id' => 2, 'item2_id' => 6, 'image' => 'CursedBlade.png', 'enabled' => true]);
        Item::create(['name' => "Griffe du Dragon", 'description' => "83% de résistance magique", 'item1_id' => 2, 'item2_id' => 2, 'image' => 'DragonsClaw.png', 'enabled' => true]);
        Item::create(['name' => "Silence", 'description' => "Fortes chances de réduire au silence à chaque attaque", 'item1_id' => 2, 'item2_id' => 3, 'image' => 'Hush.png', 'enabled' => true]);
        Item::create(['name' => "Briseur d'épée", 'description' => "Les attaques du porteur ont une chance de désarmer", 'item1_id' => 2, 'item2_id' => 7, 'image' => 'SwordBreaker.png', 'enabled' => true]);
        Item::create(['name' => "Darkin", 'description' => "Le porteur devient un Démon", 'item1_id' => 3, 'item2_id' => 8, 'image' => 'Darkin.png', 'enabled' => true]);
        Item::create(['name' => "Buff rouge", 'description' => "Les attaques brulent à hauteur de 2,5% des PV Max. Les victimes ne peuvent plus se soigner", 'item1_id' => 4, 'item2_id' => 7, 'image' => 'RedBuff.png', 'enabled' => true]);
        Item::create(['name' => "Pistolame Hextech", 'description' => "Soigne de 25% des dégâts infligés", 'item1_id' => 1, 'item2_id' => 5, 'image' => 'HextechGunblade.png', 'enabled' => true]);
        Item::create(['name' => "Morellonomicon", 'description' => "Les sorts brûlent 5 % des PV maximums de la cible par seconde. Empêche les cibles de se soigner.", 'item1_id' => 4, 'item2_id' => 5, 'image' => 'Morellonomicon.png', 'enabled' => true]);
        Item::create(['name' => "Lame enragée de Guinsoo", 'description' => "Gagne 4 % de vitesse d'attaque. Se cumule à l'infini.", 'item1_id' => 5, 'item2_id' => 6, 'image' => 'GuinsoosRageblade.png', 'enabled' => true]);
        Item::create(['name' => "Ange gardien", 'description' => "Le porteur revient à la vie avec 1000 PV, deux secondes après sa mort", 'item1_id' => 1, 'item2_id' => 7, 'image' => 'GuardianAngel.png', 'enabled' => true]);
        Item::create(['name' => "Vœu du chevalier", 'description' => "Le porteur devient un Chevalier", 'item1_id' => 7, 'item2_id' => 8, 'image' => 'KnightsVow.png', 'enabled' => true]);
        Item::create(['name' => "Maillet gelé", 'description' => "Le porteur devient un Glacial", 'item1_id' => 4, 'item2_id' => 8, 'image' => 'FrozenMallet.png', 'enabled' => true]);
        Item::create(['name' => "Lame du roi déchu", 'description' => "Le porteur devient un Maitre-lame", 'item1_id' => 6, 'item2_id' => 8, 'image' => 'BladeoftheRuinedKing.png', 'enabled' => true]);
        // Item::create(['name' => "Gants de voleur", 'description' => "+20 Dégâts d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => '.png', 'enabled' => true]);
        // Item::create(['name' => "Main de la justice", 'description' => "+20 Dégâts d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => '.png', 'enabled' => true]);
        // Item::create(['name' => "Lame d'infini", 'description' => "+20 Dégâts d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => '.png', 'enabled' => true]);
        // Item::create(['name' => "Gantelet des arcanes", 'description' => "+20 Dégâts d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => '.png', 'enabled' => true]);
        // Item::create(['name' => "Mercure", 'description' => "+20 Dégâts d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => '.png', 'enabled' => true]);
        // Item::create(['name' => "Gantelet givrant", 'description' => "+20 Dégâts d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => '.png', 'enabled' => true]);
        // Item::create(['name' => "Revers", 'description' => "+20 Dégâts d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => '.png', 'enabled' => true]);
        // Item::create(['name' => "Arbalète à répétition", 'description' => "+20 Dégâts d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => '.png', 'enabled' => true]);
        // Item::create(['name' => "Moufles", 'description' => "+20 Dégâts d'attaque", 'item1_id' => NULL, 'item2_id' => NULL, 'image' => '.png', 'enabled' => true]);
    }
}
