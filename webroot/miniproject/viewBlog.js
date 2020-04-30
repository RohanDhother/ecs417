function LoadBlog(Postlists)
{
  var posts = document.getElementById('Posts');
        var i = 0;
        while(i<2)
        {
          let blogbox = document.createElement('div');
          blogbox.className = 'Blog-box';
          let dateandtime = document.createElement('div');
          dateandtime.className = 'dateandtime';
          let dateandtimeText = document.createTextNode("dateandtime");
          dateandtime.appendChild(dateandtimeText);
          blogbox.appendChild(dateandtime);
          let title = document.createElement('div');
          title.className = 'title';
          let titleText = document.createTextNode("title");
          title.appendChild(titleText);
          blogbox.appendChild(title);
          let content = document.createElement('div');
          content.className = 'text';
          let contentText = document.createTextNode("text");
          content.appendChild(contentText);
          blogbox.appendChild(content);
          let hr = document.createElement('hr');
          blogbox.appendChild(hr);
          posts.appendChild(blogbox);
          i++;
        }

}
