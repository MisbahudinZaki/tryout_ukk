<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Try Out UKK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style type="text/css">

    table{
        border: 1px solid black;
        margin-left: auto;
        margin-right: auto;
        background-color: #4a4a4a;
    }

    input[type="text"]{
        padding: 20px 40px;
        font-size: 24px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        border: 2px solid black;
        align-content: center;
    }
    .text{
        padding: 20px 30px;
        font-size: 24px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        border: 1px solid black;
    }
    .operator{
        padding: 20px 10px;
        font-size: 24px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        border: 1px solid black;

    }
    .back{
        padding: 20px 40px;
        background-color: #ac1010;
        color: white;
        font-size: 24px;
        font-weight: bold;
        border-radius: 5px;
        border:none;
        text-decoration: none;
    }
    input[type="submit"]{
        width: 100%;
        padding: 20px 40px;
        background-color: #ac1010;
        color: white;
        font-size: 24px;
        font-weight: bold;
        border-radius: 5px;
        border:none;
        box-shadow: 6px 6px 6px rgba(0,0,0,0.8);
    }
    input[type="button"]{
        width: 100%;
        padding: 20px 40px;
        background-color: #090085;
        color: white;
        font-size: 24px;
        font-weight: bold;
        border-radius: 5px;
        border:none;

    }
    input[type="reset"]{
        width: 100%;
        padding: 20px 40px;
        background-color: #090085;
        color: white;
        font-size: 24px;
        font-weight: bold;
        border-radius: 5px;
        border:none;

    }
    .background {
            background-image: url('/images/Iphone wallpaper.jpg');
            /* Atur properti lainnya sesuai kebutuhan */
            background-size: cover;

            /* Atur properti lainnya sesuai kebutuhan */
        }
    </style>
</head>
<body class="background">
    <div class="container">
        @yield('kalkulator')
    </div>
</body>
</html>
