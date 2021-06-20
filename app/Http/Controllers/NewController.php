<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Author;
use App\Models\Authors_new;
use Illuminate\Support\Facades\DB;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_news = \App\Models\News::all();
        $data_Authornews = \App\Models\Authors_new::all();
        $data_author = \App\Models\Author::pluck('name', 'id');
        return view('admin.news',['data_news' => $data_news],['data_author' => $data_author]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
  
        if ($image = $request->file('picture')) {
            $destinationPath = 'image/news';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['picture'] = "$profileImage";
        }
        
        // $courses = Author::find($request->get('id'));
        // $input->authors()->attach($courses);
        // $coursess = News::find($request->get('id'));
        // $input->news()->attach($coursess);
        
        News::create($input);
        // $role = Author::find($request->author_id);   
        // $userIds = [7];
        // $role->news()->attach($userIds);

        // $id=[1];
        // $input->news()->attach($id);
        // Authors_new::create($input);

        // $user = User::find(3);   
        // $roleIds = [1, 2];
        // $user->authors()->sync($roleIds);
 
        //create recored in role table
 
        // $role = Author::find(1);   
        // $userIds = [7];
        // $role->news()->attach($userIds);


        return redirect('/news')->with('sukses', 'Data berhasil diinput');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

            $categories = News::find($id);
            // $flight->delete();
            // return redirect('/beritaubah')->with(compact('categories'));
            return view('admin.edit',compact('categories'));
           
    }
    public function delete($id)
    {
        //
        $data_news = \App\Models\News::all();
            $categories = News::find($id);
            $categories->delete();
            $data_author = \App\Models\Author::pluck('name', 'id');
            return redirect('/news')->with('sukses', 'Data berhasil diinput');
            // return view('admin.news',['data_news' => $data_news],['data_author' => $data_author]);
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $categories = News::where('id',$request->id)
        //     ->update([
        //        'is_published' =>  1,
        //      ]);
        //      return redirect('/news')->with('sukses', 'Data berhasil diubah');
    }

    public function ubah(Request $request, $id)
    {
        //
        $users = DB::table('authors')
             ->select('publis')
             ->where('id', 1)
             ->first();
        // $jumlah = Author::where('id', 8)->get(['publis']);
        // $jumlah2 = {{$jumlah->publis()}};
        $categories = News::where('id',$request->id)
            ->update([
               'is_published' =>  1,
             ]);
        $categories2 = Author::where('id','1') 
        ->update([
            'publis' => ($users->publis +1) ,
          ]);    
             return redirect('/news')->with('sukses', 'Data berhasil diubah');
    }
    public function ubah2(Request $request, $id)
    {
        //
        $users = DB::table('authors')
             ->select('publis')
             ->where('id', 1)
             ->first();
        // $jumlah = Aut
        $categories = News::where('id',$request->id)
            ->update([
               'is_published' =>  0,
             ]);

             $categories2 = Author::where('id','1') 
             ->update([
                 'publis' => ($users->publis -1) ,
               ]);    
             return redirect('/news')->with('sukses', 'Data berhasil diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
