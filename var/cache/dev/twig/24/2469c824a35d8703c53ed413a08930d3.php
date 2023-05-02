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

/* video/show.html.twig */
class __TwigTemplate_4d7f68f4cf6c0572d2cbcfdd4cc2b888 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\" >Challenge</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

    <div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Where Glad <em>You're</em> Here</h2>
          </div>
        </div>
        <div class=\"col-lg-7\">
          <div class=\"left-image\">
            <video width=\"600\" height=\"500\" style=\"padding-bottom:50px\" controls>
                <source src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/videos/" . twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 81, $this->source); })()), "pathvideo", [], "any", false, false, false, 81))), "html", null, true);
        echo "\" type=\"video/mp4\">
                Your browser does not support the video tag.
            </video>
            ";
        // line 85
        echo "          </div>
        </div>
        <div class=\"col-lg-5 align-self-center\">
          <h4>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 88, $this->source); })()), "title", [], "any", false, false, false, 88), "html", null, true);
        echo "</h4>
          <span class=\"author\">
            <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 90, $this->source); })()), "getIdTutoriel", [], "method", false, false, false, 90), "pathimg", [], "any", false, false, false, 90))), "html", null, true);
        echo "\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
            <h6>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 91, $this->source); })()), "getIdTutoriel", [], "method", false, false, false, 91), "getTitle", [], "method", false, false, false, 91), "html", null, true);
        echo "<br><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_show", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 91, $this->source); })()), "getIdTutoriel", [], "method", false, false, false, 91), "getId", [], "method", false, false, false, 91)]), "html", null, true);
        echo "\">return</a></h6>
          </span>
          <p>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 93, $this->source); })()), "getDescription", [], "method", false, false, false, 93), "html", null, true);
        echo "</p>
        </div>


        <div class=\"col-lg-12\">
          <div class=\"current-bid\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"mini-heading\"><h4>Other Videos</h4></div>
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

            ";
        // line 114
        $context["find"] = false;
        // line 115
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 115, $this->source); })()), "getIdTutoriel", [], "method", false, false, false, 115), "videos", [], "any", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 116
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["v"], "getId", [], "method", false, false, false, 116) != twig_get_attribute($this->env, $this->source, (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 116, $this->source); })()), "getId", [], "method", false, false, false, 116))) {
                // line 117
                echo "              ";
                $context["find"] = true;
                // line 118
                echo "              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\">
                  <div class=\"left-img\">
                    <img src=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["v"], "getPathimage", [], "method", false, false, false, 121))), "html", null, true);
                echo "\" alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h4>";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 124), "html", null, true);
                echo "</h4>
                    <a href=";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_show", ["id_video" => twig_get_attribute($this->env, $this->source, $context["v"], "getId", [], "method", false, false, false, 125)]), "html", null, true);
                echo ">Show Video</a>
                    <div class=\"line-dec\"></div>
                    <h6>Vues: <em>20</em></h6>
                    <span class=\"date\">";
                // line 128
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "getDateP", [], "method", false, false, false, 128), "m:h d:m:Y"), "html", null, true);
                echo "</span>
                  </div>
                </div>
              </div>
              ";
            }
            // line 133
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "            

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
          &nbsp;&nbsp;
          Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

  \t<script>
\t\tvar maVideo = document.getElementById(\"ma-video\");
\t\tvar duree = document.getElementById(\"duree\");

\t\tmaVideo.addEventListener(\"timeupdate\", function() {
      console.log(maVideo.duration);
\t\t});

\t\tfunction convertTime(seconds) {
\t\t\tvar minutes = Math.floor(seconds / 60);
\t\t\tvar remainingSeconds = Math.floor(seconds % 60);

\t\t\tif (remainingSeconds < 10) {
\t\t\t\tremainingSeconds = \"0\" + remainingSeconds;
\t\t\t}

\t\t\treturn minutes + \":\" + remainingSeconds;
\t\t}
\t</script>

  </body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "video/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 165,  301 => 164,  297 => 163,  292 => 161,  288 => 160,  283 => 158,  279 => 157,  255 => 135,  248 => 133,  240 => 128,  234 => 125,  230 => 124,  224 => 121,  219 => 118,  216 => 117,  213 => 116,  208 => 115,  206 => 114,  182 => 93,  175 => 91,  171 => 90,  166 => 88,  161 => 85,  155 => 81,  127 => 56,  119 => 51,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  62 => 15,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/templatemo-liberty-market.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                        <img src=\"{{asset('assets/images/logo.png')}}\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"{{ path('app_challenge_index') }}\" >Challenge</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

    <div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Where Glad <em>You're</em> Here</h2>
          </div>
        </div>
        <div class=\"col-lg-7\">
          <div class=\"left-image\">
            <video width=\"600\" height=\"500\" style=\"padding-bottom:50px\" controls>
                <source src=\"{{ asset('http://localhost/videos/'~video.pathvideo) }}\" type=\"video/mp4\">
                Your browser does not support the video tag.
            </video>
            {#<img src=\"{{ asset('http://localhost/img/'~tutoriel.pathimg) }}\" alt=\"\" style=\"border-radius: 20px;\">#}
          </div>
        </div>
        <div class=\"col-lg-5 align-self-center\">
          <h4>{{ video.title }}</h4>
          <span class=\"author\">
            <img src=\"{{ asset('http://localhost/img/'~video.getIdTutoriel().pathimg) }}\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
            <h6>{{ video.getIdTutoriel().getTitle() }}<br><a href=\"{{ path('app_tutoriel_show', {'id_tutoriel': video.getIdTutoriel().getId()}) }}\">return</a></h6>
          </span>
          <p>{{ video.getDescription() }}</p>
        </div>


        <div class=\"col-lg-12\">
          <div class=\"current-bid\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"mini-heading\"><h4>Other Videos</h4></div>
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

            {% set find = false %}
            {% for v in video.getIdTutoriel().videos %}
              {% if v.getId() != video.getId() %}
              {% set find = true %}
              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\">
                  <div class=\"left-img\">
                    <img src=\"{{ asset('http://localhost/img/'~v.getPathimage()) }}\" alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h4>{{v.title}}</h4>
                    <a href={{path(\"app_video_show\",{\"id_video\":v.getId()})}}>Show Video</a>
                    <div class=\"line-dec\"></div>
                    <h6>Vues: <em>20</em></h6>
                    <span class=\"date\">{{v.getDateP()|date('m:h d:m:Y')}}</span>
                  </div>
                </div>
              </div>
              {% endif %}

            {% endfor %}
            

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
          &nbsp;&nbsp;
          Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>
  <script src=\"{{asset('vendor/bootstrap/js/bootstrap.min.js')}}\"></script>

  <script src=\"{{asset('assets/js/isotope.min.js')}}\"></script>
  <script src=\"{{asset('assets/js/owl-carousel.js')}}\"></script>

  <script src=\"{{asset('assets/js/tabs.js')}}\"></script>
  <script src=\"{{asset('assets/js/popup.js')}}\"></script>
  <script src=\"{{asset('assets/js/custom.js')}}\"></script>

  \t<script>
\t\tvar maVideo = document.getElementById(\"ma-video\");
\t\tvar duree = document.getElementById(\"duree\");

\t\tmaVideo.addEventListener(\"timeupdate\", function() {
      console.log(maVideo.duration);
\t\t});

\t\tfunction convertTime(seconds) {
\t\t\tvar minutes = Math.floor(seconds / 60);
\t\t\tvar remainingSeconds = Math.floor(seconds % 60);

\t\t\tif (remainingSeconds < 10) {
\t\t\t\tremainingSeconds = \"0\" + remainingSeconds;
\t\t\t}

\t\t\treturn minutes + \":\" + remainingSeconds;
\t\t}
\t</script>

  </body>
</html>

", "video/show.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\video\\show.html.twig");
    }
}
