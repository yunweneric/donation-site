<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campeign;
use App\Models\PayUnit;

class CampeignController extends Controller
{
    public function _construct(){
        $this->middleware(["auth"]);
     }
    public function index(){
        $posts = Campeign::paginate(5);
        return view('post.campeign', ['posts'=>$posts]);
    }

    public function addpost(){
        return view('post.addcampeign');
    }
    
    public function store(Request $request){
        Campeign::create($request->all());
        return redirect('campeign');
    }
    

    public function viewcampeign($posts)
    
    {   $user = Campeign::find($posts);

        // dd($user);
        return view('post.viewcampeign', ['posts'=>$user]);
    }

    public function pay(Request $request){
        // dd($request);
       $myPayment = new PayUnit(
    "f41b310f22617387d0c01f9f461b91dbf5bb54bd",
    "47c6ba11-3d5c-46af-ba29-79199c35fca0",
    "payunit_sand_TyHmv7QIe",
    "localhost://5000/campeign",
    "notifyUrl",
    "test",
    "You are about to pay for this transaction",
    "purchaseRef",
    "FCFA",
    "Yunweneric"
  );

          $myPayment->makePayment("$request->amount");
       
    }
}
