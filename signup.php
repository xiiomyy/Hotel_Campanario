<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>HOTEL CAMPANARIO</title>
    
</head>

<body>
    <h1>HOTEL CAMPANARIO</h1>

    <h2>WELCOME!!</h2>
    
    <div class="container">
       
        <form method="post">        <!-- (form) Se pone unicamente para crea un formulario -->
                                        <!-- (method post) Oculta los valores del formulario en la URL-->
                                        <!-- (method POST) Muestra los valores del formulario en la URL-->
            <Ul>
                <li><a href='index.php'>sign in</a></li>
                <li><a href='signup.php'>sign up</a></li>

            </Ul>

                <div class="divform">
                    <input type="text" id="nombre" name="nombre" placeholder=" NAME">
                
                </div>

                <div class="divform">
                    <input type="text" id="apellido" name="apellido" placeholder="LAST NAME">
                </div>

                <div class="divform">
                    <input type="email" id="email" name="email" placeholder="EMAIL"> 
                </div>
                <div class="divform">
                    <input type="text" id="username" name="username" placeholder=" USERNAME">
                </div>

                <div class="divform">
                    <input type="password" id="password" name="password" placeholder="PASSWORD"> 
                </div>

                <div class="button">
                    <button type="submit">SING UP</button>    
                </div>

                </div>
            
            
        </form>
    </div>
</body>
</html>