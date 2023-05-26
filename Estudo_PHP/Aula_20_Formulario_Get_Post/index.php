<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <meta name="description" content="Descrição do Site."/>
    <meta name="keywords" content="palavras chaves" />
    <meta name="author" content="Autor do Site"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0"/>
    <link href="css/style.css" type="text/css" rel="stylesheet">
  </head>

  <body>

    <?php
        /*//método get
        if(isset($_GET['acao'])){
            $nome = @$_GET['nome'];
            $email = @$_GET['email'];
            
            echo $nome;
            echo '<br />';
            echo $email;
        }

        //método post
        if(isset($_POST['acao'])){
            $nome = @$_POST['nome'];
            $email = @$_POST['email'];
            
            echo $nome;
            echo '<br />';
            echo $email;
        }
        */
        //OUTRO EXEMPLO post
        /*if(isset($_POST['acao'])){
            echo $_POST['nome'];
        }
        */

        if(isset($_POST['acao'])){
            foreach ($_POST['valor'] as $key => $value){
                echo $value;
            }
        }
    ?>

    <form method="post">
        <select name="nome">
            <option value="Valcimar">Valcimar</option>
            <option value="Kelly">Kelly</option>
        </select>

        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40

        <input type="submit" name="enviar" value="Enviar" />
    </form>

  </body>
</html>