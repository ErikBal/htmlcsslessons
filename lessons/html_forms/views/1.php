 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a <?php $t->cHTML('<FORM>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>Forms are a composition of buttons, checkboxes, and text input fields embedded inside of HTML documents with one goal in mind: to capture user input. 
        By doing things such as providing fields for user data such as names, phone number, and email addresses, web forms give users the opportunity to interact 
        directly with a webpage.</p>
      </li>
      <li class="list-group-item">
        <strong><?php $t->cHTML('<FORM>'); ?> Example:</strong>
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
          <input type="checkbox" /> Checkbox<br/>
          <input type="text" /> Text Field<br/>
          <input type="submit" value="SUBMIT" />
        </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>