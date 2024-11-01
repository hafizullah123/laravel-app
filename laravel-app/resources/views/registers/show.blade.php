@extends('layouts.app')  

@section('content')  
<div class="container">  
    <h1>Register Details</h1>  
    <p><strong>Name:</strong> {{ $register->name }}</p>  
    <p><strong>Email:</strong> {{ $register->email }}</p>  

    <a href="{{ route('registers.index') }}" class="btn btn-primary">Back to Registers</a>  
</div>  
@endsection