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
    <link rel="stylesheet" href="Registro.css">
</head>
<body>
    <!-- P: Representa "Peinados" elegantes y profesionales que ofrece la peluquería.
    A: Simboliza "Arreglo" personalizado para cada cliente, realzando su belleza.
    T: Significa "Tendencias" modernas y a la moda en cortes y estilos.
    N: Evoca "Nueva imagen" y renovación que los clientes pueden experimentar.
    U: Refleja "Único" y exclusivo, ya que cada cliente recibe un trato especial.
    B: Hace referencia a "Belleza" y bienestar, lo que la peluquería busca resaltar.-->
    <div class="box">
        <form id="loginForm" action="registro.php" method="POST">
            <h2> Registrate <span class="logo" ><img src="000011.png" alt=""></span></h2> 
                <label> </label>
                <a href="../pagina.web/home-shape/index.html">Inicio</a>
                <div class="input-box">
                <input type="text" name="Nombre" required>
                <label> Nombre </label>
                <i class="fas fa-user"></i>
            </div>
            <div class="input-box">
                <input type="text" name="Apellido" required>
                <label> Apellido </label>
                <i class="fas fa-user"></i>
            </div>
           
            <div class="input-box">
                <input type="text" name="Email" required>
                <label>  Email</label>
                <i class="fas fa-user"></i>
            </div>
            <div class="input-box">
                <input type="text" name="Telefono" required>
                <label> Telefono </label>
                <i class="fas fa-user"></i>
            </div>
            <div class="input-box">
            <input type="password"  name="Contrasena"required >
            <label> Contrasena</label>
            <i class="fas fa-lock"></i>
        </div>
        
        <div class="items">
            <div class="left">
                <input type="checkbox" id="check">
                <label for="check"> Recordar</label>
            </div>
            <div class="rigth">
                <a href="#"> Olvide mi Contrasena</a>
            </div>
        
            </div>
            <div class="button">
                <button type="submit"   name="Registrate" id="loginButton">Registrate</button>
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
        <script src="registro.js"></script>
    
</body>
<?php
if (isset($_POST['Registrate'])) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Contrasena = $_POST['Contrasena'];

    $insertardatos = "INSERT INTO clientes (Nombre, Apellido, Email, Telefono) VALUES ('$Nombre', '$Apellido', '$Email', '$Telefono')";
    $ejecutarinsertar = mysqli_query($enlace, $insertardatos);

    if ($ejecutarinsertar) {
        echo "dato guardado ";
    } else {
        echo "Error al guardar los datos: " . mysqli_error($enlace);
    }
}
?>
