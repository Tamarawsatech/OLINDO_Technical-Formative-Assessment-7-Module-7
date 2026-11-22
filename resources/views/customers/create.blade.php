@extends('layouts.app')

@section('title', 'Add Customer | Laravel POS')

@section('content')
    <div class="card page-card mx-auto" style="max-width: 720px;">
        <div class="card-body p-4 p-md-5">
            <h1 class="h2 mb-4">Add Customer</h1>
            <form method="POST" action="{{ route('customers.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="full_name" class="form-label">Full name</label>
                    <input id="full_name" name="full_name" type="text" value="{{ old('full_name') }}" class="form-control @error('full_name') is-invalid @enderror">
                    @error('full_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-4">
                    <label for="phone" class="form-label">Phone</label>
                    <input id="phone" name="phone" type="text" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror">
                    @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <a href="{{ route('customers.index') }}" class="btn btn-outline-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Save customer</button>
            </form>
        </div>
    </div>
@endsection
