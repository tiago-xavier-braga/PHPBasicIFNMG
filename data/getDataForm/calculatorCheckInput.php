<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetData</title>
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
            min-width: 40%;
            min-height: 40vh;
            background-color: #eee;
            border-radius: 10px;
        }
        input,
        button, select {
            margin-top: 2vh;
            height: 3vh;
            border: none;
            border: 1px solid #333;
            border-radius: 5px;
            padding: 4px;
        }
        .checkBox{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            align-items: center;
            justify-content: center;
        }
        .result{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .result h2{
            margin: 10px;
        }
    </style>
</head>

<body>
    <main>
        <form action="calculatorCheckInput.php">
            <input type="number" name="numberOne" id="numberOne" placeholder="Number">
            <div class="checkBox">
                <input type="checkbox" name="soma" id="Somar">
                <label for="Somar">Somar</label>
                <input type="checkbox" name="subtrair" id="Subtrair">
                <label for="Subtrair">Subtrair</label>
                <input type="checkbox" name="multiplicar" id="Multiplicar">
                <label for="Multiplicar">Multiplicar</label>
                <input type="checkbox" name="dividir" id="Dividir">
                <label for="Dividir">Dividir</label>
            </div>

            <input type="number" name="numberTwo" id="numberTwo" placeholder="Number">
            <input type="submit" value="Calculator">
            <div class="result">
            <?php
            if (isset($_GET['numberOne']) && isset($_GET['numberTwo'])) {
                # code...
                $numberOne = $_GET['numberOne'];
                $numberTwo = $_GET['numberTwo'];

                if(isset($_GET['soma']) == 'on'){
                    $result = $numberOne + $numberTwo;
                    echo '<h2>' . $result . '</h2>';
                }
                if(isset($_GET['subtrair']) == 'on'){
                    $result = $numberOne - $numberTwo;
                    echo '<h2>' . $result . '</h2>';
                }
                if(isset($_GET['multiplicar']) == 'on'){
                    $result = $numberOne * $numberTwo;
                    echo '<h2>' . $result . '</h2>';
                }
                if(isset($_GET['dividir']) == 'on'){
                    $result = $numberOne / $numberTwo;
                    echo '<h2>' . $result . '</h2>';
                }
            }
            ?>
            </div>
        </form>
    </main>
</body>

</html>