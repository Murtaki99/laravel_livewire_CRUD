<div>
    @foreach ($articles as $article)
        <h4>{{ $article->title }}</h4>
        <p>{!! $article->body !!}</p>
    @endforeach
    <button class="btn btn-primary" wire:click="loadmore">Loadmore <div class="spinner-border text-light spinner-border-sm"
            wire:loading role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </button>

</div>
