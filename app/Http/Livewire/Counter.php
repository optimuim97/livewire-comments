<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment(){
          $count = $this->count ++;
    }

    public function decrement(){
          $count = $this->count --;
    }


    public function render()
    {
        return view('livewire.counter', ['count', $this->count]);
    }
}
