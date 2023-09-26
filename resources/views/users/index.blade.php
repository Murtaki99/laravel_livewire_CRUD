@extends('layouts.master')
@push('style')
    @livewireStyles
@endpush
{{--  --}}
@section('main')
    <div>
        <h1>Livewire CRUD</h1>
        <div class="row">
            <div class="col-md-6">
                @livewire('user-create')
            </div>
        </div>
        <div class="mt-5 row">
            <div class="col-md-6">
                @livewire('user-table')
            </div>
        </div>
    </div>
@endsection
{{--  --}}
@push('script')
    @livewireScripts
@endpush
