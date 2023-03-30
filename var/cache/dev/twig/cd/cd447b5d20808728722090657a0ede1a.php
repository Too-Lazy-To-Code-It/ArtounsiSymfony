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

/* @SonataUser/Form/roles_matrix.html.twig */
class __TwigTemplate_2a4623cbcbae36bbc032e52797b3ad1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Form/roles_matrix.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Form/roles_matrix.html.twig"));

        // line 11
        echo "<table class=\"table table-condensed\">
    <thead>
    <tr>
        <th></th>
        <th></th>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["permission_labels"]) || array_key_exists("permission_labels", $context) ? $context["permission_labels"] : (function () { throw new RuntimeError('Variable "permission_labels" does not exist.', 16, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 17
            echo "            <th> ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " </th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grouped_roles"]) || array_key_exists("grouped_roles", $context) ? $context["grouped_roles"] : (function () { throw new RuntimeError('Variable "grouped_roles" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["group_code"] => $context["admin_roles"]) {
            // line 23
            echo "        ";
            $context["new_group"] = true;
            // line 24
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["admin_roles"]);
            foreach ($context['_seq'] as $context["admin_code"] => $context["roles"]) {
                // line 25
                echo "            <tr>
            ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, $context["roles"]));
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
                foreach ($context['_seq'] as $context["role"] => $context["attributes"]) {
                    // line 27
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 27)) {
                        // line 28
                        echo "                    ";
                        if ((isset($context["new_group"]) || array_key_exists("new_group", $context) ? $context["new_group"] : (function () { throw new RuntimeError('Variable "new_group" does not exist.', 28, $this->source); })())) {
                            // line 29
                            echo "                        ";
                            $context["new_group"] = false;
                            // line 30
                            echo "                        <th rowspan=\"";
                            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["admin_roles"]), "html", null, true);
                            echo "\" scope=\"rowgroup\">";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["attributes"], "group_label", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["attributes"], "group_label", [], "any", false, false, false, 30), "")) : ("")), "html", null, true);
                            echo "</th>
                    ";
                        }
                        // line 32
                        echo "                    <th>";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["attributes"], "admin_label", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["attributes"], "admin_label", [], "any", false, false, false, 32), "")) : ("")), "html", null, true);
                        echo "</th>
                ";
                    }
                    // line 34
                    echo "                <td>
                    ";
                    // line 35
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["attributes"], "form", [], "any", false, false, false, 35), 'widget', ["label" => false]);
                    echo "
                    ";
                    // line 36
                    if ( !twig_get_attribute($this->env, $this->source, $context["attributes"], "is_granted", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "                        <script>
                            \$('input[value=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                        echo "\"]').iCheck('disable');
                            \$('form').on('submit', function() {
                                \$('input[value=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                        echo "\"]').iCheck('enable');
                            });
                        </script>
                    ";
                    }
                    // line 44
                    echo "                </td>
            ";
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
                unset($context['_seq'], $context['_iterated'], $context['role'], $context['attributes'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['admin_code'], $context['roles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_code'], $context['admin_roles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </tbody>
</table>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Form/roles_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 49,  169 => 48,  162 => 46,  147 => 44,  140 => 40,  135 => 38,  132 => 37,  130 => 36,  126 => 35,  123 => 34,  117 => 32,  109 => 30,  106 => 29,  103 => 28,  100 => 27,  83 => 26,  80 => 25,  75 => 24,  72 => 23,  68 => 22,  63 => 19,  54 => 17,  50 => 16,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<table class=\"table table-condensed\">
    <thead>
    <tr>
        <th></th>
        <th></th>
        {% for label in permission_labels|sort %}
            <th> {{ label }} </th>
        {% endfor %}
    </tr>
    </thead>
    <tbody>
    {% for group_code, admin_roles in grouped_roles %}
        {% set new_group = true %}
        {% for admin_code, roles in admin_roles %}
            <tr>
            {% for role, attributes in roles|sort %}
                {% if loop.first %}
                    {% if new_group %}
                        {% set new_group = false %}
                        <th rowspan=\"{{ admin_roles|length }}\" scope=\"rowgroup\">{{ attributes.group_label|default('') }}</th>
                    {% endif %}
                    <th>{{ attributes.admin_label|default('') }}</th>
                {% endif %}
                <td>
                    {{ form_widget(attributes.form, { label: false }) }}
                    {% if not attributes.is_granted %}
                        <script>
                            \$('input[value=\"{{ role }}\"]').iCheck('disable');
                            \$('form').on('submit', function() {
                                \$('input[value=\"{{ role }}\"]').iCheck('enable');
                            });
                        </script>
                    {% endif %}
                </td>
            {% endfor %}
            </tr>
        {% endfor %}
    {% endfor %}
    </tbody>
</table>

", "@SonataUser/Form/roles_matrix.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\vendor\\sonata-project\\user-bundle\\src\\Resources\\views\\Form\\roles_matrix.html.twig");
    }
}
