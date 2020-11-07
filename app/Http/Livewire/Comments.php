<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{
    // public $comments;
    // public function mount($initialComments){
        // dd($initialComments);
    //     $this->comments = $initialComments;
    // }

    // public function mount(){
        //     $initialComments = Comment::latest()->get();
        //     $this->comments = $initialComments;
        // }
    use WithPagination;

    public $newComment;

    public function updated($champs){
        $this->validateOnly($champs,[
            "newComment"=> "max:255"
        ]);
    }

    public function addComment(){
        $this->validate(['newComment'=>'required|max:255']);

        $createdComment = Comment::create([
            "body"=> $this->newComment,
            "user_id"=> 1
        ]);

        // $this->comments->prepend($createdComment);
        // $this->newComment="";

        session()->flash('message', "Comment added successfully ! ");
    }


    public function remove($commentId){
        $comment = Comment::find($commentId);
        $comment->delete();
        // $this->comments = $this->comments->except($commentId);
        session()->flash('message', 'Comment deleted with successfully');
    }

    public function render()
    {
        return view('livewire.comments', [
            'comments'=> Comment::latest()->paginate(2)
        ]);
    }
}
