 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is the <?php $t->cHTML('<A>'); ?> TARGET attribute?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>The target attribute defines how each link will open when clicked.</p>
      </li>
      <li class="list-group-item">
        <strong>_blank:</strong><p>Opens new page in a new browser window.</p>
      </li>
      <li class="list-group-item">
        <strong>_blank Example:</strong>
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
        <a href="http://espn.com" target="_blank"><!-- Place the text here that you want to link to ESPN.com --></a>
        	<!-- THIS WILL OPEN ESPN.COM IN A NEW WINDOW -->
     </body>
</html>
'); ?>
</code></pre>
      </li>
       <li class="list-group-item">
        <strong>_self:</strong><p>Loads the new page in the current window.</p>
      </li>
      <li class="list-group-item">
        <strong>_self Example:</strong>
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
        <a href="http://espn.com" target="_self"><!-- Place the text here that you want to link to ESPN.com --></a>
        	<!-- THIS WILL OPEN ESPN.COM IN THE CURRENT WINDOW -->
     </body>
</html>
'); ?>
</code></pre>
      </li>
       <li class="list-group-item">
        <strong>_parent:</strong><p>Loads new page into a parent frame.</p>
      </li>
      <li class="list-group-item">
        <strong>_parent Example:</strong>
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
         <a href="http://espn.com" target="_parent"><!-- Place the text here that you want to link to ESPN.com --></a>
        	<!-- THIS WILL OPEN ESPN.COM IN PARENT FRAME -->
     </body>
</html>
'); ?>
</code></pre>
      </li>
      <li class="list-group-item">
        <strong>_top:</strong><p>Loads new page into the current browser window, cancelling all frames.</p>
      </li>
      <li class="list-group-item">
        <strong>_top Example:</strong>
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
        <a href="http://espn.com" target="_top"><!-- Place the text here that you want to link to ESPN.com --></a>
        	<!-- THIS WILL OPEN ESPN.COM IN THE CURRENT WINDOW, CANCELLING ALL FRAMES -->
     </body>
</html>
'); ?>
</code></pre>
      </li>
      </li>
    </ul>
  </div>
</div>