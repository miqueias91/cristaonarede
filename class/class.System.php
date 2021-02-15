<?php
class System extends Conexao {
    public static $instance;
    public function __construct(){}
    public static function getInstance() {
      self::$instance = new System();
      return self::$instance;
    }

    public function registraAcesso(){
    	$datahoraregistro = date('Y-m-d H:i:s');
	    try {
	        $sql = "INSERT INTO sys_acess (
	                  id_sys_acess, 
	                  datahoraregistro, 
	                  pagina, 
	                  origem
	                ) 
	                VALUES (
	                  :id_sys_acess, 
	                  :datahoraregistro, 
	                  :pagina, 
	                  :origem
	                )";

	        $pdo = Conexao::getInstance()->prepare($sql);
	        
	        $pdo->bindValue(':id_sys_acess', NULL, PDO::PARAM_INT);
	        $pdo->bindValue(":datahoraregistro", $datahoraregistro, PDO::PARAM_STR);
	        $pdo->bindValue(":pagina", $_SERVER['SCRIPT_FILENAME'], PDO::PARAM_STR);
	        $pdo->bindValue(":origem", $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);

	        $pdo->execute();

	        return true;                
	    }
	    catch (Exception $e) {
	        echo $e->getMessage();
	        return false;  
	    }
    }  
}