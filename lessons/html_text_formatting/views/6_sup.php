<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a <?php $t->cHTML('<SUP>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>  
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p><?php $t->cHTML('<sup>'); ?> may be used to express exponential expressions.  You may have come across several texts where a referencing directs your attention to the bottom of the page. These footnotes can also be created with the superscript tag.
      <li class="list-group-item">
        <strong><?php $t->cHTML('<sup>'); ?> Example:</strong>
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
        <sup><!-- put superscripted text here --></sup>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>