<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'body' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap int",
            'created_at' => '5 min ago',
            'creator' => 'Yasin'
        ],

    ];

    public function addComment()
    {
        array_unshift($this->comments, [
                'body' => 'new cooment',
                'created_at' => '53 min ago',
                'creator' => 'Mohammad'
            ]
        );


    }

    public function render()
    {
        return view('livewire.comments');
    }
}
