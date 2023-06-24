<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows=Activity::all();
        return view("activityList",["rows"=>$rows]);
        
    }

    /**
     * Show the form for creating a new resource.
     *@param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        return view("addActivity");
    }

    /**
     * Store a newly created resource in storage.
     *@param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //
        $title=$request->titleAddActivity;
        $description=$request->descriptionAddActivity;
        $user_id=$id;
        Activity::insert([
            "ttile"=>$title,
            "description"=>$description,
            "user_id"=>$user_id
        ]);
        return redirect("home")->with("you add a new activity");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $rows=Activity::where("user_id","=",$id)->get();
        return view("activity",["rows"=>$rows]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $row=Activity::findOrFail($id);
        return view("editActivity",["row"=>$row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $row=Activity::findOrFail($request->id);
        $row->ttile=$request->titleEditActivity;
        $row->description=$request->descriptionEditActivity;
        $row->save();
        return view("home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $row=Activity::findOrFail($id);
        $row->delete();
        return view("home");
    }
}
