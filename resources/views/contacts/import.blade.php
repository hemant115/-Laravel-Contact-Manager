@extends('layouts.admin')

@section('title', 'Import Contacts')

@section('content')
<div class="container">
    <h2>Import Contacts from XML</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contacts.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="xml_file" class="form-label">XML File</label>
            <input type="file" name="xml_file" id="xml_file" class="form-control" accept=".xml" required>
        </div>
        <button type="submit" class="btn btn-primary">Import</button>
    </form>
</div>
@endsection