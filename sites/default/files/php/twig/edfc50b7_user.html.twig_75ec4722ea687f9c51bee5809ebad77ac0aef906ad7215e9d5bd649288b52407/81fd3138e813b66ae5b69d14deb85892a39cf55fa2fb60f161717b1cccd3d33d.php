<?php

/* @webprofiler/Collector/user.html.twig */
class __TwigTemplate_65cdef1dfa716182a48edcbfb64007d52bf0bd5d854bee81031c78edcaeac5ac extends Twig_Template
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
        $__internal_61f1b325f3a95ac5ec974deadd2cdf9822471c6fe4fec70b54d70269629afa5d = $this->env->getExtension("native_profiler");
        $__internal_61f1b325f3a95ac5ec974deadd2cdf9822471c6fe4fec70b54d70269629afa5d->enter($__internal_61f1b325f3a95ac5ec974deadd2cdf9822471c6fe4fec70b54d70269629afa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/user.html.twig"));

        $tags = array("block" => 1, "set" => 2, "if" => 8);
        $filters = array("t" => 4, "join" => 22, "default" => 34);
        $functions = array("url" => 4);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set', 'if'),
                array('t', 'join', 'default'),
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
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_61f1b325f3a95ac5ec974deadd2cdf9822471c6fe4fec70b54d70269629afa5d->leave($__internal_61f1b325f3a95ac5ec974deadd2cdf9822471c6fe4fec70b54d70269629afa5d_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea95d907798238d2c1a19689d6a60e63e69da085654ba45bc10e2a557e1624f3 = $this->env->getExtension("native_profiler");
        $__internal_ea95d907798238d2c1a19689d6a60e63e69da085654ba45bc10e2a557e1624f3->enter($__internal_ea95d907798238d2c1a19689d6a60e63e69da085654ba45bc10e2a557e1624f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        $context["color_code"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "authenticated", array())) ? ("green") : ("red"));
        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "user")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("User")));
        echo "\">
        <img width=\"24\" height=\"28\" alt=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("User")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_code"]) ? $context["color_code"] : null), "html", null, true));
        echo "\">
            ";
        // line 8
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "authenticated", array())) {
            // line 9
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "username", array()), "html", null, true));
            echo "
            ";
        }
        // line 11
        echo "        </span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "authenticated", array())) {
            // line 16
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Logged in as")));
            echo "</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["color_code"]) ? $context["color_code"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "username", array()), "html", null, true));
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Roles")));
            echo "</b>
            <span>";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "roles", array()), ", "), "html", null, true));
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Authenticated by")));
            echo "</b>
            <span>";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "provider", array()), "html", null, true));
            echo "</span>
        </div>
    ";
        } else {
            // line 29
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "anonymous", array()), "html", null, true));
            echo "
    ";
        }
        // line 31
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_ea95d907798238d2c1a19689d6a60e63e69da085654ba45bc10e2a557e1624f3->leave($__internal_ea95d907798238d2c1a19689d6a60e63e69da085654ba45bc10e2a557e1624f3_prof);

    }

    // line 39
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8be54e4cb89666345f7035e4207195a0838493988d422a505f894c5a5febadd8 = $this->env->getExtension("native_profiler");
        $__internal_8be54e4cb89666345f7035e4207195a0838493988d422a505f894c5a5febadd8->enter($__internal_8be54e4cb89666345f7035e4207195a0838493988d422a505f894c5a5febadd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 40
        echo "    <script id=\"user\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("User")));
        echo "</h2>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <tr>
                    <th>";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Name")));
        echo "</th>
                    <td><%- data.name %></td>
                </tr>
                <tr>
                    <th>";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Authenticated")));
        echo "</th>
                    <td><%- data.authenticated %></td>
                </tr>
                <tr>
                    <th>";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Provider")));
        echo "</th>
                    <td><%- data.provider %></td>
                </tr>
                <tr>
                    <th>";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Roles")));
        echo "</th>
                    <td><%- data.roles.join(', ') %></td>
                </tr>
            </table>
        </div>
    </script>
";
        
        $__internal_8be54e4cb89666345f7035e4207195a0838493988d422a505f894c5a5febadd8->leave($__internal_8be54e4cb89666345f7035e4207195a0838493988d422a505f894c5a5febadd8_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 57,  202 => 53,  195 => 49,  188 => 45,  181 => 41,  178 => 40,  172 => 39,  162 => 35,  158 => 34,  154 => 32,  151 => 31,  145 => 29,  139 => 26,  135 => 25,  129 => 22,  125 => 21,  117 => 18,  113 => 17,  110 => 16,  107 => 15,  104 => 14,  99 => 11,  93 => 9,  91 => 8,  87 => 7,  83 => 6,  79 => 5,  72 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 39,  50 => 38,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set color_code = (collector.authenticated) ? 'green' : 'red' %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'user'}) }}" title="{{ 'User'|t }}">*/
/*         <img width="24" height="28" alt="{{ 'User'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         <span class="sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-{{ color_code }}">*/
/*             {% if collector.authenticated %}*/
/*                 {{ collector.username }}*/
/*             {% endif %}*/
/*         </span>*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*     {% if collector.authenticated %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>{{ 'Logged in as'|t }}</b>*/
/*             <span class="sf-toolbar-status sf-toolbar-status-{{ color_code }}">{{ collector.username }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>{{ 'Roles'|t }}</b>*/
/*             <span>{{ collector.roles|join(', ') }}</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>{{ 'Authenticated by'|t }}</b>*/
/*             <span>{{ collector.provider }}</span>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ collector.anonymous }}*/
/*     {% endif %}*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="user" type="text/template">*/
/*         <h2 class="panel__title">{{ 'User'|t }}</h2>*/
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <tr>*/
/*                     <th>{{ 'Name'|t }}</th>*/
/*                     <td><%- data.name %></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>{{ 'Authenticated'|t }}</th>*/
/*                     <td><%- data.authenticated %></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>{{ 'Provider'|t }}</th>*/
/*                     <td><%- data.provider %></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>{{ 'Roles'|t }}</th>*/
/*                     <td><%- data.roles.join(', ') %></td>*/
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/*     </script>*/
/* {% endblock %}*/
/* */
