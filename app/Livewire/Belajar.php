<?php

namespace App\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    // public $name;
    public $name;
    public $jenis_kelamin = "Laki-laki";
    public $show_password = false;

    public function render()
    {
        return view('livewire.belajar');
    }
}
