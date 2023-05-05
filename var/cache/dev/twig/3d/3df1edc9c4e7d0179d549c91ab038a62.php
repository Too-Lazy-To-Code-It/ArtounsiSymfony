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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
            <span class=\"d-none d-lg-block\">Artounsi</span>
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
                    <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>Kevin Anderson</h6>
                        <span>Web Designer</span>
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
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>mes offres</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 286
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>gros mots</span>
            </a>
        </li>
        <!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 294
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Mes demandes</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 301
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 307
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Challenge</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 313
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Tutoriel</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 320
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 326
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 332
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 338, $this->source); })()), "id_user", [], "any", false, false, false, 338)]), "html", null, true);
        echo "\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 344, $this->source); })()), "id_user", [], "any", false, false, false, 344)]), "html", null, true);
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
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 377, $this->source); })()), "avatar", [], "any", false, false, false, 377))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
                        <h2>";
        // line 378
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 378, $this->source); })()), "name", [], "any", false, false, false, 378), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 378, $this->source); })()), "LastName", [], "any", false, false, false, 378), "html", null, true);
        echo "</h2>
                        <h3>";
        // line 379
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 379, $this->source); })()), "type", [], "any", false, false, false, 379), "html", null, true);
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
        // line 436
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 436, $this->source); })()), "name", [], "any", false, false, false, 436), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Last Name</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 441
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 441, $this->source); })()), "LastName", [], "any", false, false, false, 441), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Email</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 446
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 446, $this->source); })()), "Email", [], "any", false, false, false, 446), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Country</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 451
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 451, $this->source); })()), "nationality", [], "any", false, false, false, 451), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Type</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 456
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 456, $this->source); })()), "type", [], "any", false, false, false, 456), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Nickname</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 460
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 460, $this->source); })()), "nickname", [], "any", false, false, false, 460), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Bio</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 465
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 465, $this->source); })()), "bio", [], "any", false, false, false, 465), "html", null, true);
        echo "m</div>
                                </div>

                            </div>

                            <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

                                <!-- Profile Edit Form -->
                                ";
        // line 473
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 473, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                <div class=\"row mb-3\">
                                    <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile
                                        Image</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        <img src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 478, $this->source); })()), "avatar", [], "any", false, false, false, 478))), "html", null, true);
        echo "\" alt=\"Profile\">
                                        <div class=\"pt-2\">
                                            ";
        // line 480
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 480, $this->source); })()), "avatar", [], "any", false, false, false, 480), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nickname"]]);
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
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Backgrounds/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 491, $this->source); })()), "background", [], "any", false, false, false, 491))), "html", null, true);
        echo "\"
                                             alt=\"Profile\">
                                        <div class=\"pt-2\">
                                            ";
        // line 494
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 494, $this->source); })()), "background", [], "any", false, false, false, 494), 'row', ["attr" => ["class" => "form-control"]]);
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
        // line 504
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 504, $this->source); })()), "nickname", [], "any", false, false, false, 504), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"about\" class=\"col-md-4 col-lg-3 col-form-label\">Description</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 512
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), "description", [], "any", false, false, false, 512), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"company\" class=\"col-md-4 col-lg-3 col-form-label\">Bio</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 519
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 519, $this->source); })()), "bio", [], "any", false, false, false, 519), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 520
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 520, $this->source); })()), "bio", [], "any", false, false, false, 520), 'errors');
        echo "

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Job\" class=\"col-md-4 col-lg-3 col-form-label\">Type</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 528
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 528, $this->source); })()), "type", [], "any", false, false, false, 528), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Country\" class=\"col-md-4 col-lg-3 col-form-label\">Country</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 536
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 536, $this->source); })()), "nationality", [], "any", false, false, false, 536), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                    <label for=\"Phone\" class=\"col-md-4 col-lg-3 col-form-label\">Name</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 542
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 542, $this->source); })()), "name", [], "any", false, false, false, 542), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                    <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Last Name</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 549
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 549, $this->source); })()), "Last_Name", [], "any", false, false, false, 549), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Email\" class=\"col-md-4 col-lg-3 col-form-label\">Email</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 556
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 556, $this->source); })()), "Email", [], "any", false, false, false, 556), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Birthday
                                        Profile</label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 565
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 565, $this->source); })()), "Birthday", [], "any", false, false, false, 565), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Password
                                    </label>
                                    <div class=\"col-md-8 col-lg-9\">
                                        ";
        // line 573
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 573, $this->source); })()), "password", [], "any", false, false, false, 573), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"text-center\">
                                    <button type=\"submit\"
                                            class=\"btn btn-primary\">";
        // line 578
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 578, $this->source); })()), "Safe changes")) : ("Safe changes")), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                            ";
        // line 581
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 581, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
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
        // line 633
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 633, $this->source); })()), 'form_start', ["attr" => ["class" => "signin-form", "novalidate" => "novalidate"]]);
        echo "


                            <div class=\"row mb-3\">
                                <label for=\"currentPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Phone
                                    Number</label>
                                <div class=\"col-md-8 col-lg-9\">
                                    ";
        // line 640
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 640, $this->source); })()), "number", [], "any", false, false, false, 640), 'row');
        echo "
                                </div>
                            </div>

                            <div class=\"text-center\">
                                <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
                            </div>
                            ";
        // line 647
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forme"]) || array_key_exists("forme", $context) ? $context["forme"] : (function () { throw new RuntimeError('Variable "forme" does not exist.', 647, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
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
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://bootstrapmade.com/"), "html", null, true);
        echo "\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main JS File -->
<script src=\"";
        // line 691
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
        return array (  923 => 691,  917 => 688,  913 => 687,  909 => 686,  905 => 685,  901 => 684,  897 => 683,  893 => 682,  889 => 681,  878 => 673,  849 => 647,  839 => 640,  829 => 633,  774 => 581,  768 => 578,  760 => 573,  749 => 565,  737 => 556,  727 => 549,  717 => 542,  708 => 536,  697 => 528,  686 => 520,  682 => 519,  672 => 512,  661 => 504,  648 => 494,  642 => 491,  628 => 480,  623 => 478,  615 => 473,  604 => 465,  596 => 460,  589 => 456,  581 => 451,  573 => 446,  565 => 441,  557 => 436,  497 => 379,  491 => 378,  487 => 377,  451 => 344,  442 => 338,  433 => 332,  424 => 326,  415 => 320,  405 => 313,  396 => 307,  387 => 301,  377 => 294,  366 => 286,  355 => 278,  123 => 49,  102 => 31,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  61 => 14,  57 => 13,  43 => 1,);
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
            <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"\">
            <span class=\"d-none d-lg-block\">Artounsi</span>
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
                    <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>Kevin Anderson</h6>
                        <span>Web Designer</span>
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
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_offres') }}\">
                <i class=\"bi bi-briefcase\"></i>
                <span>mes offres</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_grosmots_index') }}\">
                <i class=\"bi bi-person\"></i>
                <span>gros mots</span>
            </a>
        </li>
        <!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_demandes') }}\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Mes demandes</span>
            </a>
        </li>

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
