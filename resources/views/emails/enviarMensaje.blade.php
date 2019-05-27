<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Felicitaciones {{$jugador->nombre}} ¡Tienes un nuevo mensaje de nuestros Agentes!</title>
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
        .footer{
            width: 100%;
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
    <p> Estimado  {{$jugador->nombre}}, </p>
    @if(!$jugador->estado  || $jugador->estado == 1 )
        <p> Estas a un paso de completar tu ficha. Al hacerlo podrás ser visto por cientos de clubes y agentes en todo el mundo.</p>
    @endif
    <p> Tienes un nuevo mensaje de uno de nuestros Agentes Representantes: </p>
    <p style="margin: 20px 0px; font-style: italic"> {{$mensaje}}</p>

    <p> Podés ingresar a tu perfil y editarlo en el siguiente link: <strong> <a href="{{url('/editar-mi-perfil')}}"> EDITAR MI PERFIL</a></strong></p>
    <p > ¡No te pierdas la oportunidad de ser un jugador profesional!</p>

    <div class="footer">
        <p>
            Saludos cordiales.
            <br>
            El equipo de <a href="{{url('/')}}">Click Pass Goal</a>
        </p>
    </div>
</div>

</body>
</html>