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
class __TwigTemplate_3398daf0cd8b0d8044092658e2d91ba3 extends Template
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "


    <script>
        \$(document).ready(function () {
            if(";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oldrating"]) || array_key_exists("oldrating", $context) ? $context["oldrating"] : (function () { throw new RuntimeError('Variable "oldrating" does not exist.', 146, $this->source); })()), "getRating", [], "method", false, false, false, 146), "html", null, true);
        echo ")
            {
              setRating(";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oldrating"]) || array_key_exists("oldrating", $context) ? $context["oldrating"] : (function () { throw new RuntimeError('Variable "oldrating" does not exist.', 148, $this->source); })()), "getRating", [], "method", false, false, false, 148), "html", null, true);
        echo ");
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
                    \$('.rating-star#rating-' + ";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oldrating"]) || array_key_exists("oldrating", $context) ? $context["oldrating"] : (function () { throw new RuntimeError('Variable "oldrating" does not exist.', 167, $this->source); })()), "getRating", [], "method", false, false, false, 167), "html", null, true);
        echo " + ' ~ .rating-star').removeClass('fa-star').addClass('fa-star-o');

                    //\$('.rating-star').removeClass('fa-star').addClass('fa-star-o');
                })
                .on('click', function (e) {
                    var rating = \$(e.target).data('rating');
                    \$.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/rating/tutoriel/new/'+\$(e.target).data('rating')+'/'+parseInt(document.querySelector('input').value),
                        dataType: \"json\",
                        contentType: 'application/json',
                        success: function (response) {

                            // Handle the response from the controller
                                                            alert(\" you're order Has been Established successfully ! \");

                        }
                    });
                    setRating(rating);
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

    // line 198
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 199
        $context["show"] = false;
        // line 200
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
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 211, $this->source); })()), "pathimg", [], "any", false, false, false, 211))), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
          </div>
        </div>
        <div class=\"col-lg-5 align-self-center\">
          <h4>";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 215, $this->source); })()), "title", [], "any", false, false, false, 215), "html", null, true);
        echo "</h4>
          <span class=\"author\">
            <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
            <h6>";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 218, $this->source); })()), "getIdArtist", [], "method", false, false, false, 218), "getName", [], "method", false, false, false, 218), "html", null, true);
        echo "<br><a href=\"#\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 218, $this->source); })()), "getIdArtist", [], "method", false, false, false, 218), "getEmail", [], "method", false, false, false, 218), "html", null, true);
        echo "</a></h6>
          </span>
          <p>";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 220, $this->source); })()), "getDescription", [], "method", false, false, false, 220), "html", null, true);
        echo "</p>
            ";
        // line 221
        if ((isset($context["favori"]) || array_key_exists("favori", $context) ? $context["favori"] : (function () { throw new RuntimeError('Variable "favori" does not exist.', 221, $this->source); })())) {
            // line 222
            echo "              <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favoris_turoial_delete", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 222, $this->source); })()), "getId", [], "method", false, false, false, 222)]), "html", null, true);
            echo "><i class=\"bi bi-heart-fill\"> remove from favoris</i></a>
            ";
        } else {
            // line 224
            echo "              <a href=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_favoris_tutoriel_new", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 224, $this->source); })()), "getId", [], "method", false, false, false, 224)]), "html", null, true);
            echo "><i class=\"bi bi-heart\">add to favoris</i></a>
            ";
        }
        // line 226
        echo "            <input type=\"number\" style=\"visibility: hidden;\" value=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 226, $this->source); })()), "getId", [], "method", false, false, false, 226), "html", null, true);
        echo ">
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
        // line 240
        if (((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 240, $this->source); })()) == true)) {
            // line 241
            echo "                      <div class=\"alert alert-success\">
                        Thanks for your rating <i class=\"bi bi-check\" style=\"width: 0;height: 100;color: #00ff00;\"></i>
                      </div>
                    ";
        }
        // line 245
        echo "        </div>

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
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tutoriel"]) || array_key_exists("tutoriel", $context) ? $context["tutoriel"] : (function () { throw new RuntimeError('Variable "tutoriel" does not exist.', 264, $this->source); })()), "videos", [], "any", false, false, false, 264));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 265
            echo "
              <div class=\"col-lg-4 col-md-6\">
                <div class=\"item\" style=\"height:220px;\">
                  <div class=\"left-img\">
                    <img src=";
            // line 269
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["v"], "getPathimage", [], "method", false, false, false, 269))), "html", null, true);
            echo " alt=\"\">
                  </div>
                  <div class=\"right-content\">
                    <h4>";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 272), "html", null, true);
            echo "</h4>
                    <a href=";
            // line 273
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_show", ["id_video" => twig_get_attribute($this->env, $this->source, $context["v"], "getId", [], "method", false, false, false, 273)]), "html", null, true);
            echo ">Show Video</a>
                    <div class=\"line-dec\"></div>
                    <h6>Views: <em>20</em></h6>
                    <span class=\"date\">";
            // line 276
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "getDateP", [], "method", false, false, false, 276), "m:h d:m:Y"), "html", null, true);
            echo "</span>
                  </div>
                </div>
              </div>
              
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "            
            

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        // line 291
        $this->displayBlock('js', $context, $blocks);
        // line 295
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 291
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 292
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
        return array (  375 => 292,  365 => 291,  354 => 295,  352 => 291,  341 => 282,  329 => 276,  323 => 273,  319 => 272,  313 => 269,  307 => 265,  303 => 264,  282 => 245,  276 => 241,  274 => 240,  256 => 226,  250 => 224,  244 => 222,  242 => 221,  238 => 220,  231 => 218,  225 => 215,  218 => 211,  205 => 200,  203 => 199,  193 => 198,  152 => 167,  130 => 148,  125 => 146,  117 => 141,  114 => 140,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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


    <script>
        \$(document).ready(function () {
            if({{oldrating.getRating()}})
            {
              setRating({{oldrating.getRating()}});
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
                    \$('.rating-star#rating-' + {{oldrating.getRating()}} + ' ~ .rating-star').removeClass('fa-star').addClass('fa-star-o');

                    //\$('.rating-star').removeClass('fa-star').addClass('fa-star-o');
                })
                .on('click', function (e) {
                    var rating = \$(e.target).data('rating');
                    \$.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/rating/tutoriel/new/'+\$(e.target).data('rating')+'/'+parseInt(document.querySelector('input').value),
                        dataType: \"json\",
                        contentType: 'application/json',
                        success: function (response) {

                            // Handle the response from the controller
                                                            alert(\" you're order Has been Established successfully ! \");

                        }
                    });
                    setRating(rating);
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
{% set show=false %}
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
                    {% if(show==true) %}
                      <div class=\"alert alert-success\">
                        Thanks for your rating <i class=\"bi bi-check\" style=\"width: 0;height: 100;color: #00ff00;\"></i>
                      </div>
                    {% endif %}
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
{% endblock %}
", "tutoriel/show.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\tutoriel\\show.html.twig");
    }
}
