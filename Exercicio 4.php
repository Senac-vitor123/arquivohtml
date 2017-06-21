<?php
//declarando um array
$conjunto1=array(1,2,3,4,5,6,7,8,9,10);
$conjunto2=array(10,9,8,7,6,101,102,103,104,105);
//gerando valores aleatórios e armazenando nos vetores
/*
for ($i=0; $i <10 ; $i++) { 
	$conjunto1[$i]= rand(1,100);
	$conjunto2[$i]= rand(1,100);}
*/
//imprimindo os 2 arrays
echo 'Conjunto1: '.'<br>';
print_r($conjunto1);
echo '<hr>';
echo 'Conjunto2: '.'<br>';
print_r($conjunto2); //imprime um array com suas respectivas posições(índices)
echo '<hr>';
echo 'Diferenças: '.'<br>';
//verificando as diferenças entre os vetores
echo 'Verificando o conjunto 1 em relação ao conjunto 2<br>';
$diferenca=array_diff($conjunto1,$conjunto2);
print_r($diferenca);
echo '<hr>';
echo 'Verificando o conjunto 2 em relação ao conjunto 1<br>';
$diferenca=array_diff($conjunto2,$conjunto1);
print_r($diferenca);	

