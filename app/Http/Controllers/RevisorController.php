<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index() {
        $item_to_check = Item::where('is_accepted', null)->first();
        return view('revisors.index', compact('item_to_check'));
    }
    
    public function acceptItem(Item $item) {
        $item->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai approvato l\'annuncio');
        
    }
    
    public function rejectItem(Item $item) {
        $item->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
        
    }

    public function becomeRevisor(Request $request){
        $message =  $request->input('message');
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $message));

        return redirect()->back()->with('message', 'La tua richiesta di diventare revisore è stata accettata');
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Hai aggiunto un revisore');
    }

    public function formRevisor() {
        $user=Auth::user();
        if(Auth::user()->is_revisor){
            return redirect('/')->with('access.denied', 'Sei già Revisore!');
    } return view('mail.form_revisor',compact('user'));}
}
