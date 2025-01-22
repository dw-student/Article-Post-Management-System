<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class AdminController extends Controller
{
    
    public function index() {
        $admin = Article::all();
        return view('admin.index', compact('admin'));
    }

  
    // public function footer()  {
    //     return view('layout.footer');
    // }


     public function create()  {
        return view('admin.create');
    }


    
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|min:6',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $file = $request->file('image')->store('images','public');  
        $admin_store = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $file,
        ]);
        // dd($request);
        return redirect()->route('admin.index')->with('article_created', 'Article created successfully.');
    }

    
    public function show(string $id) {
        $show = Article::find($id);
        if($show){
          return view('admin.show', compact('show'));
        }else{
          echo "<h1>Show Not Working</h1>";
  
        }
    }

    // public function show() {
    //     return view('admin.show');
    // }



    // public function edit() {
    //     return view('admin.edit');
    // }

    public function edit(string $id) {
        $edit = Article::find($id);
        if($edit){
            return view('admin.edit',compact('edit'));
        }else{
            echo "Edit is not working";
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $file = $request->file('image')->store('images','public');  
        $admin_store = Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $file,
        ]);
        // dd($request);
        return redirect()->route('admin.index')->with('article_edited', 'Article edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $delete = Article::where('id',$id)->delete();
        if($delete){
              return redirect()->route('admin.index');
           }else{
               echo "<h1>Record not deleted.</h1>";
                 }
    }
}
