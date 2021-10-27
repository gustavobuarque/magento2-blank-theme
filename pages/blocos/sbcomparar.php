<div class="block block-compare" data-bind="scope: 'compareProducts'">
  <div class="block-title">
    <strong id="block-compare-heading" role="heading" aria-level="2">Comparar Produtos</strong>
    <span class="counter qty no-display"></span>
  </div>

  <div class="block-content no-display">
    <ol id="compare-items" class="product-items product-items-names">
      <li class="product-item">
        <strong class="product-item-name">
          <a class="product-item-link"></a>
        </strong>
        <a href="#" title="Remover este Item" class="action delete">
          <span>Remover este Item</span>
        </a>
      </li>
    </ol>
    <div class="actions-toolbar">
      <div class="primary">
        <a class="action compare primary"><span>Comparar</span></a>
      </div>
      <div class="secondary">
        <a id="compare-clear-all" href="#" class="action clear">
          <span>Limpar Tudo</span>
        </a>
      </div>
    </div>
  </div>


  <div class="empty">Você não tem itens para comparar.</div>

</div>