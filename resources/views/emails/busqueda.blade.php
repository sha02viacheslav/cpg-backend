<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bienvenido a Click Pass Goal</title>
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Raleway:400,300,500,700);
        body {margin: 0; padding: 0; min-width: 100%!important;
            font-family: 'Raleway', "Helvetica Neue",Helvetica,Arial,sans-serif;}
        .content {width: 100%; max-width: 600px;}
        .header h1 {
            text-transform: uppercase;
            font-size: 250%;
            color: black;
            font-weight: 300;
            cursor: pointer;
            letter-spacing: 1px;
        }
        .header h1 span {
            color: #37a0e6;
        }
        .header{
            width: 100%;
            text-align: center;
        }
        .messageBox{
            width: 90%;
            margin: 0px auto;
        }
        .messageBox a{
            text-transform: uppercase;
            color: #37a0e6;
            text-decoration: none;
        }
    </style>
</head>
<body >
<div class="header">
    <h1>
        Click<span class="cpgPass">Pass</span>Goal
    </h1>
</div>
<div class="messageBox">
    <p> Recibimos una nueva solicitud para unirse a nuestro Staff:</p>
    <p> <strong>INFO DEL APLICANTE:</strong> </p>
    <p> <strong>NOMBRE:</strong> {{$solicitud['nombre']}} </p>
    <p> <strong>USUARIO:</strong> {{$solicitud['email']}} </p>
    <p> <strong>PREGUNTA:</strong> {{$solicitud['pregunta']}}</p>
</div>

</body>
</html>