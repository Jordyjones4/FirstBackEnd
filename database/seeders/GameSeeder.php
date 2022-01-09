<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = [
            [
                'id' => '1',
                'game_price' => '99000',
                'game_name' => 'Apex Legends',
                'game_description' => 'A very good game you will not regret playing this game xD',
                'game_category' => '1',
                'game_developer' => 'Gun entertaiment',
                'game_publisher' => 'LGUN',
                'game_cover' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1172470/header.jpg?t=1621457566',
                'game_trailer' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256832561/movie480_vp9.webm?t=1619624593',
                'adultgame' => 'false'
            ],
            [
                'id' => '2',
                'game_price' => '150000',
                'game_name' => 'Forza Horizon 4',
                'game_description' => 'A very good game you will not regret playing this game xD',
                'game_category' => '4',
                'game_developer' => 'Gun entertaiment',
                'game_publisher' => 'LGUN',
                'game_cover' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1293830/header.jpg?t=1615337540',
                'game_trailer' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256820720/movie480_vp9.webm?t=1612810706',
                'adultgame' => 'false'
            ],
            [
                'id' => '3',
                'game_price' => '150000',
                'game_name' => 'EuroTruck',
                'game_description' => 'A very good game you will not regret playing this game xD',
                'game_category' => '2',
                'game_developer' => 'Gun entertaiment',
                'game_publisher' => 'LGUN',
                'game_cover' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/227300/header.jpg?t=1619119593',
                'game_trailer' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256827292/movie480_vp9.webm?t=1616622379',
                'adultgame' => 'false'
            ],
            [
                'id' => '4',
                'game_price' => '150000',
                'game_name' => 'GTA V',
                'game_description' => 'A very good game you will not regret playing this game xD',
                'game_category' => '1',
                'game_developer' => 'Gun entertaiment',
                'game_publisher' => 'LGUN',
                'game_cover' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/271590/header.jpg?t=1618856444',
                'game_trailer' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256757115/movie480.webm?t=1563930864',
                'adultgame' => 'true'
            ],
            [
                'id' => '5',
                'game_price' => '150000',
                'game_name' => 'GTFO',
                'game_description' => 'A very good game you will not regret playing this game xD',
                'game_category' => '1',
                'game_developer' => 'Gun entertaiment',
                'game_publisher' => 'LGUN',
                'game_cover' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/493520/header.jpg?t=1619710162',
                'game_trailer' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256832724/movie480_vp9.webm?t=1619710158',
                'adultgame' => 'true'
            ],
            [
                'id' => '6',
                'game_price' => '150000',
                'game_name' => 'It Takes Two',
                'game_description' => 'A very good game you will not regret playing this game xD',
                'game_category' => '5',
                'game_developer' => 'Gun entertaiment',
                'game_publisher' => 'LGUN',
                'game_cover' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1426210/header_alt_assets_0.jpg?t=1620487863',
                'game_trailer' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256827093/movie480_vp9.webm?t=1616514535',
                'adultgame' => 'false'
            ],
            [
                'id' => '7',
                'game_price' => '150000',
                'game_name' => 'Monster Hunter : Worlds',
                'game_description' => 'A very good game you will not regret playing this game xD',
                'game_category' => '1',
                'game_developer' => 'Gun entertaiment',
                'game_publisher' => 'LGUN',
                'game_cover' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/582010/header.jpg?t=1613693233',
                'game_trailer' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256769022/movie480.webm?t=1596524406',
                'adultgame' => 'false'
            ],
            [
                'id' => '8',
                'game_price' => '150000',
                'game_name' => 'Planet Coaster',
                'game_description' => 'A very good game you will not regret playing this game xD',
                'game_category' => '3',
                'game_developer' => 'Gun entertaiment',
                'game_publisher' => 'LGUN',
                'game_cover' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/493340/header.jpg?t=1617973118',
                'game_trailer' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/256674785/movie480.webm?t=1488290537',
                'adultgame' => 'false'
            ]
        ];
        DB::table('games')->insert($games);
    }
}
