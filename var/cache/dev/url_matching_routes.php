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
        '/allusers/register' => [[['_route' => 'app_allusers_new', '_controller' => 'App\\Controller\\AllusersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/allusers/verify' => [[['_route' => 'app_allusers_verify', '_controller' => 'App\\Controller\\AllusersController::verify'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/allusers/verif' => [[['_route' => 'app_allusers_verif', '_controller' => 'App\\Controller\\AllusersController::verif'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/allusers/ve' => [[['_route' => 'app_allusers_ve', '_controller' => 'App\\Controller\\AllusersController::VE'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/allusers/vs' => [[['_route' => 'app_allusers_vs', '_controller' => 'App\\Controller\\AllusersController::VS'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ban' => [[['_route' => 'app_ban_index', '_controller' => 'App\\Controller\\BanController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ban/new' => [[['_route' => 'app_ban_new', '_controller' => 'App\\Controller\\BanController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
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
        '/Dashboard' => [[['_route' => 'app_Dashboard_index', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, true, false, null]],
        '/Dashboard/Dashboard' => [[['_route' => 'app_Dashboard_show', '_controller' => 'App\\Controller\\DashboardController::show'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/home/page' => [[['_route' => 'app_dashboard_home_page', '_controller' => 'App\\Controller\\DashboardHomePageController::index'], null, null, null, false, false, null]],
        '/demandetravail/chercher' => [[['_route' => 'app_demande_travail_chercheroffre', '_controller' => 'App\\Controller\\DemandetravailController::chercheroffre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/demandetravail/offressimilaires' => [[['_route' => 'app_demandetravail_offressimilaires', '_controller' => 'App\\Controller\\DemandetravailController::offressimilaires'], null, ['GET' => 0], null, false, false, null]],
        '/demandetravail/new' => [[['_route' => 'app_demandetravail_new', '_controller' => 'App\\Controller\\DemandetravailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/like/new' => [[['_route' => 'app_post_like_new', '_controller' => 'App\\Controller\\PostLikeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits/back' => [[['_route' => 'app_produits_back', '_controller' => 'App\\Controller\\ProduitsBackController::index'], null, null, null, false, false, null]],
        '/produits/new' => [[['_route' => 'app_produits_new', '_controller' => 'App\\Controller\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/TousLesproduits/mobile' => [[['_route' => 'ListeProduits', '_controller' => 'App\\Controller\\ProduitsMobileController::getProduits'], null, null, null, false, false, null]],
        '/ajouterProduitJSON/new' => [[['_route' => 'ajouterProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::ajouterProduitJSON'], null, null, null, false, false, null]],
        '/dashboard/mesoffres' => [[['_route' => 'app_dashboard_offres', '_controller' => 'App\\Controller\\StudiodashboardController::offres'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/mesdemandess' => [[['_route' => 'app_dashboard_demandes', '_controller' => 'App\\Controller\\StudiodashboardController::demandes'], null, ['GET' => 0], null, false, false, null]],
        '/tutoriel/back' => [[['_route' => 'app_tutoriel_index_back', '_controller' => 'App\\Controller\\TutorielController::indexback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tutoriel/showfavoris' => [[['_route' => 'app_tutoriel_favoris', '_controller' => 'App\\Controller\\TutorielController::showfavoris'], null, ['GET' => 0], null, false, false, null]],
        '/tutoriel/new' => [[['_route' => 'app_tutoriel_new', '_controller' => 'App\\Controller\\TutorielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoMobileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/view/new' => [[['_route' => 'app_view_new', '_controller' => 'App\\Controller\\ViewController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/tutoriel/show/names' => [[['_route' => 'app_tutoriel_names', '_controller' => 'App\\Controller\\TutorielController::names'], null, null, null, false, false, null]],
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
                    .'|hallenge/(?'
                        .'|edit/([^/]++)(*:170)'
                        .'|([^/]++)/delete(*:193)'
                    .')'
                    .'|omment/(?'
                        .'|new/([^/]++)(*:224)'
                        .'|([^/]++)(?'
                            .'|(*:243)'
                            .'|/edit(*:256)'
                            .'|(*:264)'
                        .')'
                    .')'
                .')'
                .'|/dashboard_home_page/([^/]++)(*:304)'
                .'|/postt/([^/]++)(*:327)'
                .'|/([^/]++)(*:344)'
                .'|/demandetravail(?'
                    .'|(*:370)'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|mail(*:398)'
                            .'|edit(*:410)'
                        .')'
                        .'|(*:419)'
                    .')'
                .')'
                .'|/explore(*:437)'
                .'|/favoris/turoial/Tutoriel/(?'
                    .'|addfavori/([^/]++)(*:492)'
                    .'|removefavori/([^/]++)(*:521)'
                .')'
                .'|/grosmots(?'
                    .'|(*:542)'
                    .'|/([^/]++)(?'
                        .'|(*:562)'
                        .'|/edit(*:575)'
                        .'|(*:583)'
                    .')'
                .')'
                .'|/home(*:598)'
                .'|/json/(?'
                    .'|([^/]++)(?'
                        .'|(*:626)'
                        .'|/editb(*:640)'
                    .')'
                    .'|ban/([^/]++)(*:661)'
                    .'|([^/]++)/edit(*:682)'
                    .'|deleteuser/([^/]++)(*:709)'
                    .'|alloffres(*:726)'
                    .'|mesoffres(*:743)'
                .')'
                .'|/lignepanier(?'
                    .'|(*:767)'
                    .'|/(?'
                        .'|showlignepanier/([^/]++)(*:803)'
                        .'|([^/]++)/edit(*:824)'
                        .'|deleteAjaxligne/([^/]++)(*:856)'
                    .')'
                .')'
                .'|/map(*:870)'
                .'|/offretravail(?'
                    .'|(*:894)'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|mail(*:922)'
                            .'|edit(*:934)'
                        .')'
                        .'|(*:943)'
                    .')'
                    .'|archive(?'
                        .'|(*:962)'
                        .'|/(?'
                            .'|([^/]++)(*:982)'
                            .'|new(*:993)'
                            .'|([^/]++)(*:1009)'
                        .')'
                        .'|delete/([^/]++)(*:1034)'
                    .')'
                .')'
                .'|/new(*:1049)'
                .'|/([^/]++)(?'
                    .'|/editjson(*:1079)'
                    .'|(*:1088)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/(?'
                            .'|showpanier/([^/]++)(*:1134)'
                            .'|panier/add/([^/]++)(*:1162)'
                            .'|viderpanier/([^/]++)(*:1191)'
                        .')'
                        .'|rticipation(?'
                            .'|(*:1215)'
                            .'|/([^/]++)(?'
                                .'|(*:1236)'
                                .'|/(?'
                                    .'|edit(*:1253)'
                                    .'|delete(*:1268)'
                                .')'
                            .')'
                        .')'
                        .'|yment(*:1285)'
                    .')'
                    .'|df22/([^/]++)(*:1308)'
                    .'|ost(?'
                        .'|(*:1323)'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|(*:1347)'
                                .'|/edit(*:1361)'
                                .'|(*:1370)'
                            .')'
                            .'|post/([^/]++)(*:1393)'
                            .'|like(?'
                                .'|(*:1409)'
                                .'|/([^/]++)(?'
                                    .'|(*:1430)'
                                    .'|/edit(*:1444)'
                                    .'|(*:1453)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout(*:1479)'
                    .'|ancel_url(*:1497)'
                .')'
                .'|/s(?'
                    .'|uccess\\-url/([^/]++)(*:1532)'
                    .'|howBack/([^/]++)(*:1557)'
                .')'
                .'|/newBack(*:1575)'
                .'|/([^/]++)/editBack(*:1602)'
                .'|/d(?'
                    .'|elete(?'
                        .'|Back/([^/]++)(*:1637)'
                        .'|tutoriel/([^/]++)(*:1663)'
                    .')'
                    .'|ashboard(*:1681)'
                .')'
                .'|/produits(?'
                    .'|(*:1703)'
                    .'|/([^/]++)(?'
                        .'|(*:1724)'
                        .'|/edit(*:1738)'
                        .'|(*:1747)'
                    .')'
                .')'
                .'|/ProduitMobile/([^/]++)(*:1781)'
                .'|/modif(?'
                    .'|ierProduitJSON/([^/]++)(*:1822)'
                    .'|yVideo/([^/]++)/([^/]++)(*:1855)'
                .')'
                .'|/s(?'
                    .'|upprimerProduitJSON/([^/]++)(*:1898)'
                    .'|earch(*:1912)'
                    .'|ms(?'
                        .'|(*:1926)'
                        .'|1(*:1936)'
                    .')'
                    .'|how(?'
                        .'|listtutoriels(*:1965)'
                        .'|tutoriel/([^/]++)(*:1991)'
                    .')'
                .')'
                .'|/tutoriel(?'
                    .'|(*:2014)'
                    .'|/(?'
                        .'|search/([^/]++)/([^/]++)(*:2051)'
                        .'|([^/]++)(*:2068)'
                        .'|back/([^/]++)(*:2090)'
                        .'|([^/]++)/edit(*:2112)'
                        .'|delete/([^/]++)(*:2136)'
                    .')'
                .')'
                .'|/addTutoriel(*:2159)'
                .'|/updatetutoriel/([^/]++)(*:2192)'
                .'|/([^/]++)(?'
                    .'|(*:2213)'
                    .'|/edit(*:2227)'
                .')'
                .'|/delete/([^/]++)(*:2253)'
                .'|/view(?'
                    .'|(*:2270)'
                    .'|/([^/]++)(?'
                        .'|(*:2291)'
                        .'|/edit(*:2305)'
                        .'|(*:2314)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:2353)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:2393)'
                    .'|wdt/([^/]++)(*:2414)'
                    .'|profiler(?'
                        .'|(*:2434)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:2473)'
                                .'|router(*:2488)'
                                .'|exception(?'
                                    .'|(*:2509)'
                                    .'|\\.css(*:2523)'
                                .')'
                            .')'
                            .'|(*:2534)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|utocomplete/([^/]++)(*:2571)'
                    .'|jax(*:2583)'
                .')'
                .'|/rating/(?'
                    .'|new/([^/]++)/([^/]++)/([^/]++)(*:2634)'
                    .'|tutoriel/new/([^/]++)/([^/]++)(*:2673)'
                .')'
                .'|/challenge/([^/]++)/show(*:2707)'
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
        170 => [[['_route' => 'app_challenge_edit', '_controller' => 'App\\Controller\\ChallengeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        193 => [[['_route' => 'app_challenge_delete', '_controller' => 'App\\Controller\\ChallengeController::delete'], ['id_challenge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        224 => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        243 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id_comment'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id_comment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [
            [['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::deleteCommentUserside'], ['id_comment'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_comment_dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deleteCommentAdminSide'], ['id_comment'], ['POST' => 0], null, false, true, null],
        ],
        304 => [[['_route' => 'app_post_details_Dashboard', '_controller' => 'App\\Controller\\DashboardHomePageController::showPostDetails'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        327 => [[['_route' => 'app_post_Dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deletePost'], ['id_post'], ['POST' => 0], null, false, true, null]],
        344 => [[['_route' => 'app_category_Dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deleteCategory'], ['id_category'], ['POST' => 0], null, false, true, null]],
        370 => [[['_route' => 'app_demandetravail_index', '_controller' => 'App\\Controller\\DemandetravailController::index'], [], ['GET' => 0], null, true, false, null]],
        398 => [[['_route' => 'app_demandetravail_mail', '_controller' => 'App\\Controller\\DemandetravailController::sendEmail'], ['idOffre'], ['GET' => 0], null, false, false, null]],
        410 => [[['_route' => 'app_demandetravail_edit', '_controller' => 'App\\Controller\\DemandetravailController::edit'], ['idDemande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        419 => [
            [['_route' => 'app_demandetravail_show', '_controller' => 'App\\Controller\\DemandetravailController::show'], ['idDemande'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_demandetravail_delete', '_controller' => 'App\\Controller\\DemandetravailController::delete'], ['idDemande'], ['POST' => 0], null, false, true, null],
        ],
        437 => [[['_route' => 'app_explore', '_controller' => 'App\\Controller\\ExploreController::index'], [], null, null, false, false, null]],
        492 => [[['_route' => 'app_favoris_tutoriel_new', '_controller' => 'App\\Controller\\FavorisTuroialController::new'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        521 => [[['_route' => 'app_favoris_turoial_delete', '_controller' => 'App\\Controller\\FavorisTuroialController::delete'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        542 => [[['_route' => 'app_grosmots_index', '_controller' => 'App\\Controller\\GrosmotsController::index'], [], ['GET' => 0], null, true, false, null]],
        562 => [[['_route' => 'app_grosmots_show', '_controller' => 'App\\Controller\\GrosmotsController::show'], ['idMot'], ['GET' => 0], null, false, true, null]],
        575 => [[['_route' => 'app_grosmots_edit', '_controller' => 'App\\Controller\\GrosmotsController::edit'], ['idMot'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        583 => [[['_route' => 'app_grosmots_delete', '_controller' => 'App\\Controller\\GrosmotsController::delete'], ['idMot'], ['POST' => 0], null, false, true, null]],
        598 => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], [], null, null, false, false, null]],
        626 => [[['_route' => 'app_json_show', '_controller' => 'App\\Controller\\JsonController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        640 => [[['_route' => 'app_json_editb', '_controller' => 'App\\Controller\\JsonController::editb'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        661 => [[['_route' => 'app_ban_show', '_controller' => 'App\\Controller\\JsonController::showb'], ['id'], ['GET' => 0], null, false, true, null]],
        682 => [[['_route' => 'app_json_edit', '_controller' => 'App\\Controller\\JsonController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        709 => [[['_route' => 'app_json_delete', '_controller' => 'App\\Controller\\JsonController::delete'], ['id_user'], null, null, false, true, null]],
        726 => [[['_route' => 'alloffresjson', '_controller' => 'App\\Controller\\OffretravailmobileController::index'], [], ['GET' => 0], null, false, false, null]],
        743 => [[['_route' => 'mesoffresjson', '_controller' => 'App\\Controller\\OffretravailmobileController::mesoffres'], [], ['GET' => 0], null, false, false, null]],
        767 => [[['_route' => 'app_lignepanier_index', '_controller' => 'App\\Controller\\LignepanierController::index'], [], ['GET' => 0], null, true, false, null]],
        803 => [[['_route' => 'app_lignepanier_show', '_controller' => 'App\\Controller\\LignepanierController::show'], ['idlignepanier'], ['GET' => 0], null, false, true, null]],
        824 => [[['_route' => 'app_lignepanier_edit', '_controller' => 'App\\Controller\\LignepanierController::edit'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        856 => [[['_route' => 'app_lignepanier_delete_with_ajax', '_controller' => 'App\\Controller\\LignepanierController::deleteWithAjax'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        870 => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\MapController::index'], [], null, null, false, false, null]],
        894 => [[['_route' => 'app_offretravail_index', '_controller' => 'App\\Controller\\OffretravailController::index'], [], ['GET' => 0], null, true, false, null]],
        922 => [[['_route' => 'app_offretravail_mail', '_controller' => 'App\\Controller\\OffretravailController::sendEmail'], ['idDemande'], ['GET' => 0], null, false, false, null]],
        934 => [[['_route' => 'app_offretravail_edit', '_controller' => 'App\\Controller\\OffretravailController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        943 => [
            [['_route' => 'app_offretravail_show', '_controller' => 'App\\Controller\\OffretravailController::show'], ['idoffre'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_offretravail_delete', '_controller' => 'App\\Controller\\OffretravailController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null],
        ],
        962 => [[['_route' => 'app_offretravailarchive_index', '_controller' => 'App\\Controller\\OffretravailarchiveController::index'], [], ['GET' => 0], null, true, false, null]],
        982 => [[['_route' => 'app_offretravailarchive_recuperer', '_controller' => 'App\\Controller\\OffretravailarchiveController::recuperer'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        993 => [[['_route' => 'app_offretravailarchive_new', '_controller' => 'App\\Controller\\OffretravailarchiveController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1009 => [[['_route' => 'app_offretravailarchive_show', '_controller' => 'App\\Controller\\OffretravailarchiveController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        1034 => [[['_route' => 'app_offretravailarchive_delete', '_controller' => 'App\\Controller\\OffretravailarchiveController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1049 => [[['_route' => 'newjson', '_controller' => 'App\\Controller\\OffretravailmobileController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1079 => [[['_route' => 'editjson', '_controller' => 'App\\Controller\\OffretravailmobileController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1088 => [[['_route' => 'deletejson', '_controller' => 'App\\Controller\\OffretravailmobileController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1134 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['idpanier'], ['GET' => 0], null, false, true, null]],
        1162 => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\PanierController::ajouterProduitAuPanier'], ['idproduit'], null, null, false, true, null]],
        1191 => [[['_route' => 'viderpanier', '_controller' => 'App\\Controller\\PanierController::ViderPanier'], ['idpanier'], null, null, false, true, null]],
        1215 => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], [], ['GET' => 0], null, true, false, null]],
        1236 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id_participation'], ['GET' => 0], null, false, true, null]],
        1253 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1268 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1285 => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], [], null, null, false, false, null]],
        1308 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\PaymentController::pdf'], ['idpanier'], null, null, false, true, null]],
        1323 => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], [], ['GET' => 0], null, true, false, null]],
        1347 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id_post'], ['GET' => 0], null, false, true, null]],
        1361 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1370 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id_post'], ['POST' => 0], null, false, true, null]],
        1393 => [[['_route' => 'app_post_details', '_controller' => 'App\\Controller\\PostController::showPostDetails'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1409 => [[['_route' => 'app_post_like_index', '_controller' => 'App\\Controller\\PostLikeController::index'], [], ['GET' => 0], null, true, false, null]],
        1430 => [[['_route' => 'app_post_like_show', '_controller' => 'App\\Controller\\PostLikeController::show'], ['id_like'], ['GET' => 0], null, false, true, null]],
        1444 => [[['_route' => 'app_post_like_edit', '_controller' => 'App\\Controller\\PostLikeController::edit'], ['id_like'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1453 => [[['_route' => 'app_post_like_delete', '_controller' => 'App\\Controller\\PostLikeController::delete'], ['id_like'], ['POST' => 0], null, false, true, null]],
        1479 => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::checkout'], [], null, null, false, false, null]],
        1497 => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\PaymentController::cancelUrl'], [], null, null, false, false, null]],
        1532 => [[['_route' => 'success-url', '_controller' => 'App\\Controller\\PaymentController::successUrl'], ['idpanier'], null, null, false, true, null]],
        1557 => [[['_route' => 'app_produitsBack_show', '_controller' => 'App\\Controller\\ProduitsBackController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1575 => [[['_route' => 'app_produits_back_new', '_controller' => 'App\\Controller\\ProduitsBackController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1602 => [[['_route' => 'app_produits_back_edit', '_controller' => 'App\\Controller\\ProduitsBackController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1637 => [[['_route' => 'app_produits_delete_back', '_controller' => 'App\\Controller\\ProduitsBackController::delete'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1663 => [[['_route' => 'deleteTutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::deleteStudentJSON'], ['id'], null, null, false, true, null]],
        1681 => [[['_route' => 'app_dashboard_studiodashboard', '_controller' => 'App\\Controller\\StudiodashboardController::index'], [], ['GET' => 0], null, true, false, null]],
        1703 => [[['_route' => 'app_produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], [], ['GET' => 0], null, true, false, null]],
        1724 => [[['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1738 => [[['_route' => 'app_produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1747 => [[['_route' => 'app_produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        1781 => [[['_route' => 'produit_par_id', '_controller' => 'App\\Controller\\ProduitsMobileController::ProduitId'], ['idproduit'], null, null, false, true, null]],
        1822 => [[['_route' => 'modifierProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::modifierProduitJSON'], ['idproduit'], null, null, false, true, null]],
        1855 => [[['_route' => 'app_video_new', '_controller' => 'App\\Controller\\VideoMobileController::modifyvideo'], ['id_video', 'id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1898 => [[['_route' => 'supprimerProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::supprimerProduitJSON'], ['idproduit'], null, null, false, true, null]],
        1912 => [[['_route' => 'app_search_post', '_controller' => 'App\\Controller\\SearchController::search'], [], null, null, false, false, null]],
        1926 => [[['_route' => 'app_sms', '_controller' => 'App\\Controller\\SmsController::index'], [], null, null, false, false, null]],
        1936 => [[['_route' => 'app_sms1', '_controller' => 'App\\Controller\\SmsController::sendSmsMessage'], [], null, null, false, false, null]],
        1965 => [[['_route' => 'list_tutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::index'], [], null, null, false, false, null]],
        1991 => [[['_route' => 'tutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::TutorielId'], ['id'], null, null, false, true, null]],
        2014 => [[['_route' => 'app_tutoriel_index', '_controller' => 'App\\Controller\\TutorielController::index'], [], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        2051 => [[['_route' => 'app_tutoriel_index_search', '_controller' => 'App\\Controller\\TutorielController::search'], ['keyword', 'category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2068 => [[['_route' => 'app_tutoriel_show', '_controller' => 'App\\Controller\\TutorielController::show'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2090 => [[['_route' => 'app_tutoriel_show_back', '_controller' => 'App\\Controller\\TutorielController::showback'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2112 => [[['_route' => 'app_tutoriel_edit', '_controller' => 'App\\Controller\\TutorielController::edit'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2136 => [[['_route' => 'app_tutoriel_delete', '_controller' => 'App\\Controller\\TutorielController::delete'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2159 => [[['_route' => 'addTutoriell', '_controller' => 'App\\Controller\\TutorielMobileController::addTutoriel'], [], null, null, false, false, null]],
        2192 => [[['_route' => 'updateTutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::updateStudentJSON'], ['id'], null, null, false, true, null]],
        2213 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoMobileController::show'], ['id_video'], ['GET' => 0], null, false, true, null]],
        2227 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoMobileController::edit'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2253 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoMobileController::delete'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2270 => [[['_route' => 'app_view_index', '_controller' => 'App\\Controller\\ViewController::index'], [], ['GET' => 0], null, true, false, null]],
        2291 => [[['_route' => 'app_view_show', '_controller' => 'App\\Controller\\ViewController::show'], ['id_view'], ['GET' => 0], null, false, true, null]],
        2305 => [[['_route' => 'app_view_edit', '_controller' => 'App\\Controller\\ViewController::edit'], ['id_view'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2314 => [[['_route' => 'app_view_delete', '_controller' => 'App\\Controller\\ViewController::delete'], ['id_view'], ['POST' => 0], null, false, true, null]],
        2353 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        2393 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        2414 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        2434 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        2473 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        2488 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        2509 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        2523 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        2534 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        2571 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        2583 => [[['_route' => 'ajax_route', '_controller' => 'App\\Controller\\AjaxController::ajaxAction'], [], null, null, false, false, null]],
        2634 => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], ['rating', 'idChallenge', 'idparticipator'], null, null, false, true, null]],
        2673 => [[['_route' => 'app_rating_tutoriel_new', '_controller' => 'App\\Controller\\RatingTutorielController::new'], ['rating', 'idTutoriel'], null, null, false, true, null]],
        2707 => [
            [['_route' => 'app_challenge_show', '_controller' => 'App\\Controller\\ChallengeController::show'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
