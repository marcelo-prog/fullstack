<!DOCTYPE html>
<html lang="pt/br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" />
        <title>FULL STACK TOTAL</title>
    </head>
    <body>
        <header> 
            <h1>FULL STACK TOTAL</h1>
        </header>

        <nav>

        </nav>
        <section>
            <?php
                echo "Hello World!";
                //esse é um comentário de uma linha
                /*esse é um comentário
                de mais de uma linha*/
                $carro = 'fox';

                echo '<br/>';
                echo " Meu carro é um ". $carro;
                echo '<br/>';

                $x = 25 ;
                $y = 50 ;

                echo $x+$y;
                echo '<br/>';

                echo $y/$x;

                define ('NOME','Marcelo');

                echo '<br/>';
                echo NOME;

                echo '<br/>';

                $nome = array ('Marcelo', 'Paulo', 'João', 'Ricardo' );

                echo $nome [3] ;

                echo '<br/>';

                $nome1 =  ['Marcelo', 'Paulo', 'João', 'Roberto' ];

                echo $nome1 [3] ;

                echo '<br/>';

                $cores = 'vermelho';

                $valor = 50;

                $valor_naoInteiro = 10.05;

                $bool = true ;

                echo $cores . $valor . $valor_naoInteiro , $bool ; 




            ?>

        </section>

        <aside>

        </aside>
        <article>

        </article>

        <footer>
        <h3>FULL STACK TOTAL</h3>
        </footer>
        
    </body>
</html>