@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registered Guests</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Registered At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guests as $guest)
                <tr>
                    <td>{{ $guest->id }}</td>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->username }}</td>
                    <td>{{ $guest->email }}</td>
                    <td>{{ $guest->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
