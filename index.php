<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

    <meta charset="utf-8">

    <meta property="og:url" content="http://DatenParty.org/">
    <?php if(isset($_GET[ "category"])){ echo "<title>" . $_GET[ "category"] . " - Daten Party</title>"; } else { echo "<title>News - Daten Party</title>"; } ?>
    <link rel="shortcut icon" href="img/data_horn_1024.png">

    <link rel="alternate" type="application/rss+xml" title="Blog" href="https://fairhaus-blankenese.jimdo.com/rss/blog">

    <link rel="canonical" href="http://DatenParty.org">



    <style>
        html,
        body {
            margin: 0
        }
        .hidden {
            display: none
        }
        .n {
            padding: 5px
        }
        #cc-website-title a {
            text-decoration: none
        }
        .cc-m-image-align-1 {
            text-align: left
        }
        .cc-m-image-align-2 {
            text-align: right
        }
        .cc-m-image-align-3 {
            text-align: center
        }
    </style>



    <link href="layout.css" rel="stylesheet" type="text/css" id="datenparty_layout_css">

    <!--  <link href="http://elder.dynu.com/DatenParty/web_unresponsive.css.52358472636b65e01be7bd72a2faece4.css" rel="preload" as="style">
   <noscript>
<link href="http://elder.dynu.com/DatenParty/web_unresponsive.css.52358472636b65e01be7bd72a2faece4.css" rel="stylesheet"/>
  </noscript>
  <link href="http://elder.dynu.com/DatenParty/ownbgr.css.1f6a479d5aeb6b9a556b628d126b0a49.css" rel="stylesheet" type="text/css" media="all">-->

    <script>
        (function(window) {
            'use strict';
            var regBuff = window.__regModuleBuffer = [];
            var regModuleBuffer = function() {
                var args = [].slice.call(arguments);
                regBuff.push(args);
            };
            if (!window.regModule) {
                window.regModule = regModuleBuffer;
            }
        })(window);
    </script>
    <script src="https://assets.jimstatic.com/web.js.e2ae073fb41beeec59a5.js" async="true"></script>



</head>

<body class="body cc-page cc-page-index cc-indexpage j-m-gallery-styles j-m-video-styles j-m-hr-styles j-m-header-styles j-m-text-styles j-m-emotionheader-styles j-m-htmlCode-styles j-m-rss-styles j-m-form-styles-disabled j-m-table-styles j-m-textWithImage-styles j-m-downloadDocument-styles j-m-imageSubtitle-styles j-m-flickr-styles j-m-googlemaps-styles j-m-blogSelection-styles-disabled j-m-comment-styles j-m-jimdo-styles j-m-profile-styles j-m-guestbook-styles j-m-promotion-styles j-m-twitter-styles j-m-hgrid-styles j-m-shoppingcart-styles j-m-catalog-styles j-m-product-styles-disabled j-m-facebook-styles j-m-sharebuttons-styles j-m-formnew-styles-disabled j-m-callToAction-styles j-m-turbo-styles j-m-spacing-styles j-m-googleplus-styles j-m-dummy-styles j-footer-styles cc-pagemode-default cc-content-parent" id="page-1888471421">

    <div id="cc-inner" class="cc-content-parent">
        <div class="cc-tp-padding-container cc-content-parent">
            <div class="cc-tp-container cc-content-parent">
                <div class="cc-tp-header">
                    <div class="cc-tp-nav navigation-colors border-options">
                        <div class="cc-tp-gutter navigation-alignment">


                            <table border=0 px>
                                <tr>
                                    <td>
                                        <div class="logo">
                                            <a href="index.html" title="News - Daten Party">
                                                <img src="img/datenparty4.png" height="66" width="313" src="" alt="" border=0 px>
                                            </a>
                                        </div>
                                </tr>
                            </table>
                            <div style="top: 1px; height: 70px;">
                                <div class="navi-colors">
                                    <div class="cc-tb">
                                        <li class="cc-nav-current j-nav-current">
                                            <a href="index.php" data-link-title="NEWS">NEWS</a>
                                        </li>
                                        <li class="jmd-nav__list-item-0">
                                            <a href="what_is_it.html" data-link-title="what">(Was ist Daten Party?)</a>
                                            <li class="jmd-nav__list-item-0">
                                                <a href="contact.html" data-link-title="Kontakt">Kontakt</a>
                                            </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cc-tp-main cc-tp-gutter cc-content-parent">
                <div class="cc-tp-content content-options cc-content-parent">
                    <div id="content_area" data-container="content">

                        <div id="cc-matrix-2401172421">
                            <div id="cc-m-9485597621" class="j-module n j-header">
                                <h1 class="" id="cc-m-header-9485597621">
<?php
if(isset($_GET["category"])){
echo $_GET["category"];
} else {
echo "Alle News";
}
?>
</h1>
                            </div>
                            <div id="cc-m-9498195821" class="j-module n j-spacing">
                                <div class="cc-m-spacer" style="height: 10px;">

                                </div>

                                <?php $json=file_get_contents( "http://maschini.de:5001/"); $test=json_decode($json, true); $amount=0 ; foreach($test as $lol) { if(isset($_GET[ "category"]) and $test[$amount][ "category"] !=$_GET[ "category"]){ }else{ ?>

                            </div>
                            <div id="cc-m-9497616221" class="j-module n j-blogSelection">
                                <div class="blogselection">
                                    <div class="n clearover j-blogarticle">
                                        <a href="<?php echo($test[$amount][" link "]); ?>" class="j-blog-header">
                                            <h2 class="j-blog-headline"><?php echo($test[$amount]["author"]); ?></h2>
                                        </a>

                                        <time class="datetime" datetime="2014-05-03">
                                            <span class="day-word dt-hide"><?php echo($test[$amount]["date"]); ?></span>
                                        </time>


                                        <div id="cc-matrix-2502506221">
                                            <div id="cc-m-9497606721" class="j-module n j-text">
                                                <p>
                                                    <?php echo($test[$amount][ "article"]); ?>
                                                    <p>
                                                        <hr>
                                                    </p>

                                                    <p>
                                                        Kategorie:
                                                        <?php $ctgry=$test[$amount][ "category"]; echo '<a href="index.php?category=' . $ctgry . '">' . $ctgry . '</a>'; ?>
                                                        <br>
                                                    </p>
                                                    <p>
                                                        <br>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="cc-m-9485590721" class="j-module n j-text">
                                <p>
                                    <?php } $amount +=1 ; } ?>
                                </p>

                            </div>

                        </div>
                        <div id="cc-m-9168598421" class="j-module n j-hr">
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="cc-tp-footer footer-options">
            <div class="cc-tp-gutter">
                <div id="contentfooter" data-container="footer">



                    <div class="j-meta-links">
                        <a href="about.html">Impressum</a> | <a href="contact.html">Kontakt</a>
                        <br>
                    </div>


                </div>

            </div>
        </div>

    </div>
    </div>
    </div>
    <ul class="cc-FloatingButtonBarContainer cc-FloatingButtonBarContainer-left hidden">
    </ul>

</body>

</html>