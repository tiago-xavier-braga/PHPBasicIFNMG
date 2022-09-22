<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/index.css">
    <title>Document</title>
</head>

<body>

    <main>
        <div class="box-container">
            <?php
            $db_fake = [
                [
                    'cod' => 12345,
                    'tit' => 'Algoritmos e Lógica da programação',
                    'aval' => 5,
                    'recom' => 1,
                    'preco' => 39.93,
                    'cond' => '2x de R$ 19,36 sem juros no carão de crédito',
                    'img' => 'https://images-americanas.b2w.io/produtos/01/00/img/2768179/6/2768179677P1.jpg',
                ],
                [
                    'cod' => 12346,
                    'tit' => 'Olá, ruby: uma aventura pela programação',
                    'aval' => 2,
                    'recom' => 1,
                    'preco' => 31.48,
                    'cond' => '1x de R$ 31,48 sem juros no cartão de crédito',
                    'img' => 'https://images-americanas.b2w.io/produtos/01/00/img/2768179/6/2768179677P1.jpg',
                ],
                [
                    'cod' => 12346,
                    'tit' => 'Olá, ruby: uma aventura pela programação',
                    'aval' => 2,
                    'recom' => 1,
                    'preco' => 31.48,
                    'cond' => '1x de R$ 31,48 sem juros no cartão de crédito',
                    'img' => 'https://images-americanas.b2w.io/produtos/01/00/img/2768179/6/2768179677P1.jpg',
                ],
                [
                    'cod' => 12346,
                    'tit' => 'Olá, ruby: uma aventura pela programação',
                    'aval' => 2,
                    'recom' => 1,
                    'preco' => 31.48,
                    'cond' => '1x de R$ 31,48 sem juros no cartão de crédito',
                    'img' => 'https://images-americanas.b2w.io/produtos/01/00/img/2768179/6/2768179677P1.jpg',
                ],
            ];
            $boxBook = <<<TEXT
        <div>    
            <img src="%s" width="150px">
            <p>%s</p>
            <h1>%s</h1>
            <h2>R$ %.2f</h2>
            <p>%d</p>
            <p>%s</p>
        </div>
TEXT;

            foreach ($db_fake as $i) {
                printf($boxBook, 
                $i['img'], 
                $i['recom'], 
                $i['tit'], 
                $i['preco'], 
                $i['aval'], 
                $i['cond']);
            }

            ?>
        </div>
    </main>


</body>

</html>