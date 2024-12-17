<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('custom.bootstrap5')
</head>
<body>
    @include ('layout.header')

    @yield('content')

    @include ('layout.footer')
</body>

<style >
    .titletop {
        font-size: 200%; /* Ukuran font default untuk layar besar */
        text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3);
    }

    .slick-slide .card {
    width: 100% !important;  /* Ensure cards take full width of their container */
    height: 300px;  /* Set a fixed height for the cards */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden; /* Prevent content from overflowing */
}

.card img {
    height: 200px;  /* Fixed height for images */
    object-fit: cover;  /* Ensure images don’t stretch or distort */
}

.card-body {
    color: black;
    padding: 10px;
    flex-grow: 1; /* Allow the body to grow but ensure a max height */
    overflow: hidden; /* Prevent overflow if content is too large */
}

.slick-slide {
    margin: 0 10px; /* Margin between cards */
    display: flex;
    justify-content: center;
    align-items: center;
}

@media (max-width: 768px) {
    .titletop {
        font-size: 15%; /* Smaller font size on tablets */
    }
    .descript {
        font-size: 80%; /* Smaller description font on mobile */
    }
    .slick-slide .card {
        height: 200px; /* Set a smaller height for tablets */
        max-height: 250px; /* Ensure cards don’t exceed this height */
    }
}

@media (max-width: 480px) {
    .titletop {
        font-size: 100%; /* Even smaller font on small smartphones */
    }
    .slick-slide .card {
        height: 200px; /* Set an even smaller height for small screens */
        max-height: 200px; /* Ensure cards don’t exceed this height */
    }
}

    .slick-slide {
    margin: 0 10px; /* Memberikan jarak 10px antar kartu */}

    p{
     font-size:13px;
    }


        a {
        font-family: 'Press Start 2P', sans-serif;
        font-size: 9.5px;
        }
        h3{
            color: white;
            font: 1em sans-serif;
        }
        *{
            
        }

        body {
        background-color: black;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
</html>