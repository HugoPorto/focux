<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand"><?= $subtitle ?></a>
        <ul class="nav navbar-nav">
          <?php if($username):?>
            <li>
              <?= $this->Html->link(__('Append Google Schedules'), ['controller' => 'schedules', 'action' => 'viewByUser', $username]) ?>
            </li>
            <li>
              <?= $this->Html->link(__('Your Playlists'), ['controller' => 'playlistUsers', 'action' => 'viewByUser', $username]) ?>
            </li>
            <li>
              <?= $this->Html->link(__('Your Videos'), ['controller' => 'videosUsers', 'action' => 'viewByUser', $username]) ?>
            </li>
            <?php else:?>
              <li>
                <?= $this->Html->link(__('Append Google Schedules'), ['controller' => 'schedules', 'action' => 'noSchedules']) ?>
              </li>
              <li>
                <?= $this->Html->link(__('Your Playlists'), ['controller' => 'playlistUsers', 'action' => 'noPlaylist']) ?>
              </li>
              <li>
                <?= $this->Html->link(__('Your Videos'), ['controller' => 'videosUsers', 'action' => 'noVideos']) ?>
              </li>
            <?php endif;?>
        </ul>
      </div>
      <?php if($username):?>
      <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="">
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
              <?php echo $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout']);?>               
            <?php endif; ?>
          </li>
        </ul>
      </div>
      <?php else:?>
      <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="">
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
    </div>    
</nav>