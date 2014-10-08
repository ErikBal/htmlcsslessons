 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a TITLE attribute?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>You can use the title attribute for just about any page element, but it isn't required for any page element.  You can use it to describe links, tables, 
        individual table rows, and other structural HTML elements. They're used for search engine ranking algorithms which read the text in title attributes as 
        regular page content.</p>
      </li>
      <li class="list-group-item">
        <strong>Title Example:</strong>
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
        <h1 title="Welcome"><!--Place <h1> text here --></h1>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>