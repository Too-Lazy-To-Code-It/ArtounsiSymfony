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

/* challenge/participation.html.twig */
class __TwigTemplate_9a0ddc255f1b0df946a325aae0290203 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/participation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/participation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "challenge/participation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 4
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
    <script>
        \$(document).ready(function () {

          if(";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oldrating"]) || array_key_exists("oldrating", $context) ? $context["oldrating"] : (function () { throw new RuntimeError('Variable "oldrating" does not exist.', 27, $this->source); })()), "getRating", [], "method", false, false, false, 27), "html", null, true);
        echo ")
            {
              setRating(";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oldrating"]) || array_key_exists("oldrating", $context) ? $context["oldrating"] : (function () { throw new RuntimeError('Variable "oldrating" does not exist.', 29, $this->source); })()), "getRating", [], "method", false, false, false, 29), "html", null, true);
        echo ");
            }

            function setRating(rating) {
                
                \$('#form_rating').val(rating);
                // fill all the stars assigning the '.selected' class
                \$('.rating-star').removeClass('fa-star-o').addClass('selected');
                // empty all the stars to the right of the mouse
                \$('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('selected').addClass('fa-star-o');
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
                    \$.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/rating/new/'+\$(e.target).data('rating')+'/'+parseInt(document.getElementById(\"challengeid\").value) +'/'+parseInt(document.getElementById(\"participatorid\").value),
                        dataType: \"json\",
                        contentType: 'application/json',
                        success: function (response) {
                          document.getElementById(\"avg_rating\").innerHTML = Math.round(response.avg.avg)+\" Stars\";
                          document.getElementById(\"avg_flash\").style.visibility = 'visible';
                          setTimeout(myGreeting, 3000);
                          function myGreeting() {
                                                  document.getElementById(\"avg_flash\").style.visibility = 'hidden'
                                                }
                            
                        }
                    });
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

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "<div class=\"item-details-page\">
  <div class=\"container\">
              <div class=\"col-lg-12\">
          <div class=\"current-bid\">
            <div class=\"row\">
          <div class=\"col-lg-7\">
            <div class=\"left-image\">
              <img src=";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 100, $this->source); })()), "getIMGParticipation", [], "method", false, false, false, 100))), "html", null, true);
        echo " alt=\"\" style=\"border-radius: 20px; max-height:480px; padding-top:20px;\">
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
          </div>          
          <div class=\"col-lg-5 align-self-center\">
            <span class=\"author\">
              <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/author-02.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 50%;height: 50px;width: 50px;\">
              <h6> ";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 106, $this->source); })()), "getIdUser", [], "method", false, false, false, 106), "getName", [], "method", false, false, false, 106), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 106, $this->source); })()), "getIdUser", [], "method", false, false, false, 106), "getLastName", [], "method", false, false, false, 106), "html", null, true);
        echo " <br><a href=\"/\"> @";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 106, $this->source); })()), "getIdUser", [], "method", false, false, false, 106), "getNickname", [], "method", false, false, false, 106), "html", null, true);
        echo "</a></h6>
            </span>
            <p>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 108, $this->source); })()), "getDescription", [], "method", false, false, false, 108), "html", null, true);
        echo "</p>
            <div class=\"row\">
              <div class=\"col-8\">
                <span class=\"bid\">
                <input id=\"challengeid\" type=\"number\" style=\"visibility: hidden;\" value=";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 112, $this->source); })()), "getIdChallenge", [], "method", false, false, false, 112), "getId", [], "method", false, false, false, 112), "html", null, true);
        echo ">
                <input id=\"participatorid\" type=\"number\" style=\"visibility: hidden;\" value=";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 113, $this->source); })()), "getIdUser", [], "method", false, false, false, 113), "getid_user", [], "method", false, false, false, 113), "html", null, true);
        echo ">
                <input id=\"participationid\" type=\"number\" style=\"visibility: hidden;\" value=";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 114, $this->source); })()), "getId", [], "method", false, false, false, 114), "html", null, true);
        echo ">

                <div class=\"row\">
                  <div class=\"col-5\">
                    <span class=\"bid\">
                      Current Rate<br><strong id=\"avg_rating\">";
        // line 119
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["avg"]) || array_key_exists("avg", $context) ? $context["avg"] : (function () { throw new RuntimeError('Variable "avg" does not exist.', 119, $this->source); })()), "avg", [], "any", false, false, false, 119), 1), "html", null, true);
        echo " Stars</strong><br>
                    </span>
                  </div>
    
                  <div class=\"col-7\">
                    <span class=\"bid\">
                      Rate us!
                      <br>

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
                    <div id=\"avg_flash\" class=\"avg_flash\" style=\"visibility: hidden;\">
                      Thanks for your rating <i class=\"bi bi-check\" style=\"width: 0;height: 100;color: #7453FC;\"></i>
                    </div>
                  </div></div>
              </div>
            </div>
          </div></div></div></div></div></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "challenge/participation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 119,  228 => 114,  224 => 113,  220 => 112,  213 => 108,  204 => 106,  200 => 105,  192 => 100,  183 => 93,  173 => 92,  101 => 29,  96 => 27,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
    <script>
        \$(document).ready(function () {

          if({{oldrating.getRating()}})
            {
              setRating({{oldrating.getRating()}});
            }

            function setRating(rating) {
                
                \$('#form_rating').val(rating);
                // fill all the stars assigning the '.selected' class
                \$('.rating-star').removeClass('fa-star-o').addClass('selected');
                // empty all the stars to the right of the mouse
                \$('.rating-star#rating-' + rating + ' ~ .rating-star').removeClass('selected').addClass('fa-star-o');
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
                    \$.ajax({
                        type: 'POST',
                        url: 'http://127.0.0.1:8000/rating/new/'+\$(e.target).data('rating')+'/'+parseInt(document.getElementById(\"challengeid\").value) +'/'+parseInt(document.getElementById(\"participatorid\").value),
                        dataType: \"json\",
                        contentType: 'application/json',
                        success: function (response) {
                          document.getElementById(\"avg_rating\").innerHTML = Math.round(response.avg.avg)+\" Stars\";
                          document.getElementById(\"avg_flash\").style.visibility = 'visible';
                          setTimeout(myGreeting, 3000);
                          function myGreeting() {
                                                  document.getElementById(\"avg_flash\").style.visibility = 'hidden'
                                                }
                            
                        }
                    });
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
              <div class=\"col-lg-12\">
          <div class=\"current-bid\">
            <div class=\"row\">
          <div class=\"col-lg-7\">
            <div class=\"left-image\">
              <img src={{ asset('http://localhost/img/'~p.getIMGParticipation()) }} alt=\"\" style=\"border-radius: 20px; max-height:480px; padding-top:20px;\">
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
          </div>          
          <div class=\"col-lg-5 align-self-center\">
            <span class=\"author\">
              <img src=\"{{ asset('/assets/images/author-02.jpg') }}\" alt=\"\" style=\"border-radius: 50%;height: 50px;width: 50px;\">
              <h6> {{ p.getIdUser().getName() }} {{ p.getIdUser().getLastName() }} <br><a href=\"/\"> @{{ p.getIdUser().getNickname()}}</a></h6>
            </span>
            <p>{{ p.getDescription() }}</p>
            <div class=\"row\">
              <div class=\"col-8\">
                <span class=\"bid\">
                <input id=\"challengeid\" type=\"number\" style=\"visibility: hidden;\" value={{p.getIdChallenge().getId()}}>
                <input id=\"participatorid\" type=\"number\" style=\"visibility: hidden;\" value={{p.getIdUser().getid_user()}}>
                <input id=\"participationid\" type=\"number\" style=\"visibility: hidden;\" value={{p.getId()}}>

                <div class=\"row\">
                  <div class=\"col-5\">
                    <span class=\"bid\">
                      Current Rate<br><strong id=\"avg_rating\">{{avg.avg|round(1)}} Stars</strong><br>
                    </span>
                  </div>
    
                  <div class=\"col-7\">
                    <span class=\"bid\">
                      Rate us!
                      <br>

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
                    <div id=\"avg_flash\" class=\"avg_flash\" style=\"visibility: hidden;\">
                      Thanks for your rating <i class=\"bi bi-check\" style=\"width: 0;height: 100;color: #7453FC;\"></i>
                    </div>
                  </div></div>
              </div>
            </div>
          </div></div></div></div></div></div>
{% endblock %}", "challenge/participation.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\challenge\\participation.html.twig");
    }
}
