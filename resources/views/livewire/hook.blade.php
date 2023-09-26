<div>
    <input type="text" wire:model.live="hobi" placeholder="property hobi">
    <input type="text" wire:model.live="color" placeholder="property hobi">

    <div>
        <div>Hobi: {{ $hobi }}</div>
        <div>Warna Kesukaan: {{ $color }}</div>
    </div>
    <ul>
        @foreach ($process as $items)
            <li>{{ $items }}</li>
        @endforeach
    </ul>
</div>
