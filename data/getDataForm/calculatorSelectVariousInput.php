<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETData</title>
    <style>
        body {
            margin: 0;
        }

        main {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 40%;
            min-height: 40vh;
            background-color: #eee;
            border-radius: 10px;
        }
        input,
        button, select{
            margin-top: 2vh;
            height: 3vh;
            border: none;
            border: 1px solid #333;
            border-radius: 5px;
            padding: 4px;
        }
        select{
            font-size: 2vh;
            display: flex;
        }
        select:hover{
            margin-top: 2vh;
            border: none;
            height: 10vh;
            border: 1px solid #333;
            border-radius: 5px;
            padding: 4px;
            transition: 1s;
        }
    </style>
</head>

<body>
    <main>
        <form action="calculatorSelectVariousInput.php">
            <input type="number" name="numberOne" id="numberOne" placeholder="Number">
            <select name="operation[]" size="4" multiple="true">
                <option value="+">Somar</option>
                <option value="-">Subtrair</option>
                <option value="*">Multiplicar</option>
                <option value="/">Dividir</option>
            </select>
            <input type="number" name="numberTwo" id="numberTwo" placeholder="Number">
            <input type="submit" value="Calculator">
            <div class="result">
            <?php
            if (isset($_GET['numberOne']) && isset($_GET['operation']) && isset($_GET['numberTwo'])) {
                # code...
                $numberOne = $_GET['numberOne'];
                $numberTwo = $_GET['numberTwo'];
                $operation = $_GET['operation'];

                foreach ($operation as $key => $value) {
                    if($value == '+'){
                        $result = $numberOne + $numberTwo;
                        echo '<h2> Soma: ' . $result . '</h2>';
                    }
                    elseif($value == '-'){
                        $result = $numberOne - $numberTwo;
                        echo '<h2> Subtração: ' . $result . '</h2>';
                    }
                    elseif($value == '*'){
                        $result = $numberOne * $numberTwo;
                        echo '<h2> Multiplicação: ' . $result . '</h2>';
                    }
                    if($value == '/'){
                        $result = $numberOne / $numberTwo;
                        echo '<h2> Divisão: ' . $result . '</h2>';
                    }
                }
            }
            ?>
            </div>
        </form>
    </main>
</body>

</html>