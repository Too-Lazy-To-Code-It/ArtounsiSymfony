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
        '/blogjon' => [[['_route' => 'app_blog_json', '_controller' => 'App\\Controller\\BlogController::getbolgs'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new_json', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/json/alldemandes' => [[['_route' => 'alldemandesjson', '_controller' => 'App\\Controller\\DemandetravailmobileController::index'], null, ['GET' => 0], null, false, false, null]],
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
        '/panier/mobile' => [[['_route' => 'app_panier_mobile', '_controller' => 'App\\Controller\\PanierMobileController::index'], null, null, null, false, false, null]],
        '/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/like/new' => [[['_route' => 'app_post_like_new', '_controller' => 'App\\Controller\\PostLikeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produits/back' => [[['_route' => 'app_produits_back', '_controller' => 'App\\Controller\\ProduitsBackController::index'], null, null, null, false, false, null]],
        '/produits/new' => [[['_route' => 'app_produits_new', '_controller' => 'App\\Controller\\ProduitsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/TousLesproduits/mobile' => [[['_route' => 'ListeProduits', '_controller' => 'App\\Controller\\ProduitsMobileController::getProduits'], null, null, null, false, false, null]],
        '/Category/mobile' => [[['_route' => 'ListeCategories', '_controller' => 'App\\Controller\\ProduitsMobileController::getCategories'], null, null, null, false, false, null]],
        '/dashboard/mesoffres' => [[['_route' => 'app_dashboard_offres', '_controller' => 'App\\Controller\\StudiodashboardController::offres'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/mesdemandess' => [[['_route' => 'app_dashboard_demandes', '_controller' => 'App\\Controller\\StudiodashboardController::demandes'], null, ['GET' => 0], null, false, false, null]],
        '/tutoriel/back' => [[['_route' => 'app_tutoriel_index_back', '_controller' => 'App\\Controller\\TutorielController::indexback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tutoriel/showfavoris' => [[['_route' => 'app_tutoriel_favoris', '_controller' => 'App\\Controller\\TutorielController::showfavoris'], null, ['GET' => 0], null, false, false, null]],
        '/tutoriel/new' => [[['_route' => 'app_tutoriel_new', '_controller' => 'App\\Controller\\TutorielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|ategory/(?'
                        .'|([^/]++)(?'
                            .'|(*:118)'
                            .'|/edit(*:131)'
                            .'|(*:139)'
                        .')'
                        .'|newcategoryjson(*:163)'
                        .'|([^/]++)/(?'
                            .'|editcategoryjson(*:199)'
                            .'|deletecategoryjson(*:225)'
                        .')'
                    .')'
                    .'|hallenge/(?'
                        .'|([^/]++)/showback(*:264)'
                        .'|edit/([^/]++)(*:285)'
                        .'|([^/]++)/delete(*:308)'
                    .')'
                    .'|omment/(?'
                        .'|new/([^/]++)(*:339)'
                        .'|([^/]++)(?'
                            .'|(*:358)'
                            .'|/edit(*:371)'
                            .'|(*:379)'
                        .')'
                        .'|newjson/([^/]++)(*:404)'
                        .'|JSONCOMMENTSHOW/([^/]++)(*:436)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|editcommentjson(*:474)'
                                .'|deletecommentjson(*:499)'
                            .')'
                            .'|(*:508)'
                        .')'
                    .')'
                .')'
                .'|/dashboard_home_page/([^/]++)(*:548)'
                .'|/postt/([^/]++)(*:571)'
                .'|/([^/]++)(*:588)'
                .'|/de(?'
                    .'|mandetravail(?'
                        .'|(*:617)'
                        .'|/([^/]++)(?'
                            .'|/edit(*:642)'
                            .'|(*:650)'
                        .')'
                    .')'
                    .'|letedemande/([^/]++)(*:680)'
                .')'
                .'|/json/mesdemandes/([^/]++)(*:715)'
                .'|/newdemande/([^/]++)(*:743)'
                .'|/updatedemande/([^/]++)/([^/]++)(*:783)'
                .'|/([^/]++)/mail/([^/]++)(*:814)'
                .'|/explore(*:830)'
                .'|/add(?'
                    .'|favoriTutoriel/([^/]++)/([^/]++)(*:877)'
                    .'|Json/([^/]++)/([^/]++)(*:907)'
                .')'
                .'|/removefavoriTutoriel/([^/]++)/([^/]++)(*:955)'
                .'|/c(?'
                    .'|heck(?'
                        .'|favoriTutoriel/([^/]++)/([^/]++)(*:1007)'
                        .'|out(*:1019)'
                    .')'
                    .'|a(?'
                        .'|t(*:1034)'
                        .'|ncel_url(*:1051)'
                    .')'
                .')'
                .'|/fetchCountFavorisTutoriel/([^/]++)(*:1097)'
                .'|/grosmot(?'
                    .'|s(?'
                        .'|(*:1121)'
                        .'|/([^/]++)(?'
                            .'|(*:1142)'
                            .'|/edit(*:1156)'
                            .'|(*:1165)'
                        .')'
                    .')'
                    .'|(*:1176)'
                .')'
                .'|/home(*:1191)'
                .'|/json/(?'
                    .'|([^/]++)(?'
                        .'|(*:1220)'
                        .'|/editb(*:1235)'
                    .')'
                    .'|ban/([^/]++)(*:1257)'
                    .'|([^/]++)/edit(*:1279)'
                    .'|deleteuser/([^/]++)(*:1307)'
                    .'|alloffres(*:1325)'
                    .'|mesoffres/([^/]++)(*:1352)'
                .')'
                .'|/lignepanier(?'
                    .'|(*:1377)'
                    .'|/(?'
                        .'|showlignepanier/([^/]++)(*:1414)'
                        .'|([^/]++)/edit(*:1436)'
                        .'|deleteAjaxligne/([^/]++)(*:1469)'
                    .')'
                .')'
                .'|/map(*:1484)'
                .'|/offretravail(?'
                    .'|(*:1509)'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|mail(*:1538)'
                            .'|edit(*:1551)'
                        .')'
                        .'|(*:1561)'
                    .')'
                    .'|archive(?'
                        .'|(*:1581)'
                        .'|/(?'
                            .'|([^/]++)(*:1602)'
                            .'|new(*:1614)'
                            .'|([^/]++)(*:1631)'
                        .')'
                        .'|delete/([^/]++)(*:1656)'
                    .')'
                .')'
                .'|/s(?'
                    .'|how(?'
                        .'|offr(*:1682)'
                        .'|PanierJson(?'
                            .'|/([^/]++)(*:1713)'
                            .'|2/([^/]++)(*:1732)'
                        .')'
                        .'|Back/([^/]++)(*:1755)'
                    .')'
                    .'|uccess\\-url/([^/]++)(*:1785)'
                .')'
                .'|/new(?'
                    .'|json/([^/]++)(*:1815)'
                    .'|Back(*:1828)'
                .')'
                .'|/updatejson/([^/]++)/([^/]++)(*:1867)'
                .'|/delete(?'
                    .'|offre/([^/]++)(*:1900)'
                    .'|ligneJson/([^/]++)(*:1927)'
                .')'
                .'|/p(?'
                    .'|a(?'
                        .'|nier/(?'
                            .'|showpanier/([^/]++)(*:1973)'
                            .'|panier/add/([^/]++)(*:2001)'
                            .'|viderpanier/([^/]++)(*:2030)'
                        .')'
                        .'|rticipation(?'
                            .'|(*:2054)'
                            .'|/([^/]++)(?'
                                .'|(*:2075)'
                                .'|/(?'
                                    .'|edit(*:2092)'
                                    .'|delete(*:2107)'
                                .')'
                            .')'
                        .')'
                        .'|yment(*:2124)'
                    .')'
                    .'|df22/([^/]++)(*:2147)'
                    .'|ost(?'
                        .'|(*:2162)'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|(*:2186)'
                                .'|/edit(*:2200)'
                                .'|(*:2209)'
                            .')'
                            .'|post/([^/]++)(*:2232)'
                            .'|newpostjson(*:2252)'
                            .'|([^/]++)/(?'
                                .'|editpostjson(*:2285)'
                                .'|DeletePostJson(*:2308)'
                            .')'
                            .'|like(?'
                                .'|(*:2325)'
                                .'|/([^/]++)(?'
                                    .'|(*:2346)'
                                    .'|/edit(*:2360)'
                                    .'|(*:2369)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/([^/]++)/editBack(*:2401)'
                .'|/d(?'
                    .'|elete(?'
                        .'|Back/([^/]++)(*:2436)'
                        .'|tutoriel/([^/]++)(*:2462)'
                        .'|Video/([^/]++)(*:2485)'
                    .')'
                    .'|ashboard(*:2503)'
                .')'
                .'|/produits(?'
                    .'|(*:2525)'
                    .'|/([^/]++)(?'
                        .'|(*:2546)'
                        .'|/edit(*:2560)'
                        .'|(*:2569)'
                    .')'
                .')'
                .'|/s(?'
                    .'|how(?'
                        .'|Cat(*:2594)'
                        .'|listtutoriels(*:2616)'
                        .'|tutoriel/([^/]++)(*:2642)'
                        .'|favorisTutoriels/([^/]++)(*:2676)'
                        .'|bestTutoriels(*:2698)'
                    .')'
                    .'|upprimerProduitJSON/([^/]++)(*:2736)'
                    .'|earch(*:2750)'
                    .'|ms(?'
                        .'|(*:2764)'
                        .'|1(*:2774)'
                    .')'
                .')'
                .'|/ShowProduitMobile/([^/]++)(*:2812)'
                .'|/a(?'
                    .'|j(?'
                        .'|outerProduitJSON/new/([^/]++)(*:2859)'
                        .'|ax(*:2870)'
                    .')'
                    .'|dd(?'
                        .'|Tutoriel(*:2893)'
                        .'|Video/([^/]++)(*:2916)'
                    .')'
                    .'|utocomplete/([^/]++)(*:2946)'
                .')'
                .'|/modif(?'
                    .'|ierProduitJSON/([^/]++)/([^/]++)(*:2997)'
                    .'|yVideo/([^/]++)/([^/]++)(*:3030)'
                .')'
                .'|/rat(?'
                    .'|eTutoriel/([^/]++)/([^/]++)/([^/]++)(*:3083)'
                    .'|ing/(?'
                        .'|new/([^/]++)/([^/]++)/([^/]++)(*:3129)'
                        .'|tutoriel/new/([^/]++)/([^/]++)(*:3168)'
                    .')'
                .')'
                .'|/fetch(?'
                    .'|AVGRateTutoriel/([^/]++)(*:3212)'
                    .'|RateTutoriel/([^/]++)/([^/]++)(*:3251)'
                .')'
                .'|/tutoriel(?'
                    .'|(*:3273)'
                    .'|/(?'
                        .'|search/([^/]++)/([^/]++)(*:3310)'
                        .'|([^/]++)(*:3327)'
                        .'|back/([^/]++)(*:3349)'
                        .'|([^/]++)/edit(*:3371)'
                        .'|delete/([^/]++)(*:3395)'
                    .')'
                .')'
                .'|/updatetutoriel/([^/]++)(*:3430)'
                .'|/vi(?'
                    .'|deo(?'
                        .'|(*:3451)'
                        .'|/(?'
                            .'|new/([^/]++)(*:3476)'
                            .'|([^/]++)(?'
                                .'|(*:3496)'
                                .'|/edit(*:3510)'
                            .')'
                            .'|delete/([^/]++)(*:3535)'
                        .')'
                    .')'
                    .'|ew(?'
                        .'|(*:3551)'
                        .'|/([^/]++)(?'
                            .'|(*:3572)'
                            .'|/edit(*:3586)'
                            .'|(*:3595)'
                        .')'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:3635)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:3675)'
                    .'|wdt/([^/]++)(*:3696)'
                    .'|profiler(?'
                        .'|(*:3716)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:3755)'
                                .'|router(*:3770)'
                                .'|exception(?'
                                    .'|(*:3791)'
                                    .'|\\.css(*:3805)'
                                .')'
                            .')'
                            .'|(*:3816)'
                        .')'
                    .')'
                .')'
                .'|/challenge/([^/]++)/show(*:3852)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'app_allusers_show', '_controller' => 'App\\Controller\\AllusersController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        40 => [[['_route' => 'app_allusers_edit', '_controller' => 'App\\Controller\\AllusersController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        47 => [[['_route' => 'app_allusers_delete', '_controller' => 'App\\Controller\\AllusersController::delete'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        76 => [[['_route' => 'app_ban_edit', '_controller' => 'App\\Controller\\BanController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'app_ban_delete', '_controller' => 'App\\Controller\\BanController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        118 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id_category'], ['GET' => 0], null, false, true, null]],
        131 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id_category'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        139 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id_category'], ['POST' => 0], null, false, true, null]],
        163 => [[['_route' => 'app_category_new_newcategoryjson', '_controller' => 'App\\Controller\\CategoryController::newcategoryjson'], [], null, null, false, false, null]],
        199 => [[['_route' => 'app_category_edit_category_json', '_controller' => 'App\\Controller\\CategoryController::editcategoryjson'], ['id_category'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        225 => [[['_route' => 'app_category_delete_json_category', '_controller' => 'App\\Controller\\CategoryController::deleteJSONCATEGORY'], ['id_category'], null, null, false, false, null]],
        264 => [[['_route' => 'app_challenge_show_back', '_controller' => 'App\\Controller\\ChallengeController::showback'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'app_challenge_edit', '_controller' => 'App\\Controller\\ChallengeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        308 => [[['_route' => 'app_challenge_delete', '_controller' => 'App\\Controller\\ChallengeController::delete'], ['id_challenge'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        358 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id_comment'], ['GET' => 0], null, false, true, null]],
        371 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id_comment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        379 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::deleteCommentUserside'], ['id_comment'], ['POST' => 0], null, false, true, null]],
        404 => [[['_route' => 'app_comment_new_json', '_controller' => 'App\\Controller\\CommentController::newaddcommentjson'], ['id_post'], null, null, false, true, null]],
        436 => [[['_route' => 'app_comment_show_json', '_controller' => 'App\\Controller\\CommentController::getcomments'], ['id_post'], null, null, false, true, null]],
        474 => [[['_route' => 'app_comment_edit_json', '_controller' => 'App\\Controller\\CommentController::editjsoncomment'], ['id_comment'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        499 => [[['_route' => 'app_comment_delete_json', '_controller' => 'App\\Controller\\CommentController::deleteJSONCOMMENT'], ['id_comment'], ['POST' => 0], null, false, false, null]],
        508 => [[['_route' => 'app_comment_dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deleteCommentAdminSide'], ['id_comment'], ['POST' => 0], null, false, true, null]],
        548 => [[['_route' => 'app_post_details_Dashboard', '_controller' => 'App\\Controller\\DashboardHomePageController::showPostDetails'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        571 => [[['_route' => 'app_post_Dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deletePost'], ['id_post'], ['POST' => 0], null, false, true, null]],
        588 => [[['_route' => 'app_category_Dashboard_delete', '_controller' => 'App\\Controller\\DashboardHomePageController::deleteCategory'], ['id_category'], ['POST' => 0], null, false, true, null]],
        617 => [[['_route' => 'app_demandetravail_index', '_controller' => 'App\\Controller\\DemandetravailController::index'], [], ['GET' => 0], null, true, false, null]],
        642 => [[['_route' => 'app_demandetravail_edit', '_controller' => 'App\\Controller\\DemandetravailController::edit'], ['idDemande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        650 => [
            [['_route' => 'app_demandetravail_show', '_controller' => 'App\\Controller\\DemandetravailController::show'], ['idDemande'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_demandetravail_delete', '_controller' => 'App\\Controller\\DemandetravailController::delete'], ['idDemande'], ['POST' => 0], null, false, true, null],
        ],
        680 => [[['_route' => 'deletedemande', '_controller' => 'App\\Controller\\DemandetravailmobileController::deletedemande'], ['id'], null, null, false, true, null]],
        715 => [[['_route' => 'mesdemandesjson', '_controller' => 'App\\Controller\\DemandetravailmobileController::mesoffres'], ['id'], ['GET' => 0], null, false, true, null]],
        743 => [[['_route' => 'newdemandejson', '_controller' => 'App\\Controller\\DemandetravailmobileController::newdemande'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        783 => [[['_route' => 'updatedemandejson', '_controller' => 'App\\Controller\\DemandetravailmobileController::updateStudentJSON'], ['id', 'iduser'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        814 => [[['_route' => 'app_demandetravail_mail', '_controller' => 'App\\Controller\\DemandetravailmobileController::sendEmail'], ['idOffre', 'iduserconnected'], ['GET' => 0], null, true, true, null]],
        830 => [[['_route' => 'app_explore', '_controller' => 'App\\Controller\\ExploreController::index'], [], null, null, false, false, null]],
        877 => [[['_route' => 'app_favoris_tutoriel_new', '_controller' => 'App\\Controller\\FavorisTuroialMobileController::new'], ['id_tutoriel', 'id_user'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        907 => [[['_route' => 'add_product_Panier-Json', '_controller' => 'App\\Controller\\PanierMobileController::ajouterProduitAuPanierJson'], ['idproduit', 'id_user'], null, null, false, true, null]],
        955 => [[['_route' => 'app_favoris_turoial_delete', '_controller' => 'App\\Controller\\FavorisTuroialMobileController::delete'], ['id_tutoriel', 'id_user'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1007 => [[['_route' => 'app_favoris_turoial_check', '_controller' => 'App\\Controller\\FavorisTuroialMobileController::check'], ['id_tutoriel', 'id_user'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1019 => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::checkout'], [], null, null, false, false, null]],
        1034 => [[['_route' => 'catshow', '_controller' => 'App\\Controller\\OffretravailmobileController::catshow'], [], ['GET' => 0], null, false, false, null]],
        1051 => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\PaymentController::cancelUrl'], [], null, null, false, false, null]],
        1097 => [[['_route' => 'fetchCountFavorisTutoriel', '_controller' => 'App\\Controller\\FavorisTuroialMobileController::fetchCountFavorisTutoriel'], ['idTutoriel'], null, null, false, true, null]],
        1121 => [[['_route' => 'app_grosmots_index', '_controller' => 'App\\Controller\\GrosmotsController::index'], [], ['GET' => 0], null, true, false, null]],
        1142 => [[['_route' => 'app_grosmots_show', '_controller' => 'App\\Controller\\GrosmotsController::show'], ['idMot'], ['GET' => 0], null, false, true, null]],
        1156 => [[['_route' => 'app_grosmots_edit', '_controller' => 'App\\Controller\\GrosmotsController::edit'], ['idMot'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1165 => [[['_route' => 'app_grosmots_delete', '_controller' => 'App\\Controller\\GrosmotsController::delete'], ['idMot'], ['POST' => 0], null, false, true, null]],
        1176 => [[['_route' => 'agrosmot', '_controller' => 'App\\Controller\\OffretravailmobileController::agrosmot'], [], ['GET' => 0], null, false, false, null]],
        1191 => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], [], null, null, false, false, null]],
        1220 => [[['_route' => 'app_json_show', '_controller' => 'App\\Controller\\JsonController::show'], ['id_user'], ['GET' => 0], null, false, true, null]],
        1235 => [[['_route' => 'app_json_editb', '_controller' => 'App\\Controller\\JsonController::editb'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1257 => [[['_route' => 'app_ban_show', '_controller' => 'App\\Controller\\JsonController::showb'], ['id'], ['GET' => 0], null, false, true, null]],
        1279 => [[['_route' => 'app_json_edit', '_controller' => 'App\\Controller\\JsonController::edit'], ['id_user'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1307 => [[['_route' => 'app_json_delete', '_controller' => 'App\\Controller\\JsonController::delete'], ['id_user'], null, null, false, true, null]],
        1325 => [[['_route' => 'alloffresjson', '_controller' => 'App\\Controller\\OffretravailmobileController::alloffresjson'], [], ['GET' => 0], null, false, false, null]],
        1352 => [[['_route' => 'mesoffresjson', '_controller' => 'App\\Controller\\OffretravailmobileController::mesoffres'], ['id'], ['GET' => 0], null, false, true, null]],
        1377 => [[['_route' => 'app_lignepanier_index', '_controller' => 'App\\Controller\\LignepanierController::index'], [], ['GET' => 0], null, true, false, null]],
        1414 => [[['_route' => 'app_lignepanier_show', '_controller' => 'App\\Controller\\LignepanierController::show'], ['idlignepanier'], ['GET' => 0], null, false, true, null]],
        1436 => [[['_route' => 'app_lignepanier_edit', '_controller' => 'App\\Controller\\LignepanierController::edit'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1469 => [[['_route' => 'app_lignepanier_delete_with_ajax', '_controller' => 'App\\Controller\\LignepanierController::deleteWithAjax'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1484 => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\MapController::index'], [], null, null, false, false, null]],
        1509 => [[['_route' => 'app_offretravail_index', '_controller' => 'App\\Controller\\OffretravailController::index'], [], ['GET' => 0], null, true, false, null]],
        1538 => [[['_route' => 'app_offretravail_mail', '_controller' => 'App\\Controller\\OffretravailController::sendEmail'], ['idDemande'], ['GET' => 0], null, false, false, null]],
        1551 => [[['_route' => 'app_offretravail_edit', '_controller' => 'App\\Controller\\OffretravailController::edit'], ['idoffre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1561 => [
            [['_route' => 'app_offretravail_show', '_controller' => 'App\\Controller\\OffretravailController::show'], ['idoffre'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_offretravail_delete', '_controller' => 'App\\Controller\\OffretravailController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null],
        ],
        1581 => [[['_route' => 'app_offretravailarchive_index', '_controller' => 'App\\Controller\\OffretravailarchiveController::index'], [], ['GET' => 0], null, true, false, null]],
        1602 => [[['_route' => 'app_offretravailarchive_recuperer', '_controller' => 'App\\Controller\\OffretravailarchiveController::recuperer'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1614 => [[['_route' => 'app_offretravailarchive_new', '_controller' => 'App\\Controller\\OffretravailarchiveController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1631 => [[['_route' => 'app_offretravailarchive_show', '_controller' => 'App\\Controller\\OffretravailarchiveController::show'], ['idoffre'], ['GET' => 0], null, false, true, null]],
        1656 => [[['_route' => 'app_offretravailarchive_delete', '_controller' => 'App\\Controller\\OffretravailarchiveController::delete'], ['idoffre'], ['POST' => 0], null, false, true, null]],
        1682 => [[['_route' => 'showoffr', '_controller' => 'App\\Controller\\OffretravailmobileController::showoffr'], [], ['GET' => 0], null, false, false, null]],
        1713 => [[['_route' => 'app_AffichepanierJSON', '_controller' => 'App\\Controller\\PanierMobileController::AfficherPanierJson'], ['id_user'], null, null, false, true, null]],
        1732 => [[['_route' => 'app_AffichepanierJSON2', '_controller' => 'App\\Controller\\PanierMobileController::AfficherPanierProduits'], ['id_user'], null, null, false, true, null]],
        1755 => [[['_route' => 'app_produitsBack_show', '_controller' => 'App\\Controller\\ProduitsBackController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        1785 => [[['_route' => 'success-url', '_controller' => 'App\\Controller\\PaymentController::successUrl'], ['idpanier'], null, null, false, true, null]],
        1815 => [[['_route' => 'newjson', '_controller' => 'App\\Controller\\OffretravailmobileController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1828 => [[['_route' => 'app_produits_back_new', '_controller' => 'App\\Controller\\ProduitsBackController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1867 => [[['_route' => 'updatejson', '_controller' => 'App\\Controller\\OffretravailmobileController::updateStudentJSON'], ['id', 'iduser'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1900 => [[['_route' => 'deleteStudentJSON', '_controller' => 'App\\Controller\\OffretravailmobileController::deleteStudentJSON'], ['id'], null, null, false, true, null]],
        1927 => [[['_route' => 'app_lignepanier_delete_Json', '_controller' => 'App\\Controller\\PanierMobileController::deleteLigneJson'], ['idlignepanier'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1973 => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], ['idpanier'], ['GET' => 0], null, false, true, null]],
        2001 => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\PanierController::ajouterProduitAuPanier'], ['idproduit'], null, null, false, true, null]],
        2030 => [[['_route' => 'viderpanier', '_controller' => 'App\\Controller\\PanierController::ViderPanier'], ['idpanier'], null, null, false, true, null]],
        2054 => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], [], ['GET' => 0], null, true, false, null]],
        2075 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id_participation'], ['GET' => 0], null, false, true, null]],
        2092 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2107 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id_participation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2124 => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], [], null, null, false, false, null]],
        2147 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\PaymentController::pdf'], ['idpanier'], null, null, false, true, null]],
        2162 => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], [], ['GET' => 0], null, true, false, null]],
        2186 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id_post'], ['GET' => 0], null, false, true, null]],
        2200 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2209 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id_post'], ['POST' => 0], null, false, true, null]],
        2232 => [[['_route' => 'app_post_details', '_controller' => 'App\\Controller\\PostController::showPostDetails'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2252 => [[['_route' => 'app_post_new_newpostjson', '_controller' => 'App\\Controller\\PostController::newpostjson'], [], null, null, false, false, null]],
        2285 => [[['_route' => 'app_post_edit_category_json', '_controller' => 'App\\Controller\\PostController::editpostjson'], ['id_post'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2308 => [[['_route' => 'app_post_delete_json', '_controller' => 'App\\Controller\\PostController::DeletePostJson'], ['id_post'], null, null, false, false, null]],
        2325 => [[['_route' => 'app_post_like_index', '_controller' => 'App\\Controller\\PostLikeController::index'], [], ['GET' => 0], null, true, false, null]],
        2346 => [[['_route' => 'app_post_like_show', '_controller' => 'App\\Controller\\PostLikeController::show'], ['id_like'], ['GET' => 0], null, false, true, null]],
        2360 => [[['_route' => 'app_post_like_edit', '_controller' => 'App\\Controller\\PostLikeController::edit'], ['id_like'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2369 => [[['_route' => 'app_post_like_delete', '_controller' => 'App\\Controller\\PostLikeController::delete'], ['id_like'], ['POST' => 0], null, false, true, null]],
        2401 => [[['_route' => 'app_produits_back_edit', '_controller' => 'App\\Controller\\ProduitsBackController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2436 => [[['_route' => 'app_produits_delete_back', '_controller' => 'App\\Controller\\ProduitsBackController::delete'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2462 => [[['_route' => 'deleteTutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::deleteStudentJSON'], ['id'], null, null, false, true, null]],
        2485 => [[['_route' => 'deleteVideo', '_controller' => 'App\\Controller\\VideoMobileController::deleteStudentJSON'], ['id'], null, null, false, true, null]],
        2503 => [[['_route' => 'app_dashboard_studiodashboard', '_controller' => 'App\\Controller\\StudiodashboardController::index'], [], ['GET' => 0], null, true, false, null]],
        2525 => [[['_route' => 'app_produits_index', '_controller' => 'App\\Controller\\ProduitsController::index'], [], ['GET' => 0], null, true, false, null]],
        2546 => [[['_route' => 'app_produits_show', '_controller' => 'App\\Controller\\ProduitsController::show'], ['idproduit'], ['GET' => 0], null, false, true, null]],
        2560 => [[['_route' => 'app_produits_edit', '_controller' => 'App\\Controller\\ProduitsController::edit'], ['idproduit'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2569 => [[['_route' => 'app_produits_delete', '_controller' => 'App\\Controller\\ProduitsController::delete'], ['idproduit'], ['POST' => 0], null, false, true, null]],
        2594 => [[['_route' => 'app_category_show_json', '_controller' => 'App\\Controller\\ProduitsMobileController::showCat'], [], null, null, false, false, null]],
        2616 => [[['_route' => 'list_tutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::index'], [], null, null, false, false, null]],
        2642 => [[['_route' => 'tutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::TutorielId'], ['id'], null, null, false, true, null]],
        2676 => [[['_route' => 'showfavorisTutoriels', '_controller' => 'App\\Controller\\TutorielMobileController::showfavorisTutoriels'], ['id'], null, null, false, true, null]],
        2698 => [[['_route' => 'showbestTutoriels', '_controller' => 'App\\Controller\\TutorielMobileController::showbestTutoriels'], [], null, null, false, false, null]],
        2736 => [[['_route' => 'supprimerProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::supprimerProduitJSON'], ['idproduit'], null, null, false, true, null]],
        2750 => [[['_route' => 'app_search_post', '_controller' => 'App\\Controller\\SearchController::search'], [], null, null, false, false, null]],
        2764 => [[['_route' => 'app_sms', '_controller' => 'App\\Controller\\SmsController::index'], [], null, null, false, false, null]],
        2774 => [[['_route' => 'app_sms1', '_controller' => 'App\\Controller\\SmsController::sendSmsMessage'], [], null, null, false, false, null]],
        2812 => [[['_route' => 'produit_par_id', '_controller' => 'App\\Controller\\ProduitsMobileController::ShowProduitMobile'], ['idproduit'], null, null, false, true, null]],
        2859 => [[['_route' => 'ajouterProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::ajouterProduitJSON'], ['iduser'], null, null, false, true, null]],
        2870 => [[['_route' => 'ajax_route', '_controller' => 'App\\Controller\\AjaxController::ajaxAction'], [], null, null, false, false, null]],
        2893 => [[['_route' => 'addTutoriell', '_controller' => 'App\\Controller\\TutorielMobileController::addTutoriel'], [], null, null, false, false, null]],
        2916 => [[['_route' => 'addVideo', '_controller' => 'App\\Controller\\VideoMobileController::new'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2946 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        2997 => [[['_route' => 'modifierProduitJSON', '_controller' => 'App\\Controller\\ProduitsMobileController::modifierProduitJSON'], ['idproduit', 'iduser'], null, null, false, true, null]],
        3030 => [[['_route' => 'modifyVideo', '_controller' => 'App\\Controller\\VideoMobileController::modifyvideo'], ['id_video', 'id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3083 => [[['_route' => 'rateTutoriel', '_controller' => 'App\\Controller\\RatingTutorielMobileController::new'], ['rating', 'idTutoriel', 'idUser'], null, null, false, true, null]],
        3129 => [[['_route' => 'app_rating_new', '_controller' => 'App\\Controller\\RatingController::new'], ['rating', 'idChallenge', 'idparticipator'], null, null, false, true, null]],
        3168 => [[['_route' => 'app_rating_tutoriel_new', '_controller' => 'App\\Controller\\RatingTutorielController::new'], ['rating', 'idTutoriel'], null, null, false, true, null]],
        3212 => [[['_route' => 'fetchTutorielRates', '_controller' => 'App\\Controller\\RatingTutorielMobileController::fetchTutorielRates'], ['idTutoriel'], null, null, false, true, null]],
        3251 => [[['_route' => 'fetchRateTutoriel', '_controller' => 'App\\Controller\\RatingTutorielMobileController::fetchRateTutoriel'], ['idTutoriel', 'idUser'], null, null, false, true, null]],
        3273 => [[['_route' => 'app_tutoriel_index', '_controller' => 'App\\Controller\\TutorielController::index'], [], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        3310 => [[['_route' => 'app_tutoriel_index_search', '_controller' => 'App\\Controller\\TutorielController::search'], ['keyword', 'category'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3327 => [[['_route' => 'app_tutoriel_show', '_controller' => 'App\\Controller\\TutorielController::show'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3349 => [[['_route' => 'app_tutoriel_show_back', '_controller' => 'App\\Controller\\TutorielController::showback'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3371 => [[['_route' => 'app_tutoriel_edit', '_controller' => 'App\\Controller\\TutorielController::edit'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3395 => [[['_route' => 'app_tutoriel_delete', '_controller' => 'App\\Controller\\TutorielController::delete'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3430 => [[['_route' => 'updateTutoriel', '_controller' => 'App\\Controller\\TutorielMobileController::updateStudentJSON'], ['id'], null, null, false, true, null]],
        3451 => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoController::index'], [], ['GET' => 0], null, true, false, null]],
        3476 => [[['_route' => 'app_videoo_new', '_controller' => 'App\\Controller\\VideoController::new'], ['id_tutoriel'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3496 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id_video'], ['GET' => 0], null, false, true, null]],
        3510 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3535 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id_video'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        3551 => [[['_route' => 'app_view_index', '_controller' => 'App\\Controller\\ViewController::index'], [], ['GET' => 0], null, true, false, null]],
        3572 => [[['_route' => 'app_view_show', '_controller' => 'App\\Controller\\ViewController::show'], ['id_view'], ['GET' => 0], null, false, true, null]],
        3586 => [[['_route' => 'app_view_edit', '_controller' => 'App\\Controller\\ViewController::edit'], ['id_view'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3595 => [[['_route' => 'app_view_delete', '_controller' => 'App\\Controller\\ViewController::delete'], ['id_view'], ['POST' => 0], null, false, true, null]],
        3635 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        3675 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        3696 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        3716 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        3755 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        3770 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        3791 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        3805 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        3816 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        3852 => [
            [['_route' => 'app_challenge_show', '_controller' => 'App\\Controller\\ChallengeController::show'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
