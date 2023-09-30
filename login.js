document.getElementById("loginForm").addEventListener("submit", function (event) {
    event.preventDefault();
    console.log("Formulario enviado"); 
    var username = document.querySelector('input[type="text"]').value;
    var password = document.querySelector('input[type="password"]').value;
    if (username === "patricia@gmail.com" && password === "12345") {
     
        window.location.href = "file:///C:/xampp/htdocs/php/Invetario/pagina.web/dashboard/index.html"; 
    } else {
        alert("Credenciales incorrectas. Intente de nuevo.");
    }
});