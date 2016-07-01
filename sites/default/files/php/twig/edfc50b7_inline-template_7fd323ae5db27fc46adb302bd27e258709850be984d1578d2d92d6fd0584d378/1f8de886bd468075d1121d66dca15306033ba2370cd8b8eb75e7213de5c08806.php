<?php

/* {# inline_template_start #}{{ items | safe_join(separator) }} */
class __TwigTemplate_6a27047eeba00af1c60ff2f4c59e9e614903a38f7c90d62ed5441a2edb82b31b extends Twig_Template
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
        $__internal_0fe4c83a08a23f3f3c6c89d19dbeb2af0c2a955e5549df008f129cf6c7a6afaa = $this->env->getExtension("native_profiler");
        $__internal_0fe4c83a08a23f3f3c6c89d19dbeb2af0c2a955e5549df008f129cf6c7a6afaa->enter($__internal_0fe4c83a08a23f3f3c6c89d19dbeb2af0c2a955e5549df008f129cf6c7a6afaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}{{ items | safe_join(separator) }}"));

        $tags = array();
        $filters = array("safe_join" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["items"]) ? $context["items"] : null), (isset($context["separator"]) ? $context["separator"] : null))));
        
        $__internal_0fe4c83a08a23f3f3c6c89d19dbeb2af0c2a955e5549df008f129cf6c7a6afaa->leave($__internal_0fe4c83a08a23f3f3c6c89d19dbeb2af0c2a955e5549df008f129cf6c7a6afaa_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ items | safe_join(separator) }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }
}
/* {# inline_template_start #}{{ items | safe_join(separator) }}*/
