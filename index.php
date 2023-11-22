<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ell Mario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>

    .card-body {
        margin: 0 auto;
        padding: 0;
        width: 100%;
        height: 550px;
        position: absolute;
        position: relative;
        background-image: url("bgmario.jpg");
        background-size: 100% 100%;
        }

    .io {
        position: absolute;
        transition: top 0.9s ease;
        width: 250px;
        height: 200px;
        margin-top: 280px;
    }

    .merah {
        position: absolute;
        left: 400px;
        width: 70px;
        height: 60px;
        margin-top: 410px;
    }

    .hijau {
        position: absolute;
        bottom: 80px;
        left: 700px;
    }
    </style>
</head>

<body>

<div class="card">
  <div class="card-header">
    Ell Super Mario
  </div>
  <div class="card-body">
    <img src="mario.png" width=250px height=200px id="io" class="io">
    <img src="jamurmerah.png" width=70px height=60px id="jamur" class="merah">
    <img src="jamurhijau.png" width=75px height=65px id="hijau" class="hijau">
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<script src=" main.js"></script>