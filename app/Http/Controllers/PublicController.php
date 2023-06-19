<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function show(){
        // $announcements = Announcement::all();
        $announcements = Announcement::orderBy('created_at','desc')->take(6)->get();        
        return view('home',compact('announcements'));  
    
    }

    public function categoryShow(Category $category){

        return view('categoryShow',compact('category')); 
    }

    public function detailShow(Announcement $announcement){

        return view('announcement.detailShow', compact('announcement'));
    }
}
