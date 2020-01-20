<?php

use Illuminate\Database\Seeder;
use App\task;
use App\employee;

class tasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(task::class, 100)
            ->make()
            ->each(function ($task) {
                $emp = employee::inRandomOrder()->first();
                $task->employee()->associate($emp);
                $task->save();
            });
    }
}
