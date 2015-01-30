<?php





$atual = new DateTime ();

$especifica = new DateTime ( '1990-01-22' );

$texto = new DateTime ( '+1 month' );

print_r ( $atual );

echo '<hr><br>';

print_r ( $especifica );

echo '<hr><br>';

print_r ( $texto );

echo '<hr><br>';

echo '<h3>Formatando</h3>';

echo '<p>';

echo $atual->format( 'd-m-Y' );

echo '<p>';

$atual->setDate(1982, 12, 08);
echo $atual->format('d-m-Y');

echo '<p>';

$atual->setTime(8, 1, 2);

$atual->setDate(1982, 12, 08);

echo $atual->format('d-m-Y h:i:s');


echo '<p>';


$fuso = new DateTimeZone('America/New_York');
$atual->setTimezone($fuso);

echo $atual->format('d-m-Y h:i:s');

echo '<hr><br>';

echo '<h3>Intervalo</h3>';

echo '<p>';

$intervalo = new DateInterval('P3YT8M');
print_r($intervalo);

echo '<p>';

$intervalo1 = new DateInterval('P2YT8M');

echo $intervalo1->format('%y anos e %d dias');


echo '<p>';

$data1 = new DateTime('2011-09-11'); 
$data2 = new DateTime('2011-10-13');

$intervalo = $data1->diff($data2);

echo $intervalo->format('%R%a dias');

echo '<p>';

$data1 = new DateTime('2011-09-11');
$data2 = new DateTime('2011-10-13');

var_dump($data1 == $data2);
var_dump($data1 > $data2);
var_dump($data1 < $data2);





