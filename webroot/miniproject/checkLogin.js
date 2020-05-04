function NotEmail()
{
alert("Please enter the username field");
document.getElementById('inputEmail3').style.backgroundColor ="red";
document.getElementById('inputEmail3').style.color ="white";
setTimeout(function(){
  document.getElementById('inputEmail3').style.backgroundColor = "white";
  document.getElementById('inputEmail3').style.color ="black";
}, 3000)
}
function NotPassword()
{
alert("Please enter the password field");
document.getElementById('inputPassword3').style.backgroundColor ="red";
document.getElementById('inputPassword3').style.color ="white";
setTimeout(function(){
  document.getElementById('inputPassword3').style.backgroundColor = "white";
  document.getElementById('inputPassword3').style.color ="black";
}, 3000)
}
