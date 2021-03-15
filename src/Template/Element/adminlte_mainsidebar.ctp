<aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li>
          <?=$this->Html->link('<i class="fa fa-link"></i><span>Novo</span>', ['action' => 'add'], ['escape' => false])?>
        </li>
        <li>
          <?=$this->Html->link('<i class="fa fa-link"></i><span>Listar</span>', ['action' => 'index'], ['escape' => false])?>
        </li>
      </ul>
    </section>
  </aside>