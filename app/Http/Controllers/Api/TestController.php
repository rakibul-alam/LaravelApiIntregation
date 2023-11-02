<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $tests = DB::table('tests')->get();
        return response()->json($tests);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       $request->validate([
            'name' => 'required', 'unique:posts', 'max:255',
        ]);
        $data['name'] = $request->name;
        DB::table('tests')->insert($data);
        return response('done');
    }

    public function show(string $id)
    {
       $show = DB::table('tests')->where('id',$id)->first();
       return response()->json($show);
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('tests')->where('id',$id)->delete();
        return response('deleted');
    }
}