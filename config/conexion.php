<?php
class Conexion
{
    public static function conectar()
    {
        $options = array(
            PDO::MYSQL_ATTR_SSL_CA => '/var/www/html/BaltimoreCyberTrustRoot.crt.pem'
        );
        $db = new PDO(
            'mysql:
                    host=papeleriadb.mysql.database.azure.com;
                    port=3306;
                    dbname=db_papeleria', 
            'administrador', 
            'LN123456*', 
            $options);
        return $db;
    }
}
?>
