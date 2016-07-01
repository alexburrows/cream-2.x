<?php

/* @webprofiler/Collector/forms.html.twig */
class __TwigTemplate_fdc54070d3fd52bd3cdb696d686b124ac65354ef58c9744b77a869f8eeb132b3 extends Twig_Template
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
        $__internal_6ad8af78105fd2fadb2565a41bc5e4e832af1f723b44f925578b6c2cfd11b784 = $this->env->getExtension("native_profiler");
        $__internal_6ad8af78105fd2fadb2565a41bc5e4e832af1f723b44f925578b6c2cfd11b784->enter($__internal_6ad8af78105fd2fadb2565a41bc5e4e832af1f723b44f925578b6c2cfd11b784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/forms.html.twig"));

        $tags = array("block" => 1, "set" => 2, "spaceless" => 10, "for" => 12);
        $filters = array("t" => 3, "raw" => 14, "default" => 22);
        $functions = array("url" => 3, "idelink" => 14, "abbr" => 14);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set', 'spaceless', 'for'),
                array('t', 'raw', 'default'),
                array('url', 'idelink', 'abbr')
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
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6ad8af78105fd2fadb2565a41bc5e4e832af1f723b44f925578b6c2cfd11b784->leave($__internal_6ad8af78105fd2fadb2565a41bc5e4e832af1f723b44f925578b6c2cfd11b784_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5353d7a9baf4aa9d770b886d15119d84cadd966bf624a7b9e7ec71c4d81fa5ca = $this->env->getExtension("native_profiler");
        $__internal_5353d7a9baf4aa9d770b886d15119d84cadd966bf624a7b9e7ec71c4d81fa5ca->enter($__internal_5353d7a9baf4aa9d770b886d15119d84cadd966bf624a7b9e7ec71c4d81fa5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "forms")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Forms")));
        echo "\">
        <img width=\"21\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Forms")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\">
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getFormsCount", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getForms", array()));
        foreach ($context['_seq'] as $context["keys"] => $context["form"]) {
            // line 13
            echo "                <b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["keys"], "html", null, true));
            echo "</b>
                <div><a href=\"";
            // line 14
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('native_profiler')->getIdeLink($this->getAttribute($this->getAttribute($context["form"], "class", array()), "file", array()), $this->getAttribute($this->getAttribute($context["form"], "class", array()), "line", array()))));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('native_profiler')->getAbbr($this->getAttribute($this->getAttribute($context["form"], "class", array()), "class", array()))));
            echo "
                        ::";
            // line 15
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["form"], "class", array()), "method", array()), "html", null, true));
            echo "</a></div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 19
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_5353d7a9baf4aa9d770b886d15119d84cadd966bf624a7b9e7ec71c4d81fa5ca->leave($__internal_5353d7a9baf4aa9d770b886d15119d84cadd966bf624a7b9e7ec71c4d81fa5ca_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c341756e9ea514002af724dd6fe65b68195ede6928bb8e42efa2dd6bb45e1fe = $this->env->getExtension("native_profiler");
        $__internal_5c341756e9ea514002af724dd6fe65b68195ede6928bb8e42efa2dd6bb45e1fe->enter($__internal_5c341756e9ea514002af724dd6fe65b68195ede6928bb8e42efa2dd6bb45e1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"forms\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Forms")));
        echo "</h2>
        <% if( data.forms && data.forms.length != 0){ %>
            <% _.each( data.forms, function( item, key ){ %>
                <div class=\"panel__container\">

                    <ul class=\"list--inline\">
                        <li><b>ID</b> <%= key %></li>
                        <li><b>class</b> <%= Drupal.webprofiler.helpers.classLink(item.class) %></li>
                    </ul>

                    <table class=\"table--compact\">
                        <thead>
                        <tr>
                            <th>";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("form")));
        echo "</th>
                            <th>";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("title")));
        echo "</th>
                            <th>";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("access")));
        echo "</th>
                            <th>";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("type")));
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        <% _.each( item.form, function( value , key ){ %>
                        <tr>
                            <td><%= key %></td>
                            <td><% if(value['#title'] == null ){ %> ";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("-"));
        echo " <% } else { %> <%= value['#title'] %><% } %></td>
                            <td><% if(value['#access'] == null ){ %> ";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("null"));
        echo " <% } else { %> <%= value['#access'] %><% } %></td>
                            <td><% if(value['#type'] == null ){ %> ";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("null"));
        echo " <% } else { %> <%= value['#type'] %><% } %></td>
                        </tr>
                        <% }); %>
                        </tbody>
                    </table>
                </div>
            <% }); %>
        <% } else { %>
            <div class=\"panel__container\">
                <p>";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("No results")));
        echo "</p>
            </div>
        <% } %>
    </script>
";
        
        $__internal_5c341756e9ea514002af724dd6fe65b68195ede6928bb8e42efa2dd6bb45e1fe->leave($__internal_5c341756e9ea514002af724dd6fe65b68195ede6928bb8e42efa2dd6bb45e1fe_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/forms.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  214 => 63,  202 => 54,  198 => 53,  194 => 52,  184 => 45,  180 => 44,  176 => 43,  172 => 42,  156 => 29,  153 => 28,  147 => 27,  137 => 23,  133 => 22,  129 => 20,  126 => 19,  122 => 17,  114 => 15,  108 => 14,  103 => 13,  99 => 12,  96 => 11,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 27,  50 => 26,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'forms'}) }}" title="{{ 'Forms'|t }}">*/
/*         <img width="21" height="28" alt="{{ 'Forms'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}">*/
/*         <span class="sf-toolbar-info-piece-additional sf-toolbar-status">{{ collector.getFormsCount }}</span>*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*     {% spaceless %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             {% for keys, form in collector.getForms %}*/
/*                 <b>{{ keys }}</b>*/
/*                 <div><a href="{{ idelink(form.class.file, form.class.line)|raw }}">{{ abbr(form.class.class)|raw }}*/
/*                         ::{{ form.class.method }}</a></div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="forms" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Forms'|t }}</h2>*/
/*         <% if( data.forms && data.forms.length != 0){ %>*/
/*             <% _.each( data.forms, function( item, key ){ %>*/
/*                 <div class="panel__container">*/
/* */
/*                     <ul class="list--inline">*/
/*                         <li><b>ID</b> <%= key %></li>*/
/*                         <li><b>class</b> <%= Drupal.webprofiler.helpers.classLink(item.class) %></li>*/
/*                     </ul>*/
/* */
/*                     <table class="table--compact">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>{{ 'form'|t }}</th>*/
/*                             <th>{{ 'title'|t }}</th>*/
/*                             <th>{{ 'access'|t }}</th>*/
/*                             <th>{{ 'type'|t }}</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         <% _.each( item.form, function( value , key ){ %>*/
/*                         <tr>*/
/*                             <td><%= key %></td>*/
/*                             <td><% if(value['#title'] == null ){ %> {{ '-' }} <% } else { %> <%= value['#title'] %><% } %></td>*/
/*                             <td><% if(value['#access'] == null ){ %> {{ 'null' }} <% } else { %> <%= value['#access'] %><% } %></td>*/
/*                             <td><% if(value['#type'] == null ){ %> {{ 'null' }} <% } else { %> <%= value['#type'] %><% } %></td>*/
/*                         </tr>*/
/*                         <% }); %>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             <% }); %>*/
/*         <% } else { %>*/
/*             <div class="panel__container">*/
/*                 <p>{{ 'No results'|t }}</p>*/
/*             </div>*/
/*         <% } %>*/
/*     </script>*/
/* {% endblock %}*/
/* */
