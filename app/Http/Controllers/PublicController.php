<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function show(){
        // $announcements = Announcement::all();
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at','desc')->take(6)->get();        
        return view('home',compact('announcements'));  
    
    }

    public function categoryShow(Category $category){

        return view('categoryShow',compact('category')); 
    }

    public function detailShow(Announcement $announcement){

        $related = Announcement::where('category_id', '=', $announcement->category->id)->where('id', '!=', $announcement->id)->orderBy('created_at','desc')->take(3)->get();

        return view('announcement.detailShow', compact('announcement', 'related'));
    }

    public function indexShow(){
        // $announcements = Announcement::all();
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at','desc')->paginate(6);        
        return view('announcement.index',compact('announcements'));  
    
    }

    public function searchAnnouncements(Request $request){

        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(6);
        return view('announcement.index',compact('announcements')); 
    }

    public function setLanguage($lang) {

        session()->put('locale', $lang);
        return redirect()->back();
    }
}
