<!doctype html>
<html>
    <head>
        <title>Procesando tabla de multiplicar</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <body>
    <h2>Completa todos los campos de las multiplicaciones</h2>
    <form action="calcular.php" method="get">
        <?php
        $tabla=$_GET["tabla"];
        $nombre=$_GET["nombre"];
        $correo=$_GET["correo"];
       
       // $tabla=$_GET["tabla"];
        $rango1=$_GET["rango1"];
        $rango2=$_GET["rango2"];

        echo '<input type="hidden" id="tabla" name="tabla"
        value ="'.$tabla.'">';

        echo '<input type="hidden" id="rango1" name="rango1"
        value ="'.$rango1.'">';
        
        echo '<input type="hidden" id="rango2" name="rango2"
        value ="'.$rango2.'">';
        
        if ($rango1>=$rango2) 
        {
            for ($rango1; $rango2<=$rango1;$rango2++)
            {
                echo'<label for= "frname">'.$tabla.'x'.$rango2.':</label>
                <input type = "text" id="x'.$rango2.'"name="x'.$rango2.'"value =""><br>';
            }
        }
        else 
        {
            if ($rango1<=$rango2) 
            {
                for ($rango2; $rango1<=$rango2;$rango1++)
                {
                    echo'<label for= "frname">'.$tabla.'x'.$rango1.':</label>
                    <input type = "text" id="x'.$rango1.'"name="x'.$rango1.'"value =""><br>';
                }   
            }

            

        }
        
    
        echo "Nombre: ", $nombre .'<br>' ;
         
        echo "Email: ", $correo ;  
        ?>
        <br>
        
        <input class="btn btn-success btn-lg" type="submit" value="Calcular">
    </form>
        </body>
</html>