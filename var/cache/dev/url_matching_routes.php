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
        '/challenge' => [[['_route' => 'app_challenge_index', '_controller' => 'App\\Controller\\ChallengeController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/challenge/new' => [[['_route' => 'app_challenge_new', '_controller' => 'App\\Controller\\ChallengeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/demandetravail' => [[['_route' => 'app_demandetravail_index', '_controller' => 'App\\Controller\\DemandetravailController::index'], null, ['GET' => 0], null, true, false, null]],
        '/demandetravail/new' => [[['_route' => 'app_demandetravail_new', '_controller' => 'App\\Controller\\DemandetravailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/tutoriel' => [[['_route' => 'app_tutoriel_index', '_controller' => 'App\\Controller\\TutorielController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/tutoriel/back' => [[['_route' => 'app_tutoriel_index_back', '_controller' => 'App\\Controller\\TutorielController::indexback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tutoriel/showfavoris' => [[['_route' => 'app_tutoriel_favoris', '_controller' => 'App\\Controller\\TutorielController::showfavoris'], null, ['GET' => 0], null, false, false, null]],
        '/tutoriel/new' => [[['_route' => 'app_tutoriel_new', '_controller' => 'App\\Controller\\TutorielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/video' => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/view' => [[['_route' => 'app_view_index', '_controller' => 'App\\Controller\\ViewController::index'], null, ['GET' => 0], null, true, false, null]],
        '/view/new' => [[['_route' => 'app_view_new', '_controller' => 'App\\Controller\\ViewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/ajax' => [[['_route' => 'ajax_route', '_controller' => 'App\\Controller\\AjaxController::ajaxAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|llusers/([^/]++)(?'
                        .'|(*:31)'
                        .'|/edit(*:43)'
                        .'|(*:50)'
                    .')'
                    .'|utocomplete/([^/]++)(*:78)'
                .')'
                .'|/ban/([^/]++)(?'
                    .'|(*:102)'
                    .'|/edit(*:115)'
                    .'|(*:123)'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:156)'
                        .'|/edit(*:169)'
                        .'|(*:177)'
                    .')'
                    .'|hallenge/(?'
                        .'|([^/]++)/show(*:211)'
                        .'|edit/([^/]++)(*:232)'
                        .'|([^/]++)/delete(*:255)'
                    .')'
                    .'|omment/([^/]++)(?'
                        .'|(*:282)'
                        .'|/edit(*:295)'
                        .'|(*:303)'
                    .')'
                .')'
                .'|/demandetravail/([^/]++)(?'
                    .'|(*:340)'
                    .'|/edit(*:353)'
                    .'|(*:361)'
                .')'
                .'|/favoris/turoial/Tutoriel/(?'
                    .'|addfavori/([^/]++)(*:417)'
                    .'|removefavori/([^/]++)(*:446)'
                .')'
                .'|/grosmots/([^/]++)(?'
                    .'|(*:476)'
                    .'|/edit(*:489)'
                    .'|(*:497)'
                .')'
                .'|/lignepanier/([^/]++)(?'
                    .'|(*:530)'
                    .'|/edit(*:543)'
                    .'|(*:551)'
                .')'
                .'|/offretravail(?'
                    .'|/([^/]++)(?'
                        .'|(*:588)'
                        .'|/edit(*:601)'
                        .'|(*:609)'
                    .')'
                    .'|archive/([^/]++)(?'
                        .'|(*:637)'
                        .'|/edit(*:650)'
                        .'|(*:658)'
                    .')'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/([^/]++)(?'
                            .'|(*:693)'
                            .'|/edit(*:706)'
                            .'|(*:714)'
                        .')'
                        .'|rticipation/([^/]++)(?'
                            .'|(*:746)'
                            .'|/(?'
                                .'|edit(*:762)'
                                .'|delete(*:776)'
                            .')'
                        .')'
                    .')'
                    .'|ost/(?'
                        .'|([^/]++)(?'
                            .'|(*:805)'
                            .'|/edit(*:818)'
                            .'|(*:826)'
                        .')'
                        .'|like(?'
                            .'|(*:842)'
                            .'|/([^/]++)(?'
                                .'|(*:862)'
                                .'|/edit(*:875)'
                                .'|(*:883)'
                            .')'
                        .')'
                    .')'
                    .'|roduits/([^/]++)(?'
                        .'|(*:913)'
                        .'|/edit(*:926)'
                        .'|(*:934)'
                    .')'
                .')'
                .'|/rating/(?'
                    .'|([^/]++)(?'
                        .'|(*:966)'
                        .'|/edit(*:979)'
                        .'|(*:987)'
                    .')'
                    .'|new/([^/]++)/([^/]++)(*:1017)'
                    .'|tutoriel/new/([^/]++)/([^/]++)(*:1056)'
                .')'
                .'|/tutoriel/(?'
                    .'|([^/]++)(?'
                        .'|(*:1090)'
                        .'|/edit(*:1104)'
                    .')'
                    .'|delete/([^/]++)(*:1129)'
                .')'
                .'|/vi(?'
                    .'|deo/(?'
                        .'|new/([^/]++)(*:1164)'
                        .'|([^/]++)(?'
                            .'|(*:1184)'
                            .'|/edit(*:1198)'
                        .')'
                        .'|delete/([^/]++)(*:1223)'
                    .')'
                    .'|ew/([^/]++)(?'
                        .'|(*:1247)'
                        .'|/edit(*:1261)'
                        .'|(*:1270)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1309)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1349)'
                    .'|wdt/([^/]++)(*:1370)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1417)'
                            .'|router(*:1432)'
                            .'|exception(?'
                                .'|(*:1453)'
                                .'|\\.css(*:1467)'
                            .')'
                        .')'
                        .'|(*:1478)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_allusers_show', '_controller' => 'App\\Controller\\AllusersController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        43 => [[['_route' => 'app_allusers_edit', '_controller' => 'App\\Controller\\AllusersController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        50 => [[['_route' => 'app_allusers_delete', '_controller' => 'App\\Controller\\AllusersController::delete'], ['id_user'], ['POST' => 0], null, false, true, null]],
        78 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        102 => [[['_route' => 'app_ban_show', '_controller' => 'App\\Controller\\BanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        115 => [[['_route' => 'app_ban_edit', '_controller' => 'App\\Controller\\BanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        123 => [[['_route' => 'app_ban_delete', '_controller' => 'App\\Controller\\BanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        156 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id_category'], ['GET' => 0], null, false, true, null]],
        169 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id_category'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        177 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id_category'], ['POST' => 0], null, false, true, null]],
        211 => [[['_route' => 'app_challenge_show', '_controller' => 'App\\Controller\\ChallengeController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        232 => [[['_route' => 'app_challenge_edit', '_controller' => 'App\\Controller\\ChallengeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        255 => [[['_route' => 'app_challenge_delete', '_controller' => 'App\\Controller\\ChallengeController::delete'], ['id_challenge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        282 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id_comment'], ['GET' => 0], null, false, true, null]],
        295 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id_comment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        303 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id_comment'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_demandetravail_show', '_controller' => 'App\\Controller\\DemandetravailController::show'], ['idDemande'], ['GET' => 0], null, false, true, null]],
        353 => [[['_route' => 'app_demandetravail_edit', '_controller' => 'App\\Controller\\DemandetravailController::edit'], ['idDemande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        361 => [[['_route' => 'app_demandetravail_delete', '_controller' => 'App\\Controller\\DemandetravailController::delete'], ['idDemande'], ['POST' => 0], null, false, true, null]],
        417 => [[['_route' => 'app_favoris_tutoriel_new', '_controller' => 'App\\Controller\\FavorisTuroialController::new'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        446 => [[['_route' => 'app_favoris_turoial_delete', '_controller' => 'App\\Controller\\FavorisTuroialController::delete'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        476 => [[['_route' => 'app_grosmots_show', '_controller' => 'App\\Controller\\GrosmotsController::show'], ['idMot'], ['GET' => 0], null, false, true, null]],
        489 => [[['_route' => 'app_grosmots_edit', '_controller' => 'App\\Controller\\GrosmotsController::edit'], ['idMot'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        497 => [[['_route' => 'app_grosmots_delete', '_controller' => 'App\\Controller\\GrosmotsController::delete'], ['idMot'], ['POST' => 0], null, false, true, null]],
        530 => [[['_route' => 'app_lignepanier_show', '_controller' => 'App\\Controller\\LignepanierController::show'], ['idlignepanier'], ['GET' => 0], null, false, true, null]],
        543 => [[['_route' => 'app_lignepanier_edit', '_controller' => 'App\\Controller\\LignepanierController::edit'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        551 => [[['_route' => 'app_lignepanier_delete', '_controller' => 'App\\Controller\\LignepanierController::delete'], ['idlignepanier'], ['POST' => 0], null, false, true, null]],
        588 => [[['_route' => 'app_offretravail_show', '_controller' => 'App\\Controller\\OffretravailController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        601 => [[['_route' => 'app_offretravail_edit', '_controller' => 'App\\Controller\\OffretravailController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        609 => [[['_route' => 'app_offretravail_delete', '_controller' => 'App\\Controller\\OffretravailController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        637 => [[['_route' => 'app_offretravailarchive_show', '_controller' => 'App\\Controller\\OffretravailarchiveController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        650 => [[['_route' => 'app_offretravailarchive_edit', '_controller' => 'App\\Controller\\OffretravailarchiveController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        658 => [[['_route' => 'app_offretravailarchive_delete', '_controller' => 'App\\Controller\\OffretravailarchiveController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        693 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['idpanier'], ['GET' => 0], null, false, true, null]],
        706 => [[['_route' => 'app_panier_edit', '_controller' => 'App\\Controller\\PanierController::edit'], ['idpanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        714 => [[['_route' => 'app_panier_delete', '_controller' => 'App\\Controller\\PanierController::delete'], ['idpanier'], ['POST' => 0], null, false, true, null]],
        746 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id_participation'], ['GET' => 0], null, false, true, null]],
        762 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        776 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        805 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id_post'], ['GET' => 0], null, false, true, null]],
        818 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        826 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id_post'], ['POST' => 0], null, false, true, null]],
        842 => [[['_route' => 'app_post_like_index', '_controller' => 'App\\Controller\\PostLikeController::index'], [], ['GET' => 0], null, true, false, null]],
        862 => [[['_route' => 'app_post_like_show', '_controller' => 'App\\Controller\\PostLikeController::show'], ['id_like'], ['GET' => 0], null, false, true, null]],
        875 => [[['_route' => 'app_post_like_edit', '_controller' => 'App\\Controller\\PostLikeController::edit'], ['id_like'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        883 => [[['_route' => 'app_post_like_delete', '_controller' => 'App\\Controller\\PostLikeController::delete'], ['id_like'], ['POST' => 0], null, false, true, null]],
        913 => [[['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        926 => [[['_route' => 'app_produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        934 => [[['_route' => 'app_produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        966 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['id_rating'], ['GET' => 0], null, false, true, null]],
        979 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['id_rating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        987 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['id_rating'], ['POST' => 0], null, false, true, null]],
        1017 => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], ['rating', 'idChallenge'], null, null, false, true, null]],
        1056 => [[['_route' => 'app_rating_tutoriel_new', '_controller' => 'App\\Controller\\RatingTutorielController::new'], ['rating', 'idTutoriel'], null, null, false, true, null]],
        1090 => [[['_route' => 'app_tutoriel_show', '_controller' => 'App\\Controller\\TutorielController::show'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1104 => [[['_route' => 'app_tutoriel_edit', '_controller' => 'App\\Controller\\TutorielController::edit'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1129 => [[['_route' => 'app_tutoriel_delete', '_controller' => 'App\\Controller\\TutorielController::delete'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1164 => [[['_route' => 'app_video_new', '_controller' => 'App\\Controller\\VideoController::new'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1184 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id_video'], ['GET' => 0], null, false, true, null]],
        1198 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1223 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1247 => [[['_route' => 'app_view_show', '_controller' => 'App\\Controller\\ViewController::show'], ['id_view'], ['GET' => 0], null, false, true, null]],
        1261 => [[['_route' => 'app_view_edit', '_controller' => 'App\\Controller\\ViewController::edit'], ['id_view'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1270 => [[['_route' => 'app_view_delete', '_controller' => 'App\\Controller\\ViewController::delete'], ['id_view'], ['POST' => 0], null, false, true, null]],
        1309 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1349 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1370 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1417 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1432 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1453 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1467 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1478 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
