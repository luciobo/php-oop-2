<?php 

require_once "./Models/Prodotto.php";
require_once "./Models/Categoria.php";
require_once "./Models/Cibo.php";
require_once "./Models/Gioco.php";

$CategoriaGatto = new Categoria("Gatto", "fa-cat" );
$CategoriaCane = new Categoria("Gatto", "fa-dog" );
var_dump($CategoriaGatto, $CategoriaCane);


$mieiProdotti = new Prodotto("cuccia per cani", "cuccie", "url" , "40", $CategoriaGatto) ;
var_dump($mieiProdotti);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>php-oop-2</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

</body>

</html>