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

/* allusers/show.html.twig */
class __TwigTemplate_20dca8a7d91fdb577f319ed17c8506d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/show.html.twig"));

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
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 30
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
        // line 48
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
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 215, $this->source); })()), "avatar", [], "any", false, false, false, 215))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">

                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()), "name", [], "any", false, false, false, 217), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()), "lastName", [], "any", false, false, false, 217), "html", null, true);
        echo "</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 222, $this->source); })()), "name", [], "any", false, false, false, 222), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 222, $this->source); })()), "lastName", [], "any", false, false, false, 222), "html", null, true);
        echo "</h6>
                        <span>";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 223, $this->source); })()), "type", [], "any", false, false, false, 223), "html", null, true);
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
        // line 260
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
<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 279
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>mes offres</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 287
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>gros mots</span>
            </a>
        </li>
        <!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 295
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Mes demandes</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 302
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 308
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Challenge</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Tutoriel</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 321
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 327
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 333
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 339, $this->source); })()), "id_user", [], "any", false, false, false, 339)]), "html", null, true);
        echo "\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->

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

                        <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                        <h2>Kevin Anderson</h2>
                        <h3>Web Designer</h3>
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
                                <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\">Overview</button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\">Edit Profile</button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-settings\">Settings</button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-change-password\">Change Password</button>
                            </li>

                        </ul>
                        <div class=\"tab-content pt-2\">

                            <div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
                                <h5 class=\"card-title\">About</h5>
                                <p class=\"small fst-italic\">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                <h5 class=\"card-title\">Profile Details</h5>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label \">Full Name</div>
                                    <div class=\"col-lg-9 col-md-8\">Kevin Anderson</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Company</div>
                                    <div class=\"col-lg-9 col-md-8\">Lueilwitz, Wisoky and Leuschke</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Job</div>
                                    <div class=\"col-lg-9 col-md-8\">Web Designer</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Country</div>
                                    <div class=\"col-lg-9 col-md-8\">USA</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Address</div>
                                    <div class=\"col-lg-9 col-md-8\">A108 Adam Street, New York, NY 535022</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Phone</div>
                                    <div class=\"col-lg-9 col-md-8\">(436) 486-3538 x29071</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Email</div>
                                    <div class=\"col-lg-9 col-md-8\">k.anderson@example.com</div>
                                </div>

                            </div>

                            <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

                                <!-- Profile Edit Form -->
                                <form>
                                    <div class=\"row mb-3\">
                                        <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\">
                                            <div class=\"pt-2\">
                                                <a href=\"#\" class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\"><i class=\"bi bi-upload\"></i></a>
                                                <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i class=\"bi bi-trash\"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Full Name</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"fullName\" type=\"text\" class=\"form-control\" id=\"fullName\" value=\"Kevin Anderson\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"about\" class=\"col-md-4 col-lg-3 col-form-label\">About</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <textarea name=\"about\" class=\"form-control\" id=\"about\" style=\"height: 100px\">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"company\" class=\"col-md-4 col-lg-3 col-form-label\">Company</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"company\" type=\"text\" class=\"form-control\" id=\"company\" value=\"Lueilwitz, Wisoky and Leuschke\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Job\" class=\"col-md-4 col-lg-3 col-form-label\">Job</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"job\" type=\"text\" class=\"form-control\" id=\"Job\" value=\"Web Designer\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Country\" class=\"col-md-4 col-lg-3 col-form-label\">Country</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"country\" type=\"text\" class=\"form-control\" id=\"Country\" value=\"USA\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Address</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"address\" type=\"text\" class=\"form-control\" id=\"Address\" value=\"A108 Adam Street, New York, NY 535022\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Phone\" class=\"col-md-4 col-lg-3 col-form-label\">Phone</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"Phone\" value=\"(436) 486-3538 x29071\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Email\" class=\"col-md-4 col-lg-3 col-form-label\">Email</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"Email\" value=\"k.anderson@example.com\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Twitter Profile</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"twitter\" type=\"text\" class=\"form-control\" id=\"Twitter\" value=\"https://twitter.com/#\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Facebook Profile</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"Facebook\" value=\"https://facebook.com/#\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Instagram\" class=\"col-md-4 col-lg-3 col-form-label\">Instagram Profile</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"instagram\" type=\"text\" class=\"form-control\" id=\"Instagram\" value=\"https://instagram.com/#\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Linkedin\" class=\"col-md-4 col-lg-3 col-form-label\">Linkedin Profile</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"linkedin\" type=\"text\" class=\"form-control\" id=\"Linkedin\" value=\"https://linkedin.com/#\">
                                        </div>
                                    </div>

                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>

                            <div class=\"tab-pane fade pt-3\" id=\"profile-settings\">

                                <!-- Settings Form -->
                                <form>

                                    <div class=\"row mb-3\">
                                        <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Email Notifications</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"changesMade\" checked>
                                                <label class=\"form-check-label\" for=\"changesMade\">
                                                    Changes made to your account
                                                </label>
                                            </div>
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"newProducts\" checked>
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
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"securityNotify\" checked disabled>
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
                                <form>

                                    <div class=\"row mb-3\">
                                        <label for=\"currentPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Current Password</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"currentPassword\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"newPassword\" class=\"col-md-4 col-lg-3 col-form-label\">New Password</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"newpassword\" type=\"password\" class=\"form-control\" id=\"newPassword\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"renewPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Re-enter New Password</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"renewpassword\" type=\"password\" class=\"form-control\" id=\"renewPassword\">
                                        </div>
                                    </div>

                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"btn btn-primary\">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

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
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://kit.fontawesome.com/a076d05399.js')\" crossorigin=\"anonymous\"></script>
<!-- Template Main JS File -->
<script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "allusers/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  820 => 670,  814 => 667,  810 => 666,  806 => 665,  802 => 664,  798 => 663,  794 => 662,  790 => 661,  786 => 660,  462 => 339,  453 => 333,  444 => 327,  435 => 321,  425 => 314,  416 => 308,  407 => 302,  397 => 295,  386 => 287,  375 => 279,  353 => 260,  313 => 223,  307 => 222,  297 => 217,  292 => 215,  122 => 48,  101 => 30,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  61 => 14,  57 => 13,  43 => 1,);
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
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{asset('assets/css/style.css') }}\" rel=\"stylesheet\">

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
<!-- ======= Sidebar ======= -->
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

    </ul>

</aside><!-- End Sidebar-->

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

                        <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                        <h2>Kevin Anderson</h2>
                        <h3>Web Designer</h3>
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
                                <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\">Overview</button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\">Edit Profile</button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-settings\">Settings</button>
                            </li>

                            <li class=\"nav-item\">
                                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-change-password\">Change Password</button>
                            </li>

                        </ul>
                        <div class=\"tab-content pt-2\">

                            <div class=\"tab-pane fade show active profile-overview\" id=\"profile-overview\">
                                <h5 class=\"card-title\">About</h5>
                                <p class=\"small fst-italic\">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                <h5 class=\"card-title\">Profile Details</h5>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label \">Full Name</div>
                                    <div class=\"col-lg-9 col-md-8\">Kevin Anderson</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Company</div>
                                    <div class=\"col-lg-9 col-md-8\">Lueilwitz, Wisoky and Leuschke</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Job</div>
                                    <div class=\"col-lg-9 col-md-8\">Web Designer</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Country</div>
                                    <div class=\"col-lg-9 col-md-8\">USA</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Address</div>
                                    <div class=\"col-lg-9 col-md-8\">A108 Adam Street, New York, NY 535022</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Phone</div>
                                    <div class=\"col-lg-9 col-md-8\">(436) 486-3538 x29071</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Email</div>
                                    <div class=\"col-lg-9 col-md-8\">k.anderson@example.com</div>
                                </div>

                            </div>

                            <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\">

                                <!-- Profile Edit Form -->
                                <form>
                                    <div class=\"row mb-3\">
                                        <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\">
                                            <div class=\"pt-2\">
                                                <a href=\"#\" class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\"><i class=\"bi bi-upload\"></i></a>
                                                <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i class=\"bi bi-trash\"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Full Name</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"fullName\" type=\"text\" class=\"form-control\" id=\"fullName\" value=\"Kevin Anderson\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"about\" class=\"col-md-4 col-lg-3 col-form-label\">About</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <textarea name=\"about\" class=\"form-control\" id=\"about\" style=\"height: 100px\">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"company\" class=\"col-md-4 col-lg-3 col-form-label\">Company</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"company\" type=\"text\" class=\"form-control\" id=\"company\" value=\"Lueilwitz, Wisoky and Leuschke\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Job\" class=\"col-md-4 col-lg-3 col-form-label\">Job</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"job\" type=\"text\" class=\"form-control\" id=\"Job\" value=\"Web Designer\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Country\" class=\"col-md-4 col-lg-3 col-form-label\">Country</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"country\" type=\"text\" class=\"form-control\" id=\"Country\" value=\"USA\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Address</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"address\" type=\"text\" class=\"form-control\" id=\"Address\" value=\"A108 Adam Street, New York, NY 535022\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Phone\" class=\"col-md-4 col-lg-3 col-form-label\">Phone</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"Phone\" value=\"(436) 486-3538 x29071\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Email\" class=\"col-md-4 col-lg-3 col-form-label\">Email</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"Email\" value=\"k.anderson@example.com\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Twitter Profile</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"twitter\" type=\"text\" class=\"form-control\" id=\"Twitter\" value=\"https://twitter.com/#\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Facebook Profile</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"Facebook\" value=\"https://facebook.com/#\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Instagram\" class=\"col-md-4 col-lg-3 col-form-label\">Instagram Profile</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"instagram\" type=\"text\" class=\"form-control\" id=\"Instagram\" value=\"https://instagram.com/#\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"Linkedin\" class=\"col-md-4 col-lg-3 col-form-label\">Linkedin Profile</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"linkedin\" type=\"text\" class=\"form-control\" id=\"Linkedin\" value=\"https://linkedin.com/#\">
                                        </div>
                                    </div>

                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>

                            <div class=\"tab-pane fade pt-3\" id=\"profile-settings\">

                                <!-- Settings Form -->
                                <form>

                                    <div class=\"row mb-3\">
                                        <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Email Notifications</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"changesMade\" checked>
                                                <label class=\"form-check-label\" for=\"changesMade\">
                                                    Changes made to your account
                                                </label>
                                            </div>
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"newProducts\" checked>
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
                                                <input class=\"form-check-input\" type=\"checkbox\" id=\"securityNotify\" checked disabled>
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
                                <form>

                                    <div class=\"row mb-3\">
                                        <label for=\"currentPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Current Password</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"currentPassword\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"newPassword\" class=\"col-md-4 col-lg-3 col-form-label\">New Password</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"newpassword\" type=\"password\" class=\"form-control\" id=\"newPassword\">
                                        </div>
                                    </div>

                                    <div class=\"row mb-3\">
                                        <label for=\"renewPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Re-enter New Password</label>
                                        <div class=\"col-md-8 col-lg-9\">
                                            <input name=\"renewpassword\" type=\"password\" class=\"form-control\" id=\"renewPassword\">
                                        </div>
                                    </div>

                                    <div class=\"text-center\">
                                        <button type=\"submit\" class=\"btn btn-primary\">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

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
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"{{asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
<script src=\"{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{asset('assets/vendor/chart.js/chart.umd.js') }}\"></script>
<script src=\"{{asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
<script src=\"{{asset('assets/vendor/quill/quill.min.js') }}\"></script>
<script src=\"{{asset('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
<script src=\"{{asset('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{asset('assets/vendor/php-email-form/validate.js') }}\"></script>
<script src=\"https://kit.fontawesome.com/a076d05399.js')\" crossorigin=\"anonymous\"></script>
<!-- Template Main JS File -->
<script src=\"{{asset('assets/js/main.js') }}\"></script>

</body>

</html>", "allusers/show.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\allusers\\show.html.twig");
    }
}
