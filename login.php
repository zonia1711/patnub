<?php 
$servidor="localhost";
$usuario="root";
$contrasena="";
$basededatos="patnub";
$enlace= mysqli_connect($servidor,$usuario,$contrasena,$basededatos);
?>
    <!DOCTYPE html>
    <head>
        <meta  charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initia-scale=1.0">
        <title>PATNUB-Lakshmi</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <!-- P: Representa "Peinados" elegantes y profesionales que ofrece la peluquería.
        A: Simboliza "Arreglo" personalizado para cada cliente, realzando su belleza.
        T: Significa "Tendencias" modernas y a la moda en cortes y estilos.
        N: Evoca "Nueva imagen" y renovación que los clientes pueden experimentar.
        U: Refleja "Único" y exclusivo, ya que cada cliente recibe un trato especial.
        B: Hace referencia a "Belleza" y bienestar, lo que la peluquería busca resaltar.-->
        <div class="box">
            <form id="loginForm">
                <h2> Iniciar sesión <span class="logo" ><img src="000011.png" alt=""></span></h2> 
                    <label> ¿No tienes cuenta?</label>
                    <a href="/xampp/htdocs/php/Invetario/pagina.web/Registro.php">Registrate</a>
                    <div class="input-box">
                    <input type="text" required>
                    <label> Usuario o email</label>
                    <i class="fas fa-user"></i>
                </div>
                <div class="input-box"> 
                <input type="password" required >
                <label> Contraseña</label>
                <i class="fas fa-lock"></i>
            </div>
            <div class="items">
                <div class="left">
                    <input type="checkbox" id="check">
                    <label for="check"> Recordar</label>
                </div>
                <div class="rigth">
                    <a href="#"> Olvide mi Contraseña</a>
                </div>
            
                </div>
                <div class="button">
                    <button type="submit" id="loginButton">Iniciar sesión</button>
                    <a href="../pagina.web/dashboard/index.html"> </a>
                </div>
                <div class="other-links">
                    <p>Ingresar con:</p>
                    <div class="social">
                    <a href="#"><i class="fab fa-google"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                    </div>
            </form>
            <script src="login.js"></script>
        
    </body>
    </html>