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

/* @SonataUser/Form/roles_matrix_list.html.twig */
class __TwigTemplate_3df9f9c228a5a3b080147f019c8ed3e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Form/roles_matrix_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Form/roles_matrix_list.html.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 11, $this->source); })())));
        foreach ($context['_seq'] as $context["role"] => $context["attributes"]) {
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["attributes"], "form", [], "any", true, true, false, 12)) {
                // line 13
                echo "    <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["attributes"], "form", [], "any", false, false, false, 13), 'widget', ["label" => twig_get_attribute($this->env, $this->source, $context["attributes"], "role_translated", [], "any", false, false, false, 13), "value" => twig_get_attribute($this->env, $this->source, $context["attributes"], "role", [], "any", false, false, false, 13)]);
                echo "</li>
    ";
                // line 14
                if ( !twig_get_attribute($this->env, $this->source, $context["attributes"], "is_granted", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "        <script>
            \$('input[value=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "\"]').iCheck('disable');
            \$('form').on('submit', function() {
                \$('input[value=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "\"]').iCheck('enable');
            });
        </script>
    ";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Form/roles_matrix_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  59 => 16,  56 => 15,  54 => 14,  49 => 13,  47 => 12,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% for role, attributes in roles|sort %}
{% if attributes.form is defined %}
    <li>{{ form_widget(attributes.form, {label: attributes.role_translated, value: attributes.role}) }}</li>
    {% if not attributes.is_granted %}
        <script>
            \$('input[value=\"{{ role }}\"]').iCheck('disable');
            \$('form').on('submit', function() {
                \$('input[value=\"{{ role }}\"]').iCheck('enable');
            });
        </script>
    {% endif %}
{% endif %}
{% endfor %}
", "@SonataUser/Form/roles_matrix_list.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\vendor\\sonata-project\\user-bundle\\src\\Resources\\views\\Form\\roles_matrix_list.html.twig");
    }
}
