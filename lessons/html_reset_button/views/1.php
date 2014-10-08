 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a RESET BUTTON?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>A reset button allows users to basically clear their web form. It wipes values from all fields by "resetting" the form to its default appearance.  Set the type attribute 
        of the <?php $t->cHTML('<input>'); ?> tag to "reset" to incorporate a reset button into a web form.</p>
      </li>
      <li class="list-group-item">
        <strong>RESET BUTTON Example:</strong>
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
       <label>Password:<input type="password" title="Please enter a password" size="12" maxlength="10" /></label><br />
       <input type="reset" value="Reset" />
       </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>