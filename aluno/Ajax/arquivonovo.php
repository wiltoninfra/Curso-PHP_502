<?php

$dsn = "pgsql:host=localhost;dbname=pais";
$pdo = new PDO($dsn, 'postgres', '123456');

$statement = $pdo->query("SELECT * FROM estados ORDER BY nome");

$estados = $statement->fetchAll(PDO::FETCH_ASSOC);



?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<td>Estados</td>
<select id="estados">
<?php 
foreach($estados as $estado): ?>

<option value="<?= $estado['id']?>">
<?= $estado['nome']?>

</option>
<?

endforeach;

?>

</select>


</body>
</html>