<?php 
    require_once "pessoa.php";
    require_once "aluno.php";
    require_once "funcionario.php";
    require_once "professor.php";

    $p1 = new Pessoa();

    $p2 = new Aluno();

    $p3 = new Professor();

    $p4 = new Funcionario();

    $p1 -> setNome("John");
    $p2 -> setNome("Douglas");
    $p3 -> setNome("Luiza");
    $p4 -> setNome("Thiago");

    $p1 -> setSexo("M");
    $p2 -> setSexo("M");
    $p3 -> setSexo("F");
    $p4 -> setSexo("M");

    echo "<p>" .  $p1 -> getNome() . "</p>";
    echo "<p>" .  $p2 -> getNome() . "</p>";
    echo "<p>" .  $p3 -> getNome() . "</p>";
    echo "<p>" .  $p4 -> getNome() . "</p>";

    echo "<p>" .  $p1 -> getSexo() . "</p>";
    echo "<p>" .  $p2 -> getSexo() . "</p>";
    echo "<p>" .  $p3 -> getSexo() . "</p>";
    echo "<p>" .  $p4 -> getSexo() . "</p>";

    $p2 -> setCurso("ADS");
    $p3 -> setSalario(2000);
    $p4 -> setSetor("Estoque");
    $p4 -> setTrabalhando("Vendas");

    echo "<p>" .  $p2 -> getCurso() . "</p>";
    echo "<p>" .  $p3 -> getSalario() . "</p>";
    echo "<p>" .  $p4 -> getSetor() . "</p>";
    echo "<p>" .  $p4 -> getTrabalhando() . "</p>";

    $p3 -> ReceberAumento(1000);
    $p2 -> CancelarMatr();
    $p4 -> MudarTrabalho();

    echo "<p>" .  $p2 -> getCurso() . "</p>";
    echo "<p>" .  $p3 -> getSalario() . "</p>";
    echo "<p>" .  $p4 -> getSetor() . "</p>";
    echo "<p>" .  $p4 -> getTrabalhando() . "</p>";
?>