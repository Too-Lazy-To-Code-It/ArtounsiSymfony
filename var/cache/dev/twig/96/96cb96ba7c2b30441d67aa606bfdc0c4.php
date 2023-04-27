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

/* dashboard_home_page/index.html.twig */
class __TwigTemplate_cc205bc8de577dbfabfac6983acbc759 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_home_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_home_page/index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "



";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    ";
        // line 16
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 23
        echo "
    <!-- Favicons -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "<!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\" class=\"logo d-flex align-items-center\">
        
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
        <a class=\"nav-link \"  href=\"";
        // line 289
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
          <i class=\"bi bi-grid\"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      
      

      

      

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
      <h1>Dashboard</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\">Dashboard</li>
        </ol>
      </nav>
      
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
        <div class=\"col-lg-8\">
          <div class=\"row\">

            <!-- Sales Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-cart\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>145</h6>
                      <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card revenue-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-currency-dollar\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>\$3,264</h6>
                      <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class=\"col-xxl-4 col-xl-12\">

              <div class=\"card info-card customers-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-people\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>1244</h6>
                      <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            <!-- Reports -->
            <div class=\"col-12\">
              <div class=\"card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id=\"reportsChart\"></div>

                  
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            

            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\">

              

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Category</h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Categories</th>
                        <th scope=\"col\">Edit</th>
                        <th scope=\"col\">Delete</th>
                        <th scope=\"col\">Add </th>
                      </tr>
                    </thead>
                    <tbody>
                    ";
        // line 536
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 536, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 537
            echo "                      <tr>
                        <td>";
            // line 538
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 539
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_edit", ["id_category" => twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "any", false, false, false, 539)]), "html", null, true);
            echo "\">Edit</a></td>
                        <td>";
            // line 540
            echo twig_include($this->env, $context, "dashboard_home_page/_delete_Category_form.html.twig");
            echo "</td>
                        <td><li><a href=\"";
            // line 541
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_new");
            echo "\">Add New Category</a></li></td>
                        

                      </tr>
                      
                      
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 548
        echo "                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class=\"col-12\">
              <div class=\"card top-selling overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" id=\"filter-menu\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"today\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-month\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-year\">This Year</a></li>

                  </ul>
                </div>

                <div class=\"card-body pb-0\">
                  <h5 class=\"card-title\" id=\"card-title\">Publications | Today</h5>

                  <table class=\"table table-borderless\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Preview</th>
                        <th scope=\"col\">Title</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Artist</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    ";
        // line 589
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 589, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 590
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "postType", [], "any", false, false, false, 590) == "portfolio")) {
                // line 591
                echo "                          <tr>
                              <th scope=\"row\"><a href=\"#\"><img src=\"";
                // line 592
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 592), "html", null, true);
                echo "\" alt=\"\"></a></th>
                              <td><a href=\"";
                // line 593
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_details_Dashboard", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 593)]), "html", null, true);
                echo "\" class=\"text-primary fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 593), "html", null, true);
                echo "</a></td>
                              ";
                // line 595
                echo "                              <td class=\"fw-bold\">
                                ";
                // line 596
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["post"], "getDescriptionP", [], "any", false, false, false, 596);
                // line 597
                echo "                                ";
                if ((twig_length_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 597, $this->source); })())) > 30)) {
                    // line 598
                    echo "                                  <span id=\"description-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 598), "html", null, true);
                    echo "\" class=\"short-description\">";
                    echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 598, $this->source); })()), 0, 30), "html", null, true);
                    echo "...</span>
                                  <a href=\"#\" class=\"show-more\" data-post-id=\"";
                    // line 599
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 599), "html", null, true);
                    echo "\">See more</a>
                                  <span id=\"full-description-";
                    // line 600
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 600), "html", null, true);
                    echo "\" class=\"full-description d-none\">";
                    echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 600, $this->source); })()), "html", null, true);
                    echo "</span>
                                  <a href=\"#\" class=\"show-less d-none\" data-post-id=\"";
                    // line 601
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 601), "html", null, true);
                    echo "\">See less</a>
                                ";
                } else {
                    // line 603
                    echo "                                  ";
                    echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 603, $this->source); })()), "html", null, true);
                    echo "
                                ";
                }
                // line 605
                echo "                              </td>
                              
                              

                              <td>";
                // line 609
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 609), "html", null, true);
                echo "</td>
                              
                              <td class=\"fw-bold post-date\">";
                // line 611
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getDateP", [], "any", false, false, false, 611), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                              <td>";
                // line 612
                echo twig_include($this->env, $context, "dashboard_home_page/_delete_post_form.html.twig");
                echo "</td>
                          </tr>
                        ";
            }
            // line 615
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 616
        echo "                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
            <!-- Top Selling -->
            <div class=\"col-12\">
              <div class=\"card top-selling overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" id=\"filter-menu\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"today\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-month\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-year\">This Year</a></li>

                  </ul>
                </div>

                <div class=\"card-body pb-0\">
                  <h5 class=\"card-title\" id=\"card-title\">Blog | Today</h5>

                  <table class=\"table table-borderless\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Preview</th>
                        <th scope=\"col\">Title</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Artist</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    ";
        // line 656
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 656, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 657
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "postType", [], "any", false, false, false, 657) == "blog")) {
                // line 658
                echo "                          <tr>
                              <th scope=\"row\"><a href=\"#\"><img src=\"";
                // line 659
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 659), "html", null, true);
                echo "\" alt=\"\"></a></th>
                              <td><a href=\"";
                // line 660
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_details_Dashboard", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 660)]), "html", null, true);
                echo "\" class=\"text-primary fw-bold\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 660), "html", null, true);
                echo "</a></td>
                              ";
                // line 662
                echo "                              <td class=\"fw-bold\">
                                ";
                // line 663
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["post"], "getDescriptionP", [], "any", false, false, false, 663);
                // line 664
                echo "                                ";
                if ((twig_length_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 664, $this->source); })())) > 30)) {
                    // line 665
                    echo "                                  <span id=\"description-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 665), "html", null, true);
                    echo "\" class=\"short-description\">";
                    echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 665, $this->source); })()), 0, 30), "html", null, true);
                    echo "...</span>
                                  <a href=\"#\" class=\"show-more\" data-post-id=\"";
                    // line 666
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 666), "html", null, true);
                    echo "\">See more</a>
                                  <span id=\"full-description-";
                    // line 667
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 667), "html", null, true);
                    echo "\" class=\"full-description d-none\">";
                    echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 667, $this->source); })()), "html", null, true);
                    echo "</span>
                                  <a href=\"#\" class=\"show-less d-none\" data-post-id=\"";
                    // line 668
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 668), "html", null, true);
                    echo "\">See less</a>
                                ";
                } else {
                    // line 670
                    echo "                                  ";
                    echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 670, $this->source); })()), "html", null, true);
                    echo "
                                ";
                }
                // line 672
                echo "                              </td>
                              
                              

                              <td>";
                // line 676
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 676), "html", null, true);
                echo "</td>
                              
                              <td class=\"fw-bold post-date\">";
                // line 678
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getDateP", [], "any", false, false, false, 678), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                              <td>";
                // line 679
                echo twig_include($this->env, $context, "dashboard_home_page/_delete_post_form.html.twig");
                echo "</td>
                          </tr>
                        ";
            }
            // line 682
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 683
        echo "                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        

          

          


        </div><!-- End Right side columns -->

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
        ";
        // line 721
        echo "        </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    ";
        // line 726
        $this->displayBlock('javascripts', $context, $blocks);
        // line 847
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 726
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 727
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script>
    \$(document).ready(function() {
    \$('.show-more').click(function(e) {
      e.preventDefault();
      var postId = \$(this).data('post-id');
      \$('#description-' + postId).addClass('d-none');
      \$('#full-description-' + postId).removeClass('d-none');
      \$('.show-more[data-post-id=\"'+postId+'\"]').addClass('d-none');
      \$('.show-less[data-post-id=\"'+postId+'\"]').removeClass('d-none');
    });

    \$('.show-less').click(function(e) {
      e.preventDefault();
      var postId = \$(this).data('post-id');
      \$('#full-description-' + postId).addClass('d-none');
      \$('#description-' + postId).removeClass('d-none');
      \$('.show-less[data-post-id=\"'+postId+'\"]').addClass('d-none');
      \$('.show-more[data-post-id=\"'+postId+'\"]').removeClass('d-none');
    });
  });
  </script>
      <script>
          // Get the dropdown menu and the card title
          const filterMenu = document.querySelector('#filter-menu');
          const cardTitle = document.querySelector('#card-title');

          // Add a click event listener to the dropdown menu
          filterMenu.addEventListener('click', function(event) {
            // Prevent the default link behavior
            event.preventDefault();

            // Get the selected filter value
            const filterValue = event.target.dataset.value;

            // Modify the card title with the selected filter value
            if (filterValue === 'today') {
              cardTitle.textContent = 'Publications | Today';
            } else if (filterValue === 'this-month') {
              cardTitle.textContent = 'Publications | This Month';
            } else if (filterValue === 'this-year') {
              cardTitle.textContent = 'Publications | This Year';
            }

            // Filter the posts based on the selected filter value
            const posts = document.querySelectorAll('.top-selling tbody tr');
            posts.forEach(function(post) {
              const postDate = post.querySelector('.post-date').textContent;
              const filterDate = new Date();
              if (filterValue === 'today') {
                filterDate.setDate(filterDate.getDate() - 1);
              } else if (filterValue === 'this-month') {
                filterDate.setMonth(filterDate.getMonth() - 1);
              } else if (filterValue === 'this-year') {
                filterDate.setFullYear(filterDate.getFullYear() - 1);
              }
              const postDateObj = new Date(postDate);
              if (postDateObj >= filterDate) {
                post.style.display = 'table-row';
              } else {
                post.style.display = 'none';
              }
            });
          });
    </script>
    
<script>
  // Get the filter label and the blog post items
  const filterLabel = document.getElementById('filter-label');
  const blogItems = document.querySelectorAll('.news .post-item');

  // Add click event listener to each filter option
  document.querySelectorAll('.dropdown-item').forEach(filterOption => {
    filterOption.addEventListener('click', event => {
      event.preventDefault();

      // Get the time range corresponding to the clicked filter option
      const range = filterOption.dataset.range;

      // Update the filter label text
      filterLabel.textContent = `| \${filterOption.textContent}`;

      // Loop through each blog post item and show/hide based on the time range
      blogItems.forEach(blogItem => {
        const postDate = new Date(blogItem.querySelector('.post-date').textContent);
        let showItem = false;

        switch (range) {
          case 'today':
            const today = new Date();
            showItem = postDate.getDate() === today.getDate() &&
              postDate.getMonth() === today.getMonth() &&
              postDate.getFullYear() === today.getFullYear();
            break;
          case 'month':
            const thisMonth = new Date();
            showItem = postDate.getMonth() === thisMonth.getMonth() &&
              postDate.getFullYear() === thisMonth.getFullYear();
            break;
          case 'year':
            const thisYear = new Date();
            showItem = postDate.getFullYear() === thisYear.getFullYear();
            break;
        }

        blogItem.style.display = showItem ? 'block' : 'none';
      });
    });
  });
</script>
<script src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/reports.js"), "html", null, true);
        echo "\"></script>
<script></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard_home_page/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1262 => 844,  1149 => 734,  1145 => 733,  1141 => 732,  1137 => 731,  1133 => 730,  1129 => 729,  1125 => 728,  1120 => 727,  1110 => 726,  1099 => 847,  1097 => 726,  1090 => 721,  1051 => 683,  1037 => 682,  1031 => 679,  1027 => 678,  1022 => 676,  1016 => 672,  1010 => 670,  1005 => 668,  999 => 667,  995 => 666,  988 => 665,  985 => 664,  983 => 663,  980 => 662,  974 => 660,  970 => 659,  967 => 658,  964 => 657,  947 => 656,  905 => 616,  891 => 615,  885 => 612,  881 => 611,  876 => 609,  870 => 605,  864 => 603,  859 => 601,  853 => 600,  849 => 599,  842 => 598,  839 => 597,  837 => 596,  834 => 595,  828 => 593,  824 => 592,  821 => 591,  818 => 590,  801 => 589,  758 => 548,  737 => 541,  733 => 540,  729 => 539,  725 => 538,  722 => 537,  705 => 536,  455 => 289,  221 => 58,  215 => 54,  205 => 53,  193 => 21,  189 => 20,  185 => 19,  181 => 18,  176 => 17,  166 => 16,  153 => 46,  147 => 43,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  127 => 38,  123 => 37,  109 => 26,  105 => 25,  101 => 23,  99 => 16,  93 => 13,  85 => 8,  79 => 4,  69 => 3,  59 => 53,  53 => 49,  51 => 3,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block head %}
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    {% endblock %}

    <!-- Favicons -->
    <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

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

{% endblock %}




{% block body %}
<!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"{{ path('app_dashboard_home_page') }}\" class=\"logo d-flex align-items-center\">
        
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
        <a class=\"nav-link \"  href=\"{{ path('app_dashboard_home_page') }}\">
          <i class=\"bi bi-grid\"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      
      

      

      

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
      <h1>Dashboard</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\">Dashboard</li>
        </ol>
      </nav>
      
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
        <div class=\"col-lg-8\">
          <div class=\"row\">

            <!-- Sales Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-cart\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>145</h6>
                      <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card revenue-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-currency-dollar\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>\$3,264</h6>
                      <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class=\"col-xxl-4 col-xl-12\">

              <div class=\"card info-card customers-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-people\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>1244</h6>
                      <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            <!-- Reports -->
            <div class=\"col-12\">
              <div class=\"card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id=\"reportsChart\"></div>

                  
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            

            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\">

              

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Category</h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Categories</th>
                        <th scope=\"col\">Edit</th>
                        <th scope=\"col\">Delete</th>
                        <th scope=\"col\">Add </th>
                      </tr>
                    </thead>
                    <tbody>
                    {% for category in categories %}
                      <tr>
                        <td>{{ category }}</td>
                        <td><a href=\"{{ path('app_category_edit', {'id_category': category.getId_category}) }}\">Edit</a></td>
                        <td>{{ include('dashboard_home_page/_delete_Category_form.html.twig') }}</td>
                        <td><li><a href=\"{{ path('app_category_new') }}\">Add New Category</a></li></td>
                        

                      </tr>
                      
                      
                    {% endfor %}
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class=\"col-12\">
              <div class=\"card top-selling overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" id=\"filter-menu\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"today\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-month\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-year\">This Year</a></li>

                  </ul>
                </div>

                <div class=\"card-body pb-0\">
                  <h5 class=\"card-title\" id=\"card-title\">Publications | Today</h5>

                  <table class=\"table table-borderless\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Preview</th>
                        <th scope=\"col\">Title</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Artist</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    {% for post in posts %}
                      {% if post.postType == 'portfolio' %}
                          <tr>
                              <th scope=\"row\"><a href=\"#\"><img src=\"{{ post.media }}\" alt=\"\"></a></th>
                              <td><a href=\"{{ path('app_post_details_Dashboard', {'id_post': post.getId}) }}\" class=\"text-primary fw-bold\">{{ post.titleP }}</a></td>
                              {# <a >View Details</a> #}
                              <td class=\"fw-bold\">
                                {% set description = post.getDescriptionP %}
                                {% if description|length > 30 %}
                                  <span id=\"description-{{ post.id }}\" class=\"short-description\">{{ description|slice(0, 30) }}...</span>
                                  <a href=\"#\" class=\"show-more\" data-post-id=\"{{ post.id }}\">See more</a>
                                  <span id=\"full-description-{{ post.id }}\" class=\"full-description d-none\">{{ description }}</span>
                                  <a href=\"#\" class=\"show-less d-none\" data-post-id=\"{{ post.id }}\">See less</a>
                                {% else %}
                                  {{ description }}
                                {% endif %}
                              </td>
                              
                              

                              <td>{{ post.getUserName }}</td>
                              
                              <td class=\"fw-bold post-date\">{{ post.getDateP|date('Y-m-d H:i:s') }}</td>
                              <td>{{ include('dashboard_home_page/_delete_post_form.html.twig') }}</td>
                          </tr>
                        {% endif %}
                    {% endfor %}
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->
            <!-- Top Selling -->
            <div class=\"col-12\">
              <div class=\"card top-selling overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" id=\"filter-menu\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"today\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-month\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-year\">This Year</a></li>

                  </ul>
                </div>

                <div class=\"card-body pb-0\">
                  <h5 class=\"card-title\" id=\"card-title\">Blog | Today</h5>

                  <table class=\"table table-borderless\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Preview</th>
                        <th scope=\"col\">Title</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Artist</th>
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    {% for post in posts %}
                      {% if post.postType == 'blog' %}
                          <tr>
                              <th scope=\"row\"><a href=\"#\"><img src=\"{{ post.media }}\" alt=\"\"></a></th>
                              <td><a href=\"{{ path('app_post_details_Dashboard', {'id_post': post.getId}) }}\" class=\"text-primary fw-bold\">{{ post.titleP }}</a></td>
                              {# <a >View Details</a> #}
                              <td class=\"fw-bold\">
                                {% set description = post.getDescriptionP %}
                                {% if description|length > 30 %}
                                  <span id=\"description-{{ post.id }}\" class=\"short-description\">{{ description|slice(0, 30) }}...</span>
                                  <a href=\"#\" class=\"show-more\" data-post-id=\"{{ post.id }}\">See more</a>
                                  <span id=\"full-description-{{ post.id }}\" class=\"full-description d-none\">{{ description }}</span>
                                  <a href=\"#\" class=\"show-less d-none\" data-post-id=\"{{ post.id }}\">See less</a>
                                {% else %}
                                  {{ description }}
                                {% endif %}
                              </td>
                              
                              

                              <td>{{ post.getUserName }}</td>
                              
                              <td class=\"fw-bold post-date\">{{ post.getDateP|date('Y-m-d H:i:s') }}</td>
                              <td>{{ include('dashboard_home_page/_delete_post_form.html.twig') }}</td>
                          </tr>
                        {% endif %}
                    {% endfor %}
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        

          

          


        </div><!-- End Right side columns -->

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
        {# Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a> #}
        </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    {% block javascripts %}
        <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>
        <script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
        <script src=\"{{ asset('assets/js/popup.js') }}\"></script>
        <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
        <script src=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.js') }}\"></script>
        <script>
    \$(document).ready(function() {
    \$('.show-more').click(function(e) {
      e.preventDefault();
      var postId = \$(this).data('post-id');
      \$('#description-' + postId).addClass('d-none');
      \$('#full-description-' + postId).removeClass('d-none');
      \$('.show-more[data-post-id=\"'+postId+'\"]').addClass('d-none');
      \$('.show-less[data-post-id=\"'+postId+'\"]').removeClass('d-none');
    });

    \$('.show-less').click(function(e) {
      e.preventDefault();
      var postId = \$(this).data('post-id');
      \$('#full-description-' + postId).addClass('d-none');
      \$('#description-' + postId).removeClass('d-none');
      \$('.show-less[data-post-id=\"'+postId+'\"]').addClass('d-none');
      \$('.show-more[data-post-id=\"'+postId+'\"]').removeClass('d-none');
    });
  });
  </script>
      <script>
          // Get the dropdown menu and the card title
          const filterMenu = document.querySelector('#filter-menu');
          const cardTitle = document.querySelector('#card-title');

          // Add a click event listener to the dropdown menu
          filterMenu.addEventListener('click', function(event) {
            // Prevent the default link behavior
            event.preventDefault();

            // Get the selected filter value
            const filterValue = event.target.dataset.value;

            // Modify the card title with the selected filter value
            if (filterValue === 'today') {
              cardTitle.textContent = 'Publications | Today';
            } else if (filterValue === 'this-month') {
              cardTitle.textContent = 'Publications | This Month';
            } else if (filterValue === 'this-year') {
              cardTitle.textContent = 'Publications | This Year';
            }

            // Filter the posts based on the selected filter value
            const posts = document.querySelectorAll('.top-selling tbody tr');
            posts.forEach(function(post) {
              const postDate = post.querySelector('.post-date').textContent;
              const filterDate = new Date();
              if (filterValue === 'today') {
                filterDate.setDate(filterDate.getDate() - 1);
              } else if (filterValue === 'this-month') {
                filterDate.setMonth(filterDate.getMonth() - 1);
              } else if (filterValue === 'this-year') {
                filterDate.setFullYear(filterDate.getFullYear() - 1);
              }
              const postDateObj = new Date(postDate);
              if (postDateObj >= filterDate) {
                post.style.display = 'table-row';
              } else {
                post.style.display = 'none';
              }
            });
          });
    </script>
    
<script>
  // Get the filter label and the blog post items
  const filterLabel = document.getElementById('filter-label');
  const blogItems = document.querySelectorAll('.news .post-item');

  // Add click event listener to each filter option
  document.querySelectorAll('.dropdown-item').forEach(filterOption => {
    filterOption.addEventListener('click', event => {
      event.preventDefault();

      // Get the time range corresponding to the clicked filter option
      const range = filterOption.dataset.range;

      // Update the filter label text
      filterLabel.textContent = `| \${filterOption.textContent}`;

      // Loop through each blog post item and show/hide based on the time range
      blogItems.forEach(blogItem => {
        const postDate = new Date(blogItem.querySelector('.post-date').textContent);
        let showItem = false;

        switch (range) {
          case 'today':
            const today = new Date();
            showItem = postDate.getDate() === today.getDate() &&
              postDate.getMonth() === today.getMonth() &&
              postDate.getFullYear() === today.getFullYear();
            break;
          case 'month':
            const thisMonth = new Date();
            showItem = postDate.getMonth() === thisMonth.getMonth() &&
              postDate.getFullYear() === thisMonth.getFullYear();
            break;
          case 'year':
            const thisYear = new Date();
            showItem = postDate.getFullYear() === thisYear.getFullYear();
            break;
        }

        blogItem.style.display = showItem ? 'block' : 'none';
      });
    });
  });
</script>
<script src=\"{{ asset('build/js/reports.js') }}\"></script>
<script></script>
    {% endblock %}

{% endblock %}
", "dashboard_home_page/index.html.twig", "C:\\Users\\amine\\ArtounsiSymfonyy\\templates\\dashboard_home_page\\index.html.twig");
    }
}
