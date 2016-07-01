<?php

/* core/themes/bartik/templates/block--system-menu-block.html.twig */
class __TwigTemplate_616e29c1b4a3bf122409394e32e04b86691d05024593292e5fcdbaa309b4a77c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/block/block--system-menu-block.html.twig", "core/themes/bartik/templates/block--system-menu-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/block/block--system-menu-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0fe99372f1c1c2de1a541bcaa8f9cc1513f283972dc48d9141c8416fd6e7072 = $this->env->getExtension("native_profiler");
        $__internal_a0fe99372f1c1c2de1a541bcaa8f9cc1513f283972dc48d9141c8416fd6e7072->enter($__internal_a0fe99372f1c1c2de1a541bcaa8f9cc1513f283972dc48d9141c8416fd6e7072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/block--system-menu-block.html.twig"));

        $tags = array("set" => 10, "trans" => 17);
        $filters = array("clean_id" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'trans'),
                array('clean_id'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 10
        $context["show_anchor"] = ("show-" . \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())));
        // line 11
        $context["hide_anchor"] = ("hide-" . \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0fe99372f1c1c2de1a541bcaa8f9cc1513f283972dc48d9141c8416fd6e7072->leave($__internal_a0fe99372f1c1c2de1a541bcaa8f9cc1513f283972dc48d9141c8416fd6e7072_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_3fe3a3c135497f29aa2570d7dd3bc323040e8e1df9b5261380410d1e678e2567 = $this->env->getExtension("native_profiler");
        $__internal_3fe3a3c135497f29aa2570d7dd3bc323040e8e1df9b5261380410d1e678e2567->enter($__internal_3fe3a3c135497f29aa2570d7dd3bc323040e8e1df9b5261380410d1e678e2567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
    ";
        // line 15
        echo "    <div class=\"menu-toggle-target menu-toggle-target-show\" id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["show_anchor"]) ? $context["show_anchor"] : null), "html", null, true));
        echo "\"></div>
    <div class=\"menu-toggle-target\" id=\"";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["hide_anchor"]) ? $context["hide_anchor"] : null), "html", null, true));
        echo "\"></div>
    <a class=\"menu-toggle\" href=\"#";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["show_anchor"]) ? $context["show_anchor"] : null), "html", null, true));
        echo "\">";
        echo t("Show &mdash; @configuration.label", array("@configuration.label" => $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), ));
        echo "</a>
    <a class=\"menu-toggle menu-toggle--hide\" href=\"#";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["hide_anchor"]) ? $context["hide_anchor"] : null), "html", null, true));
        echo "\">";
        echo t("Hide &mdash; @configuration.label", array("@configuration.label" => $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), ));
        echo "</a>
    ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  </div>
";
        
        $__internal_3fe3a3c135497f29aa2570d7dd3bc323040e8e1df9b5261380410d1e678e2567->leave($__internal_3fe3a3c135497f29aa2570d7dd3bc323040e8e1df9b5261380410d1e678e2567_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 19,  89 => 18,  83 => 17,  79 => 16,  74 => 15,  69 => 13,  63 => 12,  56 => 1,  54 => 11,  52 => 10,  11 => 1,);
    }
}
/* {% extends "@classy/block/block--system-menu-block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation for a menu block.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% set show_anchor = "show-" ~ attributes.id|clean_id %}*/
/* {% set hide_anchor = "hide-" ~ attributes.id|clean_id %}*/
/* {% block content %}*/
/*   <div{{ content_attributes.addClass('content') }}>*/
/*     {# When rendering a menu without label, render a menu toggle. #}*/
/*     <div class="menu-toggle-target menu-toggle-target-show" id="{{ show_anchor }}"></div>*/
/*     <div class="menu-toggle-target" id="{{ hide_anchor }}"></div>*/
/*     <a class="menu-toggle" href="#{{ show_anchor }}">{% trans %} Show &mdash; {{ configuration.label }}{% endtrans %}</a>*/
/*     <a class="menu-toggle menu-toggle--hide" href="#{{ hide_anchor }}">{% trans %} Hide &mdash; {{ configuration.label }}{% endtrans %}</a>*/
/*     {{ content }}*/
/*   </div>*/
/* {% endblock %}*/
/* */
