@extends('layouts.admin')

@section('content')
    <h2>Add New Contact</h2>

    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        @include('contacts.form')
    </form>
@endsection