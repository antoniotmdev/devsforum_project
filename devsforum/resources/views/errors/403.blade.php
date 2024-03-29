<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <style type="text/css">
        body{
            margin-top: 150px;
            background-color: deeppink;
        }
        .error-main{
            background-color: #fff;
            box-shadow: 0px 10px 10px -10px #5D6572;
        }
        .error-main h1{
            font-weight: bold;
            color: #444444;
            font-size: 100px;
            text-shadow: 2px 4px 5px #6E6E6E;
        }
        .error-main h6{
            color: #42494F;
        }
        .error-main p{
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row text-center">
        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
            <div class="row">
                <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
                    <h1 class="m-0">403</h1>
                    <h6>No tienes permiso para acceder a este lugar </h6>
                    <p>Volver a inicio</p>
                    <p><a href="{{ URL::to('/') }}" class="btn btn-dark">Inicio</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

