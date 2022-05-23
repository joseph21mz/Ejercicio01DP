<?php
  echo $datos_tennis =  file_get_contents('https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items');
   $json_tennis = json_decode($datos_tennis, true);

foreach ($json_tennis as $tennis) {

   if( $tennis['id'] == '3'){
    
    $array_tennis = array(
        "id" => $tennis['id'],
        "type" => $tennis['type'],
        "color" => $tennis['color']
    );
   $cambio= array_replace($array_tennis,['id'=>'30'], ['type'=>'nike'],['color'=>'yellow']);
    $json_string = json_encode($cambio);
    $file = 'Respuesta1.json';
    file_put_contents($file, $json_string);

   } 

   if ( $tennis['id'] == '9'){
     
    $array_tennis = array(
        "id" => $tennis['id'],
        "type" => $tennis['type'],
        "color" => $tennis['color']
    );
  
   }

}
?>

    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Mi Primer Ejercicio</title>
      </head>
      <body>
         <?php
            $json_string = json_encode($cambio);
            print_r ($json_string);
         ?>
        </form>
      </body>
    </html>;

 


 



