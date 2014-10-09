<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is the <?php $t->cHTML('<HEAD>'); ?> element?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <p>
      The <?php $t->cHTML('<HEAD>'); ?> element displays little for the viewers themselves but is very important for e.g search engines and loading external files before the body of the page is rendered. For example you could load a external CSS (Cascading Style Sheet) or an external JS (Javascript) file.
    </p>
    <ul class="list-group">
      <li class="list-group-item">
        <strong>
          <?php $t->cHTML('<HEAD>'); ?> Element Example:
        </strong>
      </li>
      <li class="list-group-item">
<pre><code><?php $t->cHTML('<!DOCTYPE html>
<html>
     <head>
         <!--Code Here-->
     </head>
     <!-- Code Here-->
</html>'); ?>
</code></pre>
      </li>
    </ul>
    <p>
     Notice how you must open the <?php $t->cHTML('<HEAD>'); ?> element and then close the <?php $t->cHTML('</HEAD>'); ?> element (note the use of backslash to indicate when you are closing a element). Anything you want to have loaded before the body is loaded would go into between the <?php $t->cHTML('<HEAD>'); ?> element.
    </p>
  </div>
</div>
