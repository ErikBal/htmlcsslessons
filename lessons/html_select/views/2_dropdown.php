 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a DROPDOWN LIST?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>By default, select fields, popularly called drop down lists, only allow the user to choose a single value.</p>
      </li>
      <li class="list-group-item">
        <strong>DROPDOWN LIST Example:</strong>
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
       <p>Select your favorite color</p>
       <select name="selectionField"> 
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