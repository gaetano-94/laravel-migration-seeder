<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains Italy</title>
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- /Font Awesome --}}
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center my-5">Stazione dei Treni</h1>
    <div class="container d-flex gap-2 flex-wrap justify-content-center">
        @foreach ($trains as $train)
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <ul>
                        <li><strong>Company:</strong> {{ $train['company'] }}</li>
                        <li><strong>Free On Rail:</strong> {{ $train['free_on_rail'] }}</li>
                        <li><strong>Arrival Station:</strong> {{ $train['arrival_station'] }}</li>
                        <li><strong>Departure Time:</strong> {{ $train['departure_time'] }}</li>
                        <li><strong>Arrival Time:</strong> {{ $train['arrival_time'] }}</li>
                        <li><strong>Price: </strong> {{ $train['price'] }} <i class="fa-solid fa-euro-sign"
                                style="color: #000000;"></i></li>
                        <li><strong>Train Code:</strong> {{ $train['train_code'] }}</li>
                        <li><strong>Number Of Carriages:</strong> {{ $train['number_of_carriages'] }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
