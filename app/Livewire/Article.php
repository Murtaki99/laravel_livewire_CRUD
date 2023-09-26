<?php

namespace App\Livewire;

use Livewire\Component;

class Article extends Component
{
    public $author;

    public function mount($author)
    {
        $this->author = $author;
    }
    public function render()
    {
        return view('livewire.article')->layout('layouts.app')->slot('main');
    }
}
