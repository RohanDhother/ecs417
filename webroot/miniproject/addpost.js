function Preview() //This function previews the post
{
  if(!validateaddpost())
  {

  }
  else {
    var blog = document.getElementById('Blog');
    blog.className = 'color';
    while (blog.firstChild) {
      blog.removeChild(blog.lastChild);
    }
    let posts = document.createElement('div');
    posts.setAttribute("id", "Posts");
    blog.appendChild(posts);
    let titleContent =  document.forms["addpost"]["title"].value;
    let contentContent = document.forms["addpost"]["text"].value;
    var d = new Date();
    let day = d.getDate().toString();
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    let day_end;
    if(day=="1")
    {
      day_end="st";
    }
    else if(day=="2")
    {
      day_end="nd";
    }
    else if (day=="3") {
      day_end="rd";
    }
    else {
      day_end="th";
    }
    let month = months[d.getMonth()];
    let year = d.getFullYear();
    let hour = d.getHours()-1;
    let minutes = d.getMinutes();
    let dateandtimeContent = day +day_end + " " + month + " " + year + ", " + hour +":" + minutes + " UTC";
    let blogbox = document.createElement('div');
    blogbox.className = 'Blog-box';
    let dateandtime = document.createElement('div');
    dateandtime.className = 'dateandtime';
    let dateandtimeText = document.createTextNode(dateandtimeContent);
    dateandtime.appendChild(dateandtimeText);
    blogbox.appendChild(dateandtime);
    let title = document.createElement('div');
    title.className = 'title';
    let titleText = document.createTextNode(titleContent);
    title.appendChild(titleText);
    blogbox.appendChild(title);
    let content = document.createElement('div');
    content.className = 'text';
    let contentText = document.createTextNode(contentContent);
    content.appendChild(contentText);
    blogbox.appendChild(content);
    let hr = document.createElement('hr');
    blogbox.appendChild(hr);
    posts.appendChild(blogbox);
    blogbottom = document.createElement('div');
    blogbottom.setAttribute("id", "Blog-bottom");
    blog.appendChild(blogbottom);
  }
}
function Clear() //This function clears all fields
{
  if(confirm("Are you Sure?"))
  {
    var title = document.getElementById('title');
    title.value ='';
    var text = document.getElementById('text');
    text.value = '';
    var blog = document.getElementById('Blog');
    blog.className = 'color';
    while (blog.firstChild) {
      blog.removeChild(blog.lastChild);
    }
    blog.classList.remove("color");
  }
}
function validateaddpost() //This functions shows the errors
{
  var title = document.forms["addpost"]["title"].value;
  var text = document.forms["addpost"]["text"].value;
  if(title=='' && text=='')
  {
    alert("Please enter all field");
    document.getElementById('title').style.backgroundColor ="red";
    document.getElementById('text').style.backgroundColor ="red";
    document.getElementById('title').style.color ="white";
    document.getElementById('text').style.color ="white";
    setTimeout(function(){
      document.getElementById('title').style.backgroundColor = "white";
      document.getElementById('text').style.backgroundColor = "white";
      document.getElementById('title').style.color ="black";
      document.getElementById('text').style.color ="black";
  }, 3000)
    return false;
  }
  else if(title=='')
  {
    alert("Please enter the title field");
    document.getElementById('title').style.backgroundColor ="red";
    document.getElementById('title').style.color ="white";
    setTimeout(function(){
      document.getElementById('title').style.backgroundColor = "white";
      document.getElementById('title').style.color ="black";
  }, 3000)
    return false;
  }
  else if(text=='')
  {
    alert("Please enter the content field");
    document.getElementById('text').style.backgroundColor ="red";
    document.getElementById('text').style.color ="white";
    setTimeout(function(){
      document.getElementById('text').style.backgroundColor = "white";
      document.getElementById('text').style.color ="black";
  }, 3000)
    return false;
  }
  else
  {
    return true;
  }
}
