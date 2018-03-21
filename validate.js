function validate(){

var rePhone=/^[6-9]{1}[0-9]{9}$/;
var reName =/^[\w]+$/;
var reAge =/^[1-9]{1}[0-9]?$/;
var reEmail =/[a-zA-Z]{1}[\w]*(@){1}[a-zA-Z]+(.)[a-zA-Z]+$/;
var error=0;

var form=document.getElementById('f');
var a=form.pwd.value;
var b=form.c-pwd.value;

if(!reName.test(form.first.value)){error++; document.getElementById("f").innerHTML="INVALID";}
else {document.getElementById("f").innerHTML="VALID";}

if(!reName.test(form.last.value)){error++; document.getElementById("l").innerHTML="INVALID";}
else {document.getElementById("l").innerHTML="VALID";}

if(!reEmail.test(form.email.value)){error++; document.getElementById("e").innerHTML="INVALID";}
else {document.getElementById("e").innerHTML="VALID";}

if(!rePhone.test(form.number.value)){error++; document.getElementById("n").innerHTML="INVALID";}
else {document.getElementById("n").innerHTML="VALID";}

if(a!=b){error++; document.getElementById("c").innerHTML="Passwords Do not match";}
else {document.getElementById("c").innerHTML="VALID";}

if(error==0)
{return true;}
else
{
return false;
}
}
