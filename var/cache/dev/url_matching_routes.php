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
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/challenge' => [[['_route' => 'app_challenge_index', '_controller' => 'App\\Controller\\ChallengeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/challenge/new' => [[['_route' => 'app_challenge_new', '_controller' => 'App\\Controller\\ChallengeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/demandetravail' => [[['_route' => 'app_demandetravail_index', '_controller' => 'App\\Controller\\DemandetravailController::index'], null, ['GET' => 0], null, true, false, null]],
        '/demandetravail/chercher' => [[['_route' => 'app_demande_travail_chercheroffre', '_controller' => 'App\\Controller\\DemandetravailController::chercheroffre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/demandetravail/offressimilaires' => [[['_route' => 'app_demandetravail_offressimilaires', '_controller' => 'App\\Controller\\DemandetravailController::offressimilaires'], null, ['GET' => 0], null, false, false, null]],
        '/demandetravail/new' => [[['_route' => 'app_demandetravail_new', '_controller' => 'App\\Controller\\DemandetravailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/favoris/turoial' => [[['_route' => 'app_favoris_turoial_index', '_controller' => 'App\\Controller\\FavorisTuroialController::index'], null, ['GET' => 0], null, true, false, null]],
        '/favoris/turoial/new' => [[['_route' => 'app_favoris_turoial_new', '_controller' => 'App\\Controller\\FavorisTuroialController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/grosmots' => [[['_route' => 'app_grosmots_index', '_controller' => 'App\\Controller\\GrosmotsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/grosmots/new' => [[['_route' => 'app_grosmots_new', '_controller' => 'App\\Controller\\GrosmotsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/json/users' => [[['_route' => 'app_json_index', '_controller' => 'App\\Controller\\JsonController::index'], null, ['GET' => 0], null, false, false, null]],
        '/json/bans' => [[['_route' => 'app_json_indexb', '_controller' => 'App\\Controller\\JsonController::indexb'], null, ['GET' => 0], null, false, false, null]],
        '/json/new' => [[['_route' => 'app_json_new', '_controller' => 'App\\Controller\\JsonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/json/newb' => [[['_route' => 'app_json_newb', '_controller' => 'App\\Controller\\JsonController::newb'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lignepanier' => [[['_route' => 'app_lignepanier_index', '_controller' => 'App\\Controller\\LignepanierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lignepanier/new' => [[['_route' => 'app_lignepanier_new', '_controller' => 'App\\Controller\\LignepanierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offretravail' => [[['_route' => 'app_offretravail_index', '_controller' => 'App\\Controller\\OffretravailController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offretravail/true' => [[['_route' => 'app_offretravail_notiftrue', '_controller' => 'App\\Controller\\OffretravailController::notiftrue'], null, ['POST' => 0], null, false, false, null]],
        '/offretravail/demandessimilaires' => [[['_route' => 'app_offretravail_demandessimilaires', '_controller' => 'App\\Controller\\OffretravailController::demandessimilaires'], null, ['GET' => 0], null, false, false, null]],
        '/offretravail/chercherdemande' => [[['_route' => 'app_offretravail_chercherdemande', '_controller' => 'App\\Controller\\OffretravailController::chercherdemande'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offretravail/new' => [[['_route' => 'app_offretravail_new', '_controller' => 'App\\Controller\\OffretravailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offretravailarchive' => [[['_route' => 'app_offretravailarchive_index', '_controller' => 'App\\Controller\\OffretravailarchiveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/new' => [[['_route' => 'newjson', '_controller' => 'App\\Controller\\OffretravailmobileController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier/new' => [[['_route' => 'app_panier_new', '_controller' => 'App\\Controller\\PanierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/like/new' => [[['_route' => 'app_post_like_new', '_controller' => 'App\\Controller\\PostLikeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits/new' => [[['_route' => 'app_produits_new', '_controller' => 'App\\Controller\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|omment/([^/]++)(?'
                        .'|(*:213)'
                        .'|/edit(*:226)'
                        .'|(*:234)'
                    .')'
                .')'
                .'|/demandetravail/([^/]++)(?'
                    .'|/(?'
                        .'|mail(*:279)'
                        .'|edit(*:291)'
                    .')'
                    .'|(*:300)'
                .')'
                .'|/favoris/turoial/([^/]++)(?'
                    .'|(*:337)'
                    .'|/edit(*:350)'
                    .'|(*:358)'
                .')'
                .'|/grosmots/([^/]++)(?'
                    .'|(*:388)'
                    .'|/edit(*:401)'
                    .'|(*:409)'
                .')'
                .'|/json/(?'
                    .'|([^/]++)(?'
                        .'|(*:438)'
                        .'|/editb(*:452)'
                    .')'
                    .'|ban/([^/]++)(*:473)'
                    .'|([^/]++)/edit(*:494)'
                    .'|deleteuser/([^/]++)(*:521)'
                    .'|alloffres(*:538)'
                    .'|mesoffres(*:555)'
                .')'
                .'|/lignepanier/([^/]++)(?'
                    .'|(*:588)'
                    .'|/edit(*:601)'
                    .'|(*:609)'
                .')'
                .'|/offretravail(?'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|mail(*:654)'
                            .'|edit(*:666)'
                        .')'
                        .'|(*:675)'
                    .')'
                    .'|archive(?'
                        .'|/(?'
                            .'|([^/]++)(*:706)'
                            .'|new(*:717)'
                            .'|([^/]++)(*:733)'
                        .')'
                        .'|delete/([^/]++)(*:757)'
                    .')'
                .')'
                .'|/([^/]++)(?'
                    .'|/editjson(*:788)'
                    .'|(*:796)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier(?'
                            .'|(*:821)'
                            .'|/([^/]++)(?'
                                .'|(*:841)'
                                .'|/edit(*:854)'
                                .'|(*:862)'
                            .')'
                        .')'
                        .'|rticipation(?'
                            .'|(*:886)'
                            .'|/([^/]++)(?'
                                .'|(*:906)'
                                .'|/edit(*:919)'
                                .'|(*:927)'
                            .')'
                        .')'
                    .')'
                    .'|ost(?'
                        .'|(*:944)'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|(*:967)'
                                .'|/edit(*:980)'
                                .'|(*:988)'
                            .')'
                            .'|like(?'
                                .'|(*:1004)'
                                .'|/([^/]++)(?'
                                    .'|(*:1025)'
                                    .'|/edit(*:1039)'
                                    .'|(*:1048)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|roduits(?'
                        .'|(*:1071)'
                        .'|/([^/]++)(?'
                            .'|(*:1092)'
                            .'|/edit(*:1106)'
                            .'|(*:1115)'
                        .')'
                    .')'
                .')'
                .'|/rating(?'
                    .'|(*:1137)'
                    .'|/([^/]++)(?'
                        .'|(*:1158)'
                        .'|/edit(*:1172)'
                        .'|(*:1181)'
                    .')'
                .')'
                .'|/sms(?'
                    .'|(*:1199)'
                    .'|1(*:1209)'
                .')'
                .'|/dashboard(*:1229)'
                .'|/tutoriel(?'
                    .'|(*:1250)'
                    .'|/([^/]++)(?'
                        .'|(*:1271)'
                        .'|/edit(*:1285)'
                        .'|(*:1294)'
                    .')'
                .')'
                .'|/vi(?'
                    .'|deo(?'
                        .'|(*:1317)'
                        .'|/([^/]++)(?'
                            .'|(*:1338)'
                            .'|/edit(*:1352)'
                            .'|(*:1361)'
                        .')'
                    .')'
                    .'|ew(?'
                        .'|(*:1377)'
                        .'|/([^/]++)(?'
                            .'|(*:1398)'
                            .'|/edit(*:1412)'
                            .'|(*:1421)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1464)'
                    .'|wdt/([^/]++)(*:1485)'
                    .'|profiler(?'
                        .'|(*:1505)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1544)'
                                .'|router(*:1559)'
                                .'|exception(?'
                                    .'|(*:1580)'
                                    .'|\\.css(*:1594)'
                                .')'
                            .')'
                            .'|(*:1605)'
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
        213 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id_comment'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id_comment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id_comment'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_demandetravail_mail', '_controller' => 'App\\Controller\\DemandetravailController::sendEmail'], ['idOffre'], ['GET' => 0], null, false, false, null]],
        291 => [[['_route' => 'app_demandetravail_edit', '_controller' => 'App\\Controller\\DemandetravailController::edit'], ['idDemande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [
            [['_route' => 'app_demandetravail_show', '_controller' => 'App\\Controller\\DemandetravailController::show'], ['idDemande'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_demandetravail_delete', '_controller' => 'App\\Controller\\DemandetravailController::delete'], ['idDemande'], ['POST' => 0], null, false, true, null],
        ],
        337 => [[['_route' => 'app_favoris_turoial_show', '_controller' => 'App\\Controller\\FavorisTuroialController::show'], ['id_favoris'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_favoris_turoial_edit', '_controller' => 'App\\Controller\\FavorisTuroialController::edit'], ['id_favoris'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'app_favoris_turoial_delete', '_controller' => 'App\\Controller\\FavorisTuroialController::delete'], ['id_favoris'], ['POST' => 0], null, false, true, null]],
        388 => [[['_route' => 'app_grosmots_show', '_controller' => 'App\\Controller\\GrosmotsController::show'], ['idMot'], ['GET' => 0], null, false, true, null]],
        401 => [[['_route' => 'app_grosmots_edit', '_controller' => 'App\\Controller\\GrosmotsController::edit'], ['idMot'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        409 => [[['_route' => 'app_grosmots_delete', '_controller' => 'App\\Controller\\GrosmotsController::delete'], ['idMot'], ['POST' => 0], null, false, true, null]],
        438 => [[['_route' => 'app_json_show', '_controller' => 'App\\Controller\\JsonController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        452 => [[['_route' => 'app_json_editb', '_controller' => 'App\\Controller\\JsonController::editb'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        473 => [[['_route' => 'app_ban_show', '_controller' => 'App\\Controller\\JsonController::showb'], ['id'], ['GET' => 0], null, false, true, null]],
        494 => [[['_route' => 'app_json_edit', '_controller' => 'App\\Controller\\JsonController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        521 => [[['_route' => 'app_json_delete', '_controller' => 'App\\Controller\\JsonController::delete'], ['id_user'], null, null, false, true, null]],
        538 => [[['_route' => 'alloffresjson', '_controller' => 'App\\Controller\\OffretravailmobileController::index'], [], ['GET' => 0], null, false, false, null]],
        555 => [[['_route' => 'mesoffresjson', '_controller' => 'App\\Controller\\OffretravailmobileController::mesoffres'], [], ['GET' => 0], null, false, false, null]],
        588 => [[['_route' => 'app_lignepanier_show', '_controller' => 'App\\Controller\\LignepanierController::show'], ['idlignepanier'], ['GET' => 0], null, false, true, null]],
        601 => [[['_route' => 'app_lignepanier_edit', '_controller' => 'App\\Controller\\LignepanierController::edit'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        609 => [[['_route' => 'app_lignepanier_delete', '_controller' => 'App\\Controller\\LignepanierController::delete'], ['idlignepanier'], ['POST' => 0], null, false, true, null]],
        654 => [[['_route' => 'app_offretravail_mail', '_controller' => 'App\\Controller\\OffretravailController::sendEmail'], ['idDemande'], ['GET' => 0], null, false, false, null]],
        666 => [[['_route' => 'app_offretravail_edit', '_controller' => 'App\\Controller\\OffretravailController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        675 => [
            [['_route' => 'app_offretravail_show', '_controller' => 'App\\Controller\\OffretravailController::show'], ['idoffre'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_offretravail_delete', '_controller' => 'App\\Controller\\OffretravailController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null],
        ],
        706 => [[['_route' => 'app_offretravailarchive_recuperer', '_controller' => 'App\\Controller\\OffretravailarchiveController::recuperer'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        717 => [[['_route' => 'app_offretravailarchive_new', '_controller' => 'App\\Controller\\OffretravailarchiveController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        733 => [[['_route' => 'app_offretravailarchive_show', '_controller' => 'App\\Controller\\OffretravailarchiveController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        757 => [[['_route' => 'app_offretravailarchive_delete', '_controller' => 'App\\Controller\\OffretravailarchiveController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        788 => [[['_route' => 'editjson', '_controller' => 'App\\Controller\\OffretravailmobileController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        796 => [[['_route' => 'deletejson', '_controller' => 'App\\Controller\\OffretravailmobileController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        821 => [[['_route' => 'app_panier_index', '_controller' => 'App\\Controller\\PanierController::index'], [], ['GET' => 0], null, true, false, null]],
        841 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['idpanier'], ['GET' => 0], null, false, true, null]],
        854 => [[['_route' => 'app_panier_edit', '_controller' => 'App\\Controller\\PanierController::edit'], ['idpanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        862 => [[['_route' => 'app_panier_delete', '_controller' => 'App\\Controller\\PanierController::delete'], ['idpanier'], ['POST' => 0], null, false, true, null]],
        886 => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], [], ['GET' => 0], null, true, false, null]],
        906 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id_participation'], ['GET' => 0], null, false, true, null]],
        919 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        927 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id_participation'], ['POST' => 0], null, false, true, null]],
        944 => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], [], ['GET' => 0], null, true, false, null]],
        967 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id_post'], ['GET' => 0], null, false, true, null]],
        980 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        988 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id_post'], ['POST' => 0], null, false, true, null]],
        1004 => [[['_route' => 'app_post_like_index', '_controller' => 'App\\Controller\\PostLikeController::index'], [], ['GET' => 0], null, true, false, null]],
        1025 => [[['_route' => 'app_post_like_show', '_controller' => 'App\\Controller\\PostLikeController::show'], ['id_like'], ['GET' => 0], null, false, true, null]],
        1039 => [[['_route' => 'app_post_like_edit', '_controller' => 'App\\Controller\\PostLikeController::edit'], ['id_like'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1048 => [[['_route' => 'app_post_like_delete', '_controller' => 'App\\Controller\\PostLikeController::delete'], ['id_like'], ['POST' => 0], null, false, true, null]],
        1071 => [[['_route' => 'app_produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], [], ['GET' => 0], null, true, false, null]],
        1092 => [[['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1106 => [[['_route' => 'app_produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1115 => [[['_route' => 'app_produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        1137 => [[['_route' => 'app_rating_index', '_controller' => 'App\\Controller\\RatingController::index'], [], ['GET' => 0], null, true, false, null]],
        1158 => [[['_route' => 'app_rating_show', '_controller' => 'App\\Controller\\RatingController::show'], ['id_rating'], ['GET' => 0], null, false, true, null]],
        1172 => [[['_route' => 'app_rating_edit', '_controller' => 'App\\Controller\\RatingController::edit'], ['id_rating'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1181 => [[['_route' => 'app_rating_delete', '_controller' => 'App\\Controller\\RatingController::delete'], ['id_rating'], ['POST' => 0], null, false, true, null]],
        1199 => [[['_route' => 'app_sms', '_controller' => 'App\\Controller\\SmsController::index'], [], null, null, false, false, null]],
        1209 => [[['_route' => 'app_sms1', '_controller' => 'App\\Controller\\SmsController::sendSmsMessage'], [], null, null, false, false, null]],
        1229 => [[['_route' => 'app_dashboard_studiodashboard', '_controller' => 'App\\Controller\\StudiodashboardController::index'], [], ['GET' => 0], null, true, false, null]],
        1250 => [[['_route' => 'app_tutoriel_index', '_controller' => 'App\\Controller\\TutorielController::index'], [], ['GET' => 0], null, true, false, null]],
        1271 => [[['_route' => 'app_tutoriel_show', '_controller' => 'App\\Controller\\TutorielController::show'], ['id_tutoriel'], ['GET' => 0], null, false, true, null]],
        1285 => [[['_route' => 'app_tutoriel_edit', '_controller' => 'App\\Controller\\TutorielController::edit'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1294 => [[['_route' => 'app_tutoriel_delete', '_controller' => 'App\\Controller\\TutorielController::delete'], ['id_tutoriel'], ['POST' => 0], null, false, true, null]],
        1317 => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoController::index'], [], ['GET' => 0], null, true, false, null]],
        1338 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id_video'], ['GET' => 0], null, false, true, null]],
        1352 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1361 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id_video'], ['POST' => 0], null, false, true, null]],
        1377 => [[['_route' => 'app_view_index', '_controller' => 'App\\Controller\\ViewController::index'], [], ['GET' => 0], null, true, false, null]],
        1398 => [[['_route' => 'app_view_show', '_controller' => 'App\\Controller\\ViewController::show'], ['id_view'], ['GET' => 0], null, false, true, null]],
        1412 => [[['_route' => 'app_view_edit', '_controller' => 'App\\Controller\\ViewController::edit'], ['id_view'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1421 => [[['_route' => 'app_view_delete', '_controller' => 'App\\Controller\\ViewController::delete'], ['id_view'], ['POST' => 0], null, false, true, null]],
        1464 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1485 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1505 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        1544 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1559 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1580 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1594 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1605 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
