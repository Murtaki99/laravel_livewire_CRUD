@extends('layouts.app')
@push('style')
    @livewireStyles
@endpush

@push('script')
    @livewireScripts
@endpush

@section('main')
    <div>
        <h1>Products</h1>
    </div>
    <hr>
    @livewire('product-table')
@endsection
