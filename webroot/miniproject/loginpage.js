function loginpage(sessionStart)
{
  var login = document.getElementById('login');
  if (sessionStart)
  {
    var login = document.getElementById('login');
    let section = document.createElement('section');
    section.setAttribute("id", "login-box");
    section.setAttribute("class", "color");
    login.appendChild(section);
    let form = document.createElement('form');
    form.setAttribute("action", "login.php");
    form.setAttribute("method", "post");
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
  }
  else {
    {
      var login = document.getElementById('login');
      let loginText = document.createTextNode("You are logged in");
      login.appendChild(loginText);
      let form = document.createElement('form');
      form.setAttribute("action", "logout.php");
      form.setAttribute("method", "post");
      form.setAttribute("id", "logout");
      login.appendChild(form);
      let div = document.createElement('div');
      form.appendChild(div);
      let input = document.createElement('input');
      input.setAttribute("id", "logout-submit");
      input.setAttribute("type", "submit");
      input.setAttribute("value", "Logout");
      div.appendChild(input);
      var addpostButton = document.getElementById('addpostButton');
      addpostButton.setAttribute("href", "");
    }
  }
}
