@extends('layouts.app')  

@section('content')  
<div class="container">  
    <h1>Edit Register</h1>  
    <form action="{{ route('registers.update', $register->id) }}" method="POST">  
        @csrf  
        @method('PUT')  
        <div class="form-group">  
            <label>Name</label>  
            <input type="text" name="name" class="form-control" value="{{ $register->name }}" required>  
        </div>  
        <div class="form-group">  
            <label>Email</label>  
            <input type="email" name="email" class="form-control" value="{{ $register->email }}" required>  
        </div>  
        <div class="form-group">  
            <label>Password (leave blank to keep current)</label>  
            <input type="password" name="password" class="form-control">  
        </div>  
        <button type="submit" class="btn btn-success">Update</button>  
    </form>  
</div>  
@endsection