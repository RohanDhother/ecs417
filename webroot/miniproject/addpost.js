function Clear()
{
  if(confirm("Are you Sure?"))
  {
    var title = document.getElementById('title');
    title.value ='';
    var text = document.getElementById('text');
    text.value = '';
  }
}
function validateaddpost()
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
    return false;
  }
  else if(title=='')
  {
    alert("Please enter the title field");
    document.getElementById('title').style.backgroundColor ="red";
    document.getElementById('title').style.color ="white";
    return false;
  }
  else if(text=='')
  {
    alert("Please enter the content field");
    document.getElementById('text').style.backgroundColor ="red";
    document.getElementById('text').style.color ="white";
    return false;
  }
}
