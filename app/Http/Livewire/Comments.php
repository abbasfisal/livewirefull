<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Faker\Factory;
use phpDocumentor\Reflection\Types\This;

class Comments extends Component
{
    public $newComment;
    public $comments ;

    public function addComment()
    {
      if($this->newComment=='')
          return ;
      $this->comments->prepend(Comment::create(['body'=>$this->newComment , 'user_id'=>'1']));

      $this->newComment='';
    }

    public function mount()
    {

        $this->comments=Comment::latest()->get();
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
