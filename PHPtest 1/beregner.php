<?php 
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '+':
		$res=$fn+$sn;
		break;
		
		case '-':
		$res=$fn-$sn;
		break;
		
		case '*':
		$res=$fn*$sn;
		break;
		
	}
	
}

?>
<!DOCTYP html>
<html>
	<head>
		<title>Udregningsmaskine</title>
		
	</head>
	<body>
		<form method="post">
		<table border="1" align="center">
			<tr>
				<th>Dit resultat</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
			</tr> 
			
			<tr>
				<th>Indtast dit første nummer</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr> 
			<tr>
				<th>Indtast dit andet nummer</th>
				<th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
			</tr>
			<tr>
                <th>Vælg beregningsmetode</th>
				<th>
				<select name="ch">
					<option>+</option>
					<option>-</option>
					<option>*</option>
				</select>
				</th>
			</tr>
			<tr>
				
				<th colspan="2">
				<input type="submit" 
				name="save" value="Show Result"/>
				</th>
			</tr>
		</table>
		</form>
	</body>
</html>