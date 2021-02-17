<?php 
class Midias extends Conexao {
  public static $instance;
  public function __construct(){}
  public static function getInstance() {
    self::$instance = new Midias();
    return self::$instance;
  }

	public function buscaMidias(){
    try {
      $sql = "
      SELECT * 
      FROM cristaonarede_midia 
      WHERE 1
      ORDER BY id_cristaonarede_midia desc";
      $pdo = Conexao::getInstance()->prepare($sql);
      $pdo->execute();
      return $pdo->fetchAll(PDO::FETCH_BOTH);
    }
    catch (Exception $e) {
        echo "<br>".$e->getMessage();
    }
  }

  public function registraDownload($id_cristaonarede_midia){
    try {
      $sql = "UPDATE cristaonarede_midia SET numdownload = numdownload + 1 WHERE id_cristaonarede_midia = :id_cristaonarede_midia";
      $pdo = Conexao::getInstance()->prepare($sql);
      $pdo->bindValue(':id_cristaonarede_midia', $id_cristaonarede_midia, PDO::PARAM_INT);
      $pdo->execute();
      return true;                
    }
    catch (Exception $e) {
      echo $e->getMessage();
      return false;  
    }
  }  
}