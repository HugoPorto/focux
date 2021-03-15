<?php
$this->layout = false;
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>
      <?= $title.': '.$subtitle ?>
    </title>
    <?= $this->Html->css(['bootstraplogin.min.css']);?>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <?= $this->Html->css(['signin.css']);?>
    <?= $this->element('favicon'); ?>

  </head>
  <body class="text-center">
    <?= $this->Form->create(null, ['class' => 'form-signin']) ?>
    <h3 class="h3 mb-3 font-weight-normal">Login</h3>
    
      <a href="/viewx">
        <strong>GO SITE</strong>
      </a> 
      <br>
      <br>

        <?php            
            echo $this->Form->control('username',
                [
                    'type' => 'text',
                    'class' => 'form-control', 
                    'placeholder' => 'Username',
                    'label' => false,
                    'required' => 'autofocus'
                ]);
            echo $this->Form->control('password', 
                [
                    'type' => 'password', 
                    'id'=>'inputPassword',
                    'class' => 'form-control', 
                    'placeholder' => 'Password',
                    'label' => false,
                    'required' => 'true'
                ]);
        ?>
    <?= $this->Form->button(__('Sign In'), 
        [
            'class' => 'btn btn-lg btn-danger btn-block'
        ]); 
    ?>
    <?= $this->Form->end() ?>

   
    
</body>
</html>
