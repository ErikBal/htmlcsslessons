 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is the MAXLENGTH attribute?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>Maxlength is an optional attribute that accepts an integer value. It allows you to restrict the number of characters a user can 
        type in a specific text field.</p>
      </li>
      <li class="list-group-item">
        <strong>MAXLENGTH ATTRIBUTE Example:</strong>
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
          <label>First Name:<input type="text" name="firstname" size="15" maxlength="10"/></label><br />
          <label>Last Name:<input type="text" name="lastname" size="20" maxlength="15"/></label><br />
          <label>Email:<input type="text" name="lastname" size="20" maxlength="20"/></label><br />
          <label>User Name:<input type="text" name="lastname" size="15" maxlength="10"/></label><br />
        </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>