<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          How do I make an <?php $t->cHTML('<IMG>'); ?> a link ?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <p>Image links are constructed as you might expect, by embedding an <?php $t->cHTML('<img>'); ?> tag inside of an anchor element <?php $t->cHTML('<a>'); ?>. Like 
    HTML text links, image links require opening and closing anchor tags, but instead of placing text between these opening and closing tags, you need to place an 
    image tag.</p>
    <ul class="list-group">
      <li class="list-group-item">
        <strong>MAKING AN <?php $t->cHTML('<IMG>'); ?> a LINK Example:</strong>
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
        <a href="http://www.espn.com" target="_blank"><img src="peyton.gif" /></a>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>