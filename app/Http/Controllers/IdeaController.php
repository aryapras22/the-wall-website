<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class IdeaController extends Controller
{
    public function store(){
        // dump($_POST);

        request()->validate(
            [
                'content' => 'required|min:5|max:240',
            ]
        );

        $idea = Idea::create(
            [
                'content' => request()->get('idea',''),
            ]
        );
        
        return redirect()->route('dashboard')->with('success','Idea was added successfully!');
    }


    public function destroy(Idea $idea){
        // $idea = Idea::where('id',$id)->firstOrFail();
        // $idea->delete();

        $idea->delete();

        return redirect()->route('dashboard')->with('success','Idea was deleted successfully!');
    } 

    public function show(Idea $idea){
        // $idea = Idea::where('id',$id)->firstOrFail();

        
        return view('ideas.show',compact('idea'));
    }
    

    public function edit(Idea $idea){
        $editing = true;
        return view('ideas.show',compact('idea','editing'));
    }

    public function update(Idea $idea){
        request()->validate(
            [
                'content' => 'required|min:5|max:240',
            ]
        );

        $idea->content = request()->get('content','');
        $idea->save();
        
        return redirect()->route('ideas.show',$idea->id)->with('success','Idea was updated successfully!');
    }
    
}
