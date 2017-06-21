<?php
//array - é um tipo especial de variável de memória.
//declarando um array
$carros = array('Ferrari','Porsche','BMW');
$ano_lancamento = array(2017,2016,2017);

//exibindo informações armazenadas no array
//array - index - índice começa do 0
echo $carros[0].' - ';  
echo $ano_lancamento[0].'<hr>';
echo '<h1>Meus carros prediletos</h1><br>';
echo $carros[0].' - '.$ano_lancamento[0].'<br>';
echo $carros[1].' - '.$ano_lancamento[1].'<br>';
echo $carros[2].' - '.$ano_lancamento[2].'<br>';
echo '<h3>Imprimindo meus carros prediletos utilizando
      estrutura de repetição</h3>';
for ($contador=0; $contador <=2; $contador++){
	echo $carros[$contador].' - '.$ano_lancamento
	[$contador].'<br>';
}
echo '<h4>Imprimindo os carros na ordem inversa</h4>';
for ($contador=2; $contador >=0; $contador--){
	echo $carros[$contador].' - '.$ano_lancamento
	[$contador].'<br>';
}
?>