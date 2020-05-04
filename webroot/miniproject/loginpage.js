var login = document.getElementById('login');
if (!myvar)
{
  var login = document.getElementById('login');
  let section = document.createElement('section');
  section.setAttribute("id", "login-box");
  section.setAttribute("class", "color");
  login.appendChild(section);
  let form = document.createElement('form');
  form.setAttribute("action", "login.php");
  form.setAttribute("method", "post");
  form.setAttribute("name", "loginpage");
  form.setAttribute("onsubmit", "return validatelogin()");
  section.appendChild(form);
  let div1 = document.createElement('div');
  form.appendChild(div1);
  let input1 = document.createElement('input');
  input1.setAttribute("type", "text");
  input1.setAttribute("class", "form-control");
  input1.setAttribute("id", "inputUsername3");
  input1.setAttribute("placeholder", "Username");
  input1.setAttribute("name", "username");
  div1.appendChild(input1);
  let div2 = document.createElement('div');
  form.appendChild(div2);
  let input2 = document.createElement('input');
  input2.setAttribute("type", "password");
  input2.setAttribute("class", "form-control");
  input2.setAttribute("id", "inputPassword3");
  input2.setAttribute("placeholder", "Password");
  input2.setAttribute("name", "password");
  div2.appendChild(input2);
  let br = document.createElement('br');
  form.appendChild(br);
  let div3 = document.createElement('div');
  form.appendChild(div3);
  let input3 = document.createElement('input');
  input3.setAttribute("id", "login-submit");
  input3.setAttribute("type", "submit");
  input3.setAttribute("value", "Login");
  div3.appendChild(input3);
  var addpostButton = document.getElementById('addpostButton');
  addpostButton.setAttribute("href", "#login");
}
else
  {
    var login = document.getElementById('login');
    let loginText = document.createTextNode("You are logged in " + myvar);
    login.appendChild(loginText);
    let form = document.createElement('form');
    form.setAttribute("action", "logout.php");
    form.setAttribute("method", "post");
    form.setAttribute("id", "logout");
    form.setAttribute("name","loginpage");
    login.appendChild(form);
    let br = document.createElement('br');
    form.appendChild(br);
    let div = document.createElement('div');
    form.appendChild(div);
    let input = document.createElement('input');
    input.setAttribute("id", "logout-submit");
    input.setAttribute("type", "submit");
    input.setAttribute("value", "Logout");
    div.appendChild(input);
  }
function validatelogin()
{
  var username = document.forms["loginpage"]["username"].value;
  var password = document.forms["loginpage"]["password"].value;
  if(username=='' && password=='')
  {
    alert("Please enter all field");
    document.getElementById('inputUsername3').style.backgroundColor ="red";
    document.getElementById('inputPassword3').style.backgroundColor ="red";
    document.getElementById('inputUsername3').style.color ="white";
    document.getElementById('inputPassword3').style.color ="white";
    setTimeout(function(){
      document.getElementById('inputUsername3').style.backgroundColor = "white";
      document.getElementById('inputPassword3').style.backgroundColor = "white";
      document.getElementById('inputUsername3').style.color ="black";
      document.getElementById('inputPassword3').style.color ="black";
  }, 3000)
    return false;
  }
  else if(username=='')
  {
    alert("Please enter the username field");
    document.getElementById('inputUsername3').style.backgroundColor ="red";
    document.getElementById('inputUsername3').style.color ="white";
    setTimeout(function(){
      document.getElementById('inputUsername3').style.backgroundColor = "white";
      document.getElementById('inputUsername3').style.color ="black";
    }, 3000)
    return false;
  }
  else if(password=='')
  {
    alert("Please enter the password field");
    document.getElementById('inputPassword3').style.backgroundColor ="red";
    document.getElementById('inputPassword3').style.color ="white";
    setTimeout(function(){
      document.getElementById('inputPassword3').style.backgroundColor = "white";
      document.getElementById('inputPassword3').style.color ="black";
    }, 3000)
    return false;
  }
  else
  {
    return true;
  }
}
