<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\User;
use App\Region;
use App\Province;
use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthManager;

class NewsController extends Controller
{


    private $auth;
    private $user;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct(AuthManager $auth, User $user){
        $this->auth=$auth;
        $this->user=$user;
            }
    public function index()
    {
        
        $news=News::get();
       return view('admin.users.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $auteurs=[];
        $i=0;
        $users=User::get();
        $categories=Categorie::get();
        $regions=Region::get();
        $provinces=Province::get();
        foreach($users as $user){
               if($user->isAuteur()){
                $auteurs[$i]=$user;
                $i++;
               }       
        }
        
        return view('admin.users.news.form',compact('categories','regions','provinces','auteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data=request()->validate([
            'topic'=> ['required','string'],
            'region_id'=> ['required','integer'],
            'province_id'=> ['required','integer'],
            'categorie_id'=> ['required','integer'],
            'auteur_id'=> ['required','integer'],
            'body'=> ['required','string'],
            'image'=> ['required','image'],
          ]);

          $imagePath=request('image')->store('uploads','public');
          $categorie=News::create([        
              'topic'=>$data[ 'topic'],   
              'user_id'=>$this->auth->user()->id,
              'categorie_id'=>$data['categorie_id'],
              'region_id'=>$data[ 'region_id'],
              'province_id'=>$data[ 'province_id'],
              'body'=>$data[ 'body'],
              'topic'=>$data[ 'topic'],
              'auteur_id'=>$data[ 'auteur_id'],
              'image'=>$imagePath               
           ]);

              return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
