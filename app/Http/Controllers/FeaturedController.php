<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use DB;

class FeaturedController extends Controller
{
    public function index(){
        
        $featuredArticles = DB::select("SELECT * FROM articles WHERE featured = 1 LIMIT 4");
        $featuredVideos = DB::select("SELECT * FROM videos WHERE featured = 1 LIMIT 4");
        $events = DB::select("SELECT * FROM events LIMIT 4");

        return view('welcome', [
            'featuredArticles' => $featuredArticles,
            'featuredVideos' => $featuredVideos,
            'events' => $events,
        ]);
        
    }
}
