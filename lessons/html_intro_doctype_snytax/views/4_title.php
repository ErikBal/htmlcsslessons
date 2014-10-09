<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is the <?php $t->cHTML('<TITLE>'); ?> element?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <p>
     The <?php $t->cHTML('<TITLE>'); ?> element is the important for a few reasons. First it gives the document a title. This title is only visible by the user from the tab of the browser. This title is also can be read by search engine crawlers. This is one of the things that help the search engines determine what the contents of the page is by the title. Every HTML page you create, should have a <?php $t->cHTML('<TITLE>'); ?> element.
    </p>
    <ul class="list-group">
      <li class="list-group-item">
        <strong>
          <?php $t->cHTML('<TITLE>'); ?> Element Example:
        </strong>
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
     <!-- Code Here-->
</html>
'); ?>
</code></pre>
      </li>
    </ul>
    <p>
     Notice how the <?php $t->cHTML('<TITLE>'); ?> element is inside of the <?php $t->cHTML('<HEAD>'); ?> element. This is very important, as the <?php $t->cHTML('<TITLE>'); ?> must be in the <?php $t->cHTML('<HEAD>'); ?> element. Reason for this, is because the <?php $t->cHTML('<TITLE>'); ?> needs to be to rendered before the rest of the document is. This is why the <?php $t->cHTML('<TITLE>'); ?> element in between in the <?php $t->cHTML('<HEAD>'); ?> element because everything between the <?php $t->cHTML('<HEAD>'); ?> element is loaded before the rest of the document.
    </p>
  </div>
</div>
