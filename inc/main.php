
        <main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
            <div class="page-title-wrapper">
                <h1 class="page-title">
                    <span class="base" data-ui-id="page-title-wrapper">Página inicial</span> </h1>
            </div>
            <div class="page messages">
                <div data-placeholder="messages"></div>
                <div data-bind="scope: 'messages'">
                    <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
                    <div aria-atomic="true" role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }"
                        class="messages">
                        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
                            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
                        </div>
                    </div>
                    <!-- /ko -->

                    <!-- ko if: messages().messages && messages().messages.length > 0 -->
                    <div aria-atomic="true" role="alert" class="messages" data-bind="foreach: {
        data: messages().messages, as: 'message'
    }">
                        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
                            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
                        </div>
                    </div>
                    <!-- /ko -->
                </div>
                <script type="text/x-magento-init">
                    {
        "*": {
            "Magento_Ui/js/core/app": {
                "components": {
                        "messages": {
                            "component": "Magento_Theme/js/view/messages"
                        }
                    }
                }
            }
    }
</script>
            </div>
            <div class="columns">
                <div class="column main"><input name="form_key" type="hidden" value="SCXfbGAMXRSq0ugX" />
                    <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                        <script>
                            window.authenticationPopup = {
                                "autocomplete": "off",
                                "customerRegisterUrl": "https:\/\/magentoblank.test\/customer\/account\/create\/",
                                "customerForgotPasswordUrl": "https:\/\/magentoblank.test\/customer\/account\/forgotpassword\/",
                                "baseUrl": "https:\/\/magentoblank.test\/"
                            }
                        </script> <!-- ko template: getTemplate() -->
                        <!-- /ko -->
                        <script type="text/x-magento-init">
                            {
            "#authenticationPopup": {
                "Magento_Ui/js/core/app": {"components":{"authenticationPopup":{"component":"Magento_Customer\/js\/view\/authentication-popup","children":{"messages":{"component":"Magento_Ui\/js\/view\/messages","displayArea":"messages"},"captcha":{"component":"Magento_Captcha\/js\/view\/checkout\/loginCaptcha","displayArea":"additional-login-form-fields","formId":"user_login","configSource":"checkout"},"amazon-button":{"component":"Amazon_Login\/js\/view\/login-button-wrapper","sortOrder":"0","displayArea":"additional-login-form-fields","config":{"tooltip":"Securely login into our website using your existing Amazon details.","componentDisabled":true}}}}}}            },
            "*": {
                "Magento_Ui/js/block-loader": "https\u003A\u002F\u002Fmagentoblank.test\u002Fstatic\u002Fversion1633694825\u002Ffrontend\u002FMagento\u002Fblank\u002Fpt_BR\u002Fimages\u002Floader\u002D1.gif"
            }
        }
    </script>
                    </div>
                    <script type="text/x-magento-init">
                        {
        "*": {
            "Magento_Customer/js/section-config": {
                "sections": {"stores\/store\/switch":["*"],"stores\/store\/switchrequest":["*"],"directory\/currency\/switch":["*"],"*":["messages"],"customer\/account\/logout":["*","recently_viewed_product","recently_compared_product","persistent"],"customer\/account\/loginpost":["*"],"customer\/account\/createpost":["*"],"customer\/account\/editpost":["*"],"customer\/ajax\/login":["checkout-data","cart","captcha"],"catalog\/product_compare\/add":["compare-products"],"catalog\/product_compare\/remove":["compare-products"],"catalog\/product_compare\/clear":["compare-products"],"sales\/guest\/reorder":["cart"],"sales\/order\/reorder":["cart"],"checkout\/cart\/add":["cart","directory-data"],"checkout\/cart\/delete":["cart"],"checkout\/cart\/updatepost":["cart"],"checkout\/cart\/updateitemoptions":["cart"],"checkout\/cart\/couponpost":["cart"],"checkout\/cart\/estimatepost":["cart"],"checkout\/cart\/estimateupdatepost":["cart"],"checkout\/onepage\/saveorder":["cart","checkout-data","last-ordered-items"],"checkout\/sidebar\/removeitem":["cart"],"checkout\/sidebar\/updateitemqty":["cart"],"rest\/*\/v1\/carts\/*\/payment-information":["cart","last-ordered-items","instant-purchase","captcha"],"rest\/*\/v1\/guest-carts\/*\/payment-information":["cart","captcha"],"rest\/*\/v1\/guest-carts\/*\/selected-payment-method":["cart","checkout-data"],"rest\/*\/v1\/carts\/*\/selected-payment-method":["cart","checkout-data","instant-purchase"],"customer\/address\/*":["instant-purchase"],"customer\/account\/*":["instant-purchase"],"vault\/cards\/deleteaction":["instant-purchase"],"multishipping\/checkout\/overviewpost":["cart"],"paypal\/express\/placeorder":["cart","checkout-data"],"paypal\/payflowexpress\/placeorder":["cart","checkout-data"],"paypal\/express\/onauthorization":["cart","checkout-data"],"persistent\/index\/unsetcookie":["persistent"],"review\/product\/post":["review"],"wishlist\/index\/add":["wishlist"],"wishlist\/index\/remove":["wishlist"],"wishlist\/index\/updateitemoptions":["wishlist"],"wishlist\/index\/update":["wishlist"],"wishlist\/index\/cart":["wishlist","cart"],"wishlist\/index\/fromcart":["wishlist","cart"],"wishlist\/index\/allcart":["wishlist","cart"],"wishlist\/shared\/allcart":["wishlist","cart"],"wishlist\/shared\/cart":["cart"],"braintree\/paypal\/placeorder":["cart","checkout-data"],"braintree\/googlepay\/placeorder":["cart","checkout-data"]},
                "clientSideSections": ["checkout-data","cart-data","chatData"],
                "baseUrls": ["https:\/\/magentoblank.test\/"],
                "sectionNames": ["messages","customer","compare-products","last-ordered-items","cart","directory-data","instant-purchase","loggedAsCustomer","captcha","persistent","review","wishlist","chatData","recently_viewed_product","recently_compared_product","product_data_storage","paypal-billing-agreement"]            }
        }
    }
</script>
                    <script type="text/x-magento-init">
                        {
        "*": {
            "Magento_Customer/js/customer-data": {
                "sectionLoadUrl": "https\u003A\u002F\u002Fmagentoblank.test\u002Fcustomer\u002Fsection\u002Fload\u002F",
                "expirableSectionLifetime": 60,
                "expirableSectionNames": ["cart","persistent"],
                "cookieLifeTime": "3600",
                "updateSessionUrl": "https\u003A\u002F\u002Fmagentoblank.test\u002Fcustomer\u002Faccount\u002FupdateSession\u002F"
            }
        }
    }
</script>
                    <script type="text/x-magento-init">
                        {
        "*": {
            "Magento_Customer/js/invalidation-processor": {
                "invalidationRules": {
                    "website-rule": {
                        "Magento_Customer/js/invalidation-rules/website-rule": {
                            "scopeConfig": {
                                "websiteId": "1"
                            }
                        }
                    }
                }
            }
        }
    }
</script>
                    <script type="text/x-magento-init">
                        {
        "body": {
            "pageCache": {"url":"https:\/\/magentoblank.test\/page_cache\/block\/render\/","handles":["default","cms_index_index","cms_page_view","cms_index_index_id_home"],"originalRequest":{"route":"cms","controller":"index","action":"index","uri":"\/"},"versionCookieName":"private_content_version"}        }
    }
</script>

                    <script data-role="msrp-popup-template" type="text/x-magento-template">
                        <div id="map-popup-click-for-price" class="map-popup">
        <div class="popup-header">
            <strong class="title" id="map-popup-heading-price"></strong>
        </div>
        <div class="popup-content">
            <div class="map-info-price" id="map-popup-content">
                <div class="price-box">
                    <div class="map-msrp" id="map-popup-msrp-box">
                        <span class="label">Preço</span>
                        <span class="old-price map-old-price" id="map-popup-msrp">
                            <span class="price"></span>
                        </span>
                    </div>
                    <div class="map-price" id="map-popup-price-box">
                        <span class="label">Preço atual</span>
                        <span id="map-popup-price" class="actual-price"></span>
                    </div>
                </div>
                <form action="" method="POST" class="map-form-addtocart">
                    <input type="hidden" name="product" class="product_id" value="" />
                    <button type="button"
                            title="Adicionar ao Carrinho"
                            class="action tocart primary">
                        <span>Adicionar ao Carrinho</span>
                    </button>
                    <div class="additional-addtocart-box">
                                            </div>
                </form>
            </div>
            <div class="map-text" id="map-popup-text">
                Our price is lower than the manufacturer&#039;s &quot;minimum advertised price.&quot; As a result, we cannot show you the price in catalog or the product page. <br><br> You have no obligation to purchase the product once you know the price. You can simply remove the item from your cart.            </div>
        </div>
    </div>
    </script>
                    <script data-role="msrp-info-template" type="text/x-magento-template">
                        <div id="map-popup-what-this" class="map-popup">
        <div class="popup-header">
            <strong class="title" id="map-popup-heading-what-this"></strong>
        </div>
        <div class="popup-content">
            <div class="map-help-text" id="map-popup-text-what-this">
                Our price is lower than the manufacturer&#039;s &quot;minimum advertised price.&quot; As a result, we cannot show you the price in catalog or the product page. <br><br> You have no obligation to purchase the product once you know the price. You can simply remove the item from your cart.            </div>
        </div>
    </div>
    </script>
                </div>
            </div>
        </main>
