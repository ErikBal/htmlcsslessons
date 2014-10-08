<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is the <?php $t->cHTML('<HTML>'); ?> element?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <p>
      The <?php $t->cHTML('<HTML>'); ?> element is for indicating that all code inside the <?php $t->cHTML('<HTML>'); ?> element needs to conform to the type of file that is set by the Doctype
    </p>
    <ul class="list-group">
      <li class="list-group-item">
        <strong>
          <?php $t->cHTML('<HTML>'); ?> Element Example:
        </strong>
      </li>
      <li class="list-group-item">
<pre><code><?php $t->cHTML('<!DOCTYPE html>
  <html>
    <!-- Code Here -->
  </html>'); ?>
</code></pre>
      </li>
    </ul>
    <p>
      Notice how you must open the <?php $t->cHTML('<HTML>'); ?> element and then close the <?php $t->cHTML('</HTML>'); ?> element (note the use of backslash to indicate when you are closing a element). Then all your code would go in between the <?php $t->cHTML('<HTML>'); ?> element that you just open and closed. Most elements will work this way, there are a few exceptions, which we will get to later.
    </p>
  </div>
</div>