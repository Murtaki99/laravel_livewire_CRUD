<?php

namespace App\Livewire;

use Livewire\Component;

class Hook extends Component
{
    public $hobi = "Playing football";
    public $color = "blue";
    public $process = [];

    public function mount()
    {
        $this->process[] = "sedang di mount";
    }

    public function hydrate()
    {
        $this->process[] = "sedang di hydrate";
    }

    public function updating($name, $value)
    {
        $this->process[] = "sedang di updating =>$name & $value";
    }

    public function updated($name, $value)
    {
        $this->process[] = "sedang di updated";
    }

    public function render()
    {
        $this->process[] = "sedang di render";
        $this->process[] = "------------";
        return view('livewire.hook');
    }
}
