<!doctype html>
<html>
    <head>
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
    <center>
    <h1>Los resultados son: </h1>
    
    <?php
    $puntos=0;
    $contador=$_GET["tabla"];
    $rangouno=$_GET["rango1"];
    $rangodos=$_GET["rango2"];
   
    if ($rangouno>=$rangodos) 
    {
        for ($rangouno; $rangodos<=$rangouno;$rangodos++)
      
    {
        $resultado=$_GET["x".$rangouno];
        $multiplicacion=($contador*$rangouno);
        echo '<br>
        <h2> Resultado de '.$contador.'x'.$rangouno.' : '.$resultado.'</h2> 
        <h2>El resultado Correcto es:'.$multiplicacion.'</h2>';
       
        if($resultado==$multiplicacion)
        {
            echo'<br>
        <h2 style="color: green"> resultado de '.$contador.'x'.$rangouno.'
        es: '.$resultado.'</h2>';
        $puntos++;
        }
        else
        {
            echo'<br>
        <h2 style="color: red">el resultado de '.$contador.'x'.$rangouno.'
        es: '.$resultado.'</h2>';
        }
        
    }
    echo '<br> <h1>Los aciertos son de: '.$puntos.' de '.$contador.' </h1';
       
       
        
}

   else if ($rangouno<=$rangodos) 
  
   for ($rangouno; $rangouno<=$rangodos;$rangouno++)
      
    {
        $resultado=$_GET["x".$rangouno];
        $multiplicacion=($contador*$rangouno);
        echo '<br>
        <h2> Resultado de '.$contador.'x'.$rangouno.' : '.$resultado.'</h2> 
        <h2>El resultado Correcto es:'.$multiplicacion.'</h2>';
       
        if($resultado==$multiplicacion)
        {
            echo'<br>
        <h2 style="color: green">Tu resultado de '.$contador.'x'.$rangouno.'
        es: '.$resultado.'</h2>';
        $puntos++;
        }
        else
        {
            echo'<br>
        <h2 style="color: red">Tu resultado de '.$contador.'x'.$rangouno.'
        es: '.$resultado.'</h2>';
        }
    }
    
        echo '<br> <h1>Los aciertos son de: '.$puntos.' de '.$contador.' </h1';
        

        ?>
        </center>
               </form>
    </body>
</html>


