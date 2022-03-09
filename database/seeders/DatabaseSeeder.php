<?php

namespace Database\Seeders;
use App\Models\Inventory;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $inventories = $this->getInventories();

        foreach ($inventories as $inventory) {
            DB::table('inventories')->insert([
                'name' => $inventory['name'],
                'quantity' => $inventory['quantity']
            ]);
        }
    }

    protected function getInventories() {

        return [
            [
                'name'=>'A',
                'quantity'=>10,
                ],
                [
                'name'=>'B',
                'quantity'=>10,
                ],
                [
                'name'=>'C',
                'quantity'=>10,
                ],
                [
                'name'=>'D',
                'quantity'=>10,
                ],
                [
                'name'=>'E',
                'quantity'=>10,
                ],
        ];
    }
}
