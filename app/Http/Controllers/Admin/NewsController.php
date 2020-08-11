<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\Region;
use App\Province;
use App\User;
use App\Categorie;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::all();
        $users=User::get();
        $categories=Categorie::get();
        $regions=Region::get();
        $provinces=Province::get();
       return view('admin.users.news.index',compact('news','users','categories','regions','provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(News $news)
    {
        $news=News::all();
        $users=User::get();
        $categories=Categorie::get();
        $regions=Region::get();
        $provinces=Province::get();

        return view('admin.users.news.form',compact('news','users','categories','regions','provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(News $news)
    {
        $data=request()->validate([
            'topic'=> ['required','string'],
            'body'=> ['required','string'],
            'image'=> ['required','image'],
            'user_id'=> ['required'],
            'categorie_id'=> ['required'],
            'region_id'=> ['required'],
            'province_id'=> ['required'],
        
          ]);
    
          $imagePath=request('image')->store('uploads','public');
          $new=News::create([
              'topic'=>$data[ 'topic'],
              'body'=>$data[ 'body'],
              'image'=>$imagePath,
              'user_id'=>$data[ 'user_id'],
              'categorie_id'=>$data[ 'categorie_id'],
              'region_id'=>$data[ 'region_id'],
              'province_id'=>$data[ 'province_id'],
         
          
              ]);      
             return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new=News::find($id);
        $users=User::get();
        $categories=Categorie::get();
        $regions=Region::get();
        $provinces=Province::get();
        return view('admin.users.news.show',compact('new','users','categories','regions','provinces'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $new=News::find($id);
        $users=User::get();
        $categories=Categorie::get();
        $regions=Region::get();
        $provinces=Province::get();

        return view('admin.users.news.edit',compact('new','users','categories','regions','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(News $news)
    {
        $data=request()->validate([
            'topic'=> ['required','string'],
            'body'=> ['required','string'],
            'image'=> ['required','image'],
            'user_id'=> ['required'],
            'categorie_id'=> ['required'],
            'region_id'=> ['required'],
            'province_id'=> ['required'],
           
          ]);
      
          $news->update($data);
          return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new=News::find($id);
        $new->delete();
        return redirect()->route('admin.news.index');
    }
}
