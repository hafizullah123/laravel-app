@extends('layouts.app')  

@section('content')  
<div class="container">  
    <h1>Registers</h1>  
    <a href="{{ route('registers.create') }}" class="btn btn-primary">Create New Register</a>  

    @if(session('success'))  
        <div class="alert alert-success">{{ session('success') }}</div>  
    @endif  

    <table class="table mt-4">  
        <thead>  
            <tr>  
                <th>Name</th>  
                <th>Email</th>  
                <th>Actions</th>  
            </tr>  
        </thead>  
        <tbody>  
            @foreach($registers as $register)  
                <tr>  
                    <td>{{ $register->name }}</td>  
                    <td>{{ $register->email }}</td>  
                    <td>  
                        <a href="{{ route('registers.show', $register->id) }}" class="btn btn-info">View</a>  
                        <a href="{{ route('registers.edit', $register->id) }}" class="btn btn-warning">Edit</a>  
                        <form action="{{ route('registers.destroy', $register->id) }}" method="POST" style="display:inline;">  
                            @csrf  
                            @method('DELETE')  
                            <button class="btn btn-danger">Delete</button>  
                        </form>  
                    </td>  
                </tr>  
            @endforeach  
        </tbody>  
    </table>  
</div>  
@endsection