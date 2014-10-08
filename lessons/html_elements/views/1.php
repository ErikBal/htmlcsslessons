<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a <?php $t->cHTML('<P>'); ?> element?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <p>
      A <?php $t->cHTML('<p>'); ?> element, or also called a tag if it is enclosed in angle brackets, is used to denote a paragraph of text in the <?php $t->cHTML('<body>'); ?> of an HTML page.
    </p>
    <ul class="list-group">
      <li class="list-group-item">
        <strong><?php $t->cHTML('<p>'); ?> Example:</strong>
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
          <p> <!-- your paragraph text goes here --> </p>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>