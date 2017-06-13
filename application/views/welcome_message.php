<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tomasz Telwak</title>
<style>
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		text-align:center;
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
	
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
	
}
th
{
	background-color:#44094D;
	color:white;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
#Filtruj{margin:14px;}
#Dodaj{float:right; margin: 10px;}

</style>

</head>
<body>



<div id="container">
<div id = 'Dodaj'/>

<?php

$attributes = array('class' => 'XML_Welcome', 'TEXT' => 'Add');
echo form_open('Welcome/add_xml', $attributes);
echo form_label('TEXT: ');
echo form_input('Add');
echo form_submit('mysubmit', 'Dodaj!');
echo form_close();
echo '</br>';

?>

</div>
<div id = 'Filtruj'/>
<?php

$attributes = array('class' => 'XML_Welcome', 'TEXT' => 'Search');
echo form_open('Welcome/search_xml', $attributes);
echo form_label('TEXT: ');
echo form_input('Search');
echo form_label('ID: ');
echo form_input('SearchID');
echo form_submit('mysubmit', 'Wyszukaj!');
echo form_close();
echo '</br>';

?>
	<?php
//$attributes = array('class' => 'XML_Welcome');
echo form_open('Welcome/index');
echo form_submit('mysubmit', 'Wyczyść filtr!');
echo form_close();
echo '</br>';
?>
</div>
	<h1>Lista rekordów!</h1>

	<div id="body">

	<table>
  <tr>
    <th>TEXT</th>
	<th>ID</th>
	<th>Akcje</th>
  </tr>
	<?php
	$Ile = 0;
	
foreach ($xml as $value)
{
$Ile ++;	?> <tr>
<td><?php echo $value['TEXT']; ?> </td>
<td><?php echo $value['ID']; ?> </td>
<td><?php  //$value['ID']
$attributes = array('class' => 'XML_Welcome', 'ID' => 'Usun' );
echo form_open('Welcome/delete_xml',$attributes);
echo form_submit('Usun', 'Usuń!'); 
echo form_hidden('Usun',$value['ID']);
echo form_close();
} ?> </td>
</div>

<?php	echo "Ilość zwróconych wierszy: " .$Ile; ?>
</body>
</html>