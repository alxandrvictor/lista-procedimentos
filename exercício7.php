<?php 
function meses($num){
	
	if ($num>0 && $num<13){
		
	$meses= array ("","Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
	
		$msg= $meses[$num];
		return $msg;
	}
	
	else{
		
		$msg="ERRO! Esse número não corresponde a um mês. \n";
		return $msg;
	}
}
print "Insira um valor inteiro: ";
$num= (int) fgets (STDIN);
$x=meses($num);
print $x;
