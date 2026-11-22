@extends('layouts.app')

@section('title', 'Home | Laravel POS')

@section('content')
    <section class="hero rounded-4 p-5 mb-5 text-white shadow-sm">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <p class="text-uppercase fw-semibold small mb-2">Point of Sale Foundations</p>
                <h1 class="display-5 fw-bold">Welcome to Laravel POS</h1>
                <p class="lead mb-4">A simple Laravel application for exploring POS information through clean MVC architecture.</p>
                <a class="btn btn-light btn-lg" href="{{ route('customers.index') }}">View customer accounts</a>
            </div>
            <div class="col-lg-4 text-center">
                <div class="display-1">POS</div>
                <p class="mb-0">Customer and user records in one place.</p>
            </div>
        </div>
    </section>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card page-card h-100">
                <div class="card-body p-4">
                    <h2 class="h4">About the application</h2>
                    <p class="text-secondary">Learn about the purpose and scope of this student POS application.</p>
                    <a href="{{ route('about') }}" class="btn btn-outline-primary">Read about us</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card page-card h-100">
                <div class="card-body p-4">
                    <h2 class="h4">Customer accounts</h2>
                    <p class="text-secondary">Review the sample customer records held in a static PHP array.</p>
                    <a href="{{ route('customers.index') }}" class="btn btn-outline-primary">View customers</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card page-card h-100">
                <div class="card-body p-4">
                    <h2 class="h4">User accounts</h2>
                    <p class="text-secondary">Review the sample users who can work with the POS application.</p>
                    <a href="{{ route('users.index') }}" class="btn btn-outline-primary">View users</a>
                </div>
            </div>
        </div>
    </div>
@endsection
