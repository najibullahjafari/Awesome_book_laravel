<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\member;
class MemberController extends Controller
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
        $rows=member::all();
        return view("list",["rows"=>$rows]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view("signMe");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name=$request->signInName;
        $lastName=$request->signInLastName;
        $phone=$request->signInPhone;
        $position=$request->signInType;
        $faculty=$request->signInFaculty;
        $user_id=$request->userId;
        $row=member::insert([
            "name"=>$name,"lastName"=>$lastName,"phone"=>$phone,"position"=>$position,
            "feild"=>$faculty,
            "user_id"=>$user_id
        ]);
        return redirect("home");
       
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
        
       
        $row=member::findOrFail($id);
        return view("member",["row"=>$row]);
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
        $row=member::findOrFail($id);
        return view("editMyInfo",["row"=>$row]);
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
        $row=member::findOrFail($request->id);
        $row->name=$request->editInfoName;
        $row->lastName=$request->editInfoLastName;
        $row->phone=$request->editInfoPhone;
        $row->position=$request->editInfoType;
        $row->feild=$request->editInfoFaculty;
        $row->user_id=$id;
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
    }
}
