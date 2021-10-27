
<?php require_once '../inc/head.php'; ?>
<?php require_once '../inc/header.php'; ?>
<?php require_once '../inc/nav.php'; ?>

<script>
    $(document).ready(function () {
        $("#html-body")
        .removeClass()
        .addClass("page-products categorypath-women category-women catalog-category-view page-layout-2columns-left");

        $(".catalog-category-view li.nav-2").addClass("active");
    });
</script>

<div class="breadcrumbs">
    <p></p>
    <ul class="items">
        <li class="item home">
            <a href="index.php" title="Ir para a página inicial"> Home </a>
        </li>
        <li class="item category20">
            <strong>
                Mulheres
            </strong>
        </li>
    </ul>
</div>
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title" id="page-title-heading">
            <span class="base" data-ui-id="page-title-wrapper">Mulheres</span> </h1>
    </div>

    <div class="page messages">
        <div data-placeholder="messages"></div>
        <div data-bind="scope: 'messages'">
            <div aria-atomic="true" role="alert" class="messages">
                <div>
                    <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
                </div>
            </div>
            
            <div aria-atomic="true" role="alert" class="messages">
                <div>
                    <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="category-view">
        <div class="category-cms"></div>
    </div>
    <div class="columns">
       <div class="column main">
           <div class="widget block block-static-block">
               <div class="blocks-promo">
                   <a href="#" class="block-promo womens-main">
                       <img src="../images/1080x460.png" alt="Imagem 1080 x 460 pixels">
                   </a>
                   <div class="block-promo-wrapper block-promo-2columns">
                       <a href="#" class="block-promo womens-t-shirts">
                           <img src="../images/505x372.png" alt="Imagem 505 x 372 pixels">
                       </a>
                       <a href="#" class="block-promo womens-pants">
                           <img src="../images/505x372.png" alt="Imagem 505 x 372 pixels">
                       </a>
                   </div>
                   <a href="#" class="block-promo womens-erin">
                       <img src="../images/1010x200.png" alt="Imagem 1010 x 200 pixels">
                   </a>
                   <div class="block-promo-wrapper block-promo-3columns">
                       <a href="#" class="block-promo">
                           <img src="../images/336x210.png" alt="Imagem 336 x 210 pixels">
                       </a>
                       <a href="#" class="block-promo">
                           <img src="../images/336x210.png" alt="Imagem 336 x 210 pixels">
                       </a>
                       <a href="#" class="block-promo">
                           <img src="../images/336x210.png" alt="Imagem 336 x 210 pixels">
                       </a>
                   </div>
               </div>
               
               <?php require_once '../pages/blocos/maisvendidos.php'; ?>

           </div>

       </div>

        <?php require_once '../pages/blocos/sidebar.php'; ?>

        
        <div class="sidebar sidebar-additional">
           
            <?php require_once '../pages/blocos/sbcomparar.php'; ?>

            <?php require_once '../pages/blocos/sblistadesejos.php'; ?>
            
        </div>
    </div>
</main>

<?php require_once '../inc/footer.php'; ?>