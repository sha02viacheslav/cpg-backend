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
    		<p> Estimado  {{$jugador->nombre}}, </p> 
    		<p> Es un placer darte la bienvenida a <a href="{{url('/')}}">ClickPassGoal</a> </p>
    		<p> Al recibir este correo ya formás parte de nuestro staff de candidatos a convertirse en jugadores profesionales.</p>    		

    		<p> <strong>INFORMACION SOBRE TU CUENTA:</strong> </p>
    		<p> <strong>USUARIO:</strong> {{$jugador->email}} </p>
    		<p> <strong>PASSWORD:</strong> {{$clave}}</p>

    		<p> Podés ingresar a tu perfil y editarlo en el siguiente link: <strong> <a href="{{url('/editar-mi-perfil')}}"> EDITAR MI PERFIL</a></strong></p>
    		<p> Tené en cuenta que los jugadores con perfil <strong> COMPLETO</strong>  y un <strong>VIDEO HD</strong> tienen muchas más posibilidades de ser fichados por nuestros agentes.</p>
			<div class="header">
    		<h2>
    			¡Buena Suerte!
    		</h2>	
    	</div>


    	</div>
       	
    </body>
</html>