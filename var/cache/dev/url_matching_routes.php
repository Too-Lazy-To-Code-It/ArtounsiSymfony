<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/allusers/Logout' => [[['_route' => 'app_allusers_logout', '_controller' => 'App\\Controller\\AllusersController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/allusers/Login' => [[['_route' => 'app_allusers_login', '_controller' => 'App\\Controller\\AllusersController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/allusers' => [[['_route' => 'app_allusers_index', '_controller' => 'App\\Controller\\AllusersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/allusers/new' => [[['_route' => 'app_allusers_new', '_controller' => 'App\\Controller\\AllusersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/allusers/verify' => [[['_route' => 'app_allusers_verify', '_controller' => 'App\\Controller\\AllusersController::verify'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/allusers/verif' => [[['_route' => 'app_allusers_verif', '_controller' => 'App\\Controller\\AllusersController::verif'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/allusers/ve' => [[['_route' => 'app_allusers_ve', '_controller' => 'App\\Controller\\AllusersController::VE'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/allusers/vs' => [[['_route' => 'app_allusers_vs', '_controller' => 'App\\Controller\\AllusersController::VS'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ban' => [[['_route' => 'app_ban_index', '_controller' => 'App\\Controller\\BanController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ban/new' => [[['_route' => 'app_ban_new', '_controller' => 'App\\Controller\\BanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/challenge' => [[['_route' => 'app_challenge_index', '_controller' => 'App\\Controller\\ChallengeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/challenge/new' => [[['_route' => 'app_challenge_new', '_controller' => 'App\\Controller\\ChallengeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/Dashboard' => [[['_route' => 'app_Dashboard_index', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/Dashboard/Dashboard' => [[['_route' => 'app_Dashboard_show', '_controller' => 'App\\Controller\\DashboardController::show'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/home/page' => [[['_route' => 'app_dashboard_home_page', '_controller' => 'App\\Controller\\DashboardHomePageController::index'], null, null, null, false, false, null]],
        '/demandetravail/chercher' => [[['_route' => 'app_demande_travail_chercheroffre', '_controller' => 'App\\Controller\\DemandetravailController::chercheroffre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/demandetravail/offressimilaires' => [[['_route' => 'app_demandetravail_offressimilaires', '_controller' => 'App\\Controller\\DemandetravailController::offressimilaires'], null, ['GET' => 0], null, false, false, null]],
        '/demandetravail/new' => [[['_route' => 'app_demandetravail_new', '_controller' => 'App\\Controller\\DemandetravailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/favoris/turoial' => [[['_route' => 'app_favoris_turoial_index', '_controller' => 'App\\Controller\\FavorisTuroialController::index'], null, ['GET' => 0], null, true, false, null]],
        '/favoris/turoial/new' => [[['_route' => 'app_favoris_turoial_new', '_controller' => 'App\\Controller\\FavorisTuroialController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/grosmots/new' => [[['_route' => 'app_grosmots_new', '_controller' => 'App\\Controller\\GrosmotsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/json/users' => [[['_route' => 'app_json_index', '_controller' => 'App\\Controller\\JsonController::index'], null, ['GET' => 0], null, false, false, null]],
        '/json/bans' => [[['_route' => 'app_json_indexb', '_controller' => 'App\\Controller\\JsonController::indexb'], null, ['GET' => 0], null, false, false, null]],
        '/json/new' => [[['_route' => 'app_json_new', '_controller' => 'App\\Controller\\JsonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/json/newb' => [[['_route' => 'app_json_newb', '_controller' => 'App\\Controller\\JsonController::newb'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lignepanier/new' => [[['_route' => 'app_lignepanier_new', '_controller' => 'App\\Controller\\LignepanierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offretravail/true' => [[['_route' => 'app_offretravail_notiftrue', '_controller' => 'App\\Controller\\OffretravailController::notiftrue'], null, ['POST' => 0], null, false, false, null]],
        '/offretravail/demandessimilaires' => [[['_route' => 'app_offretravail_demandessimilaires', '_controller' => 'App\\Controller\\OffretravailController::demandessimilaires'], null, ['GET' => 0], null, false, false, null]],
        '/offretravail/chercherdemande' => [[['_route' => 'app_offretravail_chercherdemande', '_controller' => 'App\\Controller\\OffretravailController::chercherdemande'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offretravail/new' => [[['_route' => 'app_offretravail_new', '_controller' => 'App\\Controller\\OffretravailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier/panier' => [[['_route' => 'app_panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/panier/NouveauPanier/new' => [[['_route' => 'app_panier_new', '_controller' => 'App\\Controller\\PanierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/like/new' => [[['_route' => 'app_post_like_new', '_controller' => 'App\\Controller\\PostLikeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits/back' => [[['_route' => 'app_produits_back', '_controller' => 'App\\Controller\\ProduitsBackController::index'], null, null, null, false, false, null]],
        '/produits/new' => [[['_route' => 'app_produits_new', '_controller' => 'App\\Controller\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/TousLesproduits/mobile' => [[['_route' => 'ListeProduits', '_controller' => 'App\\Controller\\ProduitsMobileController::getProduits'], null, null, null, false, false, null]],
        '/ajouterProduitJSON/new' => [[['_route' => 'ajouterProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::ajouterProduitJSON'], null, null, null, false, false, null]],
        '/rating/new' => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/mesoffres' => [[['_route' => 'app_dashboard_offres', '_controller' => 'App\\Controller\\StudiodashboardController::offres'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/mesdemandess' => [[['_route' => 'app_dashboard_demandes', '_controller' => 'App\\Controller\\StudiodashboardController::demandes'], null, ['GET' => 0], null, false, false, null]],
        '/tutoriel/new' => [[['_route' => 'app_tutoriel_new', '_controller' => 'App\\Controller\\TutorielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/video/new' => [[['_route' => 'app_video_new', '_controller' => 'App\\Controller\\VideoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/view/new' => [[['_route' => 'app_view_new', '_controller' => 'App\\Controller\\ViewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/allusers/([^/]++)(?'
                    .'|(*:28)'
                    .'|/edit(*:40)'
                    .'|(*:47)'
                .')'
                .'|/ban/([^/]++)(?'
                    .'|/edit(*:76)'
                    .'|(*:83)'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:115)'
                        .'|/edit(*:128)'
                        .'|(*:136)'
                    .')'
                    .'|hallenge/([^/]++)(?'
                        .'|(*:165)'
                        .'|/edit(*:178)'
                        .'|(*:186)'
                    .')'
                    .'|omment/(?'
                        .'|new/([^/]++)(*:217)'
                        .'|([^/]++)(?'
                            .'|(*:236)'
                            .'|/edit(*:249)'
                            .'|(*:257)'
                        .')'
                    .')'
                .')'
                .'|/dashboard_home_page/([^/]++)(*:297)'
                .'|/postt/([^/]++)(*:320)'
                .'|/([^/]++)(*:337)'
                .'|/demandetravail(?'
                    .'|(*:363)'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|mail(*:391)'
                            .'|edit(*:403)'
                        .')'
                        .'|(*:412)'
                    .')'
                .')'
                .'|/explore(*:430)'
                .'|/favoris/turoial/([^/]++)(?'
                    .'|(*:466)'
                    .'|/edit(*:479)'
                    .'|(*:487)'
                .')'
                .'|/grosmots(?'
                    .'|(*:508)'
                    .'|/([^/]++)(?'
                        .'|(*:528)'
                        .'|/edit(*:541)'
                        .'|(*:549)'
                    .')'
                .')'
                .'|/home(*:564)'
                .'|/json/(?'
                    .'|([^/]++)(?'
                        .'|(*:592)'
                        .'|/editb(*:606)'
                    .')'
                    .'|ban/([^/]++)(*:627)'
                    .'|([^/]++)/edit(*:648)'
                    .'|deleteuser/([^/]++)(*:675)'
                    .'|alloffres(*:692)'
                    .'|mesoffres(*:709)'
                .')'
                .'|/lignepanier(?'
                    .'|(*:733)'
                    .'|/(?'
                        .'|showlignepanier/([^/]++)(*:769)'
                        .'|([^/]++)/edit(*:790)'
                        .'|deleteAjaxligne/([^/]++)(*:822)'
                    .')'
                .')'
                .'|/map(*:836)'
                .'|/offretravail(?'
                    .'|(*:860)'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|mail(*:888)'
                            .'|edit(*:900)'
                        .')'
                        .'|(*:909)'
                    .')'
                    .'|archive(?'
                        .'|(*:928)'
                        .'|/(?'
                            .'|([^/]++)(*:948)'
                            .'|new(*:959)'
                            .'|([^/]++)(*:975)'
                        .')'
                        .'|delete/([^/]++)(*:999)'
                    .')'
                .')'
                .'|/new(*:1013)'
                .'|/([^/]++)(?'
                    .'|/editjson(*:1043)'
                    .'|(*:1052)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/(?'
                            .'|showpanier/([^/]++)(*:1098)'
                            .'|panier/add/([^/]++)(*:1126)'
                            .'|viderpanier/([^/]++)(*:1155)'
                        .')'
                        .'|rticipation(?'
                            .'|(*:1179)'
                            .'|/([^/]++)(?'
                                .'|(*:1200)'
                                .'|/edit(*:1214)'
                                .'|(*:1223)'
                            .')'
                        .')'
                        .'|yment(*:1239)'
                    .')'
                    .'|df22/([^/]++)(*:1262)'
                    .'|ost(?'
                        .'|(*:1277)'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|(*:1301)'
                                .'|/edit(*:1315)'
                                .'|(*:1324)'
                            .')'
                            .'|post/([^/]++)(*:1347)'
                            .'|like(?'
                                .'|(*:1363)'
                                .'|/([^/]++)(?'
                                    .'|(*:1384)'
                                    .'|/edit(*:1398)'
                                    .'|(*:1407)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout(*:1433)'
                    .'|ancel_url(*:1451)'
                .')'
                .'|/s(?'
                    .'|uccess\\-url/([^/]++)(*:1486)'
                    .'|howBack/([^/]++)(*:1511)'
                .')'
                .'|/newBack(*:1529)'
                .'|/([^/]++)/editBack(*:1556)'
                .'|/d(?'
                    .'|eleteBack/([^/]++)(*:1588)'
                    .'|ashboard(*:1605)'
                .')'
                .'|/produits(?'
                    .'|(*:1627)'
                    .'|/([^/]++)(?'
                        .'|(*:1648)'
                        .'|/edit(*:1662)'
                        .'|(*:1671)'
                    .')'
                .')'
                .'|/ProduitMobile/([^/]++)(*:1705)'
                .'|/modifierProduitJSON/([^/]++)(*:1743)'
                .'|/s(?'
                    .'|upprimerProduitJSON/([^/]++)(*:1785)'
                    .'|earch(*:1799)'
                    .'|ms(?'
                        .'|(*:1813)'
                        .'|1(*:1823)'
                    .')'
                .')'
                .'|/rating(?'
                    .'|(*:1844)'
                    .'|/([^/]++)(?'
                        .'|(*:1865)'
                        .'|/edit(*:1879)'
                        .'|(*:1888)'
                    .')'
                .')'
                .'|/tutoriel(?'
                    .'|(*:1911)'
                    .'|/([^/]++)(?'
                        .'|(*:1932)'
                        .'|/edit(*:1946)'
                        .'|(*:1955)'
                    .')'
                .')'
                .'|/vi(?'
                    .'|deo(?'
                        .'|(*:1978)'
                        .'|/([^/]++)(?'
                            .'|(*:1999)'
                            .'|/edit(*:2013)'
                            .'|(*:2022)'
                        .')'
                    .')'
                    .'|ew(?'
                        .'|(*:2038)'
                        .'|/([^/]++)(?'
                            .'|(*:2059)'
                            .'|/edit(*:2073)'
                            .'|(*:2082)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:2125)'
                    .'|wdt/([^/]++)(*:2146)'
                    .'|profiler(?'
                        .'|(*:2166)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:2205)'
                                .'|router(*:2220)'
                                .'|exception(?'
                                    .'|(*:2241)'
                                    .'|\\.css(*:2255)'
                                .')'
                            .')'
                            .'|(*:2266)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_allusers_show', '_controller' => 'App\\Controller\\AllusersController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_allusers_edit', '_controller' => 'App\\Controller\\AllusersController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_allusers_delete', '_controller' => 'App\\Controller\\AllusersController::delete'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        76 => [[['_route' => 'app_ban_edit', '_controller' => 'App\\Controller\\BanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'app_ban_delete', '_controller' => 'App\\Controller\\BanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        115 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id_category'], ['GET' => 0], null, false, true, null]],
        128 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id_category'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        136 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id_category'], ['POST' => 0], null, false, true, null]],
        165 => [[['_route' => 'app_challenge_show', '_controller' => 'App\\Controller\\ChallengeController::show'], ['id_challenge'], ['GET' => 0], null, false, true, null]],
        178 => [[['_route' => 'app_challenge_edit', '_controller' => 'App\\Controller\\ChallengeController::edit'], ['id_challenge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        186 => [[['_route' => 'app_challenge_delete', '_controller' => 'App\\Controller\\ChallengeController::delete'], ['id_challenge'], ['POST' => 0], null, false, true, null]],
        217 => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        236 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id_comment'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id_comment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [
            [['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::deleteCommentUserside'], ['id_comment'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_comment_dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deleteCommentAdminSide'], ['id_comment'], ['POST' => 0], null, false, true, null],
        ],
        297 => [[['_route' => 'app_post_details_Dashboard', '_controller' => 'App\\Controller\\DashboardHomePageController::showPostDetails'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        320 => [[['_route' => 'app_post_Dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deletePost'], ['id_post'], ['POST' => 0], null, false, true, null]],
        337 => [[['_route' => 'app_category_Dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deleteCategory'], ['id_category'], ['POST' => 0], null, false, true, null]],
        363 => [[['_route' => 'app_demandetravail_index', '_controller' => 'App\\Controller\\DemandetravailController::index'], [], ['GET' => 0], null, true, false, null]],
        391 => [[['_route' => 'app_demandetravail_mail', '_controller' => 'App\\Controller\\DemandetravailController::sendEmail'], ['idOffre'], ['GET' => 0], null, false, false, null]],
        403 => [[['_route' => 'app_demandetravail_edit', '_controller' => 'App\\Controller\\DemandetravailController::edit'], ['idDemande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [
            [['_route' => 'app_demandetravail_show', '_controller' => 'App\\Controller\\DemandetravailController::show'], ['idDemande'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_demandetravail_delete', '_controller' => 'App\\Controller\\DemandetravailController::delete'], ['idDemande'], ['POST' => 0], null, false, true, null],
        ],
        430 => [[['_route' => 'app_explore', '_controller' => 'App\\Controller\\ExploreController::index'], [], null, null, false, false, null]],
        466 => [[['_route' => 'app_favoris_turoial_show', '_controller' => 'App\\Controller\\FavorisTuroialController::show'], ['id_favoris'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => 'app_favoris_turoial_edit', '_controller' => 'App\\Controller\\FavorisTuroialController::edit'], ['id_favoris'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        487 => [[['_route' => 'app_favoris_turoial_delete', '_controller' => 'App\\Controller\\FavorisTuroialController::delete'], ['id_favoris'], ['POST' => 0], null, false, true, null]],
        508 => [[['_route' => 'app_grosmots_index', '_controller' => 'App\\Controller\\GrosmotsController::index'], [], ['GET' => 0], null, true, false, null]],
        528 => [[['_route' => 'app_grosmots_show', '_controller' => 'App\\Controller\\GrosmotsController::show'], ['idMot'], ['GET' => 0], null, false, true, null]],
        541 => [[['_route' => 'app_grosmots_edit', '_controller' => 'App\\Controller\\GrosmotsController::edit'], ['idMot'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        549 => [[['_route' => 'app_grosmots_delete', '_controller' => 'App\\Controller\\GrosmotsController::delete'], ['idMot'], ['POST' => 0], null, false, true, null]],
        564 => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], [], null, null, false, false, null]],
        592 => [[['_route' => 'app_json_show', '_controller' => 'App\\Controller\\JsonController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        606 => [[['_route' => 'app_json_editb', '_controller' => 'App\\Controller\\JsonController::editb'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        627 => [[['_route' => 'app_ban_show', '_controller' => 'App\\Controller\\JsonController::showb'], ['id'], ['GET' => 0], null, false, true, null]],
        648 => [[['_route' => 'app_json_edit', '_controller' => 'App\\Controller\\JsonController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        675 => [[['_route' => 'app_json_delete', '_controller' => 'App\\Controller\\JsonController::delete'], ['id_user'], null, null, false, true, null]],
        692 => [[['_route' => 'alloffresjson', '_controller' => 'App\\Controller\\OffretravailmobileController::index'], [], ['GET' => 0], null, false, false, null]],
        709 => [[['_route' => 'mesoffresjson', '_controller' => 'App\\Controller\\OffretravailmobileController::mesoffres'], [], ['GET' => 0], null, false, false, null]],
        733 => [[['_route' => 'app_lignepanier_index', '_controller' => 'App\\Controller\\LignepanierController::index'], [], ['GET' => 0], null, true, false, null]],
        769 => [[['_route' => 'app_lignepanier_show', '_controller' => 'App\\Controller\\LignepanierController::show'], ['idlignepanier'], ['GET' => 0], null, false, true, null]],
        790 => [[['_route' => 'app_lignepanier_edit', '_controller' => 'App\\Controller\\LignepanierController::edit'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        822 => [[['_route' => 'app_lignepanier_delete_with_ajax', '_controller' => 'App\\Controller\\LignepanierController::deleteWithAjax'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        836 => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\MapController::index'], [], null, null, false, false, null]],
        860 => [[['_route' => 'app_offretravail_index', '_controller' => 'App\\Controller\\OffretravailController::index'], [], ['GET' => 0], null, true, false, null]],
        888 => [[['_route' => 'app_offretravail_mail', '_controller' => 'App\\Controller\\OffretravailController::sendEmail'], ['idDemande'], ['GET' => 0], null, false, false, null]],
        900 => [[['_route' => 'app_offretravail_edit', '_controller' => 'App\\Controller\\OffretravailController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        909 => [
            [['_route' => 'app_offretravail_show', '_controller' => 'App\\Controller\\OffretravailController::show'], ['idoffre'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_offretravail_delete', '_controller' => 'App\\Controller\\OffretravailController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null],
        ],
        928 => [[['_route' => 'app_offretravailarchive_index', '_controller' => 'App\\Controller\\OffretravailarchiveController::index'], [], ['GET' => 0], null, true, false, null]],
        948 => [[['_route' => 'app_offretravailarchive_recuperer', '_controller' => 'App\\Controller\\OffretravailarchiveController::recuperer'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        959 => [[['_route' => 'app_offretravailarchive_new', '_controller' => 'App\\Controller\\OffretravailarchiveController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        975 => [[['_route' => 'app_offretravailarchive_show', '_controller' => 'App\\Controller\\OffretravailarchiveController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        999 => [[['_route' => 'app_offretravailarchive_delete', '_controller' => 'App\\Controller\\OffretravailarchiveController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1013 => [[['_route' => 'newjson', '_controller' => 'App\\Controller\\OffretravailmobileController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1043 => [[['_route' => 'editjson', '_controller' => 'App\\Controller\\OffretravailmobileController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1052 => [[['_route' => 'deletejson', '_controller' => 'App\\Controller\\OffretravailmobileController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1098 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['idpanier'], ['GET' => 0], null, false, true, null]],
        1126 => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\PanierController::ajouterProduitAuPanier'], ['idproduit'], null, null, false, true, null]],
        1155 => [[['_route' => 'viderpanier', '_controller' => 'App\\Controller\\PanierController::ViderPanier'], ['idpanier'], null, null, false, true, null]],
        1179 => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], [], ['GET' => 0], null, true, false, null]],
        1200 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id_participation'], ['GET' => 0], null, false, true, null]],
        1214 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1223 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id_participation'], ['POST' => 0], null, false, true, null]],
        1239 => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], [], null, null, false, false, null]],
        1262 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\PaymentController::pdf'], ['idpanier'], null, null, false, true, null]],
        1277 => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], [], ['GET' => 0], null, true, false, null]],
        1301 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id_post'], ['GET' => 0], null, false, true, null]],
        1315 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1324 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id_post'], ['POST' => 0], null, false, true, null]],
        1347 => [[['_route' => 'app_post_details', '_controller' => 'App\\Controller\\PostController::showPostDetails'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1363 => [[['_route' => 'app_post_like_index', '_controller' => 'App\\Controller\\PostLikeController::index'], [], ['GET' => 0], null, true, false, null]],
        1384 => [[['_route' => 'app_post_like_show', '_controller' => 'App\\Controller\\PostLikeController::show'], ['id_like'], ['GET' => 0], null, false, true, null]],
        1398 => [[['_route' => 'app_post_like_edit', '_controller' => 'App\\Controller\\PostLikeController::edit'], ['id_like'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1407 => [[['_route' => 'app_post_like_delete', '_controller' => 'App\\Controller\\PostLikeController::delete'], ['id_like'], ['POST' => 0], null, false, true, null]],
        1433 => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::checkout'], [], null, null, false, false, null]],
        1451 => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\PaymentController::cancelUrl'], [], null, null, false, false, null]],
        1486 => [[['_route' => 'success-url', '_controller' => 'App\\Controller\\PaymentController::successUrl'], ['idpanier'], null, null, false, true, null]],
        1511 => [[['_route' => 'app_produitsBack_show', '_controller' => 'App\\Controller\\ProduitsBackController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1529 => [[['_route' => 'app_produits_back_new', '_controller' => 'App\\Controller\\ProduitsBackController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1556 => [[['_route' => 'app_produits_back_edit', '_controller' => 'App\\Controller\\ProduitsBackController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1588 => [[['_route' => 'app_produits_delete_back', '_controller' => 'App\\Controller\\ProduitsBackController::delete'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1605 => [[['_route' => 'app_dashboard_studiodashboard', '_controller' => 'App\\Controller\\StudiodashboardController::index'], [], ['GET' => 0], null, true, false, null]],
        1627 => [[['_route' => 'app_produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], [], ['GET' => 0], null, true, false, null]],
        1648 => [[['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1662 => [[['_route' => 'app_produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1671 => [[['_route' => 'app_produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        1705 => [[['_route' => 'produit_par_id', '_controller' => 'App\\Controller\\ProduitsMobileController::ProduitId'], ['idproduit'], null, null, false, true, null]],
        1743 => [[['_route' => 'modifierProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::modifierProduitJSON'], ['idproduit'], null, null, false, true, null]],
        1785 => [[['_route' => 'supprimerProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::supprimerProduitJSON'], ['idproduit'], null, null, false, true, null]],
        1799 => [[['_route' => 'app_search_post', '_controller' => 'App\\Controller\\SearchController::search'], [], null, null, false, false, null]],
        1813 => [[['_route' => 'app_sms', '_controller' => 'App\\Controller\\SmsController::index'], [], null, null, false, false, null]],
        1823 => [[['_route' => 'app_sms1', '_controller' => 'App\\Controller\\SmsController::sendSmsMessage'], [], null, null, false, false, null]],
        1844 => [[['_route' => 'app_rating_index', '_controller' => 'App\\Controller\\RatingController::index'], [], ['GET' => 0], null, true, false, null]],
        1865 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['id_rating'], ['GET' => 0], null, false, true, null]],
        1879 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['id_rating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1888 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['id_rating'], ['POST' => 0], null, false, true, null]],
        1911 => [[['_route' => 'app_tutoriel_index', '_controller' => 'App\\Controller\\TutorielController::index'], [], ['GET' => 0], null, true, false, null]],
        1932 => [[['_route' => 'app_tutoriel_show', '_controller' => 'App\\Controller\\TutorielController::show'], ['id_tutoriel'], ['GET' => 0], null, false, true, null]],
        1946 => [[['_route' => 'app_tutoriel_edit', '_controller' => 'App\\Controller\\TutorielController::edit'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1955 => [[['_route' => 'app_tutoriel_delete', '_controller' => 'App\\Controller\\TutorielController::delete'], ['id_tutoriel'], ['POST' => 0], null, false, true, null]],
        1978 => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoController::index'], [], ['GET' => 0], null, true, false, null]],
        1999 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id_video'], ['GET' => 0], null, false, true, null]],
        2013 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2022 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id_video'], ['POST' => 0], null, false, true, null]],
        2038 => [[['_route' => 'app_view_index', '_controller' => 'App\\Controller\\ViewController::index'], [], ['GET' => 0], null, true, false, null]],
        2059 => [[['_route' => 'app_view_show', '_controller' => 'App\\Controller\\ViewController::show'], ['id_view'], ['GET' => 0], null, false, true, null]],
        2073 => [[['_route' => 'app_view_edit', '_controller' => 'App\\Controller\\ViewController::edit'], ['id_view'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2082 => [[['_route' => 'app_view_delete', '_controller' => 'App\\Controller\\ViewController::delete'], ['id_view'], ['POST' => 0], null, false, true, null]],
        2125 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        2146 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        2166 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        2205 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        2220 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        2241 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        2255 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        2266 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
