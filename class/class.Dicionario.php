<?php 
class Dicionario extends Conexao {
  public static $instance;
  public function __construct(){}
  public static function getInstance() {
    self::$instance = new Dicionario();
    return self::$instance;
  }

	public function buscaDicionarioInicio(){
    try {
      $sql = "
      SELECT * 
      FROM giriasdecrente 
      WHERE 1
      ORDER BY dataregistro desc
      LIMIT 12
      ";
      $pdo = Conexao::getInstance()->prepare($sql);
      $pdo->execute();
      return $pdo->fetchAll(PDO::FETCH_BOTH);
    }
    catch (Exception $e) {
        echo "<br>".$e->getMessage();
    }
  }  

  public function buscaDicionario($id_giria = null){
    $filtro = "";
    $filtro.= $id_giria ? " AND id_giria = :id_giria " : "";
    try {
      $sql = "
      SELECT * 
      FROM giriasdecrente 
      WHERE id_giria > 0
      $filtro
      ORDER BY dataregistro desc
      ";
      $pdo = Conexao::getInstance()->prepare($sql);
      if ($id_giria) {
        $pdo->bindValue(':id_giria', $id_giria, PDO::PARAM_INT);
      }
      $pdo->execute();
      return $pdo->fetchAll(PDO::FETCH_BOTH);
    }
    catch (Exception $e) {
        echo "<br>".$e->getMessage();
    }
  }
  public function registraDenunciaDicionario($idgiria, $dataregistro, $userId, $motivo) {
        try {
           $sql = "INSERT INTO giriasdecrente (
                    idgiriasdecrente_denuncia,
                    idgiria,
                    dataregistro,
                    userId,
                    motivo                  
                  ) 
                  VALUES (                 
                    :idgiriasdecrente_denuncia,
                    :idgiria,
                    :dataregistro,
                    :userId,
                    :motivo
                  )";
          $pdo = Conexao::getInstance()->prepare($sql);        
          $pdo->bindValue(':idgiriasdecrente_denuncia', NULL, PDO::PARAM_INT);
          $pdo->bindValue(":idgiria", $idgiria, PDO::PARAM_INT);
          $pdo->bindValue(":dataregistro", date('Y-m-d H:i:s'), PDO::PARAM_STR);
          $pdo->bindValue(":userId", $userId, PDO::PARAM_STR);
          $pdo->bindValue(":motivo", trim($motivo), PDO::PARAM_STR);
          $pdo->execute();
          return true; 
        }
        catch (Exception $e) {
          echo $e->getMessage();
        }
    }
}