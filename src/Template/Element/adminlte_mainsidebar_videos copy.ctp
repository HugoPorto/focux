<aside class="main-sidebar">
    <section class="sidebar">
      <!--
      <form action="/xporn/videos/view-by-category" method="get" class="sidebar-form">
        <div class="input-group">
          <select class="form-control js-example-basic-single" name="idCategory">
             <option value='0'>Categorys</option>
          </select>
          <span class="input-group-btn">
            <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      -->

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li>
          <?=$this->Html->link('<i class="fa fa-home" style="color: #dd4b39"></i><span>Start</span>', ['controller' => 'videos', 'action' => 'index'], ['escape' => false])?>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i> <span>Category Videos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php foreach ($categoryVideos as $categoryVideo): ?>
              <li>
                <?=$this->Html->link('<i class="fa fa-link"></i><span style="white-space: normal">' . $categoryVideo->category . '</span>', ['controller' => 'Videos', 'action' => 'viewByCategory', $categoryVideo->id], ['escape' => false])?>
              </li>
            <?php endforeach;?>
          </ul>
        </li>
        <li>
          <?=$this->Html->link('<i class="fa fa-money"></i><span>Playlist Prices</span>', ['controller' => 'playlistPrices', 'action' => 'viewByUser', $username], ['escape' => false])?>
        </li>
        <li>
          <?=$this->Html->link('<i class="fa fa-video-camera"></i><span>Purchased Playlists</span>', ['controller' => 'purchasedPlaylists', 'action' => 'viewByUser', $username], ['escape' => false])?>
        </li>
        <li>
          <?=$this->Html->link('<i class="fa fa-money"></i><span>Received Payments</span>', ['controller' => 'PatternPayments', 'action' => 'viewReceivedPay', $username], ['escape' => false])?>
        </li>
        <li>
          <?=$this->Html->link('<i class="fa fa-money"></i><span>Send Payments</span>', ['controller' => 'PatternPayments', 'action' => 'viewSendPay', $username], ['escape' => false])?>
        </li>
        <li>
          <?=$this->Html->link('<i class="fa fa-video-camera"></i><span>All</span>', ['controller' => 'videos', 'action' => 'index'], ['escape' => false])?>
        </li>
        <li>
          <?=$this->Html->link('<i class="fa fa-th-list"></i><span>All Categorys</span>', ['controller' => 'videos', 'action' => 'categorys'], ['escape' => false])?>
        </li>
        <!-- <li class="header">Politics</li> -->
        <li>
          <?=$this->Html->link('<i class="fa  fa-cubes"></i><span>Courses</span>', ['controller' => 'courses', 'action' => 'index'], ['escape' => false]) ?>
        </li>
      </ul>
    </section>
  </aside>