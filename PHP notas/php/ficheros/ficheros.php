<?php 

/*Abrir archivo
Se establece la ruta del documento y los permisos que se van a dar sobre ese elemento. 
r -> Permiso de lector
a+ -> Permisos de lector y editor*/
//$archivo = fopen("doc_prueba.txt","a+");

/*Mostrar contenido
fegts => Esta funcion solo muestra una linea y no agrega saltos de linea, por lo que es nececesario recorrer primero todas las lineas documento
con un feof dentro de un while y luego ejectutar fgets
feof => Recorre todas las lineas de un documento en concreto.*/
/*while(!feof($archivo)){
   $contenido = fgets($archivo);
   echo $contenido."</br>";
}

//Escribir algo dentro del documento, es necesario que la variable que contenga el documento tenga los permisos de editor.
fwrite($archivo,"Inyerccion desde php");

//Cerrar el archivo.
fclose($archivo);
*/

//-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-Manipular archivos-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-
//Copiar archivos
//copy("doc_prueba.txt","Fichero_copiado.txt") or die ("Error al procesar la solicitud.");

//Cambiar el nombre
//rename("Fichero_copiado.txt","nuevonombre.txt") or die ("Error al procesar la solicitud.");

//unlink("doc_prueba.txt") or die ("Error al procesar la solicitud.");

//Comprueba si un archivo exites o no

if(file_exists("nuevonombre.txt")){
   echo "El archivo existe";
} else{
   echo "El archivo no existe";
}
?>