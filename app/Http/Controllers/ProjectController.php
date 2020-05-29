<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;
class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(Request $request){
        $data['projects'] = DB::table('project')->simplePaginate(10);
        $data['activeView'] = 'grid';
        $returnHTML = view('projects.view')->with($data);
        if($request->ajax()){
            return response()->json(array('status_code' => 200, 'html'=> $returnHTML));
        }else{
            return $returnHTML;
        }
    }

    function create(Request $request){
       $response = ['status_code' => 101, 'message'=> 'Something Went wrong'];
        $data = $request->all();
       // dd($request->all());die;
        $request->validate([
            'project_name' => 'required',
        ]);

        if(!empty($data['project_id'])){
            $project = Project::find($data['project_id']);
        }else{
            $project = new Project();
        }
        $project->name = $data['project_name'];
        $project->description = $data['project_desc'] ?? '';
        
        if($project->save()){
            $response = array('status_code' => 200, 'message'=> 'Project Saved successfully');
        }
        return response()->json($response);
    } 

    function delete(Request $request){
        $response = ['status_code' => 101, 'message'=> 'Something Went wrong'];
         $data = $request->all();
         if(!empty($data['project_id'])){
            $query = DB::table('project')->where('id','=',$data['project_id'])->delete();
            if($query){
                $response = array('status_code' => 200, 'message'=> 'Project deleted successfully' );
            }
         }
         return response()->json($response);
     }  
}
