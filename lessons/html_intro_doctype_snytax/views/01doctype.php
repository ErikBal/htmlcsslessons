<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is the Doctype?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <p>
      Doctype declaration is used to tell the browser the type of document is currently rendering. With HTML5 you no longer have to use such declarations such as transitional or strict. You can simply declare the document as HTML.
    </p>
    <ul class="list-group">
      <li class="list-group-item">
        <strong>HTML4 Doctype Declaration Example:</strong>
      </li>
      <li class="list-group-item">
        <code>
          <?php $t->cHTML('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">'); ?>
        </code>
      </li>
    </ul>
    <ul class="list-group">
      <li class="list-group-item">
        <strong>HTML5 Doctype Declaration Example:</strong>
      </li>
      <li class="list-group-item">
        <code>
          <?php $t->cHTML('<!DOCTYPE html>'); ?>
        </code>
      </li>
    </ul>
  </div>
</div>
