<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function store(Request $request)
    {
        $novelsData = $request->all();
        Novel::insert($novelsData);

        return response()->json(['message' => 'Novels saved successfully']);
    }
    public function index()
{
    $novels = Novel::all();

    return $novels;
}

}
