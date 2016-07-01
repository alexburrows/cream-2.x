<?php

/* core/themes/bartik/templates/maintenance-page.html.twig */
class __TwigTemplate_1b8ecc0131371bd8f8e65f8d83b874d5a88b0f6789c81620b455ce60ad9fdd21 extends Twig_Template
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
        $__internal_d2a6c453ad1ce4d8f8707ea05c5265aa5838fe820467fc2d282fdf9475c4e143 = $this->env->getExtension("native_profiler");
        $__internal_d2a6c453ad1ce4d8f8707ea05c5265aa5838fe820467fc2d282fdf9475c4e143->enter($__internal_d2a6c453ad1ce4d8f8707ea05c5265aa5838fe820467fc2d282fdf9475c4e143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/maintenance-page.html.twig"));

        $tags = array("if" => 15);
        $filters = array("t" => 20);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 11
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" role=\"banner\">
      <div class=\"section clearfix\">
        ";
        // line 15
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 16
            echo "          <div id=\"name-and-slogan\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(((((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null) && (isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null))) ? (" class=\"visually-hidden\"") : (""))));
            echo ">
            ";
            // line 17
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 18
                echo "              <div id=\"site-name\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) ? (" class=\"visually-hidden\"") : (""))));
                echo ">
                <strong>
                  <a href=\"";
                // line 20
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\"><span>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</span></a>
                </strong>
              </div>
            ";
            }
            // line 24
            echo "            ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 25
                echo "              <div id=\"site-slogan\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((((isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null)) ? (" class=\"visually-hidden\"") : (""))));
                echo ">
                ";
                // line 26
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 29
            echo "          </div>
        ";
        }
        // line 31
        echo "      </div>
    </header>
    <div id=\"main-wrapper\">
      <div id=\"main\" class=\"clearfix\">
        <main id=\"content\" class=\"column\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\"></a>
            ";
        // line 38
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 39
            echo "              <h1 class=\"title\" id=\"page-title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
            ";
        }
        // line 41
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
            ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "
          </section>
        </main>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_d2a6c453ad1ce4d8f8707ea05c5265aa5838fe820467fc2d282fdf9475c4e143->leave($__internal_d2a6c453ad1ce4d8f8707ea05c5265aa5838fe820467fc2d282fdf9475c4e143_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 42,  113 => 41,  107 => 39,  105 => 38,  96 => 31,  92 => 29,  86 => 26,  81 => 25,  78 => 24,  67 => 20,  61 => 18,  59 => 17,  54 => 16,  52 => 15,  46 => 11,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a single Drupal page while offline.*/
/*  **/
/*  * All available variables are mirrored in page.html.twig.*/
/*  **/
/*  * @see template_preprocess_maintenance_page()*/
/*  *//* */
/*  #}*/
/* <div id="page-wrapper">*/
/*   <div id="page">*/
/*     <header id="header" role="banner">*/
/*       <div class="section clearfix">*/
/*         {% if site_name or site_slogan %}*/
/*           <div id="name-and-slogan"{{ hide_site_name and hide_site_slogan ? ' class="visually-hidden"' }}>*/
/*             {% if site_name %}*/
/*               <div id="site-name"{{ hide_site_name ? ' class="visually-hidden"' }}>*/
/*                 <strong>*/
/*                   <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home"><span>{{ site_name }}</span></a>*/
/*                 </strong>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if site_slogan %}*/
/*               <div id="site-slogan"{{ hide_site_slogan ? ' class="visually-hidden"' }}>*/
/*                 {{ site_slogan }}*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </header>*/
/*     <div id="main-wrapper">*/
/*       <div id="main" class="clearfix">*/
/*         <main id="content" class="column" role="main">*/
/*           <section class="section">*/
/*             <a id="main-content"></a>*/
/*             {% if title %}*/
/*               <h1 class="title" id="page-title">{{ title }}</h1>*/
/*             {% endif %}*/
/*             {{ page.content }}*/
/*             {{ page.highlighted }}*/
/*           </section>*/
/*         </main>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
