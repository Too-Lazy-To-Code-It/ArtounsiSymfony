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

/* @SonataTwig/FlashMessage/render.html.twig */
class __TwigTemplate_d7849f53ced7a4a802084fbe66f33a4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataTwig/FlashMessage/render.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataTwig/FlashMessage/render.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["collapse"] = ((array_key_exists("collapse", $context)) ? (_twig_default_filter((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 12, $this->source); })()), 1)) : (1));
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessagesTypes());
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
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 15
            echo "    ";
            $context["messages"] = $this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessages($context["type"]);
            // line 16
            echo "    ";
            if (((twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 16, $this->source); })())) > (isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 16, $this->source); })())) && ((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 16, $this->source); })()) > 0))) {
                // line 17
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessagesClass($context["type"], "default"), "html", null, true);
                echo " alert-dismissible collapsed-box\">
            <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_close", [], "SonataTwigBundle"), "html", null, true);
                echo "\">
                &times;
            </button>
            <input type=\"checkbox\" class=\"read-more-state\" id=\"toggle-more-";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26), "html", null, true);
                echo "\" />
            <div class=\"read-more-wrap\">
                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 28, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 29
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29) > (isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 29, $this->source); })()))) {
                        // line 30
                        echo "                        <span class=\"read-more-target\">";
                        echo $context["message"];
                        echo "</span>
                    ";
                    } else {
                        // line 32
                        echo "                        ";
                        echo $context["message"];
                        echo "
                    ";
                    }
                    // line 34
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "            </div>

            <label for=\"toggle-more-";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
                echo "\" class=\"read-more-trigger\">
                <span class=\"more\">";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more", [], "SonataTwigBundle"), "html", null, true);
                echo " &#9660;</span>
                <span class=\"less hide\">";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("less", [], "SonataTwigBundle"), "html", null, true);
                echo " &#9650;</span>
                <span class=\"badge badge-default\">";
                // line 40
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 40, $this->source); })())), "html", null, true);
                echo "</span>
            </label>
        </div>
    ";
            } elseif ((twig_length_filter($this->env,             // line 43
(isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 43, $this->source); })())) > 0)) {
                // line 44
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 44, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 45
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\Twig\Extension\FlashMessageRuntime')->getFlashMessagesClass($context["type"], "default"), "html", null, true);
                    echo " alert-dismissable\">
                <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_close", [], "SonataTwigBundle"), "html", null, true);
                    echo "\">
                    &times;
                </button>
                ";
                    // line 54
                    echo $context["message"];
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataTwig/FlashMessage/render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 57,  186 => 54,  180 => 51,  170 => 45,  165 => 44,  163 => 43,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  141 => 35,  127 => 34,  121 => 32,  115 => 30,  112 => 29,  95 => 28,  90 => 26,  84 => 23,  74 => 17,  71 => 16,  68 => 15,  51 => 14,  48 => 13,  46 => 12,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% set collapse = collapse|default(1) %}

{% for type in sonata_flashmessages_types() %}
    {% set messages = sonata_flashmessages_get(type) %}
    {% if messages|length > collapse and collapse > 0 %}
        <div class=\"alert alert-{{ sonata_flashmessages_class(type, 'default') }} alert-dismissible collapsed-box\">
            <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"{{ 'message_close'|trans({}, 'SonataTwigBundle') }}\">
                &times;
            </button>
            <input type=\"checkbox\" class=\"read-more-state\" id=\"toggle-more-{{ loop.index }}\" />
            <div class=\"read-more-wrap\">
                {% for message in messages %}
                    {% if loop.index > collapse %}
                        <span class=\"read-more-target\">{{ message|raw }}</span>
                    {% else %}
                        {{ message|raw }}
                    {% endif %}
                {% endfor %}
            </div>

            <label for=\"toggle-more-{{ loop.index }}\" class=\"read-more-trigger\">
                <span class=\"more\">{{ 'more'|trans({}, 'SonataTwigBundle') }} &#9660;</span>
                <span class=\"less hide\">{{ 'less'|trans({}, 'SonataTwigBundle') }} &#9650;</span>
                <span class=\"badge badge-default\">{{ messages|length }}</span>
            </label>
        </div>
    {% elseif messages|length > 0 %}
        {% for message in messages %}
            <div class=\"alert alert-{{ sonata_flashmessages_class(type, 'default') }} alert-dismissable\">
                <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"alert\"
                    aria-hidden=\"true\"
                    aria-label=\"{{ 'message_close'|trans({}, 'SonataTwigBundle') }}\">
                    &times;
                </button>
                {{ message|raw }}
            </div>
        {% endfor %}
    {% endif %}
{% endfor %}
", "@SonataTwig/FlashMessage/render.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\vendor\\sonata-project\\twig-extensions\\src\\Bridge\\Symfony\\Resources\\views\\FlashMessage\\render.html.twig");
    }
}
