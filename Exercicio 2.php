<?php
//declarando o array
$numeros=array();
$total_pares=$total_impares=0;

//armazenando e imprimindo os 15 números
for ($i=0; $i<15; $i++) {
     $numeros[$i]= rand(1,100);
     echo $numeros[$i].' - ';
     if ($numeros[$i]%2==0) {
     	 $total_pares++;}
     	else{
     		$total_impares++;}	
}
//imprimindo os totais
echo '<br>Total de pares: '.$total_pares;
echo '<br>Total de impares: '.$total_impares;
?>