<?php

use Illuminate\Database\Seeder;
use App\employee;

class employeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(employee::class, 100) -> create();
    }
}
