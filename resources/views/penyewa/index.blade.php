<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ url('/homee') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Penyewa Dashboard</a>
    </nav>
    <div class="container mt-4">
        <h4>Penyewa Dashboard</h4>
        <ul>
            <li><a href="{{ route('search-kos') }}">Search Kos-Kosan</a></li>
            <li><a href="{{ route('view-bookings') }}">View Bookings</a></li>
            <li><a href="">Make Payments</a></li>
            <li><a href="">Write Reviews</a></li>
        </ul>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
