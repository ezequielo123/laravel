<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    //
    public function post_detail($id = null)
    {
        if(!$id) return redirect()->route('home');


        $detail_view = view('blog/post_detail');
        $detail_view->id = $id;
        return $detail_view;
        
    }

    public function post_list()
    {
        //this should be retreived from the database
        $posts = array(
            1 =>'My Post',
            2 =>'Your Post',
            3 =>'His Post'
        );
        $list_view = view('blog/post_list');
        $list_view->posts = $posts;

        return $list_view;
    }
}
