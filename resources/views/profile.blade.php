@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-4 bg-white shadow rounded">
    <h2 class="text-3xl font-bold mb-4">Welcome, {{ $user->name }}</h2>
    <p>Email: {{ $user->email }}</p>
    <p>Member since: {{ $user->created_at->format('M d, Y') }}</p>
</div>
@endsection