<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 1;

    public function increment()
    {
        $this->count++;
    }


    public function refreshCounter()
    {

    }

    public $todo = '';
    public $todos = [
        'Take shower',
        'goto market',
        'buy milk',
    ];


    public function add()
    {

        $this->todos[] = $this->todo;

        $this->todo = '';
        // or $this->reset('todo');

        // dd("Hi Ashenafi");
    }
    public function render()
    {
        return view('livewire.counter');
    }

}
