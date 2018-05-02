<h1>Aqui recibo formulario</h1>


<?php

echo "Nombre:".$_REQUEST['nombre'];
echo "Apellidos:".$_REQUEST['apellidos'];
echo "Correo electronico:".$_REQUEST['email'];
echo "Contraseña:".$_REQUEST['contrasena'];


?>



<pre>
<?php
    print_r ($_REQUEST);

?>
</pre>