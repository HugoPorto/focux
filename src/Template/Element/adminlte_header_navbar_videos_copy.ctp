<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand"><?= $subtitle ?></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>''
        </button>
      </div>

      <!--       
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
          </div>
        </form>
      </div> -->

      <?php if($username):?>
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
          <?php if($role == 'admin' || $role == 'root'):?>                            
            <?php echo $this->Html->link(__('Admin Menu'), 
              ['controller' => 'Users', 'action' => 'mainmenu'],
              ['target' => '_blank']);
            ?>
            <?php elseif($role == 'common'):?>
            <?php echo $this->Html->link(__('Profile'), 
                ['controller' => 'Users', 'action' => 'profile',  $username],
                ['target' => '_blank']);
            ?>                      
          <?php endif;?> 
          </li>
          <li>
            <?php if($username):?>
              <?php echo $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'btn btn-default btn-flat']);?>               
            <?php endif; ?>
          </li>
        </ul>
      </div>
      <?php else:?>
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <?php echo $this->Html->link(__('Register'), 
              ['controller' => 'Users', 'action' => 'register'],
              ['target' => '_blank']);
            ?>  
          </li>
          <li>
            <?php echo $this->Html->link(__('Login'), 
              ['controller' => 'Users', 'action' => 'login'],
              ['target' => '_blank']);
            ?> 
          </li>
        </ul>
      </div>
      <?php endif; ?>

      <?php if($username):?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">    
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span><?php echo $username;?></span>
            </a>            
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-left">
                  <?php if($role == 'admin' || $role == 'root'):?>                            
                    <?php echo $this->Html->link(__('Admin Menu'), 
                      ['controller' => 'Users', 'action' => 'mainmenu'],
                      ['class' => 'btn btn-default btn-flat', 'target' => '_blank']);
                    ?>
                  <?php elseif($role == 'common'):?>
                    <?php echo $this->Html->link(__('Profile'), 
                        ['controller' => 'Users', 'action' => 'profile',  $username],
                        ['class' => 'btn btn-default btn-flat', 'target' => '_blank']);
                    ?>                      
                  <?php endif;?>            
                </div>
                <div class="pull-right">                  
                  <?php if($username):?>
                    <?php echo $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'btn btn-default btn-flat']);?>               
                  <?php endif; ?>
                </div>
              </li>
            </ul>
          </li>
          <?php
            //<li>
            //<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i> Categorias</a>
            //</li>
          ?>
        </ul>
      </div>
    <?php else:?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">    
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Join</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-left">                        
                    <?php echo $this->Html->link(__('Register'), 
                      ['controller' => 'Users', 'action' => 'register'],
                      ['class' => 'btn btn-default btn-flat', 'target' => '_blank']);
                    ?>   
                </div>
                <div class="pull-right">                  
                  <?php echo $this->Html->link(__('Login'), 
                      ['controller' => 'Users', 'action' => 'login'],
                      ['class' => 'btn btn-default btn-flat', 'target' => '_blank']);
                    ?>   
                </div>
              </li>
            </ul>
          </li>
          <?php
            //<li>
            //<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i> Categorias</a>
            //</li>
          ?>
        </ul>
      </div>
    <?php endif; ?>
    </div>    
</nav>