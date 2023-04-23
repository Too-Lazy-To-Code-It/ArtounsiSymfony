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

/* challenge/show.html.twig */
class __TwigTemplate_7ffcda08af32ca895939431d9788aef9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "challenge/show.html.twig", 1);
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

        echo "Challenge";
        
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
            <script>
        \$(document).ready(function () {
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
                        url: 'http://127.0.0.1:8000/rating/new/'+\$(e.target).data('rating')+'/'+parseInt(document.getElementById(\"challengeid\").value),
                        dataType: \"json\",
                        contentType: 'application/json',
                        success: function (response) {

                            // Handle the response from the controller
                            if (response.success) {
                                alert(\" Thanks for your rating \");
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

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "    <div class=\"page-heading normal-space\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6><span>";
        // line 82
        ((twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 82, $this->source); })()), "DateC", [], "any", false, false, false, 82)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 82, $this->source); })()), "DateC", [], "any", false, false, false, 82), "d M Y"), "html", null, true))) : (print ("")));
        echo "</span></h6>
          <h2>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 83, $this->source); })()), "Title", [], "any", false, false, false, 83), "html", null, true);
        echo "</h2>
          <img src=";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 84, $this->source); })()), "PathIMG", [], "any", false, false, false, 84))), "html", null, true);
        echo " alt=\"\" style=\"border-radius: 20px; max-width: 200px;\" height=200>
          <h6>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 85, $this->source); })()), "Description", [], "any", false, false, false, 85), "html", null, true);
        echo "</h6>
          <span>Level : ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 86, $this->source); })()), "Niveau", [], "any", false, false, false, 86), "html", null, true);
        echo "</span>
          <div class=\"buttons\">
            <div class=\"main-button\">
              <a>Participate</a>
            </div>
            <div class=\"border-button\">
              <a href=\"create.html\">Show Participations</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
  <div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Apply For <em>Your Participation</em> Here.</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">

            <div class=\"row\" style=\"color:white; margin-top:20px\">
              <div class=\"col-lg-12\">
                <fieldset>
                  <label style=\"color:white;\" for=";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "Description", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115), "html", null, true);
        echo ">Description</label>
                  <input style=\"width: 100%; background:transparent; border-color:#7453FC; border-radius: 25px; padding:5px;color:white;border-width: 10px; margin-top:5px;\" type=\"title\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "Description", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), "html", null, true);
        echo "\" name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "Description", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "full_name", [], "any", false, false, false, 116), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "Description", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116), "html", null, true);
        echo " placeholder=\"Ex. Lyon King\" autocomplete=\"on\" required>
                  ";
        // line 117
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "Description", [], "any", false, false, false, 117), "setRendered", [], "any", false, false, false, 117);
        // line 118
        echo "                </fieldset>
              </div>

              <div class=\"col-lg-4\" style=\"margin-top:20px\">
                <fieldset>
                  <label style=\"color:white;\" for=";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "Image", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123), "html", null, true);
        echo ">Your Image</label>
                  <input style=\"background-color:#7453FC; cursor:pointer;border-color:#7453FC; border-radius: 20px; padding:10px; padding-left:20px; color:white;border-width: 10px; width:100%; height:100%; margin-top:5px\" type=\"file\" id=";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "Image", [], "any", false, false, false, 124), "vars", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124), "html", null, true);
        echo " name=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "Image", [], "any", false, false, false, 124), "vars", [], "any", false, false, false, 124), "full_name", [], "any", false, false, false, 124), "html", null, true);
        echo " />
                  ";
        // line 125
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "Image", [], "any", false, false, false, 125), "setRendered", [], "any", false, false, false, 125);
        // line 126
        echo "                </fieldset>
              </div>

              <div class=\"col-lg-12\" style=\"margin-top:20px\">
                <fieldset style=\"display:flex; justify-content:center;\">
                  <p/>
                  <button type=\"submit\" id=\"form\" class=\"orange-button\">Submit Your Applying</button>
                </fieldset>
              </div>
              
            </div>

        </div>
        ";
        // line 139
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), 'form_end');
        echo "

        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>This Is The List Of <em>Participations</em></h2>  
          </div>
        </div>

        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 148, $this->source); })()), "participations", [], "any", false, false, false, 148));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 149
            echo "          <div class=\"col-lg-7\">
            <div class=\"left-image\">
              <img src=";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["p"], "getIMGParticipation", [], "method", false, false, false, 151))), "html", null, true);
            echo " alt=\"\" style=\"border-radius: 20px; max-height:70%; padding-top:20px;\">
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
          </div>          
          <div class=\"col-lg-5 align-self-center\">
            <span class=\"author\">
              <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
              <h6> ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 157), "getName", [], "method", false, false, false, 157), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 157), "getLastName", [], "method", false, false, false, 157), "html", null, true);
            echo " <br><a href=\"/\"> @";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 157), "getNickname", [], "method", false, false, false, 157), "html", null, true);
            echo "</a></h6>
            </span>
            <p>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "getDescription", [], "method", false, false, false, 159), "html", null, true);
            echo "</p>
            <div class=\"row\">
              <div class=\"col-4\">
                <span class=\"bid\">
                  Current Rate<br><strong>4 Stars</strong><br>
                </span>
              </div>
              <div class=\"col-8\">
                <span class=\"bid\">
                <input id=\"challengeid\" type=\"number\" style=\"visibility: hidden;\" value=";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 168, $this->source); })()), "getId", [], "method", false, false, false, 168), "html", null, true);
            echo ">
                <input id=\"participationid\" type=\"number\" style=\"visibility: hidden;\" value=";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 169, $this->source); })()), "getId", [], "method", false, false, false, 169), "html", null, true);
            echo ">
                    ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 170, $this->source); })()), "ratings", [], "any", false, false, false, 170));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 171
                echo "                      ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getParticipatorId", [], "method", false, false, false, 171), "getid_user", [], "method", false, false, false, 171) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "getIdUser", [], "method", false, false, false, 171), "getid_user", [], "method", false, false, false, 171)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getRaterId", [], "method", false, false, false, 171), "getid_user", [], "method", false, false, false, 171) == 1))) {
                    // line 172
                    echo "                        ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, $context["r"], "getRating", [], "method", false, false, false, 172));
                    echo "
                      ";
                }
                // line 174
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
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
              </div>
            </div>
          </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 193
            echo "          <p> no Participation Yet </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "
      </div>
    </div>
  </div>

    <a href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 202, $this->source); })()), "id", [], "any", false, false, false, 202)]), "html", null, true);
        echo "\">edit</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "challenge/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 202,  399 => 200,  392 => 195,  385 => 193,  363 => 175,  357 => 174,  351 => 172,  348 => 171,  344 => 170,  340 => 169,  336 => 168,  324 => 159,  315 => 157,  306 => 151,  302 => 149,  297 => 148,  285 => 139,  270 => 126,  268 => 125,  262 => 124,  258 => 123,  251 => 118,  249 => 117,  241 => 116,  237 => 115,  219 => 100,  202 => 86,  198 => 85,  194 => 84,  190 => 83,  186 => 82,  180 => 78,  170 => 77,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Challenge{% endblock %}
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
                        url: 'http://127.0.0.1:8000/rating/new/'+\$(e.target).data('rating')+'/'+parseInt(document.getElementById(\"challengeid\").value),
                        dataType: \"json\",
                        contentType: 'application/json',
                        success: function (response) {

                            // Handle the response from the controller
                            if (response.success) {
                                alert(\" Thanks for your rating \");
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
    <div class=\"page-heading normal-space\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6><span>{{ challenge.DateC ? challenge.DateC|date('d M Y') : '' }}</span></h6>
          <h2>{{ challenge.Title }}</h2>
          <img src={{ asset('http://localhost/img/'~challenge.PathIMG) }} alt=\"\" style=\"border-radius: 20px; max-width: 200px;\" height=200>
          <h6>{{ challenge.Description }}</h6>
          <span>Level : {{ challenge.Niveau }}</span>
          <div class=\"buttons\">
            <div class=\"main-button\">
              <a>Participate</a>
            </div>
            <div class=\"border-button\">
              <a href=\"create.html\">Show Participations</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

{{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
  <div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Apply For <em>Your Participation</em> Here.</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">

            <div class=\"row\" style=\"color:white; margin-top:20px\">
              <div class=\"col-lg-12\">
                <fieldset>
                  <label style=\"color:white;\" for={{form.Description.vars.id}}>Description</label>
                  <input style=\"width: 100%; background:transparent; border-color:#7453FC; border-radius: 25px; padding:5px;color:white;border-width: 10px; margin-top:5px;\" type=\"title\" value=\"{{form.Description.vars.value}}\" name={{form.Description.vars.full_name}} id={{form.Description.vars.id}} placeholder=\"Ex. Lyon King\" autocomplete=\"on\" required>
                  {% do form.Description.setRendered %}
                </fieldset>
              </div>

              <div class=\"col-lg-4\" style=\"margin-top:20px\">
                <fieldset>
                  <label style=\"color:white;\" for={{form.Image.vars.id}}>Your Image</label>
                  <input style=\"background-color:#7453FC; cursor:pointer;border-color:#7453FC; border-radius: 20px; padding:10px; padding-left:20px; color:white;border-width: 10px; width:100%; height:100%; margin-top:5px\" type=\"file\" id={{form.Image.vars.id}} name={{form.Image.vars.full_name}} />
                  {% do form.Image.setRendered %}
                </fieldset>
              </div>

              <div class=\"col-lg-12\" style=\"margin-top:20px\">
                <fieldset style=\"display:flex; justify-content:center;\">
                  <p/>
                  <button type=\"submit\" id=\"form\" class=\"orange-button\">Submit Your Applying</button>
                </fieldset>
              </div>
              
            </div>

        </div>
        {{ form_end(form) }}

        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>This Is The List Of <em>Participations</em></h2>  
          </div>
        </div>

        {% for p in challenge.participations %}
          <div class=\"col-lg-7\">
            <div class=\"left-image\">
              <img src={{ asset('http://localhost/img/'~p.getIMGParticipation()) }} alt=\"\" style=\"border-radius: 20px; max-height:70%; padding-top:20px;\">
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
          </div>          
          <div class=\"col-lg-5 align-self-center\">
            <span class=\"author\">
              <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
              <h6> {{ p.getIdUser().getName() }} {{ p.getIdUser().getLastName() }} <br><a href=\"/\"> @{{ p.getIdUser().getNickname()}}</a></h6>
            </span>
            <p>{{ p.getDescription() }}</p>
            <div class=\"row\">
              <div class=\"col-4\">
                <span class=\"bid\">
                  Current Rate<br><strong>4 Stars</strong><br>
                </span>
              </div>
              <div class=\"col-8\">
                <span class=\"bid\">
                <input id=\"challengeid\" type=\"number\" style=\"visibility: hidden;\" value={{challenge.getId()}}>
                <input id=\"participationid\" type=\"number\" style=\"visibility: hidden;\" value={{challenge.getId()}}>
                    {% for r in challenge.ratings %}
                      {% if r.getParticipatorId().getid_user() == p.getIdUser().getid_user() and r.getRaterId().getid_user() == 1 %}
                        {{dump(r.getRating())}}
                      {% endif %}
                    {% endfor %}

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
              </div>
            </div>
          </div>
        {%else%}
          <p> no Participation Yet </p>
        {%endfor%}

      </div>
    </div>
  </div>

    <a href=\"{{ path('app_challenge_index') }}\">back to list</a>

    <a href=\"{{ path('app_challenge_edit', {'id': challenge.id}) }}\">edit</a>

{% endblock %}
", "challenge/show.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\challenge\\show.html.twig");
    }
}
