@extends('layouts.app')

@section('title', 'User Accounts | Laravel POS')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <p class="text-primary text-uppercase fw-semibold small mb-1">Account listing</p>
            <h1 class="display-6 fw-bold mb-1">User Accounts</h1>
            <p class="text-secondary mb-0">Sample POS team member records.</p>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span class="badge text-bg-primary rounded-pill px-3 py-2">{{ count($users) }} users</span>
            <a class="btn btn-primary" href="{{ route('users.create') }}">Add user</a>
        </div>
    </div>

    <div class="card page-card">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Avatar</th>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <img src="{{ $user->avatar ? \Illuminate\Support\Facades\Storage::disk('public')->url($user->avatar) : asset('images/avatar-placeholder.svg') }}" alt="Avatar for {{ $user->full_name }}" width="48" height="48" class="rounded-circle object-fit-cover">
                            </td>
                            <td>{{ $user->id }}</td>
                            <td class="fw-semibold">{{ $user->username }}</td>
                            <td>{{ $user->full_name }}</td>
                            <td><a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
