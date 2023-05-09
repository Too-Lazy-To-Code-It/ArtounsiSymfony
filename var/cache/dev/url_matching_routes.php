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
        '/challenge/back' => [[['_route' => 'app_challenge_index_back', '_controller' => 'App\\Controller\\ChallengeController::indexback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/challenge/calendar' => [[['_route' => 'app_challenge_calendar', '_controller' => 'App\\Controller\\ChallengeController::calendar'], null, null, null, false, false, null]],
        '/challenge/new' => [[['_route' => 'app_challenge_new', '_controller' => 'App\\Controller\\ChallengeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chat' => [[['_route' => 'chat_index', '_controller' => 'App\\Controller\\ChatBController::index'], null, null, null, false, false, null]],
        '/chat/message' => [[['_route' => 'chat_message', '_controller' => 'App\\Controller\\ChatBController::message'], null, null, null, false, false, null]],
        '/chat/frame' => [[['_route' => 'chat_frame', '_controller' => 'App\\Controller\\ChatBController::chatframe'], null, null, null, false, false, null]],
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
        '/tutoriel' => [[['_route' => 'app_tutoriel_index', '_controller' => 'App\\Controller\\TutorielController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/tutoriel/back' => [[['_route' => 'app_tutoriel_index_back', '_controller' => 'App\\Controller\\TutorielController::indexback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tutoriel/showfavoris' => [[['_route' => 'app_tutoriel_favoris', '_controller' => 'App\\Controller\\TutorielController::showfavoris'], null, ['GET' => 0], null, false, false, null]],
        '/tutoriel/new' => [[['_route' => 'app_tutoriel_new', '_controller' => 'App\\Controller\\TutorielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/showlisttutoriels' => [[['_route' => 'list_tutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::index'], null, null, null, false, false, null]],
        '/addTutoriel' => [[['_route' => 'addTutoriell', '_controller' => 'App\\Controller\\TutorielMobileController::addTutoriel'], null, null, null, false, false, null]],
        '/showbestTutoriels' => [[['_route' => 'showbestTutoriels', '_controller' => 'App\\Controller\\TutorielMobileController::showbestTutoriels'], null, null, null, false, false, null]],
        '/video' => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/view' => [[['_route' => 'app_view_index', '_controller' => 'App\\Controller\\ViewController::index'], null, ['GET' => 0], null, true, false, null]],
        '/view/new' => [[['_route' => 'app_view_new', '_controller' => 'App\\Controller\\ViewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/ajax' => [[['_route' => 'ajax_route', '_controller' => 'App\\Controller\\AjaxController::ajaxAction'], null, null, null, false, false, null]],
        '/tutoriel/show/names' => [[['_route' => 'app_tutoriel_names', '_controller' => 'App\\Controller\\TutorielController::names'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|llusers/([^/]++)(?'
                        .'|(*:31)'
                        .'|/edit(*:43)'
                        .'|(*:50)'
                    .')'
                    .'|dd(?'
                        .'|favoriTutoriel/([^/]++)/([^/]++)(*:95)'
                        .'|Video/([^/]++)(*:116)'
                    .')'
                    .'|utocomplete/([^/]++)(*:145)'
                .')'
                .'|/ban/([^/]++)(?'
                    .'|(*:170)'
                    .'|/edit(*:183)'
                    .'|(*:191)'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:224)'
                        .'|/edit(*:237)'
                        .'|(*:245)'
                    .')'
                    .'|h(?'
                        .'|allenge/(?'
                            .'|([^/]++)/showback(*:286)'
                            .'|edit/([^/]++)(*:307)'
                            .'|([^/]++)/(?'
                                .'|delete(*:333)'
                                .'|show(*:345)'
                            .')'
                        .')'
                        .'|eckfavoriTutoriel/([^/]++)/([^/]++)(*:390)'
                    .')'
                    .'|omment/([^/]++)(?'
                        .'|(*:417)'
                        .'|/edit(*:430)'
                        .'|(*:438)'
                    .')'
                .')'
                .'|/de(?'
                    .'|mandetravail/([^/]++)(?'
                        .'|(*:478)'
                        .'|/edit(*:491)'
                        .'|(*:499)'
                    .')'
                    .'|lete(?'
                        .'|tutoriel/([^/]++)(*:532)'
                        .'|Video/([^/]++)(*:554)'
                    .')'
                .')'
                .'|/r(?'
                    .'|emovefavoriTutoriel/([^/]++)/([^/]++)(*:606)'
                    .'|at(?'
                        .'|eTutoriel/([^/]++)/([^/]++)/([^/]++)(*:655)'
                        .'|ing/(?'
                            .'|new/([^/]++)/([^/]++)/([^/]++)(*:700)'
                            .'|tutoriel/new/([^/]++)/([^/]++)(*:738)'
                        .')'
                    .')'
                .')'
                .'|/fetch(?'
                    .'|CountFavorisTutoriel/([^/]++)(*:787)'
                    .'|AVGRateTutoriel/([^/]++)(*:819)'
                    .'|RateTutoriel/([^/]++)/([^/]++)(*:857)'
                .')'
                .'|/grosmots/([^/]++)(?'
                    .'|(*:887)'
                    .'|/edit(*:900)'
                    .'|(*:908)'
                .')'
                .'|/lignepanier/([^/]++)(?'
                    .'|(*:941)'
                    .'|/edit(*:954)'
                    .'|(*:962)'
                .')'
                .'|/offretravail(?'
                    .'|/([^/]++)(?'
                        .'|(*:999)'
                        .'|/edit(*:1012)'
                        .'|(*:1021)'
                    .')'
                    .'|archive/([^/]++)(?'
                        .'|(*:1050)'
                        .'|/edit(*:1064)'
                        .'|(*:1073)'
                    .')'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/([^/]++)(?'
                            .'|(*:1109)'
                            .'|/edit(*:1123)'
                            .'|(*:1132)'
                        .')'
                        .'|rticipation/([^/]++)(?'
                            .'|(*:1165)'
                            .'|/(?'
                                .'|edit(*:1182)'
                                .'|delete(*:1197)'
                            .')'
                        .')'
                    .')'
                    .'|ost/(?'
                        .'|([^/]++)(?'
                            .'|(*:1227)'
                            .'|/edit(*:1241)'
                            .'|(*:1250)'
                        .')'
                        .'|like(?'
                            .'|(*:1267)'
                            .'|/([^/]++)(?'
                                .'|(*:1288)'
                                .'|/edit(*:1302)'
                                .'|(*:1311)'
                            .')'
                        .')'
                    .')'
                    .'|roduits/([^/]++)(?'
                        .'|(*:1342)'
                        .'|/edit(*:1356)'
                        .'|(*:1365)'
                    .')'
                .')'
                .'|/tutoriel/(?'
                    .'|search/([^/]++)/([^/]++)(*:1413)'
                    .'|([^/]++)(*:1430)'
                    .'|back/([^/]++)(*:1452)'
                    .'|([^/]++)/edit(*:1474)'
                    .'|delete/([^/]++)(*:1498)'
                .')'
                .'|/show(?'
                    .'|tutoriel/([^/]++)(*:1533)'
                    .'|favorisTutoriels/([^/]++)(*:1567)'
                .')'
                .'|/updatetutoriel/([^/]++)(*:1601)'
                .'|/vi(?'
                    .'|deo/(?'
                        .'|new/([^/]++)(*:1635)'
                        .'|([^/]++)(?'
                            .'|(*:1655)'
                            .'|/edit(*:1669)'
                        .')'
                        .'|delete/([^/]++)(*:1694)'
                    .')'
                    .'|ew/([^/]++)(?'
                        .'|(*:1718)'
                        .'|/edit(*:1732)'
                        .'|(*:1741)'
                    .')'
                .')'
                .'|/modifyVideo/([^/]++)/([^/]++)(*:1782)'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1819)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1859)'
                    .'|wdt/([^/]++)(*:1880)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1927)'
                            .'|router(*:1942)'
                            .'|exception(?'
                                .'|(*:1963)'
                                .'|\\.css(*:1977)'
                            .')'
                        .')'
                        .'|(*:1988)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_allusers_show', '_controller' => 'App\\Controller\\AllusersController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        43 => [[['_route' => 'app_allusers_edit', '_controller' => 'App\\Controller\\AllusersController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        50 => [[['_route' => 'app_allusers_delete', '_controller' => 'App\\Controller\\AllusersController::delete'], ['id_user'], ['POST' => 0], null, false, true, null]],
        95 => [[['_route' => 'app_favoris_tutoriel_new', '_controller' => 'App\\Controller\\FavorisTuroialMobileController::new'], ['id_tutoriel', 'id_user'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        116 => [[['_route' => 'addVideo', '_controller' => 'App\\Controller\\VideoMobileController::new'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        145 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        170 => [[['_route' => 'app_ban_show', '_controller' => 'App\\Controller\\BanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        183 => [[['_route' => 'app_ban_edit', '_controller' => 'App\\Controller\\BanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        191 => [[['_route' => 'app_ban_delete', '_controller' => 'App\\Controller\\BanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        224 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id_category'], ['GET' => 0], null, false, true, null]],
        237 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id_category'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        245 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id_category'], ['POST' => 0], null, false, true, null]],
        286 => [[['_route' => 'app_challenge_show_back', '_controller' => 'App\\Controller\\ChallengeController::showback'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        307 => [[['_route' => 'app_challenge_edit', '_controller' => 'App\\Controller\\ChallengeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        333 => [[['_route' => 'app_challenge_delete', '_controller' => 'App\\Controller\\ChallengeController::delete'], ['id_challenge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        345 => [[['_route' => 'app_challenge_show', '_controller' => 'App\\Controller\\ChallengeController::show'], ['id'], null, null, false, false, null]],
        390 => [[['_route' => 'app_favoris_turoial_check', '_controller' => 'App\\Controller\\FavorisTuroialMobileController::check'], ['id_tutoriel', 'id_user'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        417 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id_comment'], ['GET' => 0], null, false, true, null]],
        430 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id_comment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        438 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id_comment'], ['POST' => 0], null, false, true, null]],
        478 => [[['_route' => 'app_demandetravail_show', '_controller' => 'App\\Controller\\DemandetravailController::show'], ['idDemande'], ['GET' => 0], null, false, true, null]],
        491 => [[['_route' => 'app_demandetravail_edit', '_controller' => 'App\\Controller\\DemandetravailController::edit'], ['idDemande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        499 => [[['_route' => 'app_demandetravail_delete', '_controller' => 'App\\Controller\\DemandetravailController::delete'], ['idDemande'], ['POST' => 0], null, false, true, null]],
        532 => [[['_route' => 'deleteTutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::deleteStudentJSON'], ['id'], null, null, false, true, null]],
        554 => [[['_route' => 'deleteVideo', '_controller' => 'App\\Controller\\VideoMobileController::deleteStudentJSON'], ['id'], null, null, false, true, null]],
        606 => [[['_route' => 'app_favoris_turoial_delete', '_controller' => 'App\\Controller\\FavorisTuroialMobileController::delete'], ['id_tutoriel', 'id_user'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        655 => [[['_route' => 'rateTutoriel', '_controller' => 'App\\Controller\\RatingTutorielMobileController::new'], ['rating', 'idTutoriel', 'idUser'], null, null, false, true, null]],
        700 => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], ['rating', 'idChallenge', 'idparticipator'], null, null, false, true, null]],
        738 => [[['_route' => 'app_rating_tutoriel_new', '_controller' => 'App\\Controller\\RatingTutorielController::new'], ['rating', 'idTutoriel'], null, null, false, true, null]],
        787 => [[['_route' => 'fetchCountFavorisTutoriel', '_controller' => 'App\\Controller\\FavorisTuroialMobileController::fetchCountFavorisTutoriel'], ['idTutoriel'], null, null, false, true, null]],
        819 => [[['_route' => 'fetchTutorielRates', '_controller' => 'App\\Controller\\RatingTutorielMobileController::fetchTutorielRates'], ['idTutoriel'], null, null, false, true, null]],
        857 => [[['_route' => 'fetchRateTutoriel', '_controller' => 'App\\Controller\\RatingTutorielMobileController::fetchRateTutoriel'], ['idTutoriel', 'idUser'], null, null, false, true, null]],
        887 => [[['_route' => 'app_grosmots_show', '_controller' => 'App\\Controller\\GrosmotsController::show'], ['idMot'], ['GET' => 0], null, false, true, null]],
        900 => [[['_route' => 'app_grosmots_edit', '_controller' => 'App\\Controller\\GrosmotsController::edit'], ['idMot'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        908 => [[['_route' => 'app_grosmots_delete', '_controller' => 'App\\Controller\\GrosmotsController::delete'], ['idMot'], ['POST' => 0], null, false, true, null]],
        941 => [[['_route' => 'app_lignepanier_show', '_controller' => 'App\\Controller\\LignepanierController::show'], ['idlignepanier'], ['GET' => 0], null, false, true, null]],
        954 => [[['_route' => 'app_lignepanier_edit', '_controller' => 'App\\Controller\\LignepanierController::edit'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        962 => [[['_route' => 'app_lignepanier_delete', '_controller' => 'App\\Controller\\LignepanierController::delete'], ['idlignepanier'], ['POST' => 0], null, false, true, null]],
        999 => [[['_route' => 'app_offretravail_show', '_controller' => 'App\\Controller\\OffretravailController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        1012 => [[['_route' => 'app_offretravail_edit', '_controller' => 'App\\Controller\\OffretravailController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1021 => [[['_route' => 'app_offretravail_delete', '_controller' => 'App\\Controller\\OffretravailController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1050 => [[['_route' => 'app_offretravailarchive_show', '_controller' => 'App\\Controller\\OffretravailarchiveController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        1064 => [[['_route' => 'app_offretravailarchive_edit', '_controller' => 'App\\Controller\\OffretravailarchiveController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1073 => [[['_route' => 'app_offretravailarchive_delete', '_controller' => 'App\\Controller\\OffretravailarchiveController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1109 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['idpanier'], ['GET' => 0], null, false, true, null]],
        1123 => [[['_route' => 'app_panier_edit', '_controller' => 'App\\Controller\\PanierController::edit'], ['idpanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1132 => [[['_route' => 'app_panier_delete', '_controller' => 'App\\Controller\\PanierController::delete'], ['idpanier'], ['POST' => 0], null, false, true, null]],
        1165 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id_participation'], ['GET' => 0], null, false, true, null]],
        1182 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1197 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1227 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id_post'], ['GET' => 0], null, false, true, null]],
        1241 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1250 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id_post'], ['POST' => 0], null, false, true, null]],
        1267 => [[['_route' => 'app_post_like_index', '_controller' => 'App\\Controller\\PostLikeController::index'], [], ['GET' => 0], null, true, false, null]],
        1288 => [[['_route' => 'app_post_like_show', '_controller' => 'App\\Controller\\PostLikeController::show'], ['id_like'], ['GET' => 0], null, false, true, null]],
        1302 => [[['_route' => 'app_post_like_edit', '_controller' => 'App\\Controller\\PostLikeController::edit'], ['id_like'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1311 => [[['_route' => 'app_post_like_delete', '_controller' => 'App\\Controller\\PostLikeController::delete'], ['id_like'], ['POST' => 0], null, false, true, null]],
        1342 => [[['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1356 => [[['_route' => 'app_produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1365 => [[['_route' => 'app_produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        1413 => [[['_route' => 'app_tutoriel_index_search', '_controller' => 'App\\Controller\\TutorielController::search'], ['keyword', 'category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1430 => [[['_route' => 'app_tutoriel_show', '_controller' => 'App\\Controller\\TutorielController::show'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1452 => [[['_route' => 'app_tutoriel_show_back', '_controller' => 'App\\Controller\\TutorielController::showback'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1474 => [[['_route' => 'app_tutoriel_edit', '_controller' => 'App\\Controller\\TutorielController::edit'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1498 => [[['_route' => 'app_tutoriel_delete', '_controller' => 'App\\Controller\\TutorielController::delete'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1533 => [[['_route' => 'tutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::TutorielId'], ['id'], null, null, false, true, null]],
        1567 => [[['_route' => 'showfavorisTutoriels', '_controller' => 'App\\Controller\\TutorielMobileController::showfavorisTutoriels'], ['id'], null, null, false, true, null]],
        1601 => [[['_route' => 'updateTutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::updateStudentJSON'], ['id'], null, null, false, true, null]],
        1635 => [[['_route' => 'app_videoo_new', '_controller' => 'App\\Controller\\VideoController::new'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1655 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id_video'], ['GET' => 0], null, false, true, null]],
        1669 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1694 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1718 => [[['_route' => 'app_view_show', '_controller' => 'App\\Controller\\ViewController::show'], ['id_view'], ['GET' => 0], null, false, true, null]],
        1732 => [[['_route' => 'app_view_edit', '_controller' => 'App\\Controller\\ViewController::edit'], ['id_view'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1741 => [[['_route' => 'app_view_delete', '_controller' => 'App\\Controller\\ViewController::delete'], ['id_view'], ['POST' => 0], null, false, true, null]],
        1782 => [[['_route' => 'modifyVideo', '_controller' => 'App\\Controller\\VideoMobileController::modifyvideo'], ['id_video', 'id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1819 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1859 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1880 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1927 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1942 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1963 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1977 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1988 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
