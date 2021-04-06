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
    $json_data = json_decode(file_get_contents("files/biblia-sagrada/$versao.json"),true);
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

  public function palavraDia(){
    $dados = array();
    $palavraDia = array(
      array('livro' => 'Mt','cap' => '11', 'ver' => '28'),
      array('livro' => 'Jo', 'cap' => '15', 'ver' => '7'),
      array('livro' => 'at', 'cap' => '1', 'ver' => '8'),
      array('livro' => 'Fp', 'cap' => '1', 'ver' => '6'),
      array('livro' => '2Sm', 'cap' => '22', 'ver' => '31'),
      array('livro' => 'Mt', 'cap' => '11', 'ver' => '28'),
      array('livro' => 'Hb', 'cap' => '10', 'ver' => '23'),
      array('livro' => 'Fp', 'cap' => '1', 'ver' => '6'),
      array('livro' => '2Pe', 'cap' => '1', 'ver' => '4'),
      array('livro' => 'Mt', 'cap' => '5', 'ver' => '8'),
      array('livro' => 'Rm', 'cap' => '1', 'ver' => '6'),
      array('livro' => 'Mt', 'cap' => '10', 'ver' => '32'),
      array('livro' => 'Is', 'cap' => '44', 'ver' => '3'),
      array('livro' => 'Jr', 'cap' => '29', 'ver' => '11'),
      array('livro' => 'Fp', 'cap' => '4', 'ver' => '19'),
      array('livro' => 'Ap', 'cap' => '3', 'ver' => '20'),
      array('livro' => 'Ef', 'cap' => '1', 'ver' => '4'),
      array('livro' => 'Ef', 'cap' => '1', 'ver' => '13'),
      array('livro' => 'Mt', 'cap' => '28', 'ver' => '19'),
      array('livro' => 'Jo', 'cap' => '14', 'ver' => '18'),
      array('livro' => 'Jo', 'cap' => '8', 'ver' => '32'),
      array('livro' => 'Mt', 'cap' => '24', 'ver' => '35'),
      array('livro' => 'Sl', 'cap' => '126', 'ver' => '5'),
      array('livro' => 'Jo', 'cap' => '8', 'ver' => '12'),
      array('livro' => 'Jo', 'cap' => '15', 'ver' => '16'),
      array('livro' => 'Hb', 'cap' => '13', 'ver' => '5'),
      array('livro' => 'Tg', 'cap' => '4', 'ver' => '7'),
      array('livro' => 'Mt', 'cap' => '6', 'ver' => '33'),
      array('livro' => 'Jo', 'cap' => '10', 'ver' => '10'),
      array('livro' => 'Jr', 'cap' => '33', 'ver' => '3'),
      array('livro' => 'at', 'cap' => '1', 'ver' => '8'),
      array('livro' => '1Jo', 'cap' => '5', 'ver' => '4'),
      array('livro' => 'Js', 'cap' => '1', 'ver' => '9'),
      array('livro' => 'Js', 'cap' => '1', 'ver' => '9'),
      array('livro' => 'Rm', 'cap' => '8', 'ver' => '1'),
      array('livro' => 'Sl', 'cap' => '31', 'ver' => '24'),
      array('livro' => 'Sl', 'cap' => '91', 'ver' => '1'),
      array('livro' => 'Hb', 'cap' => '12', 'ver' => '1'),
      array('livro' => '2Tm', 'cap' => '4', 'ver' => '7'),
      array('livro' => 'Rm', 'cap' => '12', 'ver' => '21'),
      array('livro' => 'Jo', 'cap' => '14', 'ver' => '18'),
      array('livro' => '1Co', 'cap' => '15', 'ver' => '55'),
      array('livro' => 'Sl', 'cap' => '41', 'ver' => '1'),
      array('livro' => 'Rm', 'cap' => '8', 'ver' => '31'),
      array('livro' => 'Fp', 'cap' => '4', 'ver' => '6'),
      array('livro' => 'Fp', 'cap' => '4', 'ver' => '13'),
      array('livro' => 'Nm', 'cap' => '23', 'ver' => '19'),
      array('livro' => 'Js', 'cap' => '21', 'ver' => '45'),
      array('livro' => 'Js', 'cap' => '23', 'ver' => '14'),
      array('livro' => '1Jo', 'cap' => '2', 'ver' => '25'),
      array('livro' => 'Ez', 'cap' => '36', 'ver' => '26'),
      array('livro' => '1Jo', 'cap' => '1', 'ver' => '9'),
      array('livro' => '1Rs', 'cap' => '8', 'ver' => '56'),
      array('livro' => 'Dt', 'cap' => '28', 'ver' => '9'),
      array('livro' => 'Jl', 'cap' => '2', 'ver' => '32'),
      array('livro' => 'Sl', 'cap' => '145', 'ver' => '13'),
      array('livro' => '2Pe', 'cap' => '1', 'ver' => '4'),
      array('livro' => 'Tg', 'cap' => '1', 'ver' => '12'),
      array('livro' => 'Sl', 'cap' => '138', 'ver' => '4'),
      array('livro' => '2Co', 'cap' => '7', 'ver' => '1'),
      array('livro' => 'Sl', 'cap' => '119', 'ver' => '50'),
      array('livro' => '2Pe', 'cap' => '3', 'ver' => '9'),
      array('livro' => 'Gl', 'cap' => '3', 'ver' => '16'),
      array('livro' => 'Jo', 'cap' => '16', 'ver' => '33'),
      array('livro' => 'Mt', 'cap' => '6', 'ver' => '26'),
      array('livro' => 'Sl', 'cap' => '34', 'ver' => '10'),
      array('livro' => 'Mt', 'cap' => '6', 'ver' => '11'),
      array('livro' => 'Sl', 'cap' => '23', 'ver' => '1'),
      array('livro' => 'Sl', 'cap' => '4', 'ver' => '8'),
      array('livro' => 'Is', 'cap' => '40', 'ver' => '31'),
      array('livro' => 'Jo', 'cap' => '14', 'ver' => '27'),
      array('livro' => 'Lc', 'cap' => '12', 'ver' => '15'),
      array('livro' => 'Dt', 'cap' => '31', 'ver' => '6'),
      array('livro' => 'Hb', 'cap' => '13', 'ver' => '6'),
      array('livro' => 'Rm', 'cap' => '8', 'ver' => '28'),
      array('livro' => 'Tg', 'cap' => '1', 'ver' => '5'),
      array('livro' => 'Sl', 'cap' => '37', 'ver' => '4'),
      array('livro' => 'Mt', 'cap' => '17', 'ver' => '20'),
      array('livro' => 'Is', 'cap' => '41', 'ver' => '10')
    );
    $palavra = ($palavraDia[mt_rand(0, (count($palavraDia)-1))]);
    $dados = $this->buscaVersiculo($palavra['livro'], $palavra['cap'], $palavra['ver']);
    return $dados;
  }


}