<!DOCTYPE html>
<html>
  <head>
    <title>FORM FOR PRATICE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body>

<?php
$name =$pass =$web =$emp = $gen ='';



if($_SERVER['REQUEST_METHOD']=='POST'){
	$name = $_POST['username'];
	$pass =$_POST["password"];
	$web = $_POST['website'];
	$emp = $_POST['employ'];
	$gen =$_POST['gender'];
	

	

}	

?>
	<h1 style="color:#A9A9A9; margin-left:300px; margin-top:50px;'">Fill the form </h1>
  <div id="cont" style="background-color:#00cc99
;display:flex;width:250px;height:285px;margin-left:300px;margin-top:20px;padding-left:10px;padding-top:10px;border-radius:10px;">

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"; method="POST" >
		<lable>username</label>
		<input type="Text"  name='username'></input><br>
		<lable>password</label>
		<input type="password" name="password"></input><br>
	

	
	<lable>Employee number</label>
	<input type="number" name='employ' min="1" max="99999"></input><br>

	<lable>which website you want to log in to? </label>
	<select name="website" style="background-color:#6699ff;color:#ff9900">
		<option ></option>
		<option value="google">google</option>
		<option value="facebook">facebook</option>
		<option value="twitter">twitter</option>
		<option value="quora">quora</option>
	</select><br>

	<p>Gender:</p>
		<input type="radio" name = "gender" class="gender" value="Male" name="g" style="margin-left:105px;"></input>
		<label>Male</label><br>
		<input type="radio" name = "gender" class="gender" value="Female" name="g" style="margin-left:105px;"></input>
		<label>Female</label><br>
	<lable>MovieWatched:</label>
		<input type="checkbox" name='movies[]'  value="BB">BB</input><br>
		<input type="checkbox" name='movies[]'  value="RRR" style="margin-left:105px;">RRR</input><br>
		<input type="checkbox"  name='movies[]'  value="KGF" style="margin-left:105px;">KGF</input><br>
	<input type="submit" id='submit' style="background-color:#00cc00
;" ></input><br>
	<form>

</div>
<div style = "margin-top:20px;width:250px;height:100px;margin-left:300px;text-align:center;color:#eeeee4:">
<?php 

echo $name.'<br>';
echo $pass.'<br>';
echo $emp .'<br>';
echo $web.'<br>';
echo $gen .'<br>';


?>
  </div>
  </body>
</html>

