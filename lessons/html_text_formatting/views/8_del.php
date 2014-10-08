<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a <?php $t->cHTML('<DEL>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p><?php $t->cHTML('<del>'); ?> can be used to indicate the deletion of an error or the removal of text in a draft
      <li class="list-group-item">
        <strong><?php $t->cHTML('<del>'); ?> Example:</strong>
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
        <del><!-- put struckthrough text here --></del>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>