<body id="html-body" class="cms-homepage-blank page-layout-1column cms-index-index page-layout-cms-full-width">
    <div class="page-wrapper">
        <header class="page-header">
            <div class="panel wrapper">
                <div class="panel header">
                    <ul class="header links">
                        <li><a href="https://magentoblank.test/customer/account/">Minha Conta</a></li>
                        <li class="link wishlist" >
                            <a href="https://magentoblank.test/wishlist/">Minha Lista de Desejos<span  class="counter qty"></span></a>
                        </li>
                      
                        <li class="link authorization-link" >
                            <a href="https://magentoblank.test/customer/account/login/referer/aHR0cHM6Ly9tYWdlbnRvYmxhbmsudGVzdC8%2C/">Entrar</a>
                        </li>
                        <li class="item link compare">
                            <a class="action compare no-display" title="Comparar Produtos">Comparar Produtos <span class="counter qty"></span></a>
                        </li>
                      
                        <li class="greet welcome" >
                            <!-- ko if: customer().fullname  -->
                            <span class="logged-in"></span>
                            <!-- /ko -->
                            <!-- ko ifnot: customer().fullname  -->
                            <span class="not-logged-in">Mensagem padrão de boas-vindas! </span>
                            <!-- /ko -->
                        </li>
                       
                        <li><a href="https://magentoblank.test/customer/account/create/" id="idxej3Ln8F">Criar Conta</a>
                        </li>
                    </ul><a class="action skip contentarea" href="#contentarea">
                        <span>
                            Pular para o conteúdo </span>
                    </a>
                </div>
            </div>
            <div class="header content"><span data-action="toggle-nav" class="action nav-toggle"><span>Alternar
                        Nav</span></span>
                <a class="logo" href="index.php" title="">
                    <img src="../images/logo.png" title="" alt="" width="170" />
                </a>

                <?php 
                    $empty = false;
                    if ($empty){
                        $empty_class = 'empty';
                    } else {
                        $empty_class = '';
                    }
                ?>
                <div class="minicart-wrapper">
                    <a class="action showcart" href="#">
                        <span class="text">Meu Carrinho</span>
                        
                        <span class="counter qty <?= $empty_class ?>">
                            <span class="counter-number">1</span>
                            <span class="counter-label">1</span>
                        </span>
                    </a>
                    <?php if($empty) { ?>
                        <?php require_once('../pages/blocos/emptyminicart.php'); ?>
                    <?php } else { ?>
                        <!-- Carrega minicart somente se $empty for verdadeiro-->
                        <?php require_once('../pages/blocos/minicart.php'); ?>
                    <?php } ?>

                    
                </div>
                <div class="block block-search">
                    <div class="block block-title"><strong>Pesquisa</strong></div>
                    <div class="block block-content">
                        <form class="form minisearch" id="search_mini_form"
                            action="https://magentoblank.test/catalogsearch/result/" method="get">
                            <div class="field search">
                                <label class="label" for="search" >
                                    <span>Pesquisa</span>
                                </label>
                                <div class="control">
                                    <input id="search" type="text" name="q" value="" placeholder="Pesquisa em toda loja..." class="input-text" maxlength="128" />
                                    <div id="search_autocomplete" class="search-autocomplete"></div>
                                    <div class="nested">
                                        <a class="action advanced" href="https://magentoblank.test/catalogsearch/advanced/">Pesquisa Avançada </a>
                                    </div>
                                </div>
                            </div>
                            <div class="actions">
                                <button type="submit" title="Pesquisa" class="action search">
                                    <span>Pesquisa</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>