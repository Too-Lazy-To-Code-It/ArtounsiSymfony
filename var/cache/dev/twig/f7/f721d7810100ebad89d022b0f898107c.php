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

/* produits_back/new.html.twig */
class __TwigTemplate_7d5ed13d74aa47503d166e8f78db7366 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_back/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_back/new.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->

  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->

  <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <style>
    .error-message {
      color: red;

    }

  </style>

</head>


<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

  <div class=\"d-flex align-items-center justify-content-between\">
    <a href=\"index.html\" class=\"logo d-flex align-items-center\">
      <img src=\"assets/img/logo.png\" alt=\"\">
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
      <a class=\"nav-link \" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
        <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
      </a>
      <ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
        <li>
          <a href=\"";
        // line 380
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
            <i class=\"bi bi-circle\"></i><span>Ajouter un produit</span>
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
          <a href=\"";
        // line 395
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
            <i class=\"bi bi-circle\"></i><span>Shop</span>
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
      <a class=\"nav-link collapsed\" href=\"users-profile.html\">
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
    <h1>Form Layouts</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
        <li class=\"breadcrumb-item\">Forms</li>
        <li class=\"breadcrumb-item active\">Layouts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-6\">

        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Horizontal Form</h5>

            <!-- Horizontal Form -->
            ";
        // line 525
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 525, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <div class=\"row mb-3\">

              <div class=\"col-sm-10\">
                ";
        // line 529
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 529, $this->source); })()), "nom", [], "any", false, false, false, 529), 'label', ["label" => "Nom du produit"]);
        echo "
                ";
        // line 530
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 530, $this->source); })()), "nom", [], "any", false, false, false, 530), 'widget', ["attr" => ["placeholder" => "Entrer le nom du produit ici", "autocomplete" => "on"]]);
        echo "</div>
              <div  class=\"error-message\">   ";
        // line 531
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 531, $this->source); })()), "nom", [], "any", false, false, false, 531), 'errors');
        echo "</div>
            </div>
          </div>
          <div class=\"row mb-3\">

            <div class=\"col-sm-10\">
              ";
        // line 537
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 537, $this->source); })()), "description", [], "any", false, false, false, 537), 'label', ["label" => "Description du produit"]);
        echo "
              ";
        // line 538
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 538, $this->source); })()), "description", [], "any", false, false, false, 538), 'widget', ["attr" => ["placeholder" => "décrir le produit ici", "autocomplete" => "on"]]);
        echo "
              <div  class=\"error-message\">";
        // line 539
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 539, $this->source); })()), "description", [], "any", false, false, false, 539), 'errors');
        echo "</div>
            </div>
          </div>
          <div class=\"row mb-3\">

            <div class=\"col-sm-10\">
              ";
        // line 545
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 545, $this->source); })()), "prix", [], "any", false, false, false, 545), 'label', ["label" => "Prix du produit"]);
        echo "
              ";
        // line 546
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 546, $this->source); })()), "prix", [], "any", false, false, false, 546), 'widget', ["attr" => ["placeholder" => "Entrer le prix du produit ici", "autocomplete" => "on"]]);
        echo "</div>
            <div  class=\"error-message\"> ";
        // line 547
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 547, $this->source); })()), "prix", [], "any", false, false, false, 547), 'errors');
        echo "</div>
          </div>

          <div class=\"row mb-3\">
            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Image</label>
            <div class=\"col-sm-10\">
              ";
        // line 553
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 553, $this->source); })()), "image", [], "any", false, false, false, 553), 'widget');
        echo "
              ";
        // line 554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 554, $this->source); })()), "image", [], "any", false, false, false, 554), 'errors');
        echo "
            </div>
          </div>
          <fieldset class=\"row mb-3\">
            <div class=\"col-md-4\">
              ";
        // line 559
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 559, $this->source); })()), "idcategorie", [], "any", false, false, false, 559), 'label', ["label" => "Catégorie du produit"]);
        echo "
              ";
        // line 560
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 560, $this->source); })()), "idcategorie", [], "any", false, false, false, 560), 'widget', ["attr" => ["placeholder" => "Entrer la catégorie du produit ici", "autocomplete" => "on"]]);
        echo "
              ";
        // line 561
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 561, $this->source); })()), "idcategorie", [], "any", false, false, false, 561), 'errors');
        echo "
            </div>
          </fieldset>
          <div class=\"row mb-3\">
            <div class=\"col-sm-10 offset-sm-2\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck1\">
                <label class=\"form-check-label\" for=\"gridCheck1\">
                  Example checkbox
                </label>
              </div>
            </div>
          </div>
          <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
          </div>
          ";
        // line 578
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 578, $this->source); })()), 'form_end');
        echo "


        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
  <div class=\"copyright\">
    © Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
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
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>


<!-- Template Main JS File -->
<script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main2.js"), "html", null, true);
        echo "\"></script>


<svg id=\"SvgjsSvg1001\" width=\"2\" height=\"0\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" style=\"overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;\"><defs id=\"SvgjsDefs1002\"></defs><polyline id=\"SvgjsPolyline1003\" points=\"0,0\"></polyline><path id=\"SvgjsPath1004\" d=\"M0 0 \"></path></svg></body>



</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produits_back/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 618,  769 => 614,  765 => 613,  761 => 612,  757 => 611,  753 => 610,  749 => 609,  745 => 608,  741 => 607,  709 => 578,  689 => 561,  685 => 560,  681 => 559,  673 => 554,  669 => 553,  660 => 547,  656 => 546,  652 => 545,  643 => 539,  639 => 538,  635 => 537,  626 => 531,  622 => 530,  618 => 529,  611 => 525,  478 => 395,  460 => 380,  108 => 31,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  70 => 17,  66 => 16,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{asset('assets2/img/favicon.png')}}\" rel=\"icon\">
  <link href=\"{{asset('assets2/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"{{asset('https://fonts.gstatic.com') }}\" rel=\"preconnect\">
  <link href=\"{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->

  <link href=\"{{asset('vendor2/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor2/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor2/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor2/quill/quill.snow.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor2/quill/quill.bubble.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor2/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('vendor2/simple-datatables/style.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->

  <link href=\"{{asset('assets2/css/style.css')}}\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <style>
    .error-message {
      color: red;

    }

  </style>

</head>


<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

  <div class=\"d-flex align-items-center justify-content-between\">
    <a href=\"index.html\" class=\"logo d-flex align-items-center\">
      <img src=\"assets/img/logo.png\" alt=\"\">
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
      <a class=\"nav-link \" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
        <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
      </a>
      <ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
        <li>
          <a href=\"{{ path('app_produits_back_new')}}\">
            <i class=\"bi bi-circle\"></i><span>Ajouter un produit</span>
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
          <a href=\"{{ path('app_produits_back')}}\">
            <i class=\"bi bi-circle\"></i><span>Shop</span>
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
      <a class=\"nav-link collapsed\" href=\"users-profile.html\">
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
    <h1>Form Layouts</h1>
    <nav>
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
        <li class=\"breadcrumb-item\">Forms</li>
        <li class=\"breadcrumb-item active\">Layouts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class=\"section\">
    <div class=\"row\">
      <div class=\"col-lg-6\">

        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">Horizontal Form</h5>

            <!-- Horizontal Form -->
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'} }) }}
            <div class=\"row mb-3\">

              <div class=\"col-sm-10\">
                {{ form_label(form.nom, 'Nom du produit') }}
                {{ form_widget(form.nom, {'attr': {'placeholder': 'Entrer le nom du produit ici', 'autocomplete': 'on'}}) }}</div>
              <div  class=\"error-message\">   {{ form_errors(form.nom) }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">

            <div class=\"col-sm-10\">
              {{ form_label(form.description, 'Description du produit') }}
              {{ form_widget(form.description, {'attr': {'placeholder': 'décrir le produit ici', 'autocomplete': 'on'}}) }}
              <div  class=\"error-message\">{{ form_errors(form.description) }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">

            <div class=\"col-sm-10\">
              {{ form_label(form.prix, 'Prix du produit') }}
              {{ form_widget(form.prix, {'attr': {'placeholder': 'Entrer le prix du produit ici', 'autocomplete': 'on'}}) }}</div>
            <div  class=\"error-message\"> {{ form_errors(form.prix) }}</div>
          </div>

          <div class=\"row mb-3\">
            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Image</label>
            <div class=\"col-sm-10\">
              {{ form_widget(form.image ) }}
              {{ form_errors(form.image) }}
            </div>
          </div>
          <fieldset class=\"row mb-3\">
            <div class=\"col-md-4\">
              {{ form_label(form.idcategorie, 'Catégorie du produit') }}
              {{ form_widget(form.idcategorie, {'attr': {'placeholder': 'Entrer la catégorie du produit ici', 'autocomplete': 'on'}}) }}
              {{ form_errors(form.idcategorie) }}
            </div>
          </fieldset>
          <div class=\"row mb-3\">
            <div class=\"col-sm-10 offset-sm-2\">
              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck1\">
                <label class=\"form-check-label\" for=\"gridCheck1\">
                  Example checkbox
                </label>
              </div>
            </div>
          </div>
          <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
          </div>
          {{ form_end(form) }}


        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
  <div class=\"copyright\">
    © Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
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
<script src=\"{{asset('vendor2/apexcharts/apexcharts.min.js') }}\"></script>
<script src=\"{{asset('vendor2/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{asset('vendor2/chart.js/chart.umd.js') }}\"></script>
<script src=\"{{asset('vendor2/echarts/echarts.min.js') }}\"></script>
<script src=\"{{asset('vendor2/quill/quill.min.js') }}\"></script>
<script src=\"{{asset('vendor2/simple-datatables/simple-datatables.js') }}\"></script>
<script src=\"{{asset('vendor2/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{asset('vendor2/php-email-form/validate.js') }}\"></script>


<!-- Template Main JS File -->
<script src=\"{{asset('assets2/js/main2.js') }}\"></script>


<svg id=\"SvgjsSvg1001\" width=\"2\" height=\"0\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\" style=\"overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;\"><defs id=\"SvgjsDefs1002\"></defs><polyline id=\"SvgjsPolyline1003\" points=\"0,0\"></polyline><path id=\"SvgjsPath1004\" d=\"M0 0 \"></path></svg></body>



</html>", "produits_back/new.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\produits_back\\new.html.twig");
    }
}
