function LoadBlog(postlists)
{
  var posts = document.getElementById('Posts');
        var i = 0;
        while(i<postlists.length)
        {
          let post = postlists[i];
          let titleContent = post[0];
          let contentContent = post[1];
          // let dateandtimeContent = post[2];
          let blogbox = document.createElement('div');
          blogbox.className = 'Blog-box';
          // let dateandtime = document.createElement('div');
          // dateandtime.className = 'dateandtime';
          // let dateandtimeText = document.createTextNode(dateandtimeContent);
          // dateandtime.appendChild(dateandtimeText);
          // blogbox.appendChild(dateandtime);
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
          i++;
        }

}
