<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        return view( 'tags.tags' )->with([
            'tags'  => Tag::all()
        ]);
    }

    public function show( $id ){
        $tag = Tag::find( $id );
        return view( 'tags.tag' )->withTag($tag);
    }

    public function store( Request $request ){

        $request->validate([
            'tag_title' => 'required'
        ]);

        $tag = new Tag();
        $tag->title = $request->get('tag_title');
        $tag->save();
        return redirect()->back()->with('message' , 'Tag has been created');

    }
}
