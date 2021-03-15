<nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">    
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $username;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-left">              
                  <?php echo $this->Html->link(__('Admin Menu'), 
                    ['controller' => 'Users', 'action' => 'mainmenu'],
                    ['class' => 'btn btn-default btn-flat']
                  );?>
                </div>
                <div class="pull-right">                  
                  <?php 
                    if($username){
                        echo $this->Html->link(__('Logout'), 
                        ['controller' => 'users', 'action' => 'logout'],
                        ['class' => 'btn btn-default btn-flat']
                      );
                    }                        
                  ?>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>