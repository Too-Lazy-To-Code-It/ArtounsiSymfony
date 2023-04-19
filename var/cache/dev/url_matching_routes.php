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
        '/ban' => [[['_route' => 'app_ban_index', '_controller' => 'App\\Controller\\BanController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ban/new' => [[['_route' => 'app_ban_new', '_controller' => 'App\\Controller\\BanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/challenge' => [[['_route' => 'app_challenge_index', '_controller' => 'App\\Controller\\ChallengeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/challenge/new' => [[['_route' => 'app_challenge_new', '_controller' => 'App\\Controller\\ChallengeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/panier' => [[['_route' => 'app_panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/panier/new' => [[['_route' => 'app_panier_new', '_controller' => 'App\\Controller\\PanierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participation' => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/like/new' => [[['_route' => 'app_post_like_new', '_controller' => 'App\\Controller\\PostLikeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits' => [[['_route' => 'app_produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produits/new' => [[['_route' => 'app_produits_new', '_controller' => 'App\\Controller\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rating' => [[['_route' => 'app_rating_index', '_controller' => 'App\\Controller\\RatingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rating/new' => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sms' => [[['_route' => 'app_sms', '_controller' => 'App\\Controller\\SmsController::index'], null, null, null, false, false, null]],
        '/sms1' => [[['_route' => 'app_sms1', '_controller' => 'App\\Controller\\SmsController::sendSmsMessage'], null, null, null, false, false, null]],
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
                    .'|/(?'
                        .'|verify(*:38)'
                        .'|edit(*:49)'
                    .')'
                    .'|(*:57)'
                .')'
                .'|/ban/([^/]++)(?'
                    .'|(*:81)'
                    .'|/edit(*:93)'
                    .'|(*:100)'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:133)'
                        .'|/edit(*:146)'
                        .'|(*:154)'
                    .')'
                    .'|hallenge/([^/]++)(?'
                        .'|(*:183)'
                        .'|/edit(*:196)'
                        .'|(*:204)'
                    .')'
                    .'|omment/([^/]++)(?'
                        .'|(*:231)'
                        .'|/edit(*:244)'
                        .'|(*:252)'
                    .')'
                .')'
                .'|/demandetravail/([^/]++)(?'
                    .'|(*:289)'
                    .'|/edit(*:302)'
                    .'|(*:310)'
                .')'
                .'|/favoris/turoial/([^/]++)(?'
                    .'|(*:347)'
                    .'|/edit(*:360)'
                    .'|(*:368)'
                .')'
                .'|/grosmots/([^/]++)(?'
                    .'|(*:398)'
                    .'|/edit(*:411)'
                    .'|(*:419)'
                .')'
                .'|/lignepanier/([^/]++)(?'
                    .'|(*:452)'
                    .'|/edit(*:465)'
                    .'|(*:473)'
                .')'
                .'|/offretravail(?'
                    .'|/([^/]++)(?'
                        .'|(*:510)'
                        .'|/edit(*:523)'
                        .'|(*:531)'
                    .')'
                    .'|archive/([^/]++)(?'
                        .'|(*:559)'
                        .'|/edit(*:572)'
                        .'|(*:580)'
                    .')'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/([^/]++)(?'
                            .'|(*:615)'
                            .'|/edit(*:628)'
                            .'|(*:636)'
                        .')'
                        .'|rticipation/([^/]++)(?'
                            .'|(*:668)'
                            .'|/edit(*:681)'
                            .'|(*:689)'
                        .')'
                    .')'
                    .'|ost/(?'
                        .'|([^/]++)(?'
                            .'|(*:717)'
                            .'|/edit(*:730)'
                            .'|(*:738)'
                        .')'
                        .'|like(?'
                            .'|(*:754)'
                            .'|/([^/]++)(?'
                                .'|(*:774)'
                                .'|/edit(*:787)'
                                .'|(*:795)'
                            .')'
                        .')'
                    .')'
                    .'|roduits/([^/]++)(?'
                        .'|(*:825)'
                        .'|/edit(*:838)'
                        .'|(*:846)'
                    .')'
                .')'
                .'|/rating/([^/]++)(?'
                    .'|(*:875)'
                    .'|/edit(*:888)'
                    .'|(*:896)'
                .')'
                .'|/tutoriel/([^/]++)(?'
                    .'|(*:926)'
                    .'|/edit(*:939)'
                    .'|(*:947)'
                .')'
                .'|/vi(?'
                    .'|deo/([^/]++)(?'
                        .'|(*:977)'
                        .'|/edit(*:990)'
                        .'|(*:998)'
                    .')'
                    .'|ew/([^/]++)(?'
                        .'|(*:1021)'
                        .'|/edit(*:1035)'
                        .'|(*:1044)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1086)'
                    .'|wdt/([^/]++)(*:1107)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1154)'
                            .'|router(*:1169)'
                            .'|exception(?'
                                .'|(*:1190)'
                                .'|\\.css(*:1204)'
                            .')'
                        .')'
                        .'|(*:1215)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'app_allusers_verify', '_controller' => 'App\\Controller\\AllusersController::verify'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        49 => [[['_route' => 'app_allusers_edit', '_controller' => 'App\\Controller\\AllusersController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        57 => [
            [['_route' => 'app_allusers_show', '_controller' => 'App\\Controller\\AllusersController::show'], ['id_user'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_allusers_delete', '_controller' => 'App\\Controller\\AllusersController::delete'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, true, null],
        ],
        81 => [[['_route' => 'app_ban_show', '_controller' => 'App\\Controller\\BanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_ban_edit', '_controller' => 'App\\Controller\\BanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'app_ban_delete', '_controller' => 'App\\Controller\\BanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        133 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id_category'], ['GET' => 0], null, false, true, null]],
        146 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id_category'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        154 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id_category'], ['POST' => 0], null, false, true, null]],
        183 => [[['_route' => 'app_challenge_show', '_controller' => 'App\\Controller\\ChallengeController::show'], ['id_challenge'], ['GET' => 0], null, false, true, null]],
        196 => [[['_route' => 'app_challenge_edit', '_controller' => 'App\\Controller\\ChallengeController::edit'], ['id_challenge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        204 => [[['_route' => 'app_challenge_delete', '_controller' => 'App\\Controller\\ChallengeController::delete'], ['id_challenge'], ['POST' => 0], null, false, true, null]],
        231 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id_comment'], ['GET' => 0], null, false, true, null]],
        244 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id_comment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        252 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id_comment'], ['POST' => 0], null, false, true, null]],
        289 => [[['_route' => 'app_demandetravail_show', '_controller' => 'App\\Controller\\DemandetravailController::show'], ['idDemande'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'app_demandetravail_edit', '_controller' => 'App\\Controller\\DemandetravailController::edit'], ['idDemande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'app_demandetravail_delete', '_controller' => 'App\\Controller\\DemandetravailController::delete'], ['idDemande'], ['POST' => 0], null, false, true, null]],
        347 => [[['_route' => 'app_favoris_turoial_show', '_controller' => 'App\\Controller\\FavorisTuroialController::show'], ['id_favoris'], ['GET' => 0], null, false, true, null]],
        360 => [[['_route' => 'app_favoris_turoial_edit', '_controller' => 'App\\Controller\\FavorisTuroialController::edit'], ['id_favoris'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        368 => [[['_route' => 'app_favoris_turoial_delete', '_controller' => 'App\\Controller\\FavorisTuroialController::delete'], ['id_favoris'], ['POST' => 0], null, false, true, null]],
        398 => [[['_route' => 'app_grosmots_show', '_controller' => 'App\\Controller\\GrosmotsController::show'], ['idMot'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => 'app_grosmots_edit', '_controller' => 'App\\Controller\\GrosmotsController::edit'], ['idMot'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        419 => [[['_route' => 'app_grosmots_delete', '_controller' => 'App\\Controller\\GrosmotsController::delete'], ['idMot'], ['POST' => 0], null, false, true, null]],
        452 => [[['_route' => 'app_lignepanier_show', '_controller' => 'App\\Controller\\LignepanierController::show'], ['idlignepanier'], ['GET' => 0], null, false, true, null]],
        465 => [[['_route' => 'app_lignepanier_edit', '_controller' => 'App\\Controller\\LignepanierController::edit'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        473 => [[['_route' => 'app_lignepanier_delete', '_controller' => 'App\\Controller\\LignepanierController::delete'], ['idlignepanier'], ['POST' => 0], null, false, true, null]],
        510 => [[['_route' => 'app_offretravail_show', '_controller' => 'App\\Controller\\OffretravailController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        523 => [[['_route' => 'app_offretravail_edit', '_controller' => 'App\\Controller\\OffretravailController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        531 => [[['_route' => 'app_offretravail_delete', '_controller' => 'App\\Controller\\OffretravailController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        559 => [[['_route' => 'app_offretravailarchive_show', '_controller' => 'App\\Controller\\OffretravailarchiveController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        572 => [[['_route' => 'app_offretravailarchive_edit', '_controller' => 'App\\Controller\\OffretravailarchiveController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        580 => [[['_route' => 'app_offretravailarchive_delete', '_controller' => 'App\\Controller\\OffretravailarchiveController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        615 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['idpanier'], ['GET' => 0], null, false, true, null]],
        628 => [[['_route' => 'app_panier_edit', '_controller' => 'App\\Controller\\PanierController::edit'], ['idpanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        636 => [[['_route' => 'app_panier_delete', '_controller' => 'App\\Controller\\PanierController::delete'], ['idpanier'], ['POST' => 0], null, false, true, null]],
        668 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id_participation'], ['GET' => 0], null, false, true, null]],
        681 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        689 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id_participation'], ['POST' => 0], null, false, true, null]],
        717 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id_post'], ['GET' => 0], null, false, true, null]],
        730 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        738 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id_post'], ['POST' => 0], null, false, true, null]],
        754 => [[['_route' => 'app_post_like_index', '_controller' => 'App\\Controller\\PostLikeController::index'], [], ['GET' => 0], null, true, false, null]],
        774 => [[['_route' => 'app_post_like_show', '_controller' => 'App\\Controller\\PostLikeController::show'], ['id_like'], ['GET' => 0], null, false, true, null]],
        787 => [[['_route' => 'app_post_like_edit', '_controller' => 'App\\Controller\\PostLikeController::edit'], ['id_like'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        795 => [[['_route' => 'app_post_like_delete', '_controller' => 'App\\Controller\\PostLikeController::delete'], ['id_like'], ['POST' => 0], null, false, true, null]],
        825 => [[['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        838 => [[['_route' => 'app_produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        846 => [[['_route' => 'app_produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        875 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['id_rating'], ['GET' => 0], null, false, true, null]],
        888 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['id_rating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        896 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['id_rating'], ['POST' => 0], null, false, true, null]],
        926 => [[['_route' => 'app_tutoriel_show', '_controller' => 'App\\Controller\\TutorielController::show'], ['id_tutoriel'], ['GET' => 0], null, false, true, null]],
        939 => [[['_route' => 'app_tutoriel_edit', '_controller' => 'App\\Controller\\TutorielController::edit'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        947 => [[['_route' => 'app_tutoriel_delete', '_controller' => 'App\\Controller\\TutorielController::delete'], ['id_tutoriel'], ['POST' => 0], null, false, true, null]],
        977 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id_video'], ['GET' => 0], null, false, true, null]],
        990 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        998 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id_video'], ['POST' => 0], null, false, true, null]],
        1021 => [[['_route' => 'app_view_show', '_controller' => 'App\\Controller\\ViewController::show'], ['id_view'], ['GET' => 0], null, false, true, null]],
        1035 => [[['_route' => 'app_view_edit', '_controller' => 'App\\Controller\\ViewController::edit'], ['id_view'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1044 => [[['_route' => 'app_view_delete', '_controller' => 'App\\Controller\\ViewController::delete'], ['id_view'], ['POST' => 0], null, false, true, null]],
        1086 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1107 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1154 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1169 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1190 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1204 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1215 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
