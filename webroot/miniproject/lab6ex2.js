var array = new Array();
var num = 0;
for(i=0;i<4;i++)
{
  num = window.prompt('enter value num'  + i);
  array.push(num);
}
window.alert(Math.max(array));
