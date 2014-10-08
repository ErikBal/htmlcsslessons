<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is an UNORDERED LIST?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>An unordered list (<?php $t->cHTML('<ul>'); ?>) signifies to a web browser that all list items contained inside the <?php $t->cHTML('<ul>'); ?> tag should be 
        rendered with a bullet preceding the text. The default bullet type for most web browsers is a full disc (black circle).</p>
      </li>
      <li class="list-group-item">
        <strong>UNORDERED LIST Example:</strong>
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
        <ul>
          <li>Item One</li>
          <li>Item Two</li>
          <li>Item Three</li>
       </ul>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>