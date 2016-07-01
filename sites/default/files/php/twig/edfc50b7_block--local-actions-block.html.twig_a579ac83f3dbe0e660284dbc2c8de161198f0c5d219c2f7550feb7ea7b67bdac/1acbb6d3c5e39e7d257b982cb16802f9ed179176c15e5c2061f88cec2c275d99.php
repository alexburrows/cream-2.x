<?php

/* core/themes/classy/templates/block/block--local-actions-block.html.twig */
class __TwigTemplate_9eccf67f4562addb1b6e68243002bdf2f99644ef7734776ee621676c4fabeead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aac94fc64f5d9c7ef36198c30cd3f3bebb0eb04eebf66ea79637c1a60c6fd91d = $this->env->getExtension("native_profiler");
        $__internal_aac94fc64f5d9c7ef36198c30cd3f3bebb0eb04eebf66ea79637c1a60c6fd91d->enter($__internal_aac94fc64f5d9c7ef36198c30cd3f3bebb0eb04eebf66ea79637c1a60c6fd91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aac94fc64f5d9c7ef36198c30cd3f3bebb0eb04eebf66ea79637c1a60c6fd91d->leave($__internal_aac94fc64f5d9c7ef36198c30cd3f3bebb0eb04eebf66ea79637c1a60c6fd91d_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_eded8b1f8453b43c95e6e386195d8172d04cae2d58450c46b4ce44d7e8a70c78 = $this->env->getExtension("native_profiler");
        $__internal_eded8b1f8453b43c95e6e386195d8172d04cae2d58450c46b4ce44d7e8a70c78->enter($__internal_eded8b1f8453b43c95e6e386195d8172d04cae2d58450c46b4ce44d7e8a70c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "</nav>
  ";
        }
        
        $__internal_eded8b1f8453b43c95e6e386195d8172d04cae2d58450c46b4ce44d7e8a70c78->leave($__internal_eded8b1f8453b43c95e6e386195d8172d04cae2d58450c46b4ce44d7e8a70c78_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for local actions (primary admin actions.)*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     <nav class="action-links">{{ content }}</nav>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
