<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">      
      <?php //echo $this->element('adminlte_sidebar_user'); ?>
      
      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li>
          <!-- <a href="/add"><i class="fa fa-link"></i> <span>Link</span></a>    -->
          <?= $this->Html->link('<i class="fa fa-link"></i><span>Novo</span>', ['action' => 'add'], ['escape' => false]) ?>
        </li>
        <li>
          <?= $this->Html->link('<i class="fa fa-link"></i><span>Listar</span>', ['action' => 'index'], ['escape' => false]) ?>          
        </li>
      </ul>
    </section>
  </aside>