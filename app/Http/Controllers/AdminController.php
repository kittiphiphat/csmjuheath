<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=DB::table('blogs')->paginate(10);
        return view('blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('from');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function change( $id)
    {
        $blog=DB::table('blogs')->where('id',$id)->first();
       $data=[
            'status'=>!$blog->status
       ];

       DB::table('blogs')->where('id',$id)->update($data);
       return redirect('/blog');
    }

    /**
     * Display the specified resource.
     */
    public function insert(Request $request)
    {
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'require',
            'phone'=>'required',
            'sex'=>'required',
            'age'=>'required',
            'section'=>'required',
            'content'=>'required'
        ]);

        $data =[
            'name'=>$request->name,
            'email'=>$request->email,
            'sex'=>$request->sex,
            'phone'=>$request->phone,
            'section'=>$request->section,
            'content'=>$request->content,


        ];
        DB::table('blogs')->insert($data);
        return redirect('/blog');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog=DB::table('blogs')->where('id',$id)->first();
        return view('edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'require',
            'phone'=>'required',
            'sex'=>'required',
            'age'=>'required',
            'section'=>'required',
            'content'=>'required'
        ]);

        $data =[
            'name'=>$request->name,
            'email'=>$request->email,
            'sex'=>$request->sex,
            'phone'=>$request->phone,
            'section'=>$request->section,
            'content'=>$request->content,


        ];
        DB::table('blogs')->where('id',$id)->update($data);
        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
       DB::table('blogs')->where('id',$id)->delete();
       return redirect('/blog');
    }

}
