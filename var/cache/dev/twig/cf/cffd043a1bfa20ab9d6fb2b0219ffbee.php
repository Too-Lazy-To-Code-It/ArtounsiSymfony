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

/* @ApiPlatform/DataCollector/request.html.twig */
class __TwigTemplate_f3d5bed05279a98c595d8b38175e9a17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ApiPlatform/DataCollector/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ApiPlatform/DataCollector/request.html.twig"));

        // line 77
        $macros["apiPlatform"] = $this->macros["apiPlatform"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@ApiPlatform/DataCollector/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 79
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 80
        echo "    ";
        ob_start();
        // line 81
        echo "        ";
        $context["status_color"] = ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", [], "any", false, true, false, 81), "ignored_filters", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", [], "any", false, true, false, 81), "ignored_filters", [], "any", false, false, false, 81), false)) : (false))) ? ("yellow") : ("default"));
        // line 82
        echo "        ";
        echo twig_include($this->env, $context, "@ApiPlatform/DataCollector/api-platform-icon.svg");
        echo "
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 84
        echo "
    ";
        // line 85
        ob_start();
        // line 86
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "version", [], "any", false, false, false, 86)) {
            // line 87
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Version</b>
                <span>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "version", [], "any", false, false, false, 89), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 92
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Resource Class</b>
            <span>";
        // line 94
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", [], "any", true, true, false, 94)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", [], "any", false, false, false, 94), "Not an API Platform resource")) : ("Not an API Platform resource")), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 96
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", [], "any", false, true, false, 96), "ignored_filters", [], "any", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counters", [], "any", false, true, false, 96), "ignored_filters", [], "any", false, false, false, 96), false)) : (false))) {
            // line 97
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Ignored Filters</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 99, $this->source); })()), "counters", [], "any", false, false, false, 99), "ignored_filters", [], "any", false, false, false, 99), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 102
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 103
        echo "
    ";
        // line 104
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 104, $this->source); })())]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 108
        echo "    ";
        // line 109
        echo "    <span class=\"label";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 109, $this->source); })()), "resourceClass", [], "any", false, false, false, 109)) ? ("") : (" disabled"));
        echo "\">
        <span class=\"icon\">
            ";
        // line 111
        echo twig_include($this->env, $context, "@ApiPlatform/DataCollector/api-platform.svg");
        echo "
        </span>
        <strong>API Platform</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 118
        echo "    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 120
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", [], "any", true, true, false, 120)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "resourceClass", [], "any", false, false, false, 120), "Not an API Platform resource")) : ("Not an API Platform resource")), "html", null, true);
        echo "</span>
            <span class=\"label\">Resource class</span>
        </div>
    </div>

    ";
        // line 125
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 125, $this->source); })()), "resourceMetadataCollection", [], "any", false, false, false, 125))) {
            // line 126
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title metadata-tab-title\">Metadata</h3>
                <h3>Resources</h3>
                <div class=\"tab-content metadata-tab-content\">
                    <div class=\"sf-tabs\">
                        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 132, $this->source); })()), "resourceMetadataCollection", [], "any", false, false, false, 132));
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
            foreach ($context['_seq'] as $context["_key"] => $context["resourceMetadata"]) {
                // line 133
                echo "                            <div class=\"tab\">
                                <h3 class=\"tab-title\">
                                    ";
                // line 135
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resourceMetadata"], "resource", [], "any", false, true, false, 135), "uriTemplate", [], "any", true, true, false, 135) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resourceMetadata"], "resource", [], "any", false, true, false, 135), "uriTemplate", [], "any", false, false, false, 135)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resourceMetadata"], "resource", [], "any", false, true, false, 135), "uriTemplate", [], "any", false, false, false, 135)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["resourceMetadata"], "resource", [], "any", false, false, false, 135), "shortName", [], "any", false, false, false, 135))), "html", null, true);
                echo "
                                </h3>
                                <div class=\"tab-content\">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th scope=\"col\" class=\"key\">Resource</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>";
                // line 146
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["resourceMetadata"], "resource", [], "any", false, false, false, 146), 1);
                echo "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    ";
                // line 150
                echo twig_call_macro($macros["apiPlatform"], "macro_operationTable", [twig_get_attribute($this->env, $this->source, $context["resourceMetadata"], "operations", [], "any", false, false, false, 150), "", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAttributes", [], "any", false, true, false, 150), "operation_name", [], "any", true, true, false, 150)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestAttributes", [], "any", false, true, false, 150), "operation_name", [], "any", false, false, false, 150), "")) : (""))], 150, $context, $this->getSourceContext());
                echo "
                                    <table>
                                        <thead>
                                            <tr>
                                                <th scope=\"col\" class=\"key\">Filters</th>
                                                <th scope=\"col\"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
                // line 159
                if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 159, $this->source); })()), "filters", [], "any", false, false, false, 159) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 159), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 159, $this->source); })()), "filters", [], "any", false, false, false, 159))))) {
                    // line 160
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 160, $this->source); })()), "filters", [], "any", false, false, false, 160), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 160), [], "array", false, false, false, 160));
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
                    foreach ($context['_seq'] as $context["id"] => $context["filter"]) {
                        // line 161
                        echo "                                                ";
                        $context["ignored_filter"] = ($context["filter"] === null);
                        // line 162
                        echo "                                                <tr";
                        if ((isset($context["ignored_filter"]) || array_key_exists("ignored_filter", $context) ? $context["ignored_filter"] : (function () { throw new RuntimeError('Variable "ignored_filter" does not exist.', 162, $this->source); })())) {
                            echo " class=\"status-warning\"";
                        }
                        echo ">
                                                    <td>
                                                        ";
                        // line 164
                        echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                        echo "
                                                        ";
                        // line 165
                        if ((isset($context["ignored_filter"]) || array_key_exists("ignored_filter", $context) ? $context["ignored_filter"] : (function () { throw new RuntimeError('Variable "ignored_filter" does not exist.', 165, $this->source); })())) {
                            // line 166
                            echo "                                                            <span class=\"newline text-muted\">ignored filter</span>
                                                        ";
                        } else {
                            // line 168
                            echo "                                                            ";
                            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["filter"]);
                            echo "
                                                        ";
                        }
                        // line 170
                        echo "                                                    </td>
                                                </tr>
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
                    unset($context['_seq'], $context['_iterated'], $context['id'], $context['filter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 173
                    echo "                                        ";
                } else {
                    // line 174
                    echo "                                            <tr>
                                                <td class=\"text-muted\" colspan=\"2\">
                                                    No available filter declared for this resource.
                                                </td>
                                            </tr>
                                        ";
                }
                // line 180
                echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resourceMetadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                    </div>
                </div>
            </div>
            <div class=\"tab\">
                <h3 class=\"tab-title data-provider-tab-title\">Data Providers</h3>
                <div class=\"tab-content data-provider-tab-content\">
                    ";
            // line 191
            echo twig_call_macro($macros["apiPlatform"], "macro_providerTable", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 191, $this->source); })()), "collectionDataProviders", [], "any", false, false, false, 191), "collection data provider"], 191, $context, $this->getSourceContext());
            echo "
                    ";
            // line 192
            echo twig_call_macro($macros["apiPlatform"], "macro_providerTable", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 192, $this->source); })()), "itemDataProviders", [], "any", false, false, false, 192), "item data provider"], 192, $context, $this->getSourceContext());
            echo "
                    ";
            // line 193
            echo twig_call_macro($macros["apiPlatform"], "macro_providerTable", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 193, $this->source); })()), "subresourceDataProviders", [], "any", false, false, false, 193), "subresource data provider"], 193, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title data-persister-tab-title\">Data Persisters</h3>
                <div class=\"tab-content data-persister-tab-content\">
                    ";
            // line 200
            echo twig_call_macro($macros["apiPlatform"], "macro_providerTable", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 200, $this->source); })()), "dataPersisters", [], "any", false, false, false, 200), "data persister"], 200, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function macro_operationLine($__key__ = null, $__operation__ = null, $__actualOperationName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "operation" => $__operation__,
            "actualOperationName" => $__actualOperationName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "operationLine"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "operationLine"));

            // line 4
            echo "    <tr>
        <th scope=\"row\"";
            // line 5
            if (((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 5, $this->source); })()) == (isset($context["actualOperationName"]) || array_key_exists("actualOperationName", $context) ? $context["actualOperationName"] : (function () { throw new RuntimeError('Variable "actualOperationName" does not exist.', 5, $this->source); })()))) {
                echo " class=\"status-success\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "</th>
        <td";
            // line 6
            if (((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 6, $this->source); })()) == (isset($context["actualOperationName"]) || array_key_exists("actualOperationName", $context) ? $context["actualOperationName"] : (function () { throw new RuntimeError('Variable "actualOperationName" does not exist.', 6, $this->source); })()))) {
                echo " class=\"status-success\"";
            }
            echo ">";
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (isset($context["operation"]) || array_key_exists("operation", $context) ? $context["operation"] : (function () { throw new RuntimeError('Variable "operation" does not exist.', 6, $this->source); })()), 1);
            echo "</td>
    </tr>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 10
    public function macro_operationTable($__object__ = null, $__name__ = null, $__actualOperationName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "object" => $__object__,
            "name" => $__name__,
            "actualOperationName" => $__actualOperationName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "operationTable"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "operationTable"));

            // line 11
            echo "    ";
            $macros["apiPlatform"] = $this;
            // line 12
            echo "    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">";
            // line 15
            if (array_key_exists("name", $context)) {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 15, $this->source); })())), "html", null, true);
            }
            echo "Operations</th>
                <th scope=\"col\">Attributes</th>
            </tr>
        </thead>

        <tbody>
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 21, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["itemOperation"]) {
                // line 22
                echo "            ";
                echo twig_call_macro($macros["apiPlatform"], "macro_operationLine", [$context["key"], $context["itemOperation"], (isset($context["actualOperationName"]) || array_key_exists("actualOperationName", $context) ? $context["actualOperationName"] : (function () { throw new RuntimeError('Variable "actualOperationName" does not exist.', 22, $this->source); })())], 22, $context, $this->getSourceContext());
                echo "
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 24
                echo "            <tr>
                <td colspan=\"2\" class=\"text-muted\">
                    No available ";
                // line 26
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 26, $this->source); })())), "html", null, true);
                echo " operation for this resource.
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['itemOperation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </tbody>
    </table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 34
    public function macro_providerTable($__object__ = null, $__name__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "object" => $__object__,
            "name" => $__name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "providerTable"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "providerTable"));

            // line 35
            echo "    ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 35, $this->source); })()), "responses", [], "any", false, false, false, 35))) {
                // line 36
                echo "        <div class=\"empty\">
            <p>No calls to ";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 37, $this->source); })()), "html", null, true);
                echo " have been recorded.</p>
        </div>
    ";
            } else {
                // line 40
                echo "        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Used</th>
                <th>";
                // line 45
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 45, $this->source); })())), "html", null, true);
                echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 49, $this->source); })()), "responses", [], "any", false, false, false, 49));
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
                foreach ($context['_seq'] as $context["class"] => $context["used"]) {
                    // line 50
                    echo "                <tr>
                    <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 51), "html", null, true);
                    echo "</td>
                    <td class=\"font-normal\">
                        ";
                    // line 53
                    if (($context["used"] === true)) {
                        // line 54
                        echo "                            <span class=\"label status-success same-width\">TRUE</span>
                        ";
                    } elseif ((                    // line 55
$context["used"] === false)) {
                        // line 56
                        echo "                            <span class=\"label status-error same-width\">FALSE</span>
                        ";
                    } else {
                        // line 58
                        echo "                            <span class=\"label status-info same-width\">NOT USED</span>
                        ";
                    }
                    // line 60
                    echo "                    </td>
                    <td class=\"font-normal\">";
                    // line 61
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['class'], $context['used'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "            </tbody>
            ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "context", [], "any", true, true, false, 65)) {
                    // line 66
                    echo "                <tfoot>
                    <tr>
                        <td class=\"font-normal\" colspan=\"2\"></td>
                        <td class=\"font-normal\">Context";
                    // line 69
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 69, $this->source); })()), "context", [], "any", false, false, false, 69), 2);
                    echo "</td>
                    </tr>
                </tfoot>
            ";
                }
                // line 73
                echo "        </table>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@ApiPlatform/DataCollector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 73,  649 => 69,  644 => 66,  642 => 65,  639 => 64,  622 => 61,  619 => 60,  615 => 58,  611 => 56,  609 => 55,  606 => 54,  604 => 53,  599 => 51,  596 => 50,  579 => 49,  572 => 45,  565 => 40,  559 => 37,  556 => 36,  553 => 35,  533 => 34,  516 => 30,  506 => 26,  502 => 24,  494 => 22,  489 => 21,  478 => 15,  473 => 12,  470 => 11,  449 => 10,  427 => 6,  419 => 5,  416 => 4,  395 => 3,  379 => 200,  369 => 193,  365 => 192,  361 => 191,  353 => 185,  335 => 180,  327 => 174,  324 => 173,  308 => 170,  302 => 168,  298 => 166,  296 => 165,  292 => 164,  284 => 162,  281 => 161,  263 => 160,  261 => 159,  249 => 150,  242 => 146,  228 => 135,  224 => 133,  207 => 132,  199 => 126,  197 => 125,  189 => 120,  185 => 118,  175 => 117,  160 => 111,  154 => 109,  152 => 108,  142 => 107,  130 => 104,  127 => 103,  124 => 102,  118 => 99,  114 => 97,  112 => 96,  107 => 94,  103 => 92,  97 => 89,  93 => 87,  90 => 86,  88 => 85,  85 => 84,  79 => 82,  76 => 81,  73 => 80,  63 => 79,  52 => 1,  50 => 77,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% macro operationLine(key, operation, actualOperationName) %}
    <tr>
        <th scope=\"row\"{% if key == actualOperationName %} class=\"status-success\"{% endif %}>{{ key }}</th>
        <td{% if key == actualOperationName %} class=\"status-success\"{% endif %}>{{- profiler_dump(operation, 1) -}}</td>
    </tr>
{% endmacro %}

{% macro operationTable(object, name, actualOperationName) %}
    {% import _self as apiPlatform %}
    <table>
        <thead>
            <tr>
                <th scope=\"col\" class=\"key\">{% if name is defined %}{{ name|capitalize }}{% endif %}Operations</th>
                <th scope=\"col\">Attributes</th>
            </tr>
        </thead>

        <tbody>
        {% for key, itemOperation in object %}
            {{ apiPlatform.operationLine(key, itemOperation, actualOperationName) }}
        {% else %}
            <tr>
                <td colspan=\"2\" class=\"text-muted\">
                    No available {{ name|lower }} operation for this resource.
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro providerTable(object, name) %}
    {% if object.responses is empty %}
        <div class=\"empty\">
            <p>No calls to {{ name }} have been recorded.</p>
        </div>
    {% else %}
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Used</th>
                <th>{{ name|capitalize }}</th>
            </tr>
            </thead>
            <tbody>
            {% for class, used in object.responses %}
                <tr>
                    <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                    <td class=\"font-normal\">
                        {% if used is same as(true) %}
                            <span class=\"label status-success same-width\">TRUE</span>
                        {% elseif used is same as(false) %}
                            <span class=\"label status-error same-width\">FALSE</span>
                        {% else %}
                            <span class=\"label status-info same-width\">NOT USED</span>
                        {% endif %}
                    </td>
                    <td class=\"font-normal\">{{ class }}</td>
                </tr>
            {% endfor %}
            </tbody>
            {% if object.context is defined %}
                <tfoot>
                    <tr>
                        <td class=\"font-normal\" colspan=\"2\"></td>
                        <td class=\"font-normal\">Context{{ profiler_dump(object.context, 2) }}</td>
                    </tr>
                </tfoot>
            {% endif %}
        </table>
    {% endif %}
{% endmacro %}

{% import _self as apiPlatform %}

{% block toolbar %}
    {% set icon %}
        {% set status_color = collector.counters.ignored_filters|default(false) ? 'yellow' : 'default' %}
        {{ include('@ApiPlatform/DataCollector/api-platform-icon.svg') }}
    {% endset %}

    {% set text %}
        {% if collector.version %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Version</b>
                <span>{{ collector.version }}</span>
            </div>
        {% endif %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Resource Class</b>
            <span>{{ collector.resourceClass|default('Not an API Platform resource') }}</span>
        </div>
        {% if collector.counters.ignored_filters|default(false) %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Ignored Filters</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">{{ collector.counters.ignored_filters }}</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true, status: status_color }) }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label{{ collector.resourceClass ? '' : ' disabled' }}\">
        <span class=\"icon\">
            {{ include('@ApiPlatform/DataCollector/api-platform.svg') }}
        </span>
        <strong>API Platform</strong>
    </span>
{% endblock %}

{% block panel %}
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.resourceClass|default('Not an API Platform resource') }}</span>
            <span class=\"label\">Resource class</span>
        </div>
    </div>

    {% if collector.resourceMetadataCollection is not empty %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title metadata-tab-title\">Metadata</h3>
                <h3>Resources</h3>
                <div class=\"tab-content metadata-tab-content\">
                    <div class=\"sf-tabs\">
                        {% for resourceMetadata in collector.resourceMetadataCollection %}
                            <div class=\"tab\">
                                <h3 class=\"tab-title\">
                                    {{ resourceMetadata.resource.uriTemplate ??  resourceMetadata.resource.shortName }}
                                </h3>
                                <div class=\"tab-content\">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th scope=\"col\" class=\"key\">Resource</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{- profiler_dump(resourceMetadata.resource, 1) -}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {{ apiPlatform.operationTable(resourceMetadata.operations, '', collector.requestAttributes.operation_name|default('')) }}
                                    <table>
                                        <thead>
                                            <tr>
                                                <th scope=\"col\" class=\"key\">Filters</th>
                                                <th scope=\"col\"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {% if collector.filters and loop.index0 in collector.filters|keys %}
                                            {% for id, filter in collector.filters[loop.index0] %}
                                                {% set ignored_filter = filter is same as(null) %}
                                                <tr{% if ignored_filter %} class=\"status-warning\"{% endif %}>
                                                    <td>
                                                        {{ id }}
                                                        {% if ignored_filter %}
                                                            <span class=\"newline text-muted\">ignored filter</span>
                                                        {% else %}
                                                            {{ dump(filter) }}
                                                        {% endif %}
                                                    </td>
                                                </tr>
                                            {% endfor %}
                                        {% else %}
                                            <tr>
                                                <td class=\"text-muted\" colspan=\"2\">
                                                    No available filter declared for this resource.
                                                </td>
                                            </tr>
                                        {% endif %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"tab\">
                <h3 class=\"tab-title data-provider-tab-title\">Data Providers</h3>
                <div class=\"tab-content data-provider-tab-content\">
                    {{ apiPlatform.providerTable(collector.collectionDataProviders, 'collection data provider') }}
                    {{ apiPlatform.providerTable(collector.itemDataProviders, 'item data provider') }}
                    {{ apiPlatform.providerTable(collector.subresourceDataProviders, 'subresource data provider') }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title data-persister-tab-title\">Data Persisters</h3>
                <div class=\"tab-content data-persister-tab-content\">
                    {{ apiPlatform.providerTable(collector.dataPersisters, 'data persister') }}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

", "@ApiPlatform/DataCollector/request.html.twig", "C:\\Users\\amine\\ArtounsiSymfonyy\\vendor\\api-platform\\core\\src\\Symfony\\Bundle\\Resources\\views\\DataCollector\\request.html.twig");
    }
}
