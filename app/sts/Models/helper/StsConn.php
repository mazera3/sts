<?php

namespace Sts\Models\helper;

use PDO;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsConn
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class StsConn
{

    public static $Host = HOST;
    public static $User = USER;
    public static $Pass = PASS;
    public static $Dbname = DBNAME;
    private static $Connect = null;
    private static $SetCaracter = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');

    private static function conectar()
    {
        try {
            if(self::$Connect == null){
                self::$Connect = new PDO('mysql:host=' . self::$Host . ';dbname=' . self::$Dbname, self::$User, self::$Pass,  self::$SetCaracter);
            }            
        } catch (Exception $exc) {
            echo 'mensagem: ' . $exc->getMessage();
            die;
        }
        return self::$Connect;
    }

    public function getConn()
    {
        return self::conectar();
    }

}
