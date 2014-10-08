 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a PASSWORD FIELD?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>The password field is designed to capture user input, but disguise each character with an asterisk (*) instead of displaying the entered digits. It offers a 
        user on-screen privacy while he or she is entering a password.  It is placed on a website using the <?php $t->cHTML('<input>'); ?> tag and specify a value 
        of "password" for the type attribute.</p>
      </li>
      <li class="list-group-item">
        <strong>PASSWORD FIELD Example:</strong>
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
       <form name="myform" action"somescript.php" method="post" >
       <label>Password:<input type="password" title="Please enter a password" size="12" maxlength="10" /></label>
       </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>