<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is an ORDERED LIST?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>An ordered list is defined using the <?php $t->cHTML('<ol>'); ?> tag, and list items ( <?php $t->cHTML('<li>'); ?>) placed inside of an ordered list are preceded with numbers instead of bullets.</p>
      </li>
      <li class="list-group-item">
        <strong>ORDERED LIST Example:</strong>
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
       <ol>
          <li>Item One</li>
          <li>Item Two</li>
          <li>Item Three</li>
       </ol>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>