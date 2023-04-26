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

/* demandetravail/edit.html.twig */
class __TwigTemplate_9b5a21838a86632c396db32ebae7ccc4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/edit.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/style.css"), "html", null, true);
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
</head>

<body>

    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
            <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoart.png"), "html", null, true);
        echo "\" alt=\"\">
                <span class=\"d-none d-lg-block\">ArTounsi</span>
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
        // line 172
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
        // line 186
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
        // line 200
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
        // line 225
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

  
              <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 294
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Dashboard</span>
                </a>
            </li>
         
         

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 303
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
        echo "\">
                  <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

                <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 311
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->

             <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 319
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
        echo "\">
                   <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>
         

        </ul>

    </aside>

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Ajouter une demande</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                    <li class=\"breadcrumb-item\">Mes Demandes</li>
                    <li class=\"breadcrumb-item active\">Ajouter une demandes</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
<style>
 .color {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 5px #369;
  padding: 10px;
}


.error-message {
    color: red;
}
</style>
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-6\">

                    <div class=\"card  color\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Demande d'emplois</h5>

                            <!-- General Form Elements -->
                           ";
        // line 364
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "contact", "class" => "my-class"]]);
        echo "
                                <div class=\"row mb-3\">
                                 ";
        // line 366
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), "titreDemande", [], "any", false, false, false, 366), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "titreDemande"]);
        echo "
                                   
                                    <div class=\"col-sm-10\">
                                       ";
        // line 369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "titreDemande", [], "any", false, false, false, 369), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                     <div class=\"error-message\">";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "titreDemande", [], "any", false, false, false, 370), 'errors');
        echo "
                                    </div> </div>
                                </div>
                              
                                <div class=\"row mb-3\">
                                  ";
        // line 375
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "descriptionDemande", [], "any", false, false, false, 375), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Description"]);
        echo "
                                    <div class=\"col-sm-10\">
                                      ";
        // line 377
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 377, $this->source); })()), "descriptionDemande", [], "any", false, false, false, 377), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                   <div class=\"error-message\">  ";
        // line 378
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 378, $this->source); })()), "descriptionDemande", [], "any", false, false, false, 378), 'errors');
        echo "
                                    </div> </div>
                                </div>
                          
                                <div class=\"row mb-3\">
                                 ";
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "idcategorie", [], "any", false, false, false, 383), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Categorie"]);
        echo "
                                    
                                    <div class=\"col-sm-10\">
                                     ";
        // line 386
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "idcategorie", [], "any", false, false, false, 386), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
                                    </div>
                                </div>
                                
                 
                     <div class=\"row mb-3\">
          <div class=\"col-sm-10\">


<p>";
        // line 395
        echo twig_escape_filter($this->env, (isset($context["pdf"]) || array_key_exists("pdf", $context) ? $context["pdf"] : (function () { throw new RuntimeError('Variable "pdf" does not exist.', 395, $this->source); })()), "html", null, true);
        echo "</p>
";
        // line 396
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "pdf", [], "any", false, false, false, 396), 'widget', ["label_attr" => ["class" => "form-control"], "attr" => ["id" => "pdf-field", "value" => (isset($context["pdf"]) || array_key_exists("pdf", $context) ? $context["pdf"] : (function () { throw new RuntimeError('Variable "pdf" does not exist.', 396, $this->source); })())]]);
        echo "




                           <div class=\"error-message\">  ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "pdf", [], "any", false, false, false, 401), 'errors');
        echo " </div> </div>
                                ";
        // line 402
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 402, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 402));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 403
            echo "                <div class=\"alert alert-danger\"> <strong><i class=\"fas fa-times\"></i> Erreur!</strong> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 405
        echo "                                </div>
                                 
                              


                                <div class=\"row mb-3\">
                                   
                                    <div class=\"col-sm-10\">
                                        
                                 <button type=\"submit\" id=\"form-submit\" class=\"btn btn-primary\">";
        // line 414
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 414, $this->source); })()), "modifier")) : ("modifier")), "html", null, true);
        echo "</button>
                                    
                                    </div>
                                </div>

                            ";
        // line 419
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <img src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/demande.jpg"), "html", null, true);
        echo "\" alt=\"\"  width=\"110%\" height=\"300%\">
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
        // line 458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.6.0.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "demandetravail/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  660 => 469,  654 => 466,  650 => 465,  646 => 464,  642 => 463,  638 => 462,  634 => 461,  630 => 460,  626 => 459,  622 => 458,  591 => 430,  577 => 419,  569 => 414,  558 => 405,  549 => 403,  545 => 402,  541 => 401,  533 => 396,  529 => 395,  517 => 386,  511 => 383,  503 => 378,  499 => 377,  494 => 375,  486 => 370,  482 => 369,  476 => 366,  471 => 364,  423 => 319,  412 => 311,  401 => 303,  389 => 294,  317 => 225,  289 => 200,  272 => 186,  255 => 172,  130 => 50,  108 => 31,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  72 => 19,  68 => 18,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
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
                <img src=\"{{asset('assets2/img/logoart.png') }}\" alt=\"\">
                <span class=\"d-none d-lg-block\">ArTounsi</span>
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

  
              <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"{{ path('app_dashboard_studiodashboard') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>Dashboard</span>
                </a>
            </li>
         
         

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
         

        </ul>

    </aside>

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Ajouter une demande</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                    <li class=\"breadcrumb-item\">Mes Demandes</li>
                    <li class=\"breadcrumb-item active\">Ajouter une demandes</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
<style>
 .color {
  border: 1px solid #ccc;
  box-shadow: 2px 2px 5px #369;
  padding: 10px;
}


.error-message {
    color: red;
}
</style>
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-6\">

                    <div class=\"card  color\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Demande d'emplois</h5>

                            <!-- General Form Elements -->
                           {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'contact', 'class': 'my-class'}}) }}
                                <div class=\"row mb-3\">
                                 {{ form_label(form.titreDemande, 'titreDemande', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}
                                   
                                    <div class=\"col-sm-10\">
                                       {{ form_widget(form.titreDemande, {'attr': {'class': 'form-control'}}) }}
                                     <div class=\"error-message\">{{  form_errors(form.titreDemande) }}
                                    </div> </div>
                                </div>
                              
                                <div class=\"row mb-3\">
                                  {{ form_label(form.descriptionDemande, 'Description', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}
                                    <div class=\"col-sm-10\">
                                      {{ form_widget(form.descriptionDemande, {'attr': {'class': 'form-control'}}) }}
                                   <div class=\"error-message\">  {{ form_errors(form.descriptionDemande) }}
                                    </div> </div>
                                </div>
                          
                                <div class=\"row mb-3\">
                                 {{ form_label(form.idcategorie, 'Categorie', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}
                                    
                                    <div class=\"col-sm-10\">
                                     {{ form_widget(form.idcategorie, {'attr': {'class': 'form-select'}}) }}
                                    </div>
                                </div>
                                
                 
                     <div class=\"row mb-3\">
          <div class=\"col-sm-10\">


<p>{{ pdf }}</p>
{{ form_widget(form.pdf, {'label_attr': {'class': 'form-control'}, 'attr': {'id': 'pdf-field', 'value': pdf }}) }}




                           <div class=\"error-message\">  {{ form_errors(form.pdf) }} </div> </div>
                                {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger\"> <strong><i class=\"fas fa-times\"></i> Erreur!</strong> {{ message }} </div>
                {% endfor %}
                                </div>
                                 
                              


                                <div class=\"row mb-3\">
                                   
                                    <div class=\"col-sm-10\">
                                        
                                 <button type=\"submit\" id=\"form-submit\" class=\"btn btn-primary\">{{ button_label|default('modifier') }}</button>
                                    
                                    </div>
                                </div>

                            {{ form_end(form, {'attr': {'novalidate': 'novalidate'}}) }}
                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <img src=\"{{asset('assets2/img/demande.jpg') }}\" alt=\"\"  width=\"110%\" height=\"300%\">
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
<script src=\"{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}\"></script>

    <!-- Template Main JS File -->
    <script src=\"{{asset('assets2/js/main.js') }}\"></script>

</body>

</html>", "demandetravail/edit.html.twig", "C:\\Users\\nour2\\Documents\\GitHub\\ArtounsiSymfony\\templates\\demandetravail\\edit.html.twig");
    }
}
