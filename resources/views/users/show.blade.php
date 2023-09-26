@extends('layouts.master')

@section('main')
    <div>
        <h1>Livewire CRUD</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control" value="{{ $user->name }}" readonly disabled>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control" value="{{ $user->email }}" readonly disabled>
                </div>
                <a class="btn btn-primary" href="{{ route('user.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
