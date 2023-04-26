<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/allusers' => [[['_route' => 'app_allusers_index', '_controller' => 'App\\Controller\\AllusersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/allusers/new' => [[['_route' => 'app_allusers_new', '_controller' => 'App\\Controller\\AllusersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ban' => [[['_route' => 'app_ban_index', '_controller' => 'App\\Controller\\BanController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ban/new' => [[['_route' => 'app_ban_new', '_controller' => 'App\\Controller\\BanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/challenge' => [[['_route' => 'app_challenge_index', '_controller' => 'App\\Controller\\ChallengeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/challenge/new' => [[['_route' => 'app_challenge_new', '_controller' => 'App\\Controller\\ChallengeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Dashboard' => [[['_route' => 'app_Dashboard_index', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/Dashboard/Dashboard' => [[['_route' => 'app_Dashboard_show', '_controller' => 'App\\Controller\\DashboardController::show'], null, ['GET' => 0], null, false, false, null]],
        '/demandetravail' => [[['_route' => 'app_demandetravail_index', '_controller' => 'App\\Controller\\DemandetravailController::index'], null, ['GET' => 0], null, true, false, null]],
        '/demandetravail/new' => [[['_route' => 'app_demandetravail_new', '_controller' => 'App\\Controller\\DemandetravailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/favoris/turoial' => [[['_route' => 'app_favoris_turoial_index', '_controller' => 'App\\Controller\\FavorisTuroialController::index'], null, ['GET' => 0], null, true, false, null]],
        '/favoris/turoial/new' => [[['_route' => 'app_favoris_turoial_new', '_controller' => 'App\\Controller\\FavorisTuroialController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/grosmots' => [[['_route' => 'app_grosmots_index', '_controller' => 'App\\Controller\\GrosmotsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/grosmots/new' => [[['_route' => 'app_grosmots_new', '_controller' => 'App\\Controller\\GrosmotsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/lignepanier' => [[['_route' => 'app_lignepanier_index', '_controller' => 'App\\Controller\\LignepanierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lignepanier/new' => [[['_route' => 'app_lignepanier_new', '_controller' => 'App\\Controller\\LignepanierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offretravail' => [[['_route' => 'app_offretravail_index', '_controller' => 'App\\Controller\\OffretravailController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offretravail/new' => [[['_route' => 'app_offretravail_new', '_controller' => 'App\\Controller\\OffretravailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offretravailarchive' => [[['_route' => 'app_offretravailarchive_index', '_controller' => 'App\\Controller\\OffretravailarchiveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offretravailarchive/new' => [[['_route' => 'app_offretravailarchive_new', '_controller' => 'App\\Controller\\OffretravailarchiveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier/panier' => [[['_route' => 'app_panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/participation' => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::checkout'], null, null, null, false, false, null]],
        '/cancel_url' => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\PaymentController::cancelUrl'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/like/new' => [[['_route' => 'app_post_like_new', '_controller' => 'App\\Controller\\PostLikeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits/back' => [[['_route' => 'app_produits_back', '_controller' => 'App\\Controller\\ProduitsBackController::index'], null, null, null, false, false, null]],
        '/newBack' => [[['_route' => 'app_produits_back_new', '_controller' => 'App\\Controller\\ProduitsBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits' => [[['_route' => 'app_produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produits/new' => [[['_route' => 'app_produits_new', '_controller' => 'App\\Controller\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rating' => [[['_route' => 'app_rating_index', '_controller' => 'App\\Controller\\RatingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rating/new' => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tutoriel' => [[['_route' => 'app_tutoriel_index', '_controller' => 'App\\Controller\\TutorielController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tutoriel/new' => [[['_route' => 'app_tutoriel_new', '_controller' => 'App\\Controller\\TutorielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/video' => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/video/new' => [[['_route' => 'app_video_new', '_controller' => 'App\\Controller\\VideoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/view' => [[['_route' => 'app_view_index', '_controller' => 'App\\Controller\\ViewController::index'], null, ['GET' => 0], null, true, false, null]],
        '/view/new' => [[['_route' => 'app_view_new', '_controller' => 'App\\Controller\\ViewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
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
                    .'|(*:71)'
                    .'|/edit(*:83)'
                    .'|(*:90)'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:122)'
                        .'|/edit(*:135)'
                        .'|(*:143)'
                    .')'
                    .'|hallenge/([^/]++)(?'
                        .'|(*:172)'
                        .'|/edit(*:185)'
                        .'|(*:193)'
                    .')'
                    .'|omment/([^/]++)(?'
                        .'|(*:220)'
                        .'|/edit(*:233)'
                        .'|(*:241)'
                    .')'
                .')'
                .'|/demandetravail/([^/]++)(?'
                    .'|(*:278)'
                    .'|/edit(*:291)'
                    .'|(*:299)'
                .')'
                .'|/favoris/turoial/([^/]++)(?'
                    .'|(*:336)'
                    .'|/edit(*:349)'
                    .'|(*:357)'
                .')'
                .'|/grosmots/([^/]++)(?'
                    .'|(*:387)'
                    .'|/edit(*:400)'
                    .'|(*:408)'
                .')'
                .'|/lignepanier/(?'
                    .'|showlignepanier/([^/]++)(*:457)'
                    .'|([^/]++)/edit(*:478)'
                    .'|delete(?'
                        .'|ligne/([^/]++)(*:509)'
                        .'|Ajaxligne/([^/]++)(*:535)'
                    .')'
                .')'
                .'|/offretravail(?'
                    .'|/([^/]++)(?'
                        .'|(*:573)'
                        .'|/edit(*:586)'
                        .'|(*:594)'
                    .')'
                    .'|archive/([^/]++)(?'
                        .'|(*:622)'
                        .'|/edit(*:635)'
                        .'|(*:643)'
                    .')'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/(?'
                            .'|showpanier/([^/]++)(*:689)'
                            .'|panier/add/([^/]++)(*:716)'
                            .'|viderpanier/([^/]++)(*:744)'
                        .')'
                        .'|rticipation/([^/]++)(?'
                            .'|(*:776)'
                            .'|/edit(*:789)'
                            .'|(*:797)'
                        .')'
                    .')'
                    .'|df22/([^/]++)(*:820)'
                    .'|ost/(?'
                        .'|([^/]++)(?'
                            .'|(*:846)'
                            .'|/edit(*:859)'
                            .'|(*:867)'
                        .')'
                        .'|like(?'
                            .'|(*:883)'
                            .'|/([^/]++)(?'
                                .'|(*:903)'
                                .'|/edit(*:916)'
                                .'|(*:924)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/s(?'
                    .'|uccess\\-url/([^/]++)(*:961)'
                    .'|howBack/([^/]++)(*:985)'
                .')'
                .'|/([^/]++)/editBack(*:1012)'
                .'|/deleteBack/([^/]++)(*:1041)'
                .'|/produits/([^/]++)(?'
                    .'|(*:1071)'
                    .'|/edit(*:1085)'
                    .'|(*:1094)'
                .')'
                .'|/rating/([^/]++)(?'
                    .'|(*:1123)'
                    .'|/edit(*:1137)'
                    .'|(*:1146)'
                .')'
                .'|/tutoriel/([^/]++)(?'
                    .'|(*:1177)'
                    .'|/edit(*:1191)'
                    .'|(*:1200)'
                .')'
                .'|/vi(?'
                    .'|deo/([^/]++)(?'
                        .'|(*:1231)'
                        .'|/edit(*:1245)'
                        .'|(*:1254)'
                    .')'
                    .'|ew/([^/]++)(?'
                        .'|(*:1278)'
                        .'|/edit(*:1292)'
                        .'|(*:1301)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1343)'
                    .'|wdt/([^/]++)(*:1364)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1411)'
                            .'|router(*:1426)'
                            .'|exception(?'
                                .'|(*:1447)'
                                .'|\\.css(*:1461)'
                            .')'
                        .')'
                        .'|(*:1472)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_allusers_show', '_controller' => 'App\\Controller\\AllusersController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_allusers_edit', '_controller' => 'App\\Controller\\AllusersController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_allusers_delete', '_controller' => 'App\\Controller\\AllusersController::delete'], ['id_user'], ['POST' => 0], null, false, true, null]],
        71 => [[['_route' => 'app_ban_show', '_controller' => 'App\\Controller\\BanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        83 => [[['_route' => 'app_ban_edit', '_controller' => 'App\\Controller\\BanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        90 => [[['_route' => 'app_ban_delete', '_controller' => 'App\\Controller\\BanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        122 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id_category'], ['GET' => 0], null, false, true, null]],
        135 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id_category'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        143 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id_category'], ['POST' => 0], null, false, true, null]],
        172 => [[['_route' => 'app_challenge_show', '_controller' => 'App\\Controller\\ChallengeController::show'], ['id_challenge'], ['GET' => 0], null, false, true, null]],
        185 => [[['_route' => 'app_challenge_edit', '_controller' => 'App\\Controller\\ChallengeController::edit'], ['id_challenge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        193 => [[['_route' => 'app_challenge_delete', '_controller' => 'App\\Controller\\ChallengeController::delete'], ['id_challenge'], ['POST' => 0], null, false, true, null]],
        220 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id_comment'], ['GET' => 0], null, false, true, null]],
        233 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id_comment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        241 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id_comment'], ['POST' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_demandetravail_show', '_controller' => 'App\\Controller\\DemandetravailController::show'], ['idDemande'], ['GET' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_demandetravail_edit', '_controller' => 'App\\Controller\\DemandetravailController::edit'], ['idDemande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        299 => [[['_route' => 'app_demandetravail_delete', '_controller' => 'App\\Controller\\DemandetravailController::delete'], ['idDemande'], ['POST' => 0], null, false, true, null]],
        336 => [[['_route' => 'app_favoris_turoial_show', '_controller' => 'App\\Controller\\FavorisTuroialController::show'], ['id_favoris'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_favoris_turoial_edit', '_controller' => 'App\\Controller\\FavorisTuroialController::edit'], ['id_favoris'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'app_favoris_turoial_delete', '_controller' => 'App\\Controller\\FavorisTuroialController::delete'], ['id_favoris'], ['POST' => 0], null, false, true, null]],
        387 => [[['_route' => 'app_grosmots_show', '_controller' => 'App\\Controller\\GrosmotsController::show'], ['idMot'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => 'app_grosmots_edit', '_controller' => 'App\\Controller\\GrosmotsController::edit'], ['idMot'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        408 => [[['_route' => 'app_grosmots_delete', '_controller' => 'App\\Controller\\GrosmotsController::delete'], ['idMot'], ['POST' => 0], null, false, true, null]],
        457 => [[['_route' => 'app_lignepanier_show', '_controller' => 'App\\Controller\\LignepanierController::show'], ['idlignepanier'], ['GET' => 0], null, false, true, null]],
        478 => [[['_route' => 'app_lignepanier_edit', '_controller' => 'App\\Controller\\LignepanierController::edit'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        509 => [[['_route' => 'app_lignepanier_delete', '_controller' => 'App\\Controller\\LignepanierController::delete'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        535 => [[['_route' => 'app_lignepanier_delete_with_ajax', '_controller' => 'App\\Controller\\LignepanierController::deleteWithAjax'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        573 => [[['_route' => 'app_offretravail_show', '_controller' => 'App\\Controller\\OffretravailController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        586 => [[['_route' => 'app_offretravail_edit', '_controller' => 'App\\Controller\\OffretravailController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        594 => [[['_route' => 'app_offretravail_delete', '_controller' => 'App\\Controller\\OffretravailController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        622 => [[['_route' => 'app_offretravailarchive_show', '_controller' => 'App\\Controller\\OffretravailarchiveController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        635 => [[['_route' => 'app_offretravailarchive_edit', '_controller' => 'App\\Controller\\OffretravailarchiveController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        643 => [[['_route' => 'app_offretravailarchive_delete', '_controller' => 'App\\Controller\\OffretravailarchiveController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        689 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['idpanier'], ['GET' => 0], null, false, true, null]],
        716 => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\PanierController::ajouterProduitAuPanier'], ['idproduit'], null, null, false, true, null]],
        744 => [[['_route' => 'viderpanier', '_controller' => 'App\\Controller\\PanierController::ViderPanier'], ['idpanier'], null, null, false, true, null]],
        776 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id_participation'], ['GET' => 0], null, false, true, null]],
        789 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        797 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id_participation'], ['POST' => 0], null, false, true, null]],
        820 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\PaymentController::pdf'], ['idpanier'], null, null, false, true, null]],
        846 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id_post'], ['GET' => 0], null, false, true, null]],
        859 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        867 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id_post'], ['POST' => 0], null, false, true, null]],
        883 => [[['_route' => 'app_post_like_index', '_controller' => 'App\\Controller\\PostLikeController::index'], [], ['GET' => 0], null, true, false, null]],
        903 => [[['_route' => 'app_post_like_show', '_controller' => 'App\\Controller\\PostLikeController::show'], ['id_like'], ['GET' => 0], null, false, true, null]],
        916 => [[['_route' => 'app_post_like_edit', '_controller' => 'App\\Controller\\PostLikeController::edit'], ['id_like'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        924 => [[['_route' => 'app_post_like_delete', '_controller' => 'App\\Controller\\PostLikeController::delete'], ['id_like'], ['POST' => 0], null, false, true, null]],
        961 => [[['_route' => 'success-url', '_controller' => 'App\\Controller\\PaymentController::successUrl'], ['idpanier'], null, null, false, true, null]],
        985 => [[['_route' => 'app_produitsBack_show', '_controller' => 'App\\Controller\\ProduitsBackController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1012 => [[['_route' => 'app_produits_back_edit', '_controller' => 'App\\Controller\\ProduitsBackController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1041 => [[['_route' => 'app_produits_delete_back', '_controller' => 'App\\Controller\\ProduitsBackController::delete'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1071 => [[['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1085 => [[['_route' => 'app_produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1094 => [[['_route' => 'app_produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        1123 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['id_rating'], ['GET' => 0], null, false, true, null]],
        1137 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['id_rating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1146 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['id_rating'], ['POST' => 0], null, false, true, null]],
        1177 => [[['_route' => 'app_tutoriel_show', '_controller' => 'App\\Controller\\TutorielController::show'], ['id_tutoriel'], ['GET' => 0], null, false, true, null]],
        1191 => [[['_route' => 'app_tutoriel_edit', '_controller' => 'App\\Controller\\TutorielController::edit'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1200 => [[['_route' => 'app_tutoriel_delete', '_controller' => 'App\\Controller\\TutorielController::delete'], ['id_tutoriel'], ['POST' => 0], null, false, true, null]],
        1231 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id_video'], ['GET' => 0], null, false, true, null]],
        1245 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1254 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id_video'], ['POST' => 0], null, false, true, null]],
        1278 => [[['_route' => 'app_view_show', '_controller' => 'App\\Controller\\ViewController::show'], ['id_view'], ['GET' => 0], null, false, true, null]],
        1292 => [[['_route' => 'app_view_edit', '_controller' => 'App\\Controller\\ViewController::edit'], ['id_view'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1301 => [[['_route' => 'app_view_delete', '_controller' => 'App\\Controller\\ViewController::delete'], ['id_view'], ['POST' => 0], null, false, true, null]],
        1343 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1364 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1411 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1426 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1447 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1461 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1472 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
