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

/* dashboard_home_page/details_Post_Admin.html.twig */
class __TwigTemplate_f66153ecba72a06b3c2482ecc3f5b261 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_home_page/details_Post_Admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_home_page/details_Post_Admin.html.twig"));

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
            <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                <img src=\"";
        // line 59
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
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 226, $this->source); })()), "avatar", [], "any", false, false, false, 226))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">

                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "name", [], "any", false, false, false, 228), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "lastName", [], "any", false, false, false, 228), "html", null, true);
        echo "</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                        <li class=\"dropdown-header\">
                            <h6>";
        // line 233
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 233, $this->source); })()), "name", [], "any", false, false, false, 233), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 233, $this->source); })()), "lastName", [], "any", false, false, false, 233), "html", null, true);
        echo "</h6>
                            <span>";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 234, $this->source); })()), "type", [], "any", false, false, false, 234), "html", null, true);
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
        // line 271
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
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
        echo "\">
                  <i class=\"bi bi-briefcase\"></i>
                  <span>mes offres</span>
              </a>
          </li>
          <!-- End Profile Page Nav -->

          <li class=\"nav-item\">
              <a class=\"nav-link collapsed\" href=\"";
        // line 299
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
        echo "\">
                  <i class=\"bi bi-person\"></i>
                  <span>gros mots</span>
              </a>
          </li>
          <!-- End F.A.Q Page Nav -->

          <li class=\"nav-item\">
              <a class=\"nav-link collapsed\" href=\"";
        // line 307
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
        echo "\">
                  <i class=\"bi bi-briefcase\"></i>
                  <span>Mes demandes</span>
              </a>
          </li>

          <li class=\"nav-item\">
              <a class=\"nav-link \" href=\"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                  <i class=\"bi bi-person\"></i>
                  <span>Nouveau Produit</span>
              </a>
          </li>
          <li class=\"nav-item\">
              <a class=\"nav-link \" href=\"";
        // line 320
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                  <i class=\"bi bi-person\"></i>
                  <span>Challenge</span>
              </a>
          </li>
          <li class=\"nav-item\">
              <a class=\"nav-link \" href=\"";
        // line 326
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                  <i class=\"bi bi-person\"></i>
                  <span>Tutoriel</span>
              </a>
          </li>

          <li class=\"nav-item\">
              <a class=\"nav-link \" href=\"";
        // line 333
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                  <i class=\"bi bi-person\"></i>
                  <span>Explore</span>
              </a>
          </li>
          <li class=\"nav-item\">
              <a class=\"nav-link \" href=\"";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                  <i class=\"bi bi-person\"></i>
                  <span>Shop</span>
              </a>
          </li>
          <li class=\"nav-item\">
              <a class=\"nav-link collapsed\" href=\"";
        // line 345
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                  <i class=\"bi bi-briefcase\"></i>
                  <span>Bans</span>
              </a>
          </li>
          <li class=\"nav-item\">
              <a class=\"nav-link collapsed\" href=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 351, $this->source); })()), "id_user", [], "any", false, false, false, 351)]), "html", null, true);
        echo "\">
                  <i class=\"bi bi-person-badge\"></i>
                  <span>Profile</span>
              </a>
          </li>

      </ul>
  </aside><!-- End Sidebar-->

  <main id=\"main\" class=\"main\">

    <div class=\"item-details-page\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-heading\">
                    <div class=\"line-dec\"></div>
                    <h2>View Details <em>For Item</em> Here.</h2>
                </div>
                </div>
                <div class=\"col-lg-7\">
                <div class=\"left-image\">
                    <img src=\"";
        // line 373
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 373, $this->source); })()), "media", [], "any", false, false, false, 373), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
                </div>
                </div>
                <div class=\"col-lg-5 align-self-center\">
                <h4>";
        // line 377
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 377, $this->source); })()), "titleP", [], "any", false, false, false, 377), "html", null, true);
        echo "</h4>
                ";
        // line 379
        echo "                <span class=\"author\">
                    <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/author-02.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Artist<br><a href=\"#\">";
        // line 381
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 381, $this->source); })()), "getUserName", [], "any", false, false, false, 381), "html", null, true);
        echo "</a></h6>
                </span>
                <p>";
        // line 383
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 383, $this->source); })()), "getDescriptionP", [], "any", false, false, false, 383), "html", null, true);
        echo "</p>

                <div class=\"row\">
                    <div class=\"col-3\">
                    <span class=\"bid\">
                        Current Likes<br><strong>";
        // line 388
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 388, $this->source); })()), "postLikes", [], "any", false, false, false, 388), "count", [], "any", false, false, false, 388), "html", null, true);
        echo "</strong><br>
                    </span>


                </div>
            
                
            </div>

          </div>
            <div class=\"col-lg-12\">
            <div class=\"current-bid\">
                <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mini-heading\"><h4>Current Comments</h4></div>
                </div>
                <div class=\"col-lg-6\">
                    <fieldset>
                        <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                            <option selected>Sort By: Latest</option>
                            <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                            <option value=\"low\">Sort By: Lowest</option>
                            <option value=\"high\">Sort By: Highest</option>
                        </select>
                    </fieldset>
                </div>
                <div class=\"row\">
                
                    ";
        // line 416
        $context["commentGroups"] = twig_array_batch((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 416, $this->source); })()), 3);
        // line 417
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentGroups"]) || array_key_exists("commentGroups", $context) ? $context["commentGroups"] : (function () { throw new RuntimeError('Variable "commentGroups" does not exist.', 417, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 418
            echo "                        <div class=\"row\">
                            ";
            // line 419
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["group"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 420
                echo "                            ";
                $context["postId"] = twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 420, $this->source); })()), "getIdPost", [], "any", false, false, false, 420);
                // line 421
                echo "                            ";
                $context["commentId"] = twig_get_attribute($this->env, $this->source, $context["comment"], "getIdPost", [], "any", false, false, false, 421);
                // line 422
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getIdPost", [], "method", false, false, false, 422), "getIdPost", [], "method", false, false, false, 422) == twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 422, $this->source); })()), "getIdPost", [], "method", false, false, false, 422))) {
                    // line 423
                    echo "                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"item\">
                                        <div class=\"right-content\">
                                            <h4>Name : </h4>
                                            <a href=\"#\">";
                    // line 427
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getIdUser", [], "method", false, false, false, 427), "getName", [], "method", false, false, false, 427), "html", null, true);
                    echo "</a>
                                            <div class=\"line-dec\"></div>
                                            <h6>Comment: <em>";
                    // line 429
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getComment", [], "any", false, false, false, 429), "html", null, true);
                    echo "</em></h6>
                                            <h6>Comment: <em>";
                    // line 430
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getIdPost", [], "any", false, false, false, 430), "html", null, true);
                    echo "</em></h6>
                                            <span class=\"date\">";
                    // line 431
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getDateComment", [], "method", false, false, false, 431), "Y-m-d H:i:s"), "html", null, true);
                    echo "</span>
                                            <h6>";
                    // line 432
                    echo twig_include($this->env, $context, "dashboard_home_page/_delete_comment_form.html.twig");
                    echo "</h6>
                                        </div>
                                    </div>
                                </div>
                                ";
                }
                // line 437
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 438
            echo "                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "

                </div>
                </div>
            </div
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    
                </div>
            </div>
        </div>
        </div>
    </div>

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-6\">

         

        </div>

        <div class=\"col-lg-6\">

          

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
        // line 483
        echo "        </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

    ";
        // line 488
        $this->displayBlock('javascripts', $context, $blocks);
        // line 504
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 488
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 489
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

  
    
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard_home_page/details_Post_Admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  870 => 499,  864 => 496,  860 => 495,  856 => 494,  852 => 493,  848 => 492,  844 => 491,  840 => 490,  835 => 489,  825 => 488,  812 => 504,  810 => 488,  803 => 483,  759 => 440,  744 => 438,  730 => 437,  722 => 432,  718 => 431,  714 => 430,  710 => 429,  705 => 427,  699 => 423,  696 => 422,  693 => 421,  690 => 420,  673 => 419,  670 => 418,  652 => 417,  650 => 416,  619 => 388,  611 => 383,  606 => 381,  602 => 380,  599 => 379,  595 => 377,  588 => 373,  563 => 351,  554 => 345,  545 => 339,  536 => 333,  526 => 326,  517 => 320,  508 => 314,  498 => 307,  487 => 299,  476 => 291,  453 => 271,  413 => 234,  407 => 233,  397 => 228,  392 => 226,  222 => 59,  215 => 54,  205 => 53,  193 => 21,  189 => 20,  185 => 19,  181 => 18,  176 => 17,  166 => 16,  153 => 46,  147 => 43,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  127 => 38,  123 => 37,  109 => 26,  105 => 25,  101 => 23,  99 => 16,  93 => 13,  85 => 8,  79 => 4,  69 => 3,  59 => 53,  53 => 49,  51 => 3,  47 => 1,);
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

    <div class=\"item-details-page\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-heading\">
                    <div class=\"line-dec\"></div>
                    <h2>View Details <em>For Item</em> Here.</h2>
                </div>
                </div>
                <div class=\"col-lg-7\">
                <div class=\"left-image\">
                    <img src=\"{{ post.media }}\" alt=\"\" style=\"border-radius: 20px;\">
                </div>
                </div>
                <div class=\"col-lg-5 align-self-center\">
                <h4>{{ post.titleP }}</h4>
                {# <h4>{{ post.getIdPost }} YESSSSSSSSSSSSSSSSSSS</h4> #}
                <span class=\"author\">
                    <img src=\"{{ asset('assets/images/author-02.jpg') }}\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Artist<br><a href=\"#\">{{ post.getUserName }}</a></h6>
                </span>
                <p>{{ post.getDescriptionP }}</p>

                <div class=\"row\">
                    <div class=\"col-3\">
                    <span class=\"bid\">
                        Current Likes<br><strong>{{ post.postLikes.count }}</strong><br>
                    </span>


                </div>
            
                
            </div>

          </div>
            <div class=\"col-lg-12\">
            <div class=\"current-bid\">
                <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mini-heading\"><h4>Current Comments</h4></div>
                </div>
                <div class=\"col-lg-6\">
                    <fieldset>
                        <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                            <option selected>Sort By: Latest</option>
                            <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                            <option value=\"low\">Sort By: Lowest</option>
                            <option value=\"high\">Sort By: Highest</option>
                        </select>
                    </fieldset>
                </div>
                <div class=\"row\">
                
                    {% set commentGroups = comments|batch(3) %}
                    {% for group in commentGroups %}
                        <div class=\"row\">
                            {% for comment in group %}
                            {% set postId = post.getIdPost %}
                            {% set commentId = comment.getIdPost %}
                            {% if comment.getIdPost().getIdPost() == post.getIdPost() %}
                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"item\">
                                        <div class=\"right-content\">
                                            <h4>Name : </h4>
                                            <a href=\"#\">{{ comment.getIdUser().getName() }}</a>
                                            <div class=\"line-dec\"></div>
                                            <h6>Comment: <em>{{ comment.getComment }}</em></h6>
                                            <h6>Comment: <em>{{ comment.getIdPost }}</em></h6>
                                            <span class=\"date\">{{ comment.getDateComment()|date('Y-m-d H:i:s') }}</span>
                                            <h6>{{ include('dashboard_home_page/_delete_comment_form.html.twig') }}</h6>
                                        </div>
                                    </div>
                                </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    {% endfor %}


                </div>
                </div>
            </div
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    
                </div>
            </div>
        </div>
        </div>
    </div>

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-6\">

         

        </div>

        <div class=\"col-lg-6\">

          

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
    <script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/chart.js/chart.umd.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/quill/quill.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

    <!-- Template Main JS File -->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>

  
    
    {% endblock %}



{% endblock %}
", "dashboard_home_page/details_Post_Admin.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\dashboard_home_page\\details_Post_Admin.html.twig");
    }
}
