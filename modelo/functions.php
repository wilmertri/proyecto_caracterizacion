<?php
		/*
		*	@author: Wilmer Fabian Triana
		*	@Version: V1
        *   @Fecha: 29-03-2015
		*/
        class Funciones_generales {
            function functions()
            {

            }

            /*
            *	Función para seleccionar los valores de un determinado parametro
            */

            function seleccionar_valores_de_parametro($codpar)
            {
                    $sql = "SELECT * FROM tbvalor WHERE codpar = $codpar";
                    return $this->SeleccionDatos($sql);
            }

            /*
            *	Función para mostrar los nombres de determinado valor
            */

            function mostrar_nombre_valores($codval)
            {
                    $sql = "SELECT nomval FROM tbvalor WHERE codval = $codval";
                    return $this->SeleccionDatos($sql);
            }

            /*
            *	Función para calcular la edad según la fecha de nacimiento
            */

            function calcular_edad($fecha)
            {
                    $dias = explode("-", $fecha, 3);
                    $dias = mktime(0,0,0,$dias[1],$dias[2],$dias[0]);
                    $edad = (int)((time()-$dias)/31556926 );
                    return $edad;
            }

            /*
             * Función de utilidad para las sentencias SQL de inserción (INSERT), actualización (UPDATE) y eliminación (DELETE) 
             */

            function cons ($sentencia_sql) 
            {
                    $conexionBD = new conexion();
                    $conexionBD -> conectarBD();
                    $conexionBD -> ejeCon($sentencia_sql, 1);
            }
            
            /*
             * Función de utilidad para la sentencia de consulta SQL (SELECT)
             */
            
            function SeleccionDatos($consulta)
            {
                    $conexionBD = new conexion();
                    $conexionBD -> conectarBD();
                    $datos = $conexionBD -> ejeCon($consulta, 0);
                    return $datos;
            }
        }