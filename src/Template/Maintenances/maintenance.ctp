<?php
$this->layout = false;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php 
    echo $this->Html->css('/bootstrap4/css/bootstrap.min.css', 
        [
            'integrity' => 'anonymous'
        ]
    );
    ?>
  </head>
  <body style="background-color: #dd4b39">
    <main role="main">
        <section class="jumbotron text-center" style="background-color: #dd4b39; border-radius:0px">
            <div class="container" style="color: #fff">
                <h1 class="jumbotron-heading">In Maintenance</h1>   
            </div>
        </section>
    </main>
  </body>
</html>