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

/* dashboard/forms-elements.html.twig */
class __TwigTemplate_1b6386f91972bb79c6357e4cbc35b075 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/forms-elements.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/forms-elements.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                <span class=\"d-none d-lg-block\">NiceAdmin</span>
            </a>
            <i class=\"bi bi-list toggle-sidebar-btn\"></i>
        </div>
        <!-- End Logo -->

        <div class=\"search-bar\">
            <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class=\"header-nav ms-auto\">
            <ul class=\"d-flex align-items-center\">

                <li class=\"nav-item d-block d-lg-none\">
                    <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                        <i class=\"bi bi-search\"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-bell\"></i>
                        <span class=\"badge bg-primary badge-number\">4</span>
                    </a>
                    <!-- End Notification Icon -->

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

                    </ul>
                    <!-- End Notification Dropdown Items -->

                </li>
                <!-- End Notification Nav -->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-chat-left-text\"></i>
                        <span class=\"badge bg-success badge-number\">3</span>
                    </a>
                    <!-- End Messages Icon -->

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
                                <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/messages-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
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
                                <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/messages-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
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
                                <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/messages-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
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

                    </ul>
                    <!-- End Messages Dropdown Items -->

                </li>
                <!-- End Messages Nav -->

                <li class=\"nav-item dropdown pe-3\">

                    <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/profile-img.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                    </a>
                    <!-- End Profile Iamge Icon -->

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

                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->

            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"index.html\">
                    <i class=\"bi bi-grid\"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

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
            </li>
            <!-- End Components Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link \" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"forms-elements.html\" class=\"active\">
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
            </li>
            <!-- End Forms Nav -->

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
            </li>
            <!-- End Tables Nav -->

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
            </li>
            <!-- End Charts Nav -->

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
            </li>
            <!-- End Icons Nav -->

            <li class=\"nav-heading\">Pages</li>

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                    <i class=\"bi bi-person\"></i>
                    <span>Profile</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                    <i class=\"bi bi-question-circle\"></i>
                    <span>F.A.Q</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                    <i class=\"bi bi-envelope\"></i>
                    <span>Contact</span>
                </a>
            </li>
            <!-- End Contact Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                    <i class=\"bi bi-card-list\"></i>
                    <span>Register</span>
                </a>
            </li>
            <!-- End Register Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                    <i class=\"bi bi-box-arrow-in-right\"></i>
                    <span>Login</span>
                </a>
            </li>
            <!-- End Login Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                    <i class=\"bi bi-dash-circle\"></i>
                    <span>Error 404</span>
                </a>
            </li>
            <!-- End Error 404 Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                    <i class=\"bi bi-file-earmark\"></i>
                    <span>Blank</span>
                </a>
            </li>
            <!-- End Blank Page Nav -->

        </ul>

    </aside>
    <!-- End Sidebar-->

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Form Elements</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Forms</li>
                    <li class=\"breadcrumb-item active\">Elements</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">General Form Elements</h5>

                            <!-- General Form Elements -->
                           ";
        // line 561
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 561, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "contact", "class" => "my-class"]]);
        echo "
                                <div class=\"row mb-3\">
                                 ";
        // line 563
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 563, $this->source); })()), "titreoffre", [], "any", false, false, false, 563), 'label', ["label_attr" => ["class" => "my-label-class"], "label" => "Title"]);
        echo "
                                   
                                    <div class=\"col-sm-10\">
                                       ";
        // line 566
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "titreoffre", [], "any", false, false, false, 566), 'widget');
        echo "
                                    ";
        // line 567
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 567, $this->source); })()), "titreoffre", [], "any", false, false, false, 567), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                  ";
        // line 571
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 571, $this->source); })()), "descriptionoffre", [], "any", false, false, false, 571), 'label', ["label" => "Description"]);
        echo ">
                                    <div class=\"col-sm-10\">
                                      ";
        // line 573
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 573, $this->source); })()), "descriptionoffre", [], "any", false, false, false, 573), 'widget');
        echo "
                                    ";
        // line 574
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 574, $this->source); })()), "descriptionoffre", [], "any", false, false, false, 574), 'errors');
        echo "
                                    </div>
                                </div>
                           
                                <div class=\"row mb-3\">
                                 ";
        // line 579
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 579, $this->source); })()), "idcategorie", [], "any", false, false, false, 579), 'label', ["label" => "Categorie"]);
        echo " 
                                    
                                    <div class=\"col-sm-10\">
                                        ";
        // line 582
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 582, $this->source); })()), "idcategorie", [], "any", false, false, false, 582), 'widget');
        echo "
                                    </div>
                                </div>

                                  <div class=\"row mb-3\">
                                 ";
        // line 587
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 587, $this->source); })()), "typeoffre", [], "any", false, false, false, 587), 'label', ["label" => "typeoffre"]);
        echo "
                                    
                                    <div class=\"col-sm-10\">
                                      ";
        // line 590
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "typeoffre", [], "any", false, false, false, 590), 'widget');
        echo "
                                    </div>
                                </div>
  <div class=\"row mb-3\">
                                ";
        // line 594
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 594, $this->source); })()), "localisationoffre", [], "any", false, false, false, 594), 'label', ["label" => "localisationoffre"]);
        echo "
                                    
                                    <div class=\"col-sm-10\">
                                       ";
        // line 597
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 597, $this->source); })()), "localisationoffre", [], "any", false, false, false, 597), 'widget');
        echo "
                                    </div>
                                </div>


                                <div class=\"row mb-3\">
                                   
                                    <div class=\"col-sm-10\">
  <button type=\"submit\" id=\"form-submit\" class=\"btn btn-primary\">";
        // line 605
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 605, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                                     
                                    </div>
                                </div>

                            ";
        // line 610
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 610, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Advanced Form Elements</h5>

                            <!-- Advanced Form Elements -->
                            <form>
                                <div class=\"row mb-5\">
                                    <label class=\"col-sm-2 col-form-label\">Switches</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                            <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Default switch checkbox input</label>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                                            <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\">Checked switch checkbox input</label>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDisabled\" disabled>
                                            <label class=\"form-check-label\" for=\"flexSwitchCheckDisabled\">Disabled switch checkbox input</label>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckCheckedDisabled\" checked disabled>
                                            <label class=\"form-check-label\" for=\"flexSwitchCheckCheckedDisabled\">Disabled checked switch checkbox input</label>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row mb-5\">
                                    <label class=\"col-sm-2 col-form-label\">Ranges</label>
                                    <div class=\"col-sm-10\">
                                        <div>
                                            <label for=\"customRange1\" class=\"form-label\">Example range</label>
                                            <input type=\"range\" class=\"form-range\" id=\"customRange1\">
                                        </div>
                                        <div>
                                            <label for=\"disabledRange\" class=\"form-label\">Disabled range</label>
                                            <input type=\"range\" class=\"form-range\" id=\"disabledRange\" disabled>
                                        </div>
                                        <div>
                                            <label for=\"customRange2\" class=\"form-label\">Min and max with steps</label>
                                            <input type=\"range\" class=\"form-range\" min=\"0\" max=\"5\" step=\"0.5\" id=\"customRange2\">
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label class=\"col-sm-2 col-form-label\">Floating labels</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"form-floating mb-3\">
                                            <input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
                                            <label for=\"floatingInput\">Email address</label>
                                        </div>
                                        <div class=\"form-floating mb-3\">
                                            <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
                                            <label for=\"floatingPassword\">Password</label>
                                        </div>
                                        <div class=\"form-floating mb-3\">
                                            <textarea class=\"form-control\" placeholder=\"Leave a comment here\" id=\"floatingTextarea\" style=\"height: 100px;\"></textarea>
                                            <label for=\"floatingTextarea\">Comments</label>
                                        </div>
                                        <div class=\"form-floating mb-3\">
                                            <select class=\"form-select\" id=\"floatingSelect\" aria-label=\"Floating label select example\">
                        <option selected>Open this select menu</option>
                        <option value=\"1\">One</option>
                        <option value=\"2\">Two</option>
                        <option value=\"3\">Three</option>
                      </select>
                                            <label for=\"floatingSelect\">Works with selects</label>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row mb-5\">
                                    <label class=\"col-sm-2 col-form-label\">Input groups</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group mb-3\">
                                            <span class=\"input-group-text\" id=\"basic-addon1\">@</span>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                                        </div>

                                        <div class=\"input-group mb-3\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Recipient's username\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                            <span class=\"input-group-text\" id=\"basic-addon2\">@example.com</span>
                                        </div>

                                        <label for=\"basic-url\" class=\"form-label\">Your vanity URL</label>
                                        <div class=\"input-group mb-3\">
                                            <span class=\"input-group-text\" id=\"basic-addon3\">https://example.com/users/</span>
                                            <input type=\"text\" class=\"form-control\" id=\"basic-url\" aria-describedby=\"basic-addon3\">
                                        </div>

                                        <div class=\"input-group mb-3\">
                                            <span class=\"input-group-text\">\$</span>
                                            <input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
                                            <span class=\"input-group-text\">.00</span>
                                        </div>

                                        <div class=\"input-group mb-3\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\">
                                            <span class=\"input-group-text\">@</span>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Server\" aria-label=\"Server\">
                                        </div>

                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\">With textarea</span>
                                            <textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

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
    </footer>
    <!-- End Footer -->

    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Vendor JS Files -->
    <script src=\"";
        // line 762
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 766
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 767
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 768
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 769
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/forms-elements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  936 => 772,  930 => 769,  926 => 768,  922 => 767,  918 => 766,  914 => 765,  910 => 764,  906 => 763,  902 => 762,  747 => 610,  739 => 605,  728 => 597,  722 => 594,  715 => 590,  709 => 587,  701 => 582,  695 => 579,  687 => 574,  683 => 573,  678 => 571,  671 => 567,  667 => 566,  661 => 563,  656 => 561,  316 => 224,  288 => 199,  271 => 185,  254 => 171,  129 => 49,  107 => 30,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  71 => 18,  67 => 17,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
  <link href=\"{{asset('assets2/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{asset('assets2/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"{{asset('https://fonts.gstatic.com') }}\" rel=\"preconnect\">
    <link href=\"{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{asset('assets2/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{asset('assets2/css/style.css') }}\" rel=\"stylesheet\">


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
                <img src=\"{{asset('assets2/img/logo.png') }}\" alt=\"\">
                <span class=\"d-none d-lg-block\">NiceAdmin</span>
            </a>
            <i class=\"bi bi-list toggle-sidebar-btn\"></i>
        </div>
        <!-- End Logo -->

        <div class=\"search-bar\">
            <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class=\"header-nav ms-auto\">
            <ul class=\"d-flex align-items-center\">

                <li class=\"nav-item d-block d-lg-none\">
                    <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                        <i class=\"bi bi-search\"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-bell\"></i>
                        <span class=\"badge bg-primary badge-number\">4</span>
                    </a>
                    <!-- End Notification Icon -->

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

                    </ul>
                    <!-- End Notification Dropdown Items -->

                </li>
                <!-- End Notification Nav -->

                <li class=\"nav-item dropdown\">

                    <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <i class=\"bi bi-chat-left-text\"></i>
                        <span class=\"badge bg-success badge-number\">3</span>
                    </a>
                    <!-- End Messages Icon -->

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
                                <img src=\"{{asset('assets2/img/messages-1.jpg') }}\" alt=\"\" class=\"rounded-circle\">
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
                                <img src=\"{{asset('assets2/img/messages-2.jpg') }}\" alt=\"\" class=\"rounded-circle\">
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
                                <img src=\"{{asset('assets2/img/messages-3.jpg') }}\" alt=\"\" class=\"rounded-circle\">
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

                    </ul>
                    <!-- End Messages Dropdown Items -->

                </li>
                <!-- End Messages Nav -->

                <li class=\"nav-item dropdown pe-3\">

                    <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                        <img src=\"{{asset('assets2/img/profile-img.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
                    </a>
                    <!-- End Profile Iamge Icon -->

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

                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->

            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"index.html\">
                    <i class=\"bi bi-grid\"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

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
            </li>
            <!-- End Components Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link \" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"forms-elements.html\" class=\"active\">
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
            </li>
            <!-- End Forms Nav -->

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
            </li>
            <!-- End Tables Nav -->

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
            </li>
            <!-- End Charts Nav -->

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
            </li>
            <!-- End Icons Nav -->

            <li class=\"nav-heading\">Pages</li>

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                    <i class=\"bi bi-person\"></i>
                    <span>Profile</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                    <i class=\"bi bi-question-circle\"></i>
                    <span>F.A.Q</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                    <i class=\"bi bi-envelope\"></i>
                    <span>Contact</span>
                </a>
            </li>
            <!-- End Contact Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                    <i class=\"bi bi-card-list\"></i>
                    <span>Register</span>
                </a>
            </li>
            <!-- End Register Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                    <i class=\"bi bi-box-arrow-in-right\"></i>
                    <span>Login</span>
                </a>
            </li>
            <!-- End Login Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                    <i class=\"bi bi-dash-circle\"></i>
                    <span>Error 404</span>
                </a>
            </li>
            <!-- End Error 404 Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                    <i class=\"bi bi-file-earmark\"></i>
                    <span>Blank</span>
                </a>
            </li>
            <!-- End Blank Page Nav -->

        </ul>

    </aside>
    <!-- End Sidebar-->

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Form Elements</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Forms</li>
                    <li class=\"breadcrumb-item active\">Elements</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">General Form Elements</h5>

                            <!-- General Form Elements -->
                           {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'contact', 'class': 'my-class'}}) }}
                                <div class=\"row mb-3\">
                                 {{ form_label(form.titreoffre, 'Title', {'label_attr': {'class': 'my-label-class'}}) }}
                                   
                                    <div class=\"col-sm-10\">
                                       {{ form_widget(form.titreoffre) }}
                                    {{  form_errors(form.titreoffre) }}
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                  {{ form_label(form.descriptionoffre, 'Description') }}>
                                    <div class=\"col-sm-10\">
                                      {{ form_widget(form.descriptionoffre) }}
                                    {{ form_errors(form.descriptionoffre) }}
                                    </div>
                                </div>
                           
                                <div class=\"row mb-3\">
                                 {{ form_label(form.idcategorie, 'Categorie') }} 
                                    
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.idcategorie) }}
                                    </div>
                                </div>

                                  <div class=\"row mb-3\">
                                 {{ form_label(form.typeoffre, 'typeoffre') }}
                                    
                                    <div class=\"col-sm-10\">
                                      {{ form_widget(form.typeoffre) }}
                                    </div>
                                </div>
  <div class=\"row mb-3\">
                                {{ form_label(form.localisationoffre, 'localisationoffre') }}
                                    
                                    <div class=\"col-sm-10\">
                                       {{ form_widget(form.localisationoffre) }}
                                    </div>
                                </div>


                                <div class=\"row mb-3\">
                                   
                                    <div class=\"col-sm-10\">
  <button type=\"submit\" id=\"form-submit\" class=\"btn btn-primary\">{{ button_label|default('Ajouter') }}</button>
                                     
                                    </div>
                                </div>

                            {{ form_end(form, {'attr': {'novalidate': 'novalidate'}}) }}
                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Advanced Form Elements</h5>

                            <!-- Advanced Form Elements -->
                            <form>
                                <div class=\"row mb-5\">
                                    <label class=\"col-sm-2 col-form-label\">Switches</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                                            <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Default switch checkbox input</label>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                                            <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\">Checked switch checkbox input</label>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDisabled\" disabled>
                                            <label class=\"form-check-label\" for=\"flexSwitchCheckDisabled\">Disabled switch checkbox input</label>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckCheckedDisabled\" checked disabled>
                                            <label class=\"form-check-label\" for=\"flexSwitchCheckCheckedDisabled\">Disabled checked switch checkbox input</label>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row mb-5\">
                                    <label class=\"col-sm-2 col-form-label\">Ranges</label>
                                    <div class=\"col-sm-10\">
                                        <div>
                                            <label for=\"customRange1\" class=\"form-label\">Example range</label>
                                            <input type=\"range\" class=\"form-range\" id=\"customRange1\">
                                        </div>
                                        <div>
                                            <label for=\"disabledRange\" class=\"form-label\">Disabled range</label>
                                            <input type=\"range\" class=\"form-range\" id=\"disabledRange\" disabled>
                                        </div>
                                        <div>
                                            <label for=\"customRange2\" class=\"form-label\">Min and max with steps</label>
                                            <input type=\"range\" class=\"form-range\" min=\"0\" max=\"5\" step=\"0.5\" id=\"customRange2\">
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                    <label class=\"col-sm-2 col-form-label\">Floating labels</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"form-floating mb-3\">
                                            <input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
                                            <label for=\"floatingInput\">Email address</label>
                                        </div>
                                        <div class=\"form-floating mb-3\">
                                            <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
                                            <label for=\"floatingPassword\">Password</label>
                                        </div>
                                        <div class=\"form-floating mb-3\">
                                            <textarea class=\"form-control\" placeholder=\"Leave a comment here\" id=\"floatingTextarea\" style=\"height: 100px;\"></textarea>
                                            <label for=\"floatingTextarea\">Comments</label>
                                        </div>
                                        <div class=\"form-floating mb-3\">
                                            <select class=\"form-select\" id=\"floatingSelect\" aria-label=\"Floating label select example\">
                        <option selected>Open this select menu</option>
                        <option value=\"1\">One</option>
                        <option value=\"2\">Two</option>
                        <option value=\"3\">Three</option>
                      </select>
                                            <label for=\"floatingSelect\">Works with selects</label>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"row mb-5\">
                                    <label class=\"col-sm-2 col-form-label\">Input groups</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"input-group mb-3\">
                                            <span class=\"input-group-text\" id=\"basic-addon1\">@</span>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\" aria-describedby=\"basic-addon1\">
                                        </div>

                                        <div class=\"input-group mb-3\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Recipient's username\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                            <span class=\"input-group-text\" id=\"basic-addon2\">@example.com</span>
                                        </div>

                                        <label for=\"basic-url\" class=\"form-label\">Your vanity URL</label>
                                        <div class=\"input-group mb-3\">
                                            <span class=\"input-group-text\" id=\"basic-addon3\">https://example.com/users/</span>
                                            <input type=\"text\" class=\"form-control\" id=\"basic-url\" aria-describedby=\"basic-addon3\">
                                        </div>

                                        <div class=\"input-group mb-3\">
                                            <span class=\"input-group-text\">\$</span>
                                            <input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
                                            <span class=\"input-group-text\">.00</span>
                                        </div>

                                        <div class=\"input-group mb-3\">
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-label=\"Username\">
                                            <span class=\"input-group-text\">@</span>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Server\" aria-label=\"Server\">
                                        </div>

                                        <div class=\"input-group\">
                                            <span class=\"input-group-text\">With textarea</span>
                                            <textarea class=\"form-control\" aria-label=\"With textarea\"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

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
    </footer>
    <!-- End Footer -->

    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Vendor JS Files -->
    <script src=\"{{asset('assets2/vendor/apexcharts/apexcharts.min.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/chart.js/chart.umd.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/echarts/echarts.min.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/quill/quill.min.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/simple-datatables/simple-datatables.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/tinymce/tinymce.min.js') }}\"></script>
    <script src=\"{{asset('assets2/vendor/php-email-form/validate.js') }}\"></script>

    <!-- Template Main JS File -->
    <script src=\"{{asset('assets2/js/main.js') }}\"></script>

</body>

</html>", "dashboard/forms-elements.html.twig", "C:\\Users\\nour2\\Documents\\GitHub\\ArtounsiSymfony\\templates\\dashboard\\forms-elements.html.twig");
    }
}
