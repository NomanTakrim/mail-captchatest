<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
use Mail;
use App\Mail\MailTester;
use App\User;
use Notification;
use App\Notifications\LetmeKnow;
class ProductController extends Controller
{
    public function product()
    {
        $products=product::all();
        $users=User::find(1);
        Notification::send($users,new LetmeKnow);
        return view('prodregistry', compact('products'));
    }

    public function addproduct()
    {
        return view('addproduct');
    }

    public function saveproduct(Request $req)
    {
        $this->validate($req,[
            'name'=>'required', 
            'type'=>'required',
            'price'=>'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        
        $name=$req->name;
        $type=$req->type;
        $price=$req->price;

        $product=new product;

        $product->name=$name;
        $product->type=$type;
        $product->price=$price;

        $product->save();

        $prod=product::find($product->id);
        // Mail::send(['html'=>'mail'], $prod, function($msg){
        //     $msg->to('noman011111072@gmail.com', 'Takrim')->cc('masumcis@gmail.com')->subject('This is a mail');
        // });
        Mail::send(new MailTester($prod));

        return redirect('/prodregistry');
    }

    public function updateform(Request $req)
    {
        $id=$req->id;
        $data=product::find($id);
        //return $data;
        return view('updateform', compact('data'));
    }

    public function updateprod(Request $req)
    {
        $id=$req->id;
        //return $id;
        $name=$req->name;
        $type=$req->type;
        $price=$req->price;

        $pro=product::find($id);
        //return $pro;

        //$pro->id=$id;
        $pro->name=$name;
        $pro->type=$type;
        $pro->price=$price;

	     $pro->save();
        return redirect('/prodregistry');
    }

    public function delproduct(Request $req)
    {
        $id=$req->id;
        $pro=product::find($id);
        $pro->delete();
        return redirect('/prodregistry');
    }

   
}
