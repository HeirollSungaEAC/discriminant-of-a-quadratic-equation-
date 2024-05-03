<!DOCTYPE html>
<html>
<head>
    <title>Discriminant of a Quadratic Equation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Discriminant of a Quadratic Equation</h1>
    <form method="post">
        <label for="a">Enter the value of a:</label>
        <input type="text" id="a" name="a" required><br><br>

        <label for="b">Enter the value of b:</label>
        <input type="text" id="b" name="b" required><br><br>

        <label for="c">Enter the value of c:</label>
        <input type="text" id="c" name="c" required><br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = $b * $b - 4 * $a * $c;

        echo "<p>The discriminant is: $discriminant</p>";
    }
    ?>
</div>

</body>
</html>
