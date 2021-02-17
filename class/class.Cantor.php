<?php 
class Cantor extends Conexao {
  public static $instance;
  public function __construct(){}
  public static function getInstance() {
    self::$instance = new Cantor();
    return self::$instance;
  }

	public function buscaVersiculo($livro, $capitulo, $versiculo, $versao = 'nvi'){
    try {
      $sql = "SELECT * FROM books lv INNER JOIN verses vs ON vs.book = lv.id WHERE lv.abbrev LIKE '$livro' AND vs.chapter = '$capitulo' AND vs.verse = '$versiculo' AND vs.version like '$versao' ";
      $pdo = Conexao::getInstance()->prepare($sql);
      $pdo->execute();
      return $pdo->fetchAll(PDO::FETCH_BOTH);
    }
    catch (Exception $e) {
        echo "<br>".$e->getMessage();
    }
  }

  public function buscaTituloCantor(){
    $json_data = json_decode(file_get_contents("files/cantor-cristao/cantor.json"),true);
    $dados = array();
    foreach ($json_data as $h => $cantor) {
      $dados[$cantor['id']] = $cantor['titulo'];
    }
    return $dados;
  }

  public function buscaTextoCantor($n){
    $json_data = json_decode(file_get_contents("files/cantor-cristao/cantor.json"),true);
    if (sizeof($json_data) >= $n && $n > 0) {
      foreach ($json_data as $h => $cantor) {
        if ($cantor['id'] == $n) {
          return $cantor;
        }
      }
    }
  }
}
?>