<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;

class ProjectController extends Controller
{

    /*
     * General projects information
     */
    protected $projects;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $filename = 'projects.json';
        if(Storage::disk('local')->has($filename)) {
            $file = Storage::disk('local')->get($filename);
            $data = json_decode($file);
            $this->projects = $data;
        }
    }

    public function index()
    {
        return view('allprojects', ['projects' => $this->projects]);
    }

    public function view(Request $request)
    {
        $prj = $request->prj;       
        $project = null;
        if(!empty($this->projects->{$prj})) {
            $project = $this->projects->{$prj};
        } else {
            abort(404);
        }
        return view('workdetail', ['project' => $project]);
    }
}