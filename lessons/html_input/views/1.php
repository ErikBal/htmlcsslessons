 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is an <?php $t->cHTML('<INPUT>'); ?> element?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p><?php $t->cHTML('<input>'); ?> elements are form elements such as text fields, checkboxes, and buttons.  It relies upon a few attributes to classify 
        and name each form item, providing the web developer with a means to manipulate each element individually.</p>
      </li>
      <li class="list-group-item">
        <strong><?php $t->cHTML('<INPUT>'); ?> Example:</strong>
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
          <input type="text" name="firstname" /><br />
          <input type="text" name="lastname" /><br />
          Check Me:<input type="checkbox" name="checkbox1" /><br />
          Check Me: Too:<input type="checkbox" name="checkbox2" /><br />
          Yes:<input type="radio" /> No: <input type="radio" /><br />
          <input type="submit" value="SUBMIT" /> 
          <input type="reset" value="RESET" />
        </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>