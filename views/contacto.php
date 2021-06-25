<?php 
require ("../contenidos/head_contacto.php");
 ?>

<body style="/*100%de l ancho y de largo*/
background-size:100vw 100vh;
/*imagen fija*/
background-attachment:fixed;
margin:0;
background-image:url(../img/daria-nepriakhina-EvX8-J2ClMo-unsplash.jpg);
">

 
<div class="contact-form">
	

<form action="../contenidos/enviar" method="POST">
<a class="btn btn-primary" href="../index.php"><i style="color:black;" class="fas fa-arrow-circle-left"></i> volver</a> 
<h2 style="color:#fff;">CONTACTO</h2>
<input type="text" name="NOMBRE" placeholder="NOMBRE"required>
<input type="email" name="CORREO" placeholder="CORREO"required>
<input type="number" name="TELEFONO" placeholder="TELEFONO"required>
<textarea name="MENSAJE" placeholder="ESCRIBA AQUI SU MENSAJE"required></textarea>

<input type="submit" name="ENVIAR" id="boton_enviar" value="ENVIAR">

</form>
</div>


</body>

</html>