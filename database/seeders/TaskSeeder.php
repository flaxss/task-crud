<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Task;

// use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Task::factory()->create([
        //     'task' => 'new task',
        //     'description' => 'something',
        //     'difficulty' => 'Hard',
        //     'priority' => 'High',
        // ]);

        // $task = [
        //     [
        //         'id' => 1,
        //         'task' => 'new task',
        //         'description' => 'something',
        //         'difficulty' => 'Hard',
        //         'priority' => 'High',
        //     ],
        //     [
        //         'id' => 2,
        //         'task' => 'new task',
        //         'description' => 'something',
        //         'difficulty' => 'Hard',
        //         'priority' => 'High',
        //     ],
        //     [
        //         'id' => 2,
        //         'task' => 'new task',
        //         'description' => 'something',
        //         'difficulty' => 'Hard',
        //         'priority' => 'High',
        //     ],
        // ];

        // Task::table('task')->insert($task);

        // $task = new Task;

        // $task->task = 'task';
        // $task->description = 'description';
        // $task->difficulty = 'difficulty';
        // $task->priority = 'priority';

        // $task->save();

        // \DB::table('task')->insert([
        //     'task' => 'new task',
        //     'description' => 'something',
        //     'difficulty' => 'Hard',
        //     'priority' => 'High',
        // ]);
    }
}
