@extends('layouts.app')

@section('title', 'About | Laravel POS')

@section('content')
    <div class="card page-card">
        <div class="card-body p-4 p-md-5">
            <p class="text-primary text-uppercase fw-semibold small mb-2">About this project</p>
            <h1 class="display-6 fw-bold">About the POS application</h1>
            <p class="lead text-secondary">Laravel POS demonstrates how routes, controllers, and Blade views work together in an MVC application.</p>
            <hr class="my-4">
            <div class="row g-4">
                <div class="col-md-6">
                    <h2 class="h4">Purpose</h2>
                    <p class="text-secondary">This application provides a simple starting point for viewing customer and user account information in a point-of-sale setting.</p>
                </div>
                <div class="col-md-6">
                    <h2 class="h4">Developer</h2>
                    <p class="text-secondary">This project was created for the IT0049 TFA5 activity.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
