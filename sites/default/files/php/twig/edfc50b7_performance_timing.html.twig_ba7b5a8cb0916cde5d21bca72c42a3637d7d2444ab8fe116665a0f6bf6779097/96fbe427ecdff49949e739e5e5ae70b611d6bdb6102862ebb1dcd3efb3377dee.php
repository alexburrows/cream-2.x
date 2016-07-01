<?php

/* @webprofiler/Collector/performance_timing.html.twig */
class __TwigTemplate_2fc4d90941560fe271cc0281b9ffd1affb7420e5a422211282c702217a7a3591 extends Twig_Template
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
        $__internal_cf441fee9a76aa67c7728bc74adfc284aa682f1132ea4b08902ca92d92587fae = $this->env->getExtension("native_profiler");
        $__internal_cf441fee9a76aa67c7728bc74adfc284aa682f1132ea4b08902ca92d92587fae->enter($__internal_cf441fee9a76aa67c7728bc74adfc284aa682f1132ea4b08902ca92d92587fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/performance_timing.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 4, "default" => 35);
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
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cf441fee9a76aa67c7728bc74adfc284aa682f1132ea4b08902ca92d92587fae->leave($__internal_cf441fee9a76aa67c7728bc74adfc284aa682f1132ea4b08902ca92d92587fae_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac475561a90921c4983d1c97add6ddd1f1215050b3a65200986861cbf91d7a61 = $this->env->getExtension("native_profiler");
        $__internal_ac475561a90921c4983d1c97add6ddd1f1215050b3a65200986861cbf91d7a61->enter($__internal_ac475561a90921c4983d1c97add6ddd1f1215050b3a65200986861cbf91d7a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "performance_timing")), "html", null, true));
        echo "\"
       title=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Performance Timing")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Performance Timing")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span id=\"wp--frontend__toolbar\"></span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("DNS lookup")));
        echo "</b>
        <span id=\"wp--frontend__dns\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("TCP handshake")));
        echo "</b>
        <span id=\"wp--frontend__tcp\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar("TTFB"));
        echo "</b>
        <span id=\"wp--frontend__ttfb\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Data download")));
        echo "</b>
        <span id=\"wp--frontend__data\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("DOM building")));
        echo "</b>
        <span id=\"wp--frontend__dom\"></span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>

    <script>
        var perf = performance.timing,
                dns = parseInt(perf.domainLookupEnd - perf.domainLookupStart),
                tcp = parseInt(perf.connectEnd - perf.connectStart),
                ttfb = parseInt(perf.responseStart - perf.connectEnd),
                data = parseInt(perf.responseEnd - perf.responseStart),
                dom = parseInt(perf.loadEventStart - perf.responseEnd);

        Webprofiler.ajax('";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.frontend.save", array("profile" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true));
        echo "', false, JSON.stringify(perf));

        document.getElementById('wp--frontend__toolbar').innerHTML = ttfb + ' ms';
        document.getElementById('wp--frontend__dns').innerHTML = dns + ' ms';
        document.getElementById('wp--frontend__tcp').innerHTML = tcp + ' ms';
        document.getElementById('wp--frontend__ttfb').innerHTML = ttfb + ' ms';
        document.getElementById('wp--frontend__data').innerHTML = data + ' ms';
        document.getElementById('wp--frontend__dom').innerHTML = dom + ' ms';
    </script>
";
        
        $__internal_ac475561a90921c4983d1c97add6ddd1f1215050b3a65200986861cbf91d7a61->leave($__internal_ac475561a90921c4983d1c97add6ddd1f1215050b3a65200986861cbf91d7a61_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0a402f02c21b8711d65107d22c55ee7556b5c6a2cdfb99b90c3e635d35c90a6 = $this->env->getExtension("native_profiler");
        $__internal_d0a402f02c21b8711d65107d22c55ee7556b5c6a2cdfb99b90c3e635d35c90a6->enter($__internal_d0a402f02c21b8711d65107d22c55ee7556b5c6a2cdfb99b90c3e635d35c90a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    <script id=\"performance_timing\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Performance timing")));
        echo "</h2>
        <div class=\"panel__container\">
            <% if(data.performance && data.performance.computed) { %>
                <table class=\"table--duo\">
                    <% _.each( data.performance.computed, function( item, key ){ %>
                    <tr>
                        <th><%- key %></th>
                        <td><%- Drupal.webprofiler.helpers.printTime(item) %></td>
                    </tr>
                    <% }); %>
                </table>
            <% } else { %>
                <p>";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("No collected data, maybe this profile hasn't been generated by a browser GET o has been generated by an unsupported browser.")));
        echo "</p>
            <% } %>
        </div>
    </script>
";
        
        $__internal_d0a402f02c21b8711d65107d22c55ee7556b5c6a2cdfb99b90c3e635d35c90a6->leave($__internal_d0a402f02c21b8711d65107d22c55ee7556b5c6a2cdfb99b90c3e635d35c90a6_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/performance_timing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 72,  179 => 60,  176 => 59,  170 => 58,  153 => 47,  139 => 36,  135 => 35,  131 => 33,  124 => 29,  117 => 25,  110 => 21,  103 => 17,  96 => 13,  92 => 11,  89 => 10,  82 => 6,  78 => 5,  74 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 58,  50 => 57,  48 => 1,);
    }
}
/* {% block toolbar %}*/
/*     {% set icon %}*/
/*     <a href="{{ url("webprofiler.dashboard", {profile: token}, {fragment: 'performance_timing'}) }}"*/
/*        title="{{ 'Performance Timing'|t }}">*/
/*         <img width="20" height="28" alt="{{ 'Performance Timing'|t }}"*/
/*              src="data:image/png;base64,{{ collector.icon }}"/>*/
/*         <span id="wp--frontend__toolbar"></span>*/
/*     </a>*/
/*     {% endset %}*/
/*     {% set text %}*/
/* */
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'DNS lookup'|t }}</b>*/
/*         <span id="wp--frontend__dns"></span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'TCP handshake'|t }}</b>*/
/*         <span id="wp--frontend__tcp"></span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'TTFB' }}</b>*/
/*         <span id="wp--frontend__ttfb"></span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'Data download'|t }}</b>*/
/*         <span id="wp--frontend__data"></span>*/
/*     </div>*/
/*     <div class="sf-toolbar-info-piece">*/
/*         <b>{{ 'DOM building'|t }}</b>*/
/*         <span id="wp--frontend__dom"></span>*/
/*     </div>*/
/*     {% endset %}*/
/* */
/*     <div class="sf-toolbar-block">*/
/*         <div class="sf-toolbar-icon">{{ icon|default('') }}</div>*/
/*         <div class="sf-toolbar-info">{{ text|default('') }}</div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         var perf = performance.timing,*/
/*                 dns = parseInt(perf.domainLookupEnd - perf.domainLookupStart),*/
/*                 tcp = parseInt(perf.connectEnd - perf.connectStart),*/
/*                 ttfb = parseInt(perf.responseStart - perf.connectEnd),*/
/*                 data = parseInt(perf.responseEnd - perf.responseStart),*/
/*                 dom = parseInt(perf.loadEventStart - perf.responseEnd);*/
/* */
/*         Webprofiler.ajax('{{ url("webprofiler.frontend.save", {profile: token}) }}', false, JSON.stringify(perf));*/
/* */
/*         document.getElementById('wp--frontend__toolbar').innerHTML = ttfb + ' ms';*/
/*         document.getElementById('wp--frontend__dns').innerHTML = dns + ' ms';*/
/*         document.getElementById('wp--frontend__tcp').innerHTML = tcp + ' ms';*/
/*         document.getElementById('wp--frontend__ttfb').innerHTML = ttfb + ' ms';*/
/*         document.getElementById('wp--frontend__data').innerHTML = data + ' ms';*/
/*         document.getElementById('wp--frontend__dom').innerHTML = dom + ' ms';*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <script id="performance_timing" type="text/template">*/
/*         <h2 class="panel__title">{{ 'Performance timing'|t }}</h2>*/
/*         <div class="panel__container">*/
/*             <% if(data.performance && data.performance.computed) { %>*/
/*                 <table class="table--duo">*/
/*                     <% _.each( data.performance.computed, function( item, key ){ %>*/
/*                     <tr>*/
/*                         <th><%- key %></th>*/
/*                         <td><%- Drupal.webprofiler.helpers.printTime(item) %></td>*/
/*                     </tr>*/
/*                     <% }); %>*/
/*                 </table>*/
/*             <% } else { %>*/
/*                 <p>{{ 'No collected data, maybe this profile hasn\'t been generated by a browser GET o has been generated by an unsupported browser.'|t }}</p>*/
/*             <% } %>*/
/*         </div>*/
/*     </script>*/
/* {% endblock %}*/
