<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('accept.message', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('reject.message', 'Annuncio rifiutato');
    }

    public function announcementsHistory(){
        
        $announcement_to_restore = Announcement::where('is_accepted', false)->orderBy('created_at','desc')->paginate(3);
        $announcement_to_restore_t = Announcement::where('is_accepted', true)->orderBy('created_at','desc')->paginate(3);
        return view('revisor.history', compact('announcement_to_restore', 'announcement_to_restore_t'));
    }

    public function updateAnnouncement(Announcement $announcement){
        $announcement->setAccepted(null);
        return redirect()->back()->with('restore.message', 'Annuncio ripristinato');
    }

    public function becomeRevisor(Request $request){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $request));
        return redirect()->back()->with('message', 'La tua richiesta è stata inviata');
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ["email" => $user->email]);
        return redirect('/')->with('message', 'Complimenti! L\'utente è diventato revisore');
    }
}
