<?php

/* core/themes/classy/templates/form/field-multiple-value-form.html.twig */
class __TwigTemplate_e4bfdca5ae844fdec72917f512a3f69271860782fcd3666952a3eb61c81a29dc extends Twig_Template
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
        $__internal_2743ccbee1311b03fa3218a670121cafa53d29d42fe91f0fcd82b1f904d64751 = $this->env->getExtension("native_profiler");
        $__internal_2743ccbee1311b03fa3218a670121cafa53d29d42fe91f0fcd82b1f904d64751->enter($__internal_2743ccbee1311b03fa3218a670121cafa53d29d42fe91f0fcd82b1f904d64751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/field-multiple-value-form.html.twig"));

        $tags = array("if" => 22, "for" => 33);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 22
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 23
            echo "  <div class=\"js-form-item form-item\">
    ";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true));
            echo "
    ";
            // line 25
            if ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array())) {
                // line 26
                echo "      <div";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => "description"), "method"), "html", null, true));
                echo " >";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
                echo "</div>
    ";
            }
            // line 28
            echo "    ";
            if ((isset($context["button"]) ? $context["button"] : null)) {
                // line 29
                echo "      <div class=\"clearfix\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["button"]) ? $context["button"] : null), "html", null, true));
                echo "</div>
    ";
            }
            // line 31
            echo "  </div>
";
        } else {
            // line 33
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 34
                echo "    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["element"], "html", null, true));
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2743ccbee1311b03fa3218a670121cafa53d29d42fe91f0fcd82b1f904d64751->leave($__internal_2743ccbee1311b03fa3218a670121cafa53d29d42fe91f0fcd82b1f904d64751_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/field-multiple-value-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  78 => 33,  74 => 31,  68 => 29,  65 => 28,  57 => 26,  55 => 25,  51 => 24,  48 => 23,  46 => 22,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an individual form element.*/
/*  **/
/*  * Available variables for all fields:*/
/*  * - multiple: Whether there are multiple instances of the field.*/
/*  **/
/*  * Available variables for single cardinality fields:*/
/*  * - elements: Form elements to be rendered.*/
/*  **/
/*  * Available variables when there are multiple fields.*/
/*  * - table: Table of field items.*/
/*  * - description: The description element containing the following properties:*/
/*  *   - content: The description content of the form element.*/
/*  *   - attributes: HTML attributes to apply to the description container.*/
/*  * - button: "Add another item" button.*/
/*  **/
/*  * @see template_preprocess_field_multiple_value_form()*/
/*  *//* */
/* #}*/
/* {% if multiple %}*/
/*   <div class="js-form-item form-item">*/
/*     {{ table }}*/
/*     {% if description.content %}*/
/*       <div{{ description.attributes.addClass('description') }} >{{ description.content }}</div>*/
/*     {% endif %}*/
/*     {% if button %}*/
/*       <div class="clearfix">{{ button }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% else %}*/
/*   {% for element in elements %}*/
/*     {{ element }}*/
/*   {% endfor %}*/
/* {% endif %}*/
/* */
