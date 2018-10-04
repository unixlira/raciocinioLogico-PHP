<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gabarito processo seletivo - Por José Roberto</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div class="container">
            <h1>Gabarito de respostas do Processo Seletivo</h1>
            <h2>da Studio Visual </h2>
            <br/>            
            <?php
                require_once 'src/config.php';

                $resultado = new Booglanianos();

                echo '------------------------------------------------------------------------------------------------------------<br/>';
                //$resultado->preposicao($resultado->textoA);Confirmado
                $resultado->preposicoes($resultado->textoB);
                echo '------------------------------------------------------------------------------------------------------------<br/>';
                //$resultado->verbo($resultado->textoA);Confirmado
                $resultado->verbos($resultado->textoB);
                echo '------------------------------------------------------------------------------------------------------------<br/>';
                //$resultado->verboPrimeiraPessoa($resultado->textoA);Confirmado
                $resultado->verboPrimeiraPessoa($resultado->textoB);
                echo '------------------------------------------------------------------------------------------------------------<br/>';
                //$resultado->listadeVocabulario($resultado->textoA);Confirmado
                $resultado->listadeVocabulario($resultado->textoB);
                echo '------------------------------------------------------------------------------------------------------------<br/>';
                //$resultado->numerosBonitos($resultado->textoA);
                $resultado->bonitoes($resultado->textoB);
                echo '------------------------------------------------------------------------------------------------------------<br/>';
            ?>
        </div>        
        <footer>
            <h5>Desenvolvido por <a href="https://unixlira.github.io" target="blank">José Roberto</a> com Dedicação, Pesquisa, Esforço, ++Café e várias Horas.</h5>
        </footer>
    </body>
</html>