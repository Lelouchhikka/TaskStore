<?php

namespace App\Http\Controllers;

use App\Filters\TaskDataFilter;
use App\Models\TaskData;
use App\Models\TaskTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\Log;
class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(TaskDataFilter$request )
    {

        $data = TaskData::filter($request)->paginate(9);
        $types=TaskTypes::all();
        return view('welcome')->with(['data'=>$data,'categories'=>$types]);

    }
    public function details(int $id){
        $data=TaskData::all();

        foreach ($data as $d){
            if($d->task_id==$id){
                return view('taskDetails')->with(['data'=>$d]);
            }
        }
    }

}
