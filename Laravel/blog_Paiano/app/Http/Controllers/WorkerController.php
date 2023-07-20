<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\Worker;

class WorkerController extends Controller
{
    public function worker_index(){
        $workers =[
            ['id'=> 1, 'name'=> 'Filippo', 'surname'=> 'Paiano', 'age'=> 23,],
            ['id'=> 2, 'name'=> 'Filippo', 'surname'=> 'Paiano', 'age'=> 23,],
            ['id'=> 3, 'name'=> 'Filippo', 'surname'=> 'Paiano', 'age'=> 23,],
            ['id'=> 4, 'name'=> 'Filippo', 'surname'=> 'Paiano', 'age'=> 23,],
        ];

        return view('chi-siamo', ['workers' => $workers]);
    }
}
