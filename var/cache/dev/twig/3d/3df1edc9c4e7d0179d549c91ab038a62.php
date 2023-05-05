<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* allusers/usershow.html.twig */
class __TwigTemplate_809a251513fe158cb03cacbdb0f7a093 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/usershow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/usershow.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Users / Profile - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\"
          rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ARTounsi.png"), "html", null, true);
        echo "\" width=\"50\" height=\"300\" alt=\"\">
            <span class=\"d-none d-lg-block\">ArTounsi</span>

        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
        <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
            <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
            <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-bell\"></i>
                    <span class=\"badge bg-primary badge-number\">4</span>
                </a><!-- End Notification Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                    <li class=\"dropdown-header\">
                        You have 4 new notifications
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-exclamation-circle text-warning\"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-x-circle text-danger\"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-check-circle text-success\"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-info-circle text-primary\"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>
                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-chat-left-text\"></i>
                    <span class=\"badge bg-success badge-number\">3</span>
                </a><!-- End Messages Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                    <li class=\"dropdown-header\">
                        You have 3 new messages
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 216, $this->source); })()), "avatar", [], "any", false, false, false, 216))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">

                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 218, $this->source); })()), "name", [], "any", false, false, false, 218), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 218, $this->source); })()), "lastName", [], "any", false, false, false, 218), "html", null, true);
        echo "</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 223, $this->source); })()), "name", [], "any", false, false, false, 223), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 223, $this->source); })()), "lastName", [], "any", false, false, false, 223), "html", null, true);
        echo "</h6>
                        <span>";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 224, $this->source); })()), "type", [], "any", false, false, false, 224), "html", null, true);
        echo "</span>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-gear\"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 261
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
        echo "\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>

<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
        ";
        // line 278
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 278, $this->source); })()), "type", [], "any", false, false, false, 278) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 278, $this->source); })()), "type", [], "any", false, false, false, 278) == "Studio"))) {
            // line 279
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 280
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
            echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
        ";
        }
        // line 286
        echo "        <!-- End Profile Page Nav -->
        ";
        // line 287
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 287, $this->source); })()), "type", [], "any", false, false, false, 287) == "Admin")) {
            // line 288
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 289
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
            echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
        ";
        }
        // line 295
        echo "        <!-- End F.A.Q Page Nav -->
        ";
        // line 296
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 296, $this->source); })()), "type", [], "any", false, false, false, 296) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 296, $this->source); })()), "type", [], "any", false, false, false, 296) == "Artist"))) {
            // line 297
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 298
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
            echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>
        ";
        }
        // line 304
        echo "
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 306
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 312
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Challenge</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 318
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Tutoriel</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 325
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 331
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 337
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 343
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 349, $this->source); })()), "id_user", [], "any", false, false, false, 349)]), "html", null, true);
        echo "\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>


</aside>

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Profile</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Users</li>
                <li class=\"breadcrumb-item active\">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class=\"section profile\">
        <div class=\"row\">
            <div class=\"col-xl-4\">

                <div class=\"card\">
                    <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">

                        <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 379, $this->source); })()), "avatar", [], "any", false, false, false, 379))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
                        <h2>";
        // line 380
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 380, $this->source); })()), "name", [], "any", false, false, false, 380), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 380, $this->source); })()), "LastName", [], "any", false, false, false, 380), "html", null, true);
        echo "</h2>
                        <h3>";
        // line 381
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 381, $this->source); })()), "type", [], "any", false, false, false, 381), "html", null, true);
        echo "</h3>
                        <div class=\"social-links mt-2\">
                            <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                            <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                            <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                            <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"col-xl-8\">

                <div class=\"card\">
                    <div class=\"card-body pt-3\">
                        <!-- Bordered Tabs -->
                        <ul class=\"nav nav-tabs nav-tabs-bordered\">

                            <li class=\"nav-item\">
                                <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\">
                                    Overview
                                </button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\">Edit
                                    Profile
                                </button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-settings\">
                                    Settings
                                </button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-change-password\">
                                    2FA
                                </button>
                            </li>

                        </ul>
                        <div class=\"tab-content pt-2\">

                            <div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
                                <h5 class=\"card-title\">About</h5>
                                <p class=\"small fst-italic\">Sunt est soluta temporibus accusantium neque nam maiores
                                    cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure
                                    rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at
                                    unde.</p>

                                <h5 class=\"card-title\">Profile Details</h5>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label \">Name</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 438
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 438, $this->source); })()), "name", [], "any", false, false, false, 438), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Last Name</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 443
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 443, $this->source); })()), "LastName", [], "any", false, false, false, 443), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Email</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 448
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 448, $this->source); })()), "Email", [], "any", false, false, false, 448), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Country</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 453
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 453, $this->source); })()), "nationality", [], "any", false, false, false, 453), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Type</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 458
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 458, $this->source); })()), "type", [], "any", false, false, false, 458), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Nickname</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 462
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 462, $this->source); })()), "nickname", [], "any", false, false, false, 462), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Bio</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 467
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 467, $this->source); })()), "bio", [], "any", false, false, false, 467), "html", null, true);
        echo "m</div>
                                </div>

                            </div>

                            <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

                                <!-- Profile Edit Form -->
                                ";
        // line 475
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 475, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"row mb-3\">
                                    <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile
                                        Image</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        <img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 480, $this->source); })()), "avatar", [], "any", false, false, false, 480))), "html", null, true);
        echo "\" alt=\"Profile\">
                                        <div class=\"pt-2\">
                                            ";
        // line 482
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()), "avatar", [], "any", false, false, false, 482), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nickname"]]);
        echo "

                                            <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i
                                                        class=\"bi bi-trash\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                    <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile
                                        Background</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        <img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Backgrounds/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 493, $this->source); })()), "background", [], "any", false, false, false, 493))), "html", null, true);
        echo "\"
                                             alt=\"Profile\">
                                        <div class=\"pt-2\">
                                            ";
        // line 496
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 496, $this->source); })()), "background", [], "any", false, false, false, 496), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                            <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i
                                                        class=\"bi bi-trash\"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Username</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 506
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 506, $this->source); })()), "nickname", [], "any", false, false, false, 506), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"about\" class=\"col-md-4 col-lg-3 col-form-label\">Description</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 514
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 514, $this->source); })()), "description", [], "any", false, false, false, 514), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"company\" class=\"col-md-4 col-lg-3 col-form-label\">Bio</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 521
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 521, $this->source); })()), "bio", [], "any", false, false, false, 521), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 522
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 522, $this->source); })()), "bio", [], "any", false, false, false, 522), 'errors');
        echo "

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Job\" class=\"col-md-4 col-lg-3 col-form-label\">Type</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 530
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 530, $this->source); })()), "type", [], "any", false, false, false, 530), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Country\" class=\"col-md-4 col-lg-3 col-form-label\">Country</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 538
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 538, $this->source); })()), "nationality", [], "any", false, false, false, 538), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                    <label for=\"Phone\" class=\"col-md-4 col-lg-3 col-form-label\">Name</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 544
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "name", [], "any", false, false, false, 544), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                    <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Last Name</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 551
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 551, $this->source); })()), "Last_Name", [], "any", false, false, false, 551), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Email\" class=\"col-md-4 col-lg-3 col-form-label\">Email</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 558
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 558, $this->source); })()), "Email", [], "any", false, false, false, 558), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Birthday
                                        Profile</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 567
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 567, $this->source); })()), "Birthday", [], "any", false, false, false, 567), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Password
                                    </label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 575
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 575, $this->source); })()), "password", [], "any", false, false, false, 575), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\"
                                            class=\"btn btn-primary\">";
        // line 580
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 580, $this->source); })()), "Safe changes")) : ("Safe changes")), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                            ";
        // line 583
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 583, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                        </div>

                        <div class=\"tab-pane fade pt-3\" id=\"profile-settings\">

                            <!-- Settings Form -->
                            <form>

                                <div class=\"row mb-3\">
                                    <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Email
                                        Notifications</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"changesMade\"
                                                   checked>
                                            <label class=\"form-check-label\" for=\"changesMade\">
                                                Changes made to your account
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"newProducts\"
                                                   checked>
                                            <label class=\"form-check-label\" for=\"newProducts\">
                                                Information on new products and services
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"proOffers\">
                                            <label class=\"form-check-label\" for=\"proOffers\">
                                                Marketing and promo offers
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"securityNotify\"
                                                   checked disabled>
                                            <label class=\"form-check-label\" for=\"securityNotify\">
                                                Security alerts
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                                </div>
                            </form><!-- End settings Form -->

                        </div>

                        <div class=\"tab-pane fade pt-3\" id=\"profile-change-password\">
                            <!-- Change Password Form -->
                            ";
        // line 635
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 635, $this->source); })()), 'form_start', ["attr" => ["class" => "signin-form", "novalidate" => "novalidate"]]);
        echo "


                            <div class=\"row mb-3\">
                                <label for=\"currentPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Phone
                                    Number</label>
                                <div class=\"col-md-8 col-lg-9\">
                                    ";
        // line 642
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 642, $this->source); })()), "number", [], "any", false, false, false, 642), 'row');
        echo "
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
                            </div>
                            ";
        // line 649
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 649, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://bootstrapmade.com/"), "html", null, true);
        echo "\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main JS File -->
<script src=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "allusers/usershow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  959 => 693,  953 => 690,  949 => 689,  945 => 688,  941 => 687,  937 => 686,  933 => 685,  929 => 684,  925 => 683,  914 => 675,  885 => 649,  875 => 642,  865 => 635,  810 => 583,  804 => 580,  796 => 575,  785 => 567,  773 => 558,  763 => 551,  753 => 544,  744 => 538,  733 => 530,  722 => 522,  718 => 521,  708 => 514,  697 => 506,  684 => 496,  678 => 493,  664 => 482,  659 => 480,  651 => 475,  640 => 467,  632 => 462,  625 => 458,  617 => 453,  609 => 448,  601 => 443,  593 => 438,  533 => 381,  527 => 380,  523 => 379,  490 => 349,  481 => 343,  472 => 337,  463 => 331,  454 => 325,  444 => 318,  435 => 312,  426 => 306,  422 => 304,  413 => 298,  410 => 297,  408 => 296,  405 => 295,  396 => 289,  393 => 288,  391 => 287,  388 => 286,  379 => 280,  376 => 279,  374 => 278,  354 => 261,  314 => 224,  308 => 223,  298 => 218,  293 => 216,  123 => 49,  102 => 31,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Users / Profile - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\"
          rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"{{ asset('assets/img/ARTounsi.png') }}\" width=\"50\" height=\"300\" alt=\"\">
            <span class=\"d-none d-lg-block\">ArTounsi</span>

        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
        <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
            <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
            <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-bell\"></i>
                    <span class=\"badge bg-primary badge-number\">4</span>
                </a><!-- End Notification Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                    <li class=\"dropdown-header\">
                        You have 4 new notifications
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-exclamation-circle text-warning\"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-x-circle text-danger\"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-check-circle text-success\"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-info-circle text-primary\"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>
                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-chat-left-text\"></i>
                    <span class=\"badge bg-success badge-number\">3</span>
                </a><!-- End Messages Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                    <li class=\"dropdown-header\">
                        You have 3 new messages
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <img src=\"{{ asset('uploads/Avatars/' ~ user.avatar) }}\" alt=\"Profile\" class=\"rounded-circle\">

                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ user.name }} {{ user.lastName }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>{{ user.name }}.{{ user.lastName }}</h6>
                        <span>{{ user.type }}</span>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-gear\"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_allusers_logout') }}\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>

<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
        {% if(user.type=='Admin' or user.type=='Studio') %}
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_offres') }}\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
        {% endif %}
        <!-- End Profile Page Nav -->
        {% if(user.type=='Admin') %}
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_grosmots_index') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
        {% endif %}
        <!-- End F.A.Q Page Nav -->
        {% if(user.type=='Admin' or user.type=='Artist') %}
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_demandes') }}\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>
        {% endif %}

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_produits_back_new') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_challenge_index_back') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Challenge</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_tutoriel_index_back') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Tutoriel</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_dashboard_home_page') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_produits_back') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_allusers_index') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_ban_index') }}\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_allusers_edit',{'id_user': user.id_user}) }}\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>


</aside>

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Profile</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Users</li>
                <li class=\"breadcrumb-item active\">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class=\"section profile\">
        <div class=\"row\">
            <div class=\"col-xl-4\">

                <div class=\"card\">
                    <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">

                        <img src=\"{{ asset('uploads/Avatars/' ~ user.avatar) }}\" alt=\"Profile\" class=\"rounded-circle\">
                        <h2>{{ alluser.name }} {{ alluser.LastName }}</h2>
                        <h3>{{ alluser.type }}</h3>
                        <div class=\"social-links mt-2\">
                            <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                            <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                            <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                            <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"col-xl-8\">

                <div class=\"card\">
                    <div class=\"card-body pt-3\">
                        <!-- Bordered Tabs -->
                        <ul class=\"nav nav-tabs nav-tabs-bordered\">

                            <li class=\"nav-item\">
                                <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\">
                                    Overview
                                </button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\">Edit
                                    Profile
                                </button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-settings\">
                                    Settings
                                </button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-change-password\">
                                    2FA
                                </button>
                            </li>

                        </ul>
                        <div class=\"tab-content pt-2\">

                            <div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
                                <h5 class=\"card-title\">About</h5>
                                <p class=\"small fst-italic\">Sunt est soluta temporibus accusantium neque nam maiores
                                    cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure
                                    rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at
                                    unde.</p>

                                <h5 class=\"card-title\">Profile Details</h5>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label \">Name</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ alluser.name }}</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Last Name</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ alluser.LastName }}</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Email</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ alluser.Email }}</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Country</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ alluser.nationality }}</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Type</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ alluser.type }}</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Nickname</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ alluser.nickname }}</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Bio</div>
                                    <div class=\"col-lg-9 col-md-8\">{{ alluser.bio }}m</div>
                                </div>

                            </div>

                            <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

                                <!-- Profile Edit Form -->
                                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                                <div class=\"row mb-3\">
                                    <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile
                                        Image</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        <img src=\"{{ asset('uploads/Avatars/' ~ user.avatar) }}\" alt=\"Profile\">
                                        <div class=\"pt-2\">
                                            {{ form_row(form.avatar,{'attr':{'class':'form-control','placeholder':'Nickname'}}) }}

                                            <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i
                                                        class=\"bi bi-trash\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                    <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile
                                        Background</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        <img src=\"{{ asset('uploads/Backgrounds/' ~ user.background) }}\"
                                             alt=\"Profile\">
                                        <div class=\"pt-2\">
                                            {{ form_row(form.background,{'attr':{'class':'form-control'}}) }}
                                            <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i
                                                        class=\"bi bi-trash\"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Username</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        {{ form_row(form.nickname,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"about\" class=\"col-md-4 col-lg-3 col-form-label\">Description</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        {{ form_row(form.description,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"company\" class=\"col-md-4 col-lg-3 col-form-label\">Bio</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        {{ form_row(form.bio,{'attr':{'class':'form-control'}}) }}
                                        {{ form_errors(form.bio) }}

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Job\" class=\"col-md-4 col-lg-3 col-form-label\">Type</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        {{ form_row(form.type,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Country\" class=\"col-md-4 col-lg-3 col-form-label\">Country</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        {{ form_row(form.nationality,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                    <label for=\"Phone\" class=\"col-md-4 col-lg-3 col-form-label\">Name</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        {{ form_row(form.name,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                    <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Last Name</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        {{ form_row(form.Last_Name,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Email\" class=\"col-md-4 col-lg-3 col-form-label\">Email</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        {{ form_row(form.Email,{'attr':{'class':'form-control'}}) }}

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Birthday
                                        Profile</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        {{ form_row(form.Birthday,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Password
                                    </label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        {{ form_row(form.password,{'attr':{'class':'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\"
                                            class=\"btn btn-primary\">{{ button_label|default('Safe changes') }}</button>
                                </div>
                            </div>
                            {{ form_end(form, {'attr': {'novalidate': 'novalidate'}}) }}

                        </div>

                        <div class=\"tab-pane fade pt-3\" id=\"profile-settings\">

                            <!-- Settings Form -->
                            <form>

                                <div class=\"row mb-3\">
                                    <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Email
                                        Notifications</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"changesMade\"
                                                   checked>
                                            <label class=\"form-check-label\" for=\"changesMade\">
                                                Changes made to your account
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"newProducts\"
                                                   checked>
                                            <label class=\"form-check-label\" for=\"newProducts\">
                                                Information on new products and services
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"proOffers\">
                                            <label class=\"form-check-label\" for=\"proOffers\">
                                                Marketing and promo offers
                                            </label>
                                        </div>
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"securityNotify\"
                                                   checked disabled>
                                            <label class=\"form-check-label\" for=\"securityNotify\">
                                                Security alerts
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"text-center\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                                </div>
                            </form><!-- End settings Form -->

                        </div>

                        <div class=\"tab-pane fade pt-3\" id=\"profile-change-password\">
                            <!-- Change Password Form -->
                            {{ form_start(forme,{'attr':{'class':'signin-form','novalidate': 'novalidate'}}) }}


                            <div class=\"row mb-3\">
                                <label for=\"currentPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Phone
                                    Number</label>
                                <div class=\"col-md-8 col-lg-9\">
                                    {{ form_row(forme.number) }}
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
                            </div>
                            {{ form_end(forme, {'attr': {'novalidate': 'novalidate'}}) }}
                            <!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"{{ asset('https://bootstrapmade.com/') }}\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/chart.js/chart.umd.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/quill/quill.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

<!-- Template Main JS File -->
<script src=\"{{ asset('assets/js/main.js') }}\"></script>

</body>

</html>", "allusers/usershow.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\allusers\\usershow.html.twig");
    }
}
