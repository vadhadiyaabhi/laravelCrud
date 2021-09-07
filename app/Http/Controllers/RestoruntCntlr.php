<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Session;

class RestoruntCntlr extends Controller
{
    //to take default input => index($user = 'default ABHI')
    public function index()
    {
        return view('home');
    }
    public function list()
    {
        $data = Restaurant::all();
        return view('list', ["data"=>$data]);
    }
    public function add(Request $req)
    {
        // return $req->input();
        $resto = new Restaurant;
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address = $req->input('address');
        $resto->open = $req->input('open');
        $resto->close = $req->input('close');
        $resto->created_at = date("Y-m-d");
        $resto->updated_at = date("Y-m-d");
        $resto->save();
        $req->session()->flash('status', 'Restaurant added successfully');
        return redirect('list');
    }
    public function delete($id)
    {
        // $data = Restaurant::find($id); //this also works fine
        // $data = Restaurant::find($id)->delete(); //this is not working
        // $data->delete(); // I don't know why this is not working 
        // Restaurant::destroy($id); // this thing also doesn't works
        $res=Restaurant::where('id',$id)->delete(); //This works fine
        Session::flash('status','Restaurant has been deleted Successfully');
        return redirect('list');
    }

    // public function delete($id)  => this way also doeesn't works
    // {
    //     $deleted = Restaurant::destroy($id);

    //     if ($deleted) {
    //         return back()->with('message:success', 'Deleted');
    //     } else {
    //         return back()->with('message:error', 'Error');
    //     }
    // }

    public function edit($id)
    {
        $data = Restaurant::find($id);
        return view('edit',["data" => $data]);
    }

    public function update(Request $req)
    {
        $data = Restaurant::find($req->id);
        // return $data;// working fine
        $data->name = $req->input('name');
        $data->email = $req->input('email');
        $data->address = $req->input('address');
        $data->open = $req->input('open');
        $data->close = $req->input('close');
        $data->updated_at = date("Y-m-d");

        // echo $data->address; //working fine
        // return $data;
        $bool = $data->save(); //watch App\Models\Restaurant.php file where primarykey has been set BECAUSE name of column should be in small latter if it is not small then define like this in model
        echo $bool;
        return redirect('list');
    }
}
