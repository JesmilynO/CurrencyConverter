<html>
<head>
<style>
	#box
	{
		width:350px;
		height:270px;
		margin:0px auto;
		border:2px solid black;
	}
	h2{
		text-align: center;
	}
	table{
		margin:0px auto;
	}
</style>
</head>

<body>

<form align="center" action="currencyconverter.php" method="post">

<div id="box">
<h2><center>Currency Converter</center></h2>
<table>
	<tr>
	<td>
		Enter Amount:<input type="text" name="amount"><br>
	</td>
</tr>
<tr>
<td>
	<br><center>From:<select name='cur1'>
	 <option value="USD"selected >US Dollar(USD)</option>
	 <option value="AUD"selected>Australian Dollar(AUD)</option>
	 <option value="CAD"selected>Canadian Dollar(CAD)</option>
	 <option value="BTC"selected>Bitcoin(BTC)</option>
	 <option value="XDG"selected>DodgeCoin(XDG)</option>
	 <option value="EUR"selected>Euro(EUR)</option>
	 <option value="INR"selected>Indian Rupee(INR)</option>
	 <option value="JPY"selected>Japanese Yen(JPY)</option>
	 <option value="PHP"selected>Philippine Peso(PHP)</option>
	 </select>
</td>
</tr>
<tr>
	<td>
	<br><center>To:<select name='cur2'>
	 <option value="INR" selected>Indian Rupee(INR)</option>
	 <option value="JPY" selected>Japanese Yen(JPY)</option>
	 <option value="PHP" selected>Philippine Peso(PHP)</option>
	 <option value="AUD" selected>Australian Dollar(AUD)</option>
	 <option value="USD" selected>US Dollar(USD)</option>
	 <option value="CAD" selected>Canadian Dollar(CAD)</option>
	 <option value="BTC" selected>Bitcoin(BTC)</option>
	 <option value="XDG" selected>DodgeCoin(XDG)</option>
	 <option value="EUR" selected>Euro(EUR)</option>
	</select>
</td>
</tr>
<tr>
<td><center><br>
<input type='submit' name='submit' value="CovertNow"></center>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];

if($cur1=="AUD" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*82.463 . "</center>";
}

if($cur1=="AUD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 51.09 . "</center>";
}

if($cur1=="AUD" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 37.15 . "</center>";
}

if($cur1=="AUD" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.69 . "</center>";
}

if($cur1=="AUD" AND $cur2=="CAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.94 . "</center>";
}

if($cur1=="AUD" AND $cur2=="BTC"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.00008 . "</center>";
}

if($cur1=="AUD" AND $cur2=="XDG"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 207 . "</center>";
}

if($cur1=="AUD" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.62 . "</center>";
}
/////////////////

if($cur1=="USD" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 109.49 . "</center>";
}

if($cur1=="USD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 67.83 . "</center>";
}

if($cur1=="USD" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*49.32  . "</center>";
}
if($cur1=="USD" AND $cur2=="CAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 1.35 . "</center>";
}

if($cur1=="USD" AND $cur2=="BTC"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.00012 . "</center>";
}

if($cur1=="USD" AND $cur2=="XDG"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 298 . "</center>";
}

if($cur1=="USD" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.90 . "</center>";
}

if($cur1=="USD" AND $cur2=="AUD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 1.45 . "</center>";
}

/////////////////////////

if($cur1=="CAD" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*81  . "</center>";
}

if($cur1=="CAD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*51.7  . "</center>";
}

if($cur1=="CAD" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*38.80  . "</center>";
}

if($cur1=="CAD" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.74 . "</center>";
}

if($cur1=="CAD" AND $cur2=="BTC"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.00009 . "</center>";
}

if($cur1=="CAD" AND $cur2=="XDG"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 221 . "</center>";
}

if($cur1=="CAD" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.67 . "</center>";
}

if($cur1=="CAD" AND $cur2=="AUD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 1.05 . "</center>";
}

////////////////////////
if($cur1=="BTC" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*910854  . "</center>";
}

if($cur1=="BTC" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*580124.1  . "</center>";
}

if($cur1=="BTC" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*435450.86  . "</center>";
}

if($cur1=="BTC" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*8312.98 . "</center>";
}

if($cur1=="BTC" AND $cur2=="CAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 11223.37 . "</center>";
}

if($cur1=="BTC" AND $cur2=="XDG"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 2477528 . "</center>";
}

if($cur1=="BTC" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 7466.30 . "</center>";
}

if($cur1=="BTC" AND $cur2=="AUD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 11997.35 . "</center>";
}
////////////////////////////////

if($cur1=="XDG" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*910854  . "</center>";
}

if($cur1=="XDG" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*580124.1  . "</center>";
}

if($cur1=="XDG" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*435450.86  . "</center>";
}

if($cur1=="XDG" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*8312.98 . "</center>";
}

if($cur1=="XDG" AND $cur2=="CAD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 11223.37 . "</center>";
}

if($cur1=="XDG" AND $cur2=="BTC"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 2477528 . "</center>";
}

if($cur1=="XDG" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 7466.30 . "</center>";
}

if($cur1=="XDG" AND $cur2=="AUD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 11997.35 . "</center>";
}

}

?>

</body>
</html>