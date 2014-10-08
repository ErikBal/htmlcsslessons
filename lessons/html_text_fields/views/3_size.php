 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is the SIZE attribute?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>To modify the visual presentation of a text field, one needs to pass an integer value to the size attribute. The value represents how many characters a text 
        field can display within the text field window.</p>
      </li>
      <li class="list-group-item">
        <strong>SIZE ATTRIBUTE Example:</strong>
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
          <label>First Name:<input type="text" name="firstname" size="15"/></label><br />
          <label>Last Name:<input type="text" name="lastname" size="20"/></label><br />
          <label>Email:<input type="text" name="lastname" size="20"/></label><br />
          <label>User Name:<input type="text" name="lastname" size="15"/></label><br />
        </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>