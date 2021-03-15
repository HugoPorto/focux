<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupotributacoes'), ['controller' => 'Grupotributacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupotributaco'), ['controller' => 'Grupotributacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categoria Produtos'), ['controller' => 'CategoriaProdutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria Produto'), ['controller' => 'CategoriaProdutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cfops'), ['controller' => 'Cfops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cfop'), ['controller' => 'Cfops', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Csts'), ['controller' => 'Csts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cst'), ['controller' => 'Csts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ncms'), ['controller' => 'Ncms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ncm'), ['controller' => 'Ncms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cests'), ['controller' => 'Cests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cest'), ['controller' => 'Cests', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fabricantes'), ['controller' => 'Fabricantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fabricante'), ['controller' => 'Fabricantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fornecedore'), ['controller' => 'Fornecedores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Unidades'), ['controller' => 'Unidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unidade'), ['controller' => 'Unidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subcategoria Produtos'), ['controller' => 'SubcategoriaProdutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subcategoria Produto'), ['controller' => 'SubcategoriaProdutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produtos form large-9 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Edit Produto') ?></legend>
        <?php
            echo $this->Form->control('codigo');
            echo $this->Form->control('referencia');
            echo $this->Form->control('codigo_barras');
            echo $this->Form->control('nome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('grupotributacoes_id', ['options' => $grupotributacoes]);
            echo $this->Form->control('categoria_produtos_id', ['options' => $categoriaProdutos]);
            echo $this->Form->control('cfops_id', ['options' => $cfops]);
            echo $this->Form->control('csts_id', ['options' => $csts]);
            echo $this->Form->control('ncms_id', ['options' => $ncms]);
            echo $this->Form->control('cests_id', ['options' => $cests]);
            echo $this->Form->control('fabricantes_id', ['options' => $fabricantes]);
            echo $this->Form->control('fornecedores_id', ['options' => $fornecedores]);
            echo $this->Form->control('unidades_id', ['options' => $unidades]);
            echo $this->Form->control('subcategoria_produtos_id', ['options' => $subcategoriaProdutos]);
            echo $this->Form->control('empresas_id', ['options' => $empresas]);
            echo $this->Form->control('pode_desconto');
            echo $this->Form->control('pode_fracionado');
            echo $this->Form->control('pode_balanca');
            echo $this->Form->control('pode_lote');
            echo $this->Form->control('pode_comissao');
            echo $this->Form->control('preco_compra');
            echo $this->Form->control('preco_custo');
            echo $this->Form->control('custo_medio');
            echo $this->Form->control('preco_venda');
            echo $this->Form->control('margem_lucro');
            echo $this->Form->control('desconto_max');
            echo $this->Form->control('preco_venda2');
            echo $this->Form->control('margem_lucro2');
            echo $this->Form->control('qtd_minimapv2');
            echo $this->Form->control('desconto_max2');
            echo $this->Form->control('preco_venda3');
            echo $this->Form->control('margem_lucro3');
            echo $this->Form->control('qtd_minimapv3');
            echo $this->Form->control('desconto_max3');
            echo $this->Form->control('preco_venda4');
            echo $this->Form->control('margem_lucro4');
            echo $this->Form->control('qtd_minimapv4');
            echo $this->Form->control('desconto_max4');
            echo $this->Form->control('preco_antigo');
            echo $this->Form->control('valor_frete');
            echo $this->Form->control('ipi');
            echo $this->Form->control('preco_promocao');
            echo $this->Form->control('data_promocao', ['empty' => true]);
            echo $this->Form->control('comissao');
            echo $this->Form->control('estoque');
            echo $this->Form->control('estoque_minimo');
            echo $this->Form->control('estoque_max');
            echo $this->Form->control('estoque_tara');
            echo $this->Form->control('qtd_embalagem');
            echo $this->Form->control('qtd_diasvalidade');
            echo $this->Form->control('peso_bruto');
            echo $this->Form->control('peso_liquido');
            echo $this->Form->control('tipo_produto');
            echo $this->Form->control('origem_produto');
            echo $this->Form->control('ex_tipi');
            echo $this->Form->control('ativo');
            echo $this->Form->control('observacoes');
            echo $this->Form->control('foto');
            echo $this->Form->control('foto2');
            echo $this->Form->control('foto3');
            echo $this->Form->control('local');
            echo $this->Form->control('ref_cruzada1');
            echo $this->Form->control('ref_cruzada2');
            echo $this->Form->control('ref_cruzada3');
            echo $this->Form->control('ref_cruzada4');
            echo $this->Form->control('ref_cruzada5');
            echo $this->Form->control('ref_cruzada6');
            echo $this->Form->control('cod_ean');
            echo $this->Form->control('codigo_med');
            echo $this->Form->control('tipo_med');
            echo $this->Form->control('tabela_med');
            echo $this->Form->control('linha_med');
            echo $this->Form->control('ref_anvisa_med');
            echo $this->Form->control('portaria_med');
            echo $this->Form->control('rms_med');
            echo $this->Form->control('data_vigencia_med', ['empty' => true]);
            echo $this->Form->control('edicao_pharmacos');
            echo $this->Form->control('comb_cprodanp');
            echo $this->Form->control('comb_descanp');
            echo $this->Form->control('med_classeterapeutica');
            echo $this->Form->control('med_unidademedida');
            echo $this->Form->control('med_usoprolongado');
            echo $this->Form->control('med_podeatualizar');
            echo $this->Form->control('med_precovendafpop');
            echo $this->Form->control('med_margemfpop');
            echo $this->Form->control('med_apresentacaofpop');
            echo $this->Form->control('trib_issaliqsaida');
            echo $this->Form->control('trib_icmsaliqsaida');
            echo $this->Form->control('trib_icmsaliqredbasecalcsaida');
            echo $this->Form->control('trib_icmsobs');
            echo $this->Form->control('trib_icmsaliqentrada');
            echo $this->Form->control('trib_icmsaliqredbasecalcentrada');
            echo $this->Form->control('trib_icmsfcpaliq');
            echo $this->Form->control('trib_ipisaida');
            echo $this->Form->control('trib_ipialiqsaida');
            echo $this->Form->control('trib_ipientrada');
            echo $this->Form->control('trib_ipialiqentrada');
            echo $this->Form->control('trib_pissaida');
            echo $this->Form->control('trib_pisaliqsaida');
            echo $this->Form->control('trib_pisentrada');
            echo $this->Form->control('trib_pisaliqentrada');
            echo $this->Form->control('trib_cofinssaida');
            echo $this->Form->control('trib_cofinsaliqsaida');
            echo $this->Form->control('trib_cofinsentrada');
            echo $this->Form->control('trib_cofinsaliqentrada');
            echo $this->Form->control('trib_genero');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
