<?php
//declarando um array
$elementos= array();
//gerando valores aleatórios e armazenando no vetor e imprimindo o vetor elementos
for ($i=0; $i <20 ; $i++) { 
	$elementos[$i]= rand(1,100);
	echo $elementos[$i].' - ';}
//calculando maior valor, menor valor
$maior=$soma=$media=$contaPares=0;
$menor=1000;
for ($i=0; $i <20 ; $i++) { 
	if 	($elementos[$i]>$maior) {
		$maior = $elementos[$i]; }
	if 	($elementos[$i]<$menor) {
		$menor = $elementos[$i]; }
	if 	($elementos[$i]%2==0) {
		$contaPares++;	}
	$soma = $soma + $elementos[$i];
}
$contaPares = ($contaPares/20)*100;
$media = $soma / 20;
//imprimindo os resultados
echo '<br>Maior valor: '.$maior.'<br>';
echo 'Menor valor: '.$menor.'<br>';
echo 'Média: '.$media.'<br>';
echo 'Percentual números pares: '.$contaPares.'%<br>';


?>
