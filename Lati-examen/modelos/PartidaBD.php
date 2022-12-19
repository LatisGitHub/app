<?php  
    class PartidaBD {
        public static function getPartidas()
        {
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM partidas ORDER BY fecha");
    
    
            $stmt->execute();
    
            $partidas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');
    
            ConexionBD::cerrar();
    
            return $partidas;
        }


        public static function borrarPartida($id) {
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("DELETE FROM partidas WHERE id  = ?");
    
            $stmt->bindValue(1, $id);
    
            $stmt->execute();       
            ConexionBD::cerrar();
    
        }

        public static function getUnaPartida($id)
        {
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM partidas WHERE id = ?");
            
            $stmt->bindValue(1, $id);
    
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $partida = $stmt->fetch();

    
            ConexionBD::cerrar();
    
            return $partida;
        }

        public static function getPartidasCiudad($ciudad)
        {
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM partidas  WHERE ciudad = ? ORDER BY fecha ");
    
            $stmt->bindValue(1, $ciudad);

            $stmt->execute();
    
            $partidas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');
    
            ConexionBD::cerrar();
    
            return $partidas;
        }

        public static function getPartidasFecha($fecha)
        {
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM partidas  WHERE fecha like ? ORDER BY fecha ");
    
            $stmt->bindValue(1, $fecha);

            $stmt->execute();
    
            $partidas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');
    
            ConexionBD::cerrar();
    
            return $partidas;
        }

        public static function insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto, $estado, $id_jugador1)
        {
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            //UPDATE table_name
            //SET column1 = value1, column2 = value2, ...
            //WHERE condition;
            $stmt = $conexion->prepare("INSERT INTO partidas (fecha, hora, ciudad, lugar, cubierto, estado, id_jugador1)
            VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bindValue(1, $fecha);
            $stmt->bindValue(2, $hora);
            $stmt->bindValue(3, $ciudad);
            $stmt->bindValue(4, $lugar);
            $stmt->bindValue(5, $cubierto);
            $stmt->bindValue(6, $estado);
            $stmt->bindValue(7, $id_jugador1);
    
            $stmt->execute();
    
            ConexionBD::cerrar();
        }

        public static function apuntarse($id_jugador, $id_partida)
        {
            $conexion = ConexionBD::conectar();
    
            $stmt = $conexion->prepare("INSERT INTO partidas (id_jugador1) WHERE id = ?)
            VALUES (?, ?)");
            $stmt->bindValue(1, $id_jugador);
            $stmt->bindValue(2, $id_partida);
            
    
            $stmt->execute();
    
            ConexionBD::cerrar();
        }
    
        public static function getJugadores($id_partida)
        {
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT id_jugador1, id_jugador2, id_jugador3, id_jugador4 FROM partidas WHERE id = ?");
    
            $stmt->bindValue(1, $id_partida);

            $stmt->execute();
    
            $jugadores = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE);
    
            ConexionBD::cerrar();
    
            return $jugadores;
        }

        public static function getJugador($id_jugador)
        {
            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM jugadores WHERE id = ?");
    
            $stmt->bindValue(1, $id_jugador);
    
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Jugador');
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $jugador = $stmt->fetch();

    
            ConexionBD::cerrar();
    
            return $jugador;
        }

    }
