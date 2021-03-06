<?php

use App\ChampionLevel;
use Illuminate\Database\Seeder;

class ChampionsLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all levels.
        DB::table('champions_levels')->delete();

        // Fill levels.
        ChampionLevel::create(['champion_id' => 27	 ,'level_id' => 1	 ,'dps' => 42	 ,'attack_speed' => 0.65	 ,'damage' => 65	 ,'range' => 1	 ,'health' => 700	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 14	 ,'level_id' => 1	 ,'dps' => 28	 ,'attack_speed' => 0.55	 ,'damage' => 50	 ,'range' => 3	 ,'health' => 450	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 40	 ,'level_id' => 1	 ,'dps' => 56	 ,'attack_speed' => 0.7	 	 ,'damage' => 80	 ,'range' => 1	 ,'health' => 650	 ,'mana' => 25	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 50	 ,'level_id' => 1	 ,'dps' => 24	 ,'attack_speed' => 0.6	 	 ,'damage' => 40	 ,'range' => 3	 ,'health' => 700	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 28	 ,'level_id' => 1	 ,'dps' => 46	 ,'attack_speed' => 0.7	 	 ,'damage' => 65	 ,'range' => 4	 ,'health' => 550	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 41	 ,'level_id' => 1	 ,'dps' => 24	 ,'attack_speed' => 0.6	 	 ,'damage' => 40	 ,'range' => 3	 ,'health' => 650	 ,'mana' => 125	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 15	 ,'level_id' => 1	 ,'dps' => 25	 ,'attack_speed' => 0.5	 	 ,'damage' => 50	 ,'range' => 1	 ,'health' => 600	 ,'mana' => 125	 ,'armor' => 35	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 42	 ,'level_id' => 1	 ,'dps' => 36	 ,'attack_speed' => 0.6	 	 ,'damage' => 60	 ,'range' => 3	 ,'health' => 700	 ,'mana' => 150	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 16	 ,'level_id' => 1	 ,'dps' => 24	 ,'attack_speed' => 0.6	 	 ,'damage' => 40	 ,'range' => 1	 ,'health' => 650	 ,'mana' => 50	 ,'armor' => 75	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 1	 ,'level_id' => 1	 ,'dps' => 30	 ,'attack_speed' => 0.6	 	 ,'damage' => 50	 ,'range' => 1	 ,'health' => 550	 ,'mana' => 150	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 43	 ,'level_id' => 1	 ,'dps' => 42	 ,'attack_speed' => 0.6	 	 ,'damage' => 70	 ,'range' => 1	 ,'health' => 1000 	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 2	 ,'level_id' => 1	 ,'dps' => 25	 ,'attack_speed' => 0.5	 	 ,'damage' => 50	 ,'range' => 1	 ,'health' => 600	 ,'mana' => 100	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 44	 ,'level_id' => 1	 ,'dps' => 53	 ,'attack_speed' => 0.75	 ,'damage' => 70	 ,'range' => 3	 ,'health' => 650	 ,'mana' => 50	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 3	 ,'level_id' => 1	 ,'dps' => 27	 ,'attack_speed' => 0.6	 	 ,'damage' => 45	 ,'range' => 2	 ,'health' => 500	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 29	 ,'level_id' => 1	 ,'dps' => 42	 ,'attack_speed' => 0.6	 	 ,'damage' => 70	 ,'range' => 1	 ,'health' => 550	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 4	 ,'level_id' => 1	 ,'dps' => 40	 ,'attack_speed' => 1	 	 ,'damage' => 40	 ,'range' => 1	 ,'health' => 400	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 30	 ,'level_id' => 1	 ,'dps' => 36	 ,'attack_speed' => 0.65	 ,'damage' => 55	 ,'range' => 1	 ,'health' => 700	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 5	 ,'level_id' => 1	 ,'dps' => 30	 ,'attack_speed' => 0.6	 	 ,'damage' => 50	 ,'range' => 1	 ,'health' => 600	 ,'mana' => 100	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 45	 ,'level_id' => 1	 ,'dps' => 35	 ,'attack_speed' => 0.7	 	 ,'damage' => 50	 ,'range' => 2	 ,'health' => 750	 ,'mana' => 100	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 6	 ,'level_id' => 1	 ,'dps' => 30	 ,'attack_speed' => 0.55	 ,'damage' => 55	 ,'range' => 1	 ,'health' => 450	 ,'mana' => 0	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 17	 ,'level_id' => 1	 ,'dps' => 39	 ,'attack_speed' => 0.7	 	 ,'damage' => 55	 ,'range' => 1	 ,'health' => 600	 ,'mana' => 50	 ,'armor' => 35	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 46	 ,'level_id' => 1	 ,'dps' => 49	 ,'attack_speed' => 0.65	 ,'damage' => 75	 ,'range' => 3	 ,'health' => 550	 ,'mana' => 0	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 51	 ,'level_id' => 1	 ,'dps' => 42	 ,'attack_speed' => 0.65	 ,'damage' => 65	 ,'range' => 3	 ,'health' => 850	 ,'mana' => 125	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 7	 ,'level_id' => 1	 ,'dps' => 33	 ,'attack_speed' => 0.6	 	 ,'damage' => 55	 ,'range' => 1	 ,'health' => 550	 ,'mana' => 0	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 31	 ,'level_id' => 1	 ,'dps' => 45	 ,'attack_speed' => 0.6	 	 ,'damage' => 75	 ,'range' => 1	 ,'health' => 450	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 52	 ,'level_id' => 1	 ,'dps' => 60	 ,'attack_speed' => 1	 	 ,'damage' => 60	 ,'range' => 3	 ,'health' => 800	 ,'mana' => 125	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 32	 ,'level_id' => 1	 ,'dps' => 42	 ,'attack_speed' => 0.65	 ,'damage' => 65	 ,'range' => 2	 ,'health' => 550	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 8	 ,'level_id' => 1	 ,'dps' => 33	 ,'attack_speed' => 0.6	 	 ,'damage' => 55	 ,'range' => 1	 ,'health' => 500	 ,'mana' => 50	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 47	 ,'level_id' => 1	 ,'dps' => 39	 ,'attack_speed' => 0.65	 ,'damage' => 60	 ,'range' => 3	 ,'health' => 600	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 48	 ,'level_id' => 1	 ,'dps' => 25	 ,'attack_speed' => 0.55	 ,'damage' => 45	 ,'range' => 1	 ,'health' => 750	 ,'mana' => 100	 ,'armor' => 100 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 18	 ,'level_id' => 1	 ,'dps' => 24	 ,'attack_speed' => 0.6	 	 ,'damage' => 40	 ,'range' => 2	 ,'health' => 500	 ,'mana' => 85	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 19	 ,'level_id' => 1	 ,'dps' => 42	 ,'attack_speed' => 0.65	 ,'damage' => 65	 ,'range' => 3	 ,'health' => 600	 ,'mana' => 35	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 20	 ,'level_id' => 1	 ,'dps' => 30	 ,'attack_speed' => 0.6	 	 ,'damage' => 50	 ,'range' => 2	 ,'health' => 500	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 53	 ,'level_id' => 1	 ,'dps' => 64	 ,'attack_speed' => 0.85	 ,'damage' => 75	 ,'range' => 3	 ,'health' => 700	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 9	 ,'level_id' => 1	 ,'dps' => 25	 ,'attack_speed' => 0.5	 	 ,'damage' => 50	 ,'range' => 1	 ,'health' => 550	 ,'mana' => 100	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 33	 ,'level_id' => 1	 ,'dps' => 30	 ,'attack_speed' => 0.6	 	 ,'damage' => 50	 ,'range' => 2	 ,'health' => 650	 ,'mana' => 150	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 10	 ,'level_id' => 1	 ,'dps' => 33	 ,'attack_speed' => 0.65	 ,'damage' => 50	 ,'range' => 3	 ,'health' => 500	 ,'mana' => 85	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 54	 ,'level_id' => 1	 ,'dps' => 60	 ,'attack_speed' => 0.75	 ,'damage' => 80	 ,'range' => 1	 ,'health' => 1000	 ,'mana' => 150	 ,'armor' => 120 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 34	 ,'level_id' => 1	 ,'dps' => 25	 ,'attack_speed' => 0.5	 	 ,'damage' => 50	 ,'range' => 1	 ,'health' => 800	 ,'mana' => 75	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 21	 ,'level_id' => 1	 ,'dps' => 36	 ,'attack_speed' => 0.6	 	 ,'damage' => 60	 ,'range' => 1	 ,'health' => 600	 ,'mana' => 125	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 22	 ,'level_id' => 1	 ,'dps' => 33	 ,'attack_speed' => 0.65	 ,'damage' => 50	 ,'range' => 1	 ,'health' => 650	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 35	 ,'level_id' => 1	 ,'dps' => 42	 ,'attack_speed' => 0.6	 	 ,'damage' => 70	 ,'range' => 1	 ,'health' => 550	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 49	 ,'level_id' => 1	 ,'dps' => 25	 ,'attack_speed' => 0.55	 ,'damage' => 45	 ,'range' => 1	 ,'health' => 850	 ,'mana' => 150	 ,'armor' => 40	 ,'magic_resistance' => 25]);
        ChampionLevel::create(['champion_id' => 23	 ,'level_id' => 1	 ,'dps' => 46	 ,'attack_speed' => 0.7	 	 ,'damage' => 65	 ,'range' => 1	 ,'health' => 700	 ,'mana' => 150	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 36	 ,'level_id' => 1	 ,'dps' => 35	 ,'attack_speed' => 0.7	 	 ,'damage' => 50	 ,'range' => 1	 ,'health' => 650	 ,'mana' => 85	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 55	 ,'level_id' => 1	 ,'dps' => 42	 ,'attack_speed' => 0.65	 ,'damage' => 65	 ,'range' => 2	 ,'health' => 850	 ,'mana' => 100	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 11	 ,'level_id' => 1	 ,'dps' => 33	 ,'attack_speed' => 0.65	 ,'damage' => 50	 ,'range' => 4	 ,'health' => 500	 ,'mana' => 50	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 24	 ,'level_id' => 1	 ,'dps' => 30	 ,'attack_speed' => 0.75	 ,'damage' => 40	 ,'range' => 3	 ,'health' => 450	 ,'mana' => 50	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 25	 ,'level_id' => 1	 ,'dps' => 35	 ,'attack_speed' => 0.7	 	 ,'damage' => 50	 ,'range' => 4	 ,'health' => 500	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 12	 ,'level_id' => 1	 ,'dps' => 28	 ,'attack_speed' => 0.7	 	 ,'damage' => 40	 ,'range' => 3	 ,'health' => 550	 ,'mana' => 0	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 37	 ,'level_id' => 1	 ,'dps' => 25	 ,'attack_speed' => 0.55	 ,'damage' => 45	 ,'range' => 3	 ,'health' => 500	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 38	 ,'level_id' => 1	 ,'dps' => 36	 ,'attack_speed' => 0.65	 ,'damage' => 55	 ,'range' => 1	 ,'health' => 600	 ,'mana' => 150	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 39	 ,'level_id' => 1	 ,'dps' => 41	 ,'attack_speed' => 0.55	 ,'damage' => 75	 ,'range' => 1	 ,'health' => 700	 ,'mana' => 75	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 13	 ,'level_id' => 1	 ,'dps' => 30	 ,'attack_speed' => 0.6	 	 ,'damage' => 50	 ,'range' => 1	 ,'health' => 650	 ,'mana' => 150	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 56	 ,'level_id' => 1	 ,'dps' => 75	 ,'attack_speed' => 1	 	 ,'damage' => 75	 ,'range' => 1	 ,'health' => 700	 ,'mana' => 25	 ,'armor' => 35	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 26	 ,'level_id' => 1	 ,'dps' => 46	 ,'attack_speed' => 0.7	 	 ,'damage' => 65	 ,'range' => 1	 ,'health' => 550	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 57	 ,'level_id' => 1	 ,'dps' => 69	 ,'attack_speed' => 0.3	 	 ,'damage' => 55	 ,'range' => 2	 ,'health' => 700	 ,'mana' => 125	 ,'armor' => 20	 ,'magic_resistance' => 20]);

        ChampionLevel::create(['champion_id' => 27	 ,'level_id' => 2	 ,'dps' => 76	 ,'attack_speed' => 0.65	 ,'damage' => 117	 ,'range' => 1	 ,'health' => 1260	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 14	 ,'level_id' => 2	 ,'dps' => 50	 ,'attack_speed' => 0.55	 ,'damage' => 90	 ,'range' => 3	 ,'health' => 810	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 40	 ,'level_id' => 2	 ,'dps' => 101	 ,'attack_speed' => 0.7	 	 ,'damage' => 144	 ,'range' => 1	 ,'health' => 1170	 ,'mana' => 25	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 50	 ,'level_id' => 2	 ,'dps' => 43	 ,'attack_speed' => 0.6	 	 ,'damage' => 72	 ,'range' => 3	 ,'health' => 1260	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 28	 ,'level_id' => 2	 ,'dps' => 82	 ,'attack_speed' => 0.7	 	 ,'damage' => 117	 ,'range' => 4	 ,'health' => 990	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 41	 ,'level_id' => 2	 ,'dps' => 43	 ,'attack_speed' => 0.6	 	 ,'damage' => 72	 ,'range' => 3	 ,'health' => 1170	 ,'mana' => 125	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 15	 ,'level_id' => 2	 ,'dps' => 45	 ,'attack_speed' => 0.5	 	 ,'damage' => 90	 ,'range' => 1	 ,'health' => 1080	 ,'mana' => 125	 ,'armor' => 35	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 42	 ,'level_id' => 2	 ,'dps' => 65	 ,'attack_speed' => 0.6	 	 ,'damage' => 108	 ,'range' => 3	 ,'health' => 1260	 ,'mana' => 150	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 16	 ,'level_id' => 2	 ,'dps' => 43	 ,'attack_speed' => 0.6	 	 ,'damage' => 72	 ,'range' => 1	 ,'health' => 1170	 ,'mana' => 50	 ,'armor' => 75	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 1	 ,'level_id' => 2	 ,'dps' => 54	 ,'attack_speed' => 0.6	 	 ,'damage' => 90	 ,'range' => 1	 ,'health' => 990	 ,'mana' => 150	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 43	 ,'level_id' => 2	 ,'dps' => 76	 ,'attack_speed' => 0.6	 	 ,'damage' => 126	 ,'range' => 1	 ,'health' => 1800	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 2	 ,'level_id' => 2	 ,'dps' => 45	 ,'attack_speed' => 0.5	 	 ,'damage' => 90	 ,'range' => 1	 ,'health' => 1080	 ,'mana' => 100	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 44	 ,'level_id' => 2	 ,'dps' => 95	 ,'attack_speed' => 0.75	 ,'damage' => 126	 ,'range' => 3	 ,'health' => 1170	 ,'mana' => 50	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 3	 ,'level_id' => 2	 ,'dps' => 49	 ,'attack_speed' => 0.6	 	 ,'damage' => 81	 ,'range' => 2	 ,'health' => 900	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 29	 ,'level_id' => 2	 ,'dps' => 76	 ,'attack_speed' => 0.6	 	 ,'damage' => 126	 ,'range' => 1	 ,'health' => 990	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 4	 ,'level_id' => 2	 ,'dps' => 72	 ,'attack_speed' => 1	 	 ,'damage' => 72	 ,'range' => 1	 ,'health' => 720	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 30	 ,'level_id' => 2	 ,'dps' => 64	 ,'attack_speed' => 0.65	 ,'damage' => 99	 ,'range' => 1	 ,'health' => 1260	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 5	 ,'level_id' => 2	 ,'dps' => 54	 ,'attack_speed' => 0.6	 	 ,'damage' => 90	 ,'range' => 1	 ,'health' => 1080	 ,'mana' => 100	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 45	 ,'level_id' => 2	 ,'dps' => 63	 ,'attack_speed' => 0.7	 	 ,'damage' => 90	 ,'range' => 2	 ,'health' => 1350	 ,'mana' => 100	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 6	 ,'level_id' => 2	 ,'dps' => 54	 ,'attack_speed' => 0.55	 ,'damage' => 99	 ,'range' => 1	 ,'health' => 810	 ,'mana' => 0	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 17	 ,'level_id' => 2	 ,'dps' => 69	 ,'attack_speed' => 0.7	 	 ,'damage' => 99	 ,'range' => 1	 ,'health' => 1080	 ,'mana' => 50	 ,'armor' => 35	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 46	 ,'level_id' => 2	 ,'dps' => 88	 ,'attack_speed' => 0.65	 ,'damage' => 135	 ,'range' => 3	 ,'health' => 990	 ,'mana' => 0	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 51	 ,'level_id' => 2	 ,'dps' => 76	 ,'attack_speed' => 0.65	 ,'damage' => 117	 ,'range' => 3	 ,'health' => 1530	 ,'mana' => 125	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 7	 ,'level_id' => 2	 ,'dps' => 59	 ,'attack_speed' => 0.6	 	 ,'damage' => 99	 ,'range' => 1	 ,'health' => 990	 ,'mana' => 0	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 31	 ,'level_id' => 2	 ,'dps' => 81	 ,'attack_speed' => 0.6	 	 ,'damage' => 135	 ,'range' => 1	 ,'health' => 810	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 52	 ,'level_id' => 2	 ,'dps' => 108	 ,'attack_speed' => 1	 	 ,'damage' => 108	 ,'range' => 3	 ,'health' => 1440	 ,'mana' => 125	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 32	 ,'level_id' => 2	 ,'dps' => 76	 ,'attack_speed' => 0.65	 ,'damage' => 117	 ,'range' => 2	 ,'health' => 990	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 8	 ,'level_id' => 2	 ,'dps' => 59	 ,'attack_speed' => 0.6	 	 ,'damage' => 99	 ,'range' => 1	 ,'health' => 900	 ,'mana' => 50	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 47	 ,'level_id' => 2	 ,'dps' => 70	 ,'attack_speed' => 0.65	 ,'damage' => 108	 ,'range' => 3	 ,'health' => 1080	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 48	 ,'level_id' => 2	 ,'dps' => 45	 ,'attack_speed' => 0.55	 ,'damage' => 81	 ,'range' => 1	 ,'health' => 1350	 ,'mana' => 100	 ,'armor' => 100 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 18	 ,'level_id' => 2	 ,'dps' => 43	 ,'attack_speed' => 0.6	 	 ,'damage' => 72	 ,'range' => 2	 ,'health' => 900	 ,'mana' => 85	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 19	 ,'level_id' => 2	 ,'dps' => 76	 ,'attack_speed' => 0.65	 ,'damage' => 117	 ,'range' => 3	 ,'health' => 1080	 ,'mana' => 35	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 20	 ,'level_id' => 2	 ,'dps' => 54	 ,'attack_speed' => 0.6	 	 ,'damage' => 90	 ,'range' => 2	 ,'health' => 900	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 53	 ,'level_id' => 2	 ,'dps' => 115	 ,'attack_speed' => 0.85	 ,'damage' => 135	 ,'range' => 3	 ,'health' => 1260	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 9	 ,'level_id' => 2	 ,'dps' => 45	 ,'attack_speed' => 0.5	 	 ,'damage' => 90	 ,'range' => 1	 ,'health' => 990	 ,'mana' => 100	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 33	 ,'level_id' => 2	 ,'dps' => 54	 ,'attack_speed' => 0.6	 	 ,'damage' => 90	 ,'range' => 2	 ,'health' => 1170	 ,'mana' => 150	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 10	 ,'level_id' => 2	 ,'dps' => 59	 ,'attack_speed' => 0.65	 ,'damage' => 90	 ,'range' => 3	 ,'health' => 900	 ,'mana' => 85	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 54	 ,'level_id' => 2	 ,'dps' => 108	 ,'attack_speed' => 0.75	 ,'damage' => 144	 ,'range' => 1	 ,'health' => 1800	 ,'mana' => 150	 ,'armor' => 120 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 34	 ,'level_id' => 2	 ,'dps' => 45	 ,'attack_speed' => 0.5	 	 ,'damage' => 90	 ,'range' => 1	 ,'health' => 1440	 ,'mana' => 75	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 21	 ,'level_id' => 2	 ,'dps' => 65	 ,'attack_speed' => 0.6	 	 ,'damage' => 108	 ,'range' => 1	 ,'health' => 1080	 ,'mana' => 125	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 22	 ,'level_id' => 2	 ,'dps' => 59	 ,'attack_speed' => 0.65	 ,'damage' => 90	 ,'range' => 1	 ,'health' => 1170	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 35	 ,'level_id' => 2	 ,'dps' => 76	 ,'attack_speed' => 0.6	 	 ,'damage' => 126	 ,'range' => 1	 ,'health' => 990	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 49	 ,'level_id' => 2	 ,'dps' => 45	 ,'attack_speed' => 0.55	 ,'damage' => 81	 ,'range' => 1	 ,'health' => 1530	 ,'mana' => 150	 ,'armor' => 40	 ,'magic_resistance' => 25]);
        ChampionLevel::create(['champion_id' => 23	 ,'level_id' => 2	 ,'dps' => 82	 ,'attack_speed' => 0.7	 	 ,'damage' => 117	 ,'range' => 1	 ,'health' => 1260	 ,'mana' => 150	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 36	 ,'level_id' => 2	 ,'dps' => 63	 ,'attack_speed' => 0.7	 	 ,'damage' => 90	 ,'range' => 1	 ,'health' => 1170	 ,'mana' => 85	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 55	 ,'level_id' => 2	 ,'dps' => 76	 ,'attack_speed' => 0.65	 ,'damage' => 117	 ,'range' => 2	 ,'health' => 1530	 ,'mana' => 100	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 11	 ,'level_id' => 2	 ,'dps' => 59	 ,'attack_speed' => 0.65	 ,'damage' => 90	 ,'range' => 4	 ,'health' => 900	 ,'mana' => 50	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 24	 ,'level_id' => 2	 ,'dps' => 54	 ,'attack_speed' => 0.75	 ,'damage' => 72	 ,'range' => 3	 ,'health' => 810	 ,'mana' => 50	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 25	 ,'level_id' => 2	 ,'dps' => 63	 ,'attack_speed' => 0.7	 	 ,'damage' => 90	 ,'range' => 4	 ,'health' => 900	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 12	 ,'level_id' => 2	 ,'dps' => 50	 ,'attack_speed' => 0.7	 	 ,'damage' => 72	 ,'range' => 3	 ,'health' => 990	 ,'mana' => 0	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 37	 ,'level_id' => 2	 ,'dps' => 45	 ,'attack_speed' => 0.55	 ,'damage' => 81	 ,'range' => 3	 ,'health' => 900	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 38	 ,'level_id' => 2	 ,'dps' => 64	 ,'attack_speed' => 0.65	 ,'damage' => 99	 ,'range' => 1	 ,'health' => 1080	 ,'mana' => 150	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 39	 ,'level_id' => 2	 ,'dps' => 74	 ,'attack_speed' => 0.55	 ,'damage' => 135	 ,'range' => 1	 ,'health' => 1260	 ,'mana' => 75	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 13	 ,'level_id' => 2	 ,'dps' => 54	 ,'attack_speed' => 0.6	 	 ,'damage' => 90	 ,'range' => 1	 ,'health' => 1170	 ,'mana' => 150	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 56	 ,'level_id' => 2	 ,'dps' => 135	 ,'attack_speed' => 1	 	 ,'damage' => 135	 ,'range' => 1	 ,'health' => 1260	 ,'mana' => 25	 ,'armor' => 35	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 26	 ,'level_id' => 2	 ,'dps' => 82	 ,'attack_speed' => 0.7	 	 ,'damage' => 117	 ,'range' => 1	 ,'health' => 990	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 57	 ,'level_id' => 2	 ,'dps' => 99	 ,'attack_speed' => 0.6	 	 ,'damage' => 99	 ,'range' => 2	 ,'health' => 1260	 ,'mana' => 125	 ,'armor' => 20	 ,'magic_resistance' => 20]);

        ChampionLevel::create(['champion_id' => 27	 ,'level_id' => 3	 ,'dps' => 152	 ,'attack_speed' => 0.65	 ,'damage' => 234	 ,'range' => 1	 ,'health' => 2520	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 14	 ,'level_id' => 3	 ,'dps' => 99	 ,'attack_speed' => 0.55	 ,'damage' => 180	 ,'range' => 3	 ,'health' => 1620	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 40	 ,'level_id' => 3	 ,'dps' => 202	 ,'attack_speed' => 0.7	 	 ,'damage' => 288	 ,'range' => 1	 ,'health' => 2340	 ,'mana' => 25	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 50	 ,'level_id' => 3	 ,'dps' => 86	 ,'attack_speed' => 0.6	 	 ,'damage' => 144	 ,'range' => 3	 ,'health' => 2520	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 28	 ,'level_id' => 3	 ,'dps' => 164	 ,'attack_speed' => 0.7	 	 ,'damage' => 234	 ,'range' => 4	 ,'health' => 1980	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 41	 ,'level_id' => 3	 ,'dps' => 86	 ,'attack_speed' => 0.6	 	 ,'damage' => 144	 ,'range' => 3	 ,'health' => 2340	 ,'mana' => 125	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 15	 ,'level_id' => 3	 ,'dps' => 90	 ,'attack_speed' => 0.5	 	 ,'damage' => 180	 ,'range' => 1	 ,'health' => 2160	 ,'mana' => 125	 ,'armor' => 35	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 42	 ,'level_id' => 3	 ,'dps' => 130	 ,'attack_speed' => 0.6	 	 ,'damage' => 216	 ,'range' => 3	 ,'health' => 2520	 ,'mana' => 150	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 16	 ,'level_id' => 3	 ,'dps' => 86	 ,'attack_speed' => 0.6	 	 ,'damage' => 144	 ,'range' => 1	 ,'health' => 2340	 ,'mana' => 50	 ,'armor' => 75	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 1	 ,'level_id' => 3	 ,'dps' => 108	 ,'attack_speed' => 0.6	 	 ,'damage' => 180	 ,'range' => 1	 ,'health' => 1980	 ,'mana' => 150	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 43	 ,'level_id' => 3	 ,'dps' => 151	 ,'attack_speed' => 0.6	 	 ,'damage' => 252	 ,'range' => 1	 ,'health' => 3600	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 2	 ,'level_id' => 3	 ,'dps' => 90	 ,'attack_speed' => 0.5	 	 ,'damage' => 180	 ,'range' => 1	 ,'health' => 2160	 ,'mana' => 100	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 44	 ,'level_id' => 3	 ,'dps' => 189	 ,'attack_speed' => 0.75	 ,'damage' => 252	 ,'range' => 3	 ,'health' => 2340	 ,'mana' => 50	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 3	 ,'level_id' => 3	 ,'dps' => 97	 ,'attack_speed' => 0.6	 	 ,'damage' => 162	 ,'range' => 2	 ,'health' => 1800	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 29	 ,'level_id' => 3	 ,'dps' => 151	 ,'attack_speed' => 0.6	 	 ,'damage' => 252	 ,'range' => 1	 ,'health' => 1980	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 4	 ,'level_id' => 3	 ,'dps' => 144	 ,'attack_speed' => 1	 	 ,'damage' => 144	 ,'range' => 1	 ,'health' => 1440	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 30	 ,'level_id' => 3	 ,'dps' => 129	 ,'attack_speed' => 0.65	 ,'damage' => 198	 ,'range' => 1	 ,'health' => 2520	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 5	 ,'level_id' => 3	 ,'dps' => 108	 ,'attack_speed' => 0.6	 	 ,'damage' => 180	 ,'range' => 1	 ,'health' => 2160	 ,'mana' => 100	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 45	 ,'level_id' => 3	 ,'dps' => 126	 ,'attack_speed' => 0.7	 	 ,'damage' => 180	 ,'range' => 2	 ,'health' => 2700	 ,'mana' => 100	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 6	 ,'level_id' => 3	 ,'dps' => 109	 ,'attack_speed' => 0.55	 ,'damage' => 198	 ,'range' => 1	 ,'health' => 1620	 ,'mana' => 0	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 17	 ,'level_id' => 3	 ,'dps' => 139	 ,'attack_speed' => 0.7	 	 ,'damage' => 198	 ,'range' => 1	 ,'health' => 2160	 ,'mana' => 50	 ,'armor' => 35	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 46	 ,'level_id' => 3	 ,'dps' => 176	 ,'attack_speed' => 0.65	 ,'damage' => 270	 ,'range' => 3	 ,'health' => 1980	 ,'mana' => 0	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 51	 ,'level_id' => 3	 ,'dps' => 152	 ,'attack_speed' => 0.65	 ,'damage' => 234	 ,'range' => 3	 ,'health' => 3060	 ,'mana' => 125	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 7	 ,'level_id' => 3	 ,'dps' => 119	 ,'attack_speed' => 0.6	 	 ,'damage' => 198	 ,'range' => 1	 ,'health' => 1980	 ,'mana' => 0	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 31	 ,'level_id' => 3	 ,'dps' => 162	 ,'attack_speed' => 0.6	 	 ,'damage' => 270	 ,'range' => 1	 ,'health' => 1620	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 52	 ,'level_id' => 3	 ,'dps' => 216	 ,'attack_speed' => 1	 	 ,'damage' => 216	 ,'range' => 3	 ,'health' => 2880	 ,'mana' => 125	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 32	 ,'level_id' => 3	 ,'dps' => 152	 ,'attack_speed' => 0.65	 ,'damage' => 234	 ,'range' => 2	 ,'health' => 1980	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 8	 ,'level_id' => 3	 ,'dps' => 119	 ,'attack_speed' => 0.6	 	 ,'damage' => 198	 ,'range' => 1	 ,'health' => 1800	 ,'mana' => 50	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 47	 ,'level_id' => 3	 ,'dps' => 140	 ,'attack_speed' => 0.65	 ,'damage' => 216	 ,'range' => 3	 ,'health' => 2160	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 48	 ,'level_id' => 3	 ,'dps' => 89	 ,'attack_speed' => 0.55	 ,'damage' => 162	 ,'range' => 1	 ,'health' => 2700	 ,'mana' => 100	 ,'armor' => 100 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 18	 ,'level_id' => 3	 ,'dps' => 86	 ,'attack_speed' => 0.6	 	 ,'damage' => 144	 ,'range' => 2	 ,'health' => 1800	 ,'mana' => 85	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 19	 ,'level_id' => 3	 ,'dps' => 152	 ,'attack_speed' => 0.65	 ,'damage' => 234	 ,'range' => 3	 ,'health' => 2160	 ,'mana' => 35	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 20	 ,'level_id' => 3	 ,'dps' => 108	 ,'attack_speed' => 0.6	 	 ,'damage' => 180	 ,'range' => 2	 ,'health' => 1800	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 53	 ,'level_id' => 3	 ,'dps' => 230	 ,'attack_speed' => 0.85	 ,'damage' => 270	 ,'range' => 3	 ,'health' => 2520	 ,'mana' => 100	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 9	 ,'level_id' => 3	 ,'dps' => 90	 ,'attack_speed' => 0.5	 	 ,'damage' => 180	 ,'range' => 1	 ,'health' => 1980	 ,'mana' => 100	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 33	 ,'level_id' => 3	 ,'dps' => 108	 ,'attack_speed' => 0.6	 	 ,'damage' => 180	 ,'range' => 2	 ,'health' => 2340	 ,'mana' => 150	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 10	 ,'level_id' => 3	 ,'dps' => 117	 ,'attack_speed' => 0.65	 ,'damage' => 180	 ,'range' => 3	 ,'health' => 1800	 ,'mana' => 85	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 54	 ,'level_id' => 3	 ,'dps' => 216	 ,'attack_speed' => 0.75	 ,'damage' => 288	 ,'range' => 1	 ,'health' => 3600	 ,'mana' => 150	 ,'armor' => 120 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 34	 ,'level_id' => 3	 ,'dps' => 90	 ,'attack_speed' => 0.5	 	 ,'damage' => 180	 ,'range' => 1	 ,'health' => 2880	 ,'mana' => 75	 ,'armor' => 40	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 21	 ,'level_id' => 3	 ,'dps' => 130	 ,'attack_speed' => 0.6	 	 ,'damage' => 216	 ,'range' => 1	 ,'health' => 2160	 ,'mana' => 125	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 22	 ,'level_id' => 3	 ,'dps' => 117	 ,'attack_speed' => 0.65	 ,'damage' => 180	 ,'range' => 1	 ,'health' => 2340	 ,'mana' => 150	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 35	 ,'level_id' => 3	 ,'dps' => 151	 ,'attack_speed' => 0.6	 	 ,'damage' => 252	 ,'range' => 1	 ,'health' => 1980	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 49	 ,'level_id' => 3	 ,'dps' => 89	 ,'attack_speed' => 0.55	 ,'damage' => 162	 ,'range' => 1	 ,'health' => 3060	 ,'mana' => 150	 ,'armor' => 40	 ,'magic_resistance' => 25]);
        ChampionLevel::create(['champion_id' => 23	 ,'level_id' => 3	 ,'dps' => 164	 ,'attack_speed' => 0.7	 	 ,'damage' => 234	 ,'range' => 1	 ,'health' => 2520	 ,'mana' => 150	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 36	 ,'level_id' => 3	 ,'dps' => 126	 ,'attack_speed' => 0.7	 	 ,'damage' => 180	 ,'range' => 1	 ,'health' => 2340	 ,'mana' => 85	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 55	 ,'level_id' => 3	 ,'dps' => 152	 ,'attack_speed' => 0.65	 ,'damage' => 234	 ,'range' => 2	 ,'health' => 3060	 ,'mana' => 100	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 11	 ,'level_id' => 3	 ,'dps' => 117	 ,'attack_speed' => 0.65	 ,'damage' => 180	 ,'range' => 4	 ,'health' => 1800	 ,'mana' => 50	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 24	 ,'level_id' => 3	 ,'dps' => 108	 ,'attack_speed' => 0.75	 ,'damage' => 144	 ,'range' => 3	 ,'health' => 1620	 ,'mana' => 50	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 25	 ,'level_id' => 3	 ,'dps' => 126	 ,'attack_speed' => 0.7	 	 ,'damage' => 180	 ,'range' => 4	 ,'health' => 1800	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 12	 ,'level_id' => 3	 ,'dps' => 101	 ,'attack_speed' => 0.7	 	 ,'damage' => 144	 ,'range' => 3	 ,'health' => 1980	 ,'mana' => 0	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 37	 ,'level_id' => 3	 ,'dps' => 89	 ,'attack_speed' => 0.55	 ,'damage' => 162	 ,'range' => 3	 ,'health' => 1800	 ,'mana' => 75	 ,'armor' => 20	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 38	 ,'level_id' => 3	 ,'dps' => 129	 ,'attack_speed' => 0.65	 ,'damage' => 198	 ,'range' => 1	 ,'health' => 2160	 ,'mana' => 150	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 39	 ,'level_id' => 3	 ,'dps' => 149	 ,'attack_speed' => 0.55	 ,'damage' => 270	 ,'range' => 1	 ,'health' => 2520	 ,'mana' => 75	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 13	 ,'level_id' => 3	 ,'dps' => 108	 ,'attack_speed' => 0.6	 	 ,'damage' => 180	 ,'range' => 1	 ,'health' => 2340	 ,'mana' => 150	 ,'armor' => 30	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 56	 ,'level_id' => 3	 ,'dps' => 270	 ,'attack_speed' => 1	 	 ,'damage' => 270	 ,'range' => 1	 ,'health' => 2520	 ,'mana' => 25	 ,'armor' => 35	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 26	 ,'level_id' => 3	 ,'dps' => 164	 ,'attack_speed' => 0.7	 	 ,'damage' => 234	 ,'range' => 1	 ,'health' => 1980	 ,'mana' => 75	 ,'armor' => 25	 ,'magic_resistance' => 20]);
        ChampionLevel::create(['champion_id' => 57	 ,'level_id' => 3	 ,'dps' => 198	 ,'attack_speed' => 0.9	 	 ,'damage' => 198	 ,'range' => 2	 ,'health' => 2250	 ,'mana' => 125	 ,'armor' => 20	 ,'magic_resistance' => 20]);
    }
}
