 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
           What is an <?php $t->cHTML('<EM>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p><?php $t->cHTML('<em>'); ?> is used to indicate emphasized text. While it is often rendered identical to I, italics, using EM rather than I is preferred. It allows the browser to distinguish between emphasized text and other text which can be drawn in italics.</p>
      </li>
      <li class="list-group-item">
        <strong><?php $t->cHTML('<em>'); ?> Example:</strong>
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
        <em><!-- put emphasized text here --></em>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>