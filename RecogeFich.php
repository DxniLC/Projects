<?php
print_r($_POST);

echo "<hr>\n";

print_r($_FILES);

if(move_uploaded_file($_FILES["perfil"]["tmp_name"], "C:/xampp/htdocs/pagweb/imagenes/FotosUsu/" . $_FILES["perfil"]["name"]))
    echo "Bien";
else
    echo "Mal";
?>
