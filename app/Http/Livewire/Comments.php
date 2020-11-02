<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;
use Faker\Factory;

class Comments extends Component
{
    public $newComment;
    public $comments = [
        [
            'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap int",
            'created_at' => '5 min ago',
            'creator' => 'Nos'
        ],

    ];

    public function addComment()
    {
        $faker= Factory::create();
        array_unshift($this->comments, [
                'body' =>$this->newComment,
                'created_at' => Carbon::now()->diffForHumans(),
                'creator' =>$faker->name
            ]
        );
        $this->newComment="";
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
