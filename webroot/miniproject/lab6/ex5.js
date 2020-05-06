var num = 1;
let table = document.querySelector('table');
let headerCaption = document.createElement('caption');
let headerCaptionText = document.createTextNode("Multiplication table");
headerCaption.appendChild(headerCaptionText);
headerCaption.id = "header";
let tbody = document.createElement('tbody');
for(i=1;i<17;i++)
{
  let newTr = document.createElement('tr');
  tbody.appendChild(newTr);
  for(j=1;j<17;j++)
  {
    let newTd = document.createElement('td');
    newTr.appendChild(newTd);
    if(j==1&&i==1)
    {
      newTdText = document.createTextNode("X");
      newTd.className = 'edge';
    }
    else {
      jj=j-1;
      ii=i-1;
      if(jj==0){jj=1;}
      if(ii==0){ii=1;}
      num = jj*ii;
      newTdText = document.createTextNode(num);
      newTd.className = 'main';
    }
    newTd.appendChild(newTdText);
  }
}
//table.appendChild(tbody);
let footerCaption = document.createElement('caption');
let footerCaptionText = document.createTextNode("Javascript");
footerCaption.appendChild(footerCaptionText);
//table.after(footerCaption);
table.appendChild(tbody);
table.appendChild(headerCaption);
table.after(footerCaption);
footerCaption.id = "footer";
