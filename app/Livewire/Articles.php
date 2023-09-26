<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Articles extends Component
{
    public $count = 4;

    public function render()
    {
        $articles = Article::take($this->count)->get();
        return view('livewire.articles', [
            'articles' => $articles
        ]);
    }

    public function loadmore()
    {
        $this->count += 4;
        sleep(1);
    }
}
