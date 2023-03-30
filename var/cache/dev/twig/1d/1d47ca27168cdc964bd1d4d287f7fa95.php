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

/* @SonataForm/Form/datepicker.html.twig */
class __TwigTemplate_079f1692a1e45779a83b9242902ee7d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sonata_type_date_picker_widget_html' => [$this, 'block_sonata_type_date_picker_widget_html'],
            'sonata_type_date_picker_widget' => [$this, 'block_sonata_type_date_picker_widget'],
            'sonata_type_datetime_picker_widget_html' => [$this, 'block_sonata_type_datetime_picker_widget_html'],
            'sonata_type_datetime_picker_widget' => [$this, 'block_sonata_type_datetime_picker_widget'],
            'sonata_type_datetime_range_script_block' => [$this, 'block_sonata_type_datetime_range_script_block'],
            'sonata_type_datetime_range_picker_widget' => [$this, 'block_sonata_type_datetime_range_picker_widget'],
            'sonata_type_date_range_picker_widget' => [$this, 'block_sonata_type_date_range_picker_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataForm/Form/datepicker.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataForm/Form/datepicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('sonata_type_datetime_range_script_block', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('sonata_type_datetime_range_picker_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('sonata_type_date_range_picker_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new RuntimeError('Variable "datepicker_use_button" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 15, $this->source); })()), ["data-date-format" => (isset($context["moment_format"]) || array_key_exists("moment_format", $context) ? $context["moment_format"] : (function () { throw new RuntimeError('Variable "moment_format" does not exist.', 15, $this->source); })())]);
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new RuntimeError('Variable "datepicker_use_button" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) || array_key_exists("wrap_fields_with_addons", $context) ? $context["wrap_fields_with_addons"] : (function () { throw new RuntimeError('Variable "wrap_fields_with_addons" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo (((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new RuntimeError('Variable "datepicker_use_button" does not exist.', 34, $this->source); })())) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "').datetimepicker(";
        echo json_encode((isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new RuntimeError('Variable "dp_options" does not exist.', 34, $this->source); })()));
        echo ");
            });
        </script>
    ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo twig_spaceless($___internal_parse_2_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        // line 41
        echo "    ";
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new RuntimeError('Variable "datepicker_use_button" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "        <div class='input-group date ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new RuntimeError('Variable "dp_options" does not exist.', 42, $this->source); })()), "pickDate", [], "array", false, false, false, 42)) {
                echo "timepicker";
            }
            echo "' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 44, $this->source); })()), ["data-date-format" => (isset($context["moment_format"]) || array_key_exists("moment_format", $context) ? $context["moment_format"] : (function () { throw new RuntimeError('Variable "moment_format" does not exist.', 44, $this->source); })())]);
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new RuntimeError('Variable "datepicker_use_button" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "            <span class=\"input-group-addon\">
                <span class=\"fa ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, (isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new RuntimeError('Variable "dp_options" does not exist.', 48, $this->source); })()), "pickDate", [], "array", false, false, false, 48)) {
                echo "fa-calendar";
            } else {
                echo "fa-clock";
            }
            echo "\"></span>
            </span>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) || array_key_exists("wrap_fields_with_addons", $context) ? $context["wrap_fields_with_addons"] : (function () { throw new RuntimeError('Variable "wrap_fields_with_addons" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "            <div class=\"input-group\">
                ";
            // line 58
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 61
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 63
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 65
        echo (((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new RuntimeError('Variable "datepicker_use_button" does not exist.', 65, $this->source); })())) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "').datetimepicker(";
        echo json_encode((isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new RuntimeError('Variable "dp_options" does not exist.', 65, $this->source); })()));
        echo ");
            });
        </script>
    ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo twig_spaceless($___internal_parse_3_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_sonata_type_datetime_range_script_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_range_script_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_range_script_block"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var \$startDateTimePicker = \$('#";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["startId"]) || array_key_exists("startId", $context) ? $context["startId"] : (function () { throw new RuntimeError('Variable "startId" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "');
                var \$endDateTimePicker = \$('#";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["endId"]) || array_key_exists("endId", $context) ? $context["endId"] : (function () { throw new RuntimeError('Variable "endId" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "');
                \$startDateTimePicker.on(\"dp.change\", function (e) {
                    \$endDateTimePicker.data(\"DateTimePicker\").setMinDate(e.date);
                });
                \$endDateTimePicker.on(\"dp.change\", function (e) {
                    \$startDateTimePicker.data(\"DateTimePicker\").setMaxDate(e.date);
                });
            });
        </script>
    ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 72
        echo twig_spaceless($___internal_parse_4_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 89
    public function block_sonata_type_datetime_range_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_range_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_datetime_range_picker_widget"));

        // line 90
        echo "    ";
        $context["startId"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "children", [], "any", false, false, false, 90), "start", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "datepicker_use_button", [], "any", false, false, false, 90)) ? ("dtp_") : ("")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "children", [], "any", false, false, false, 90), "start", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90));
        // line 91
        echo "    ";
        $context["endId"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "children", [], "any", false, false, false, 91), "end", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "datepicker_use_button", [], "any", false, false, false, 91)) ? ("dtp_") : ("")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "children", [], "any", false, false, false, 91), "end", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91));
        // line 92
        echo "    ";
        $this->displayBlock("sonata_type_datetime_range_script_block", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_sonata_type_date_range_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_date_range_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_type_date_range_picker_widget"));

        // line 96
        echo "    ";
        $context["startId"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "children", [], "any", false, false, false, 96), "start", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "datepicker_use_button", [], "any", false, false, false, 96)) ? ("dp_") : ("")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "children", [], "any", false, false, false, 96), "start", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96));
        // line 97
        echo "    ";
        $context["endId"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "children", [], "any", false, false, false, 97), "end", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "datepicker_use_button", [], "any", false, false, false, 97)) ? ("dp_") : ("")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "children", [], "any", false, false, false, 97), "end", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97));
        // line 98
        echo "    ";
        $this->displayBlock("sonata_type_datetime_range_script_block", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataForm/Form/datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  389 => 98,  386 => 97,  383 => 96,  373 => 95,  360 => 92,  357 => 91,  354 => 90,  344 => 89,  334 => 72,  321 => 77,  317 => 76,  310 => 73,  307 => 72,  297 => 71,  287 => 55,  277 => 65,  273 => 63,  267 => 61,  261 => 58,  258 => 57,  255 => 56,  252 => 55,  242 => 54,  223 => 48,  220 => 47,  218 => 46,  213 => 45,  210 => 44,  200 => 42,  197 => 41,  187 => 40,  177 => 24,  167 => 34,  163 => 32,  157 => 30,  151 => 27,  148 => 26,  145 => 25,  142 => 24,  132 => 23,  119 => 18,  117 => 17,  112 => 16,  109 => 15,  103 => 13,  100 => 12,  90 => 11,  80 => 95,  77 => 94,  75 => 89,  72 => 88,  70 => 71,  67 => 70,  65 => 54,  62 => 53,  60 => 40,  57 => 39,  55 => 23,  52 => 22,  50 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_date_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('date_widget') }}
    {% if datepicker_use_button %}
            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_date_picker_widget_html %}

{% block sonata_type_date_picker_widget %}
    {% apply spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_date_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_date_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endapply %}
{% endblock sonata_type_date_picker_widget %}

{% block sonata_type_datetime_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date {% if not dp_options['pickDate'] %}timepicker{% endif %}' id='dtp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('datetime_widget') }}
    {% if datepicker_use_button %}
            <span class=\"input-group-addon\">
                <span class=\"fa {% if dp_options['pickDate'] %}fa-calendar{% else %}fa-clock{% endif %}\"></span>
            </span>
        </div>
    {% endif %}
{% endblock sonata_type_datetime_picker_widget_html %}

{% block sonata_type_datetime_picker_widget %}
    {% apply spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_datetime_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_datetime_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dtp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endapply %}
{% endblock sonata_type_datetime_picker_widget %}

{% block sonata_type_datetime_range_script_block %}
    {% apply spaceless %}
        {{ block('form_widget') }}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var \$startDateTimePicker = \$('#{{ startId }}');
                var \$endDateTimePicker = \$('#{{ endId }}');
                \$startDateTimePicker.on(\"dp.change\", function (e) {
                    \$endDateTimePicker.data(\"DateTimePicker\").setMinDate(e.date);
                });
                \$endDateTimePicker.on(\"dp.change\", function (e) {
                    \$startDateTimePicker.data(\"DateTimePicker\").setMaxDate(e.date);
                });
            });
        </script>
    {% endapply %}
{% endblock sonata_type_datetime_range_script_block %}

{% block sonata_type_datetime_range_picker_widget %}
    {% set startId = (form.children.start.vars.datepicker_use_button ? 'dtp_' : '') ~ form.children.start.vars.id %}
    {% set endId = (form.children.end.vars.datepicker_use_button ? 'dtp_' : '') ~ form.children.end.vars.id %}
    {{ block('sonata_type_datetime_range_script_block') }}
{% endblock sonata_type_datetime_range_picker_widget %}

{% block sonata_type_date_range_picker_widget %}
    {% set startId = (form.children.start.vars.datepicker_use_button ? 'dp_' : '') ~ form.children.start.vars.id %}
    {% set endId = (form.children.end.vars.datepicker_use_button ? 'dp_' : '') ~ form.children.end.vars.id %}
    {{ block('sonata_type_datetime_range_script_block') }}
{% endblock sonata_type_date_range_picker_widget %}
", "@SonataForm/Form/datepicker.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\vendor\\sonata-project\\form-extensions\\src\\Bridge\\Symfony\\Resources\\views\\Form\\datepicker.html.twig");
    }
}
