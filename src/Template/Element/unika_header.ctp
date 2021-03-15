<header id="header" class="header-main">
  <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="/viewx/pages">Focux</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <?php foreach($menus as $menu):?>
            <?php if($menu->active == true):?>
              <li><a class="page-scroll" href="<?php echo $menu->link;?>"><?php echo $menu->menu;?></a></li>
            <?php endif;?>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
  </nav>
</header>