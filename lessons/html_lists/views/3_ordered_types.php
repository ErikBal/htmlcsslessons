<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What are ORDERED LIST TYPES?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>The numbering of an HTML list can be changed to letters or Roman Numerals by once again adjusting the type attribute</p>
      </li>
      <li class="list-group-item">
        <strong>You can also start with another number besides zero.</strong>
      </li>
      <li class="list-group-item">
        <strong>BEGINNING WITH A NUMBER OTHER THAN ZERO Example:</strong>
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
       <ol>
          <li start="3">Item One</li>
          <li>Item Two</li>
          <li>Item Three</li>
       </ol>
     </body>
</html>
'); ?>
</code></pre>
      </li>
      <li class="list-group-item">
        <strong>LOWER CASE LETTERS Example:</strong>
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
       <ol>
          <li type="a">Item One</li>
          <li>Item Two</li>
          <li>Item Three</li>
       </ol>
     </body>
</html>
'); ?>
</code></pre>
      </li>
      <li class="list-group-item">
        <strong>UPPER CASE LETTERS Example:</strong>
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
       <ol>
          <li type="A">Item One</li>
          <li>Item Two</li>
          <li>Item Three</li>
       </ol>
     </body>
</html>
'); ?>
</code></pre>
      </li>
      <li class="list-group-item">
        <strong>LOWER CASE NUMERALS Example:</strong>
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
       <ol>
          <li type="i">Item One</li>
          <li>Item Two</li>
          <li>Item Three</li>
       </ol>
     </body>
</html>
'); ?>
</code></pre>
      </li>
      <li class="list-group-item">
        <strong>UPPER CASE NUMERALS Example:</strong>
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
       <ol>
          <li type="I">Item One</li>
          <li>Item Two</li>
          <li>Item Three</li>
       </ol>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>