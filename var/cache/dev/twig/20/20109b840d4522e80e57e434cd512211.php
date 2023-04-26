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

/* challenge/calendar.html.twig */
class __TwigTemplate_a24aae6ed752002ad0b2dfb87ac1119a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/calendar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <title>Event calendar</title>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.min.css"), "html", null, true);
        echo "\" type=\"text/css\">

</head>
<body>

<div id=\"calendar\"></div>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.min.js"), "html", null, true);
        echo "\"></script>
<script>
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        initialDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        selectable: true,
        events: [
            // Add the events in calendar
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["challengesdata"]) || array_key_exists("challengesdata", $context) ? $context["challengesdata"] : (function () { throw new RuntimeError('Variable "challengesdata" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["challengedata"]) {
            // line 30
            echo "            {
                groupId: 999,
                title: '";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challengedata"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "',
                description: '";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challengedata"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "',
                url: 'http://127.0.0.1:8000/challenge/'+'";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challengedata"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "'+'/show',
                start: '";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challengedata"], "dateChallenge", [], "any", false, false, false, 35), "Y-m-d H:i:s"), "html", null, true);
            echo "',
            },
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challengedata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ]

    });

    calendar.render();

</script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "challenge/calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  83 => 30,  79 => 29,  60 => 13,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <title>Event calendar</title>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/main.min.css')}}\" type=\"text/css\">

</head>
<body>

<div id=\"calendar\"></div>
<script src=\"{{ asset('assets/js/main.min.js') }}\"></script>
<script>
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        initialDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        selectable: true,
        events: [
            // Add the events in calendar
            {% for challengedata in challengesdata %}
            {
                groupId: 999,
                title: '{{ challengedata.title }}',
                description: '{{ challengedata.description }}',
                url: 'http://127.0.0.1:8000/challenge/'+'{{ challengedata.id }}'+'/show',
                start: '{{ challengedata.dateChallenge|date('Y-m-d H:i:s') }}',
            },
            {% endfor %}
        ]

    });

    calendar.render();

</script>
</body>
</html>", "challenge/calendar.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\challenge\\calendar.html.twig");
    }
}
