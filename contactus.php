<?php
include 'common.inc.php';
?>
<style>
a {margin:15px;}
div {margin:15px;}
footer {margin:105px;}
</style>
</head>

<body>
<center> <h1 class="page_title">Billys Beef</h1> </center>
<hr />
<nav class="primary-nav">
<a href="index.php">Home</a> 

<a href="menu.php">Menu</a>
<a href="contactus.php">Contact Us</a>
</nav>
<hr />
<center>
<form>
<div class="uinputtext">
<label>Name: </label> <input type="text" id="uname" name="Name"/>
</div>
<div class="uinputtext">
<label>Email:</label> <input type="text" id="uemail" name="email"/>
</div>
<div class="uinputtext">
<label>Phone:</label> <input type="text" id="uphone" name="phone"/>
</div>
<div id="dropdown">
<select name="inquiry">
	<option value="catering" selected>Catering</option>
	<option value="privateparty">Privte Party</option>
	<option value="feedback">Feedback</option>
	<option value="other">Other</option>
	</select>
</div>
<div id="textarea">
<label>Additional Information: </label><textarea name="Comment_box" rows="5" cols="30">
</textarea>
</div>
<div id="radiobtn">
<label for="radio1" style="margin-right: 5px;" id="radio1">Have you been to the restaurant?</label>
    <input id="yes" type="radio" name="hasbeenYes" value="yes" />	
	<label for="yes">Yes </label>
	<input id="no" type="radio" name="hasbeenNo" value="no" />	
	<label for="no">No </label>
</div>
<div id="best_contact_day">
<label>Best way to contact you?</label>
<label>
<input type="checkbox" name= "contactdays" 
value= "contact days" />
 Monday</label>
 <label>
<input type="checkbox" name= "contactdaysM" 
value= "M" />
 M</label>
 <label>
<input type="checkbox" name= "contactdaysT" 
value= "T" />
 T</label>
 <label>
<input type="checkbox" name= "contactdaysW" 
value= "W" />
 W</label>
 <label>
<input type="checkbox" name= "contactdaysTH" 
value= "W" />
 TH</label>
<label>
<input type="checkbox" name= "contactdaysF" 
value= "W" />
 F</label>
 </div>
 <div id="submitbtn">
 <input type="submit" value="Submit" />
 </div>
</form>
</center>
</body>

<footer class="site-footer">
<hr id="bottom" />
<center>12345 dream lane, Eagan, Wisconsin, 99999</center>
<center>123-456-7890</center>
</footer>

</html>
