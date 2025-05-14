<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'func.php';
    require_once 'dados.php'; 
    ?>
<ul class="formulario">
<select name="Filme" id="filmes" class="form">
<form  method="get" id="formEscolha">
            <option value='formulario' class="birulinha">Escolha um Filme</option>
            <?php
                getElenco($filmes, function($elenco){
                    var_dump($elenco);
                    foreach ($elenco as $elenco) {
                        echo "<option value='{$elenco}'>{$elenco}</option>";
                    }
                });
            ?>
        </select>
</form>
</ul>

<ul>
    <?php
     if(isset($_GET['elenco'])){
         $elenco = $_GET['elenco'];
         getElencoPorFilme(
             $elenco, 
             $filmes, 
             function($elencoDoFilme){
                 foreach ($elencoDoFilme as $key => $value) {
                     echo "<li>{$key} - {$value}</li>";
                    }
                }
            );
        }
    ?>
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('especie').addEventListener('change', function() {
                document.getElementById('formEscolha').submit();
            });
        });
        </script>
</ul>
</body>
</html>