<?php

/* core/themes/bartik/templates/status-messages.html.twig */
class __TwigTemplate_ba01017a273d83e341d20a04d26b7575d161783eb2632f38ab6e5ad0fa37ae43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/misc/status-messages.html.twig", "core/themes/bartik/templates/status-messages.html.twig", 1);
        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/misc/status-messages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e515a8fcc91384eed64e9db1d421fae09a5915a13caf1f518852ab4ac9e9d2d8 = $this->env->getExtension("native_profiler");
        $__internal_e515a8fcc91384eed64e9db1d421fae09a5915a13caf1f518852ab4ac9e9d2d8->enter($__internal_e515a8fcc91384eed64e9db1d421fae09a5915a13caf1f518852ab4ac9e9d2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/status-messages.html.twig"));

        $tags = array("if" => 24);
        $filters = array();
        $functions = array("attach_library" => 25);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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
        
        $__internal_e515a8fcc91384eed64e9db1d421fae09a5915a13caf1f518852ab4ac9e9d2d8->leave($__internal_e515a8fcc91384eed64e9db1d421fae09a5915a13caf1f518852ab4ac9e9d2d8_prof);

    }

    // line 23
    public function block_messages($context, array $blocks = array())
    {
        $__internal_211d534ab40714a50fcb6b4dd2b4104141407f1a67a5b52a29a86c3b2d51b04f = $this->env->getExtension("native_profiler");
        $__internal_211d534ab40714a50fcb6b4dd2b4104141407f1a67a5b52a29a86c3b2d51b04f->enter($__internal_211d534ab40714a50fcb6b4dd2b4104141407f1a67a5b52a29a86c3b2d51b04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 24
        echo "  ";
        if ( !twig_test_empty((isset($context["message_list"]) ? $context["message_list"] : null))) {
            // line 25
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("bartik/messages"), "html", null, true));
            echo "
    <div class=\"messages__wrapper layout-container\">
      ";
            // line 27
            $this->displayParentBlock("messages", $context, $blocks);
            echo "
    </div>
  ";
        }
        
        $__internal_211d534ab40714a50fcb6b4dd2b4104141407f1a67a5b52a29a86c3b2d51b04f->leave($__internal_211d534ab40714a50fcb6b4dd2b4104141407f1a67a5b52a29a86c3b2d51b04f_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 25,  64 => 24,  58 => 23,  11 => 1,);
    }
}
/* {% extends "@classy/misc/status-messages.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for status messages.*/
/*  **/
/*  * Displays status, error, and warning messages, grouped by type.*/
/*  **/
/*  * An invisible heading identifies the messages for assistive technology.*/
/*  * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html*/
/*  * for info.*/
/*  **/
/*  * Add an ARIA label to the contentinfo area so that assistive technology*/
/*  * user agents will better describe this landmark.*/
/*  **/
/*  * Available variables:*/
/*  * - message_list: List of messages to be displayed, grouped by type.*/
/*  * - status_headings: List of all status types.*/
/*  * - display: (optional) May have a value of 'status' or 'error' when only*/
/*  *   displaying messages of that specific type.*/
/*  *//* */
/* #}*/
/* {% block messages %}*/
/*   {% if message_list is not empty %}*/
/*     {{ attach_library('bartik/messages') }}*/
/*     <div class="messages__wrapper layout-container">*/
/*       {{ parent() }}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endblock messages %}*/
/* */
