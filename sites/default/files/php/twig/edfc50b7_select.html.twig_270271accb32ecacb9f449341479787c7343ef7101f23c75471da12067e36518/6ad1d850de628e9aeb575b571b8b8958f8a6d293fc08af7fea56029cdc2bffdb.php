<?php

/* core/themes/classy/templates/form/select.html.twig */
class __TwigTemplate_699beffd01a2d3e32738432d028fd68a05945439c262f4bd947abc6a9e22601a extends Twig_Template
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
        $__internal_67854883f544354bad34bb0f166f3baf7bc7efe295ccfc52dd76be573fc6966e = $this->env->getExtension("native_profiler");
        $__internal_67854883f544354bad34bb0f166f3baf7bc7efe295ccfc52dd76be573fc6966e->enter($__internal_67854883f544354bad34bb0f166f3baf7bc7efe295ccfc52dd76be573fc6966e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/select.html.twig"));

        $tags = array("spaceless" => 13, "for" => 15, "if" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'for', 'if'),
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

        // line 13
        ob_start();
        // line 14
        echo "  <select";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 16
            echo "      ";
            if (($this->getAttribute($context["option"], "type", array()) == "optgroup")) {
                // line 17
                echo "        <optgroup label=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["option"], "label", array()), "html", null, true));
                echo "\">
          ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "options", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 19
                    echo "            <option value=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["sub_option"], "value", array()), "html", null, true));
                    echo "\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute($context["sub_option"], "selected", array())) ? (" selected=\"selected\"") : (""))));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["sub_option"], "label", array()), "html", null, true));
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "        </optgroup>
      ";
            } elseif (($this->getAttribute(            // line 22
$context["option"], "type", array()) == "option")) {
                // line 23
                echo "        <option value=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((($this->getAttribute($context["option"], "selected", array())) ? (" selected=\"selected\"") : (""))));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["option"], "label", array()), "html", null, true));
                echo "</option>
      ";
            }
            // line 25
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </select>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_67854883f544354bad34bb0f166f3baf7bc7efe295ccfc52dd76be573fc6966e->leave($__internal_67854883f544354bad34bb0f166f3baf7bc7efe295ccfc52dd76be573fc6966e_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  97 => 25,  87 => 23,  85 => 22,  82 => 21,  69 => 19,  65 => 18,  60 => 17,  57 => 16,  53 => 15,  48 => 14,  46 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a select element.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the select tag.*/
/*  * - options: The option element children.*/
/*  **/
/*  * @see template_preprocess_select()*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   <select{{ attributes }}>*/
/*     {% for option in options %}*/
/*       {% if option.type == 'optgroup' %}*/
/*         <optgroup label="{{ option.label }}">*/
/*           {% for sub_option in option.options %}*/
/*             <option value="{{ sub_option.value }}"{{ sub_option.selected ? ' selected="selected"' }}>{{ sub_option.label }}</option>*/
/*           {% endfor %}*/
/*         </optgroup>*/
/*       {% elseif option.type == 'option' %}*/
/*         <option value="{{ option.value }}"{{ option.selected ? ' selected="selected"' }}>{{ option.label }}</option>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*   </select>*/
/* {% endspaceless %}*/
/* */
