 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          HOW DO I DISABLE SELECTION LISTS?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>Disabling a selection field is achieved by setting the disabled attribute to "yes". But before doing that, you should set at least one of the values to be 
        selected. Doing so renders a read-only selection field on the page that can inform your users of their selections without allowing them to alter the selection.</p>
      </li>
      <li class="list-group-item">
        <strong> DISABLED SELECTION LIST Example:</strong>
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
       <p>Your favorite color is blue</p>
       <select size="4" name="selectionField" multiple="yes" disabled="yes"> 
        <option value="Red" >Red</option>
        <option selected value="Blue" >Blue</option>
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