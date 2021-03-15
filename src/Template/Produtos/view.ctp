<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupotributacoes'), ['controller' => 'Grupotributacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupotributaco'), ['controller' => 'Grupotributacoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoria Produtos'), ['controller' => 'CategoriaProdutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria Produto'), ['controller' => 'CategoriaProdutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cfops'), ['controller' => 'Cfops', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cfop'), ['controller' => 'Cfops', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Csts'), ['controller' => 'Csts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cst'), ['controller' => 'Csts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ncms'), ['controller' => 'Ncms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ncm'), ['controller' => 'Ncms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cests'), ['controller' => 'Cests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cest'), ['controller' => 'Cests', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fabricantes'), ['controller' => 'Fabricantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fabricante'), ['controller' => 'Fabricantes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fornecedore'), ['controller' => 'Fornecedores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Unidades'), ['controller' => 'Unidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unidade'), ['controller' => 'Unidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subcategoria Produtos'), ['controller' => 'SubcategoriaProdutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategoria Produto'), ['controller' => 'SubcategoriaProdutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= h($produto->codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($produto->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Barras') ?></th>
            <td><?= h($produto->codigo_barras) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($produto->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($produto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grupotributaco') ?></th>
            <td><?= $produto->has('grupotributaco') ? $this->Html->link($produto->grupotributaco->nome, ['controller' => 'Grupotributacoes', 'action' => 'view', $produto->grupotributaco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria Produto') ?></th>
            <td><?= $produto->has('categoria_produto') ? $this->Html->link($produto->categoria_produto->nome, ['controller' => 'CategoriaProdutos', 'action' => 'view', $produto->categoria_produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cfop') ?></th>
            <td><?= $produto->has('cfop') ? $this->Html->link($produto->cfop->descricao . " | " . $produto->cfop->codigocfop, ['controller' => 'Cfops', 'action' => 'view', $produto->cfop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cst') ?></th>
            <td><?= $produto->has('cst') ? $this->Html->link($produto->cst->descricao . " | " . $produto->cst->codigotributario, ['controller' => 'Csts', 'action' => 'view', $produto->cst->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ncm') ?></th>
            <td><?= $produto->has('ncm') ? $this->Html->link($produto->ncm->descricao . " | " . $produto->ncm->codigo, ['controller' => 'Ncms', 'action' => 'view', $produto->ncm->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cest') ?></th>
            <td><?= $produto->has('cest') ? $this->Html->link($produto->cest->descricao . " | " . $produto->cest->cest, ['controller' => 'Cests', 'action' => 'view', $produto->cest->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fabricante') ?></th>
            <td><?= $produto->has('fabricante') ? $this->Html->link($produto->fabricante->nome, ['controller' => 'Fabricantes', 'action' => 'view', $produto->fabricante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fornecedore') ?></th>
            <td><?= $produto->has('fornecedore') ? $this->Html->link($produto->fornecedore->nome, ['controller' => 'Fornecedores', 'action' => 'view', $produto->fornecedore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= $produto->has('unidade') ? $this->Html->link($produto->unidade->descricao, ['controller' => 'Unidades', 'action' => 'view', $produto->unidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subcategoria Produto') ?></th>
            <td><?= $produto->has('subcategoria_produto') ? $this->Html->link($produto->subcategoria_produto->nome, ['controller' => 'SubcategoriaProdutos', 'action' => 'view', $produto->subcategoria_produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $produto->has('empresa') ? $this->Html->link($produto->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $produto->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pode Desconto') ?></th>
            <td><?= h($produto->pode_desconto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pode Fracionado') ?></th>
            <td><?= h($produto->pode_fracionado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pode Balanca') ?></th>
            <td><?= h($produto->pode_balanca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pode Lote') ?></th>
            <td><?= h($produto->pode_lote) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pode Comissao') ?></th>
            <td><?= h($produto->pode_comissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtd Diasvalidade') ?></th>
            <td><?= h($produto->qtd_diasvalidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Produto') ?></th>
            <td><?= h($produto->tipo_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Origem Produto') ?></th>
            <td><?= h($produto->origem_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ex Tipi') ?></th>
            <td><?= h($produto->ex_tipi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= h($produto->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto') ?></th>
            <td><?= h($produto->foto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto2') ?></th>
            <td><?= h($produto->foto2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto3') ?></th>
            <td><?= h($produto->foto3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Local') ?></th>
            <td><?= h($produto->local) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ref Cruzada1') ?></th>
            <td><?= h($produto->ref_cruzada1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ref Cruzada2') ?></th>
            <td><?= h($produto->ref_cruzada2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ref Cruzada3') ?></th>
            <td><?= h($produto->ref_cruzada3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ref Cruzada4') ?></th>
            <td><?= h($produto->ref_cruzada4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ref Cruzada5') ?></th>
            <td><?= h($produto->ref_cruzada5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ref Cruzada6') ?></th>
            <td><?= h($produto->ref_cruzada6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Ean') ?></th>
            <td><?= h($produto->cod_ean) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Med') ?></th>
            <td><?= h($produto->codigo_med) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Med') ?></th>
            <td><?= h($produto->tipo_med) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tabela Med') ?></th>
            <td><?= h($produto->tabela_med) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Linha Med') ?></th>
            <td><?= h($produto->linha_med) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ref Anvisa Med') ?></th>
            <td><?= h($produto->ref_anvisa_med) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Portaria Med') ?></th>
            <td><?= h($produto->portaria_med) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rms Med') ?></th>
            <td><?= h($produto->rms_med) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edicao Pharmacos') ?></th>
            <td><?= h($produto->edicao_pharmacos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comb Cprodanp') ?></th>
            <td><?= h($produto->comb_cprodanp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comb Descanp') ?></th>
            <td><?= h($produto->comb_descanp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Med Classeterapeutica') ?></th>
            <td><?= h($produto->med_classeterapeutica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Med Unidademedida') ?></th>
            <td><?= h($produto->med_unidademedida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Med Usoprolongado') ?></th>
            <td><?= h($produto->med_usoprolongado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Med Podeatualizar') ?></th>
            <td><?= h($produto->med_podeatualizar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Icmsobs') ?></th>
            <td><?= h($produto->trib_icmsobs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Ipisaida') ?></th>
            <td><?= h($produto->trib_ipisaida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Ipientrada') ?></th>
            <td><?= h($produto->trib_ipientrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Pissaida') ?></th>
            <td><?= h($produto->trib_pissaida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Pisentrada') ?></th>
            <td><?= h($produto->trib_pisentrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Cofinssaida') ?></th>
            <td><?= h($produto->trib_cofinssaida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Cofinsentrada') ?></th>
            <td><?= h($produto->trib_cofinsentrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Genero') ?></th>
            <td><?= h($produto->trib_genero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Compra') ?></th>
            <td><?= $this->Number->format($produto->preco_compra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Custo') ?></th>
            <td><?= $this->Number->format($produto->preco_custo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custo Medio') ?></th>
            <td><?= $this->Number->format($produto->custo_medio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Venda') ?></th>
            <td><?= $this->Number->format($produto->preco_venda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Margem Lucro') ?></th>
            <td><?= $this->Number->format($produto->margem_lucro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desconto Max') ?></th>
            <td><?= $this->Number->format($produto->desconto_max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Venda2') ?></th>
            <td><?= $this->Number->format($produto->preco_venda2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Margem Lucro2') ?></th>
            <td><?= $this->Number->format($produto->margem_lucro2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtd Minimapv2') ?></th>
            <td><?= $this->Number->format($produto->qtd_minimapv2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desconto Max2') ?></th>
            <td><?= $this->Number->format($produto->desconto_max2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Venda3') ?></th>
            <td><?= $this->Number->format($produto->preco_venda3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Margem Lucro3') ?></th>
            <td><?= $this->Number->format($produto->margem_lucro3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtd Minimapv3') ?></th>
            <td><?= $this->Number->format($produto->qtd_minimapv3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desconto Max3') ?></th>
            <td><?= $this->Number->format($produto->desconto_max3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Venda4') ?></th>
            <td><?= $this->Number->format($produto->preco_venda4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Margem Lucro4') ?></th>
            <td><?= $this->Number->format($produto->margem_lucro4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtd Minimapv4') ?></th>
            <td><?= $this->Number->format($produto->qtd_minimapv4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desconto Max4') ?></th>
            <td><?= $this->Number->format($produto->desconto_max4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Antigo') ?></th>
            <td><?= $this->Number->format($produto->preco_antigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Frete') ?></th>
            <td><?= $this->Number->format($produto->valor_frete) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ipi') ?></th>
            <td><?= $this->Number->format($produto->ipi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco Promocao') ?></th>
            <td><?= $this->Number->format($produto->preco_promocao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comissao') ?></th>
            <td><?= $this->Number->format($produto->comissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estoque') ?></th>
            <td><?= $this->Number->format($produto->estoque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estoque Minimo') ?></th>
            <td><?= $this->Number->format($produto->estoque_minimo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estoque Max') ?></th>
            <td><?= $this->Number->format($produto->estoque_max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estoque Tara') ?></th>
            <td><?= $this->Number->format($produto->estoque_tara) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qtd Embalagem') ?></th>
            <td><?= $this->Number->format($produto->qtd_embalagem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso Bruto') ?></th>
            <td><?= $this->Number->format($produto->peso_bruto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso Liquido') ?></th>
            <td><?= $this->Number->format($produto->peso_liquido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Med Precovendafpop') ?></th>
            <td><?= $this->Number->format($produto->med_precovendafpop) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Med Margemfpop') ?></th>
            <td><?= $this->Number->format($produto->med_margemfpop) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Med Apresentacaofpop') ?></th>
            <td><?= $this->Number->format($produto->med_apresentacaofpop) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Issaliqsaida') ?></th>
            <td><?= $this->Number->format($produto->trib_issaliqsaida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Icmsaliqsaida') ?></th>
            <td><?= $this->Number->format($produto->trib_icmsaliqsaida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Icmsaliqredbasecalcsaida') ?></th>
            <td><?= $this->Number->format($produto->trib_icmsaliqredbasecalcsaida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Icmsaliqentrada') ?></th>
            <td><?= $this->Number->format($produto->trib_icmsaliqentrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Icmsaliqredbasecalcentrada') ?></th>
            <td><?= $this->Number->format($produto->trib_icmsaliqredbasecalcentrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Icmsfcpaliq') ?></th>
            <td><?= $this->Number->format($produto->trib_icmsfcpaliq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Ipialiqsaida') ?></th>
            <td><?= $this->Number->format($produto->trib_ipialiqsaida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Ipialiqentrada') ?></th>
            <td><?= $this->Number->format($produto->trib_ipialiqentrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Pisaliqsaida') ?></th>
            <td><?= $this->Number->format($produto->trib_pisaliqsaida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Pisaliqentrada') ?></th>
            <td><?= $this->Number->format($produto->trib_pisaliqentrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Cofinsaliqsaida') ?></th>
            <td><?= $this->Number->format($produto->trib_cofinsaliqsaida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trib Cofinsaliqentrada') ?></th>
            <td><?= $this->Number->format($produto->trib_cofinsaliqentrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Promocao') ?></th>
            <td><?= h($produto->data_promocao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Vigencia Med') ?></th>
            <td><?= h($produto->data_vigencia_med) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($produto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($produto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacoes') ?></h4>
        <?= $this->Text->autoParagraph(h($produto->observacoes)); ?>
    </div>
</div>
