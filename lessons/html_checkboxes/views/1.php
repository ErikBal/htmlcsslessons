 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a CHECKBOX?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>Deploy checkbox elements in a situation when the user must check all boxes that apply (or none). Set the type attribute of an <?php $t->cHTML('<input>'); ?> tag to checkbox 
        to place a checkbox element onto the web page.</p>
      </li>
      <li class="list-group-item">
        <strong>CHECKBOX Example:</strong>
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
       <p>Please select each type of music that you listen to.</p>

       <label>Country<input type="checkbox" name="music" value="country"  /><br />
       <label>Soul<input type="checkbox" name="music" value="soul"  /><br />
       <label>R&B<input type="checkbox" name="music" value="r&b"  /><br />
       <label>Pop<input type="checkbox" name="music" value="pop"  /><br />
       <label>Hip Hop<input type="checkbox" name="music" value="hip hop"  /><br />
       <label>Classical<input type="checkbox" name="music" value="classical"  /><br />
       </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>