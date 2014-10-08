 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is an <?php $t->cHTML('<IMG>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>In order to place an image onto a website, you first need to know where the image file is located within the file tree of the web page.  Use the 
        <?php $t->cHTML('<img>'); ?> tag to place an image on your webpage.  Please note that the <?php $t->cHTML('<img>'); ?> tag is self closing.  You only need to 
        put a / before closing the original tag.</p>
      </li>
      <li class="list-group-item">
        <strong><?php $t->cHTML('<IMG>'); ?> Example:</strong>
      </li>
      <li class="list-group-item">
        <pre><code><?php $t->cHTML('<!DOCTYPE html>
<html>
     <head>
         <title> 
            <!-- Title Here -->
         </title>
         <!--Code Here-->
     </head>
     <body>    
        <img src="/images/logo.jpg" alt="logo" title="My company logo" width="50px" height="50px" align="left" />
        <!-- THE FILE PATH IS RELATIVE TO WHERE YOUR FILE IS STORED AND IT MUST BE CORRECT FOR THE IMAGE TO SHOW UP -->
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>