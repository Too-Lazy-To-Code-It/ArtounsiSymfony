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

/* @JMSTranslation/Translate/index.html.twig */
class __TwigTemplate_7f2b784e3055a6900d234a6c80052f5f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@JMSTranslation/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSTranslation/Translate/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSTranslation/Translate/index.html.twig"));

        $this->parent = $this->loadTemplate("@JMSTranslation/base.html.twig", "@JMSTranslation/Translate/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script language=\"javascript\" type=\"text/javascript\">
        var updateMessagePath = ";
        // line 6
        echo json_encode($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jms_translation_update_message", ["config" => (isset($context["selectedConfig"]) || array_key_exists("selectedConfig", $context) ? $context["selectedConfig"] : (function () { throw new RuntimeError('Variable "selectedConfig" does not exist.', 6, $this->source); })()), "domain" => (isset($context["selectedDomain"]) || array_key_exists("selectedDomain", $context) ? $context["selectedDomain"] : (function () { throw new RuntimeError('Variable "selectedDomain" does not exist.', 6, $this->source); })()), "locale" => (isset($context["selectedLocale"]) || array_key_exists("selectedLocale", $context) ? $context["selectedLocale"] : (function () { throw new RuntimeError('Variable "selectedLocale" does not exist.', 6, $this->source); })())]));
        echo ";
        var isWritable        = ";
        // line 7
        echo ((((isset($context["isWriteable"]) || array_key_exists("isWriteable", $context) ? $context["isWriteable"] : (function () { throw new RuntimeError('Variable "isWriteable" does not exist.', 7, $this->source); })()) === true)) ? ("true") : ("false"));
        echo ";
        var JMS               = new JMSTranslationManager(updateMessagePath, isWritable);

        JMS.ready();
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <form id=\"config\" action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jms_translation_index");
        echo "\" method=\"get\">
        <select name=\"config\" class=\"span3\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["configs"]) || array_key_exists("configs", $context) ? $context["configs"] : (function () { throw new RuntimeError('Variable "configs" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 19
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "\"";
            if (($context["config"] == (isset($context["selectedConfig"]) || array_key_exists("selectedConfig", $context) ? $context["selectedConfig"] : (function () { throw new RuntimeError('Variable "selectedConfig" does not exist.', 19, $this->source); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["config"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </select>

        <select name=\"domain\" class=\"span3\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) || array_key_exists("domains", $context) ? $context["domains"] : (function () { throw new RuntimeError('Variable "domains" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 25
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "\"";
            if (($context["domain"] == (isset($context["selectedDomain"]) || array_key_exists("selectedDomain", $context) ? $context["selectedDomain"] : (function () { throw new RuntimeError('Variable "selectedDomain" does not exist.', 25, $this->source); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </select>

        <select name=\"locale\" class=\"span2\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 31
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "\"";
            if (($context["locale"] == (isset($context["selectedLocale"]) || array_key_exists("selectedLocale", $context) ? $context["selectedLocale"] : (function () { throw new RuntimeError('Variable "selectedLocale" does not exist.', 31, $this->source); })()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </select>
    </form>

    ";
        // line 36
        if (((isset($context["isWriteable"]) || array_key_exists("isWriteable", $context) ? $context["isWriteable"] : (function () { throw new RuntimeError('Variable "isWriteable" does not exist.', 36, $this->source); })()) === false)) {
            // line 37
            echo "    <div class=\"alert-message error\">
        The translation file \"<strong>";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "</strong>\" is not writable.
    </div>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if (("xliff" != (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new RuntimeError('Variable "format" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format.

        <br /><br />

        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract ";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["selectedLocale"]) || array_key_exists("selectedLocale", $context) ? $context["selectedLocale"] : (function () { throw new RuntimeError('Variable "selectedLocale" does not exist.', 49, $this->source); })()), "html", null, true);
            echo " --config=";
            echo twig_escape_filter($this->env, (isset($context["selectedConfig"]) || array_key_exists("selectedConfig", $context) ? $context["selectedConfig"] : (function () { throw new RuntimeError('Variable "selectedConfig" does not exist.', 49, $this->source); })()), "html", null, true);
            echo " --output-format=xliff</code>
    </div>
    ";
        }
        // line 52
        echo "
    <h2>Available Messages</h2>
\t<h3>
\t\tFilter messages by Id
\t\t<input id=\"filter\" placeholder=\"Enter a key to filter the entries.\" title=\"A wildcard/regexp-search for '*your_key*' will be done. You can also use the '.' as 1-char wildcard, '.*' as wildcard for 0-n chars. Search the web for 'JS Regex Documentation' for more information about regular expressions.\"/>
\t</h3>

    ";
        // line 59
        if ( !twig_test_empty((isset($context["newMessages"]) || array_key_exists("newMessages", $context) ? $context["newMessages"] : (function () { throw new RuntimeError('Variable "newMessages" does not exist.', 59, $this->source); })()))) {
            // line 60
            echo "    <h3>New Messages</h3>
    ";
            // line 61
            $this->loadTemplate("@JMSTranslation/Translate/messages.html.twig", "@JMSTranslation/Translate/index.html.twig", 61)->display(twig_array_merge($context, ["messages" => (isset($context["newMessages"]) || array_key_exists("newMessages", $context) ? $context["newMessages"] : (function () { throw new RuntimeError('Variable "newMessages" does not exist.', 61, $this->source); })())]));
            // line 62
            echo "    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if ( !twig_test_empty((isset($context["existingMessages"]) || array_key_exists("existingMessages", $context) ? $context["existingMessages"] : (function () { throw new RuntimeError('Variable "existingMessages" does not exist.', 64, $this->source); })()))) {
            // line 65
            echo "    <h3>Existing Messages</h3>
    ";
            // line 66
            $this->loadTemplate("@JMSTranslation/Translate/messages.html.twig", "@JMSTranslation/Translate/index.html.twig", 66)->display(twig_array_merge($context, ["messages" => (isset($context["existingMessages"]) || array_key_exists("existingMessages", $context) ? $context["existingMessages"] : (function () { throw new RuntimeError('Variable "existingMessages" does not exist.', 66, $this->source); })())]));
            // line 67
            echo "    ";
        }
        // line 68
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@JMSTranslation/Translate/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 68,  246 => 67,  244 => 66,  241 => 65,  239 => 64,  236 => 63,  233 => 62,  231 => 61,  228 => 60,  226 => 59,  217 => 52,  209 => 49,  201 => 43,  199 => 42,  196 => 41,  190 => 38,  187 => 37,  185 => 36,  180 => 33,  165 => 31,  161 => 30,  156 => 27,  141 => 25,  137 => 24,  132 => 21,  117 => 19,  113 => 18,  108 => 16,  105 => 15,  95 => 14,  79 => 7,  75 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@JMSTranslation/base.html.twig\" %}

{% block javascripts %}
    {{ parent() }}
    <script language=\"javascript\" type=\"text/javascript\">
        var updateMessagePath = {{ path(\"jms_translation_update_message\", {\"config\": selectedConfig, \"domain\": selectedDomain, \"locale\": selectedLocale})|json_encode|raw }};
        var isWritable        = {{ isWriteable is same as(true) ? 'true' : 'false' }};
        var JMS               = new JMSTranslationManager(updateMessagePath, isWritable);

        JMS.ready();
    </script>
{% endblock %}

{% block body %}

    <form id=\"config\" action=\"{{ path(\"jms_translation_index\") }}\" method=\"get\">
        <select name=\"config\" class=\"span3\">
            {% for config in configs %}
            <option value=\"{{ config }}\"{% if config == selectedConfig %} selected=\"selected\"{% endif %}>{{ config }}</option>
            {% endfor %}
        </select>

        <select name=\"domain\" class=\"span3\">
            {% for domain in domains %}
            <option value=\"{{ domain }}\"{% if domain == selectedDomain %} selected=\"selected\"{% endif %}>{{ domain }}</option>
            {% endfor %}
        </select>

        <select name=\"locale\" class=\"span2\">
            {% for locale in locales %}
            <option value=\"{{ locale }}\"{% if locale == selectedLocale %} selected=\"selected\"{% endif %}>{{ locale }}</option>
            {% endfor %}
        </select>
    </form>

    {% if isWriteable is same as(false) %}
    <div class=\"alert-message error\">
        The translation file \"<strong>{{ file }}</strong>\" is not writable.
    </div>
    {% endif %}

    {% if \"xliff\" != format %}
    <div class=\"alert-message warning\">
        Due to limitations of the different loaders/dumpers, some features are unfortunately limited to the XLIFF format.

        <br /><br />

        However, you can easily convert your existing translation files to the XLIFF format by running:<br />
        <code>php app/console translation:extract {{ selectedLocale }} --config={{ selectedConfig }} --output-format=xliff</code>
    </div>
    {% endif %}

    <h2>Available Messages</h2>
\t<h3>
\t\tFilter messages by Id
\t\t<input id=\"filter\" placeholder=\"Enter a key to filter the entries.\" title=\"A wildcard/regexp-search for '*your_key*' will be done. You can also use the '.' as 1-char wildcard, '.*' as wildcard for 0-n chars. Search the web for 'JS Regex Documentation' for more information about regular expressions.\"/>
\t</h3>

    {% if newMessages is not empty %}
    <h3>New Messages</h3>
    {% include \"@JMSTranslation/Translate/messages.html.twig\" with {\"messages\": newMessages} %}
    {% endif %}

    {% if existingMessages is not empty %}
    <h3>Existing Messages</h3>
    {% include \"@JMSTranslation/Translate/messages.html.twig\" with {\"messages\": existingMessages} %}
    {% endif %}

{% endblock %}
", "@JMSTranslation/Translate/index.html.twig", "C:\\Users\\amine\\ArtounsiSymfonyy\\vendor\\jms\\translation-bundle\\Resources\\views\\Translate\\index.html.twig");
    }
}
