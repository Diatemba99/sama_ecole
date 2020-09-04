<?php
namespace SamaEcole\GestionAdmin\Classes;
class Database
{
private static $db_name="";
private static $host="";
private static $username="";
private static $password="";
private static $conn=null;

public function get_connexion()
{
    if($self::$conn==null)
    {
        try
        {
            self::$conn=new PDO("mysql:host=".self::$host.";"."dbname=".self::$db_name,self::$username,self::$password);
        }
        catch(PDOException $e)
        {
            echo "Impossible de se connecter a la base de donnee:".$e->getMessage();
        }

    }
    return self::$conn;

}
public static function close_connection()
{
    self::$conn=null;
}


}