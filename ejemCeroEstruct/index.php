<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example One</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="container">
    <header>
        <h1>Variables en PHP</h1>
        <nav>
            <a href="formDatos.html">Calculos</a>
            <a href="ejerDos.html">Empleados</a>
            <a href="ejerTres.html">Hotel</a>
        </nav>
    </header>
    <section>
        <?php
            //Operacion aritmetica
            

            

            
        ?>
    </section>
    <br><br>
    <section>
        <?php
            //Estructuras de decision if
            $a = 3;
            $b = "3";

            if ($a === $b) {
                echo "Correcto";
            } else {
                echo "Incorrecto";
            }
        ?>
    </section>
    <br><br>
    <section>
        <?php
            //Estructuras de decision case
            $productName = "Otro";
            $price = 0;

            switch ($productName) {
                case 'Zapatos':
                    $price = 1000;
                    echo "Price: " . $price;
                    break;
                case 'Jeans':
                    $price = 500;
                    echo "Price: " . $price;
                    break;                
                default:
                    $price = 0;
                    echo "Price: " . $price;
                    break;
            }
        ?>
    </section>
    <br><br>
    <section>
        <?php
            //Estructuras de decision if con Y (&&) y O (||)
            // Negacion ! 
            $a = 8; $b = 3; $c = 3;

            var_dump(($a == $b) && ($a > $b));
            echo "<br>";
            var_dump(($c == $b) || ($b > $c));
            echo "<br>";
            var_dump(!($c == $b) || ($b > $c));

        ?>
    </section>
    <br><br>
    <section>
        <?php
            //Estructuras de control
            // for (bucle)
            for ($i=0; $i <=10 ; $i++) { 
                echo "Valor de i es ",$i,"<br>";
            }
        ?>
    </section>
    <br><br>
    <section>
        <?php
            //Estructuras de control
            // foreach (bucle)
            $names = ['Ana', 'Jesus', 'Maria'];
            foreach ($names as $key => $name) {
                echo $key . ' - ' .$name . '<br>';
            }
        ?>
    </section>
    <br><br><br><br><br><br>
    <footer>
        &copy; created by WCG - 2020
    </footer>
</body>
</html>