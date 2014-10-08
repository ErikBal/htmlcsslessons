 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a <?php $t->cHTML('<LABEL>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>The <?php $t->cHTML('<label>'); ?> tag defines a label for an <?php $t->cHTML('<input>'); ?> element.  The <?php $t->cHTML('<label>'); ?> element does 
        not render as anything special for the user. However, it provides a usability improvement for mouse users, because if the user clicks on the text within 
        the <?php $t->cHTML('<label>'); ?> element, it toggles the control.</p>
      </li>
      <li class="list-group-item">
        <strong>LABEL Example:</strong>
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
        <form name="myform" action="somescript.php" method="post">
          <label>First Name:<input type="text" name="firstname" /></label><br />
          <label>Last Name:<input type="text" name="lastname" /></label><br />
        </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>