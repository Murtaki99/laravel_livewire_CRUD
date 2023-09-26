<div>
    <input class="form-control mb-2" type="number" name="counter" id="counter" wire:model.live="counter">
    <button class="btn btn-success" wire:click="increment">+</button>
    @if ($counter >= 1)
        <button class="btn btn-danger" wire:click="decrement">-</button>
    @endif
</div>
