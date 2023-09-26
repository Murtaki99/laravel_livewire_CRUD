@extends('layouts.master')
@push('style')
    @livewireStyles
@endpush
{{--  --}}
@section('main')
    <div>
        <h1>Livewire CRUD:Edit Data</h1>
        <div class="row">
            <div class="col-md-6">
                @livewire('user-edit', ['user'=> $user])
            </div>
        </div>
    </div>
@endsection
{{--  --}}
@push('script')
    @livewireScripts
@endpush
