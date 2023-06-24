<?php

namespace App\Http\Controllers;
use App\Models\Medicines;
use Illuminate\Http\Request;

class Medicin extends Controller
{
    //
    public function index()
    { 
        $rows=medicines::all();
        return view("MedicinList",["rows"=>$rows]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view("AddMedicin");
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
        $name=$request->productName;
        $price=$request->productPrice;
        $code=$request->codeNo;
        
        $row=medicines::insert([
            "productName"=>$name,
            "productprice"=>$price,
            "codeNo"=>$code,
        ]);
        return redirect("MedicinList");
       
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
