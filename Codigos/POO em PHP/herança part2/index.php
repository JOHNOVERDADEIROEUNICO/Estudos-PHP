<?php 
    require_once "visitante.php";
    require_once "aluno.php";
    require_once "bolsista.php";

    /*$p1 = new Pessoa();
    $p1 -> setIdade(22);
    print_r($p1);
    $p1 -> FazerAniversario();
    print_r($p1);
    
    Perceba que uma classe abstrata não pode ser instanciada, somente herdada.*/

    $v1 = new Visitante();
    $v1 -> setNome("Carlos");
    $v1 -> setIdade(22);
    $v1 -> setSexo("M");
    echo "<p>". print_r($v1) ."</p>";

    $v1 -> FazerAniversario();
    echo "<p>". print_r($v1) ."</p>";

    $a1 = new Aluno();
    $a1 -> setNome("Daniel");
    $a1 -> setSexo("M");
    $a1 -> setIdade(15);
    $a1 -> setMatr(1111);
    $a1 -> setCurso("ADS");
    
    echo "<p>". print_r($a1) ."</p>";
    $a1 -> PagarMensalidade();

    $b1 = new Bolsista();
    $b1 -> setNome("Marcos");
    $b1 -> setSexo("M");
    $b1 -> setIdade(20);
    $b1 -> setBolsa(12.5);
    $b1 -> setCurso("ADS");
    echo "<p>". print_r($b1) ."</p>";
    $b1 -> PagarMensalidade();
    
?>