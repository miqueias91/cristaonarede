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

  public function buscaTexto($livro, $capitulo, $versao = 'nvi'){
    $json_data = json_decode(file_get_contents("biblia-sagrada/$versao.json"),true);
    $dados = array();



    foreach ($json_data as $b => $book) {
      if (strtoupper($livro) == strtoupper($book['abbrev'])) {

        if ( sizeof($book['chapters']) >= $capitulo && $capitulo > 0 ) {
          foreach ($book['chapters'] as $c => $chapters) {
              if ($c == ($capitulo - 1)) {
                $dados['chapters'] = $book['chapters'][$c];
                $dados['name'] = $book['name'];
                $dados['numberallchapters'] = sizeof($book['chapters']);
                $dados['numberchapter'] = $capitulo;
                $dados['abbrev'] = $book['abbrev'];
              }
          }
        }
        else if (($b >= 0 && $b < 65) && $capitulo > 0){
          $dados['chapters'] = $json_data[($b+1)]['chapters'][0];
          $dados['name'] = $json_data[($b+1)]['name'];
          $dados['numberallchapters'] = sizeof($json_data[($b+1)]['chapters']);
          $dados['numberchapter'] = 1;
          $dados['abbrev'] = $json_data[($b+1)]['abbrev'];
          echo "<script>
          location.href = 'texto-livro.php?versao=$versao&abrev=$dados[abbrev]&numberchapter=1';
          </script>";
        }
        else if (($b > 0 && $b <= 65) && $capitulo == 0){
          $dados['chapters'] = $json_data[($b-1)]['chapters'][0];
          $dados['name'] = $json_data[($b-1)]['name'];
          $dados['numberallchapters'] = sizeof($json_data[($b-1)]['chapters']);
          $dados['numberchapter'] = 1;
          $dados['abbrev'] = $json_data[($b-1)]['abbrev'];
          echo "<script>
          location.href = 'texto-livro.php?versao=$versao&abrev=$dados[abbrev]&numberchapter=$dados[numberallchapters]';
          </script>";
        }
     
        //DE APOCALIPSE VAI PARA GENESIS
        else if ($b == 65 && $capitulo > 22){
          $dados['chapters'] = $json_data[0]['chapters'][0];
          $dados['name'] = $json_data[0]['name'];
          $dados['numberallchapters'] = sizeof($json_data[0]['chapters']);
          $dados['numberchapter'] = 1;
          $dados['abbrev'] = $json_data[0]['abbrev'];
          
          echo "<script>
          location.href = 'texto-livro.php?versao=$versao&abrev=$dados[abbrev]&numberchapter=1';
          </script>";
        }
        //DE GENESIS VAI PARA APOCALIPSE
        else if ($b == 0 && $capitulo == 0){
          $dados['chapters'] = $json_data[65]['chapters'][0];
          $dados['name'] = $json_data[65]['name'];
          $dados['numberallchapters'] = sizeof($json_data[0]['chapters']);
          $dados['numberchapter'] = 22;
          $dados['abbrev'] = $json_data[65]['abbrev'];

          echo "<script>
          location.href = 'texto-livro.php?versao=$versao&abrev=$dados[abbrev]&numberchapter=22';
          </script>";
        }
      }
    }
    return $dados;
  }


}