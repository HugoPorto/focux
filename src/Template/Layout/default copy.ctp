<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title; ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->element('favicon'); ?>
    <?= $this->element('datatables_package');?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation" style="background-color: #dd4b39">
        <ul class="title-area large-3 medium-4 columns" style="background-color: #dd4b39">
            <li class="name">
                <h1 style="color: white">ADMIN</h1>
                <?php //<h1><a href="">ADMIN</a></h1> ?>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
            <li><?php echo $this->Html->link(__('Admin Menu'), ['controller' => 'Users', 'action' => 'mainmenu'], ['style' => 'background-color: #000']);?></li>

            <li>
            <?php 
                if($username){
                    echo $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout'], ['style' => 'background-color: #000']);
                }                        
                ?>
            </li>
            </ul>
        </div>
    </nav>  
    <?= $this->Flash->render() ?>  
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    <?= $this->element('datatables_script_run'); ?>
</body>
</html>
