<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EntityObject;

class EntityObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EntityObject::factory(6)->create();
    }
}
