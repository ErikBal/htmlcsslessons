 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a RADIO CHECKBOX?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>Radio buttons are used when you want to let the visitor select one, and ONLY one, option from a set of alternatives.</p>
      </li>
      <li class="list-group-item">
        <strong>RADIO CHECKBOX Example:</strong>
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
       <form name="myform" action"mailto:youremail@email.com" method="post" >
       <p>Please select your favorite color.</p>

       <label>Red<input type="radio" name="color"/><br />
       <label>Blue<input type="radio" name="color"/><br />
       <label>Green<input type="radio" name="color"/><br />
       <label>Yellow<input type="radio" name="color"/><br />
       <label>None of these<input type="radio" name="color"/><br />
       </form>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>