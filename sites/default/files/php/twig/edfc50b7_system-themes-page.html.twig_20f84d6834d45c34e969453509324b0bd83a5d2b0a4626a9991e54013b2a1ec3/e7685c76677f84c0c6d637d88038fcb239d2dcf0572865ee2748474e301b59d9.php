<?php

/* core/themes/stable/templates/admin/system-themes-page.html.twig */
class __TwigTemplate_bd356d961b27a63c9f8ad7bda12f200ead823f997f9f9adc7181fe593d8c745d extends Twig_Template
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
        $__internal_0a3d960a771b76951fe5cb40e393031ec704e4671be16af2cdd6287684e0c432 = $this->env->getExtension("native_profiler");
        $__internal_0a3d960a771b76951fe5cb40e393031ec704e4671be16af2cdd6287684e0c432->enter($__internal_0a3d960a771b76951fe5cb40e393031ec704e4671be16af2cdd6287684e0c432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/system-themes-page.html.twig"));

        $tags = array("for" => 32, "set" => 34, "if" => 52);
        $filters = array("safe_join" => 59);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('safe_join'),
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

        // line 31
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme_groups"]) ? $context["theme_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 33
            echo "    ";
            // line 34
            $context["theme_group_classes"] = array(0 => "system-themes-list", 1 => ("system-themes-list-" . $this->getAttribute(            // line 36
$context["theme_group"], "state", array())), 2 => "clearfix");
            // line 40
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["theme_group"], "attributes", array()), "addClass", array(0 => (isset($context["theme_group_classes"]) ? $context["theme_group_classes"] : null)), "method"), "html", null, true));
            echo ">
      <h2 class=\"system-themes-list__header\">";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme_group"], "title", array()), "html", null, true));
            echo "</h2>
      ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme_group"], "themes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 43
                echo "        ";
                // line 44
                $context["theme_classes"] = array(0 => (($this->getAttribute(                // line 45
$context["theme"], "is_default", array())) ? ("theme-default") : ("")), 1 => (($this->getAttribute(                // line 46
$context["theme"], "is_admin", array())) ? ("theme-admin") : ("")), 2 => "theme-selector", 3 => "clearfix");
                // line 51
                echo "        <div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["theme"], "attributes", array()), "addClass", array(0 => (isset($context["theme_classes"]) ? $context["theme_classes"] : null)), "method"), "html", null, true));
                echo ">
          ";
                // line 52
                if ($this->getAttribute($context["theme"], "screenshot", array())) {
                    // line 53
                    echo "            ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "screenshot", array()), "html", null, true));
                    echo "
          ";
                }
                // line 55
                echo "          <div class=\"theme-info\">
            <h3 class=\"theme-info__header\">";
                // line 57
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "version", array()), "html", null, true));
                // line 58
                if ($this->getAttribute($context["theme"], "notes", array())) {
                    // line 59
                    echo "                (";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, $this->getAttribute($context["theme"], "notes", array()), ", ")));
                    echo ")";
                }
                // line 61
                echo "</h3>
            <div class=\"theme-info__description\">";
                // line 62
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "description", array()), "html", null, true));
                echo "</div>
            ";
                // line 64
                echo "            ";
                if ($this->getAttribute($context["theme"], "incompatible", array())) {
                    // line 65
                    echo "              <div class=\"incompatible\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "incompatible", array()), "html", null, true));
                    echo "</div>
            ";
                } else {
                    // line 67
                    echo "              ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["theme"], "operations", array()), "html", null, true));
                    echo "
            ";
                }
                // line 69
                echo "          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>
";
        
        $__internal_0a3d960a771b76951fe5cb40e393031ec704e4671be16af2cdd6287684e0c432->leave($__internal_0a3d960a771b76951fe5cb40e393031ec704e4671be16af2cdd6287684e0c432_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 74,  136 => 72,  128 => 69,  122 => 67,  116 => 65,  113 => 64,  109 => 62,  106 => 61,  101 => 59,  99 => 58,  95 => 57,  92 => 55,  86 => 53,  84 => 52,  79 => 51,  77 => 46,  76 => 45,  75 => 44,  73 => 43,  69 => 42,  65 => 41,  60 => 40,  58 => 36,  57 => 34,  55 => 33,  51 => 32,  46 => 31,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for the Appearance page.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the main container.*/
/*  * - theme_groups: A list of theme groups. Each theme group contains:*/
/*  *   - attributes: HTML attributes specific to this theme group.*/
/*  *   - title: Title for the theme group.*/
/*  *   - state: State of the theme group, e.g. installed or uninstalled.*/
/*  *   - themes: A list of themes within the theme group. Each theme contains:*/
/*  *     - attributes: HTML attributes specific to this theme.*/
/*  *     - screenshot: A screenshot representing the theme.*/
/*  *     - description: Description of the theme.*/
/*  *     - name: Theme name.*/
/*  *     - version: The theme's version number.*/
/*  *     - is_default: Boolean indicating whether the theme is the default theme*/
/*  *       or not.*/
/*  *     - is_admin: Boolean indicating whether the theme is the admin theme or*/
/*  *       not.*/
/*  *     - notes: Identifies what context this theme is being used in, e.g.,*/
/*  *       default theme, admin theme.*/
/*  *     - incompatible: Text describing any compatibility issues.*/
/*  *     - operations: A list of operation links, e.g., Settings, Enable, Disable,*/
/*  *       etc. these links should only be displayed if the theme is compatible.*/
/*  **/
/*  * @see template_preprocess_system_themes_page()*/
/*  *//* */
/* #}*/
/* <div{{ attributes }}>*/
/*   {% for theme_group in theme_groups %}*/
/*     {%*/
/*       set theme_group_classes = [*/
/*         'system-themes-list',*/
/*         'system-themes-list-' ~ theme_group.state,*/
/*         'clearfix',*/
/*       ]*/
/*     %}*/
/*     <div{{ theme_group.attributes.addClass(theme_group_classes) }}>*/
/*       <h2 class="system-themes-list__header">{{ theme_group.title }}</h2>*/
/*       {% for theme in theme_group.themes %}*/
/*         {%*/
/*           set theme_classes = [*/
/*             theme.is_default ? 'theme-default',*/
/*             theme.is_admin ? 'theme-admin',*/
/*             'theme-selector',*/
/*             'clearfix',*/
/*           ]*/
/*         %}*/
/*         <div{{ theme.attributes.addClass(theme_classes) }}>*/
/*           {% if theme.screenshot %}*/
/*             {{ theme.screenshot }}*/
/*           {% endif %}*/
/*           <div class="theme-info">*/
/*             <h3 class="theme-info__header">*/
/*               {{- theme.name }} {{ theme.version -}}*/
/*               {% if theme.notes %}*/
/*                 ({{ theme.notes|safe_join(', ') }})*/
/*               {%- endif -%}*/
/*             </h3>*/
/*             <div class="theme-info__description">{{ theme.description }}</div>*/
/*             {# Display operation links if the theme is compatible. #}*/
/*             {% if theme.incompatible %}*/
/*               <div class="incompatible">{{ theme.incompatible }}</div>*/
/*             {% else %}*/
/*               {{ theme.operations }}*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
