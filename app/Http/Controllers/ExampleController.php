<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //

    public function index()  {
        $Example = Example::all();
        return view("Examples.index",['Example'=> $Example]);
    }

    public function create()  {
        return view("Examples.create");
    }
    public function store( Request $request)  {
        // return view("Examples.store");
      $data = $request->validate([
        'firstname' => 'required|max:255',
        'lastname' => 'required',
      ]);



      $newdata = Example::create($data);
    //   return redirect (route('Examples.index'));
      return redirect (route('Example.index'));
    }

    public function edit(Example $Example){
        // dd($Example);
        return view('Examples.edit',['Example'=> $Example]);
    
    }


  public function update(Example $Example,Request $request){
     $data = $request->validate([
        'firstname' => 'required|max:255',
        'lastname' => 'required',
      ]);

      $Example->update($data);


     return redirect (route('Example.index'));
  }

  public function delete(Example $Example){

    $Example->delete();
      return redirect (route('Example.index'))->with('success', 'Deleted successfully');
  }
    

   

   

}
