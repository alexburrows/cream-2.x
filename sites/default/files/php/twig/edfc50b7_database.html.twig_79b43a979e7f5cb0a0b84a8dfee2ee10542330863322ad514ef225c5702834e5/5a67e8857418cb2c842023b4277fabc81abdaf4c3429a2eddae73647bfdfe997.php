<?php

/* @webprofiler/Collector/database.html.twig */
class __TwigTemplate_17ff6358fa693c955cb5a83094e5bc602d43ed626322638ad19a73e8a422725c extends Twig_Template
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
        $__internal_0031d1462e96b490f7295379394e079748d8776b14106762939502e01fef576c = $this->env->getExtension("native_profiler");
        $__internal_0031d1462e96b490f7295379394e079748d8776b14106762939502e01fef576c->enter($__internal_0031d1462e96b490f7295379394e079748d8776b14106762939502e01fef576c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/database.html.twig"));

        $tags = array("block" => 1, "set" => 2, "if" => 7);
        $filters = array("t" => 3, "format" => 8, "default" => 29);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set', 'if'),
                array('t', 'format', 'default'),
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
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0031d1462e96b490f7295379394e079748d8776b14106762939502e01fef576c->leave($__internal_0031d1462e96b490f7295379394e079748d8776b14106762939502e01fef576c_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c7b92678657bdd604673c23a0f8ae9b4e92a7c5359545e9c7456d0d48d3df1f = $this->env->getExtension("native_profiler");
        $__internal_4c7b92678657bdd604673c23a0f8ae9b4e92a7c5359545e9c7456d0d48d3df1f->enter($__internal_4c7b92678657bdd604673c23a0f8ae9b4e92a7c5359545e9c7456d0d48d3df1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "database")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Database")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Database")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "colorCode", array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true));
        echo "</span>
        ";
        // line 7
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()) > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, sprintf("%0.2f ms", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array())), "html", null, true));
            echo "</span>
        ";
        }
        // line 10
        echo "    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("DB Queries")));
        echo "</b>
        <span>";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "querycount", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Query time")));
        echo "</b>
        <span>";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, sprintf("%0.2f ms", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "time", array())), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Default database")));
        echo "</b>
        <span>";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "database", array()), "driver", array()), "html", null, true));
        echo "://";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "database", array()), "host", array()), "html", null, true));
        echo ":";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "database", array()), "port", array()), "html", null, true));
        echo "
            /";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "database", array()), "database", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_4c7b92678657bdd604673c23a0f8ae9b4e92a7c5359545e9c7456d0d48d3df1f->leave($__internal_4c7b92678657bdd604673c23a0f8ae9b4e92a7c5359545e9c7456d0d48d3df1f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8db62bfc8414c319deb04f1d94e7dcd1c7e1300dce452b99d45b1fd404d1a56 = $this->env->getExtension("native_profiler");
        $__internal_c8db62bfc8414c319deb04f1d94e7dcd1c7e1300dce452b99d45b1fd404d1a56->enter($__internal_c8db62bfc8414c319deb04f1d94e7dcd1c7e1300dce452b99d45b1fd404d1a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <script id=\"database\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Database")));
        echo "</h2>

        <form class=\"panel__toolbar\">
            <div class=\"panel__filter--text\">
                <input id=\"edit-caller\" class=\"js--live-filter\" placeholder=\"";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Caller")));
        echo "\" type=\"text\"/>
                <label for=\"edit-caller\" class=\"panel__filter-label\">";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Caller")));
        echo "</label>
            </div>
            <div class=\"panel__filter--select\">
                <select id=\"edit-type\" class=\"js--live-filter\">
                    <option value=\"\">";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Any")));
        echo "</option>
                    <option value=\"select\">Select</option>
                    <option value=\"insert\">Insert</option>
                    <option value=\"update\">Update</option>
                    <option value=\"create\">Create</option>
                    <option value=\"delete\">Delete</option>
                </select>
                <label for=\"edit-type\" class=\"panel__filter-label\">";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Query type")));
        echo "</label>
            </div>
            <div class=\"panel__filter--select\">
                <select id=\"edit-hightlighted\" class=\"js--live-filter\">
                    <option value=\"\">";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Any")));
        echo "</option>
                    <option value=\"1\">";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Yes")));
        echo "</option>
                    <option value=\"0\">";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("No")));
        echo "</option>
                </select>
                <label for=\"edit-type\" class=\"panel__filter-label\">";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Slow queryes")));
        echo "</label>
            </div>
            <div class=\"panel__filter--select\">
                <select id=\"edit-database\" class=\"js--live-filter\">
                    <option value=\"\">";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Any")));
        echo "</option>
                    <% _.each(data.connections, function( item ){ %>
                        <option value=\"<%- item %>\"><%- item %></option>
                    <% }) %>
                </select>
                <label for=\"edit-database\" class=\"panel__filter-label\">";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Database")));
        echo "</label>
            </div>

            <div class=\"button--flat l-right js--code-toggle--global js--placeholder-visible\">";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Swap Placeholders")));
        echo "</div>

        </form>

        <% _.each( data.queries, function( item, key ){ %>
        <div class=\"panel__container<% if (item.time > data.query_highlight_threshold) { %> is--hightlighted <% } %>\"
             data-wp-caller=\"<%- item.caller.class != null ? item.caller.class.toLowerCase() : '' %>\"
             data-wp-database=\"<%- item.database %>\"
             data-wp-type=\"<%- item.type %>\"
             data-wp-hightlighted=\"<%- (item.time > data.query_highlight_threshold) ? '1' : '0' %>\">
            <div class=\"panel__expand-header \">
                    <pre <% if( item.query_args) { %> class=\"js--code-target\"<% } %> >
                        <code class=\"sql js--placeholder-query\">
                            <%- item.query %>
                        </code>
                        <% if( item.query_args) { %>
                        <code class=\"sql js--clipboard-target is--hidden js--original-query\">
                            <%- item.query_args %>
                        </code>
                        <% } %>
                    </pre>
                <ul class=\"list--inline\">
                    <li><b>";
        // line 94
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Time")));
        echo "</b>: <%- Drupal.webprofiler.helpers.printTime(item.time) %></li>
                    <li><b>";
        // line 95
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Caller")));
        echo "</b>: <%= Drupal.webprofiler.helpers.classLink({\"file\" : item.caller.file,
                        \"class\" : item.caller.class, \"line\" : item.caller.line, \"method\" : item.caller.function}) %>
                    </li>
                    <li><b>";
        // line 98
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Database")));
        echo "</b>: <%- item.database %></li>
                    <li><b>";
        // line 99
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Target")));
        echo "</b>: <%- item.target %></li>
                </ul>

                <% if(item.query_args){ %>
                <div class=\"button--flat l-right js--code-toggle\">";
        // line 103
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Swap Placeholders")));
        echo "</div>
                <% } %>
                <% if(item.args){ %>
                <div class=\"button--flat l-right js--panel-toggle\">";
        // line 106
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Info")));
        echo "</div>
                <% } %>
                <!--div class=\"button--flat l-right js--clipboard-trigger\">";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Copy Query")));
        echo "</div-->
                <% if(item.explain){ %>
                <div class=\"button--flat l-right js--explain-trigger\"
                     data-wp-queryPosition=\"<%- key %>\"
                        >";
        // line 112
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Explain")));
        echo "</div>
                <% } %>
            </div>

            <% if(item.explain){ %>
            <div class=\"loader--linear js--loader\" style=\"display: none\">
                <div class=\"loader__bar\"></div>
                <div class=\"loader__bar\"></div>
                <div class=\"loader__bar\"></div>
            </div>
            <div class=\"panel__expand-content js--explain-target\"></div>
            <% } %>

            <% if(item.args){ %>
            <div class=\"panel__expand-content\">
                <div class=\"wp-query-arguments\">
                    <table class=\"table--duo\">
                        <thead>
                        <tr>
                            <th>";
        // line 131
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("placeholder")));
        echo "</th>
                            <th>";
        // line 132
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("value")));
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        <% _.each( item.args, function( item, key ){ %>
                        <tr>
                            <td><%- key %></td>
                            <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                        </tr>
                        <% }); %>
                        </tbody>
                    </table>
                </div>
            </div>
            <% } %>
        </div>
        <% }); %>
    </script>
    <script id=\"wp-query-explain-template\" type=\"text/template\">
        <table class=\"table--compact\">
            <thead>
            <tr>
                <% _.each(rc.data[1], function(value, key, list) { %>
                <th><%= key %></th>
                <% }); %>
            </tr>
            </thead>
            <% _.each(rc.data, function(value) { %>
            <tr>
                <% _.each(value, function(value2, key, list) { %>
                <td><%= value2 %></td>
                <% }); %>
            </tr>
            <% }); %>
        </table>
    </script>
";
        
        $__internal_c8db62bfc8414c319deb04f1d94e7dcd1c7e1300dce452b99d45b1fd404d1a56->leave($__internal_c8db62bfc8414c319deb04f1d94e7dcd1c7e1300dce452b99d45b1fd404d1a56_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/database.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  332 => 132,  328 => 131,  306 => 112,  299 => 108,  294 => 106,  288 => 103,  281 => 99,  277 => 98,  271 => 95,  267 => 94,  242 => 72,  236 => 69,  228 => 64,  221 => 60,  216 => 58,  212 => 57,  208 => 56,  201 => 52,  191 => 45,  184 => 41,  180 => 40,  173 => 36,  170 => 35,  164 => 34,  154 => 30,  150 => 29,  146 => 27,  140 => 24,  132 => 23,  128 => 22,  122 => 19,  118 => 18,  112 => 15,  108 => 14,  105 => 13,  102 => 12,  98 => 10,  92 => 8,  90 => 7,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 34,  50 => 33,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'database'}) }}" title="{{ 'Database'|t }}">*/
/*         <img width="20" height="28" alt="{{ 'Database'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         <span class="sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-{{ collector.colorCode }}">{{ collector.querycount }}</span>*/
/*         {% if collector.querycount > 0 %}*/
/*             <span class="sf-toolbar-info-piece-additional-detail">in {{ '%0.2f ms'|format(collector.time) }}</span>*/
/*         {% endif %}*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'DB Queries'|t }}</b>*/
/*         <span>{{ collector.querycount }}</span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Query time'|t }}</b>*/
/*         <span>{{ '%0.2f ms'|format(collector.time) }}</span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Default database'|t }}</b>*/
/*         <span>{{ collector.database.driver }}://{{ collector.database.host }}:{{ collector.database.port }}*/
/*             /{{ collector.database.database }}</span>*/
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
/*     <script id="database" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Database'|t }}</h2>*/
/* */
/*         <form class="panel__toolbar">*/
/*             <div class="panel__filter--text">*/
/*                 <input id="edit-caller" class="js--live-filter" placeholder="{{ 'Caller'|t }}" type="text"/>*/
/*                 <label for="edit-caller" class="panel__filter-label">{{ 'Caller'|t }}</label>*/
/*             </div>*/
/*             <div class="panel__filter--select">*/
/*                 <select id="edit-type" class="js--live-filter">*/
/*                     <option value="">{{ 'Any'|t }}</option>*/
/*                     <option value="select">Select</option>*/
/*                     <option value="insert">Insert</option>*/
/*                     <option value="update">Update</option>*/
/*                     <option value="create">Create</option>*/
/*                     <option value="delete">Delete</option>*/
/*                 </select>*/
/*                 <label for="edit-type" class="panel__filter-label">{{ 'Query type'|t }}</label>*/
/*             </div>*/
/*             <div class="panel__filter--select">*/
/*                 <select id="edit-hightlighted" class="js--live-filter">*/
/*                     <option value="">{{ 'Any'|t }}</option>*/
/*                     <option value="1">{{ 'Yes'|t }}</option>*/
/*                     <option value="0">{{ 'No'|t }}</option>*/
/*                 </select>*/
/*                 <label for="edit-type" class="panel__filter-label">{{ 'Slow queryes'|t }}</label>*/
/*             </div>*/
/*             <div class="panel__filter--select">*/
/*                 <select id="edit-database" class="js--live-filter">*/
/*                     <option value="">{{ 'Any'|t }}</option>*/
/*                     <% _.each(data.connections, function( item ){ %>*/
/*                         <option value="<%- item %>"><%- item %></option>*/
/*                     <% }) %>*/
/*                 </select>*/
/*                 <label for="edit-database" class="panel__filter-label">{{ 'Database'|t }}</label>*/
/*             </div>*/
/* */
/*             <div class="button--flat l-right js--code-toggle--global js--placeholder-visible">{{ 'Swap Placeholders'|t }}</div>*/
/* */
/*         </form>*/
/* */
/*         <% _.each( data.queries, function( item, key ){ %>*/
/*         <div class="panel__container<% if (item.time > data.query_highlight_threshold) { %> is--hightlighted <% } %>"*/
/*              data-wp-caller="<%- item.caller.class != null ? item.caller.class.toLowerCase() : '' %>"*/
/*              data-wp-database="<%- item.database %>"*/
/*              data-wp-type="<%- item.type %>"*/
/*              data-wp-hightlighted="<%- (item.time > data.query_highlight_threshold) ? '1' : '0' %>">*/
/*             <div class="panel__expand-header ">*/
/*                     <pre <% if( item.query_args) { %> class="js--code-target"<% } %> >*/
/*                         <code class="sql js--placeholder-query">*/
/*                             <%- item.query %>*/
/*                         </code>*/
/*                         <% if( item.query_args) { %>*/
/*                         <code class="sql js--clipboard-target is--hidden js--original-query">*/
/*                             <%- item.query_args %>*/
/*                         </code>*/
/*                         <% } %>*/
/*                     </pre>*/
/*                 <ul class="list--inline">*/
/*                     <li><b>{{ 'Time'|t }}</b>: <%- Drupal.webprofiler.helpers.printTime(item.time) %></li>*/
/*                     <li><b>{{ 'Caller'|t }}</b>: <%= Drupal.webprofiler.helpers.classLink({"file" : item.caller.file,*/
/*                         "class" : item.caller.class, "line" : item.caller.line, "method" : item.caller.function}) %>*/
/*                     </li>*/
/*                     <li><b>{{ 'Database'|t }}</b>: <%- item.database %></li>*/
/*                     <li><b>{{ 'Target'|t }}</b>: <%- item.target %></li>*/
/*                 </ul>*/
/* */
/*                 <% if(item.query_args){ %>*/
/*                 <div class="button--flat l-right js--code-toggle">{{ 'Swap Placeholders'|t }}</div>*/
/*                 <% } %>*/
/*                 <% if(item.args){ %>*/
/*                 <div class="button--flat l-right js--panel-toggle">{{ 'Info'|t }}</div>*/
/*                 <% } %>*/
/*                 <!--div class="button--flat l-right js--clipboard-trigger">{{ 'Copy Query'|t }}</div-->*/
/*                 <% if(item.explain){ %>*/
/*                 <div class="button--flat l-right js--explain-trigger"*/
/*                      data-wp-queryPosition="<%- key %>"*/
/*                         >{{ 'Explain'|t }}</div>*/
/*                 <% } %>*/
/*             </div>*/
/* */
/*             <% if(item.explain){ %>*/
/*             <div class="loader--linear js--loader" style="display: none">*/
/*                 <div class="loader__bar"></div>*/
/*                 <div class="loader__bar"></div>*/
/*                 <div class="loader__bar"></div>*/
/*             </div>*/
/*             <div class="panel__expand-content js--explain-target"></div>*/
/*             <% } %>*/
/* */
/*             <% if(item.args){ %>*/
/*             <div class="panel__expand-content">*/
/*                 <div class="wp-query-arguments">*/
/*                     <table class="table--duo">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>{{ 'placeholder'|t }}</th>*/
/*                             <th>{{ 'value'|t }}</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         <% _.each( item.args, function( item, key ){ %>*/
/*                         <tr>*/
/*                             <td><%- key %></td>*/
/*                             <td><%= Drupal.webprofiler.helpers.frm(item) %></td>*/
/*                         </tr>*/
/*                         <% }); %>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*             <% } %>*/
/*         </div>*/
/*         <% }); %>*/
/*     </script>*/
/*     <script id="wp-query-explain-template" type="text/template">*/
/*         <table class="table--compact">*/
/*             <thead>*/
/*             <tr>*/
/*                 <% _.each(rc.data[1], function(value, key, list) { %>*/
/*                 <th><%= key %></th>*/
/*                 <% }); %>*/
/*             </tr>*/
/*             </thead>*/
/*             <% _.each(rc.data, function(value) { %>*/
/*             <tr>*/
/*                 <% _.each(value, function(value2, key, list) { %>*/
/*                 <td><%= value2 %></td>*/
/*                 <% }); %>*/
/*             </tr>*/
/*             <% }); %>*/
/*         </table>*/
/*     </script>*/
/* {% endblock %}*/
/* */
