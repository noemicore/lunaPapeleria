<?php
class Conexion
{
    public static function conectar()
    {
        $host     = 'dbpapeleria.mysql.database.azure.com';
        $db       = 'db_papeleria';
        $user     = 'administrador';
        $password = 'LN123456*';
        
        try {
            $link = new PDO(
                "mysql:host=$host;dbname=$db",
                $user,
                $password
            );
            $link->exec("set names utf8");
            return $link;
        } catch (\Throwable $th) {
            die("Error en la conexion: " . $th->getMessage());
        }
    }
}
?>
