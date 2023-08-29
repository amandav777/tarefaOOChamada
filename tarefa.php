<?php
/*
Considerar um cenário onde o foco da classe aluno é para realizar uma chamada.
Assim a classe aluno deve ter atríbutos que possam identificar cada aluno e qual cursto e disciplinas o aluno cursa. Além disso deve ter um atríbuto $presente, que define se o aluno esteve em aula(1) ou faltou(0).
Crie a classe, depois crie 5 instâncias baseadas na classe Aluno. Coloque as 5 instâncias em um array, seu papel é contar o total de aluno presentes e o total de faltantes.
Depois faça uma listagem na tela mostrando o nome de cada aluno e na frente se esteve em aula ou faltou.
*/

class Aluno{
    public $nome;
    public $ra;
    public $curso;
    public $disciplinas;
    public $presença;
}

function statusPresença({
    if($presença == "1":
        array_push($alunosPresentes);
)}


$alunosPresentes = [];
$statusPresença($alunosPorSala)