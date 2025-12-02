<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookmakersSeeder extends Seeder
{
    public function run()
    {
        DB::table('bookmakers')->insert([
            [
                'name' => 'Bet365',
                'slug' => 'bet365',
                'domain' => 'https://www.bet365.com',
                'logo_url' => 'https://logo.clearbit.com/bet365.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Betfair',
                'slug' => 'betfair',
                'domain' => 'https://www.betfair.com',
                'logo_url' => 'https://logo.clearbit.com/betfair.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'William Hill',
                'slug' => 'williamhill',
                'domain' => 'https://sports.williamhill.com',
                'logo_url' => 'https://logo.clearbit.com/williamhill.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '1xBet',
                'slug' => '1xbet',
                'domain' => 'https://1xbet.com',
                'logo_url' => 'https://logo.clearbit.com/1xbet.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Marathonbet',
                'slug' => 'marathonbet',
                'domain' => 'https://www.marathonbet.com',
                'logo_url' => 'https://logo.clearbit.com/marathonbet.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
