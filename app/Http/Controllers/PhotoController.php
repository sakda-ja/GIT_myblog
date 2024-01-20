<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return ['name'=>'sakda jatuporn'];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return [
            'name'=>'Photocreate'

        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return [
            'name'=>'store',
            'payload'=> $request->all()
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            return [ 'name'=>'showAPI' , 'id'=>$id];

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return [ 'name'=>'edit' , 'id'=>$id];

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return [
            'name'=>'update' ,
            'payload'=>$request->all(),
            'id'=>$id
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return [ 'name'=>'destroy' , 'id'=>$id];
    }


    public function search($keyword)
    {
        return [ 'name'=>'search' , 'id'=>$keyword];
    }
}
