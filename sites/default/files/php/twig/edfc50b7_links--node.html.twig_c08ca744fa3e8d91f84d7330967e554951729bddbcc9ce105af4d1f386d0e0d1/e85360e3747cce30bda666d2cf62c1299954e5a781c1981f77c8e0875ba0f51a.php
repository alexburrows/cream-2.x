<?php

/* core/themes/classy/templates/content/links--node.html.twig */
class __TwigTemplate_25788eb03102230ad8c6875bb01fd2e869cd2a8600b6760dfc70d548bdac5b0d extends Twig_Template
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
        $__internal_bc95f610d10fe35bf437ac219e689d3830fb99e38ac224bf6fccdc0fd0e42aad = $this->env->getExtension("native_profiler");
        $__internal_bc95f610d10fe35bf437ac219e689d3830fb99e38ac224bf6fccdc0fd0e42aad->enter($__internal_bc95f610d10fe35bf437ac219e689d3830fb99e38ac224bf6fccdc0fd0e42aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content/links--node.html.twig"));

        $tags = array("if" => 37, "include" => 39);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'include'),
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

        // line 37
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 38
            echo "  <div class=\"node__links\">
    ";
            // line 39
            $this->loadTemplate("links.html.twig", "core/themes/classy/templates/content/links--node.html.twig", 39)->display($context);
            // line 40
            echo "  </div>
";
        }
        
        $__internal_bc95f610d10fe35bf437ac219e689d3830fb99e38ac224bf6fccdc0fd0e42aad->leave($__internal_bc95f610d10fe35bf437ac219e689d3830fb99e38ac224bf6fccdc0fd0e42aad_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/links--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 40,  51 => 39,  48 => 38,  46 => 37,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display node links.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Attributes for the UL containing the list of links.*/
/*  * - links: Links to be output.*/
/*  *   Each link will have the following elements:*/
/*  *   - title: The link text.*/
/*  *   - href: The link URL. If omitted, the 'title' is shown as a plain text*/
/*  *     item in the links list. If 'href' is supplied, the entire link is passed*/
/*  *     to l() as its $options parameter.*/
/*  *   - attributes: (optional) HTML attributes for the anchor, or for the <span>*/
/*  *     tag if no 'href' is supplied.*/
/*  *   - link_key: The link CSS class.*/
/*  * - heading: (optional) A heading to precede the links.*/
/*  *   - text: The heading text.*/
/*  *   - level: The heading level (e.g. 'h2', 'h3').*/
/*  *   - attributes: (optional) A keyed list of attributes for the heading.*/
/*  *   If the heading is a string, it will be used as the text of the heading and*/
/*  *   the level will default to 'h2'.*/
/*  **/
/*  *   Headings should be used on navigation menus and any list of links that*/
/*  *   consistently appears on multiple pages. To make the heading invisible use*/
/*  *   the 'visually-hidden' CSS class. Do not use 'display:none', which*/
/*  *   removes it from screen readers and assistive technology. Headings allow*/
/*  *   screen reader and keyboard only users to navigate to or skip the links.*/
/*  *   See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  *   http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @see template_preprocess_links()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if links %}*/
/*   <div class="node__links">*/
/*     {% include "links.html.twig" %}*/
/*   </div>*/
/* {% endif %}*/
/* */
