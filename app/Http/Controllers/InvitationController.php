<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Invitation;

class InvitationController extends Controller
{
	public function index(){
		
//		$property = Property::all()->toArray();

		//$pro = Property::find(1)->with('invitation')->get();
		
		//dd($pro);

//		$inv = Property::with(['invitation'])->get();

		//dd($inv[0]->invitation[0]->pivot);


		// foreach ($test->invitation as $invitation) {
		// 	echo ($invitation->pivot);
		// }	
		$auctions = Property::with(['invitation'])->get();

		return view('invitation', compact('auctions'));
	}

	public function details($id){
		//$inv_id = App\Invitation::find($id)->property->first()->pivot;//->with('property');//->
		$inv = Invitation::find($id)->property;  //->with('property');//->

		return view('details')->with("inv", $inv);
	}
    
}
