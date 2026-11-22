@extends('layouts.app')

@section('title', 'Edit User | Laravel POS')

@section('content')
    <div class="card page-card mx-auto" style="max-width: 720px;">
        <div class="card-body p-4 p-md-5">
            <h1 class="h2 mb-4">Edit User</h1>
            <form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input id="username" name="username" type="text" value="{{ old('username', $user->username) }}" class="form-control @error('username') is-invalid @enderror">
                    @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="full_name" class="form-label">Full name</label>
                    <input id="full_name" name="full_name" type="text" value="{{ old('full_name', $user->full_name) }}" class="form-control @error('full_name') is-invalid @enderror">
                    @error('full_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-4">
                    <label for="avatar" class="form-label">Profile picture</label>
                    <input id="avatar" name="avatar" type="file" accept="image/*" class="form-control @error('avatar') is-invalid @enderror">
                    <div class="form-text">Image files only, maximum 2 MB.</div>
                    @error('avatar')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    @if ($user->avatar)
                        <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($user->avatar) }}" alt="Current avatar" width="80" height="80" class="rounded-circle object-fit-cover mt-3">
                    @endif
                </div>
                <a href="{{ route('users.index') }}" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update user</button>
            </form>
        </div>
    </div>
@endsection
