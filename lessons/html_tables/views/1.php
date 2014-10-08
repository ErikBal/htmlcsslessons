 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <strong>
        <i>
          What is a <?php $t->cHTML('<TABLE>'); ?> tag?
        </i>
      </strong>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item">
        <p><?php $t->cHTML('<table>'); ?> is an element that is comprised of table rows and columns, much like you would see when working with Excel. Tables are 
        container elements, and their sole purpose is to house other HTML elements and arrange them in a tabular fashion.</p>
      </li>
      <li class="list-group-item">
        <strong><?php $t->cHTML('<TABLE>'); ?> Example:</strong>
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
       <table border="2">
        <tr>
          <td style="background-color: red"><h1>Hello</h1></td>
          <td style="background-color: green"><h2 style="color: white">Cat</td>
          <td style="background-color: blue"><h3><b>Grandma</b></h3></td>
          <td style="background-color: yellow"><ul type="circle">
                                                <li>Frank</li>
                                                <li>Ted</li>
                                                <li>Johnny</li>
                                                <li>Billy</li>
                                               </ul> 
          </td>
          <td style="background-color: purple"><h5><del>Error</del></h5></td>
          <td style="background-color: pink"><h6>C<sub>4</sub>H<sub>8</sub>Cl<sub>2</sub>S</h6></td>
        </tr>
        <tr>
          <td style="background-color: gray"><p>Paragraph</p></td>
          <td style="background-color: brown"><sup>Superscript</sup></td>
          <td style="background-color: magenta"><p align="right">right</p></td>
          <td style="background-color: black"><h6 style="color: white">white</td>
          <td style="background-color: orange"><h4>Halloween</h4></td>
          <td style="background-color: maroon"><h3 style="color:yellow">Redskins</h3></td>
        </tr>
       </table>
     </body>
</html>
'); ?>
</code></pre>
      </li>
    </ul>
  </div>
</div>