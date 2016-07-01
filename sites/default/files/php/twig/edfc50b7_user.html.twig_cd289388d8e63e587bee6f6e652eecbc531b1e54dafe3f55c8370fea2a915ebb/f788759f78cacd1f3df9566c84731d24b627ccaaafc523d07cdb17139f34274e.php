<?php

/* core/themes/classy/templates/user/user.html.twig */
class __TwigTemplate_7b600c77031435003f49c5662cd6d8189fa586b13e5c0362ee09d99a2714d721 extends Twig_Template
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
        $__internal_7f0fd6a4700d782ec97321c67ba73617f024d128cddec28261ce14b88c8d0fbc = $this->env->getExtension("native_profiler");
        $__internal_7f0fd6a4700d782ec97321c67ba73617f024d128cddec28261ce14b88c8d0fbc->enter($__internal_7f0fd6a4700d782ec97321c67ba73617f024d128cddec28261ce14b88c8d0fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/user/user.html.twig"));

        $tags = array("if" => 20);
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

        // line 19
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true));
        echo ">
  ";
        // line 20
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        }
        // line 23
        echo "</article>
";
        
        $__internal_7f0fd6a4700d782ec97321c67ba73617f024d128cddec28261ce14b88c8d0fbc->leave($__internal_7f0fd6a4700d782ec97321c67ba73617f024d128cddec28261ce14b88c8d0fbc_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  53 => 21,  51 => 20,  46 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to present all user data.*/
/*  **/
/*  * This template is used when viewing a registered user's page,*/
/*  * e.g., example.com/user/123. 123 being the user's ID.*/
/*  **/
/*  * Available variables:*/
/*  * - content: A list of content items. Use 'content' to print all content, or*/
/*  *   print a subset such as 'content.field_example'. Fields attached to a user*/
/*  *   such as 'user_picture' are available as 'content.user_picture'.*/
/*  * - attributes: HTML attributes for the container element.*/
/*  * - user: A Drupal User entity.*/
/*  **/
/*  * @see template_preprocess_user()*/
/*  *//* */
/* #}*/
/* <article{{ attributes.addClass('profile') }}>*/
/*   {% if content %}*/
/*     {{- content -}}*/
/*   {% endif %}*/
/* </article>*/
/* */
