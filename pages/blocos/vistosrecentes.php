<div class="admin__data-grid-outer-wrap" data-bind="scope: 'widget_recently_viewed.widget_recently_viewed'">
  <div data-role="spinner" data-component="widget_recently_viewed.widget_recently_viewed.widget_columns"
    class="admin__data-grid-loading-mask" style="display: none;">
    <div class="spinner">
      <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
    </div>
  </div>

  <div class="block widget block-viewed-products-grid">
    <div class="block-title">
      <strong role="heading" aria-level="2" data-bind="text: label">Visualizados recentemente</strong>
    </div>
    <div class="block-content">
      <div data-bind="css: 'products-' + displayMode" class="products-grid">
        <ol class="product-items">

          <li class="product-item" data-repeat-index="0">
            <div class="product-item-info">



              <a class="product-item-photo" data-bind="attr: {href: $row().url}"
                href="https://magentoblank.test/affirm-water-bottle.html">
                <span class="product-image-container" data-bind="style: {width: getWidth($row()) + 'px'}"
                  style="width: 240px;">
                  <span class="product-image-wrapper"
                    data-bind="style: {'padding-bottom': getHeight($row())/getWidth($row()) * 100 + '%'}"
                    style="padding-bottom: 125%;">
                    <img class="product-image-photo" data-bind="attr: {src: getImageUrl($row()),
                                       alt: getLabel($row()), title: getLabel($row())}"
                      src="https://magentoblank.test/media/catalog/product/cache/b08a3bfcd0803e02efc6820fc863c9bb/u/g/ug06-lb-0.jpg"
                      alt="Affirm Water Bottle " title="Affirm Water Bottle ">
                  </span>
                </span>
              </a>




              <div class="product-item-details">


                <strong class="product-item-name">
                  <a data-bind="attr: {href: $row().url}, html: getNameUnsanitizedHtml($col.getLabel($row()))"
                    href="https://magentoblank.test/affirm-water-bottle.html">Affirm Water Bottle </a>
                </strong>








                <div class="price-box">












                  <span
                    data-bind="css: {'old-price': hasSpecialPrice($row()), 'regular-price': !hasSpecialPrice($row())}"
                    class="regular-price">
                    <span class="price-container tax weee" data-bind="css: getAdjustmentCssClasses($row())">



                      <span class="price-wrapper price-including-tax" data-price-amount="" data-price-type=""
                        data-bind="css: priceWrapperCssClasses, attr: priceWrapperAttr, html: getRegularPrice($row())"
                        data-label="Imposto Incl."><span class="price">R$&nbsp;7,00</span></span>



















                    </span>
                  </span>


































                </div>





                <div class="product-item-actions">

                  <div class="actions-primary">




                    <button class="action tocart primary" type="button" data-bind="attr: {'data-mage-init': getDataMageInit($row()),
                      'data-post': getDataPost($row()),
                       title: getLabel()}"
                      data-mage-init="{&quot;redirectUrl&quot;: { &quot;url&quot; : &quot;https://magentoblank.test/checkout/cart/add/uenc/aHR0cHM6Ly9tYWdlbnRvYmxhbmsudGVzdC9qb3VzdC1kdWZmbGUtYmFnLmh0bWw=/product/15/&quot;}}"
                      data-post="{&quot;action&quot;:&quot;https://magentoblank.test/checkout/cart/add/uenc/aHR0cHM6Ly9tYWdlbnRvYmxhbmsudGVzdC9qb3VzdC1kdWZmbGUtYmFnLmh0bWw=/product/15/&quot;,&quot;data&quot;:{&quot;product&quot;:&quot;15&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9tYWdlbnRvYmxhbmsudGVzdC9qb3VzdC1kdWZmbGUtYmFnLmh0bWw=&quot;}}"
                      title="Adicionar Ao Carrinho">
                      <span data-bind="text: getLabel()">Adicionar Ao Carrinho</span>
                    </button>







                  </div>


                  <div class="actions-secondary" data-role="add-to-links">











                  </div>
                </div>


                <div class="product-item-description">


                  <a class="product-item-link" data-bind="attr: {href: $row().url}, text: label"
                    href="https://magentoblank.test/affirm-water-bottle.html">Saiba mais</a>


                </div>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>