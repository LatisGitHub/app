<?php
//Si he pinchado en un link
if ($_GET) {

    if (isset($_COOKIE["servidor"])) {
        //Leemos lo que ya te gusta
        $gustos = $_COOKIE['servidor'];

        //Aquí desencriptas los datos
        //-----

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
        //---------------


        // -----------------------  $encriptado = password_hash($_GET['interes'], PASSWORD_DEFAULT);  -----------------------
       /*
        $clave  = 'Una cadena, muy, muy larga para mejorar la encriptacion';
       //Metodo de encriptaciÃ³n
       $method = 'aes-256-cbc';
       // Puedes generar una diferente usando la funcion $getIV()
       $iv = base64_decode("C9fBxl1EWtYTL1/M8jfstw==");
        /*
        Encripta el contenido de la variable, enviada como parametro.
         */
        /*
        $encriptar = function ($valor) use ($method, $clave, $iv) {
            return openssl_encrypt ($valor, $method, $clave, false, $iv);
        };
        /*
        Desencripta el texto recibido
       
        $desencriptar = function ($valor) use ($method, $clave, $iv) {
            $encrypted_data = base64_decode($valor);
            return openssl_decrypt($valor, $method, $clave, false, $iv);
        };
        /*
        Genera un valor para IV
       
        $getIV = function () use ($method) {
            return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
        };
        */


        //----------
        //Creación de la cookie
        setcookie('servidor',$gustosString, time()+60000, "/tema3", "localhost", false, true);
        //echo "Cookie creada";
    } else {
        //Primera vez que entra
        setcookie('servidor',"CreacionCookie#moda-0#deporte-0#juegos-0", time()+60000, "/tema3", "localhost", false, true);
    }


    echo '<script>window.location="' . "index.php" . '"</script>';
}
