function LoadBlog()
{
  // var postlists = <?php echo '["' . implode('", "', $Postlists) . '"]' ?>;
  var posts = document.getElementById('Posts');
        var i = 0;
        // while(i<postlists.length)
        while(i<2)
        {
          // let post = postlists[i];
          // let titleContent = post[0];
          // let contentContent = post[1];
          // let dateContent = post[2];
          // let timeContent = post[3];
          let blogbox = document.createElement('div');
          blogbox.className = 'Blog-box';
          let dateandtime = document.createElement('div');
          dateandtime.className = 'dateandtime';
          let dateandtimeText = document.createTextNode("dateandtime");
          // let dateandtimeText = document.createTextNode(dateContent + " " + timeContent);
          dateandtime.appendChild(dateandtimeText);
          blogbox.appendChild(dateandtime);
          let title = document.createElement('div');
          title.className = 'title';
          let titleText = document.createTextNode("title");
          // let titleText = document.createTextNode(titleContent);
          title.appendChild(titleText);
          blogbox.appendChild(title);
          let content = document.createElement('div');
          content.className = 'text';
          let contentText = document.createTextNode("content");
          // let contentText = document.createTextNode(contentContent);
          content.appendChild(contentText);
          blogbox.appendChild(content);
          let hr = document.createElement('hr');
          blogbox.appendChild(hr);
          posts.appendChild(blogbox);
          i++;
        }

}
