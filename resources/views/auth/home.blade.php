@extends('layout')
@section('title', 'Dashboard')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="card mb-5">
                <div class="card-body">
                    <h2 class="mb-4">Welcome to Your Dashboard, {{ Auth::user()->name }}!</h2>
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <p class="lead">You are now logged in to the Laravel CRUD application.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Posts</h5>
                    <p class="card-text">Manage your blog posts</p>
                    <a href="{{ route('posts.index') }}" class="btn btn-primary">View Posts</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Genres</h5>
                    <p class="card-text">Manage content genres</p>
                    <a href="{{ route('genres.index') }}" class="btn btn-primary">View Genres</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">Manage content categories</p>
                    <a href="{{ route('categories.index') }}" class="btn btn-primary">View Categories</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Account Information</h5>
                    <div class="mb-3">
                        <strong>Name:</strong> {{ Auth::user()->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ Auth::user()->email }}
                    </div>
                    <div class="mb-3">
                        <strong>Account Created:</strong> {{ Auth::user()->created_at->format('F d, Y') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
