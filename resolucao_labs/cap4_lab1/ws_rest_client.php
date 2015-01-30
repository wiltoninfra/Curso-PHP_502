<?php
# Capitulo 4 - Laboratorio 1 (Client REST)
/*
$opts = array(
	'http'=>array(
		'method' => 'POST',
		'header' => "Content-type: application/x-www-form-urlencoded\r\n",
		'content'=> http_build_query( 
						array( 'retorno' => 'xml',
							   'acao'	 => 'te_consultar' ) 
					)
	)
);

$contexto = stream_context_create($opts);
*/
?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<header>
</header>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<tr>
<td>Servico</td>
<td><input type="text" name="nCdServico">
</td>
</tr>
<br>
<tr>
<td>CEP Origem</td>
<td><input type="text" name="sCepOrigem">
</td>
</tr>
<br>
<tr>
<td>CEP Destino</td>
<td><input type="text" name="sCepDestino">
</td>
</tr>
<br>

<br>
<input type="submit" Value="Enviar Dados">
<br>
<br>
<br>
<br>

<?php

$_POST['nCdEmpresa'] = null;
$_POST['sDsSenha'] = null;
$_POST['nCdServico'] = 41100;
$_POST['sCepOrigem'] = 02992070;
$_POST['sCepDestino'] = 02992070;
$_POST['nVIPeso'] = 6;
$_POST['nCdFormato'] = 3;
$_POST['nVlComprimento'] = 3;
$_POST['nVlAltura'] = 3;
$_POST['nVlargura'] = 3;
$_POST['nVlDiametro'] = 12;
$_POST['sCdMaoPropria'] = s;
$_POST['nVlValorDeclarado'] = 0;
$_POST['sCdAvisoRecebimento'] = S;
$_POST['StrRetorno'] = xml;
$_POST['nIndicaCalculo'] = s;



$string = http_build_query($_POST);

print_r($string);


$consulta_xml = file_get_contents("http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?$string");

$var_dump($consulta_xml);	
/*
$objeto_xml = new SimpleXMLElement( $consulta_xml );

print_r($objeto_xml );

echo '<br>';

echo "Servico : {$objeto_xml->nCdServico} <br>";
echo "CEP ORIGEM : {$objeto_xml->sCepOrigem} <br>";
echo "CEP DESTINO : {$objeto_xml->sCepDestino} <br>";
echo "Resultado : {$objeto_xml->resultado} <br>";


/*
echo '<hr>';
echo 'CONSUMINDO WEBSERVICE - RETORNO JSON <br>';

$consulta_json = file_get_contents( 'http://localhost/exemplos_aula/Capitulo4/rest/servico.php?retorno=json&operacao=multiplicao&num_a=10&num_b=3' );

echo " <br>$consulta_json <br><br>";

// converter o json
$json_convertido = json_decode( $consulta_json );

echo "Operacao : {$json_convertido->operacao} <br>";
echo "Num A : {$json_convertido->num_a} <br>";
echo "Num B : {$json_convertido->num_b} <br>";
echo "Resultado : {$json_convertido->resultado} <br>";

*/

 
/*
if (!$_POST['submit']) {

$servico = $_POST['nCdServico'];
$ceporigem = $_POST['sCepOrigem'];
$cepdestino = $_POST['sCepDestino'];


$result = file_get_contents('http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx/CalcPrazo?nCdServico=$servico&sCepOrigem=02992070&sCepDestino=02992070&nCdFormato=3', false, $contexto);
echo '<br>';
echo $servico;
print_r($result);

}

/**
echo '<hr>';

$result = file_get_contents('http://localhost/aluno/dexter/ws_rest.php?retorno=json&acao=te_consultar');

echo $result;

*/?>
