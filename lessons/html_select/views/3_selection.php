 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a SELECTION LIST?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>You can change the behavior and appearance of the dropdown list by adding a few attributes.  Using the <b>multiple</b> attribute, you can allow a user to 
        select more than one option.  Using the <b>size</b> attribute, you can control how many selections a user can view at once.  Please note that a user MUST hold down the 
        <b>Control</b> key when clicking to make multiple selections.</p>
      </li>
      <li class="list-group-item">
        <strong>SELECTION LIST Example:</strong>
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
       <p>Select all of your favorite colors</p>
       <select size="4" name="selectionField" multiple="yes"> 
        <option value="Red" >Red</option>
        <option value="Blue" >Blue</option>
        <option value="Orange" >Orange</option>
        <option value="Yellow" >Yellow</option>
        <option value="Pink" >Pink</option>
        <option value="Black" >Black</option>
       </select>
       </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>