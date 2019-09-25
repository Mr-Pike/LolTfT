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
        Item::create(['id' => 1, 'name' => 'BF Glaive', 'description' => "+20 Dégâts d'attaque", 'tier_id' => NULL, 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'BFSword.png', 'enabled' => true]); // 1.
        Item::create(['id' => 2, 'name' => 'Manteau de Négatron', 'description' => '+20 Résistance magique', 'tier_id' => NULL, 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'NegatronCloak.png', 'enabled' => true]); // 2.
        Item::create(['id' => 3, 'name' => 'Larme de la Déesse', 'description' => '+20 Mana de base', 'tier_id' => NULL, 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'TearoftheGoddess.png', 'enabled' => true]); // 3.
        Item::create(['id' => 4, 'name' => 'Ceinture du Géant', 'description' => '+200 points de vie', 'tier_id' => NULL, 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'GiantsBelt.png', 'enabled' => true]); // 4.
        Item::create(['id' => 5, 'name' => 'Baguette Trop Grosse', 'description' => '+20 % de dégâts des sorts', 'tier_id' => NULL, 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'NeedlesslyLargeRod.png', 'enabled' => true]); // 5.
        Item::create(['id' => 6, 'name' => 'Arc Courbe', 'description' => "+15% de vitesse d'attaque", 'tier_id' => NULL, 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'RecurveBow.png', 'enabled' => true]); // 6.
        Item::create(['id' => 7, 'name' => 'Cotte de Mailles', 'description' => '+20 amure', 'tier_id' => NULL, 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'ChainVest.png', 'enabled' => true]); // 7.
        Item::create(['id' => 8, 'name' => 'Spatule', 'description' => 'Il doit bien servir à quelque chose...', 'tier_id' => NULL, 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'Spatula.png', 'enabled' => true]); // 8.
        Item::create(['id' => 9, 'name' => "Gant d'entraînement", 'description' => "+ 10 % esquive <br /> + 10 % de chances de coup critique", 'tier_id' => NULL, 'item1_id' => NULL, 'item2_id' => NULL, 'image' => 'SparringGloves.png', 'enabled' => true]); // 9.

        // Combined items.
        Item::create(['id' => 10, 'name' => "Force de la nature", 'description' => "Poser une unité supplémentaire", 'tier_id' => 1, 'item1_id' => 8, 'item2_id' => 8, 'image' => 'ForceofNature.png', 'enabled' => true]);
        Item::create(['id' => 11, 'name' => "Cœur gelé", 'description' => "Les ennemis adjacents attaquent 20 % moins vite", 'tier_id' => 4, 'item1_id' => 3, 'item2_id' => 7, 'image' => 'FrozenHeart.png', 'enabled' => true]);
        Item::create(['id' => 12, 'name' => "Lame d'infini", 'description' => "Les dégâts des coups critiques sont augmentés de 150 %", 'tier_id' => 3, 'item1_id' => 9, 'item2_id' => 1, 'image' => 'InfinityEdge.png', 'enabled' => true]);
        Item::create(['id' => 13, 'name' => "Étincelle Ionique", 'description' => "Lorsqu'un ennemi envoie un sort, il subit 125 de dégâts bruts", 'tier_id' => 5, 'item1_id' => 2, 'item2_id' => 5, 'image' => 'IonicSpark.png', 'enabled' => true]);
        Item::create(['id' => 14, 'name' => "Médaillon de l'Iron Solari", 'description' => "Au début du combat, 2 alliés à droite et à gauche obtiennent un bouclier de 250 pendant 6 secondes", 'tier_id' => 4, 'item1_id' => 5, 'item2_id' => 7, 'image' => 'LocketoftheIronSolari.png', 'enabled' => true]);
        Item::create(['id' => 15, 'name' => "Écho de Luden", 'description' => "Quand le porteur inflige des dégâts avec son sort, la première cible touchée et jusqu'à 3.0 ennemis proches subissent 180.0 pts de dégâts magiques supplémentaires", 'tier_id' => 3, 'item1_id' => 3, 'item2_id' => 5, 'image' => 'LudensEcho.png', 'enabled' => true]);
        Item::create(['id' => 16, 'name' => "Danseur fantôme", 'description' => "Evite tous les coups critiques", 'tier_id' => 3, 'item1_id' => 6, 'item2_id' => 7, 'image' => 'PhantomDancer.png', 'enabled' => true]);
        Item::create(['id' => 17, 'name' => "Coiffe de Rabadon", 'description' => "Augmente les dégâts magiques du porteur de 50 %", 'tier_id' => 3, 'item1_id' => 5, 'item2_id' => 5, 'image' => 'RabadonsDeathcap.png', 'enabled' => true]);
        Item::create(['id' => 18, 'name' => "Canon Ultrarapide", 'description' => "Double la portée. Les attaques ne peuvent pas rater", 'tier_id' => 1, 'item1_id' => 6, 'item2_id' => 6, 'image' => 'RapidFirecannon.png', 'enabled' => true]);
        Item::create(['id' => 19, 'name' => "Rédemption", 'description' => "A la mort, soigne les alliés proches de 1000 PV", 'tier_id' => 3, 'item1_id' => 3, 'item2_id' => 4, 'image' => 'Redemption.png', 'enabled' => true]);
        Item::create(['id' => 20, 'name' => "Ouragan de Runaan", 'description' => "Attaque deux ennemis supplémentaires en leur infligeant 50 % des dégâts", 'tier_id' => 1, 'item1_id' => 2, 'item2_id' => 8, 'image' => 'RunaansHurricane.png', 'enabled' => true]);
        Item::create(['id' => 21, 'name' => "Étreinte du Séraphin", 'description' => "Regénère 20 % du mana après l'utilisation d'un sort", 'tier_id' => 2, 'item1_id' => 3, 'item2_id' => 3, 'image' => 'SeraphsEmbrace.png', 'enabled' => true]);
        Item::create(['id' => 22, 'name' => "Lance de Shojin", 'description' => "Après une compétence, regénère 15 % du mana maximum restant par attaque", 'tier_id' => 3, 'item1_id' => 1, 'item2_id' => 3, 'image' => 'SpearofShojin.png', 'enabled' => true]);
        Item::create(['id' => 23, 'name' => "Poignard de Statikk", 'description' => "Toutes les attaques, 100 points supplémentaires", 'tier_id' => 3, 'item1_id' => 3, 'item2_id' => 6, 'image' => 'StatikkShiv.png', 'enabled' => true]);
        Item::create(['id' => 24, 'name' => "Tueur de géants", 'description' => "inflige des dégâts bruts équivalents à 5 % des PV max de la cible", 'tier_id' => 3, 'item1_id' => 1, 'item2_id' => 6, 'image' => 'GiantSlayer.png', 'enabled' => true]);
        Item::create(['id' => 25, 'name' => "Soif de Sang", 'description' => "50% de vol de vie", 'tier_id' => 2, 'item1_id' => 1, 'item2_id' => 2, 'image' => 'Bloodthirster.png', 'enabled' => true]);
        Item::create(['id' => 26, 'name' => "Cotte Épineuse", 'description' => "Renvoie 100 % des dégâts mitigés en dégâts bruts", 'tier_id' => 5, 'item1_id' => 7, 'item2_id' => 7, 'image' => 'Thornmail.png', 'enabled' => true]);
        Item::create(['id' => 27, 'name' => "Hydre titanesque", 'description' => "Les attaques infligent 10% des PV max de dégâts éparpillés", 'tier_id' => 4, 'item1_id' => 4, 'item2_id' => 6, 'image' => 'TitanicHydra.png', 'enabled' => true]);
        Item::create(['id' => 28, 'name' => "Warmog, armure vivante", 'description' => "Régénère 3 % des PV par seconde", 'tier_id' => 2, 'item1_id' => 4, 'item2_id' => 4, 'image' => 'WarmogsArmor.png', 'enabled' => true]);
        Item::create(['id' => 29, 'name' => "Lame spectre de Youmuu", 'description' => "Le porteur devient un Assassin", 'tier_id' => 7, 'item1_id' => 1, 'item2_id' => 8, 'image' => 'YoumuusGhostblade.png', 'enabled' => true]);
        Item::create(['id' => 30, 'name' => "Yuumi", 'description' => "Le porteur devient un Sorcier", 'tier_id' => 7, 'item1_id' => 5, 'item2_id' => 8, 'image' => 'Yuumi.png', 'enabled' => true]);
        Item::create(['id' => 31, 'name' => "Convergence de Zeke", 'description' => "Les alliés sur deux cases à la gauche et à la droite du porteur gagnent +15 % de Vitesse d'Attaque", 'tier_id' => 4, 'item1_id' => 1, 'item2_id' => 4, 'image' => 'ZekesHerald.png', 'enabled' => true]);
        Item::create(['id' => 32, 'name' => "Zéphyr", 'description' => "Banni un ennemi pendant 5 secondes au début du combat", 'tier_id' => 4, 'item1_id' => 2, 'item2_id' => 4, 'image' => 'Zephyr.png', 'enabled' => true]);
        Item::create(['id' => 33, 'name' => "Epée maudite", 'description' => "20% de chance de réduire le niveau d'un champion de 1 étoile", 'tier_id' => 4, 'item1_id' => 2, 'item2_id' => 6, 'image' => 'CursedBlade.png', 'enabled' => true]);
        Item::create(['id' => 34, 'name' => "Griffe du Dragon", 'description' => "75% de résistance magique", 'tier_id' => 1, 'item1_id' => 2, 'item2_id' => 2, 'image' => 'DragonsClaw.png', 'enabled' => true]);
        Item::create(['id' => 35, 'name' => "Silence", 'description' => "Fortes chances de réduire au silence à chaque attaque", 'tier_id' => 2, 'item1_id' => 2, 'item2_id' => 3, 'image' => 'Hush.png', 'enabled' => true]);
        Item::create(['id' => 36, 'name' => "Briseur d'épée", 'description' => "Les attaques du porteur ont une chance de désarmer", 'tier_id' => 3, 'item1_id' => 2, 'item2_id' => 7, 'image' => 'SwordBreaker.png', 'enabled' => true]);
        Item::create(['id' => 37, 'name' => "Darkin", 'description' => "Le porteur devient un Démon", 'tier_id' => 3, 'item1_id' => 3, 'item2_id' => 8, 'image' => 'Darkin.png', 'enabled' => true]);
        Item::create(['id' => 38, 'name' => "Buff rouge", 'description' => "Les attaques brulent à hauteur de 2,5% des PV Max. Les victimes ne peuvent plus se soigner", 'tier_id' => 2, 'item1_id' => 4, 'item2_id' => 7, 'image' => 'RedBuff.png', 'enabled' => true]);
        Item::create(['id' => 39, 'name' => "Pistolame Hextech", 'description' => "Soigne de 25% des dégâts infligés", 'tier_id' => 2, 'item1_id' => 1, 'item2_id' => 5, 'image' => 'HextechGunblade.png', 'enabled' => true]);
        Item::create(['id' => 40, 'name' => "Morellonomicon", 'description' => "Les sorts brûlent 5 % des PV maximums de la cible par seconde. Empêche les cibles de se soigner.", 'tier_id' => 1, 'item1_id' => 4, 'item2_id' => 5, 'image' => 'Morellonomicon.png', 'enabled' => true]);
        Item::create(['id' => 41, 'name' => "Lame enragée de Guinsoo", 'description' => "Gagne 4 % de vitesse d'attaque. Se cumule à l'infini.", 'tier_id' => 1, 'item1_id' => 5, 'item2_id' => 6, 'image' => 'GuinsoosRageblade.png', 'enabled' => true]);
        Item::create(['id' => 42, 'name' => "Ange gardien", 'description' => "Le porteur revient à la vie avec 1000 PV, deux secondes après sa mort", 'tier_id' => 1, 'item1_id' => 1, 'item2_id' => 7, 'image' => 'GuardianAngel.png', 'enabled' => true]);
        Item::create(['id' => 43, 'name' => "Vœu du chevalier", 'description' => "Le porteur devient un Chevalier", 'tier_id' => 7, 'item1_id' => 7, 'item2_id' => 8, 'image' => 'KnightsVow.png', 'enabled' => true]);
        Item::create(['id' => 44, 'name' => "Maillet gelé", 'description' => "Le porteur devient un Glacial", 'tier_id' => 7, 'item1_id' => 4, 'item2_id' => 8, 'image' => 'FrozenMallet.png', 'enabled' => true]);
        Item::create(['id' => 45, 'name' => "Lame du roi déchu", 'description' => "Le porteur devient un Maitre-lame", 'tier_id' => 7, 'item1_id' => 6, 'item2_id' => 8, 'image' => 'BladeoftheRuinedKing.png', 'enabled' => true]);
        Item::create(['id' => 46, 'name' => "Gants de voleur", 'description' => "Au début de la manche, vous gagnez deux objets temporaires", 'tier_id' => 2, 'item1_id' => 9, 'item2_id' => 9, 'image' => 'ThiefsGloves.png', 'enabled' => true]);
        Item::create(['id' => 47, 'name' => "Main de la justice", 'description' => "Le porteur gagne de manière aléatoire 40 % de dégâts en plus ou 40 PV à l'impact.", 'tier_id' => 4, 'item1_id' => 9, 'item2_id' => 3, 'image' => 'HandOfJustice.png', 'enabled' => true]);
        Item::create(['id' => 48, 'name' => "Gantelet précieux", 'description' => "Vos capacités peuvent infliger des coups critiques.", 'tier_id' => 4, 'item1_id' => 9, 'item2_id' => 5, 'image' => 'JeweledGauntlet.png', 'enabled' => true]);
        Item::create(['id' => 49, 'name' => "Mercure", 'description' => "Empêche le prochain effet de contrôle de foule lancé sur le porteur.", 'tier_id' => 5, 'item1_id' => 9, 'item2_id' => 2, 'image' => 'Quicksilver.png', 'enabled' => true]);
        Item::create(['id' => 50, 'name' => "Gantelet givrant", 'description' => "À chaque esquive, crée une zone extensible qui réduit la vitesse d'attaque de 30 %.", 'tier_id' => 4, 'item1_id' => 9, 'item2_id' => 7, 'image' => 'IceborneGauntlet.png', 'enabled' => true]);
        Item::create(['id' => 51, 'name' => "Piège à pince", 'description' => "Le porteur débute le combat avec un bouclier antisorts. Étourdit de manière prolongée l'ennemi qui brise le bouclier.", 'tier_id' => 4, 'item1_id' => 9, 'item2_id' => 4, 'image' => 'Backhand.png', 'enabled' => true]);
        Item::create(['id' => 52, 'name' => "Arbalète à répétition", 'description' => "À la mort du porteur, l'Arbalète à répétition passe dans la main d'un nouvel allié qui gagne 20 % de chances de coup critique et 20 % de vitesse d'attaque.", 'tier_id' => 5, 'item1_id' => 9, 'item2_id' => 6, 'image' => 'RepeatingCrossbow.png', 'enabled' => true]);
        Item::create(['id' => 53, 'name' => "Moufles", 'description' => "+ 10 % de chances de coup critique et + 10 % de chances d'esquive. Le porteur est aussi un Yordle.", 'tier_id' => 7, 'item1_id' => 9, 'item2_id' => 8, 'image' => 'Mittens.png', 'enabled' => true]);
        Item::create(['id' => 54, 'name' => "Lame funeste", 'description' => "A chaque fois que le champion équipé participe à une élimination, il gagne +15 dégâts jusqu'à la fin du round.", 'tier_id' => 2, 'item1_id' => 1, 'item2_id' => 1, 'image' => 'DeathBlade.png', 'enabled' => true]);
    }
}
