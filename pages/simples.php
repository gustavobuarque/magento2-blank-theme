<?php 
require_once '../inc/head.php'; 
require_once '../inc/header.php'; 
require_once '../inc/nav.php'; 
?>

<script>
    $(document).ready(function () {
        $("#html-body")
        .removeClass()
        .addClass("catalog-product-view product-joust-duffle-bag page-layout-1column");
        $("#html-body").attr({
          "itemtype":"http://schema.org/Product",
          "itemscope":"itemscope"
        });

    });
</script>


<div class="breadcrumbs">
    <p></p>
    <ul class="items">
        <li class="item home">
            <a href="index.php" title="Ir para a página inicial"> Home </a>
        </li>
        <li class="item category20">
            <a href="mulheres.php" title="Ir para a página mulheres"> Mulheres </a>
        </li>
        <li class="item category20">
            <a href="calcadosgrid.php" title="Ir para a página calçados"> Calçados </a>
        </li>
        <li class="item category21">
            <strong>Produto Simples</strong>
        </li>
    </ul>
</div>

<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
  <div class="page-title-wrapper product">
    <h1 class="page-title">
      <span class="base" data-ui-id="page-title-wrapper" itemprop="name">Produto Simples</span>
    </h1>
  </div>

  <div class="page messages">
    <div data-placeholder="messages"></div>
    <div data-bind="scope: 'messages'"></div>
  </div>
  
  <div class="columns">
    <div class="column main">
      <div class="product-info-main">
        <div class="product-info-price">
          
          <div class="product-info-stock-sku">
            <div class="stock available" title="Disponibilidade">
              <span>Em estoque</span>
            </div>
            <div class="product attribute sku">
              <strong class="type">SKU</strong>
              <div class="value" itemprop="sku">24-MB01</div>
            </div>
          </div>

          <div class="product-reviews-summary" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
            <div class="rating-summary">
              <span class="label"><span>Classificação:</span></span>
              <div class="rating-result" title="50%">
                <span style="width: 50%;">
                  <span>
                    <span itemprop="ratingValue">50 </span>% de <span itemprop="bestRating">100</span>
                  </span>
                </span>
              </div>
            </div>
            
            <div class="reviews-actions">
              <a class="action view" href="#reviews">
                <span itemprop="reviewCount">2</span>&nbsp;
                <span>Avaliações </span>
              </a>
              <a class="action add" href="#review-form">
                Adicionar sua Avaliação </a>
            </div>
          </div>
          <div class="price-box price-final_price">


            <span class="price-container price-final_price tax weee" itemprop="offers" itemscope=""
              itemtype="http://schema.org/Offer">
              <span id="product-price-1" data-price-amount="34" data-price-type="finalPrice"
                class="price-wrapper "><span class="price">R$&nbsp;34,00</span></span>
              <meta itemprop="price" content="34">
              <meta itemprop="priceCurrency" content="BRL">
            </span>

          </div>
        </div>

        <div class="product-add-form">
          <form data-product-sku="24-MB01"
            action="https://magentoblank.test/checkout/cart/add/uenc/aHR0cHM6Ly9tYWdlbnRvYmxhbmsudGVzdC9qb3VzdC1kdWZmbGUtYmFnLmh0bWw%2C/product/1/"
            method="post" id="product_addtocart_form" novalidate="novalidate">
            <input type="hidden" name="product" value="1">
            <input type="hidden" name="selected_configurable_option" value="">
            <input type="hidden" name="related_product" id="related-products-field" value="">
            <input type="hidden" name="item" value="1">
            <input name="form_key" type="hidden" value="o83FCQ0VwhgklBGK">
            <div class="box-tocart">
              <div class="fieldset">
                <div class="field qty">
                  <label class="label" for="qty"><span>Qtd</span></label>
                  <div class="control">
                    <input type="number" name="qty" id="qty" min="0" value="1" title="Qtd" class="input-text qty"
                      data-validate="{&quot;required-number&quot;:true,&quot;validate-item-quantity&quot;:{&quot;minAllowed&quot;:1,&quot;maxAllowed&quot;:10000}}">
                  </div>
                </div>
                <div class="actions">
                  <button type="submit" title="Adicionar ao Carrinho" class="action primary tocart"
                    id="product-addtocart-button">
                    <span>Adicionar ao Carrinho</span>
                  </button>

                  <div id="instant-purchase" data-bind="scope:'instant-purchase'">
                    
                  </div>

                </div>
              </div>
            </div>


          </form>
        </div>


        <div class="product-social-links">
          <div class="product-addto-links" data-role="add-to-links">
            <a href="#" class="action towishlist"
              data-post="{&quot;action&quot;:&quot;https:\/\/magentoblank.test\/wishlist\/index\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:1,&quot;uenc&quot;:&quot;aHR0cHM6Ly9tYWdlbnRvYmxhbmsudGVzdC9qb3VzdC1kdWZmbGUtYmFnLmh0bWw,&quot;}}"
              data-action="add-to-wishlist"><span>Adicionar à lista de desejos</span></a>


            <a href="#"
              data-post="{&quot;action&quot;:&quot;https:\/\/magentoblank.test\/catalog\/product_compare\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:&quot;1&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9tYWdlbnRvYmxhbmsudGVzdC9qb3VzdC1kdWZmbGUtYmFnLmh0bWw,&quot;}}"
              data-role="add-to-links" class="action tocompare"><span>Adicionar para Comparar</span></a>

          </div>
        </div>
      </div>
      <div class="product media"><a id="gallery-prev-area" tabindex="-1"></a>
        <div class="action-skip-wrapper"><a class="action skip gallery-next-area" href="#gallery-next-area">
            <span>
              Pular para o final da Galeria de imagens </span>
          </a>
        </div>

        <div class="gallery-placeholder" data-gallery-role="gallery-placeholder" style="">

          <!--
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
-->
          <div class="fotorama--hidden"></div>
          <style></style>
          <div class="fotorama-item fotorama fotorama1634823191744" data-gallery-role="gallery">
            <div data-gallery-role="fotorama__focusable-start" tabindex="-1"></div>
            <div
              class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows fotorama__wrap--no-controls"
              style="min-width: 0px; max-width: 100%;">
              <div class="fotorama__stage" data-fotorama-stage="fotorama__stage" style="height: 707px; width: 707px;">
                <div class="fotorama__fullscreen-icon" data-gallery-role="fotorama__fullscreen-icon" tabindex="0"
                  aria-label="Exit fullscreen" role="button"></div>
                <div class="fotorama__arr fotorama__arr--prev fotorama__arr--disabled" tabindex="-1" role="button"
                  aria-label="Previous" data-gallery-role="arrow" disabled="disabled" style="display: none;">
                  <div class="fotorama__arr__arr"></div>
                </div>
                <div class="fotorama__stage__shaft" tabindex="0" data-gallery-role="stage-shaft"
                  style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); margin-left: 0px; width: 707px;">
                  <div
                    class="fotorama__stage__frame fotorama__active fotorama_vertical_ratio fotorama__loaded fotorama__loaded--img"
                    aria-hidden="false" data-active="true"
                    href="../images/produto1080x1340.png">
                    <img
                      src="../images/produto700x700.png"
                      alt="Image" class="fotorama__img" aria-hidden="false"></div>
                </div>
                <div class="fotorama__arr fotorama__arr--next fotorama__arr--disabled" tabindex="-1" role="button"
                  aria-label="Next" data-gallery-role="arrow" disabled="disabled" style="display: none;">
                  <div class="fotorama__arr__arr"></div>
                </div>
                <div class="fotorama__video-close"></div>
                <div class="fotorama__zoom-in zoom-in-loaded" data-gallery-role="fotorama__zoom-in" aria-label="Zoom in"
                  role="button" tabindex="0"></div>
                <div class="fotorama__zoom-out zoom-out-loaded" data-gallery-role="fotorama__zoom-out"
                  aria-label="Zoom out" role="button" tabindex="0"></div>
                <div class="fotorama__spinner"></div>
              </div>
              <div class="fotorama__nav-wrap" data-gallery-role="nav-wrap" style="display: none;">
                <div class="fotorama__nav" style="height: 94px;">

                  <div class="fotorama__thumb__arr fotorama__thumb__arr--left fotorama__arr--disabled" role="button"
                    aria-label="Previous" data-gallery-role="arrow" tabindex="-1" disabled="disabled">
                    <div class="fotorama__thumb--icon"></div>
                  </div>
                  <div class="fotorama__nav__shaft fotorama__grab">
                    <div class="fotorama__thumb-border"></div>
                  </div>
                  <div class="fotorama__thumb__arr fotorama__thumb__arr--right" role="button" aria-label="Next"
                    data-gallery-role="arrow" tabindex="-1">
                    <div class="fotorama__thumb--icon"></div>
                  </div>
                </div>
              </div>
            </div>
            <div data-gallery-role="fotorama__focusable-end" tabindex="-1"></div>
          </div>
          <div class="magnifier-preview magnify-hidden" data-gallery-role="magnifier" id="preview"
            style="display: none;"></div>
        </div>



        <div class="action-skip-wrapper"><a class="action skip gallery-prev-area" href="#gallery-prev-area">
            <span>
              Saltar para o início da Galeria de imagens </span>
          </a>
        </div><a id="gallery-next-area" tabindex="-1"></a>
      </div>
      <div class="product info detailed">
        <div class="product data items" role="tablist">
          <div class="data item title active" data-role="collapsible" id="tab-label-description" role="tab"
            data-collapsible="true" aria-controls="description" aria-selected="false" aria-expanded="true" tabindex="0">
            <a class="data switch" tabindex="-1" data-toggle="trigger" href="#description"
              id="tab-label-description-title">
              Detalhes </a>
          </div>
          <div class="data item content" aria-labelledby="tab-label-description" id="description" data-role="content"
            role="tabpanel" aria-hidden="false">

            <div class="product attribute description">
              <div class="value">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ullam, nam nemo officia maiores doloremque est officiis sunt velit, molestias maxime, earum dolorem sint ad mollitia repellat! Distinctio, voluptatem amet.</p>
                <p>
                </p>
                <ul>
                  <li>Lorem ipsum dolor sit amet consectetur.</li>
                  <li>Facilis ullam, nam nemo officia maiores.</li>
                  <li>Distinctio, voluptatem amet.</li>
                  <li>L 290 x A 130 x P 110 cm.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="data item title" data-role="collapsible" id="tab-label-reviews" role="tab" data-collapsible="true"
            aria-controls="reviews" aria-selected="false" aria-expanded="false" tabindex="0">
            <a class="data switch" tabindex="-1" data-toggle="trigger" href="#reviews" id="tab-label-reviews-title">
              Avaliações <span class="counter">2</span> </a>
          </div>
          <div class="data item content" aria-labelledby="tab-label-reviews" id="reviews" data-role="content"
            role="tabpanel" aria-hidden="true" style="display: none;">
            <div id="product-review-container" data-role="product-review"></div>
            <div class="block review-add">
              <div class="block-title"><strong>Escreva sua Própria Avaliação</strong></div>
              <div class="block-content">
                <form action="https://magentoblank.test/review/product/post/id/1/" class="review-form" method="post"
                  id="review-form" data-role="product-review-form" data-bind="scope: 'review-form'"
                  novalidate="novalidate">
                  <input name="form_key" type="hidden" value="o83FCQ0VwhgklBGK">
                  <fieldset class="fieldset review-fieldset" data-hasrequired="* Campos Obrigatórios">
                    <legend class="legend review-legend"><span>Você está avaliando:</span><strong>Joust Duffle
                        Bag</strong></legend><br>
                    <span id="input-message-box"></span>
                    <fieldset class="field required review-field-ratings">
                      <legend class="label"><span>Sua Classificação</span></legend><br>
                      <div class="control">
                        <div class="nested" id="product-review-table">
                          <div class="field choice review-field-rating">
                            <label class="label" id="Rating_rating_label"><span>Rating</span></label>
                            <div class="control review-control-vote">
                              <input type="radio" name="ratings[4]" id="Rating_1" value="16" class="radio"
                                data-validate="{'rating-required':true}"
                                aria-labelledby="Rating_rating_label Rating_1_label" aria-required="true">
                              <label class="rating-1" for="Rating_1" title="1 star" id="Rating_1_label">
                                <span>1 star</span>
                              </label>
                              <input type="radio" name="ratings[4]" id="Rating_2" value="17" class="radio"
                                data-validate="{'rating-required':true}"
                                aria-labelledby="Rating_rating_label Rating_2_label" aria-required="true">
                              <label class="rating-2" for="Rating_2" title="2 stars" id="Rating_2_label">
                                <span>2 stars</span>
                              </label>
                              <input type="radio" name="ratings[4]" id="Rating_3" value="18" class="radio"
                                data-validate="{'rating-required':true}"
                                aria-labelledby="Rating_rating_label Rating_3_label" aria-required="true">
                              <label class="rating-3" for="Rating_3" title="3 stars" id="Rating_3_label">
                                <span>3 stars</span>
                              </label>
                              <input type="radio" name="ratings[4]" id="Rating_4" value="19" class="radio"
                                data-validate="{'rating-required':true}"
                                aria-labelledby="Rating_rating_label Rating_4_label" aria-required="true">
                              <label class="rating-4" for="Rating_4" title="4 stars" id="Rating_4_label">
                                <span>4 stars</span>
                              </label>
                              <input type="radio" name="ratings[4]" id="Rating_5" value="20" class="radio"
                                data-validate="{'rating-required':true}"
                                aria-labelledby="Rating_rating_label Rating_5_label" aria-required="true">
                              <label class="rating-5" for="Rating_5" title="5 stars" id="Rating_5_label">
                                <span>5 stars</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <input type="hidden" name="validate_rating" class="validate-rating" value=""
                          aria-required="true">
                      </div>
                    </fieldset>
                    <div class="field review-field-nickname required">
                      <label for="nickname_field" class="label"><span>Apelido</span></label>
                      <div class="control">
                        <input type="text" name="nickname" id="nickname_field" class="input-text"
                          data-validate="{required:true}" data-bind="value: nickname()" aria-required="true">
                      </div>
                    </div>
                    <div class="field review-field-summary required">
                      <label for="summary_field" class="label"><span>Resumo</span></label>
                      <div class="control">
                        <input type="text" name="title" id="summary_field" class="input-text"
                          data-validate="{required:true}" data-bind="value: review().title" aria-required="true">
                      </div>
                    </div>
                    <div class="field review-field-text required">
                      <label for="review_field" class="label"><span>Avaliação</span></label>
                      <div class="control">
                        <textarea name="detail" id="review_field" cols="5" rows="3" data-validate="{required:true}"
                          data-bind="value: review().detail" aria-required="true"></textarea>
                      </div>
                    </div>
                  </fieldset>
                  <div class="actions-toolbar review-form-actions">
                    <div class="primary actions-primary">
                      <button type="submit" class="action submit primary"><span>Enviar Avaliação</span></button>
                    </div>
                  </div>
                </form>

              </div>
            </div>


          </div>
        </div>
      </div>

      <?php require_once 'blocos/vistosrecentes.php'; ?>

      <?php require_once 'blocos/upsell.php'; ?>

    </div>
  </div>
</main>

<?php require_once '../inc/footer.php'; ?>