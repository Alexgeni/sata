<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PostsController extends Controller
{
    //
    public function index(){
    	return view('main');
    }
    public function post($id){
    	


    	//get from database

    	$items= DB::table('posts')->find($id);


    	return view('post' , compact('items'));
    }
    


    public function create()
    {
        # code...

        $msg='';

        return view('create',compact('msg'));

    }



     public function store()
    {
        # code...
        $data = request()->all();

        $now = DB::raw('NOW()');

       DB::table('posts')->insert(  

            [
                'name' => $data['name'] ,
               
                'sata' => $data['sata'],
               
                'freq' => $data['freq'],
               
                'polar' => $data['polar'],


                'polar_ar' => $data['polar_ar'],
               
                'srate' => $data['srate'],
               
                'fec' => $data['fec'],
               
                'name_ar' => $data['name_ar'],
               
                'sata_ar' => $data['sata_ar'],

                'created_at' => $now,


                'updated_at' => $now

               
            ]



            );

        $msg = 'Recorded and will be published after revising it Thanks!';

        return view('create',compact('msg'));



    }



    public function livesearch($q)
    {
        # code...

        
        
        $list='';

        $items= DB::table('posts')->select('name','id')->where('name','LIKE','%'.$q.'%')->get();

        //dd($items);

        foreach ($items as $item) {
            # code...


            $list.='<a href="post/'.$item->id.'">'.$item->name.'</a >';

        }

        

        return $list;
    }


}
 