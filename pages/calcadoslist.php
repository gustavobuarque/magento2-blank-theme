
<?php 
$is_list = true;

require_once '../inc/head.php'; 
require_once '../inc/header.php'; 
require_once '../inc/nav.php'; 
?>


<script>
    $(document).ready(function () {
        $("#html-body")
        .removeClass()
        .addClass("page-with-filter page-products categorypath-women-tops-women category-tops-women catalog-category-view page-layout-2columns-left");

        $(".category-tops-women li.nav-2").addClass("active");
        $(".category-tops-women li.nav-2-1").addClass("active");
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
        <li class="item category21">
            <strong>
                Calçados
            </strong>
        </li>
    </ul>
</div>
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title" id="page-title-heading">
            <span class="base" data-ui-id="page-title-wrapper">Calçados</span> </h1>
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

            <div class="toolbar toolbar-products">
                <div class="modes">
                <strong class="modes-label" id="modes-label">Ver como</strong>
                <a title="Grade" class="modes-mode active mode-grid" data-value="grid" href="calcadosgrid.php">
                    <span>Grade</span>
                </a>
                <strong class="modes-mode mode-list" title="Lista" data-value="list">
                    <span>Lista</span>
                </strong>
                </div>
                <p class="toolbar-amount" id="toolbar-amount">
                Itens <span class="toolbar-number">1</span>-<span class="toolbar-number">12</span> de <span
                    class="toolbar-number">50</span> 
                </p>
                <div class="toolbar-sorter sorter">
                <label class="sorter-label" for="sorter">Ordenar por</label>
                <select id="sorter" data-role="sorter" class="sorter-options">
                    <option value="position" selected="selected">
                    Posição </option>
                    <option value="name">
                    Nome do produto </option>
                    <option value="price">
                    Preço </option>
                </select>
                <a title="Definir Direção Decrescente" href="produto.php" class="action sorter-action sort-asc"
                    data-role="direction-switcher" data-value="desc">
                    <span>Definir Direção Decrescente</span>
                </a>
                </div>
            </div>


            <?php 
           
            if($is_list){
                require_once '../pages/blocos/listprodutos.php'; 
            } else {
                require_once '../pages/blocos/gridprodutos.php';
            }
            
            ?>

            <div class="toolbar toolbar-products">
                <div class="pages">
                    <strong class="label pages-label" id="paging-label">Página</strong>
                    <ul class="items pages-items" aria-labelledby="paging-label">

                        <li class="item current">
                            <strong class="page">
                                <span class="label">Você esta lendo a página</span>
                                <span>1</span>
                            </strong>
                        </li>
                        <li class="item">
                            <a href="produto.php" class="page">
                                <span class="label">Página</span>
                                <span>2</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="produto.php" class="page">
                                <span class="label">Página</span>
                                <span>3</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="produto.php" class="page">
                                <span class="label">Página</span>
                                <span>4</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="produto.php" class="page">
                                <span class="label">Página</span>
                                <span>5</span>
                            </a>
                        </li>



                        <li class="item pages-item-next">
                            <a class="action  next" href="produto.php" title="Próximo">
                                <span class="label">Página</span>
                                <span>Próximo</span>
                            </a>
                        </li>
                    </ul>
                </div>



                <div class="field limiter">
                    <label class="label" for="limiter">
                        <span>Mostrar</span>
                    </label>
                    <div class="control">
                        <select id="limiter" data-role="limiter" class="limiter-options">
                            <option value="12" selected="selected">
                                12 </option>
                            <option value="24">
                                24 </option>
                            <option value="36">
                                36 </option>
                        </select>
                    </div>
                    <span class="limiter-text">por página</span>
                </div>
            </div>
        </div>

        <?php require_once '../pages/blocos/sidebar2.php'; ?>

        <div class="sidebar sidebar-additional">
           
            <?php require_once '../pages/blocos/sbcomparar.php'; ?>

            <?php require_once '../pages/blocos/sblistadesejos.php'; ?>
            
        </div>

    </div>
</main>

<?php require_once '../inc/footer.php'; ?>