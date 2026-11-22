@extends('layouts.app')

@section('title', 'Add User | Laravel POS')

@section('content')
    <div class="card page-card mx-auto" style="max-width: 720px;">
        <div class="card-body p-4 p-md-5">
            <h1 class="h2 mb-4">Add User</h1>
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input id="username" name="username" type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror">
                    @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-4">
                    <label for="full_name" class="form-label">Full name</label>
                    <input id="full_name" name="full_name" type="text" value="{{ old('full_name') }}" class="form-control @error('full_name') is-invalid @enderror">
                    @error('full_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <a href="{{ route('users.index') }}" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save user</button>
            </form>
        </div>
    </div>
@endsection
