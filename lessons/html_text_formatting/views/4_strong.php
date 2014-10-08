<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
           What is a <?php $t->cHTML('<STRONG>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>  
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p><?php $t->cHTML('<strong>'); ?> gives text strong importance, and is typically displayed in bold.
      <li class="list-group-item">
        <strong><?php $t->cHTML('<strong>'); ?> Example:</strong>
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
        <strong><!-- put emphasized text here --></strong>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>