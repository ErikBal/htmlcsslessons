 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is an <?php $t->cHTML('<A>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>Text links are what link websites together with the click of a button. These links are actually HTML anchors constructed using anchor tags <?php $t->cHTML('<a>'); ?>.</p>
      </li>
      <li class="list-group-item">
        <strong><?php $t->cHTML('<a>'); ?> Example:</strong>
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
        <a>This text is a clickable link</a>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>