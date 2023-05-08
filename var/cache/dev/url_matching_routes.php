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
        '/json/vf' => [[['_route' => 'app_json_vf', '_controller' => 'App\\Controller\\JsonController::vf'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/json/new' => [[['_route' => 'app_json_new', '_controller' => 'App\\Controller\\JsonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/json/Login' => [[['_route' => 'app_json_login', '_controller' => 'App\\Controller\\JsonController::Login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                        .'|([^/]++)/showback(*:174)'
                        .'|edit/([^/]++)(*:195)'
                        .'|([^/]++)/delete(*:218)'
                    .')'
                    .'|omment/(?'
                        .'|new/([^/]++)(*:249)'
                        .'|([^/]++)(?'
                            .'|(*:268)'
                            .'|/edit(*:281)'
                            .'|(*:289)'
                        .')'
                    .')'
                .')'
                .'|/dashboard_home_page/([^/]++)(*:329)'
                .'|/postt/([^/]++)(*:352)'
                .'|/([^/]++)(*:369)'
                .'|/demandetravail(?'
                    .'|(*:395)'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|mail(*:423)'
                            .'|edit(*:435)'
                        .')'
                        .'|(*:444)'
                    .')'
                .')'
                .'|/explore(*:462)'
                .'|/favoris/turoial/Tutoriel/(?'
                    .'|addfavori/([^/]++)(*:517)'
                    .'|removefavori/([^/]++)(*:546)'
                .')'
                .'|/grosmots(?'
                    .'|(*:567)'
                    .'|/([^/]++)(?'
                        .'|(*:587)'
                        .'|/edit(*:600)'
                        .'|(*:608)'
                    .')'
                .')'
                .'|/home(*:623)'
                .'|/json/(?'
                    .'|([^/]++)(?'
                        .'|(*:651)'
                        .'|/editb(*:665)'
                    .')'
                    .'|ban/([^/]++)(*:686)'
                    .'|([^/]++)/edit(*:707)'
                    .'|deleteuser/([^/]++)(*:734)'
                    .'|alloffres(*:751)'
                    .'|mesoffres(*:768)'
                .')'
                .'|/lignepanier(?'
                    .'|(*:792)'
                    .'|/(?'
                        .'|showlignepanier/([^/]++)(*:828)'
                        .'|([^/]++)/edit(*:849)'
                        .'|deleteAjaxligne/([^/]++)(*:881)'
                    .')'
                .')'
                .'|/map(*:895)'
                .'|/offretravail(?'
                    .'|(*:919)'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|mail(*:947)'
                            .'|edit(*:959)'
                        .')'
                        .'|(*:968)'
                    .')'
                    .'|archive(?'
                        .'|(*:987)'
                        .'|/(?'
                            .'|([^/]++)(*:1007)'
                            .'|new(*:1019)'
                            .'|([^/]++)(*:1036)'
                        .')'
                        .'|delete/([^/]++)(*:1061)'
                    .')'
                .')'
                .'|/new(*:1076)'
                .'|/([^/]++)(?'
                    .'|/editjson(*:1106)'
                    .'|(*:1115)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/(?'
                            .'|showpanier/([^/]++)(*:1161)'
                            .'|panier/add/([^/]++)(*:1189)'
                            .'|viderpanier/([^/]++)(*:1218)'
                        .')'
                        .'|rticipation(?'
                            .'|(*:1242)'
                            .'|/([^/]++)(?'
                                .'|(*:1263)'
                                .'|/(?'
                                    .'|edit(*:1280)'
                                    .'|delete(*:1295)'
                                .')'
                            .')'
                        .')'
                        .'|yment(*:1312)'
                    .')'
                    .'|df22/([^/]++)(*:1335)'
                    .'|ost(?'
                        .'|(*:1350)'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|(*:1374)'
                                .'|/edit(*:1388)'
                                .'|(*:1397)'
                            .')'
                            .'|post/([^/]++)(*:1420)'
                            .'|like(?'
                                .'|(*:1436)'
                                .'|/([^/]++)(?'
                                    .'|(*:1457)'
                                    .'|/edit(*:1471)'
                                    .'|(*:1480)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|heckout(*:1506)'
                    .'|ancel_url(*:1524)'
                .')'
                .'|/s(?'
                    .'|uccess\\-url/([^/]++)(*:1559)'
                    .'|howBack/([^/]++)(*:1584)'
                .')'
                .'|/newBack(*:1602)'
                .'|/([^/]++)/editBack(*:1629)'
                .'|/d(?'
                    .'|elete(?'
                        .'|Back/([^/]++)(*:1664)'
                        .'|tutoriel/([^/]++)(*:1690)'
                    .')'
                    .'|ashboard(*:1708)'
                .')'
                .'|/produits(?'
                    .'|(*:1730)'
                    .'|/([^/]++)(?'
                        .'|(*:1751)'
                        .'|/edit(*:1765)'
                        .'|(*:1774)'
                    .')'
                .')'
                .'|/ProduitMobile/([^/]++)(*:1808)'
                .'|/modif(?'
                    .'|ierProduitJSON/([^/]++)(*:1849)'
                    .'|yVideo/([^/]++)/([^/]++)(*:1882)'
                .')'
                .'|/s(?'
                    .'|upprimerProduitJSON/([^/]++)(*:1925)'
                    .'|earch(*:1939)'
                    .'|ms(?'
                        .'|(*:1953)'
                        .'|1(*:1963)'
                    .')'
                    .'|how(?'
                        .'|listtutoriels(*:1992)'
                        .'|tutoriel/([^/]++)(*:2018)'
                    .')'
                .')'
                .'|/tutoriel(?'
                    .'|(*:2041)'
                    .'|/(?'
                        .'|search/([^/]++)/([^/]++)(*:2078)'
                        .'|([^/]++)(*:2095)'
                        .'|back/([^/]++)(*:2117)'
                        .'|([^/]++)/edit(*:2139)'
                        .'|delete/([^/]++)(*:2163)'
                    .')'
                .')'
                .'|/addTutoriel(*:2186)'
                .'|/updatetutoriel/([^/]++)(*:2219)'
                .'|/video/new/([^/]++)(*:2247)'
                .'|/([^/]++)(?'
                    .'|(*:2268)'
                    .'|/edit(*:2282)'
                .')'
                .'|/delete/([^/]++)(*:2308)'
                .'|/view(?'
                    .'|(*:2325)'
                    .'|/([^/]++)(?'
                        .'|(*:2346)'
                        .'|/edit(*:2360)'
                        .'|(*:2369)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:2408)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:2448)'
                    .'|wdt/([^/]++)(*:2469)'
                    .'|profiler(?'
                        .'|(*:2489)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:2528)'
                                .'|router(*:2543)'
                                .'|exception(?'
                                    .'|(*:2564)'
                                    .'|\\.css(*:2578)'
                                .')'
                            .')'
                            .'|(*:2589)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|utocomplete/([^/]++)(*:2626)'
                    .'|jax(*:2638)'
                .')'
                .'|/rating/(?'
                    .'|new/([^/]++)/([^/]++)/([^/]++)(*:2689)'
                    .'|tutoriel/new/([^/]++)/([^/]++)(*:2728)'
                .')'
                .'|/challenge/([^/]++)/show(*:2762)'
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
        174 => [[['_route' => 'app_challenge_show_back', '_controller' => 'App\\Controller\\ChallengeController::showback'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        195 => [[['_route' => 'app_challenge_edit', '_controller' => 'App\\Controller\\ChallengeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        218 => [[['_route' => 'app_challenge_delete', '_controller' => 'App\\Controller\\ChallengeController::delete'], ['id_challenge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        249 => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        268 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id_comment'], ['GET' => 0], null, false, true, null]],
        281 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id_comment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        289 => [
            [['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::deleteCommentUserside'], ['id_comment'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_comment_dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deleteCommentAdminSide'], ['id_comment'], ['POST' => 0], null, false, true, null],
        ],
        329 => [[['_route' => 'app_post_details_Dashboard', '_controller' => 'App\\Controller\\DashboardHomePageController::showPostDetails'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        352 => [[['_route' => 'app_post_Dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deletePost'], ['id_post'], ['POST' => 0], null, false, true, null]],
        369 => [[['_route' => 'app_category_Dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deleteCategory'], ['id_category'], ['POST' => 0], null, false, true, null]],
        395 => [[['_route' => 'app_demandetravail_index', '_controller' => 'App\\Controller\\DemandetravailController::index'], [], ['GET' => 0], null, true, false, null]],
        423 => [[['_route' => 'app_demandetravail_mail', '_controller' => 'App\\Controller\\DemandetravailController::sendEmail'], ['idOffre'], ['GET' => 0], null, false, false, null]],
        435 => [[['_route' => 'app_demandetravail_edit', '_controller' => 'App\\Controller\\DemandetravailController::edit'], ['idDemande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        444 => [
            [['_route' => 'app_demandetravail_show', '_controller' => 'App\\Controller\\DemandetravailController::show'], ['idDemande'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_demandetravail_delete', '_controller' => 'App\\Controller\\DemandetravailController::delete'], ['idDemande'], ['POST' => 0], null, false, true, null],
        ],
        462 => [[['_route' => 'app_explore', '_controller' => 'App\\Controller\\ExploreController::index'], [], null, null, false, false, null]],
        517 => [[['_route' => 'app_favoris_tutoriel_new', '_controller' => 'App\\Controller\\FavorisTuroialController::new'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        546 => [[['_route' => 'app_favoris_turoial_delete', '_controller' => 'App\\Controller\\FavorisTuroialController::delete'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        567 => [[['_route' => 'app_grosmots_index', '_controller' => 'App\\Controller\\GrosmotsController::index'], [], ['GET' => 0], null, true, false, null]],
        587 => [[['_route' => 'app_grosmots_show', '_controller' => 'App\\Controller\\GrosmotsController::show'], ['idMot'], ['GET' => 0], null, false, true, null]],
        600 => [[['_route' => 'app_grosmots_edit', '_controller' => 'App\\Controller\\GrosmotsController::edit'], ['idMot'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        608 => [[['_route' => 'app_grosmots_delete', '_controller' => 'App\\Controller\\GrosmotsController::delete'], ['idMot'], ['POST' => 0], null, false, true, null]],
        623 => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], [], null, null, false, false, null]],
        651 => [[['_route' => 'app_json_show', '_controller' => 'App\\Controller\\JsonController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        665 => [[['_route' => 'app_json_editb', '_controller' => 'App\\Controller\\JsonController::editb'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        686 => [[['_route' => 'app_ban_show', '_controller' => 'App\\Controller\\JsonController::showb'], ['id'], ['GET' => 0], null, false, true, null]],
        707 => [[['_route' => 'app_json_edit', '_controller' => 'App\\Controller\\JsonController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        734 => [[['_route' => 'app_json_delete', '_controller' => 'App\\Controller\\JsonController::delete'], ['id_user'], null, null, false, true, null]],
        751 => [[['_route' => 'alloffresjson', '_controller' => 'App\\Controller\\OffretravailmobileController::index'], [], ['GET' => 0], null, false, false, null]],
        768 => [[['_route' => 'mesoffresjson', '_controller' => 'App\\Controller\\OffretravailmobileController::mesoffres'], [], ['GET' => 0], null, false, false, null]],
        792 => [[['_route' => 'app_lignepanier_index', '_controller' => 'App\\Controller\\LignepanierController::index'], [], ['GET' => 0], null, true, false, null]],
        828 => [[['_route' => 'app_lignepanier_show', '_controller' => 'App\\Controller\\LignepanierController::show'], ['idlignepanier'], ['GET' => 0], null, false, true, null]],
        849 => [[['_route' => 'app_lignepanier_edit', '_controller' => 'App\\Controller\\LignepanierController::edit'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        881 => [[['_route' => 'app_lignepanier_delete_with_ajax', '_controller' => 'App\\Controller\\LignepanierController::deleteWithAjax'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        895 => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\MapController::index'], [], null, null, false, false, null]],
        919 => [[['_route' => 'app_offretravail_index', '_controller' => 'App\\Controller\\OffretravailController::index'], [], ['GET' => 0], null, true, false, null]],
        947 => [[['_route' => 'app_offretravail_mail', '_controller' => 'App\\Controller\\OffretravailController::sendEmail'], ['idDemande'], ['GET' => 0], null, false, false, null]],
        959 => [[['_route' => 'app_offretravail_edit', '_controller' => 'App\\Controller\\OffretravailController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        968 => [
            [['_route' => 'app_offretravail_show', '_controller' => 'App\\Controller\\OffretravailController::show'], ['idoffre'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_offretravail_delete', '_controller' => 'App\\Controller\\OffretravailController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null],
        ],
        987 => [[['_route' => 'app_offretravailarchive_index', '_controller' => 'App\\Controller\\OffretravailarchiveController::index'], [], ['GET' => 0], null, true, false, null]],
        1007 => [[['_route' => 'app_offretravailarchive_recuperer', '_controller' => 'App\\Controller\\OffretravailarchiveController::recuperer'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1019 => [[['_route' => 'app_offretravailarchive_new', '_controller' => 'App\\Controller\\OffretravailarchiveController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1036 => [[['_route' => 'app_offretravailarchive_show', '_controller' => 'App\\Controller\\OffretravailarchiveController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        1061 => [[['_route' => 'app_offretravailarchive_delete', '_controller' => 'App\\Controller\\OffretravailarchiveController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1076 => [[['_route' => 'newjson', '_controller' => 'App\\Controller\\OffretravailmobileController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1106 => [[['_route' => 'editjson', '_controller' => 'App\\Controller\\OffretravailmobileController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1115 => [[['_route' => 'deletejson', '_controller' => 'App\\Controller\\OffretravailmobileController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1161 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['idpanier'], ['GET' => 0], null, false, true, null]],
        1189 => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\PanierController::ajouterProduitAuPanier'], ['idproduit'], null, null, false, true, null]],
        1218 => [[['_route' => 'viderpanier', '_controller' => 'App\\Controller\\PanierController::ViderPanier'], ['idpanier'], null, null, false, true, null]],
        1242 => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], [], ['GET' => 0], null, true, false, null]],
        1263 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id_participation'], ['GET' => 0], null, false, true, null]],
        1280 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1295 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1312 => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], [], null, null, false, false, null]],
        1335 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\PaymentController::pdf'], ['idpanier'], null, null, false, true, null]],
        1350 => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], [], ['GET' => 0], null, true, false, null]],
        1374 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id_post'], ['GET' => 0], null, false, true, null]],
        1388 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1397 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id_post'], ['POST' => 0], null, false, true, null]],
        1420 => [[['_route' => 'app_post_details', '_controller' => 'App\\Controller\\PostController::showPostDetails'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1436 => [[['_route' => 'app_post_like_index', '_controller' => 'App\\Controller\\PostLikeController::index'], [], ['GET' => 0], null, true, false, null]],
        1457 => [[['_route' => 'app_post_like_show', '_controller' => 'App\\Controller\\PostLikeController::show'], ['id_like'], ['GET' => 0], null, false, true, null]],
        1471 => [[['_route' => 'app_post_like_edit', '_controller' => 'App\\Controller\\PostLikeController::edit'], ['id_like'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1480 => [[['_route' => 'app_post_like_delete', '_controller' => 'App\\Controller\\PostLikeController::delete'], ['id_like'], ['POST' => 0], null, false, true, null]],
        1506 => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::checkout'], [], null, null, false, false, null]],
        1524 => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\PaymentController::cancelUrl'], [], null, null, false, false, null]],
        1559 => [[['_route' => 'success-url', '_controller' => 'App\\Controller\\PaymentController::successUrl'], ['idpanier'], null, null, false, true, null]],
        1584 => [[['_route' => 'app_produitsBack_show', '_controller' => 'App\\Controller\\ProduitsBackController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1602 => [[['_route' => 'app_produits_back_new', '_controller' => 'App\\Controller\\ProduitsBackController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1629 => [[['_route' => 'app_produits_back_edit', '_controller' => 'App\\Controller\\ProduitsBackController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1664 => [[['_route' => 'app_produits_delete_back', '_controller' => 'App\\Controller\\ProduitsBackController::delete'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1690 => [[['_route' => 'deleteTutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::deleteStudentJSON'], ['id'], null, null, false, true, null]],
        1708 => [[['_route' => 'app_dashboard_studiodashboard', '_controller' => 'App\\Controller\\StudiodashboardController::index'], [], ['GET' => 0], null, true, false, null]],
        1730 => [[['_route' => 'app_produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], [], ['GET' => 0], null, true, false, null]],
        1751 => [[['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1765 => [[['_route' => 'app_produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1774 => [[['_route' => 'app_produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        1808 => [[['_route' => 'produit_par_id', '_controller' => 'App\\Controller\\ProduitsMobileController::ProduitId'], ['idproduit'], null, null, false, true, null]],
        1849 => [[['_route' => 'modifierProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::modifierProduitJSON'], ['idproduit'], null, null, false, true, null]],
        1882 => [[['_route' => 'app_video_new', '_controller' => 'App\\Controller\\VideoMobileController::modifyvideo'], ['id_video', 'id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1925 => [[['_route' => 'supprimerProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::supprimerProduitJSON'], ['idproduit'], null, null, false, true, null]],
        1939 => [[['_route' => 'app_search_post', '_controller' => 'App\\Controller\\SearchController::search'], [], null, null, false, false, null]],
        1953 => [[['_route' => 'app_sms', '_controller' => 'App\\Controller\\SmsController::index'], [], null, null, false, false, null]],
        1963 => [[['_route' => 'app_sms1', '_controller' => 'App\\Controller\\SmsController::sendSmsMessage'], [], null, null, false, false, null]],
        1992 => [[['_route' => 'list_tutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::index'], [], null, null, false, false, null]],
        2018 => [[['_route' => 'tutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::TutorielId'], ['id'], null, null, false, true, null]],
        2041 => [[['_route' => 'app_tutoriel_index', '_controller' => 'App\\Controller\\TutorielController::index'], [], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        2078 => [[['_route' => 'app_tutoriel_index_search', '_controller' => 'App\\Controller\\TutorielController::search'], ['keyword', 'category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2095 => [[['_route' => 'app_tutoriel_show', '_controller' => 'App\\Controller\\TutorielController::show'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2117 => [[['_route' => 'app_tutoriel_show_back', '_controller' => 'App\\Controller\\TutorielController::showback'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2139 => [[['_route' => 'app_tutoriel_edit', '_controller' => 'App\\Controller\\TutorielController::edit'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2163 => [[['_route' => 'app_tutoriel_delete', '_controller' => 'App\\Controller\\TutorielController::delete'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2186 => [[['_route' => 'addTutoriell', '_controller' => 'App\\Controller\\TutorielMobileController::addTutoriel'], [], null, null, false, false, null]],
        2219 => [[['_route' => 'updateTutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::updateStudentJSON'], ['id'], null, null, false, true, null]],
        2247 => [[['_route' => 'app_videoo_new', '_controller' => 'App\\Controller\\VideoController::new'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2268 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoMobileController::show'], ['id_video'], ['GET' => 0], null, false, true, null]],
        2282 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoMobileController::edit'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2308 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoMobileController::delete'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2325 => [[['_route' => 'app_view_index', '_controller' => 'App\\Controller\\ViewController::index'], [], ['GET' => 0], null, true, false, null]],
        2346 => [[['_route' => 'app_view_show', '_controller' => 'App\\Controller\\ViewController::show'], ['id_view'], ['GET' => 0], null, false, true, null]],
        2360 => [[['_route' => 'app_view_edit', '_controller' => 'App\\Controller\\ViewController::edit'], ['id_view'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2369 => [[['_route' => 'app_view_delete', '_controller' => 'App\\Controller\\ViewController::delete'], ['id_view'], ['POST' => 0], null, false, true, null]],
        2408 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        2448 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        2469 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        2489 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        2528 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        2543 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        2564 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        2578 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        2589 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        2626 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        2638 => [[['_route' => 'ajax_route', '_controller' => 'App\\Controller\\AjaxController::ajaxAction'], [], null, null, false, false, null]],
        2689 => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], ['rating', 'idChallenge', 'idparticipator'], null, null, false, true, null]],
        2728 => [[['_route' => 'app_rating_tutoriel_new', '_controller' => 'App\\Controller\\RatingTutorielController::new'], ['rating', 'idTutoriel'], null, null, false, true, null]],
        2762 => [
            [['_route' => 'app_challenge_show', '_controller' => 'App\\Controller\\ChallengeController::show'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
