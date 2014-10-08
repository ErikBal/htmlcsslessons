 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is an EMAIL link?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p>Creating an email link is simple. If you want people to send an email to you regarding your site, a good way to do it is place an email link with a 
        subject line already filled out for them.</p>
      </li>
      <li class="list-group-item">
        <strong>EMAIL link Example:</strong>
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
        <a href="mailto:contact@yoursite.com?subject=<!--Place the auto filled out subject title here-->"><!--Place the text you want to link to 
        your email here--></a>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>