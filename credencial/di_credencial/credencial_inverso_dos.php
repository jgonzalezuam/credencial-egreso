<?php
$conexion =  mysqli_connect("localhost", "root", "", "credencial_egresado");
mysqli_set_charset($conexion,"utf8");
//if ($conexion) {
  // echo "Conexion Exitosa";
//}else {
  //  echo "Error en conexion";
//}


$matricula = $_POST['matricula'];  

try{
    $client = new SoapClient ("https://siae.uam.mx:8443/sae/webservices/aeugwssiv005dlw.wsdl", 
    array('cache_wsdl'=> WSDL_CACHE_NONE, 'trace' => TRUE, 'connection_timeout'=>150));
    $param = array(
        'PCUENTA' => $matricula,
        'PUSUARIO' => 'rcgvdiod00ow',
        'PIDKEY' => 31,
        'PHASH' => '30313C18FFE728C680EF10B3B87892146485D99397D7C1238CC5348958CD69EF');
    $ready = $client->oSelDatEgrCtaUsr($param);
    //var_dump($ready);
    //echo "RESPONSE: \n" . $client->__getLastResponse() . "\n";
} catch(Exception $e){
    trigger_error($e->getMessage(), E_USER_WARNING);
}

function separaArreglo($cadena){
	
	$campos = explode('|', $cadena);
	$respuesta[] = ['matricula' =>$campos[2], 'rfc'=>$campos[3], 'nombre'=>$campos[4], 'numero'=>$campos[5], 'grado'=>$campos[6], 'numero_dos'=>$campos[7], 'plan'=>$campos[8], 'unidad'=>$campos[9], 'egreso'=>$campos[10], 'estado'=>$campos[11], 'nomgra'=>$campos[12]];
	$respuesta[] = ['matricula' =>$campos[12], 'rfc'=>$campos[13], 'nombre'=>$campos[14], 'numero'=>$campos[15], 'grado'=>$campos[16], 'numero_dos'=>$campos[17], 'plan'=>$campos[18], 'unidad'=>$campos[19], 'egreso'=>$campos[20], 'estado'=>$campos[21], 'nomgra'=>$campos[22]];
	//$respuesta[] = ['matricula' =>$campos[22], 'rfc'=>$campos[23], 'nombre'=>$campos[24], 'numero'=>$campos[25], 'grado'=>$campos[26], 'numero_dos'=>$campos[27], 'plan'=>$campos[28], 'unidad'=>$campos[29], 'egreso'=>$campos[30], 'estado'=>$campos[31], 'nomgra'=>$campos[32]];


    
    echo "<div class='li'   >" . $campos[8] . "</div>";
    echo "<div class='ma'   >" . $campos[18] . "</div>";
    echo "<div class='eg'   >" . $campos[10] . "</div>";    
    echo "<div class='egm'   >" . $campos[20] . "</div>";    
	return $respuesta;
}

$datos = separaArreglo($client->__getLastResponse());

//echo $client->__getLastResponse();
    
?>

<style>
.li{
    width: 163px;
    height: 37px;;
    font-size:10px;
    background: none;
    border:none;
    color: white;
    position:relative;
    top:423px;
    right:60px;
    left:18px;
    bottom: 15px;
    border-radius: 0px -5px 1px 0px;
    z-index:1;
}

.ma{
    width: 163px;
    height: 37px;;
    font-size:10px;
    background: none;
    border:none;
    color: white;
    position:relative;
    top:438px;
    right:60px;
    left:18px;
    bottom: 15px;
    border-radius: 0px -5px 1px 0px;
    z-index:1;
}

</style>

<style>
.eg{
    width: 163px;
    height: 37px;;
    font-size:13px;
    background: none;
    border:none;
    color: black;
    position:relative;
    top:347px;
    right:73px;
    left:200px;
    bottom: 15px;
    border-radius: 0px -5px 1px 0px;
    z-index:1;
}

.egm{
    width: 163px;
    height: 37px;;
    font-size:13px;
    background: none;
    border:none;
    color: black;
    position:relative;
    top:363px;
    right:72px;
    left:200px;
    bottom: 15px;
    border-radius: 0px -5px 1px 0px;
    z-index:1;
}

</style>

<?php foreach($datos as $i=>$alumno){?>

<?php }
$valor = $_POST['unidad_uno'];  
$valor2 = $_POST['unidad_dos'];  
//$valor = '$unidAD; // Este valor puede ser dinámico

// Definir una variable para la clase CSS
$claseColor = '';
$claseColor2 = '';

?>  



<!DOCTYPE html>
<html lang="en">
<style>
        /* Define clases de colores para el fondo del input */
        .azcapotzalco { background-color: #CD032E; }        
        .cuajimalpa { background-color: #F08200; }
        .iztapalapa { background-color: #57A519; }        
        .lerma { background-color: #AD25A8; }
        .xochimilco { background-color: #0072CE; }
    </style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credencial de Egresada y Egresado UAM</title>
    <link rel="stylesheet" href="css/estilos_2.css">
    <link rel="stylesheet" href="css/dark.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>
</head>

<body class="">

    <h1>Credencial de Egresada y Egresado UAM</h1>
    

    <!-- <div class="modo" id="modo">
        <i class="fas fa-toggle-on"></i>
    </div> -->
    <?php
               $productos= "SELECT * FROM egresados_multimedia where matricula=$matricula";
               
                // Asignar la clase CSS según el valor
    if ($valor == 'azcapotzalco') {
        $claseColor = 'azcapotzalco';
    } elseif ($valor == 'cuajimalpa') {
        $claseColor = 'cuajimalpa';
    } elseif ($valor == 'iztapalapa') {
        $claseColor = 'iztapalapa';
    } elseif ($valor == 'lerma') {
        $claseColor = 'lerma';
    } elseif ($valor == 'xochimilco') {
        $claseColor = 'xochimilco';
    }

    if ($valor2 == 'azcapotzalco') {
        $claseColor2 = 'azcapotzalco';
    } elseif ($valor2 == 'cuajimalpa') {
        $claseColor2 = 'cuajimalpa';
    } elseif ($valor2 == 'iztapalapa') {
        $claseColor2 = 'iztapalapa';
    } elseif ($valor2 == 'lerma') {
        $claseColor2 = 'lerma';
    } elseif ($valor2 == 'xochimilco') {
        $claseColor2 = 'xochimilco';
    }
          ?>

				<?php
					$resultado = mysqli_query($conexion, $productos);
					while($dato=mysqli_fetch_assoc($resultado)){
				?>
    <section class="card"  onclick="printHTML()">
        <div class="card__perfil">
            <div class="card__nombre">
                <br><br><br> <br><br>
                <img class="firma" src="data:image/jpg;base64,<?php echo base64_encode($dato["firma"]); ?>" alt="" class="firma">
                <br>
               <h3> <input class="carrera" type="text" name="carrera_nivel" id="carrera_nivel" value="<?php //echo $datos[$i]['plan']; ?>" style="border:none;" disabled></h3>
                <br>
                <h3> <input class="egreso"  type="text" name="" id="" value="<?php //echo //$datos[$i]["egreso"]; ?>" style="border:none;" disabled></h3>
                <br>
                <h3> <input class="folio"  type="text" name="" id="" value="<?php echo $dato["id"]; ?>" style="border:none;" disabled></h3>
               <!-- <img style="width:30px; height:30px;" src="data:image/jpg;base64,<?php// echo base64_encode($dato["qr"]); ?>" alt="">-->
                <br>
                <br>
                <h3> <input class="unidad  <?php echo $claseColor; ?>"  type="text" name="" id="" style="border:none;" disabled></h3>
                <br>
                <h3> <input class="unidad2  <?php echo $claseColor2; ?>"  type="text" name="" id="" style="border:none;" disabled></h3>
                <br>
                <h3> <input class="vigencia"  type="text" name="" id="" value="<?php echo $dato["vigencia"]; ?>" style="border:none;" disabled></h3>

                   <br>
                <h3> <input class="fec_emision"  type="text" name="" id="" value="<?php echo $dato["fec_emision"]; ?>" style="border:none;" disabled></h3>
                <!--<input class="linea_unidad" style="border:0; background:red; width: 230px; height:35px;"  disabled>-->
            </div>
           <br>
            <!--<div class="card__button">
                <a class="enlace" href="#">Girar</a>
            </div>-->
        </div>
      
        <?php
                  } mysqli_free_result($resultado);
                
   
    ?>
				
        <div class="unidad">
            <style>
            .unidad{
                width: 195px;
                height: 37px;;
                background: $valor;
                position:relative;
                top:;
                right:;
                left:-60px;
                bottom:319px;
                border-radius: 0px -5px 1px 0px;
            }
            </style>
        </div>

            <div class="unidad2">
            <style>
            .unidad2{
                width: 215px;
                height: 37px;;
                background: $valor2;
                position:relative;
                top:;
                right:;
                left:-70px;
                bottom:340px;
                border-radius: 0px -5px 1px 0px;
            }
            </style>
        </div>

           <div class="fec_emision">
            <style>
            .fec_emision{
                width: 190px;
                height: 42px;;
                background: none;
                position:relative;
                font-size:10px;
                top:;
                right:;
                left:160px;
                bottom:289px;
                border-radius: 0px 5px 5px 0px;
            }
            </style>
        </div>


            <div class="vigencia">
            <style>
            .vigencia{
                width: 190px;
                height: 42px;;
                background: none;
                position:relative;
                font-size:10px;
                top:;
                right:;
                left:107px;
                bottom:212px;
                border-radius: 0px 5px 5px 0px;
            }
            </style>
        </div>

         <div class="folio">
            <style>
            .folio{
                width: 190px;
                height: 42px;;
                background: none;
                position:relative;
                font-size:10px;
                top:;
                right:20px;;
                left:155px;
                bottom:6px;
                border-radius: 0px 5px 5px 0px;
            }
            </style>
        </div>

         <div class="egreso">
            <style>
            .egreso{
                width: 190px;
                height: 42px;;
                background: none;
                position:relative;
                font-size:13px;
                top:;
                right:20px;;
                left:137px;
                bottom:131px;
                border-radius: 0px 5px 5px 0px;
            }
            </style>
        </div>

        <div class="firma">
            <style>
            .firma{
                width: 113px;
                height: 44px;;
                background: none;
                border: none;
                position:relative;
                top:-45px;
                right:0px;;
                left:35px;
                bottom:0px;
                border-radius: 7px 7px 7px 7px;
              
            }
            </style>
        </div>

        <div class="carrera">
            <style>
            .carrera{
                width: 190px;
                height: 42px;;
                background: none;
                color: white;
                border: none;
                position:relative;
                font-size:6.2px;
                top:-54px;
                right:30px;;
                left:;
                bottom:200px;
                z-index:1;
                border-radius: 7px 7px 7px 7px;
              
            }
            </style>
        </div>
    </section>

    <script src="js/main.js"></script>
</body>

</html>

<script>
    function printHTML() {
      if (window.print) {
        window.print();
      }
    }
    </script>