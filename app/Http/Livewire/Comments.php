<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Faker\Factory;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\This;

class Comments extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    public $newComment;
    //public $comments;

    public function updated($field)
    {
        //realtime validation
        $this->validateOnly($field, ['newComment' => 'required|min:10']);
    }

    public function remove($commentId)
    {
        $comment= Comment::find($commentId);
        $comment->delete();

        //$this->comments = $this->comments->except($commentId);
        session()->flash('message','Comment Successfully Removed ');
    }
    public function addComment()
    {
        $this->validate(['newComment' => 'required']);

        Comment::create(['body'=>$this->newComment,'user_id'=>'1']);
        //$this->comments->prepend(Comment::create(['body' => $this->newComment, 'user_id' => '1']));

        $this->newComment = '';
        session()->flash('message','comment added successfully :)');
    }



   /* public function mount()
    {

        $this->comments = Comment::latest()->get();
    }*/

    public function render()
    {
        return view('livewire.comments',[
            'comments'=>Comment::latest()->paginate(2)
        ]);
    }
}
