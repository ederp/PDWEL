<?php

/*1-a) uma função para calcular o fatorial usando while*/
function fatorial($numero)
{
	$i = $numero - 1;
	$j = $numero;
	while($i >= 2){
		$j = $j * $i;
		$i = $i - 1;
	}
	//echo "<p>$j</p>";
	return $j;
}

//fatorial(5); /*120*/
//fatorial(4); /*24*/
//fatorial(3); /*6*/

/*1-b) uma função para retorna se um numero é primo ou composto usando do...while*/
function ehPrimo($numero)
{
	$result = 0;
	$i = 2;
	do{
		if($numero % $i == 0){
			$result++;
			break;
		}
		$i = $i + 1;
	}
	while($i <= $numero / 2);
	
	if($result == 0){
		//echo "<p>$numero é um número primo</p>";
		return true;
	}
	else{
		//echo "<p>$numero é um número composto</p>";
		return false;
	}
}

//ehPrimo(3);
//ehPrimo(8);
//ehPrimo(13);

/*1-c) uma função para retornar se um numero é perfeito. 
Observação um número natural é perfeito se e somente se a soma de seus divisores é o próprio número.*/

function numeroPerfeito($numero){
	if($numero <= 1){
		return false;
	}
	$divisores = array();
	$i = $numero - 1;
	do{
		if($numero % $i == 0){
			$divisores[] = $i;
		}
		$i = $i - 1;
	}
	while($i >= 1);
	$somadivisores = 0;
	$size = count($divisores);
	$i = 0;
	while($i < $size){
		$somadivisores = $somadivisores + $divisores[$i];
		$i = $i + 1;
	}
	
	if($somadivisores == $numero){
		//echo "<p>$numero é um número perfeito</p>";
		return true;
	}
	else{
		//echo "<p>$numero não é um número perfeito</p>";
		return false;
	}
}

//numeroPerfeito(6);
//numeroPerfeito(8);
//numeroPerfeito(28);

/*2-a) armazene em um vetor os primeiros n fatoriais dado que n é o parâmetro da função fatorial. 
Exiba no cliente os elementos do vetor.*/
function vetor_fatoriais($numero){
	$i = 1;
	$fatoriais = array();
	while($i <= $numero){
		$fatoriais[] = fatorial($i);
		$i = $i + 1;
	}
	$i = 0;
	$size = count($fatoriais);
	while($i < $size){
		$j = $i + 1;
		echo "<p> Fatorial de $j: $fatoriais[$i]</p>";
		$i = $i + 1;
	}
}
vetor_fatoriais(10);

/*2-b) armazene em um vetor os primeiros n primo dado. 
Exiba no cliente os elementos do vetor.*/
function vetor_primos($numero){
	$i = 1;
	$primos = array();
	while($i <= $numero){
		if(ehPrimo($i)){
			$primos[] = $i;
		}
		$i = $i + 1;
	}
	$i = 0;
	$size = count($primos);
	echo "<p> Números primos de 1 a $numero:</p>";
	while($i < $size){
		echo $primos[$i];
		echo " ";
		$i = $i + 1;
	}
}

vetor_primos(50);

/*c) armazene em um vetor os primeiros n perfeitos encontrados. 
Exiba no cliente os elementos do vetor*/
function vetor_perfeitos($numero){
	$i = 1;
	$perfeitos = array();
	while($i <= $numero){
		if(numeroPerfeito($i)){
			$perfeitos[] = $i;
		}
		$i = $i + 1;
	}
	$i = 0;
	$size = count($perfeitos);
	echo "<p> Números perfeitos de 1 a $numero:</p>";
	while($i < $size){
		echo $perfeitos[$i];
		echo " ";
		$i = $i + 1;
	}
}

vetor_perfeitos(1000);
?>