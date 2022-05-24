<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('welcome', compact ('articles'));
    }

    public function getDelete(Article $article){
        if ($article->picture) {
            unlink(storage_path('app/public/'.$article->picture));
        }
            $article->delete();
            return redirect()->back();
    }

    public function postIndex(Request $request){
//
        if($request->hasFile('picture1')){
            $pic = App::make(App\Utils\Imag::class)->url($request->picture1);
            $request['picture'] = 'uploads/'.Auth::user()->id.'/'.$pic;
        }
        unset($request['_token']);
        $request['user_id'] = Auth::user()->id;

        Article::create($request->all());
        return redirect()->back();
    }

    public function postEdit(Request $request, Article $article){
        if ($request->hasFile('picture1')){
            if ($article->picture){
                unlink(storage_path('app/public/'.$article->picture));
            }
            $pic = App::make(App\Utils\Imag::class)->url($request->picture1);
            $newPic = 'uploads/'.Auth::user()->id.'/'.$pic;
            $article->picture=$newPic;
        }
        $article->name=$request->name;
        $article->body=$request->body;
        $article->save();
        return redirect('home');
    }
    public function getEdit(Article $article){
        return view('article_edit', compact('article'));
    }
}
