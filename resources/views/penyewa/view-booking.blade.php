<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container">
        <h2>Your Bookings</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Kos Name</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->kos->name }}</td>
                        <td>{{ $booking->check_in_date }}</td>
                        <td>{{ $booking->check_out_date }}</td>
                        <td>{{ $booking->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
