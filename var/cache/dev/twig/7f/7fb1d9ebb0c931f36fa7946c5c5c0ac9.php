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
class __TwigTemplate_1e22f0ffcb48ad758f567938a25988dc extends Template
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
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
            <span class=\"d-none d-lg-block\">NiceAdmin</span>
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

<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"index.html\">
                <i class=\"bi bi-grid\"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-menu-button-wide\"></i><span>Components</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"components-alerts.html\">
                        <i class=\"bi bi-circle\"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-accordion.html\">
                        <i class=\"bi bi-circle\"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-badges.html\">
                        <i class=\"bi bi-circle\"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-breadcrumbs.html\">
                        <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-buttons.html\">
                        <i class=\"bi bi-circle\"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-cards.html\">
                        <i class=\"bi bi-circle\"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-carousel.html\">
                        <i class=\"bi bi-circle\"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-list-group.html\">
                        <i class=\"bi bi-circle\"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-modal.html\">
                        <i class=\"bi bi-circle\"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tabs.html\">
                        <i class=\"bi bi-circle\"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-pagination.html\">
                        <i class=\"bi bi-circle\"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-progress.html\">
                        <i class=\"bi bi-circle\"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-spinners.html\">
                        <i class=\"bi bi-circle\"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tooltips.html\">
                        <i class=\"bi bi-circle\"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"forms-elements.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-layouts.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-editors.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-validation.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"tables-general.html\">
                        <i class=\"bi bi-circle\"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href=\"tables-data.html\">
                        <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"charts-chartjs.html\">
                        <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-apexcharts.html\">
                        <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-echarts.html\">
                        <i class=\"bi bi-circle\"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"icons-bootstrap.html\">
                        <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-remix.html\">
                        <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-boxicons.html\">
                        <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class=\"nav-heading\">Pages</li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                <i class=\"bi bi-envelope\"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                <i class=\"bi bi-card-list\"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                <i class=\"bi bi-box-arrow-in-right\"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                <i class=\"bi bi-dash-circle\"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                <i class=\"bi bi-file-earmark\"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

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

                        <img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile-img.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
                        <h2>";
        // line 530
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 530, $this->source); })()), "name", [], "any", false, false, false, 530), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 530, $this->source); })()), "LastName", [], "any", false, false, false, 530), "html", null, true);
        echo "</h2>
                        <h3>";
        // line 531
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 531, $this->source); })()), "type", [], "any", false, false, false, 531), "html", null, true);
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
                                    <div class=\"col-lg-3 col-md-4 label \">Name</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 577
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 577, $this->source); })()), "name", [], "any", false, false, false, 577), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Last Name</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 582
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 582, $this->source); })()), "LastName", [], "any", false, false, false, 582), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Email</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 587
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 587, $this->source); })()), "Email", [], "any", false, false, false, 587), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Country</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 592
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 592, $this->source); })()), "nationality", [], "any", false, false, false, 592), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Type</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 597
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 597, $this->source); })()), "type", [], "any", false, false, false, 597), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Nickname</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 601
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 601, $this->source); })()), "nickname", [], "any", false, false, false, 601), "html", null, true);
        echo "</div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-md-4 label\">Bio</div>
                                    <div class=\"col-lg-9 col-md-8\">";
        // line 606
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 606, $this->source); })()), "bio", [], "any", false, false, false, 606), "html", null, true);
        echo "m</div>
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
        Designed by <a href=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://bootstrapmade.com/"), "html", null, true);
        echo "\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"";
        // line 819
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 820
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 824
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 825
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 826
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main JS File -->
<script src=\"";
        // line 829
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
        return array (  971 => 829,  965 => 826,  961 => 825,  957 => 824,  953 => 823,  949 => 822,  945 => 821,  941 => 820,  937 => 819,  927 => 812,  718 => 606,  710 => 601,  703 => 597,  695 => 592,  687 => 587,  679 => 582,  671 => 577,  622 => 531,  616 => 530,  612 => 529,  128 => 48,  107 => 30,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  71 => 18,  67 => 17,  61 => 14,  57 => 13,  43 => 1,);
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
    <link href=\"{{asset('assets/img/favicon.png')}}\" rel=\"icon\">
    <link href=\"{{asset('assets/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"{{asset('https://fonts.gstatic.com')}}\" rel=\"preconnect\">
    <link href=\"{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/quill/quill.snow.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/quill/quill.bubble.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/vendor/simple-datatables/style.css')}}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\">

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
            <img src=\"{{asset('assets/img/logo.png')}}\" alt=\"\">
            <span class=\"d-none d-lg-block\">NiceAdmin</span>
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

<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"index.html\">
                <i class=\"bi bi-grid\"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-menu-button-wide\"></i><span>Components</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"components-alerts.html\">
                        <i class=\"bi bi-circle\"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-accordion.html\">
                        <i class=\"bi bi-circle\"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-badges.html\">
                        <i class=\"bi bi-circle\"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-breadcrumbs.html\">
                        <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-buttons.html\">
                        <i class=\"bi bi-circle\"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-cards.html\">
                        <i class=\"bi bi-circle\"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-carousel.html\">
                        <i class=\"bi bi-circle\"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-list-group.html\">
                        <i class=\"bi bi-circle\"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-modal.html\">
                        <i class=\"bi bi-circle\"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tabs.html\">
                        <i class=\"bi bi-circle\"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-pagination.html\">
                        <i class=\"bi bi-circle\"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-progress.html\">
                        <i class=\"bi bi-circle\"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-spinners.html\">
                        <i class=\"bi bi-circle\"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tooltips.html\">
                        <i class=\"bi bi-circle\"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"forms-elements.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-layouts.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-editors.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-validation.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"tables-general.html\">
                        <i class=\"bi bi-circle\"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href=\"tables-data.html\">
                        <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"charts-chartjs.html\">
                        <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-apexcharts.html\">
                        <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-echarts.html\">
                        <i class=\"bi bi-circle\"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"icons-bootstrap.html\">
                        <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-remix.html\">
                        <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-boxicons.html\">
                        <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class=\"nav-heading\">Pages</li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                <i class=\"bi bi-envelope\"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                <i class=\"bi bi-card-list\"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                <i class=\"bi bi-box-arrow-in-right\"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                <i class=\"bi bi-dash-circle\"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                <i class=\"bi bi-file-earmark\"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

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

                        <img src=\"{{asset('assets/img/profile-img.jpg')}}\" alt=\"Profile\" class=\"rounded-circle\">
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
        Designed by <a href=\"{{asset('https://bootstrapmade.com/')}}\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}\"></script>
<script src=\"{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<script src=\"{{asset('assets/vendor/chart.js/chart.umd.js')}}\"></script>
<script src=\"{{asset('assets/vendor/echarts/echarts.min.js')}}\"></script>
<script src=\"{{asset('assets/vendor/quill/quill.min.js')}}\"></script>
<script src=\"{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}\"></script>
<script src=\"{{asset('assets/vendor/tinymce/tinymce.min.js')}}\"></script>
<script src=\"{{asset('assets/vendor/php-email-form/validate.js')}}\"></script>

<!-- Template Main JS File -->
<script src=\"{{asset('assets/js/main.js')}}\"></script>

</body>

</html>", "allusers/usershow.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\allusers\\usershow.html.twig");
    }
}
