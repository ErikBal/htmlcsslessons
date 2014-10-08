<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is an <?php $t->cHTML('<I>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>  
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p><?php $t->cHTML('<i>'); ?> is used for a number of reasons, including listing book and movie titles, foreign words and mathematical variables, and for emphasis.
      <li class="list-group-item">
        <strong><?php $t->cHTML('<i>'); ?> Example:</strong>
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
        <i><!-- put italic text here --></i>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>