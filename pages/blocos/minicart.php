<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front mage-dropdown-dialog">
  <div class="block block-minicart ui-dialog-content ui-widget-content" data-role="dropdownDialog" id="ui-id-28"
    style="display: block;">
    <div id="minicart-content-wrapper">

      <div class="block-title">
        <strong>
          <span class="text">Meu Carrinho</span>
          <span class="qty" data-bind="css: { empty: !!getCartParam('summary_count') == false },
                       attr: { title: $t('Items in Cart') }, text: getCartParam('summary_count')"
            title="Itens no Carrinho">1</span>
        </strong>
      </div>

      <div class="block-content">
        <button type="button" id="btn-minicart-close" class="action close" title="Fechar">
          <span>Fechar</span>
        </button>


        <div class="items-total">
          <span class="count">1</span>
          <span>Item no Carrinho</span>
        </div>

        <div class="subtotal">
          <span class="label">
            <span>Subtotal do Carrinho</span>
          </span>

          <div class="amount price-container">
            <span class="price-wrapper"><span class="price">R$ 75,00</span></span>
          </div>
        </div>

        <div class="actions">
          <div class="primary">
            <button id="top-cart-btn-checkout" type="button" class="action primary checkout" title="Avançar para o Checkout">Avançar para o Checkout</button>
            <div></div>
          </div>
        </div>

        <strong class="subtitle">Recently added item(s)</strong>
        <div data-action="scroll" class="minicart-items-wrapper" style="height: 135px;">
          <ol id="mini-cart" class="minicart-items">
            <li class="item product product-item odd last" data-role="product-item" data-collapsible="true">
              <div class="product">
                
                <a tabindex="-1" class="product-item-photo" href="https://magentoblank.test/stellar-solar-jacket.html"
                  title="Stellar Solar Jacket">
                  <span class="product-image-container" style="width: 78px;">
                    <span class="product-image-wrapper" style="padding-bottom: 100%;">
                      <img class="product-image-photo" src="../images/minicart-product-156x156.png" alt="Stellar Solar Jacket" style="width: auto; height: auto;">
                    </span>
                  </span>
                </a>

                <div class="product-item-details">
                  <strong class="product-item-name">
                    <a href="https://magentoblank.test/stellar-solar-jacket.html">Stellar Solar Jacket</a>
                  </strong>

                  <div class="product options">
                    
                    <span class="toggle">
                      <span>Visualizar Detalhes</span>
                    </span>

                    <div class="content" role="tabpanel" aria-hidden="true" style="display: none;">
                      <strong class="subtitle">
                        <span>Detalhes das Opções</span></strong>
                      <dl class="product options list">
                        <dt class="label">Size</dt>
                        <dd class="values">
                          <span>M</span>
                        </dd>
                        <dt class="label">Color</dt>
                        <dd class="values">
                          <span>Red</span>
                        </dd>
                      </dl>
                    </div>

                  </div>

                  <div class="product-item-pricing">

                    <div class="price-container">
                      <span class="price-wrapper">
                        <span class="price-excluding-tax" data-label="Excl. Tax">
                          <span class="minicart-price">
                            <span class="price">R$75,00</span> 
                          </span>
                        </span>
                      </span>
                    </div>

                    <div class="details-qty qty">
                      <label class="label" for="cart-item-9-qty">Qtd</label>
                      <input type="number" size="4" class="item-qty cart-item-qty" id="cart-item-9-qty" value="1">
                      <button class="update-cart-item" style="display: none" id="update-cart-item-9" title="Atualizar">
                        <span>Atualizar</span>
                      </button>
                    </div>
                  </div>

                  <div class="product actions">

                    <div class="primary">
                      <a class="action edit" href="https://magentoblank.test/checkout/cart/configure/id/9/product_id/1226/" title="Editar item">
                        <span>Editar</span>
                      </a>
                    </div>

                    <div class="secondary">
                      <a href="#" class="action delete" data-cart-item="9" title="Remover item">
                        <span>Remover</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ol>
        </div>

        <div class="actions">
          <div class="secondary">
            <a class="action viewcart" href="https://magentoblank.test/checkout/cart/">
              <span>Ver e editar carrinho</span>
            </a>
          </div>
        </div>

        <div id="minicart-widgets" class="minicart-widgets"></div>

      </div>

    </div>
  </div>
</div>