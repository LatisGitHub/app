<?php
//------------------------ funcion encriptar -----------------
/*$clave  = 'Una cadena muy larga';

$method = 'aes-256-cbc';

$iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");
 function encriptar ($valor,$method, $clave, $iv) {
     return openssl_encrypt ($valor, $method, $clave, false, $iv);
 };
 function desencriptar ($valor,$method, $clave, $iv) {
     $encrypted_data = base64_decode($valor);
     return openssl_decrypt($valor, $method, $clave, false, $iv);
 };
 $getIV = function () use ($method) {
     return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
 };
*/
function encriptar($mensaje, $clave)
{   $palabraEncriptada="";
    $letras = str_split($mensaje, 1);

    foreach ($letras as $valor) {
        $nums = ord($valor);
        $nuev = chr($nums + $clave);
        $palabraEncriptada .= $nuev;
    }
    return $palabraEncriptada;
}

function desencriptar($mensaje, $clave)
{
    $palabraDesc = "";
    $letras = str_split($mensaje, 1);
    
    foreach ($letras as $valor) {
        $nums = ord($valor);
        $nuev = chr($nums - $clave);
        $palabraDesc .= $nuev;
    }
    return $palabraDesc;

}



//Si he pinchado en un link
if ($_GET) {

    if (isset($_COOKIE["servidor"])) {
        //Leemos lo que ya te gusta
        $gustos = $_COOKIE['servidor'];

        //Aquí desencriptas los datos
        //-----
        $gustos = desencriptar($gustos, 3);
        //Separar los gustos y meterlos en un array
        $gustosArray = explode("#",$gustos);

        //CreacionCookie # moda-2 # deportes-2  # juegos-0

        for($i=1; $i<count($gustosArray); $i++) {
            //Separa moda de 1
            
            $gustoContadorArray = explode("-",$gustosArray[$i]);
            //Separamos por un lado moda (posición 0) y por otro el contador (posición 1)

            if ($_GET['interes'] == $gustoContadorArray[0]) {
                $gustoContadorArray[1]++;
            }

            $gustosArray[$i] = implode("-", $gustoContadorArray);
        }

        //Volvemos a convertir a string ya quitados los duplicados
        $gustosString = implode("#", $gustosArray);
        
        //Aquí encriptas los datos 
        $gustosString = encriptar($gustosString, 3);
        //Creación de la cookie
        setcookie('servidor',$gustosString, time()+60000, "/tema3", "localhost", false, true);
        //echo "Cookie creada";
    } else {
        //Primera vez que entra
        setcookie('servidor',encriptar("CreacionCookie#moda-0#deporte-0#juegos-0",3), time()+60000, "/tema3", "localhost", false, true);
    }


    header("Location: index.php");
}


?>