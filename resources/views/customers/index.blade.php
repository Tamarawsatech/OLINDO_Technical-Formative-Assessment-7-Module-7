@extends('layouts.app')

@section('title', 'Customer Accounts | Laravel POS')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <div>
            <p class="text-primary text-uppercase fw-semibold small mb-1">Account listing</p>
            <h1 class="display-6 fw-bold mb-1">Customer Accounts</h1>
            <p class="text-secondary mb-0">Sample customer records for the POS application.</p>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span class="badge text-bg-primary rounded-pill px-3 py-2">{{ count($customers) }} customers</span>
            <a class="btn btn-primary" href="{{ route('customers.create') }}">Add customer</a>
        </div>
    </div>

    <div class="card page-card">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td class="fw-semibold">{{ $customer->full_name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td><a href="{{ route('customers.edit', $customer) }}" class="btn btn-sm btn-outline-secondary">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
