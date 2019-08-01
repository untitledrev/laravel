<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Log;
class dz_4_laravel extends Controller
{
    //
    public function index()
    {
        /*
        $users = DB::table('users')
            ->where('name', 'Pet')
            ->value('id');
        */
        $tasks = Task::get();
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
        $table .= '</table>';
        $table .= '<a href="and_work">Взаять в работу</a>';

        //return $table;
        return view('tasks' , compact ('tasks'));
    }

    public function tasks($id)
    {
        $tasks = Task::where('id', $id)->get();

        //dump($tasks);
        ////echo count($tasks);
        if (count($tasks) > 0) {
            $log = new Log;
            $log->task_id = $id;
            $log->status = 0;
            $log->save();

            //Log::insert(['task_id' => $id, 'status' => 0, 'created_at' => '']);

            echo 'Задача добавлена <b>' . $tasks[0]->name . '</b>';
        } else
        {
            echo 'Такой задачи нет';
        }
        //return $id;
    }

    public function tasks_list()
    {
        $log = Log::orderBy('created_at','desc')->get();
        $table = '<table>';
        foreach ($log as $log) {

            $table .= '<tr>';
            $table .= '<td>' . $log->id . '</td>';
            $table .= '<td>' . $log->task_id . '</td>';
            $table .= '<td>' . $log->status . '</td>';
            $table .= '<td>' . $log->created_at . '</td>';
            $table .= '<td>' . $log->updated_at . '</td>';
            $table .= '</tr>';
        }
        $table .= '</table>';

        $log = Log::queuedAll();

        $table .= '</br>';
        $table .= '</br>';

        $table .= '<table>';
        foreach ($log as $log) {

            $table .= '<tr>';
            $table .= '<td>' . $log->id . '</td>';
            $table .= '<td>' . $log->task_id . '</td>';
            $table .= '<td>' . $log->status . '</td>';
            $table .= '<td>' . $log->created_at . '</td>';
            $table .= '<td>' . $log->updated_at . '</td>';
            $table .= '</tr>';
        }
        $table .= '</table>';

        $log = Log::orderBy('created_at','desc')->get();

        return view('tasks_list' , compact ('log'));

    }

    public function and_work()
    {
        $log = Log::queued();
        if($log) {
            $log->status = 1;
            $log->save();
            echo $log->id;
        }
        else
        {
            echo "Все задачи выполнены";
        }
      //  dd($log);
    }


}
