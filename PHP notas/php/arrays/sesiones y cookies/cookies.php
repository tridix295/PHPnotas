<?php
/*
*Las cookies sirven para guardar datos del usuario, se almacena en el cliente por lo que este 
puede acceder a este. Tambien sirve para guardar datos como auto guardado etc...
*Es una variable superglobal y es un array asosiativo.
*/
//cookie basica 
setcookie("micookie", "valor de mi galleta");

//cookie con expiracion
//Define la cookie =>setcokie("nombre","valor","expiracion","dominio");
setcookie("micookie","soy una galleta", time()+(60*60*24*365));

$name="Sebastian";
setcookie("testcookie", $name);
//muestra el contenido de todas las cookies
print_r($_COOKIE);

//cookies en un array
setcookie("cookie[three]", "cookiethree");
setcookie("cookie[two]", "cookietwo");
setcookie("cookie[one]", "cookieone");

// después de que la página se recargue, imprime
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
}
?>