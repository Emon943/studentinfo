<!DOCTYPE html>
<html>
<head>
<title>Lab 3(b)</title>

<!-- CCS part -->
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body >
<center>
<form action="add_process.php" method="post" id="form"> 
<fieldset>
    <legend style="background-position:center">Students Details </legend> 
	<p class="left"> <a href="show.php"> Show Details </a></p>
	<p><label>*First name: <input type="text" name="firstname" required> </label></p> 
	<p><label>Last name: <input type="text" name="lastname" ></label></p>
	<p><label>*Student Roll: <input type="text" name="stdroll" required></label></p>
	<p> <label class="address_field">*Address:  <textarea rows="4" cols="50"placeholder="Adress goes here..." name="address" required></textarea></label> </p>
 	<p><label for="email">*Email address: </label> <input type="text" name="email" id="email" size="20" maxlength="50" required /></p>
    <p>*Sex:<br><input type="radio" name="sex" value="male" required>Male<br>
			<input type="radio" name="sex" value="female"required>Female</p>
			<p>*Department:<select name="dept" required>
					<option></option>
  					<option value="CSE">CSE</option>
  					<option value="ECE">ECE</option>
  					<option value="BBA">BBA</option>
  				</select></p>
				<p><label>*Session: <input type="text" name="session" required></label></p>
	<p>Have:<br><input type="checkbox" name="c1" value="laptop">Laptop<br>
		<input type="checkbox" name="c2" value="desktop">Desktop<br></p>
	<p>*Subject Marks:<input type="text" name="submark" size="20" placeholder="Subject Marks" required> </p><br><br>
    
	<button type="reset" value="reset"> Clear </button>
	<button type="submit" value="submit"> Submit </button> 
</fieldset>
</form>
</center>
</body>
</html>