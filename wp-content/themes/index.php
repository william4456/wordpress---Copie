<?php
// Silence is golden.

echo "
<html>
<head>
</head>
<body>
<form method='get'>
<table>
<caption> <bf> Géolocalisation d une adresse avec l API google</bf></caption>
<tr>
	<td> Pays : </td>
	<td> <input name ='pays' style = 'width:315px;' value='".$pays"'> </td>
</tr>
<tr>
	<td> Ville : </td>
	<td> <input name ='ville' style = 'width:315px;' value='".$ville"'> </td>
</tr>
<tr>
	<td> Code postal : </td>
	<td> <input name ='code' style = 'width:315px;' value='".$code"'> </td>
</tr>
<tr>
	<td> Adresse : </td>
	<td> <input name ='adresse' style = 'width:315px;' value='".$adresse"'> </td>
</tr>
<tr>
	<td> <input type ='submit' value='Localier'> </td>
</tr>
</table>
</form>
<textarea rows=6 cols=48 readonly style='background:#eeeeee'>
latitude : ".$lat."
logitude : ".$lon."
</textarea><br><br>
<img  src =''>
</body>
</html>"

?>