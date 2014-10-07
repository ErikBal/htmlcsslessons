<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is the <?php $t->cHTML('<BODY>'); ?> element?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <p>
     The <?php $t->cHTML('<BODY>'); ?> element is for everything you want the browser to display and what will be shown to the user. Unlike the <?php $t->cHTML('<HEAD>'); ?> element, which is loaded before the <?php $t->cHTML('<BODY>'); ?> element and never display anything visually in the browser.
    </p>
    <ul class="list-group">
      <li class="list-group-item">
        <strong>
          <?php $t->cHTML('<BODY>'); ?> Element Example:
        </strong>
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
          <!-- Content Here-->
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
    <p>
    Once again, make sure to take notice of how the <?php $t->cHTML('<BODY>'); ?> element is open and closed. All HTML elements that you want displayed on the document need to be between the <?php $t->cHTML('<BODY>'); ?> element.
    </p>
  </div>
</div>
