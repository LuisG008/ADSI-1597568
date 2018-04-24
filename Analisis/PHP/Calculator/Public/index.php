<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estiloscss.css">
        <title>Calculator in php</title>
    </head>
    <body>
       
        <h1>Calculator</h1>
        <div class="form">
        <form action="calc.php" method="get">
            <input type="number" name="n1">
            <select name="operation">
                <option value="">Seletect</option>
                <option value="1">Sum</option>
                <option value="2">Rest</option>
                <option value="3">Mult</option>
                <option value="4">Div</option>
                <option value="5">Log</option>
                <option value="6">Squared</option>
                <option value="7">Pow</option>
                <option value="8">Sqrt</option>
            </select>
            <input type="number" name="n2">
            <button type="submit">=</button>
            
        </form>
        </div>
    </body>
</html>
