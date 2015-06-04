<?php

$agenda[0]['nombre']="luis";
$agenda[0]['telefono']=32134023;
$agenda[0]['email']="kclsdñfcnbfvdc";

$agenda[1]['nombre']="maria";
$agenda[1]['telefono']=321324523;
$agenda[1]['email']="kclsdñfasderc";

$agenda[2]['nombre']="diana";
$agenda[2]['telefono']=32123112;
$agenda[2]['email']="kdmsladcnbfvdc";

$agenda[3]['nombre']="diana";
$agenda[3]['telefono']=379097112;
$agenda[3]['email']="kdmsladcnbfvdc";

$agenda[4]['nombre']="diana";
$agenda[4]['telefono']=329678712;
$agenda[4]['email']="kdmsladcnbfvdc";

$agenda[5]['nombre']="diana";
$agenda[5]['telefono']=32198712;
$agenda[5]['email']="kdmsladcnbfvdc";

echo $agenda[2]['nombre'];

function dameagenda(){
for ($i=0; $i <=5 ; $i++) { 

	echo "<table border=1 width=300px>
	<tr>
	<td>
	Nombre:
	</td>
	<td>'.$agenda[$i]['nombre'].'
	</td>
	</tr>

	<tr>
	<td>
	telefono:
	</td>
	<td>'.$agenda[$i]['telefono'].'
	</td>
	</tr>

	<tr>
	<td>
	email:
	</td>
	<td>'.$agenda[$i]['email'].'
	</td>
	</tr>
	</table>";
}
}
dameagenda();
?>