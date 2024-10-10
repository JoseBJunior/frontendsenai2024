<?php //iniciar uma lista
$numeros = [];
// garantir que eu tenha 3 numeros diferentes
while(count($numeros) < 3){
    $numero = rand(1, 19);
// gerou os valoores randomizados
if(!in_array($numero,$numeros)) {
    $numeros[] = $numero;
}
}

$produto1 = $numeros[0];
$produto2 = $numeros[1];
$produto3 = $numeros[2];

include "conexao.php";
$query= "select * FROM produtos WHERE id IN($produto1, $produto2, $produto3)";
$resultado = $conexao->query($query);

$produtos =[] ;
if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $produtos[$row['id']] = $row;
    }
}

?>
<section id="produtos" class="card-selection">
    <h2>Nossos Produtos</h2>
    <div class="card-container">


        <div class="card">
            <!-- Foto do produto -->
        <img src ="<?php
        echo $produtos[$produto1]['url'];
        ?>" alt="";>
         <h3><?php
            echo $produtos[$produto1]['titulo'];
         ?></h3> <!-- Título -->
          <p><?php 
            echo $produtos[$produto1]['descricao'];
         ?></p> <!-- Descrição -->
         <a href="">Comprar</a>
</div>
<div class="card">
            <!-- Foto do produto -->
        <img src ="<?php
        echo $produtos[$produto2]['url'];
        ?>" alt="";>
         <h3><?php
            echo $produtos[$produto2]['titulo'];
         ?></h3> <!-- Título -->
          <p><?php 
            echo $produtos[$produto2]['descricao'];
         ?></p> <!-- Descrição -->
         <a href="">Comprar</a>
</div>
<div class="card">
            <!-- Foto do produto -->
        <img src ="<?php
        echo $produtos[$produto3]['url'];
        ?>" alt="";>
         <h3><?php
            echo $produtos[$produto3]['titulo'];
         ?></h3> <!-- Título -->
          <p><?php 
            echo $produtos[$produto3]['descricao'];
         ?></p> <!-- Descrição -->
         <a href="">Comprar</a>
</div>
        </div>
</section>