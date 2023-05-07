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

/* dashboard/index.html.twig */
class __TwigTemplate_db77f5db177ded616abd8ace51d745b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">

    <!-- Vendor CSS Files -->

    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->

    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style id=\"apexcharts-css\">@keyframes opaque {
                                   0% {
                                       opacity: 0
                                   }

                                   to {
                                       opacity: 1
                                   }
                               }

        @keyframes resizeanim {
            0%, to {
                opacity: 0
            }
        }

        .apexcharts-canvas {
            position: relative;
            user-select: none
        }

        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
        }

        .apexcharts-inner {
            position: relative
        }

        .apexcharts-text tspan {
            font-family: inherit
        }

        .legend-mouseover-inactive {
            transition: .15s ease all;
            opacity: .2
        }

        .apexcharts-legend-text {
            padding-left: 15px;
            margin-left: -15px;
        }

        .apexcharts-series-collapsed {
            opacity: 0
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, .96)
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, .8)
        }

        .apexcharts-tooltip * {
            font-family: inherit
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #eceff1;
            border-bottom: 1px solid #ddd
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, .7);
            border-bottom: 1px solid #333
        }

        .apexcharts-tooltip-text-goals-value, .apexcharts-tooltip-text-y-value, .apexcharts-tooltip-text-z-value {
            display: inline-block;
            margin-left: 5px;
            font-weight: 600
        }

        .apexcharts-tooltip-text-goals-label:empty, .apexcharts-tooltip-text-goals-value:empty, .apexcharts-tooltip-text-y-label:empty, .apexcharts-tooltip-text-y-value:empty, .apexcharts-tooltip-text-z-value:empty, .apexcharts-tooltip-title:empty {
            display: none
        }

        .apexcharts-tooltip-text-goals-label, .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px
        }

        .apexcharts-tooltip-goals-group, .apexcharts-tooltip-text-goals-label, .apexcharts-tooltip-text-goals-value {
            display: flex
        }

        .apexcharts-tooltip-text-goals-label:not(:empty), .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0;
            margin-right: 10px;
            border-radius: 50%
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1
        }

        .apexcharts-tooltip-series-group.apexcharts-active, .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px
        }

        .apexcharts-custom-tooltip, .apexcharts-tooltip-box {
            padding: 4px 8px
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse
        }

        .apexcharts-tooltip-box > div {
            margin: 4px 0
        }

        .apexcharts-tooltip-box span.value {
            font-weight: 700
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: 700;
            display: block;
            margin-bottom: 5px
        }

        .apexcharts-xaxistooltip, .apexcharts-yaxistooltip {
            opacity: 0;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae
        }

        .apexcharts-xaxistooltip {
            padding: 9px 10px;
            transition: .15s ease all
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: \" \";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-xaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-left: -6px
        }

        .apexcharts-xaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-left: -7px
        }

        .apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%
        }

        .apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
            top: 100%
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #eceff1
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90a4ae
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after, .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #eceff1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90a4ae
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after, .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-yaxistooltip {
            padding: 4px 10px
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: \" \";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-yaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-top: -6px
        }

        .apexcharts-yaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-top: -7px
        }

        .apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
            left: 100%
        }

        .apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
            right: 100%
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #eceff1
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90a4ae
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after, .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #eceff1
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90a4ae
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after, .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1
        }

        .apexcharts-yaxistooltip-hidden {
            display: none
        }

        .apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: .15s ease all
        }

        .apexcharts-xcrosshairs.apexcharts-active, .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0
        }

        .apexcharts-selection-rect {
            cursor: move
        }

        .svg_select_boundingRect, .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect + g .svg_select_boundingRect, .apexcharts-selection-rect + g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect + g .svg_select_points_l, .apexcharts-selection-rect + g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-menu-icon, .apexcharts-pan-icon, .apexcharts-reset-icon, .apexcharts-selection-icon, .apexcharts-toolbar-custom-icon, .apexcharts-zoom-icon, .apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6e8192;
            text-align: center
        }

        .apexcharts-menu-icon svg, .apexcharts-reset-icon svg, .apexcharts-zoom-icon svg, .apexcharts-zoomin-icon svg, .apexcharts-zoomout-icon svg {
            fill: #6e8192
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(.76)
        }

        .apexcharts-theme-dark .apexcharts-menu-icon svg, .apexcharts-theme-dark .apexcharts-pan-icon svg, .apexcharts-theme-dark .apexcharts-reset-icon svg, .apexcharts-theme-dark .apexcharts-selection-icon svg, .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg, .apexcharts-theme-dark .apexcharts-zoom-icon svg, .apexcharts-theme-dark .apexcharts-zoomin-icon svg, .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
            fill: #f3f4f5
        }

        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg, .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg, .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
            fill: #008ffb
        }

        .apexcharts-theme-light .apexcharts-menu-icon:hover svg, .apexcharts-theme-light .apexcharts-reset-icon:hover svg, .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg, .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg, .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg, .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
            fill: #333
        }

        .apexcharts-menu-icon, .apexcharts-selection-icon {
            position: relative
        }

        .apexcharts-reset-icon {
            margin-left: 5px
        }

        .apexcharts-menu-icon, .apexcharts-reset-icon, .apexcharts-zoom-icon {
            transform: scale(.85)
        }

        .apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
            transform: scale(.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px
        }

        .apexcharts-pan-icon {
            transform: scale(.62);
            position: relative;
            left: 1px;
            top: 0
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6e8192;
            stroke-width: 2
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008ffb
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0 6px 2px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: .15s ease all;
            pointer-events: none
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: .15s ease all
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, .7);
            color: #fff
        }

        @media screen and (min-width: 768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1
            }
        }

        .apexcharts-canvas .apexcharts-element-hidden, .apexcharts-datalabel.apexcharts-element-hidden, .apexcharts-hide .apexcharts-series-points {
            opacity: 0
        }

        .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value, .apexcharts-datalabels, .apexcharts-pie-label {
            cursor: default;
            pointer-events: none
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease
        }

        .apexcharts-legend {
            display: flex;
            overflow: auto;
            padding: 0 10px;
        }

        .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
            flex-wrap: wrap
        }

        .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
            flex-direction: column;
            bottom: 0;
        }

        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
            justify-content: flex-start;
        }

        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
            justify-content: center;
        }

        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
            justify-content: flex-end;
        }

        .apexcharts-legend-series {
            cursor: pointer;
            line-height: normal;
        }

        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
            display: flex;
            align-items: center;
        }

        .apexcharts-legend-text {
            position: relative;
            font-size: 14px;
        }

        .apexcharts-legend-text *, .apexcharts-legend-marker * {
            pointer-events: none;
        }

        .apexcharts-legend-marker {
            position: relative;
            display: inline-block;
            cursor: pointer;
            margin-right: 3px;
            border-style: solid;
        }

        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
            display: inline-block;
        }

        .apexcharts-legend-series.apexcharts-no-click {
            cursor: auto;
        }

        .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
            display: none !important;
        }

        .apexcharts-inactive-legend {
            opacity: 0.45;
        }

        .apexcharts-annotation-rect, .apexcharts-area-series .apexcharts-area, .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-gridline, .apexcharts-line, .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-point-annotation-label, .apexcharts-radar-series path, .apexcharts-radar-series polygon, .apexcharts-toolbar svg, .apexcharts-tooltip .apexcharts-marker, .apexcharts-xaxis-annotation-label, .apexcharts-yaxis-annotation-label, .apexcharts-zoom-rect {
            pointer-events: none
        }

        .apexcharts-marker {
            transition: .15s ease all
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
            height: 100%;
            width: 100%;
            overflow: hidden
        }

        .contract-trigger:before, .resize-triggers, .resize-triggers > div {
            content: \" \";
            display: block;
            position: absolute;
            top: 0;
            left: 0
        }

        .resize-triggers > div {
            height: 100%;
            width: 100%;
            background: #eee;
            overflow: auto
        }

        .contract-trigger:before {
            overflow: hidden;
            width: 200%;
            height: 200%
        }
    </style>
</head>
<body>

<!-- ======= Header ======= -->
<<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ARTounsi.png"), "html", null, true);
        echo "\" width=\"50\" height=\"300\" alt=\"\">
            <span class=\"d-none d-lg-block\">ArTounsi</span>

        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
        <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
            <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
            <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-bell\"></i>
                    <span class=\"badge bg-primary badge-number\">4</span>
                </a><!-- End Notification Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                    <li class=\"dropdown-header\">
                        You have 4 new notifications
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-exclamation-circle text-warning\"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-x-circle text-danger\"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-check-circle text-success\"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-info-circle text-primary\"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>
                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-chat-left-text\"></i>
                    <span class=\"badge bg-success badge-number\">3</span>
                </a><!-- End Messages Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                    <li class=\"dropdown-header\">
                        You have 3 new messages
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <img src=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 868, $this->source); })()), "avatar", [], "any", false, false, false, 868))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">

                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 870
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 870, $this->source); })()), "name", [], "any", false, false, false, 870), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 870, $this->source); })()), "lastName", [], "any", false, false, false, 870), "html", null, true);
        echo "</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>";
        // line 875
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 875, $this->source); })()), "name", [], "any", false, false, false, 875), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 875, $this->source); })()), "lastName", [], "any", false, false, false, 875), "html", null, true);
        echo "</h6>
                        <span>";
        // line 876
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 876, $this->source); })()), "type", [], "any", false, false, false, 876), "html", null, true);
        echo "</span>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-gear\"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 913
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
        echo "\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>

<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
        ";
        // line 930
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 930, $this->source); })()), "type", [], "any", false, false, false, 930) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 930, $this->source); })()), "type", [], "any", false, false, false, 930) == "Studio"))) {
            // line 931
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 932
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
            echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
        ";
        }
        // line 938
        echo "        <!-- End Profile Page Nav -->
        ";
        // line 939
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 939, $this->source); })()), "type", [], "any", false, false, false, 939) == "Admin")) {
            // line 940
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 941
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
            echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
        ";
        }
        // line 947
        echo "        <!-- End F.A.Q Page Nav -->
        ";
        // line 948
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 948, $this->source); })()), "type", [], "any", false, false, false, 948) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 948, $this->source); })()), "type", [], "any", false, false, false, 948) == "Artist"))) {
            // line 949
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 950
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
            echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>
        ";
        }
        // line 956
        echo "
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 958
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 964
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Challenge</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 970
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Tutoriel</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 977
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 983
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 989
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 995
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 1001
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1001, $this->source); })()), "id_user", [], "any", false, false, false, 1001)]), "html", null, true);
        echo "\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>


</aside>

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Dashboard</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item active\">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
        <div class=\"row\">

            <!-- Left side columns -->
            <div class=\"col-lg-8\">
                <div class=\"row\">

                    <!-- Sales Card -->
                    <div class=\"col-xxl-4 col-md-6\">
                        <div class=\"card info-card sales-card\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                                <div class=\"d-flex align-items-center\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-cart\"></i>
                                    </div>
                                    <div class=\"ps-3\">
                                        <h6>145</h6>
                                        <span class=\"text-success small pt-1 fw-bold\">12%</span> <span
                                                class=\"text-muted small pt-2 ps-1\">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class=\"col-xxl-4 col-md-6\">
                        <div class=\"card info-card revenue-card\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                                <div class=\"d-flex align-items-center\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-currency-dollar\"></i>
                                    </div>
                                    <div class=\"ps-3\">
                                        <h6>\$3,264</h6>
                                        <span class=\"text-success small pt-1 fw-bold\">8%</span> <span
                                                class=\"text-muted small pt-2 ps-1\">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class=\"col-xxl-4 col-xl-12\">

                        <div class=\"card info-card customers-card\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                                <div class=\"d-flex align-items-center\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-people\"></i>
                                    </div>
                                    <div class=\"ps-3\">
                                        <h6>1244</h6>
                                        <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span
                                                class=\"text-muted small pt-2 ps-1\">decrease</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class=\"col-12\">
                        <div class=\"card\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                                <!-- Line Chart -->
                                <div id=\"reportsChart\" style=\"min-height: 365px;\">
                                    <div id=\"apexchartsyzwp2ywy\"
                                         class=\"apexcharts-canvas apexchartsyzwp2ywy apexcharts-theme-light\"
                                         style=\"width: 559px; height: 350px;\">
                                        <svg id=\"SvgjsSvg2067\" width=\"559\" height=\"350\"
                                             xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\"
                                             class=\"apexcharts-svg apexcharts-zoomable\" xmlns:data=\"ApexChartsNS\"
                                             transform=\"translate(0, 0)\" style=\"background: transparent;\">
                                            <rect id=\"SvgjsRect2074\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\"
                                                  opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\"
                                                  fill=\"#fefefe\"></rect>
                                            <g id=\"SvgjsG2193\" class=\"apexcharts-yaxis\" rel=\"0\"
                                               transform=\"translate(15.359375, 0)\">
                                                <g id=\"SvgjsG2194\" class=\"apexcharts-yaxis-texts-g\">
                                                    <text id=\"SvgjsText2196\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"31.5\" text-anchor=\"end\" dominant-baseline=\"auto\"
                                                          font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\"
                                                          class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2197\">100</tspan>
                                                        <title>100</title></text>
                                                    <text id=\"SvgjsText2199\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"85.53999999999999\" text-anchor=\"end\"
                                                          dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\"
                                                          fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2200\">80</tspan>
                                                        <title>80</title></text>
                                                    <text id=\"SvgjsText2202\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"139.57999999999998\" text-anchor=\"end\"
                                                          dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\"
                                                          fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2203\">60</tspan>
                                                        <title>60</title></text>
                                                    <text id=\"SvgjsText2205\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"193.61999999999998\" text-anchor=\"end\"
                                                          dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\"
                                                          fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2206\">40</tspan>
                                                        <title>40</title></text>
                                                    <text id=\"SvgjsText2208\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"247.65999999999997\" text-anchor=\"end\"
                                                          dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\"
                                                          fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2209\">20</tspan>
                                                        <title>20</title></text>
                                                    <text id=\"SvgjsText2211\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"301.7\" text-anchor=\"end\" dominant-baseline=\"auto\"
                                                          font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\"
                                                          class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2212\">0</tspan>
                                                        <title>0</title></text>
                                                </g>
                                            </g>
                                            <g id=\"SvgjsG2069\" class=\"apexcharts-inner apexcharts-graphical\"
                                               transform=\"translate(45.359375, 30)\">
                                                <defs id=\"SvgjsDefs2068\">
                                                    <clipPath id=\"gridRectMaskyzwp2ywy\">
                                                        <rect id=\"SvgjsRect2079\" width=\"509.640625\" height=\"272.2\"
                                                              x=\"-3\" y=\"-1\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\"
                                                              stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect>
                                                    </clipPath>
                                                    <clipPath id=\"forecastMaskyzwp2ywy\"></clipPath>
                                                    <clipPath id=\"nonForecastMaskyzwp2ywy\"></clipPath>
                                                    <clipPath id=\"gridRectMarkerMaskyzwp2ywy\">
                                                        <rect id=\"SvgjsRect2080\" width=\"551.640625\" height=\"318.2\"
                                                              x=\"-24\" y=\"-24\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\"
                                                              stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect>
                                                    </clipPath>
                                                    <linearGradient id=\"SvgjsLinearGradient2098\" x1=\"0\" y1=\"0\" x2=\"0\"
                                                                    y2=\"1\">
                                                        <stop id=\"SvgjsStop2099\" stop-opacity=\"0.3\"
                                                              stop-color=\"rgba(65,84,241,0.3)\" offset=\"0\"></stop>
                                                        <stop id=\"SvgjsStop2100\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"0.9\"></stop>
                                                        <stop id=\"SvgjsStop2101\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"1\"></stop>
                                                    </linearGradient>
                                                    <linearGradient id=\"SvgjsLinearGradient2120\" x1=\"0\" y1=\"0\" x2=\"0\"
                                                                    y2=\"1\">
                                                        <stop id=\"SvgjsStop2121\" stop-opacity=\"0.3\"
                                                              stop-color=\"rgba(46,202,106,0.3)\" offset=\"0\"></stop>
                                                        <stop id=\"SvgjsStop2122\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"0.9\"></stop>
                                                        <stop id=\"SvgjsStop2123\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"1\"></stop>
                                                    </linearGradient>
                                                    <linearGradient id=\"SvgjsLinearGradient2142\" x1=\"0\" y1=\"0\" x2=\"0\"
                                                                    y2=\"1\">
                                                        <stop id=\"SvgjsStop2143\" stop-opacity=\"0.3\"
                                                              stop-color=\"rgba(255,119,29,0.3)\" offset=\"0\"></stop>
                                                        <stop id=\"SvgjsStop2144\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"0.9\"></stop>
                                                        <stop id=\"SvgjsStop2145\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"1\"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id=\"SvgjsLine2075\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"270.2\"
                                                      stroke=\"#b6b6b6\" stroke-dasharray=\"3\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xcrosshairs\" x=\"0\" y=\"0\" width=\"1\"
                                                      height=\"270.2\" fill=\"#b1b9c4\" filter=\"none\" fill-opacity=\"0.9\"
                                                      stroke-width=\"1\"></line>
                                                <line id=\"SvgjsLine2152\" x1=\"0\" y1=\"271.2\" x2=\"0\" y2=\"277.2\"
                                                      stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2153\" x1=\"77.48317307692308\" y1=\"271.2\"
                                                      x2=\"77.48317307692308\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2154\" x1=\"154.96634615384616\" y1=\"271.2\"
                                                      x2=\"154.96634615384616\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2155\" x1=\"232.44951923076923\" y1=\"271.2\"
                                                      x2=\"232.44951923076923\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2156\" x1=\"309.9326923076923\" y1=\"271.2\"
                                                      x2=\"309.9326923076923\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2157\" x1=\"387.4158653846154\" y1=\"271.2\"
                                                      x2=\"387.4158653846154\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2158\" x1=\"464.8990384615385\" y1=\"271.2\"
                                                      x2=\"464.8990384615385\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <g id=\"SvgjsG2148\" class=\"apexcharts-grid\">
                                                    <g id=\"SvgjsG2149\" class=\"apexcharts-gridlines-horizontal\">
                                                        <line id=\"SvgjsLine2160\" x1=\"0\" y1=\"54.04\" x2=\"503.640625\"
                                                              y2=\"54.04\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                              stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line>
                                                        <line id=\"SvgjsLine2161\" x1=\"0\" y1=\"108.08\" x2=\"503.640625\"
                                                              y2=\"108.08\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                              stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line>
                                                        <line id=\"SvgjsLine2162\" x1=\"0\" y1=\"162.12\" x2=\"503.640625\"
                                                              y2=\"162.12\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                              stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line>
                                                        <line id=\"SvgjsLine2163\" x1=\"0\" y1=\"216.16\" x2=\"503.640625\"
                                                              y2=\"216.16\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                              stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line>
                                                    </g>
                                                    <g id=\"SvgjsG2150\" class=\"apexcharts-gridlines-vertical\"></g>
                                                    <line id=\"SvgjsLine2166\" x1=\"0\" y1=\"270.2\" x2=\"503.640625\"
                                                          y2=\"270.2\" stroke=\"transparent\" stroke-dasharray=\"0\"
                                                          stroke-linecap=\"butt\"></line>
                                                    <line id=\"SvgjsLine2165\" x1=\"0\" y1=\"1\" x2=\"0\" y2=\"270.2\"
                                                          stroke=\"transparent\" stroke-dasharray=\"0\"
                                                          stroke-linecap=\"butt\"></line>
                                                </g>
                                                <g id=\"SvgjsG2151\" class=\"apexcharts-grid-borders\">
                                                    <line id=\"SvgjsLine2159\" x1=\"0\" y1=\"0\" x2=\"503.640625\" y2=\"0\"
                                                          stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                          class=\"apexcharts-gridline\"></line>
                                                    <line id=\"SvgjsLine2164\" x1=\"0\" y1=\"270.2\" x2=\"503.640625\"
                                                          y2=\"270.2\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                          stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line>
                                                    <line id=\"SvgjsLine2192\" x1=\"0\" y1=\"271.2\" x2=\"503.640625\"
                                                          y2=\"271.2\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                          stroke-width=\"1\" stroke-linecap=\"butt\"></line>
                                                </g>
                                                <g id=\"SvgjsG2081\"
                                                   class=\"apexcharts-area-series apexcharts-plot-series\">
                                                    <g id=\"SvgjsG2082\" class=\"apexcharts-series\" seriesName=\"Sales\"
                                                       data:longestSeries=\"true\" rel=\"1\" data:realIndex=\"0\">
                                                        <path id=\"SvgjsPath2102\"
                                                              d=\"M 0 270.2 L 0 186.438C 40.678665865384616 186.438 75.54609375000001 162.12 116.22475961538463 162.12C 143.3438701923077 162.12 166.58882211538463 194.54399999999998 193.7079326923077 194.54399999999998C 220.82704326923078 194.54399999999998 244.0719951923077 132.398 271.1911057692308 132.398C 298.3102163461539 132.398 321.55516826923076 156.716 348.67427884615387 156.716C 375.793389423077 156.716 399.03834134615386 48.635999999999996 426.15745192307696 48.635999999999996C 453.2765625 48.635999999999996 476.52151442307695 118.88799999999998 503.640625 118.88799999999998C 503.640625 118.88799999999998 503.640625 118.88799999999998 503.640625 270.2M 503.640625 118.88799999999998z\"
                                                              fill=\"url(#SvgjsLinearGradient2098)\" fill-opacity=\"1\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"0\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"0\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 270.2 L 0 186.438C 40.678665865384616 186.438 75.54609375000001 162.12 116.22475961538463 162.12C 143.3438701923077 162.12 166.58882211538463 194.54399999999998 193.7079326923077 194.54399999999998C 220.82704326923078 194.54399999999998 244.0719951923077 132.398 271.1911057692308 132.398C 298.3102163461539 132.398 321.55516826923076 156.716 348.67427884615387 156.716C 375.793389423077 156.716 399.03834134615386 48.635999999999996 426.15745192307696 48.635999999999996C 453.2765625 48.635999999999996 476.52151442307695 118.88799999999998 503.640625 118.88799999999998C 503.640625 118.88799999999998 503.640625 118.88799999999998 503.640625 270.2M 503.640625 118.88799999999998z\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"></path>
                                                        <path id=\"SvgjsPath2103\"
                                                              d=\"M 0 186.438C 40.678665865384616 186.438 75.54609375000001 162.12 116.22475961538463 162.12C 143.3438701923077 162.12 166.58882211538463 194.54399999999998 193.7079326923077 194.54399999999998C 220.82704326923078 194.54399999999998 244.0719951923077 132.398 271.1911057692308 132.398C 298.3102163461539 132.398 321.55516826923076 156.716 348.67427884615387 156.716C 375.793389423077 156.716 399.03834134615386 48.635999999999996 426.15745192307696 48.635999999999996C 453.2765625 48.635999999999996 476.52151442307695 118.88799999999998 503.640625 118.88799999999998\"
                                                              fill=\"none\" fill-opacity=\"1\" stroke=\"#4154f1\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"0\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 186.438C 40.678665865384616 186.438 75.54609375000001 162.12 116.22475961538463 162.12C 143.3438701923077 162.12 166.58882211538463 194.54399999999998 193.7079326923077 194.54399999999998C 220.82704326923078 194.54399999999998 244.0719951923077 132.398 271.1911057692308 132.398C 298.3102163461539 132.398 321.55516826923076 156.716 348.67427884615387 156.716C 375.793389423077 156.716 399.03834134615386 48.635999999999996 426.15745192307696 48.635999999999996C 453.2765625 48.635999999999996 476.52151442307695 118.88799999999998 503.640625 118.88799999999998\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"
                                                              fill-rule=\"evenodd\"></path>
                                                        <g id=\"SvgjsG2083\" class=\"apexcharts-series-markers-wrap\"
                                                           data:realIndex=\"0\">
                                                            <g id=\"SvgjsG2085\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2086\" r=\"4\" cx=\"0\" cy=\"186.438\"
                                                                        class=\"apexcharts-marker no-pointer-events w7j859mgn\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"0\"
                                                                        j=\"0\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                                <circle id=\"SvgjsCircle2087\" r=\"4\"
                                                                        cx=\"116.22475961538463\" cy=\"162.12\"
                                                                        class=\"apexcharts-marker no-pointer-events w5ohg7nrhg\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"1\"
                                                                        j=\"1\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2088\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2089\" r=\"4\"
                                                                        cx=\"193.7079326923077\" cy=\"194.54399999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wdwiubq3xk\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"2\"
                                                                        j=\"2\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2090\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2091\" r=\"4\"
                                                                        cx=\"271.1911057692308\" cy=\"132.398\"
                                                                        class=\"apexcharts-marker no-pointer-events we45wek1e\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"3\"
                                                                        j=\"3\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2092\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2093\" r=\"4\"
                                                                        cx=\"348.67427884615387\" cy=\"156.716\"
                                                                        class=\"apexcharts-marker no-pointer-events w0ohu0ep1\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"4\"
                                                                        j=\"4\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2094\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2095\" r=\"4\"
                                                                        cx=\"426.15745192307696\" cy=\"48.635999999999996\"
                                                                        class=\"apexcharts-marker no-pointer-events wq9p7au4j\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"5\"
                                                                        j=\"5\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2096\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2097\" r=\"4\" cx=\"503.640625\"
                                                                        cy=\"118.88799999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events w7fgxb41a\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"6\"
                                                                        j=\"6\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id=\"SvgjsG2104\" class=\"apexcharts-series\" seriesName=\"Revenue\"
                                                       data:longestSeries=\"true\" rel=\"2\" data:realIndex=\"1\">
                                                        <path id=\"SvgjsPath2124\"
                                                              d=\"M 0 270.2 L 0 240.47799999999998C 40.678665865384616 240.47799999999998 75.54609375000001 183.736 116.22475961538463 183.736C 143.3438701923077 183.736 166.58882211538463 148.60999999999999 193.7079326923077 148.60999999999999C 220.82704326923078 148.60999999999999 244.0719951923077 183.736 271.1911057692308 183.736C 298.3102163461539 183.736 321.55516826923076 178.332 348.67427884615387 178.332C 375.793389423077 178.332 399.03834134615386 129.696 426.15745192307696 129.696C 453.2765625 129.696 476.52151442307695 159.418 503.640625 159.418C 503.640625 159.418 503.640625 159.418 503.640625 270.2M 503.640625 159.418z\"
                                                              fill=\"url(#SvgjsLinearGradient2120)\" fill-opacity=\"1\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"0\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"1\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 270.2 L 0 240.47799999999998C 40.678665865384616 240.47799999999998 75.54609375000001 183.736 116.22475961538463 183.736C 143.3438701923077 183.736 166.58882211538463 148.60999999999999 193.7079326923077 148.60999999999999C 220.82704326923078 148.60999999999999 244.0719951923077 183.736 271.1911057692308 183.736C 298.3102163461539 183.736 321.55516826923076 178.332 348.67427884615387 178.332C 375.793389423077 178.332 399.03834134615386 129.696 426.15745192307696 129.696C 453.2765625 129.696 476.52151442307695 159.418 503.640625 159.418C 503.640625 159.418 503.640625 159.418 503.640625 270.2M 503.640625 159.418z\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"></path>
                                                        <path id=\"SvgjsPath2125\"
                                                              d=\"M 0 240.47799999999998C 40.678665865384616 240.47799999999998 75.54609375000001 183.736 116.22475961538463 183.736C 143.3438701923077 183.736 166.58882211538463 148.60999999999999 193.7079326923077 148.60999999999999C 220.82704326923078 148.60999999999999 244.0719951923077 183.736 271.1911057692308 183.736C 298.3102163461539 183.736 321.55516826923076 178.332 348.67427884615387 178.332C 375.793389423077 178.332 399.03834134615386 129.696 426.15745192307696 129.696C 453.2765625 129.696 476.52151442307695 159.418 503.640625 159.418\"
                                                              fill=\"none\" fill-opacity=\"1\" stroke=\"#2eca6a\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"1\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 240.47799999999998C 40.678665865384616 240.47799999999998 75.54609375000001 183.736 116.22475961538463 183.736C 143.3438701923077 183.736 166.58882211538463 148.60999999999999 193.7079326923077 148.60999999999999C 220.82704326923078 148.60999999999999 244.0719951923077 183.736 271.1911057692308 183.736C 298.3102163461539 183.736 321.55516826923076 178.332 348.67427884615387 178.332C 375.793389423077 178.332 399.03834134615386 129.696 426.15745192307696 129.696C 453.2765625 129.696 476.52151442307695 159.418 503.640625 159.418\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"
                                                              fill-rule=\"evenodd\"></path>
                                                        <g id=\"SvgjsG2105\" class=\"apexcharts-series-markers-wrap\"
                                                           data:realIndex=\"1\">
                                                            <g id=\"SvgjsG2107\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2108\" r=\"4\" cx=\"0\"
                                                                        cy=\"240.47799999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wxuv1qllx\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"0\"
                                                                        j=\"0\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                                <circle id=\"SvgjsCircle2109\" r=\"4\"
                                                                        cx=\"116.22475961538463\" cy=\"183.736\"
                                                                        class=\"apexcharts-marker no-pointer-events wk1jgr656\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"1\"
                                                                        j=\"1\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2110\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2111\" r=\"4\"
                                                                        cx=\"193.7079326923077\" cy=\"148.60999999999999\"
                                                                        class=\"apexcharts-marker no-pointer-events w5e0jepgt\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"2\"
                                                                        j=\"2\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2112\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2113\" r=\"4\"
                                                                        cx=\"271.1911057692308\" cy=\"183.736\"
                                                                        class=\"apexcharts-marker no-pointer-events ww4eps9qy\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"3\"
                                                                        j=\"3\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2114\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2115\" r=\"4\"
                                                                        cx=\"348.67427884615387\" cy=\"178.332\"
                                                                        class=\"apexcharts-marker no-pointer-events wkqnqiatg\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"4\"
                                                                        j=\"4\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2116\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2117\" r=\"4\"
                                                                        cx=\"426.15745192307696\" cy=\"129.696\"
                                                                        class=\"apexcharts-marker no-pointer-events wze2q3d7m\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"5\"
                                                                        j=\"5\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2118\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2119\" r=\"4\" cx=\"503.640625\"
                                                                        cy=\"159.418\"
                                                                        class=\"apexcharts-marker no-pointer-events wafk0gq5fg\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"6\"
                                                                        j=\"6\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id=\"SvgjsG2126\" class=\"apexcharts-series\" seriesName=\"Customers\"
                                                       data:longestSeries=\"true\" rel=\"3\" data:realIndex=\"2\">
                                                        <path id=\"SvgjsPath2146\"
                                                              d=\"M 0 270.2 L 0 229.67C 40.678665865384616 229.67 75.54609375000001 240.47799999999998 116.22475961538463 240.47799999999998C 143.3438701923077 240.47799999999998 166.58882211538463 183.736 193.7079326923077 183.736C 220.82704326923078 183.736 244.0719951923077 221.564 271.1911057692308 221.564C 298.3102163461539 221.564 321.55516826923076 245.88199999999998 348.67427884615387 245.88199999999998C 375.793389423077 245.88199999999998 399.03834134615386 205.35199999999998 426.15745192307696 205.35199999999998C 453.2765625 205.35199999999998 476.52151442307695 240.47799999999998 503.640625 240.47799999999998C 503.640625 240.47799999999998 503.640625 240.47799999999998 503.640625 270.2M 503.640625 240.47799999999998z\"
                                                              fill=\"url(#SvgjsLinearGradient2142)\" fill-opacity=\"1\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"0\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"2\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 270.2 L 0 229.67C 40.678665865384616 229.67 75.54609375000001 240.47799999999998 116.22475961538463 240.47799999999998C 143.3438701923077 240.47799999999998 166.58882211538463 183.736 193.7079326923077 183.736C 220.82704326923078 183.736 244.0719951923077 221.564 271.1911057692308 221.564C 298.3102163461539 221.564 321.55516826923076 245.88199999999998 348.67427884615387 245.88199999999998C 375.793389423077 245.88199999999998 399.03834134615386 205.35199999999998 426.15745192307696 205.35199999999998C 453.2765625 205.35199999999998 476.52151442307695 240.47799999999998 503.640625 240.47799999999998C 503.640625 240.47799999999998 503.640625 240.47799999999998 503.640625 270.2M 503.640625 240.47799999999998z\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"></path>
                                                        <path id=\"SvgjsPath2147\"
                                                              d=\"M 0 229.67C 40.678665865384616 229.67 75.54609375000001 240.47799999999998 116.22475961538463 240.47799999999998C 143.3438701923077 240.47799999999998 166.58882211538463 183.736 193.7079326923077 183.736C 220.82704326923078 183.736 244.0719951923077 221.564 271.1911057692308 221.564C 298.3102163461539 221.564 321.55516826923076 245.88199999999998 348.67427884615387 245.88199999999998C 375.793389423077 245.88199999999998 399.03834134615386 205.35199999999998 426.15745192307696 205.35199999999998C 453.2765625 205.35199999999998 476.52151442307695 240.47799999999998 503.640625 240.47799999999998\"
                                                              fill=\"none\" fill-opacity=\"1\" stroke=\"#ff771d\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"2\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 229.67C 40.678665865384616 229.67 75.54609375000001 240.47799999999998 116.22475961538463 240.47799999999998C 143.3438701923077 240.47799999999998 166.58882211538463 183.736 193.7079326923077 183.736C 220.82704326923078 183.736 244.0719951923077 221.564 271.1911057692308 221.564C 298.3102163461539 221.564 321.55516826923076 245.88199999999998 348.67427884615387 245.88199999999998C 375.793389423077 245.88199999999998 399.03834134615386 205.35199999999998 426.15745192307696 205.35199999999998C 453.2765625 205.35199999999998 476.52151442307695 240.47799999999998 503.640625 240.47799999999998\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"
                                                              fill-rule=\"evenodd\"></path>
                                                        <g id=\"SvgjsG2127\" class=\"apexcharts-series-markers-wrap\"
                                                           data:realIndex=\"2\">
                                                            <g id=\"SvgjsG2129\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2130\" r=\"4\" cx=\"0\" cy=\"229.67\"
                                                                        class=\"apexcharts-marker no-pointer-events wjf5q0f6t\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"0\"
                                                                        j=\"0\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                                <circle id=\"SvgjsCircle2131\" r=\"4\"
                                                                        cx=\"116.22475961538463\" cy=\"240.47799999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wxqmsyw52g\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"1\"
                                                                        j=\"1\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2132\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2133\" r=\"4\"
                                                                        cx=\"193.7079326923077\" cy=\"183.736\"
                                                                        class=\"apexcharts-marker no-pointer-events wbc9dc6xo\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"2\"
                                                                        j=\"2\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2134\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2135\" r=\"4\"
                                                                        cx=\"271.1911057692308\" cy=\"221.564\"
                                                                        class=\"apexcharts-marker no-pointer-events wk9o7c3yn\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"3\"
                                                                        j=\"3\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2136\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2137\" r=\"4\"
                                                                        cx=\"348.67427884615387\" cy=\"245.88199999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wukzmy60u\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"4\"
                                                                        j=\"4\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2138\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2139\" r=\"4\"
                                                                        cx=\"426.15745192307696\" cy=\"205.35199999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wf8y7rlc8\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"5\"
                                                                        j=\"5\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2140\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2141\" r=\"4\" cx=\"503.640625\"
                                                                        cy=\"240.47799999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wjhhmjapq\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"6\"
                                                                        j=\"6\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id=\"SvgjsG2084\" class=\"apexcharts-datalabels\"
                                                       data:realIndex=\"0\"></g>
                                                    <g id=\"SvgjsG2106\" class=\"apexcharts-datalabels\"
                                                       data:realIndex=\"1\"></g>
                                                    <g id=\"SvgjsG2128\" class=\"apexcharts-datalabels\"
                                                       data:realIndex=\"2\"></g>
                                                </g>
                                                <line id=\"SvgjsLine2167\" x1=\"0\" y1=\"0\" x2=\"503.640625\" y2=\"0\"
                                                      stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\"
                                                      stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line>
                                                <line id=\"SvgjsLine2168\" x1=\"0\" y1=\"0\" x2=\"503.640625\" y2=\"0\"
                                                      stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-ycrosshairs-hidden\"></line>
                                                <g id=\"SvgjsG2169\" class=\"apexcharts-xaxis\" transform=\"translate(0, 0)\">
                                                    <g id=\"SvgjsG2170\" class=\"apexcharts-xaxis-texts-g\"
                                                       transform=\"translate(0, -4)\">
                                                        <text id=\"SvgjsText2172\"
                                                              font-family=\"Helvetica, Arial, sans-serif\" x=\"0\" y=\"299.2\"
                                                              text-anchor=\"middle\" dominant-baseline=\"auto\"
                                                              font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2173\">00:00</tspan>
                                                            <title>00:00</title></text>
                                                        <text id=\"SvgjsText2175\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"77.48317307692308\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2176\">01:00</tspan>
                                                            <title>01:00</title></text>
                                                        <text id=\"SvgjsText2178\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"154.96634615384616\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2179\">02:00</tspan>
                                                            <title>02:00</title></text>
                                                        <text id=\"SvgjsText2181\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"232.44951923076923\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2182\">03:00</tspan>
                                                            <title>03:00</title></text>
                                                        <text id=\"SvgjsText2184\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"309.9326923076923\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2185\">04:00</tspan>
                                                            <title>04:00</title></text>
                                                        <text id=\"SvgjsText2187\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"387.4158653846154\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2188\">05:00</tspan>
                                                            <title>05:00</title></text>
                                                        <text id=\"SvgjsText2190\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"464.8990384615385\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2191\">06:00</tspan>
                                                            <title>06:00</title></text>
                                                    </g>
                                                </g>
                                                <g id=\"SvgjsG2213\" class=\"apexcharts-yaxis-annotations\"></g>
                                                <g id=\"SvgjsG2214\" class=\"apexcharts-xaxis-annotations\"></g>
                                                <g id=\"SvgjsG2215\" class=\"apexcharts-point-annotations\"></g>
                                                <rect id=\"SvgjsRect2216\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\"
                                                      opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\"
                                                      fill=\"#fefefe\" class=\"apexcharts-zoom-rect\"></rect>
                                                <rect id=\"SvgjsRect2217\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\"
                                                      opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\"
                                                      fill=\"#fefefe\" class=\"apexcharts-selection-rect\"></rect>
                                            </g>
                                            <g id=\"SvgjsG2070\" class=\"apexcharts-annotations\"></g>
                                        </svg>
                                        <div class=\"apexcharts-legend apexcharts-align-center apx-legend-position-bottom\"
                                             style=\"inset: auto 0px 1px; position: absolute; max-height: 175px;\">
                                            <div class=\"apexcharts-legend-series\" rel=\"1\" seriesname=\"Sales\"
                                                 data:collapsed=\"false\" style=\"margin: 2px 5px;\"><span
                                                        class=\"apexcharts-legend-marker\" rel=\"1\" data:collapsed=\"false\"
                                                        style=\"background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;\"></span><span
                                                        class=\"apexcharts-legend-text\" rel=\"1\" i=\"0\"
                                                        data:default-text=\"Sales\" data:collapsed=\"false\"
                                                        style=\"color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;\">Sales</span>
                                            </div>
                                            <div class=\"apexcharts-legend-series\" rel=\"2\" seriesname=\"Revenue\"
                                                 data:collapsed=\"false\" style=\"margin: 2px 5px;\"><span
                                                        class=\"apexcharts-legend-marker\" rel=\"2\" data:collapsed=\"false\"
                                                        style=\"background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;\"></span><span
                                                        class=\"apexcharts-legend-text\" rel=\"2\" i=\"1\"
                                                        data:default-text=\"Revenue\" data:collapsed=\"false\"
                                                        style=\"color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;\">Revenue</span>
                                            </div>
                                            <div class=\"apexcharts-legend-series\" rel=\"3\" seriesname=\"Customers\"
                                                 data:collapsed=\"false\" style=\"margin: 2px 5px;\"><span
                                                        class=\"apexcharts-legend-marker\" rel=\"3\" data:collapsed=\"false\"
                                                        style=\"background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;\"></span><span
                                                        class=\"apexcharts-legend-text\" rel=\"3\" i=\"2\"
                                                        data:default-text=\"Customers\" data:collapsed=\"false\"
                                                        style=\"color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;\">Customers</span>
                                            </div>
                                        </div>
                                        <div class=\"apexcharts-tooltip apexcharts-theme-light\">
                                            <div class=\"apexcharts-tooltip-title\"
                                                 style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></div>
                                            <div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span
                                                        class=\"apexcharts-tooltip-marker\"
                                                        style=\"background-color: rgb(65, 84, 241);\"></span>
                                                <div class=\"apexcharts-tooltip-text\"
                                                     style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">
                                                    <div class=\"apexcharts-tooltip-y-group\"><span
                                                                class=\"apexcharts-tooltip-text-y-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-y-value\"></span></div>
                                                    <div class=\"apexcharts-tooltip-goals-group\"><span
                                                                class=\"apexcharts-tooltip-text-goals-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-goals-value\"></span>
                                                    </div>
                                                    <div class=\"apexcharts-tooltip-z-group\"><span
                                                                class=\"apexcharts-tooltip-text-z-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-z-value\"></span></div>
                                                </div>
                                            </div>
                                            <div class=\"apexcharts-tooltip-series-group\" style=\"order: 2;\"><span
                                                        class=\"apexcharts-tooltip-marker\"
                                                        style=\"background-color: rgb(46, 202, 106);\"></span>
                                                <div class=\"apexcharts-tooltip-text\"
                                                     style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">
                                                    <div class=\"apexcharts-tooltip-y-group\"><span
                                                                class=\"apexcharts-tooltip-text-y-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-y-value\"></span></div>
                                                    <div class=\"apexcharts-tooltip-goals-group\"><span
                                                                class=\"apexcharts-tooltip-text-goals-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-goals-value\"></span>
                                                    </div>
                                                    <div class=\"apexcharts-tooltip-z-group\"><span
                                                                class=\"apexcharts-tooltip-text-z-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-z-value\"></span></div>
                                                </div>
                                            </div>
                                            <div class=\"apexcharts-tooltip-series-group\" style=\"order: 3;\"><span
                                                        class=\"apexcharts-tooltip-marker\"
                                                        style=\"background-color: rgb(255, 119, 29);\"></span>
                                                <div class=\"apexcharts-tooltip-text\"
                                                     style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">
                                                    <div class=\"apexcharts-tooltip-y-group\"><span
                                                                class=\"apexcharts-tooltip-text-y-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-y-value\"></span></div>
                                                    <div class=\"apexcharts-tooltip-goals-group\"><span
                                                                class=\"apexcharts-tooltip-text-goals-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-goals-value\"></span>
                                                    </div>
                                                    <div class=\"apexcharts-tooltip-z-group\"><span
                                                                class=\"apexcharts-tooltip-text-z-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-z-value\"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light\">
                                            <div class=\"apexcharts-xaxistooltip-text\"
                                                 style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></div>
                                        </div>
                                        <div class=\"apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light\">
                                            <div class=\"apexcharts-yaxistooltip-text\"></div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    document.addEventListener(\"DOMContentLoaded\", () => {
                                        new ApexCharts(document.querySelector(\"#reportsChart\"), {
                                            series: [{
                                                name: 'Sales',
                                                data: [31, 40, 28, 51, 42, 82, 56],
                                            }, {
                                                name: 'Revenue',
                                                data: [11, 32, 45, 32, 34, 52, 41]
                                            }, {
                                                name: 'Customers',
                                                data: [15, 11, 32, 18, 9, 24, 11]
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                            fill: {
                                                type: \"gradient\",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                type: 'datetime',
                                                categories: [\"2018-09-19T00:00:00.000Z\", \"2018-09-19T01:30:00.000Z\", \"2018-09-19T02:30:00.000Z\", \"2018-09-19T03:30:00.000Z\", \"2018-09-19T04:30:00.000Z\", \"2018-09-19T05:30:00.000Z\", \"2018-09-19T06:30:00.000Z\"]
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy HH:mm'
                                                },
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <!-- Recent Sales -->
                    <div class=\"col-12\">
                        <div class=\"card recent-sales overflow-auto\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                                <table class=\"table table-borderless datatable\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Customer</th>
                                        <th scope=\"col\">Product</th>
                                        <th scope=\"col\">Price</th>
                                        <th scope=\"col\">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\">#2457</a></th>
                                        <td>Brandon Jacob</td>
                                        <td><a href=\"#\" class=\"text-primary\">At praesentium minu</a></td>
                                        <td>\$64</td>
                                        <td><span class=\"badge bg-success\">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\">#2147</a></th>
                                        <td>Bridie Kessler</td>
                                        <td><a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a></td>
                                        <td>\$47</td>
                                        <td><span class=\"badge bg-warning\">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\">#2049</a></th>
                                        <td>Ashleigh Langosh</td>
                                        <td><a href=\"#\" class=\"text-primary\">At recusandae consectetur</a></td>
                                        <td>\$147</td>
                                        <td><span class=\"badge bg-success\">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                        <td>Angus Grady</td>
                                        <td><a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a></td>
                                        <td>\$67</td>
                                        <td><span class=\"badge bg-danger\">Rejected</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                        <td>Raheem Lehner</td>
                                        <td><a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a></td>
                                        <td>\$165</td>
                                        <td><span class=\"badge bg-success\">Approved</span></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Top Selling -->
                    <div class=\"col-12\">
                        <div class=\"card top-selling overflow-auto\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body pb-0\">
                                <h5 class=\"card-title\">Top Selling <span>| Today</span></h5>

                                <table class=\"table table-borderless\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">Preview</th>
                                        <th scope=\"col\">Product</th>
                                        <th scope=\"col\">Price</th>
                                        <th scope=\"col\">Sold</th>
                                        <th scope=\"col\">Revenue</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-1.jpg\" alt=\"\"></a></th>
                                        <td><a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas
                                                nulla</a></td>
                                        <td>\$64</td>
                                        <td class=\"fw-bold\">124</td>
                                        <td>\$5,828</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-2.jpg\" alt=\"\"></a></th>
                                        <td><a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique
                                                doloremque</a></td>
                                        <td>\$46</td>
                                        <td class=\"fw-bold\">98</td>
                                        <td>\$4,508</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-3.jpg\" alt=\"\"></a></th>
                                        <td><a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a>
                                        </td>
                                        <td>\$59</td>
                                        <td class=\"fw-bold\">74</td>
                                        <td>\$4,366</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-4.jpg\" alt=\"\"></a></th>
                                        <td><a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum
                                                error</a></td>
                                        <td>\$32</td>
                                        <td class=\"fw-bold\">63</td>
                                        <td>\$2,016</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-5.jpg\" alt=\"\"></a></th>
                                        <td><a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus
                                                repellendus</a></td>
                                        <td>\$79</td>
                                        <td class=\"fw-bold\">41</td>
                                        <td>\$3,239</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class=\"col-lg-4\">

                <!-- Recent Activity -->
                <div class=\"card\">
                    <div class=\"filter\">
                        <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                            <li class=\"dropdown-header text-start\">
                                <h6>Filter</h6>
                            </li>

                            <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                        </ul>
                    </div>

                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Recent Activity <span>| Today</span></h5>

                        <div class=\"activity\">

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">32 min</div>
                                <i class=\"bi bi-circle-fill activity-badge text-success align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Quia quae rerum <a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a> beatae
                                </div>
                            </div><!-- End activity item-->

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">56 min</div>
                                <i class=\"bi bi-circle-fill activity-badge text-danger align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div><!-- End activity item-->

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">2 hrs</div>
                                <i class=\"bi bi-circle-fill activity-badge text-primary align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div><!-- End activity item-->

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">1 day</div>
                                <i class=\"bi bi-circle-fill activity-badge text-info align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Tempore autem saepe <a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a>
                                    tempore
                                </div>
                            </div><!-- End activity item-->

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">2 days</div>
                                <i class=\"bi bi-circle-fill activity-badge text-warning align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div><!-- End activity item-->

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">4 weeks</div>
                                <i class=\"bi bi-circle-fill activity-badge text-muted align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class=\"card\">
                    <div class=\"filter\">
                        <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                            <li class=\"dropdown-header text-start\">
                                <h6>Filter</h6>
                            </li>

                            <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                        </ul>
                    </div>

                    <div class=\"card-body pb-0\">
                        <h5 class=\"card-title\">Budget Report <span>| This Month</span></h5>

                        <div id=\"budgetChart\"
                             style=\"min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"
                             class=\"echart\" _echarts_instance_=\"ec_1681338332419\">
                            <div style=\"position: relative; width: 297px; height: 400px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;\">
                                <canvas data-zr-dom-id=\"zr_0\" width=\"297\" height=\"400\"
                                        style=\"position: absolute; left: 0px; top: 0px; width: 297px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;\"></canvas>
                            </div>
                        </div>

                        <script>
                            document.addEventListener(\"DOMContentLoaded\", () => {
                                var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
                                    legend: {
                                        data: ['Allocated Budget', 'Actual Spending']
                                    },
                                    radar: {
                                        // shape: 'circle',
                                        indicator: [{
                                            name: 'Sales',
                                            max: 6500
                                        },
                                            {
                                                name: 'Administration',
                                                max: 16000
                                            },
                                            {
                                                name: 'Information Technology',
                                                max: 30000
                                            },
                                            {
                                                name: 'Customer Support',
                                                max: 38000
                                            },
                                            {
                                                name: 'Development',
                                                max: 52000
                                            },
                                            {
                                                name: 'Marketing',
                                                max: 25000
                                            }
                                        ]
                                    },
                                    series: [{
                                        name: 'Budget vs spending',
                                        type: 'radar',
                                        data: [{
                                            value: [4200, 3000, 20000, 35000, 50000, 18000],
                                            name: 'Allocated Budget'
                                        },
                                            {
                                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                name: 'Actual Spending'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class=\"card\">
                    <div class=\"filter\">
                        <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                            <li class=\"dropdown-header text-start\">
                                <h6>Filter</h6>
                            </li>

                            <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                        </ul>
                    </div>

                    <div class=\"card-body pb-0\">
                        <h5 class=\"card-title\">Website Traffic <span>| Today</span></h5>

                        <div id=\"trafficChart\"
                             style=\"min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;\"
                             class=\"echart\" _echarts_instance_=\"ec_1681338332420\">
                            <div style=\"position: relative; width: 297px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;\">
                                <canvas data-zr-dom-id=\"zr_0\" width=\"297\" height=\"400\"
                                        style=\"position: absolute; left: 0px; top: 0px; width: 297px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;\"></canvas>
                            </div>
                            <div class=\"\"></div>
                        </div>

                        <script>
                            document.addEventListener(\"DOMContentLoaded\", () => {
                                echarts.init(document.querySelector(\"#trafficChart\")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                            value: 1048,
                                            name: 'Search Engine'
                                        },
                                            {
                                                value: 735,
                                                name: 'Direct'
                                            },
                                            {
                                                value: 580,
                                                name: 'Email'
                                            },
                                            {
                                                value: 484,
                                                name: 'Union Ads'
                                            },
                                            {
                                                value: 300,
                                                name: 'Video Ads'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- News & Updates Traffic -->
                <div class=\"card\">
                    <div class=\"filter\">
                        <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                            <li class=\"dropdown-header text-start\">
                                <h6>Filter</h6>
                            </li>

                            <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                        </ul>
                    </div>

                    <div class=\"card-body pb-0\">
                        <h5 class=\"card-title\">News &amp; Updates <span>| Today</span></h5>

                        <div class=\"news\">
                            <div class=\"post-item clearfix\">
                                <img src=\"assets/img/news-1.jpg\" alt=\"\">
                                <h4><a href=\"#\">Nihil blanditiis at in nihil autem</a></h4>
                                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                            </div>

                            <div class=\"post-item clearfix\">
                                <img src=\"assets/img/news-2.jpg\" alt=\"\">
                                <h4><a href=\"#\">Quidem autem et impedit</a></h4>
                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                            </div>

                            <div class=\"post-item clearfix\">
                                <img src=\"assets/img/news-3.jpg\" alt=\"\">
                                <h4><a href=\"#\">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                            </div>

                            <div class=\"post-item clearfix\">
                                <img src=\"assets/img/news-4.jpg\" alt=\"\">
                                <h4><a href=\"#\">Laborum corporis quo dara net para</a></h4>
                                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                            </div>

                            <div class=\"post-item clearfix\">
                                <img src=\"assets/img/news-5.jpg\" alt=\"\">
                                <h4><a href=\"#\">Et dolores corrupti quae illo quod dolor</a></h4>
                                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos
                                    eius...</p>
                            </div>

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        © Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"";
        // line 2322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>


<!-- Template Main JS File -->
<script src=\"";
        // line 2333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main2.js"), "html", null, true);
        echo "\"></script>


<svg id=\"SvgjsSvg1152\" width=\"2\" height=\"0\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\"
     xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\"
     style=\"overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;\">
    <defs id=\"SvgjsDefs1153\"></defs>
    <polyline id=\"SvgjsPolyline1154\" points=\"0,0\"></polyline>
    <path id=\"SvgjsPath1155\"
          d=\"M-1 270.2L-1 270.2C-1 270.2 138.84014423076923 270.2 138.84014423076923 270.2C138.84014423076923 270.2 231.40024038461536 270.2 231.40024038461536 270.2C231.40024038461536 270.2 323.96033653846155 270.2 323.96033653846155 270.2C323.96033653846155 270.2 416.5204326923077 270.2 416.5204326923077 270.2C416.5204326923077 270.2 509.0805288461538 270.2 509.0805288461538 270.2C509.0805288461538 270.2 601.640625 270.2 601.640625 270.2C601.640625 270.2 601.640625 270.2 601.640625 270.2 \"></path>
</svg>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2507 => 2333,  2500 => 2329,  2496 => 2328,  2492 => 2327,  2488 => 2326,  2484 => 2325,  2480 => 2324,  2476 => 2323,  2472 => 2322,  1148 => 1001,  1139 => 995,  1130 => 989,  1121 => 983,  1112 => 977,  1102 => 970,  1093 => 964,  1084 => 958,  1080 => 956,  1071 => 950,  1068 => 949,  1066 => 948,  1063 => 947,  1054 => 941,  1051 => 940,  1049 => 939,  1046 => 938,  1037 => 932,  1034 => 931,  1032 => 930,  1012 => 913,  972 => 876,  966 => 875,  956 => 870,  951 => 868,  781 => 701,  110 => 33,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  71 => 18,  67 => 17,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{ asset('assets2/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets2/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"{{ asset('https://fonts.gstatic.com') }}\" rel=\"preconnect\">
    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}\"
          rel=\"stylesheet\">

    <!-- Vendor CSS Files -->

    <link href=\"{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/simple-datatables/style.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->

    <link href=\"{{ asset('assets2/css/style.css') }}\" rel=\"stylesheet\">
    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style id=\"apexcharts-css\">@keyframes opaque {
                                   0% {
                                       opacity: 0
                                   }

                                   to {
                                       opacity: 1
                                   }
                               }

        @keyframes resizeanim {
            0%, to {
                opacity: 0
            }
        }

        .apexcharts-canvas {
            position: relative;
            user-select: none
        }

        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
        }

        .apexcharts-inner {
            position: relative
        }

        .apexcharts-text tspan {
            font-family: inherit
        }

        .legend-mouseover-inactive {
            transition: .15s ease all;
            opacity: .2
        }

        .apexcharts-legend-text {
            padding-left: 15px;
            margin-left: -15px;
        }

        .apexcharts-series-collapsed {
            opacity: 0
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, .96)
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, .8)
        }

        .apexcharts-tooltip * {
            font-family: inherit
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #eceff1;
            border-bottom: 1px solid #ddd
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, .7);
            border-bottom: 1px solid #333
        }

        .apexcharts-tooltip-text-goals-value, .apexcharts-tooltip-text-y-value, .apexcharts-tooltip-text-z-value {
            display: inline-block;
            margin-left: 5px;
            font-weight: 600
        }

        .apexcharts-tooltip-text-goals-label:empty, .apexcharts-tooltip-text-goals-value:empty, .apexcharts-tooltip-text-y-label:empty, .apexcharts-tooltip-text-y-value:empty, .apexcharts-tooltip-text-z-value:empty, .apexcharts-tooltip-title:empty {
            display: none
        }

        .apexcharts-tooltip-text-goals-label, .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px
        }

        .apexcharts-tooltip-goals-group, .apexcharts-tooltip-text-goals-label, .apexcharts-tooltip-text-goals-value {
            display: flex
        }

        .apexcharts-tooltip-text-goals-label:not(:empty), .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0;
            margin-right: 10px;
            border-radius: 50%
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1
        }

        .apexcharts-tooltip-series-group.apexcharts-active, .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px
        }

        .apexcharts-custom-tooltip, .apexcharts-tooltip-box {
            padding: 4px 8px
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse
        }

        .apexcharts-tooltip-box > div {
            margin: 4px 0
        }

        .apexcharts-tooltip-box span.value {
            font-weight: 700
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: 700;
            display: block;
            margin-bottom: 5px
        }

        .apexcharts-xaxistooltip, .apexcharts-yaxistooltip {
            opacity: 0;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae
        }

        .apexcharts-xaxistooltip {
            padding: 9px 10px;
            transition: .15s ease all
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: \" \";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-xaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-left: -6px
        }

        .apexcharts-xaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-left: -7px
        }

        .apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%
        }

        .apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
            top: 100%
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #eceff1
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90a4ae
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after, .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #eceff1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90a4ae
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after, .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-yaxistooltip {
            padding: 4px 10px
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: \" \";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-yaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-top: -6px
        }

        .apexcharts-yaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-top: -7px
        }

        .apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
            left: 100%
        }

        .apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
            right: 100%
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #eceff1
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90a4ae
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after, .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #eceff1
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90a4ae
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after, .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1
        }

        .apexcharts-yaxistooltip-hidden {
            display: none
        }

        .apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: .15s ease all
        }

        .apexcharts-xcrosshairs.apexcharts-active, .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0
        }

        .apexcharts-selection-rect {
            cursor: move
        }

        .svg_select_boundingRect, .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect + g .svg_select_boundingRect, .apexcharts-selection-rect + g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect + g .svg_select_points_l, .apexcharts-selection-rect + g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-menu-icon, .apexcharts-pan-icon, .apexcharts-reset-icon, .apexcharts-selection-icon, .apexcharts-toolbar-custom-icon, .apexcharts-zoom-icon, .apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6e8192;
            text-align: center
        }

        .apexcharts-menu-icon svg, .apexcharts-reset-icon svg, .apexcharts-zoom-icon svg, .apexcharts-zoomin-icon svg, .apexcharts-zoomout-icon svg {
            fill: #6e8192
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(.76)
        }

        .apexcharts-theme-dark .apexcharts-menu-icon svg, .apexcharts-theme-dark .apexcharts-pan-icon svg, .apexcharts-theme-dark .apexcharts-reset-icon svg, .apexcharts-theme-dark .apexcharts-selection-icon svg, .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg, .apexcharts-theme-dark .apexcharts-zoom-icon svg, .apexcharts-theme-dark .apexcharts-zoomin-icon svg, .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
            fill: #f3f4f5
        }

        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg, .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg, .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
            fill: #008ffb
        }

        .apexcharts-theme-light .apexcharts-menu-icon:hover svg, .apexcharts-theme-light .apexcharts-reset-icon:hover svg, .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg, .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg, .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg, .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
            fill: #333
        }

        .apexcharts-menu-icon, .apexcharts-selection-icon {
            position: relative
        }

        .apexcharts-reset-icon {
            margin-left: 5px
        }

        .apexcharts-menu-icon, .apexcharts-reset-icon, .apexcharts-zoom-icon {
            transform: scale(.85)
        }

        .apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
            transform: scale(.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px
        }

        .apexcharts-pan-icon {
            transform: scale(.62);
            position: relative;
            left: 1px;
            top: 0
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6e8192;
            stroke-width: 2
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008ffb
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0 6px 2px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: .15s ease all;
            pointer-events: none
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: .15s ease all
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, .7);
            color: #fff
        }

        @media screen and (min-width: 768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1
            }
        }

        .apexcharts-canvas .apexcharts-element-hidden, .apexcharts-datalabel.apexcharts-element-hidden, .apexcharts-hide .apexcharts-series-points {
            opacity: 0
        }

        .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value, .apexcharts-datalabels, .apexcharts-pie-label {
            cursor: default;
            pointer-events: none
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease
        }

        .apexcharts-legend {
            display: flex;
            overflow: auto;
            padding: 0 10px;
        }

        .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
            flex-wrap: wrap
        }

        .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
            flex-direction: column;
            bottom: 0;
        }

        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
            justify-content: flex-start;
        }

        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
            justify-content: center;
        }

        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
            justify-content: flex-end;
        }

        .apexcharts-legend-series {
            cursor: pointer;
            line-height: normal;
        }

        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
            display: flex;
            align-items: center;
        }

        .apexcharts-legend-text {
            position: relative;
            font-size: 14px;
        }

        .apexcharts-legend-text *, .apexcharts-legend-marker * {
            pointer-events: none;
        }

        .apexcharts-legend-marker {
            position: relative;
            display: inline-block;
            cursor: pointer;
            margin-right: 3px;
            border-style: solid;
        }

        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
            display: inline-block;
        }

        .apexcharts-legend-series.apexcharts-no-click {
            cursor: auto;
        }

        .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
            display: none !important;
        }

        .apexcharts-inactive-legend {
            opacity: 0.45;
        }

        .apexcharts-annotation-rect, .apexcharts-area-series .apexcharts-area, .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-gridline, .apexcharts-line, .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-point-annotation-label, .apexcharts-radar-series path, .apexcharts-radar-series polygon, .apexcharts-toolbar svg, .apexcharts-tooltip .apexcharts-marker, .apexcharts-xaxis-annotation-label, .apexcharts-yaxis-annotation-label, .apexcharts-zoom-rect {
            pointer-events: none
        }

        .apexcharts-marker {
            transition: .15s ease all
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
            height: 100%;
            width: 100%;
            overflow: hidden
        }

        .contract-trigger:before, .resize-triggers, .resize-triggers > div {
            content: \" \";
            display: block;
            position: absolute;
            top: 0;
            left: 0
        }

        .resize-triggers > div {
            height: 100%;
            width: 100%;
            background: #eee;
            overflow: auto
        }

        .contract-trigger:before {
            overflow: hidden;
            width: 200%;
            height: 200%
        }
    </style>
</head>
<body>

<!-- ======= Header ======= -->
<<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"{{ asset('assets/img/ARTounsi.png') }}\" width=\"50\" height=\"300\" alt=\"\">
            <span class=\"d-none d-lg-block\">ArTounsi</span>

        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
        <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
            <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
            <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-bell\"></i>
                    <span class=\"badge bg-primary badge-number\">4</span>
                </a><!-- End Notification Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                    <li class=\"dropdown-header\">
                        You have 4 new notifications
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-exclamation-circle text-warning\"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-x-circle text-danger\"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-check-circle text-success\"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-info-circle text-primary\"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>
                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-chat-left-text\"></i>
                    <span class=\"badge bg-success badge-number\">3</span>
                </a><!-- End Messages Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                    <li class=\"dropdown-header\">
                        You have 3 new messages
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <img src=\"{{ asset('uploads/Avatars/' ~ user.avatar) }}\" alt=\"Profile\" class=\"rounded-circle\">

                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ user.name }} {{ user.lastName }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>{{ user.name }}.{{ user.lastName }}</h6>
                        <span>{{ user.type }}</span>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-gear\"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_allusers_logout') }}\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>

<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
        {% if(user.type=='Admin' or user.type=='Studio') %}
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_offres') }}\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
        {% endif %}
        <!-- End Profile Page Nav -->
        {% if(user.type=='Admin') %}
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_grosmots_index') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
        {% endif %}
        <!-- End F.A.Q Page Nav -->
        {% if(user.type=='Admin' or user.type=='Artist') %}
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_demandes') }}\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>
        {% endif %}

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_produits_back_new') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_challenge_index_back') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Challenge</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_tutoriel_index_back') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Tutoriel</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_dashboard_home_page') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_produits_back') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_allusers_index') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_ban_index') }}\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_allusers_edit',{'id_user': user.id_user}) }}\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>


</aside>

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Dashboard</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item active\">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
        <div class=\"row\">

            <!-- Left side columns -->
            <div class=\"col-lg-8\">
                <div class=\"row\">

                    <!-- Sales Card -->
                    <div class=\"col-xxl-4 col-md-6\">
                        <div class=\"card info-card sales-card\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                                <div class=\"d-flex align-items-center\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-cart\"></i>
                                    </div>
                                    <div class=\"ps-3\">
                                        <h6>145</h6>
                                        <span class=\"text-success small pt-1 fw-bold\">12%</span> <span
                                                class=\"text-muted small pt-2 ps-1\">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class=\"col-xxl-4 col-md-6\">
                        <div class=\"card info-card revenue-card\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                                <div class=\"d-flex align-items-center\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-currency-dollar\"></i>
                                    </div>
                                    <div class=\"ps-3\">
                                        <h6>\$3,264</h6>
                                        <span class=\"text-success small pt-1 fw-bold\">8%</span> <span
                                                class=\"text-muted small pt-2 ps-1\">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class=\"col-xxl-4 col-xl-12\">

                        <div class=\"card info-card customers-card\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                                <div class=\"d-flex align-items-center\">
                                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                        <i class=\"bi bi-people\"></i>
                                    </div>
                                    <div class=\"ps-3\">
                                        <h6>1244</h6>
                                        <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span
                                                class=\"text-muted small pt-2 ps-1\">decrease</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class=\"col-12\">
                        <div class=\"card\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                                <!-- Line Chart -->
                                <div id=\"reportsChart\" style=\"min-height: 365px;\">
                                    <div id=\"apexchartsyzwp2ywy\"
                                         class=\"apexcharts-canvas apexchartsyzwp2ywy apexcharts-theme-light\"
                                         style=\"width: 559px; height: 350px;\">
                                        <svg id=\"SvgjsSvg2067\" width=\"559\" height=\"350\"
                                             xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\"
                                             xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\"
                                             class=\"apexcharts-svg apexcharts-zoomable\" xmlns:data=\"ApexChartsNS\"
                                             transform=\"translate(0, 0)\" style=\"background: transparent;\">
                                            <rect id=\"SvgjsRect2074\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\"
                                                  opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\"
                                                  fill=\"#fefefe\"></rect>
                                            <g id=\"SvgjsG2193\" class=\"apexcharts-yaxis\" rel=\"0\"
                                               transform=\"translate(15.359375, 0)\">
                                                <g id=\"SvgjsG2194\" class=\"apexcharts-yaxis-texts-g\">
                                                    <text id=\"SvgjsText2196\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"31.5\" text-anchor=\"end\" dominant-baseline=\"auto\"
                                                          font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\"
                                                          class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2197\">100</tspan>
                                                        <title>100</title></text>
                                                    <text id=\"SvgjsText2199\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"85.53999999999999\" text-anchor=\"end\"
                                                          dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\"
                                                          fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2200\">80</tspan>
                                                        <title>80</title></text>
                                                    <text id=\"SvgjsText2202\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"139.57999999999998\" text-anchor=\"end\"
                                                          dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\"
                                                          fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2203\">60</tspan>
                                                        <title>60</title></text>
                                                    <text id=\"SvgjsText2205\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"193.61999999999998\" text-anchor=\"end\"
                                                          dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\"
                                                          fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2206\">40</tspan>
                                                        <title>40</title></text>
                                                    <text id=\"SvgjsText2208\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"247.65999999999997\" text-anchor=\"end\"
                                                          dominant-baseline=\"auto\" font-size=\"11px\" font-weight=\"400\"
                                                          fill=\"#373d3f\" class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2209\">20</tspan>
                                                        <title>20</title></text>
                                                    <text id=\"SvgjsText2211\" font-family=\"Helvetica, Arial, sans-serif\"
                                                          x=\"20\" y=\"301.7\" text-anchor=\"end\" dominant-baseline=\"auto\"
                                                          font-size=\"11px\" font-weight=\"400\" fill=\"#373d3f\"
                                                          class=\"apexcharts-text apexcharts-yaxis-label \"
                                                          style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                        <tspan id=\"SvgjsTspan2212\">0</tspan>
                                                        <title>0</title></text>
                                                </g>
                                            </g>
                                            <g id=\"SvgjsG2069\" class=\"apexcharts-inner apexcharts-graphical\"
                                               transform=\"translate(45.359375, 30)\">
                                                <defs id=\"SvgjsDefs2068\">
                                                    <clipPath id=\"gridRectMaskyzwp2ywy\">
                                                        <rect id=\"SvgjsRect2079\" width=\"509.640625\" height=\"272.2\"
                                                              x=\"-3\" y=\"-1\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\"
                                                              stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect>
                                                    </clipPath>
                                                    <clipPath id=\"forecastMaskyzwp2ywy\"></clipPath>
                                                    <clipPath id=\"nonForecastMaskyzwp2ywy\"></clipPath>
                                                    <clipPath id=\"gridRectMarkerMaskyzwp2ywy\">
                                                        <rect id=\"SvgjsRect2080\" width=\"551.640625\" height=\"318.2\"
                                                              x=\"-24\" y=\"-24\" rx=\"0\" ry=\"0\" opacity=\"1\" stroke-width=\"0\"
                                                              stroke=\"none\" stroke-dasharray=\"0\" fill=\"#fff\"></rect>
                                                    </clipPath>
                                                    <linearGradient id=\"SvgjsLinearGradient2098\" x1=\"0\" y1=\"0\" x2=\"0\"
                                                                    y2=\"1\">
                                                        <stop id=\"SvgjsStop2099\" stop-opacity=\"0.3\"
                                                              stop-color=\"rgba(65,84,241,0.3)\" offset=\"0\"></stop>
                                                        <stop id=\"SvgjsStop2100\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"0.9\"></stop>
                                                        <stop id=\"SvgjsStop2101\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"1\"></stop>
                                                    </linearGradient>
                                                    <linearGradient id=\"SvgjsLinearGradient2120\" x1=\"0\" y1=\"0\" x2=\"0\"
                                                                    y2=\"1\">
                                                        <stop id=\"SvgjsStop2121\" stop-opacity=\"0.3\"
                                                              stop-color=\"rgba(46,202,106,0.3)\" offset=\"0\"></stop>
                                                        <stop id=\"SvgjsStop2122\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"0.9\"></stop>
                                                        <stop id=\"SvgjsStop2123\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"1\"></stop>
                                                    </linearGradient>
                                                    <linearGradient id=\"SvgjsLinearGradient2142\" x1=\"0\" y1=\"0\" x2=\"0\"
                                                                    y2=\"1\">
                                                        <stop id=\"SvgjsStop2143\" stop-opacity=\"0.3\"
                                                              stop-color=\"rgba(255,119,29,0.3)\" offset=\"0\"></stop>
                                                        <stop id=\"SvgjsStop2144\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"0.9\"></stop>
                                                        <stop id=\"SvgjsStop2145\" stop-opacity=\"0.4\"
                                                              stop-color=\"rgba(255,255,255,0.4)\" offset=\"1\"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id=\"SvgjsLine2075\" x1=\"0\" y1=\"0\" x2=\"0\" y2=\"270.2\"
                                                      stroke=\"#b6b6b6\" stroke-dasharray=\"3\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xcrosshairs\" x=\"0\" y=\"0\" width=\"1\"
                                                      height=\"270.2\" fill=\"#b1b9c4\" filter=\"none\" fill-opacity=\"0.9\"
                                                      stroke-width=\"1\"></line>
                                                <line id=\"SvgjsLine2152\" x1=\"0\" y1=\"271.2\" x2=\"0\" y2=\"277.2\"
                                                      stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2153\" x1=\"77.48317307692308\" y1=\"271.2\"
                                                      x2=\"77.48317307692308\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2154\" x1=\"154.96634615384616\" y1=\"271.2\"
                                                      x2=\"154.96634615384616\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2155\" x1=\"232.44951923076923\" y1=\"271.2\"
                                                      x2=\"232.44951923076923\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2156\" x1=\"309.9326923076923\" y1=\"271.2\"
                                                      x2=\"309.9326923076923\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2157\" x1=\"387.4158653846154\" y1=\"271.2\"
                                                      x2=\"387.4158653846154\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <line id=\"SvgjsLine2158\" x1=\"464.8990384615385\" y1=\"271.2\"
                                                      x2=\"464.8990384615385\" y2=\"277.2\" stroke=\"#e0e0e0\"
                                                      stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-xaxis-tick\"></line>
                                                <g id=\"SvgjsG2148\" class=\"apexcharts-grid\">
                                                    <g id=\"SvgjsG2149\" class=\"apexcharts-gridlines-horizontal\">
                                                        <line id=\"SvgjsLine2160\" x1=\"0\" y1=\"54.04\" x2=\"503.640625\"
                                                              y2=\"54.04\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                              stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line>
                                                        <line id=\"SvgjsLine2161\" x1=\"0\" y1=\"108.08\" x2=\"503.640625\"
                                                              y2=\"108.08\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                              stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line>
                                                        <line id=\"SvgjsLine2162\" x1=\"0\" y1=\"162.12\" x2=\"503.640625\"
                                                              y2=\"162.12\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                              stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line>
                                                        <line id=\"SvgjsLine2163\" x1=\"0\" y1=\"216.16\" x2=\"503.640625\"
                                                              y2=\"216.16\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                              stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line>
                                                    </g>
                                                    <g id=\"SvgjsG2150\" class=\"apexcharts-gridlines-vertical\"></g>
                                                    <line id=\"SvgjsLine2166\" x1=\"0\" y1=\"270.2\" x2=\"503.640625\"
                                                          y2=\"270.2\" stroke=\"transparent\" stroke-dasharray=\"0\"
                                                          stroke-linecap=\"butt\"></line>
                                                    <line id=\"SvgjsLine2165\" x1=\"0\" y1=\"1\" x2=\"0\" y2=\"270.2\"
                                                          stroke=\"transparent\" stroke-dasharray=\"0\"
                                                          stroke-linecap=\"butt\"></line>
                                                </g>
                                                <g id=\"SvgjsG2151\" class=\"apexcharts-grid-borders\">
                                                    <line id=\"SvgjsLine2159\" x1=\"0\" y1=\"0\" x2=\"503.640625\" y2=\"0\"
                                                          stroke=\"#e0e0e0\" stroke-dasharray=\"0\" stroke-linecap=\"butt\"
                                                          class=\"apexcharts-gridline\"></line>
                                                    <line id=\"SvgjsLine2164\" x1=\"0\" y1=\"270.2\" x2=\"503.640625\"
                                                          y2=\"270.2\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                          stroke-linecap=\"butt\" class=\"apexcharts-gridline\"></line>
                                                    <line id=\"SvgjsLine2192\" x1=\"0\" y1=\"271.2\" x2=\"503.640625\"
                                                          y2=\"271.2\" stroke=\"#e0e0e0\" stroke-dasharray=\"0\"
                                                          stroke-width=\"1\" stroke-linecap=\"butt\"></line>
                                                </g>
                                                <g id=\"SvgjsG2081\"
                                                   class=\"apexcharts-area-series apexcharts-plot-series\">
                                                    <g id=\"SvgjsG2082\" class=\"apexcharts-series\" seriesName=\"Sales\"
                                                       data:longestSeries=\"true\" rel=\"1\" data:realIndex=\"0\">
                                                        <path id=\"SvgjsPath2102\"
                                                              d=\"M 0 270.2 L 0 186.438C 40.678665865384616 186.438 75.54609375000001 162.12 116.22475961538463 162.12C 143.3438701923077 162.12 166.58882211538463 194.54399999999998 193.7079326923077 194.54399999999998C 220.82704326923078 194.54399999999998 244.0719951923077 132.398 271.1911057692308 132.398C 298.3102163461539 132.398 321.55516826923076 156.716 348.67427884615387 156.716C 375.793389423077 156.716 399.03834134615386 48.635999999999996 426.15745192307696 48.635999999999996C 453.2765625 48.635999999999996 476.52151442307695 118.88799999999998 503.640625 118.88799999999998C 503.640625 118.88799999999998 503.640625 118.88799999999998 503.640625 270.2M 503.640625 118.88799999999998z\"
                                                              fill=\"url(#SvgjsLinearGradient2098)\" fill-opacity=\"1\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"0\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"0\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 270.2 L 0 186.438C 40.678665865384616 186.438 75.54609375000001 162.12 116.22475961538463 162.12C 143.3438701923077 162.12 166.58882211538463 194.54399999999998 193.7079326923077 194.54399999999998C 220.82704326923078 194.54399999999998 244.0719951923077 132.398 271.1911057692308 132.398C 298.3102163461539 132.398 321.55516826923076 156.716 348.67427884615387 156.716C 375.793389423077 156.716 399.03834134615386 48.635999999999996 426.15745192307696 48.635999999999996C 453.2765625 48.635999999999996 476.52151442307695 118.88799999999998 503.640625 118.88799999999998C 503.640625 118.88799999999998 503.640625 118.88799999999998 503.640625 270.2M 503.640625 118.88799999999998z\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"></path>
                                                        <path id=\"SvgjsPath2103\"
                                                              d=\"M 0 186.438C 40.678665865384616 186.438 75.54609375000001 162.12 116.22475961538463 162.12C 143.3438701923077 162.12 166.58882211538463 194.54399999999998 193.7079326923077 194.54399999999998C 220.82704326923078 194.54399999999998 244.0719951923077 132.398 271.1911057692308 132.398C 298.3102163461539 132.398 321.55516826923076 156.716 348.67427884615387 156.716C 375.793389423077 156.716 399.03834134615386 48.635999999999996 426.15745192307696 48.635999999999996C 453.2765625 48.635999999999996 476.52151442307695 118.88799999999998 503.640625 118.88799999999998\"
                                                              fill=\"none\" fill-opacity=\"1\" stroke=\"#4154f1\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"0\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 186.438C 40.678665865384616 186.438 75.54609375000001 162.12 116.22475961538463 162.12C 143.3438701923077 162.12 166.58882211538463 194.54399999999998 193.7079326923077 194.54399999999998C 220.82704326923078 194.54399999999998 244.0719951923077 132.398 271.1911057692308 132.398C 298.3102163461539 132.398 321.55516826923076 156.716 348.67427884615387 156.716C 375.793389423077 156.716 399.03834134615386 48.635999999999996 426.15745192307696 48.635999999999996C 453.2765625 48.635999999999996 476.52151442307695 118.88799999999998 503.640625 118.88799999999998\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"
                                                              fill-rule=\"evenodd\"></path>
                                                        <g id=\"SvgjsG2083\" class=\"apexcharts-series-markers-wrap\"
                                                           data:realIndex=\"0\">
                                                            <g id=\"SvgjsG2085\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2086\" r=\"4\" cx=\"0\" cy=\"186.438\"
                                                                        class=\"apexcharts-marker no-pointer-events w7j859mgn\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"0\"
                                                                        j=\"0\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                                <circle id=\"SvgjsCircle2087\" r=\"4\"
                                                                        cx=\"116.22475961538463\" cy=\"162.12\"
                                                                        class=\"apexcharts-marker no-pointer-events w5ohg7nrhg\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"1\"
                                                                        j=\"1\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2088\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2089\" r=\"4\"
                                                                        cx=\"193.7079326923077\" cy=\"194.54399999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wdwiubq3xk\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"2\"
                                                                        j=\"2\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2090\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2091\" r=\"4\"
                                                                        cx=\"271.1911057692308\" cy=\"132.398\"
                                                                        class=\"apexcharts-marker no-pointer-events we45wek1e\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"3\"
                                                                        j=\"3\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2092\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2093\" r=\"4\"
                                                                        cx=\"348.67427884615387\" cy=\"156.716\"
                                                                        class=\"apexcharts-marker no-pointer-events w0ohu0ep1\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"4\"
                                                                        j=\"4\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2094\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2095\" r=\"4\"
                                                                        cx=\"426.15745192307696\" cy=\"48.635999999999996\"
                                                                        class=\"apexcharts-marker no-pointer-events wq9p7au4j\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"5\"
                                                                        j=\"5\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2096\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2097\" r=\"4\" cx=\"503.640625\"
                                                                        cy=\"118.88799999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events w7fgxb41a\"
                                                                        stroke=\"#ffffff\" fill=\"#4154f1\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"6\"
                                                                        j=\"6\" index=\"0\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id=\"SvgjsG2104\" class=\"apexcharts-series\" seriesName=\"Revenue\"
                                                       data:longestSeries=\"true\" rel=\"2\" data:realIndex=\"1\">
                                                        <path id=\"SvgjsPath2124\"
                                                              d=\"M 0 270.2 L 0 240.47799999999998C 40.678665865384616 240.47799999999998 75.54609375000001 183.736 116.22475961538463 183.736C 143.3438701923077 183.736 166.58882211538463 148.60999999999999 193.7079326923077 148.60999999999999C 220.82704326923078 148.60999999999999 244.0719951923077 183.736 271.1911057692308 183.736C 298.3102163461539 183.736 321.55516826923076 178.332 348.67427884615387 178.332C 375.793389423077 178.332 399.03834134615386 129.696 426.15745192307696 129.696C 453.2765625 129.696 476.52151442307695 159.418 503.640625 159.418C 503.640625 159.418 503.640625 159.418 503.640625 270.2M 503.640625 159.418z\"
                                                              fill=\"url(#SvgjsLinearGradient2120)\" fill-opacity=\"1\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"0\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"1\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 270.2 L 0 240.47799999999998C 40.678665865384616 240.47799999999998 75.54609375000001 183.736 116.22475961538463 183.736C 143.3438701923077 183.736 166.58882211538463 148.60999999999999 193.7079326923077 148.60999999999999C 220.82704326923078 148.60999999999999 244.0719951923077 183.736 271.1911057692308 183.736C 298.3102163461539 183.736 321.55516826923076 178.332 348.67427884615387 178.332C 375.793389423077 178.332 399.03834134615386 129.696 426.15745192307696 129.696C 453.2765625 129.696 476.52151442307695 159.418 503.640625 159.418C 503.640625 159.418 503.640625 159.418 503.640625 270.2M 503.640625 159.418z\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"></path>
                                                        <path id=\"SvgjsPath2125\"
                                                              d=\"M 0 240.47799999999998C 40.678665865384616 240.47799999999998 75.54609375000001 183.736 116.22475961538463 183.736C 143.3438701923077 183.736 166.58882211538463 148.60999999999999 193.7079326923077 148.60999999999999C 220.82704326923078 148.60999999999999 244.0719951923077 183.736 271.1911057692308 183.736C 298.3102163461539 183.736 321.55516826923076 178.332 348.67427884615387 178.332C 375.793389423077 178.332 399.03834134615386 129.696 426.15745192307696 129.696C 453.2765625 129.696 476.52151442307695 159.418 503.640625 159.418\"
                                                              fill=\"none\" fill-opacity=\"1\" stroke=\"#2eca6a\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"1\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 240.47799999999998C 40.678665865384616 240.47799999999998 75.54609375000001 183.736 116.22475961538463 183.736C 143.3438701923077 183.736 166.58882211538463 148.60999999999999 193.7079326923077 148.60999999999999C 220.82704326923078 148.60999999999999 244.0719951923077 183.736 271.1911057692308 183.736C 298.3102163461539 183.736 321.55516826923076 178.332 348.67427884615387 178.332C 375.793389423077 178.332 399.03834134615386 129.696 426.15745192307696 129.696C 453.2765625 129.696 476.52151442307695 159.418 503.640625 159.418\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"
                                                              fill-rule=\"evenodd\"></path>
                                                        <g id=\"SvgjsG2105\" class=\"apexcharts-series-markers-wrap\"
                                                           data:realIndex=\"1\">
                                                            <g id=\"SvgjsG2107\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2108\" r=\"4\" cx=\"0\"
                                                                        cy=\"240.47799999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wxuv1qllx\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"0\"
                                                                        j=\"0\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                                <circle id=\"SvgjsCircle2109\" r=\"4\"
                                                                        cx=\"116.22475961538463\" cy=\"183.736\"
                                                                        class=\"apexcharts-marker no-pointer-events wk1jgr656\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"1\"
                                                                        j=\"1\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2110\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2111\" r=\"4\"
                                                                        cx=\"193.7079326923077\" cy=\"148.60999999999999\"
                                                                        class=\"apexcharts-marker no-pointer-events w5e0jepgt\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"2\"
                                                                        j=\"2\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2112\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2113\" r=\"4\"
                                                                        cx=\"271.1911057692308\" cy=\"183.736\"
                                                                        class=\"apexcharts-marker no-pointer-events ww4eps9qy\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"3\"
                                                                        j=\"3\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2114\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2115\" r=\"4\"
                                                                        cx=\"348.67427884615387\" cy=\"178.332\"
                                                                        class=\"apexcharts-marker no-pointer-events wkqnqiatg\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"4\"
                                                                        j=\"4\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2116\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2117\" r=\"4\"
                                                                        cx=\"426.15745192307696\" cy=\"129.696\"
                                                                        class=\"apexcharts-marker no-pointer-events wze2q3d7m\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"5\"
                                                                        j=\"5\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2118\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2119\" r=\"4\" cx=\"503.640625\"
                                                                        cy=\"159.418\"
                                                                        class=\"apexcharts-marker no-pointer-events wafk0gq5fg\"
                                                                        stroke=\"#ffffff\" fill=\"#2eca6a\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"6\"
                                                                        j=\"6\" index=\"1\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id=\"SvgjsG2126\" class=\"apexcharts-series\" seriesName=\"Customers\"
                                                       data:longestSeries=\"true\" rel=\"3\" data:realIndex=\"2\">
                                                        <path id=\"SvgjsPath2146\"
                                                              d=\"M 0 270.2 L 0 229.67C 40.678665865384616 229.67 75.54609375000001 240.47799999999998 116.22475961538463 240.47799999999998C 143.3438701923077 240.47799999999998 166.58882211538463 183.736 193.7079326923077 183.736C 220.82704326923078 183.736 244.0719951923077 221.564 271.1911057692308 221.564C 298.3102163461539 221.564 321.55516826923076 245.88199999999998 348.67427884615387 245.88199999999998C 375.793389423077 245.88199999999998 399.03834134615386 205.35199999999998 426.15745192307696 205.35199999999998C 453.2765625 205.35199999999998 476.52151442307695 240.47799999999998 503.640625 240.47799999999998C 503.640625 240.47799999999998 503.640625 240.47799999999998 503.640625 270.2M 503.640625 240.47799999999998z\"
                                                              fill=\"url(#SvgjsLinearGradient2142)\" fill-opacity=\"1\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"0\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"2\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 270.2 L 0 229.67C 40.678665865384616 229.67 75.54609375000001 240.47799999999998 116.22475961538463 240.47799999999998C 143.3438701923077 240.47799999999998 166.58882211538463 183.736 193.7079326923077 183.736C 220.82704326923078 183.736 244.0719951923077 221.564 271.1911057692308 221.564C 298.3102163461539 221.564 321.55516826923076 245.88199999999998 348.67427884615387 245.88199999999998C 375.793389423077 245.88199999999998 399.03834134615386 205.35199999999998 426.15745192307696 205.35199999999998C 453.2765625 205.35199999999998 476.52151442307695 240.47799999999998 503.640625 240.47799999999998C 503.640625 240.47799999999998 503.640625 240.47799999999998 503.640625 270.2M 503.640625 240.47799999999998z\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"></path>
                                                        <path id=\"SvgjsPath2147\"
                                                              d=\"M 0 229.67C 40.678665865384616 229.67 75.54609375000001 240.47799999999998 116.22475961538463 240.47799999999998C 143.3438701923077 240.47799999999998 166.58882211538463 183.736 193.7079326923077 183.736C 220.82704326923078 183.736 244.0719951923077 221.564 271.1911057692308 221.564C 298.3102163461539 221.564 321.55516826923076 245.88199999999998 348.67427884615387 245.88199999999998C 375.793389423077 245.88199999999998 399.03834134615386 205.35199999999998 426.15745192307696 205.35199999999998C 453.2765625 205.35199999999998 476.52151442307695 240.47799999999998 503.640625 240.47799999999998\"
                                                              fill=\"none\" fill-opacity=\"1\" stroke=\"#ff771d\"
                                                              stroke-opacity=\"1\" stroke-linecap=\"butt\" stroke-width=\"2\"
                                                              stroke-dasharray=\"0\" class=\"apexcharts-area\" index=\"2\"
                                                              clip-path=\"url(#gridRectMaskyzwp2ywy)\"
                                                              pathTo=\"M 0 229.67C 40.678665865384616 229.67 75.54609375000001 240.47799999999998 116.22475961538463 240.47799999999998C 143.3438701923077 240.47799999999998 166.58882211538463 183.736 193.7079326923077 183.736C 220.82704326923078 183.736 244.0719951923077 221.564 271.1911057692308 221.564C 298.3102163461539 221.564 321.55516826923076 245.88199999999998 348.67427884615387 245.88199999999998C 375.793389423077 245.88199999999998 399.03834134615386 205.35199999999998 426.15745192307696 205.35199999999998C 453.2765625 205.35199999999998 476.52151442307695 240.47799999999998 503.640625 240.47799999999998\"
                                                              pathFrom=\"M -1 270.2 L -1 270.2 L 116.22475961538463 270.2 L 193.7079326923077 270.2 L 271.1911057692308 270.2 L 348.67427884615387 270.2 L 426.15745192307696 270.2 L 503.640625 270.2\"
                                                              fill-rule=\"evenodd\"></path>
                                                        <g id=\"SvgjsG2127\" class=\"apexcharts-series-markers-wrap\"
                                                           data:realIndex=\"2\">
                                                            <g id=\"SvgjsG2129\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2130\" r=\"4\" cx=\"0\" cy=\"229.67\"
                                                                        class=\"apexcharts-marker no-pointer-events wjf5q0f6t\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"0\"
                                                                        j=\"0\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                                <circle id=\"SvgjsCircle2131\" r=\"4\"
                                                                        cx=\"116.22475961538463\" cy=\"240.47799999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wxqmsyw52g\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"1\"
                                                                        j=\"1\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2132\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2133\" r=\"4\"
                                                                        cx=\"193.7079326923077\" cy=\"183.736\"
                                                                        class=\"apexcharts-marker no-pointer-events wbc9dc6xo\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"2\"
                                                                        j=\"2\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2134\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2135\" r=\"4\"
                                                                        cx=\"271.1911057692308\" cy=\"221.564\"
                                                                        class=\"apexcharts-marker no-pointer-events wk9o7c3yn\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"3\"
                                                                        j=\"3\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2136\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2137\" r=\"4\"
                                                                        cx=\"348.67427884615387\" cy=\"245.88199999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wukzmy60u\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"4\"
                                                                        j=\"4\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2138\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2139\" r=\"4\"
                                                                        cx=\"426.15745192307696\" cy=\"205.35199999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wf8y7rlc8\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"5\"
                                                                        j=\"5\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                            <g id=\"SvgjsG2140\" class=\"apexcharts-series-markers\"
                                                               clip-path=\"url(#gridRectMarkerMaskyzwp2ywy)\">
                                                                <circle id=\"SvgjsCircle2141\" r=\"4\" cx=\"503.640625\"
                                                                        cy=\"240.47799999999998\"
                                                                        class=\"apexcharts-marker no-pointer-events wjhhmjapq\"
                                                                        stroke=\"#ffffff\" fill=\"#ff771d\" fill-opacity=\"1\"
                                                                        stroke-width=\"2\" stroke-opacity=\"0.9\" rel=\"6\"
                                                                        j=\"6\" index=\"2\"
                                                                        default-marker-size=\"4\"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id=\"SvgjsG2084\" class=\"apexcharts-datalabels\"
                                                       data:realIndex=\"0\"></g>
                                                    <g id=\"SvgjsG2106\" class=\"apexcharts-datalabels\"
                                                       data:realIndex=\"1\"></g>
                                                    <g id=\"SvgjsG2128\" class=\"apexcharts-datalabels\"
                                                       data:realIndex=\"2\"></g>
                                                </g>
                                                <line id=\"SvgjsLine2167\" x1=\"0\" y1=\"0\" x2=\"503.640625\" y2=\"0\"
                                                      stroke=\"#b6b6b6\" stroke-dasharray=\"0\" stroke-width=\"1\"
                                                      stroke-linecap=\"butt\" class=\"apexcharts-ycrosshairs\"></line>
                                                <line id=\"SvgjsLine2168\" x1=\"0\" y1=\"0\" x2=\"503.640625\" y2=\"0\"
                                                      stroke-dasharray=\"0\" stroke-width=\"0\" stroke-linecap=\"butt\"
                                                      class=\"apexcharts-ycrosshairs-hidden\"></line>
                                                <g id=\"SvgjsG2169\" class=\"apexcharts-xaxis\" transform=\"translate(0, 0)\">
                                                    <g id=\"SvgjsG2170\" class=\"apexcharts-xaxis-texts-g\"
                                                       transform=\"translate(0, -4)\">
                                                        <text id=\"SvgjsText2172\"
                                                              font-family=\"Helvetica, Arial, sans-serif\" x=\"0\" y=\"299.2\"
                                                              text-anchor=\"middle\" dominant-baseline=\"auto\"
                                                              font-size=\"12px\" font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2173\">00:00</tspan>
                                                            <title>00:00</title></text>
                                                        <text id=\"SvgjsText2175\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"77.48317307692308\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2176\">01:00</tspan>
                                                            <title>01:00</title></text>
                                                        <text id=\"SvgjsText2178\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"154.96634615384616\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2179\">02:00</tspan>
                                                            <title>02:00</title></text>
                                                        <text id=\"SvgjsText2181\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"232.44951923076923\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2182\">03:00</tspan>
                                                            <title>03:00</title></text>
                                                        <text id=\"SvgjsText2184\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"309.9326923076923\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2185\">04:00</tspan>
                                                            <title>04:00</title></text>
                                                        <text id=\"SvgjsText2187\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"387.4158653846154\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2188\">05:00</tspan>
                                                            <title>05:00</title></text>
                                                        <text id=\"SvgjsText2190\"
                                                              font-family=\"Helvetica, Arial, sans-serif\"
                                                              x=\"464.8990384615385\" y=\"299.2\" text-anchor=\"middle\"
                                                              dominant-baseline=\"auto\" font-size=\"12px\"
                                                              font-weight=\"400\" fill=\"#373d3f\"
                                                              class=\"apexcharts-text apexcharts-xaxis-label \"
                                                              style=\"font-family: Helvetica, Arial, sans-serif;\">
                                                            <tspan id=\"SvgjsTspan2191\">06:00</tspan>
                                                            <title>06:00</title></text>
                                                    </g>
                                                </g>
                                                <g id=\"SvgjsG2213\" class=\"apexcharts-yaxis-annotations\"></g>
                                                <g id=\"SvgjsG2214\" class=\"apexcharts-xaxis-annotations\"></g>
                                                <g id=\"SvgjsG2215\" class=\"apexcharts-point-annotations\"></g>
                                                <rect id=\"SvgjsRect2216\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\"
                                                      opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\"
                                                      fill=\"#fefefe\" class=\"apexcharts-zoom-rect\"></rect>
                                                <rect id=\"SvgjsRect2217\" width=\"0\" height=\"0\" x=\"0\" y=\"0\" rx=\"0\" ry=\"0\"
                                                      opacity=\"1\" stroke-width=\"0\" stroke=\"none\" stroke-dasharray=\"0\"
                                                      fill=\"#fefefe\" class=\"apexcharts-selection-rect\"></rect>
                                            </g>
                                            <g id=\"SvgjsG2070\" class=\"apexcharts-annotations\"></g>
                                        </svg>
                                        <div class=\"apexcharts-legend apexcharts-align-center apx-legend-position-bottom\"
                                             style=\"inset: auto 0px 1px; position: absolute; max-height: 175px;\">
                                            <div class=\"apexcharts-legend-series\" rel=\"1\" seriesname=\"Sales\"
                                                 data:collapsed=\"false\" style=\"margin: 2px 5px;\"><span
                                                        class=\"apexcharts-legend-marker\" rel=\"1\" data:collapsed=\"false\"
                                                        style=\"background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;\"></span><span
                                                        class=\"apexcharts-legend-text\" rel=\"1\" i=\"0\"
                                                        data:default-text=\"Sales\" data:collapsed=\"false\"
                                                        style=\"color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;\">Sales</span>
                                            </div>
                                            <div class=\"apexcharts-legend-series\" rel=\"2\" seriesname=\"Revenue\"
                                                 data:collapsed=\"false\" style=\"margin: 2px 5px;\"><span
                                                        class=\"apexcharts-legend-marker\" rel=\"2\" data:collapsed=\"false\"
                                                        style=\"background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;\"></span><span
                                                        class=\"apexcharts-legend-text\" rel=\"2\" i=\"1\"
                                                        data:default-text=\"Revenue\" data:collapsed=\"false\"
                                                        style=\"color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;\">Revenue</span>
                                            </div>
                                            <div class=\"apexcharts-legend-series\" rel=\"3\" seriesname=\"Customers\"
                                                 data:collapsed=\"false\" style=\"margin: 2px 5px;\"><span
                                                        class=\"apexcharts-legend-marker\" rel=\"3\" data:collapsed=\"false\"
                                                        style=\"background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;\"></span><span
                                                        class=\"apexcharts-legend-text\" rel=\"3\" i=\"2\"
                                                        data:default-text=\"Customers\" data:collapsed=\"false\"
                                                        style=\"color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;\">Customers</span>
                                            </div>
                                        </div>
                                        <div class=\"apexcharts-tooltip apexcharts-theme-light\">
                                            <div class=\"apexcharts-tooltip-title\"
                                                 style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></div>
                                            <div class=\"apexcharts-tooltip-series-group\" style=\"order: 1;\"><span
                                                        class=\"apexcharts-tooltip-marker\"
                                                        style=\"background-color: rgb(65, 84, 241);\"></span>
                                                <div class=\"apexcharts-tooltip-text\"
                                                     style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">
                                                    <div class=\"apexcharts-tooltip-y-group\"><span
                                                                class=\"apexcharts-tooltip-text-y-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-y-value\"></span></div>
                                                    <div class=\"apexcharts-tooltip-goals-group\"><span
                                                                class=\"apexcharts-tooltip-text-goals-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-goals-value\"></span>
                                                    </div>
                                                    <div class=\"apexcharts-tooltip-z-group\"><span
                                                                class=\"apexcharts-tooltip-text-z-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-z-value\"></span></div>
                                                </div>
                                            </div>
                                            <div class=\"apexcharts-tooltip-series-group\" style=\"order: 2;\"><span
                                                        class=\"apexcharts-tooltip-marker\"
                                                        style=\"background-color: rgb(46, 202, 106);\"></span>
                                                <div class=\"apexcharts-tooltip-text\"
                                                     style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">
                                                    <div class=\"apexcharts-tooltip-y-group\"><span
                                                                class=\"apexcharts-tooltip-text-y-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-y-value\"></span></div>
                                                    <div class=\"apexcharts-tooltip-goals-group\"><span
                                                                class=\"apexcharts-tooltip-text-goals-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-goals-value\"></span>
                                                    </div>
                                                    <div class=\"apexcharts-tooltip-z-group\"><span
                                                                class=\"apexcharts-tooltip-text-z-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-z-value\"></span></div>
                                                </div>
                                            </div>
                                            <div class=\"apexcharts-tooltip-series-group\" style=\"order: 3;\"><span
                                                        class=\"apexcharts-tooltip-marker\"
                                                        style=\"background-color: rgb(255, 119, 29);\"></span>
                                                <div class=\"apexcharts-tooltip-text\"
                                                     style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\">
                                                    <div class=\"apexcharts-tooltip-y-group\"><span
                                                                class=\"apexcharts-tooltip-text-y-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-y-value\"></span></div>
                                                    <div class=\"apexcharts-tooltip-goals-group\"><span
                                                                class=\"apexcharts-tooltip-text-goals-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-goals-value\"></span>
                                                    </div>
                                                    <div class=\"apexcharts-tooltip-z-group\"><span
                                                                class=\"apexcharts-tooltip-text-z-label\"></span><span
                                                                class=\"apexcharts-tooltip-text-z-value\"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light\">
                                            <div class=\"apexcharts-xaxistooltip-text\"
                                                 style=\"font-family: Helvetica, Arial, sans-serif; font-size: 12px;\"></div>
                                        </div>
                                        <div class=\"apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light\">
                                            <div class=\"apexcharts-yaxistooltip-text\"></div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    document.addEventListener(\"DOMContentLoaded\", () => {
                                        new ApexCharts(document.querySelector(\"#reportsChart\"), {
                                            series: [{
                                                name: 'Sales',
                                                data: [31, 40, 28, 51, 42, 82, 56],
                                            }, {
                                                name: 'Revenue',
                                                data: [11, 32, 45, 32, 34, 52, 41]
                                            }, {
                                                name: 'Customers',
                                                data: [15, 11, 32, 18, 9, 24, 11]
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                            fill: {
                                                type: \"gradient\",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                type: 'datetime',
                                                categories: [\"2018-09-19T00:00:00.000Z\", \"2018-09-19T01:30:00.000Z\", \"2018-09-19T02:30:00.000Z\", \"2018-09-19T03:30:00.000Z\", \"2018-09-19T04:30:00.000Z\", \"2018-09-19T05:30:00.000Z\", \"2018-09-19T06:30:00.000Z\"]
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy HH:mm'
                                                },
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Reports -->

                    <!-- Recent Sales -->
                    <div class=\"col-12\">
                        <div class=\"card recent-sales overflow-auto\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                                <table class=\"table table-borderless datatable\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">Customer</th>
                                        <th scope=\"col\">Product</th>
                                        <th scope=\"col\">Price</th>
                                        <th scope=\"col\">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\">#2457</a></th>
                                        <td>Brandon Jacob</td>
                                        <td><a href=\"#\" class=\"text-primary\">At praesentium minu</a></td>
                                        <td>\$64</td>
                                        <td><span class=\"badge bg-success\">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\">#2147</a></th>
                                        <td>Bridie Kessler</td>
                                        <td><a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a></td>
                                        <td>\$47</td>
                                        <td><span class=\"badge bg-warning\">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\">#2049</a></th>
                                        <td>Ashleigh Langosh</td>
                                        <td><a href=\"#\" class=\"text-primary\">At recusandae consectetur</a></td>
                                        <td>\$147</td>
                                        <td><span class=\"badge bg-success\">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                        <td>Angus Grady</td>
                                        <td><a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a></td>
                                        <td>\$67</td>
                                        <td><span class=\"badge bg-danger\">Rejected</span></td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                                        <td>Raheem Lehner</td>
                                        <td><a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a></td>
                                        <td>\$165</td>
                                        <td><span class=\"badge bg-success\">Approved</span></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Top Selling -->
                    <div class=\"col-12\">
                        <div class=\"card top-selling overflow-auto\">

                            <div class=\"filter\">
                                <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                    <li class=\"dropdown-header text-start\">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                </ul>
                            </div>

                            <div class=\"card-body pb-0\">
                                <h5 class=\"card-title\">Top Selling <span>| Today</span></h5>

                                <table class=\"table table-borderless\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">Preview</th>
                                        <th scope=\"col\">Product</th>
                                        <th scope=\"col\">Price</th>
                                        <th scope=\"col\">Sold</th>
                                        <th scope=\"col\">Revenue</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-1.jpg\" alt=\"\"></a></th>
                                        <td><a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas
                                                nulla</a></td>
                                        <td>\$64</td>
                                        <td class=\"fw-bold\">124</td>
                                        <td>\$5,828</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-2.jpg\" alt=\"\"></a></th>
                                        <td><a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique
                                                doloremque</a></td>
                                        <td>\$46</td>
                                        <td class=\"fw-bold\">98</td>
                                        <td>\$4,508</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-3.jpg\" alt=\"\"></a></th>
                                        <td><a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a>
                                        </td>
                                        <td>\$59</td>
                                        <td class=\"fw-bold\">74</td>
                                        <td>\$4,366</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-4.jpg\" alt=\"\"></a></th>
                                        <td><a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum
                                                error</a></td>
                                        <td>\$32</td>
                                        <td class=\"fw-bold\">63</td>
                                        <td>\$2,016</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\"><a href=\"#\"><img src=\"assets/img/product-5.jpg\" alt=\"\"></a></th>
                                        <td><a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus
                                                repellendus</a></td>
                                        <td>\$79</td>
                                        <td class=\"fw-bold\">41</td>
                                        <td>\$3,239</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class=\"col-lg-4\">

                <!-- Recent Activity -->
                <div class=\"card\">
                    <div class=\"filter\">
                        <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                            <li class=\"dropdown-header text-start\">
                                <h6>Filter</h6>
                            </li>

                            <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                        </ul>
                    </div>

                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Recent Activity <span>| Today</span></h5>

                        <div class=\"activity\">

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">32 min</div>
                                <i class=\"bi bi-circle-fill activity-badge text-success align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Quia quae rerum <a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a> beatae
                                </div>
                            </div><!-- End activity item-->

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">56 min</div>
                                <i class=\"bi bi-circle-fill activity-badge text-danger align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div><!-- End activity item-->

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">2 hrs</div>
                                <i class=\"bi bi-circle-fill activity-badge text-primary align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div><!-- End activity item-->

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">1 day</div>
                                <i class=\"bi bi-circle-fill activity-badge text-info align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Tempore autem saepe <a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a>
                                    tempore
                                </div>
                            </div><!-- End activity item-->

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">2 days</div>
                                <i class=\"bi bi-circle-fill activity-badge text-warning align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div><!-- End activity item-->

                            <div class=\"activity-item d-flex\">
                                <div class=\"activite-label\">4 weeks</div>
                                <i class=\"bi bi-circle-fill activity-badge text-muted align-self-start\"></i>
                                <div class=\"activity-content\">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Activity -->

                <!-- Budget Report -->
                <div class=\"card\">
                    <div class=\"filter\">
                        <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                            <li class=\"dropdown-header text-start\">
                                <h6>Filter</h6>
                            </li>

                            <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                        </ul>
                    </div>

                    <div class=\"card-body pb-0\">
                        <h5 class=\"card-title\">Budget Report <span>| This Month</span></h5>

                        <div id=\"budgetChart\"
                             style=\"min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"
                             class=\"echart\" _echarts_instance_=\"ec_1681338332419\">
                            <div style=\"position: relative; width: 297px; height: 400px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;\">
                                <canvas data-zr-dom-id=\"zr_0\" width=\"297\" height=\"400\"
                                        style=\"position: absolute; left: 0px; top: 0px; width: 297px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;\"></canvas>
                            </div>
                        </div>

                        <script>
                            document.addEventListener(\"DOMContentLoaded\", () => {
                                var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
                                    legend: {
                                        data: ['Allocated Budget', 'Actual Spending']
                                    },
                                    radar: {
                                        // shape: 'circle',
                                        indicator: [{
                                            name: 'Sales',
                                            max: 6500
                                        },
                                            {
                                                name: 'Administration',
                                                max: 16000
                                            },
                                            {
                                                name: 'Information Technology',
                                                max: 30000
                                            },
                                            {
                                                name: 'Customer Support',
                                                max: 38000
                                            },
                                            {
                                                name: 'Development',
                                                max: 52000
                                            },
                                            {
                                                name: 'Marketing',
                                                max: 25000
                                            }
                                        ]
                                    },
                                    series: [{
                                        name: 'Budget vs spending',
                                        type: 'radar',
                                        data: [{
                                            value: [4200, 3000, 20000, 35000, 50000, 18000],
                                            name: 'Allocated Budget'
                                        },
                                            {
                                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                name: 'Actual Spending'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Budget Report -->

                <!-- Website Traffic -->
                <div class=\"card\">
                    <div class=\"filter\">
                        <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                            <li class=\"dropdown-header text-start\">
                                <h6>Filter</h6>
                            </li>

                            <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                        </ul>
                    </div>

                    <div class=\"card-body pb-0\">
                        <h5 class=\"card-title\">Website Traffic <span>| Today</span></h5>

                        <div id=\"trafficChart\"
                             style=\"min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;\"
                             class=\"echart\" _echarts_instance_=\"ec_1681338332420\">
                            <div style=\"position: relative; width: 297px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;\">
                                <canvas data-zr-dom-id=\"zr_0\" width=\"297\" height=\"400\"
                                        style=\"position: absolute; left: 0px; top: 0px; width: 297px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;\"></canvas>
                            </div>
                            <div class=\"\"></div>
                        </div>

                        <script>
                            document.addEventListener(\"DOMContentLoaded\", () => {
                                echarts.init(document.querySelector(\"#trafficChart\")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                            value: 1048,
                                            name: 'Search Engine'
                                        },
                                            {
                                                value: 735,
                                                name: 'Direct'
                                            },
                                            {
                                                value: 580,
                                                name: 'Email'
                                            },
                                            {
                                                value: 484,
                                                name: 'Union Ads'
                                            },
                                            {
                                                value: 300,
                                                name: 'Video Ads'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- News & Updates Traffic -->
                <div class=\"card\">
                    <div class=\"filter\">
                        <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                            <li class=\"dropdown-header text-start\">
                                <h6>Filter</h6>
                            </li>

                            <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                        </ul>
                    </div>

                    <div class=\"card-body pb-0\">
                        <h5 class=\"card-title\">News &amp; Updates <span>| Today</span></h5>

                        <div class=\"news\">
                            <div class=\"post-item clearfix\">
                                <img src=\"assets/img/news-1.jpg\" alt=\"\">
                                <h4><a href=\"#\">Nihil blanditiis at in nihil autem</a></h4>
                                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                            </div>

                            <div class=\"post-item clearfix\">
                                <img src=\"assets/img/news-2.jpg\" alt=\"\">
                                <h4><a href=\"#\">Quidem autem et impedit</a></h4>
                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                            </div>

                            <div class=\"post-item clearfix\">
                                <img src=\"assets/img/news-3.jpg\" alt=\"\">
                                <h4><a href=\"#\">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                            </div>

                            <div class=\"post-item clearfix\">
                                <img src=\"assets/img/news-4.jpg\" alt=\"\">
                                <h4><a href=\"#\">Laborum corporis quo dara net para</a></h4>
                                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                            </div>

                            <div class=\"post-item clearfix\">
                                <img src=\"assets/img/news-5.jpg\" alt=\"\">
                                <h4><a href=\"#\">Et dolores corrupti quae illo quod dolor</a></h4>
                                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos
                                    eius...</p>
                            </div>

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        © Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"{{ asset('vendor2/apexcharts/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/chart.js/chart.umd.js') }}\"></script>
<script src=\"{{ asset('vendor2/echarts/echarts.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/quill/quill.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/simple-datatables/simple-datatables.js') }}\"></script>
<script src=\"{{ asset('vendor2/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/php-email-form/validate.js') }}\"></script>


<!-- Template Main JS File -->
<script src=\"{{ asset('assets2/js/main2.js') }}\"></script>


<svg id=\"SvgjsSvg1152\" width=\"2\" height=\"0\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\"
     xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\"
     style=\"overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;\">
    <defs id=\"SvgjsDefs1153\"></defs>
    <polyline id=\"SvgjsPolyline1154\" points=\"0,0\"></polyline>
    <path id=\"SvgjsPath1155\"
          d=\"M-1 270.2L-1 270.2C-1 270.2 138.84014423076923 270.2 138.84014423076923 270.2C138.84014423076923 270.2 231.40024038461536 270.2 231.40024038461536 270.2C231.40024038461536 270.2 323.96033653846155 270.2 323.96033653846155 270.2C323.96033653846155 270.2 416.5204326923077 270.2 416.5204326923077 270.2C416.5204326923077 270.2 509.0805288461538 270.2 509.0805288461538 270.2C509.0805288461538 270.2 601.640625 270.2 601.640625 270.2C601.640625 270.2 601.640625 270.2 601.640625 270.2 \"></path>
</svg>
</body>
</html>", "dashboard/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\dashboard\\index.html.twig");
    }
}
