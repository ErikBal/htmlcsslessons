<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a <?php $t->cHTML('<SUB>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p><?php $t->cHTML('<sub>'); ?> is used to drop letters or words below the normal line height, such as in chemical compounds (C0<sub>2</sub>).
      <li class="list-group-item">
        <strong><?php $t->cHTML('<sub>'); ?> Example:</strong>
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
        <sub><!-- put subscripted text here --></sub>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>