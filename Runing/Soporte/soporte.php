<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ssneaker.cl</title>
    <link href="soporte.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <div class="volver">
            <a href="../Perfil/Originscl.php"><img class="volver_img" src="https://cdn.pixabay.com/photo/2014/04/03/10/29/arrow-310630_960_720.png"></a>
        </div>
        <div class="logo_ssneaker">
           <a href="../Buscador/buscador.php">
                <img class="logo_ssneaker_img" src="https://raw.githubusercontent.com/Brakmel/Ssneaker2.1/main/SsneakerPHP/ssneaker/buscador/img/imagen_2022-04-18_225930174_auto_x2.png">
                <input type="search" class="buscar" value="Buscar zapatilla">
            </a>
        </div>
        <div class="perfiles">
            <a href="../Perfil/Durazno.php"><img class="perfiles_img" src="https://cdn.pixabay.com/photo/2014/04/03/10/29/arrow-right-310628_960_720.png"></a>
        </div>
    </header>
    <main>
        <h1>Soporte</h1>
        <form action="https://formsubmit.co/bran.hernandez@inacapmail.cl" enctype="multipart/form-data" method="POST">
            <div class="apodo">
                <input class="apodo_input" type="text" name="Apodo:" placeholder="Apodo" required>
            </div>
            <div class="fomra_contacto">
                <input class="correo_input" type="email" name="Correo" placeholder="Brakmel9@outlook.cl">
                <input class="telefono_input" type="text" name="Numero" placeholder="+56 9 6222 2538">
            </div>
            <div class="asunto">
                <input class="asunto_input" type="text" name="Asunto" placeholder="Creo que podrian agregar...¡PONYS!" required>
            </div>
            <div class="foto">
                <input class="foto_input" type="file" name="Foto" accept="image/png, image/jpeg" required>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex voluptate magnam ducimus, animi aut suscipit magni aliquid maiores, est ullam? Accusantium culpa laborum fugiat iusto nisi nihil cupiditate maxime.
            </p>
            <div class="enviar">
                <input class="enviar_input" type="submit" value="¡Enviar correo!">
            </div>        
        </form>
    </main>
        <!--Aqui esta el footer-->
        <footer>
            <div class="baul_numero_contacto">
                <p class="despacho">Call Center: +56 9 8393 7467</p>
            </div>
            <div class="baul_redes_sociales">
                   <div class="pildora_red">
                        <a href="https://web.whatsapp.com/">
                            <img class="wspp" src="../img/wsp.PNG">
                        </a>
                   </div> 
                   <div class="pildora_red">
                        <a href="https://www.facebook.com/">
                            <img class="face" src="../img/Face.PNG">
                        </a>
                   </div>
                   <div class="pildora_red">
                        <a href="https://www.instagram.com/">
                            <img class="ints" src="../img/Insta.PNG">
                        </a>
                   </div>
            </div>
            <div class="baul_agradecimientos">
                <p class="despacho"> -Lo prado</p>
            </div>
        </footer>
</body>
</html>