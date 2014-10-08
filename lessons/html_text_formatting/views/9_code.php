<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a <?php $t->cHTML('<CODE>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          How to format text using HTML tags.
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p><?php $t->cHTML('<code>'); ?> is used to denote computer code from regular text.  All of the examples you see on this page are made using this tag.
      <li class="list-group-item">
        <strong><?php $t->cHTML('<code>'); ?> Example:</strong>
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
        <code><!-- put code text here --></code>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>