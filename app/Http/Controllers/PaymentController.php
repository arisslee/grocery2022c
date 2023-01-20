<?php

namespace App\Http\Controllers;

use Stripe;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\myOrder;
use App\Models\myCart;
use Session;
use Notification;

class PaymentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function paymentPost(Request $request)
    {
	       
        $charge = Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => $request->sub*100,   // RM10  10=10cen in stripe, so 10*100 = 1000 cen
            "currency" => "MYR",
            "source" => $request->stripeToken,
            "description" => "This payment is testing purpose of Eazy Grocery Shop",
        ]);
           
        $newOrder=myOrder::Create([
            'paymentStatus'=>'Done',
            'userID'=>Auth::id(),
            'amount'=>$request->sub,
        ]);

        $orderID=DB::table('my_orders')->where('userID','=',Auth::id())->orderBy('created_at','desc')->first(); // get the order ID just now created

        $items=$request->input('cid');
        foreach($items as $item=>$value){
            $carts=myCart::find($value); //get the cart item record
            $carts->orderID=$orderID->id; //binding the orderID value with record
            $carts->save();
        }
        //(new CartController)->cartItem();
        $email='arissqii0830@gmail.com';
	    Notification::route('mail', $email)->notify(new \App\Notifications\orderPaid($email));

        Session::flash('success',"Payment successfully!");
        return redirect()->route('myOrder');
    }
}
