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

/* @StarRating/Display/ratingDisplay.html.twig */
class __TwigTemplate_634f51e728cccb95ffcc1306923c48b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@StarRating/Display/ratingDisplay.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@StarRating/Display/ratingDisplay.html.twig"));

        // line 1
        echo "<";
        echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " class=\"rating\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 2, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    <";
            echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 3, $this->source); })()), "html", null, true);
            echo " class=\"";
            if (($context["i"] <= (isset($context["stars"]) || array_key_exists("stars", $context) ? $context["stars"] : (function () { throw new RuntimeError('Variable "stars" does not exist.', 3, $this->source); })()))) {
                echo "star-full";
            } else {
                echo "star-empty";
            }
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["starSize"]) || array_key_exists("starSize", $context) ? $context["starSize"] : (function () { throw new RuntimeError('Variable "starSize" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\"></";
            echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 3, $this->source); })()), "html", null, true);
            echo ">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</";
        echo twig_escape_filter($this->env, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 5, $this->source); })()), "html", null, true);
        echo ">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@StarRating/Display/ratingDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 5,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<{{ tag }} class=\"rating\">
  {% for i in 1..max %}
    <{{ tag }} class=\"{% if i <= stars %}star-full{% else %}star-empty{% endif %} {{ starSize }}\"></{{ tag }}>
  {% endfor %}
</{{ tag }}>
", "@StarRating/Display/ratingDisplay.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\vendor\\sbyaute\\star-rating-bundle\\Resources\\views\\Display\\ratingDisplay.html.twig");
    }
}
