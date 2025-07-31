<!DOCTYPE html>
<html>
<head>
    <title>Admin - Contact Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: #7777705c;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: transparent;
}
</style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <span class="navbar-brand">📇 Contact Admin</span>
        </div>
    </nav>

    <div class="container">
        @include('components.menu')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        @yield('content')
    </div>
</body>
</html>