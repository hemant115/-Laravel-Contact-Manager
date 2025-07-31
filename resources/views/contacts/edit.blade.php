@extends('layouts.admin')

@section('content')
    <h2>Edit Contact</h2>

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf @method('PUT')
        @include('contacts.form', ['contact' => $contact])
    </form>
@endsection