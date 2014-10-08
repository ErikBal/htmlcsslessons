<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is the <?php $t->cHTML('<PRE>'); ?> element?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <p>
      A <?php $t->cHTML('<pre>'); ?> stands for previously formatted text.  Use this tag for any time that you wish to have the text appear exactly as it is typed. Spaces, tabs, and line breaks that exist in your actual code will be preserved.
    </p>
    <ul class="list-group">
      <li class="list-group-item">
        <strong><?php $t->cHTML('<pre>'); ?> Example:</strong>
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
        <pre> <!-- your previously formatted text goes here --> </pre>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>