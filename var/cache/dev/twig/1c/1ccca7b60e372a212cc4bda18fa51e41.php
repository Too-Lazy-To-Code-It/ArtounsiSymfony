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

/* @JMSTranslation/Translate/messages.html.twig */
class __TwigTemplate_aaf52f6f62b93c817443ef70a1829dbf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSTranslation/Translate/messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSTranslation/Translate/messages.html.twig"));

        // line 1
        echo "    <table>
        <thead>
            <tr>
                <th width=\"20%\">ID</th>
                <th width=\"40%\">Translation</th>
                <th width=\"40%\">Additional Information</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["message"]) {
            // line 11
            echo "            <tr class=\"messageRow\" id=\"row-";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">
                <td>
                    <a class=\"jms-translation-anchor\" id=\"";
            // line 13
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" />
                    <p><abbr title=\"";
            // line 14
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $context["id"], 0, 25), "html", null, true);
            if ((twig_length_filter($this->env, $context["id"]) > 25)) {
                echo "...";
            }
            echo "</abbr></p>
                </td>
                <td>
                    <textarea data-id=\"";
            // line 17
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" class=\"span6\"";
            if (((isset($context["isWriteable"]) || array_key_exists("isWriteable", $context) ? $context["isWriteable"] : (function () { throw new RuntimeError('Variable "isWriteable" does not exist.', 17, $this->source); })()) === false)) {
                echo " readonly=\"readonly\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "localeString", [], "any", false, false, false, 17), "html", null, true);
            echo "</textarea></td>
                <td>
                    ";
            // line 19
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["message"], "meaning", [], "any", false, false, false, 19))) {
                // line 20
                echo "                        <h6>Meaning</h6>
                        <p>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "meaning", [], "any", false, false, false, 21), "html", null, true);
                echo "</p>
                    ";
            }
            // line 23
            echo "
                    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["alternativeMessages"] ?? null), $context["id"], [], "array", true, true, false, 24)) {
                // line 25
                echo "                        <h6>Alternative Translations</h6>
                        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["alternativeMessages"]) || array_key_exists("alternativeMessages", $context) ? $context["alternativeMessages"] : (function () { throw new RuntimeError('Variable "alternativeMessages" does not exist.', 26, $this->source); })()), $context["id"], [], "array", false, false, false, 26));
                foreach ($context['_seq'] as $context["locale"] => $context["altMessage"]) {
                    // line 27
                    echo "                        <p>
                            <strong>";
                    // line 28
                    echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                    echo ":</strong> <pre>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["altMessage"], "localeString", [], "any", false, false, false, 28), "html", null, true);
                    echo "</pre>
                        </p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['locale'], $context['altMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                    ";
            }
            // line 32
            echo "
                    ";
            // line 33
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sources", [], "any", false, false, false, 33)) > 0)) {
                // line 34
                echo "                        <h6>Sources</h6>
                        <ul>
                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "sources", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                    // line 37
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["source"], "path", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, $context["source"], "line", [], "any", false, false, false, 37));
                    // line 38
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 38, $this->source); })())) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 38, $this->source); })()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $context["source"], "html", null, true);
                        echo "\">";
                    } else {
                        echo "<span>";
                    }
                    // line 39
                    echo "                                <li class=\"jms-sources-list-item truncate-left\">";
                    echo twig_escape_filter($this->env, $context["source"], "html", null, true);
                    echo "</li>";
                    // line 40
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 40, $this->source); })())) {
                        echo "</a>";
                    } else {
                        echo "</span>";
                    }
                    // line 41
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                        </ul>
                    ";
            }
            // line 44
            echo "
                    ";
            // line 45
            if (((( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["message"], "desc", [], "any", false, false, false, 45)) && (twig_get_attribute($this->env, $this->source,             // line 46
$context["message"], "localeString", [], "any", false, false, false, 46) != twig_get_attribute($this->env, $this->source, $context["message"], "desc", [], "any", false, false, false, 46))) && (            // line 47
$context["id"] != twig_get_attribute($this->env, $this->source, $context["message"], "desc", [], "any", false, false, false, 47))) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 48
($context["alternativeMessages"] ?? null), $context["id"], [], "array", false, true, false, 48), (isset($context["sourceLanguage"]) || array_key_exists("sourceLanguage", $context) ? $context["sourceLanguage"] : (function () { throw new RuntimeError('Variable "sourceLanguage" does not exist.', 48, $this->source); })()), [], "array", true, true, false, 48) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 49
(isset($context["alternativeMessages"]) || array_key_exists("alternativeMessages", $context) ? $context["alternativeMessages"] : (function () { throw new RuntimeError('Variable "alternativeMessages" does not exist.', 49, $this->source); })()), $context["id"], [], "array", false, false, false, 49), (isset($context["sourceLanguage"]) || array_key_exists("sourceLanguage", $context) ? $context["sourceLanguage"] : (function () { throw new RuntimeError('Variable "sourceLanguage" does not exist.', 49, $this->source); })()), [], "array", false, false, false, 49), "localeString", [], "any", false, false, false, 49) != twig_get_attribute($this->env, $this->source, $context["message"], "desc", [], "any", false, false, false, 49))))) {
                // line 50
                echo "                        <h6>Description</h6>
                        <p>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "desc", [], "any", false, false, false, 51), "html", null, true);
                echo "</p>
                    ";
            }
            // line 53
            echo "                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "            <tr>
                <td colspan=\"3\">No messages found</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@JMSTranslation/Translate/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 60,  199 => 56,  192 => 53,  187 => 51,  184 => 50,  182 => 49,  181 => 48,  180 => 47,  179 => 46,  178 => 45,  175 => 44,  171 => 42,  165 => 41,  159 => 40,  155 => 39,  145 => 38,  143 => 37,  139 => 36,  135 => 34,  133 => 33,  130 => 32,  127 => 31,  116 => 28,  113 => 27,  109 => 26,  106 => 25,  104 => 24,  101 => 23,  96 => 21,  93 => 20,  91 => 19,  80 => 17,  69 => 14,  65 => 13,  59 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <table>
        <thead>
            <tr>
                <th width=\"20%\">ID</th>
                <th width=\"40%\">Translation</th>
                <th width=\"40%\">Additional Information</th>
            </tr>
        </thead>
        <tbody>
            {% for id, message in messages %}
            <tr class=\"messageRow\" id=\"row-{{ id }}\">
                <td>
                    <a class=\"jms-translation-anchor\" id=\"{{ id }}\" />
                    <p><abbr title=\"{{ id }}\">{{ id|slice(0, 25) }}{% if id|length > 25 %}...{% endif %}</abbr></p>
                </td>
                <td>
                    <textarea data-id=\"{{ id }}\" class=\"span6\"{% if isWriteable is same as(false) %} readonly=\"readonly\"{% endif %}>{{ message.localeString }}</textarea></td>
                <td>
                    {% if message.meaning is not empty %}
                        <h6>Meaning</h6>
                        <p>{{ message.meaning }}</p>
                    {% endif %}

                    {% if alternativeMessages[id] is defined %}
                        <h6>Alternative Translations</h6>
                        {% for locale, altMessage in alternativeMessages[id] %}
                        <p>
                            <strong>{{ locale }}:</strong> <pre>{{ altMessage.localeString }}</pre>
                        </p>
                        {% endfor %}
                    {% endif %}

                    {% if message.sources|length > 0 %}
                        <h6>Sources</h6>
                        <ul>
                        {% for source in message.sources %}
                            {%- set link = source.path|file_link(source.line) %}
                            {%- if link %}<a href=\"{{ link }}\" title=\"{{ source }}\">{% else %}<span>{% endif %}
                                <li class=\"jms-sources-list-item truncate-left\">{{ source }}</li>
                            {%- if link %}</a>{% else %}</span>{% endif %}
                        {% endfor %}
                        </ul>
                    {% endif %}

                    {% if message.desc is not empty
                            and message.localeString != message.desc
                            and id != message.desc
                            and (alternativeMessages[id][sourceLanguage] is not defined
                                 or alternativeMessages[id][sourceLanguage].localeString != message.desc) %}
                        <h6>Description</h6>
                        <p>{{ message.desc }}</p>
                    {% endif %}
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"3\">No messages found</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
", "@JMSTranslation/Translate/messages.html.twig", "C:\\Users\\amine\\ArtounsiSymfonyy\\vendor\\jms\\translation-bundle\\Resources\\views\\Translate\\messages.html.twig");
    }
}
