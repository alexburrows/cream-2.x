<?php

/* @webprofiler/Collector/views.html.twig */
class __TwigTemplate_95eea0f090741e4664fe358a6b0772b25fdcaaa216261df85952dd5d394d592f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a57a1063bfe0de1836e36b8c81664bad90aa90359f6d4be4e875377869b64e8 = $this->env->getExtension("native_profiler");
        $__internal_1a57a1063bfe0de1836e36b8c81664bad90aa90359f6d4be4e875377869b64e8->enter($__internal_1a57a1063bfe0de1836e36b8c81664bad90aa90359f6d4be4e875377869b64e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/views.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 18);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set'),
                array('t', 'default'),
                array('url')
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
        $this->displayBlock('toolbar', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1a57a1063bfe0de1836e36b8c81664bad90aa90359f6d4be4e875377869b64e8->leave($__internal_1a57a1063bfe0de1836e36b8c81664bad90aa90359f6d4be4e875377869b64e8_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9549bb27faeb3b9a15fd59c57ce90494c9d20e4e8310508f97b43cc4ac6c292 = $this->env->getExtension("native_profiler");
        $__internal_c9549bb27faeb3b9a15fd59c57ce90494c9d20e4e8310508f97b43cc4ac6c292->enter($__internal_c9549bb27faeb3b9a15fd59c57ce90494c9d20e4e8310508f97b43cc4ac6c292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "views")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Views")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Views")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getViewsCount", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Views")));
        echo "</b>
        <span>";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getViewsCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_c9549bb27faeb3b9a15fd59c57ce90494c9d20e4e8310508f97b43cc4ac6c292->leave($__internal_c9549bb27faeb3b9a15fd59c57ce90494c9d20e4e8310508f97b43cc4ac6c292_prof);

    }

    // line 23
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cac395fee65d5cee3a52744bcd7e594733f9b4dd624313b51089e5728a0cba1c = $this->env->getExtension("native_profiler");
        $__internal_cac395fee65d5cee3a52744bcd7e594733f9b4dd624313b51089e5728a0cba1c->enter($__internal_cac395fee65d5cee3a52744bcd7e594733f9b4dd624313b51089e5728a0cba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 24
        echo "    <script id=\"views\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Views")));
        echo "</h2>
        <div class=\"panel__container\">
            <% if( data.views.length != 0){ %>
            <table class=\"table--duo\">
                <thead>
                <tr>
                    <th>";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("name")));
        echo "</th>
                    <th>";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("display")));
        echo "</th>
                    <th>";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("build time")));
        echo "</th>
                    <th>";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("execute time")));
        echo "</th>
                    <th>";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("render time")));
        echo "</th>
                    <th>";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Action")));
        echo "</th>
                </tr>
                </thead>
                <tbody>
                <% _.each( data.views, function( item ){ %>
                <tr>
                    <td><%- item.id %></td>
                    <td><%- item.current_display %></td>
                    <td><%- Drupal.webprofiler.helpers.printTime(item.build_time) %></td>
                    <td><%- Drupal.webprofiler.helpers.printTime(item.execute_time) %></td>
                    <td><%- Drupal.webprofiler.helpers.printTime(item.render_time) %></td>
                    <td><a href=\"<%- item.route %>\">";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Edit")));
        echo "</a></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
            <% } else { %>
            <p>";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("No results")));
        echo "</p>
            <% } %>
        </div>

    </script>
";
        
        $__internal_cac395fee65d5cee3a52744bcd7e594733f9b4dd624313b51089e5728a0cba1c->leave($__internal_cac395fee65d5cee3a52744bcd7e594733f9b4dd624313b51089e5728a0cba1c_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/views.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 53,  177 => 47,  163 => 36,  159 => 35,  155 => 34,  151 => 33,  147 => 32,  143 => 31,  134 => 25,  131 => 24,  125 => 23,  115 => 19,  111 => 18,  107 => 16,  101 => 13,  97 => 12,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 23,  50 => 22,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'views'}) }}" title="{{ 'Views'|t }}">*/
/*         <img width="20" height="28" alt="{{ 'Views'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         <span class="sf-toolbar-info-piece-additional sf-toolbar-status">{{ collector.getViewsCount }}</span>*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/* */
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Views'|t }}</b>*/
/*         <span>{{ collector.getViewsCount }}</span>*/
/*     </div>*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="views" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Views'|t }}</h2>*/
/*         <div class="panel__container">*/
/*             <% if( data.views.length != 0){ %>*/
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>{{ 'name'|t }}</th>*/
/*                     <th>{{ 'display'|t }}</th>*/
/*                     <th>{{ 'build time'|t }}</th>*/
/*                     <th>{{ 'execute time'|t }}</th>*/
/*                     <th>{{ 'render time'|t }}</th>*/
/*                     <th>{{ 'Action'|t }}</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( data.views, function( item ){ %>*/
/*                 <tr>*/
/*                     <td><%- item.id %></td>*/
/*                     <td><%- item.current_display %></td>*/
/*                     <td><%- Drupal.webprofiler.helpers.printTime(item.build_time) %></td>*/
/*                     <td><%- Drupal.webprofiler.helpers.printTime(item.execute_time) %></td>*/
/*                     <td><%- Drupal.webprofiler.helpers.printTime(item.render_time) %></td>*/
/*                     <td><a href="<%- item.route %>">{{ 'Edit'|t }}</a></td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*             <% } else { %>*/
/*             <p>{{ 'No results'|t }}</p>*/
/*             <% } %>*/
/*         </div>*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
