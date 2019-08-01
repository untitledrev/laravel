<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class dz_3_laravel extends Controller
{
    //

    public function index()
    {
        /*
        $users = DB::table('users')
            ->where('name', 'Pet')
            ->value('id');
        */
        $tasks = DB::table('tasks')->get();
        //dump($users);
        $table = '<table>';
        foreach ($tasks as $task) {

            $table .= '<tr>';
            $table .= '<td>' . $task->id . '</td>';
            $table .= '<td>' . $task->name . '</td>';
            $table .= '<td>' . $task->counter . '</td>';
            $table .= '<td><a target="_blank" href="/tasks' . $task->id . '/">Задание ' . $task->name . '</a></td>';
            $table .= '</tr>';
        }

        return $table;
    }

    public function tasks($id)
    {
        $tasks = DB::table('tasks')->where('id', $id)->get();

        //dump($tasks);
        ////echo count($tasks);
        if (count($tasks) > 0) {
            DB::table('logs')->insert(['task_id' => $id, 'status' => 0, 'created_at' => '']);
            echo 'Задача добавлена <b>' . $tasks[0]->name . '</b>';
        } else
        {
            echo 'Такой задачи нет';
        }
        //return $id;
    }

}
