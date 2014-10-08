<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What are <?php $t->cHTML('<H1>, <H2>, <H3>, <H4>, <H5>, and <H6>'); ?> elements?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <p>
      The <?php $t->cHTML('<h1>'); ?> to <?php $t->cHTML('<h6>'); ?> elements are heading elements.  The <?php $t->cHTML('<h1>'); ?> heading is the most important, and the <?php $t->cHTML('<h6>'); ?> is the least important.
      Use these tags for headings ONLY.  These tags are used by search engines to index the content of your site.  They are also used by the people viewing your site to skim through content.
    </p>
    <ul class="list-group">
      <li class="list-group-item">
        <strong><?php $t->cHTML('<h1>'); ?> Example:</strong>
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
     		<h1> <!-- this is where your heading text would go --> </h1>
        	<p> <!-- your paragraph text goes here --> </p>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>