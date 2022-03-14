<?php

use Illuminate\Database\Seeder;
use App\Modules\Client\Models\Client;

class ClientTableSeeder extends Seeder
{
    public function run()
    {
        $clients = [
            [
              'name' => 'Cliente 1',
            ],
            [
              'name' => 'Cliente 2',
            ],
            [
              'name' => 'Cliente 3',
            ],
        ];

        foreach ($clients as $client) {
            factory(Client::class)->create($client);
        }
    }
}
