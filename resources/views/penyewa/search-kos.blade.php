<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewa Dashboard</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <div class="container">
            <a href="{{ route('dashboard-penyewa.index') }}" class="navbar-brand mb-0 h1">
                <i class="bi-hexagon-fill me-2"></i> search kos</a>
        </div>
    </nav>
        <div class="container mt-4">
            <form action="{{ route('search-kos') }}" method="GET">
                <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="Search by name or address">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Search</button>
            </form>
            <div class="row mt-4">
                @foreach ($kos as $k)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $k->name }}</h5>
                                <p class="card-text">{{ $k->address }}</p>
                                <p class="card-text">Price: {{ $k->price_per_month }}</p>
                                <a href="{{ route('kos.show', $k->id) }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    @vite('resources/js/app.js')
</body>

</html>
