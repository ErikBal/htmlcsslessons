 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a TEXT FIELD?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>Text fields offer a small rectangular box that is always ready to receive information from viewers. Users will notice that when they click these fields, the 
        cursor will change from the typical arrow to a pipe character ( | ), allowing for text entries to be typed inside each input field.  A text field is placed 
        on a web page using the <?php $t->cHTML('<input>'); ?> tag, with the type attribute set with a value of "text"</p>
      </li>
      <li class="list-group-item">
        <strong>TEXT FIELD Example:</strong>
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
        </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>