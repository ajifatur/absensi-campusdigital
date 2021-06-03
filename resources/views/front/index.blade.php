<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="{{ setting('site.description') }}">
        <link rel="icon" href="{{ 'https://campusdigital.id/assets/images/icon/'.setting('site.icon') }}">

        <title>Absensi Online &#8211; {{ setting('site.name') }}</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="{{ asset('assets/css/cover.css') }}" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
        
        <!-- Google font -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700">

        <style type="text/css">
            body {background-image: url('')!important; background-size: cover; background-repeat: no-repeat; font-family: Lato;}
        </style>
    </head>

    <body class="text-center">

        <div class="container d-flex h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto"></header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading">Absensi</h1>
                <p class="lead">Sebuah Sistem Absensi Online untuk peserta magang / pelatihan online yang diadakan oleh Campus Digital.<br>Sistem ini untuk mengakomodasi absensi peserta magang / pelatihan yang saat ini tidak memungkinkan untuk melakukan absensi secara offline.</p>
                <p class="lead">
                    <a href="/absensi" class="btn btn-lg btn-primary">Absen Disini</a>
                </p>
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p>Copyright 2020. All Rights Reserved by <a href="https://campusdigital.id" target="_blank">{{ setting('site.name') }}</a>.</p>
                </div>
            </footer>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
