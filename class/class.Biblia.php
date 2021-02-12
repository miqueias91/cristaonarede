<?php 
class Biblia extends Conexao {
    public static $instance;
    public function __construct(){}
    public static function getInstance() {
      self::$instance = new Biblia();
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
}
?>