<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilik Dashboard</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ url('/homee') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> pemilik
                Dashboard</a>
    </nav>
    </div>
    </nav>
    <div class="container mt-4">
        <h4>Pemilik Dashboard</h4>
        <ul>
            <li><a href="">Manage Kos-Kosan</a></li>
            <li><a href="">Manage Bookings</a></li>
            <li><a href="">View Payments</a></li>
        </ul>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
