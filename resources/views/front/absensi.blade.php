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
            #btn-toggle-password {cursor: pointer;}
        </style>
    </head>

    <body class="text-center">

        <div class="container d-flex h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto"></header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading mb-md-5 mb-3">Absensi</h1>
                <div class="col-md-6 mx-auto text-justify">
                    <form method="post" action="/absensi/submit">
                        {{ csrf_field() }}
                        @if(Session::get('message'))
						<div class="alert alert-primary">
							{{ Session::get('message') }}
						</div>
                        @endif
                        <div class="form-group">
                            <input type="text" name="username" class="form-control {{ $errors->has('username') ? 'border-danger' : '' }}" value="{{ old('username') }}" placeholder="Username / Email" autofocus>
                            @if($errors->has('username'))
                            <small class="form-row col-12 mt-1 text-danger">{{ ucfirst($errors->first('username')) }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'border-danger' : '' }}" placeholder="Password">
                                <div class="input-group-append">
                                    <a class="input-group-text text-white {{ $errors->has('password') ? 'border-danger bg-danger' : 'bg-primary' }}" id="btn-toggle-password"><i class="fa fa-eye"></i></a>
                                </div>
                                @if($errors->has('password'))
                                <small class="form-row col-12 mt-1 text-danger">{{ ucfirst($errors->first('password')) }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="instansi" class="form-control {{ $errors->has('instansi') ? 'border-danger' : '' }}" value="{{ old('instansi') }}" placeholder="Asal Sekolah / Instansi">
                            @if($errors->has('instansi'))
                            <small class="form-row col-12 mt-1 text-danger">{{ ucfirst($errors->first('instansi')) }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="jurusan" class="form-control {{ $errors->has('jurusan') ? 'border-danger' : '' }}" value="{{ old('jurusan') }}" placeholder="Jurusan">
                            @if($errors->has('jurusan'))
                            <small class="form-row col-12 mt-1 text-danger">{{ ucfirst($errors->first('jurusan')) }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="kelas" class="form-control {{ $errors->has('kelas') ? 'border-danger' : '' }}" value="{{ old('kelas') }}" placeholder="Kelas">
                            @if($errors->has('kelas'))
                            <small class="form-row col-12 mt-1 text-danger">{{ ucfirst($errors->first('kelas')) }}</small>
                            @endif
                        </div>
                        <div class="form-group text-center">
                            <label><strong>Waktu</strong></label>
                            <input type="text" id="waktu" class="form-control" readonly>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Submit</button>
                        <a href="/" class="btn btn-block btn-warning mt-3">Kembali</a>
                    </form>
                </div>
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
        <script>
        	window.setTimeout("waktu()", 0);
 
            // Waktu Berjalan
            function waktu() {
                var waktu = new Date();
                setTimeout("waktu()", 1000);
                var waktuberjalan = prefix_zero(waktu.getDate()) + '/' + prefix_zero(waktu.getMonth()+1) + '/' + waktu.getFullYear() + ' ' + prefix_zero(waktu.getHours()) + ':' + prefix_zero(waktu.getMinutes()) + ':' + prefix_zero(waktu.getSeconds());
                $("#waktu").val(waktuberjalan);
            }

            function prefix_zero(number){
                return number < 10 ? '0' + number : number;
            }

            // Button toggle password
            $(document).on("click", "#btn-toggle-password", function(e){
                e.preventDefault();
                if(!$(this).hasClass("show")){
                    $("input[name=password]").attr("type","text");
                    $(this).find(".fa").removeClass("fa-eye").addClass("fa-eye-slash");
                    $(this).addClass("show");
                }
                else{
                    $("input[name=password]").attr("type","password");
                    $(this).find(".fa").removeClass("fa-eye-slash").addClass("fa-eye");
                    $(this).removeClass("show");
                }
            });
        </script>
    </body>
</html>
