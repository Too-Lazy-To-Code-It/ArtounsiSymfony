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

/* tutoriel/show.html.twig */
class __TwigTemplate_ef49548f8190685a66346d6a64464992 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tutoriel/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tutoriel";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link data-require=\"fontawesome@*\" data-semver=\"4.5.0\" rel=\"stylesheet\"
          href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css\"/>
    <style>
        .rating {
            cursor: pointer;
        }

        .rating .rating-star {
            display: inline-block;
            position: relative;
            padding-right: 5px;
            margin-left: -5px;
            color: #7453FC;
        }

        .rating .selected:before {
            content: '\\f005';
        }
    </style>
";
        // line 140
        echo "
    ";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
    ";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("jquery"), "html", null, true);
        echo "

    <script>
        \$(document).ready(function () {
            function submitRating(rating){
              var \$rating = rating;
              var \$idTutoriel = parseInt(document.querySelector('input').value);
              var formData = {
                        rating:\$rating,
                        idTutoriel:\$idTutoriel
                    };
                    console.log(formData);
              \$.ajax({
                        type: 'POST',
                        url: '";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rating_new");
        echo "',
                        data: JSON.stringify( formData),
                        contentType: 'application/json',
                        success: function (response) {

                            // Handle the response from the controller
                            if (response.success) {
                                alert(\" Thanks for your rating \");
                            }
                        }
                    });
            }
            function setRating(rating) {
                // fill all the stars assigning the '.selected' class
                \$('.rating-star').removeClass('fa-star-o').addClass('selected');
                // empty all the stars to the right of the mouse
                \$('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('selected').addClass('fa-star-o');
            }

            \$('.rating-star')
                .on('mouseover', function (e) {
                    var rating = \$(e.target).data('rating');
                    // fill all the stars
                    \$('.rating-star').removeClass('fa-star-o').addClass('fa-star');
                    // empty all the stars to the right of the mouse
                    \$('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('fa-star').addClass('fa-star-o');
                })
                .on('mouseleave', function (e) {
                    // empty all the stars except those with class .selected
                    \$('.rating-star').removeClass('fa-star').addClass('fa-star-o');
                })
                .on('click', function (e) {
                    var rating = \$(e.target).data('rating');
                    console.log(this);
                    setRating(rating);
                    submitRating(rating);
                })
                .on('keyup', function (e) {
                    // if spacebar is pressed while selecting a star
                    if (e.keyCode === 32) {
                        // set rating (same as clicking on the star)
                        var rating = \$(e.target).data('rating');
                        setRating(rating);
                    }
                });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 204
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 205
        echo "<div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Welcome To Our <em>Tutoriel</em></h2>
          </div>
        </div>
        <div class=\"col-lg-7\">
          <div class=\"left-image\">
            <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 216, $this->source); })()), "pathimg", [], "any", false, false, false, 216))), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
          </div>
        </div>
        <div class=\"col-lg-5 align-self-center\">
          <h4>";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 220, $this->source); })()), "title", [], "any", false, false, false, 220), "html", null, true);
        echo "</h4>
          <span class=\"author\">
            <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
            <h6>";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 223, $this->source); })()), "getIdArtist", [], "method", false, false, false, 223), "getName", [], "method", false, false, false, 223), "html", null, true);
        echo "<br><a href=\"#\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 223, $this->source); })()), "getIdArtist", [], "method", false, false, false, 223), "getEmail", [], "method", false, false, false, 223), "html", null, true);
        echo "</a></h6>
          </span>
          <p>";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 225, $this->source); })()), "getDescription", [], "method", false, false, false, 225), "html", null, true);
        echo "</p>
            ";
        // line 226
        if ((isset($context["favori"]) || array_key_exists("favori", $context) ? $context["favori"] : (function () { throw new RuntimeError('Variable "favori" does not exist.', 226, $this->source); })())) {
            // line 227
            echo "              <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favoris_turoial_delete", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 227, $this->source); })()), "getId", [], "method", false, false, false, 227)]), "html", null, true);
            echo "><i class=\"bi bi-heart-fill\"> remove from favoris</i></a>
            ";
        } else {
            // line 229
            echo "              <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favoris_tutoriel_new", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 229, $this->source); })()), "getId", [], "method", false, false, false, 229)]), "html", null, true);
            echo "><i class=\"bi bi-heart\">add to favoris</i></a>
            ";
        }
        // line 231
        echo "            <input type=\"number\" style=\"visibility: hidden;\" value=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 231, $this->source); })()), "getId", [], "method", false, false, false, 231), "html", null, true);
        echo ">
                ";
        // line 232
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"rating\" role=\"optgroup\">
                        <!-- in Rails just use 1.upto(5) -->
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-1\" data-rating=\"1\" tabindex=\"0\"
                          aria-label=\"Rate as one out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-2\" data-rating=\"2\" tabindex=\"0\"
                          aria-label=\"Rate as two out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-3\" data-rating=\"3\" tabindex=\"0\"
                          aria-label=\"Rate as three out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-4\" data-rating=\"4\" tabindex=\"0\"
                          aria-label=\"Rate as four out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-5\" data-rating=\"5\" tabindex=\"0\"
                          aria-label=\"Rate as five out of 5 stars\" role=\"radio\"></i>
                    </div>
                    ";
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "rating", [], "any", false, false, false, 246), 'widget', ["attr" => ["id" => "rating-input", "name" => "rating"]]);
        echo "
                ";
        // line 247
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), 'form_end');
        echo "
        </div>

        <div class=\"col-lg-12\">
          <div class=\"current-bid\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"mini-heading\"><h4>Videos</h4></div>
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
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 267, $this->source); })()), "videos", [], "any", false, false, false, 267));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 268
            echo "
              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\" style=\"height:220px;\">
                  <div class=\"left-img\">
                    <img src=";
            // line 272
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["v"], "getPathimage", [], "method", false, false, false, 272))), "html", null, true);
            echo " alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h4>";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 275), "html", null, true);
            echo "</h4>
                    <a href=";
            // line 276
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_show", ["id_video" => twig_get_attribute($this->env, $this->source, $context["v"], "getId", [], "method", false, false, false, 276)]), "html", null, true);
            echo ">Show Video</a>
                    <div class=\"line-dec\"></div>
                    <h6>Views: <em>20</em></h6>
                    <span class=\"date\">";
            // line 279
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "getDateP", [], "method", false, false, false, 279), "m:h d:m:Y"), "html", null, true);
            echo "</span>
                  </div>
                </div>
              </div>
              
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "            

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        // line 293
        $this->displayBlock('js', $context, $blocks);
        // line 297
        echo "
    ";
        // line 324
        echo "
    <a href=\"";
        // line 325
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_edit", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 327, $this->source); })()), "getId", [], "method", false, false, false, 327)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 329
        echo twig_include($this->env, $context, "tutoriel/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 293
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 294
        echo "        ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
        <script data-require=\"jquery@*\" data-semver=\"2.2.0\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tutoriel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 294,  384 => 293,  372 => 329,  367 => 327,  362 => 325,  359 => 324,  356 => 297,  354 => 293,  344 => 285,  332 => 279,  326 => 276,  322 => 275,  316 => 272,  310 => 268,  306 => 267,  283 => 247,  279 => 246,  262 => 232,  257 => 231,  251 => 229,  245 => 227,  243 => 226,  239 => 225,  232 => 223,  226 => 220,  219 => 216,  206 => 205,  196 => 204,  138 => 156,  121 => 142,  117 => 141,  114 => 140,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tutoriel{% endblock %}
{% block css %}
    {{ parent() }}
    <link data-require=\"fontawesome@*\" data-semver=\"4.5.0\" rel=\"stylesheet\"
          href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css\"/>
    <style>
        .rating {
            cursor: pointer;
        }

        .rating .rating-star {
            display: inline-block;
            position: relative;
            padding-right: 5px;
            margin-left: -5px;
            color: #7453FC;
        }

        .rating .selected:before {
            content: '\\f005';
        }
    </style>
{#
    <script>
    {{ parent() }}
    {{ encore_entry_script_tags('app') }}
    {{ encore_entry_script_tags('jquery') }}
    <script src=\"{{ asset('js/ajax.js') }}\"></script>

            \$('#order-form').submit(function(event) {
                // Prevent the form from submitting normally
                event.preventDefault();

                var \$firstNameState =0;
                var \$lastNameState = 0;
                var \$numberState = 0;
                var \$addressState = 0;
                var \$codePostalState = 0;
                var \$emailState = 0;


                //extraction des texts fields
                var \$firstName = \$('#first-name').val();
                var \$lastName = \$('#last-name').val();
                var \$number = \$('#number').val();
                var \$address = \$('#address').val();
                var \$codePostal = \$('#code-postal').val();
                var \$email = \$('#email').val();

                //controle de saisie pour les string
                //firstname----------------------------------
                if(!/^[a-zA-Z]+\$/.test(\$firstName)){
                    \$('#first-name-error').text('Please enter a valid first name').show();
                }
                if(/^[a-zA-Z]+\$/.test(\$firstName)){
                    \$('#first-name-error').hide();
                    \$firstNameState =1;
                }

                //lastname------------------------------------
                if(!/^[a-zA-Z]+\$/.test(\$lastName)){
                    \$('#last-name-error').text('Please enter a valid last name').show();
                }
                if(/^[a-zA-Z]+\$/.test(\$lastName)){
                    \$('#last-name-error').hide();
                    \$lastNameState=1;
                }
                //address------------------------------------
                if(!/^[^!*@%]+\$/.test(\$address)){
                    \$('#address-error').text('Please enter a valid address').show();
                }
                if(/^[^!*@%]+\$/.test(\$address)){
                    \$('#address-error').hide();
                    \$addressState=1;
                }

                //number---------------------------------------
                if (!/^[0-9]+\$/.test(\$number) ){
                    \$('#number-error').text('Please enter a valid Phone number').show();
                }
                if (/^[0-9]+\$/.test(\$number) ){
                    \$('#number-error').hide();
                    \$numberState=1;
                }


                //codepostal------------------------------------
                if ( !/^[0-9]+\$/.test(\$codePostal) ){
                    \$('#codepostal-error').text('Please enter a valid code postal').show();
                }
                if ( /^[0-9]+\$/.test(\$codePostal) ){
                    \$('#codepostal-error').hide();
                    \$codePostalState=1;
                }

                //email------------------------------------------
                if (!/^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(\$email)) {
                    \$('#email-error').text('Please enter a valid email').show();
                }

                if (/^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/.test(\$email)) {
                    \$('#email-error').hide();
                    \$emailState=1;

                    //ken les fields kold format te3hom s7i7
                } if (\$addressState===1 && \$emailState===1 && \$firstNameState===1 && \$lastNameState===1 && \$codePostalState===1 && \$emailState===1 && \$numberState===1) {
                    // Get the form data
                    var formData = {
                        firstname: \$firstName,
                        lastname: \$lastName,
                        number: \$number,
                        address: \$address,
                        codePostal: \$codePostal,
                        email: \$email
                    };
                    // Send the form data to the controller
                    \$.ajax({
                        type: 'POST',
                        url: '{{ path('app_commande_new') }}',
                        data: formData,
                        contentType: 'application/json',
                        success: function (response) {

                            // Handle the response from the controller
                            if (response.success) {

                                alert(\" you're order Has been Established successfully ! \");
                                window.location.href = '/payment';
                            } else {
                                alert(\" Don't Leave Empty Fields \");
                            }
                        }
                    });
                }
            });
        </script>
        #}

    {{ encore_entry_script_tags('app') }}
    {{ encore_entry_script_tags('jquery') }}

    <script>
        \$(document).ready(function () {
            function submitRating(rating){
              var \$rating = rating;
              var \$idTutoriel = parseInt(document.querySelector('input').value);
              var formData = {
                        rating:\$rating,
                        idTutoriel:\$idTutoriel
                    };
                    console.log(formData);
              \$.ajax({
                        type: 'POST',
                        url: '{{ path('app_rating_new') }}',
                        data: JSON.stringify( formData),
                        contentType: 'application/json',
                        success: function (response) {

                            // Handle the response from the controller
                            if (response.success) {
                                alert(\" Thanks for your rating \");
                            }
                        }
                    });
            }
            function setRating(rating) {
                // fill all the stars assigning the '.selected' class
                \$('.rating-star').removeClass('fa-star-o').addClass('selected');
                // empty all the stars to the right of the mouse
                \$('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('selected').addClass('fa-star-o');
            }

            \$('.rating-star')
                .on('mouseover', function (e) {
                    var rating = \$(e.target).data('rating');
                    // fill all the stars
                    \$('.rating-star').removeClass('fa-star-o').addClass('fa-star');
                    // empty all the stars to the right of the mouse
                    \$('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('fa-star').addClass('fa-star-o');
                })
                .on('mouseleave', function (e) {
                    // empty all the stars except those with class .selected
                    \$('.rating-star').removeClass('fa-star').addClass('fa-star-o');
                })
                .on('click', function (e) {
                    var rating = \$(e.target).data('rating');
                    console.log(this);
                    setRating(rating);
                    submitRating(rating);
                })
                .on('keyup', function (e) {
                    // if spacebar is pressed while selecting a star
                    if (e.keyCode === 32) {
                        // set rating (same as clicking on the star)
                        var rating = \$(e.target).data('rating');
                        setRating(rating);
                    }
                });
        });
    </script>
{% endblock %}
{% block body %}
<div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Welcome To Our <em>Tutoriel</em></h2>
          </div>
        </div>
        <div class=\"col-lg-7\">
          <div class=\"left-image\">
            <img src=\"{{ asset('http://localhost/img/'~tutoriel.pathimg) }}\" alt=\"\" style=\"border-radius: 20px;\">
          </div>
        </div>
        <div class=\"col-lg-5 align-self-center\">
          <h4>{{ tutoriel.title }}</h4>
          <span class=\"author\">
            <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
            <h6>{{ tutoriel.getIdArtist().getName() }}<br><a href=\"#\">{{ tutoriel.getIdArtist().getEmail() }}</a></h6>
          </span>
          <p>{{ tutoriel.getDescription() }}</p>
            {% if(favori) %}
              <a href={{path('app_favoris_turoial_delete',{'id_tutoriel':tutoriel.getId()})}}><i class=\"bi bi-heart-fill\"> remove from favoris</i></a>
            {% else %}
              <a href={{path('app_favoris_tutoriel_new',{'id_tutoriel':tutoriel.getId()})}}><i class=\"bi bi-heart\">add to favoris</i></a>
            {% endif %}
            <input type=\"number\" style=\"visibility: hidden;\" value={{tutoriel.getId()}}>
                {{ form_start(form,{ 'attr' : {'novalidate': 'novalidate'}} ) }}
                    <div class=\"rating\" role=\"optgroup\">
                        <!-- in Rails just use 1.upto(5) -->
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-1\" data-rating=\"1\" tabindex=\"0\"
                          aria-label=\"Rate as one out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-2\" data-rating=\"2\" tabindex=\"0\"
                          aria-label=\"Rate as two out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-3\" data-rating=\"3\" tabindex=\"0\"
                          aria-label=\"Rate as three out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-4\" data-rating=\"4\" tabindex=\"0\"
                          aria-label=\"Rate as four out of 5 stars\" role=\"radio\"></i>
                        <i class=\"fa fa-star-o fa-2x rating-star\" id=\"rating-5\" data-rating=\"5\" tabindex=\"0\"
                          aria-label=\"Rate as five out of 5 stars\" role=\"radio\"></i>
                    </div>
                    {{ form_widget(form.rating,{'attr':{'id':'rating-input','name':'rating'}}) }}
                {{ form_end(form) }}
        </div>

        <div class=\"col-lg-12\">
          <div class=\"current-bid\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"mini-heading\"><h4>Videos</h4></div>
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

            {% for v in tutoriel.videos %}

              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\" style=\"height:220px;\">
                  <div class=\"left-img\">
                    <img src={{ asset('http://localhost/img/'~v.getPathimage()) }} alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h4>{{v.title}}</h4>
                    <a href={{path(\"app_video_show\",{\"id_video\":v.getId()})}}>Show Video</a>
                    <div class=\"line-dec\"></div>
                    <h6>Views: <em>20</em></h6>
                    <span class=\"date\">{{v.getDateP()|date('m:h d:m:Y')}}</span>
                  </div>
                </div>
              </div>
              
            {% endfor %}
            

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{% block js %}
        {{ parent() }}
        <script data-require=\"jquery@*\" data-semver=\"2.2.0\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
        {% endblock %}

    {#
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id_tutoriel</th>
                <td>{{ tutoriel.getId() }}</td>
            </tr>
            <tr>
                <th>Pathimg</th>
                <td>{{ tutoriel.pathimg }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ tutoriel.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ tutoriel.description }}</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>{{ tutoriel.niveau }}</td>
            </tr>
        </tbody>
    </table>
    #}

    <a href=\"{{ path('app_tutoriel_index') }}\">back to list</a>

    <a href=\"{{ path('app_tutoriel_edit', {'id_tutoriel': tutoriel.getId()}) }}\">edit</a>

    {{ include('tutoriel/_delete_form.html.twig') }}
{% endblock %}
", "tutoriel/show.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\tutoriel\\show.html.twig");
    }
}
