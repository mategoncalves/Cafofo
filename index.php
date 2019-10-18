<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    //include 'Cafofo/pessoa.php';
    include 'Cafofo/filho.php';
    $a= new pessoa(2.00,70,55);
    $b = new filho(2.00,70,55);

    echo json_encode($a, JSON_PRETTY_PRINT);;

    $b->setTimeDoCoracao("Cruzeiro");

    echo $b;



    
    
    ?> 
  </body>
</html>