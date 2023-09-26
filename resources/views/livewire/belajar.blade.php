<div>
    <div class="m-3">
        {{-- <input type="text" wire:model.live="name"> --}}
        <input type="radio" name="jenis_kelamin" value="Laki-laki" wire:model="jenis_kelamin">Laki-laki
        <input type="radio" name="jenis_kelamin" value="Prempuan" wire:model="jenis_kelamin">Prempuan
        <textarea wire:model.live="name"></textarea>
        {{-- <select class="form-control" wire:model="jenis_kelamin">
            <option hidden>Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Prempuan">Prempuan</option>
        </select> --}}
        <p>{{ $name }} {{ $jenis_kelamin }}</p>
    </div>
    <hr>
    <select name="jenis_kelamin" class="form-control" wire:model.live="jenis_kelamin">
        <option hidden>Jenis Kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Prempuan">Prempuan</option>
    </select>
    <p>{{ $jenis_kelamin }}</p>
    <hr>
    <input @if ($show_password == 'show') type="text" @else  type="password" @endif name="show_password"
        class="form-control">
    <input type="checkbox" name="show" id="show" value="show" wire:model.live="show_password">
</div>
