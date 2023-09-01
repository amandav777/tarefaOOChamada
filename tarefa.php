<?php
/*
Considerar um cenário onde o foco da classe aluno é para realizar uma chamada.
Assim a classe aluno deve ter atríbutos que possam identificar cada aluno e qual cursto e disciplinas o aluno cursa. Além disso deve ter um atríbuto $presente, que define se o aluno esteve em aula(1) ou faltou(0).
Crie a classe, depois crie 5 instâncias baseadas na classe Aluno. Coloque as 5 instâncias em um array, seu papel é contar o total de aluno presentes e o total de faltantes.
Depois faça uma listagem na tela mostrando o nome de cada aluno e na frente se esteve em aula ou faltou.
*/

class Aluno {
    private $nome;
    private $curso;
    private $disciplina;
    private $presente;
  
    public function __construct($nome, $curso, $disciplina, $presente) {
      $this->nome = $nome;
      $this->curso = $curso;
      $this->disciplina = $disciplina;
      $this->presente = $presente;
    }
  
    public function getNome() {
      return $this->nome;
    }
  
    public function getCurso() {
      return $this->curso;
    }
  
    public function getDisciplina() {
      return $this->disciplina;
    }
  
    public function getPresente() {
      return $this->presente;
    }
  
    public function setPresente($presente) {
      $this->presente = $presente;
    }
  }
  
  
  $aluno1 = new Aluno("João da Silva", "Engenharia de Software", "Programação Orientada a Objetos", 1);
  $aluno2 = new Aluno("Maria da Silva", "Engenharia de Software", "Banco de Dados", 1);
  $aluno3 = new Aluno("Pedro da Silva", "Engenharia de Software", "Sistemas Operacionais", 0);
  $aluno4 = new Aluno("Ana da Silva", "Engenharia de Software", "Matemática Discreta", 1);
  $aluno5 = new Aluno("José da Silva", "Engenharia de Software", "Fundamentos de Programação", 0);
  
  // Cria um array para armazenar as instâncias da classe Aluno
  $alunos = array($aluno1, $aluno2, $aluno3, $aluno4, $aluno5);
  
  
  $totalPresentes = 0;
  $totalFaltantes = 0;
  foreach ($alunos as $aluno) {
    if ($aluno->getPresente()) {
      $totalPresentes++;
    } else {
      $totalFaltantes++;
    }
  }
  
  
  echo "Lista de alunos:\n";
  foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno->getNome() . " | Presente: " . ($aluno->getPresente() ? "Sim" : "Não") . "\n";
  }
  
  
  echo "Total de alunos presentes: " . $totalPresentes . "\n";
  echo "Total de alunos faltantes: " . $totalFaltantes . "\n";
