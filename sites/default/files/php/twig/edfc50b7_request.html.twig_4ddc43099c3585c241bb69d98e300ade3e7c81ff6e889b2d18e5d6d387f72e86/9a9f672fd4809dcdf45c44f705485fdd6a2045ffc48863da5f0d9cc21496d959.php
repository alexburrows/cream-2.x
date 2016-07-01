<?php

/* @webprofiler/Collector/request.html.twig */
class __TwigTemplate_241657b2e77664e7c4e28525e029f70b9a3576ba928eaa86f2b80175422b2f0a extends Twig_Template
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
        $__internal_407533e784f78f1d6134fa84c1fa3cb1daac210e8b1cc9fa431cf7290133d352 = $this->env->getExtension("native_profiler");
        $__internal_407533e784f78f1d6134fa84c1fa3cb1daac210e8b1cc9fa431cf7290133d352->enter($__internal_407533e784f78f1d6134fa84c1fa3cb1daac210e8b1cc9fa431cf7290133d352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/request.html.twig"));

        $tags = array("block" => 1, "set" => 2, "spaceless" => 21);
        $filters = array("raw" => 3, "t" => 12, "default" => 38);
        $functions = array("idelink" => 3, "abbr" => 3, "url" => 12);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set', 'spaceless'),
                array('raw', 't', 'default'),
                array('idelink', 'abbr', 'url')
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
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_407533e784f78f1d6134fa84c1fa3cb1daac210e8b1cc9fa431cf7290133d352->leave($__internal_407533e784f78f1d6134fa84c1fa3cb1daac210e8b1cc9fa431cf7290133d352_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_944c487b7437148096ffac0f280cd3a370fcdf520b3ee62d2614057ddb68317b = $this->env->getExtension("native_profiler");
        $__internal_944c487b7437148096ffac0f280cd3a370fcdf520b3ee62d2614057ddb68317b->enter($__internal_944c487b7437148096ffac0f280cd3a370fcdf520b3ee62d2614057ddb68317b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('native_profiler')->getIdeLink($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "file", array()), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "line", array()))));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('native_profiler')->getAbbr($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "class", array()))));
        echo "
        ::";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "method", array()), "html", null, true));
        echo "</a>
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 6
        echo "
    ";
        // line 7
        $context["request_status_code_color"] = (((400 > $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()))) ? ((((200 == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()))) ? ("green") : ("yellow"))) : ("red"));
        // line 8
        echo "
    ";
        // line 9
        $context["request_route"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "route", array())) ? ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "route", array())) : ("NONE"));
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "request")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Request")));
        echo "\">
        <img width=\"28\" height=\"28\" alt=\"";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Request")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\">
    <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : null), "html", null, true));
        echo "\"
          title=\"";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statustext", array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "
    ";
        // line 20
        ob_start();
        // line 21
        echo "    ";
        ob_start();
        // line 22
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Status")));
        echo "</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()), "html", null, true));
        echo "</span> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statustext", array()), "html", null, true));
        echo "
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Controller")));
        echo "</b>
            ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : null), "html", null, true));
        echo "
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Route name")));
        echo "</b>
            <span>";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["request_route"]) ? $context["request_route"] : null), "html", null, true));
        echo "</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 35
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_944c487b7437148096ffac0f280cd3a370fcdf520b3ee62d2614057ddb68317b->leave($__internal_944c487b7437148096ffac0f280cd3a370fcdf520b3ee62d2614057ddb68317b_prof);

    }

    // line 43
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56b6fb51d8d7300ba79c803f8cbbb1f7ea5f97dd3e9007d77477946d819cd7a1 = $this->env->getExtension("native_profiler");
        $__internal_56b6fb51d8d7300ba79c803f8cbbb1f7ea5f97dd3e9007d77477946d819cd7a1->enter($__internal_56b6fb51d8d7300ba79c803f8cbbb1f7ea5f97dd3e9007d77477946d819cd7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        echo "    <script id=\"request\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Request")));
        echo "</h2>

        <% if (!_.isEmpty(data.request_query)) { %>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("GET Parameters")));
        echo "</th>
                <th>";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Value")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_query, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%- item %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <% } %>

        <% if (!_.isEmpty(data.request_request)) { %>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 70
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("POST Parameters")));
        echo "</th>
                <th>";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Value")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_request, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <% } %>

        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Attributes")));
        echo "</th>
                <th>";
        // line 89
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Value")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_attributes, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>

                    <% if(key == '_controller') { %>
                    <td><%= Drupal.webprofiler.helpers.classLink(data.controller) %></td>
                    <% } else { %>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                    <% } %>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>

        <% if (!_.isEmpty(data.request_cookies)) { %>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 111
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Cookies")));
        echo "</th>
                <th>";
        // line 112
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Value")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_cookies, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <% } %>

        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 129
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Request headers")));
        echo "</th>
                <th>";
        // line 130
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Value")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_headers, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>

        <% if (!_.isEmpty(data.content)) { %>
        <div class=\"panel__container\">
            <div class=\"h--word-broken\"><%- data.content %></div>
        </div>
        <% } %>

        <% if (!_.isEmpty(data.access_check)) { %>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 153
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Path")));
        echo "</th>
                <th>";
        // line 154
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Access check")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each(data.access_check, function(items, key){ %>
                <tr>
                    <td><%- key %></td>
                    <td>
                        <% _.each(items, function(item){ %>
                        <%- item.service_id %>
                        <% }); %>
                    </td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <% } %>

        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 175
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Server Parameters")));
        echo "</th>
                <th>";
        // line 176
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Value")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_server, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>

        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 192
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Response headers")));
        echo "</th>
                <th>";
        // line 193
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Value")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.response_headers, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
    </script>
";
        
        $__internal_56b6fb51d8d7300ba79c803f8cbbb1f7ea5f97dd3e9007d77477946d819cd7a1->leave($__internal_56b6fb51d8d7300ba79c803f8cbbb1f7ea5f97dd3e9007d77477946d819cd7a1_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/request.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  394 => 193,  390 => 192,  371 => 176,  367 => 175,  343 => 154,  339 => 153,  313 => 130,  309 => 129,  289 => 112,  285 => 111,  260 => 89,  256 => 88,  236 => 71,  232 => 70,  211 => 52,  207 => 51,  198 => 45,  195 => 44,  189 => 43,  179 => 39,  175 => 38,  171 => 36,  168 => 35,  162 => 32,  158 => 31,  152 => 28,  148 => 27,  138 => 24,  134 => 23,  131 => 22,  128 => 21,  126 => 20,  123 => 19,  115 => 16,  111 => 15,  107 => 14,  103 => 13,  96 => 12,  94 => 11,  91 => 10,  89 => 9,  86 => 8,  84 => 7,  81 => 6,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 43,  50 => 42,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set request_handler %}*/
/*     <a href="{{ idelink(collector.controller.file, collector.controller.line)|raw }}">{{ abbr(collector.controller.class)|raw }}*/
/*         ::{{ collector.controller.method }}</a>*/
/*     {% endset %}*/
/* */
/*     {% set request_status_code_color = (400 > collector.statuscode) ? ((200 == collector.statuscode) ? 'green' : 'yellow') : 'red' %}*/
/* */
/*     {% set request_route = collector.route ? collector.route : 'NONE' %}*/
/* */
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'request'}) }}" title="{{ 'Request'|t }}">*/
/*         <img width="28" height="28" alt="{{ 'Request'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}">*/
/*     <span class="sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}"*/
/*           title="{{ collector.statustext }}">{{ collector.statuscode }}</span>*/
/*     </a>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*     {% spaceless %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>{{ 'Status'|t }}</b>*/
/*             <span class="sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}">{{ collector.statuscode }}</span> {{ collector.statustext }}*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>{{ 'Controller'|t }}</b>*/
/*             {{ request_handler }}*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>{{ 'Route name'|t }}</b>*/
/*             <span>{{ request_route }}</span>*/
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
/*     <script id="request" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Request'|t }}</h2>*/
/* */
/*         <% if (!_.isEmpty(data.request_query)) { %>*/
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <th>{{ 'GET Parameters'|t }}</th>*/
/*                 <th>{{ 'Value'|t }}</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( data.request_query, function( item, key ){ %>*/
/*                 <tr>*/
/*                     <td><%- key %></td>*/
/*                     <td><%- item %></td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         <% } %>*/
/* */
/*         <% if (!_.isEmpty(data.request_request)) { %>*/
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <th>{{ 'POST Parameters'|t }}</th>*/
/*                 <th>{{ 'Value'|t }}</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( data.request_request, function( item, key ){ %>*/
/*                 <tr>*/
/*                     <td><%- key %></td>*/
/*                     <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         <% } %>*/
/* */
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <th>{{ 'Attributes'|t }}</th>*/
/*                 <th>{{ 'Value'|t }}</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( data.request_attributes, function( item, key ){ %>*/
/*                 <tr>*/
/*                     <td><%- key %></td>*/
/* */
/*                     <% if(key == '_controller') { %>*/
/*                     <td><%= Drupal.webprofiler.helpers.classLink(data.controller) %></td>*/
/*                     <% } else { %>*/
/*                     <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                     <% } %>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* */
/*         <% if (!_.isEmpty(data.request_cookies)) { %>*/
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <th>{{ 'Cookies'|t }}</th>*/
/*                 <th>{{ 'Value'|t }}</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( data.request_cookies, function( item, key ){ %>*/
/*                 <tr>*/
/*                     <td><%- key %></td>*/
/*                     <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         <% } %>*/
/* */
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <th>{{ 'Request headers'|t }}</th>*/
/*                 <th>{{ 'Value'|t }}</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( data.request_headers, function( item, key ){ %>*/
/*                 <tr>*/
/*                     <td><%- key %></td>*/
/*                     <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* */
/*         <% if (!_.isEmpty(data.content)) { %>*/
/*         <div class="panel__container">*/
/*             <div class="h--word-broken"><%- data.content %></div>*/
/*         </div>*/
/*         <% } %>*/
/* */
/*         <% if (!_.isEmpty(data.access_check)) { %>*/
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <th>{{ 'Path'|t }}</th>*/
/*                 <th>{{ 'Access check'|t }}</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each(data.access_check, function(items, key){ %>*/
/*                 <tr>*/
/*                     <td><%- key %></td>*/
/*                     <td>*/
/*                         <% _.each(items, function(item){ %>*/
/*                         <%- item.service_id %>*/
/*                         <% }); %>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         <% } %>*/
/* */
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <th>{{ 'Server Parameters'|t }}</th>*/
/*                 <th>{{ 'Value'|t }}</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( data.request_server, function( item, key ){ %>*/
/*                 <tr>*/
/*                     <td><%- key %></td>*/
/*                     <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/* */
/*         <div class="panel__container">*/
/*             <table class="table--duo">*/
/*                 <thead>*/
/*                 <th>{{ 'Response headers'|t }}</th>*/
/*                 <th>{{ 'Value'|t }}</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 <% _.each( data.response_headers, function( item, key ){ %>*/
/*                 <tr>*/
/*                     <td><%- key %></td>*/
/*                     <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                 </tr>*/
/*                 <% }); %>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </script>*/
/* {% endblock %}*/
/* */
