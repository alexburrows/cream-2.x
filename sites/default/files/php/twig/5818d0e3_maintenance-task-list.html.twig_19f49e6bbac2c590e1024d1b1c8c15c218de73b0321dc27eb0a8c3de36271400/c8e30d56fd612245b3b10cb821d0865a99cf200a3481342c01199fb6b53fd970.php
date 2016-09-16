<?php

/* core/themes/stable/templates/admin/maintenance-task-list.html.twig */
class __TwigTemplate_037043a4179967b96177ce6f86360123185a34fb7bdbd3b5956d01d3f98ce4d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df2f85d96535be7231960503e7631e79a5744cebd956b4ea94ffb7da5fedd6e1 = $this->env->getExtension("native_profiler");
        $__internal_df2f85d96535be7231960503e7631e79a5744cebd956b4ea94ffb7da5fedd6e1->enter($__internal_df2f85d96535be7231960503e7631e79a5744cebd956b4ea94ffb7da5fedd6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/maintenance-task-list.html.twig"));

        $tags = array("for" => 17, "if" => 20);
        $filters = array("t" => 15);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('t'),
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

        // line 15
        echo "<h2 class=\"visually-hidden\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Installation tasks")));
        echo "</h2>
<ol class=\"task-list\">
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 18
            echo "  <li";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["task"], "attributes", array()), "html", null, true));
            echo ">
    ";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["task"], "item", array()), "html", null, true));
            echo "
    ";
            // line 20
            if ($this->getAttribute($context["task"], "status", array())) {
                echo "<span class=\"visually-hidden\"> (";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["task"], "status", array()), "html", null, true));
                echo ")</span>";
            }
            // line 21
            echo "  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ol>
";
        
        $__internal_df2f85d96535be7231960503e7631e79a5744cebd956b4ea94ffb7da5fedd6e1->leave($__internal_df2f85d96535be7231960503e7631e79a5744cebd956b4ea94ffb7da5fedd6e1_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/maintenance-task-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  71 => 21,  65 => 20,  61 => 19,  56 => 18,  52 => 17,  46 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a list of maintenance tasks to perform.*/
/*  **/
/*  * Available variables:*/
/*  * - tasks: A list of maintenance tasks to perform. Each item in the list has*/
/*  *   the following variables:*/
/*  *   - item: The maintenance task.*/
/*  *   - attributes: HTML attributes for the maintenance task.*/
/*  *   - status: (optional) Text describing the status of the maintenance task,*/
/*  *     'active' or 'done'.*/
/*  *//* */
/* #}*/
/* <h2 class="visually-hidden">{{ 'Installation tasks'|t }}</h2>*/
/* <ol class="task-list">*/
/* {% for task in tasks %}*/
/*   <li{{ task.attributes }}>*/
/*     {{ task.item }}*/
/*     {% if task.status %}<span class="visually-hidden"> ({{ task.status }})</span>{% endif %}*/
/*   </li>*/
/* {% endfor %}*/
/* </ol>*/
/* */
