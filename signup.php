
<?php
 include_once 'header.php';
 ?>
<div>

<section>
<h2>Signup</h2>
<form id ='fo' action="includes/signup-inc.php" method="POST" onsubmit="return validate();">
	<input type="text" name="uid" placeholder="Username" id="u_uid" onkeyup="checkname()" required ><span id="u"></span><span id="name_status"></span><br>
	<input type="text" name="first" placeholder="Firstname" required><span id="f"></span><br>
	<input type="text" name="last" placeholder="Lastname" required ><span id="l"></span><br>
	<input type="email" name="email" placeholder="Email" required><span id="e"></span><br>

	<input type="password" name="pwd" placeholder="Password" required ><span id="p"></span><br>
	<input type="password" name="cpwd" placeholder="Confirm Password" required><span id="c"></span><br>
	<input type="number" name="number" placeholder="Number"required ><span id="n"></span><br>
	<input type="radio" name="gender" value="male" checked> Male<br>
  	<input type="radio" name="gender" value="female"> Female<br><br>
     	<button type="submit" name="submit" >Sign up</button>
</form>
</section>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<script >function validate(){
var reUser=/^[a-zA-Z]{1,}$/
var rePhone=/^[6-9]{1}[0-9]{9}$/;
var reName =/^[\w]+$/;
var reAge =/^[1-9]{1}[0-9]?$/;
var reEmail =/[a-zA-Z]{1}[\w]*(@){1}[a-zA-Z]+(.)[a-zA-Z]+$/;
var error=0;

var form=document.getElementById("fo");
 var a=form.pwd.value;
 var b=form.cpwd.value;

if(!reUser.test(form.uid.value)){error++;document.getElementById('u').innerHTML="INVALID";}
if(!reName.test(form.first.value)){error++; document.getElementById("f").innerHTML="INVALID";}
else {document.getElementById("f").innerHTML="VALID";}

if(!reName.test(form.last.value)){error++; document.getElementById("l").innerHTML="INVALID";}
else {document.getElementById("l").innerHTML="VALID";}

if(!reEmail.test(form.email.value)){error++; document.getElementById("e").innerHTML="INVALID";}
else {document.getElementById("e").innerHTML="VALID";}

if(!rePhone.test(form.number.value)){error++; document.getElementById("n").innerHTML="INVALID";}
else {document.getElementById("n").innerHTML="VALID";}
if(a==""||b==""){
	{error++; document.getElementById("c").innerHTML="PLEASE FILL BOTH PASSWORD FIELDS";}
	{document.getElementById("p").innerHTML="INVALID";}
}
else{
	if(a!=b){error++; document.getElementById("c").innerHTML="PASSWORDS DO NOT MATCH";}
	else {document.getElementById("c").innerHTML="VALID";}
}
if(error==0)
{return true;}
else
{
return false;
}
}


function checkname()
{
 var name=document.getElementById( "u_uid" ).value;
	
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   user_name:name,
  },
  success: function (response) {
   $( '#name_status' ).html(response);
   if(response=="OK")	
   {
    return true;
console.log(1);	
   }
   else
   {
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#name_status' ).html("");
  return false;
 }
}



</script>
</body>
</html>
