<?php

/* modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_loader.html.twig */
class __TwigTemplate_90dda221c59c2e0c8492de6255b8f702f592e9b5d07ef1f79d55ac8b1a27a648 extends Twig_Template
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
        $__internal_61f4981f0f71d61e608e77115329e3ab3ec3db1dff26a77c04092b41e2a1197a = $this->env->getExtension("native_profiler");
        $__internal_61f4981f0f71d61e608e77115329e3ab3ec3db1dff26a77c04092b41e2a1197a->enter($__internal_61f4981f0f71d61e608e77115329e3ab3ec3db1dff26a77c04092b41e2a1197a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_loader.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div id=\"webprofiler";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true));
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>

<script>
    Webprofiler = (function () {
        \"use strict\";

        var key = 'webprofiler/profiler/',

                getPreference = function (name) {
                    if (!window.localStorage) {
                        return null;
                    }

                    return localStorage.getItem(key + name);
                },

                setPreference = function (name, value) {
                    if (!window.localStorage) {
                        return null;
                    }

                    localStorage.setItem(key + name, value);
                    return true;
                },

                load = function () {
                    ajax('";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["profiler_url"]) ? $context["profiler_url"] : null), "html", null, true));
        echo "', function (result) {
                        var toolbar = document.getElementById('webprofiler";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true));
        echo "');
                        toolbar.innerHTML = result;
                        toolbar.style.display = 'block';

                        if (getPreference('toolbar/displayState') == 'none') {
                            document.getElementById('sfToolbarMainContent-";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true));
        echo "').style.display = 'none';
                            document.getElementById('sfToolbarClearer-";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true));
        echo "').style.display = 'none';
                            document.getElementById('sfMiniToolbar-";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true));
        echo "').style.display = 'block';
                        } else {
                            document.getElementById('sfToolbarMainContent-";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true));
        echo "').style.display = 'block';
                            document.getElementById('sfToolbarClearer-";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true));
        echo "').style.display = 'block';
                            document.getElementById('sfMiniToolbar-";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true));
        echo "').style.display = 'none';
                        }

                        var arr = toolbar.getElementsByTagName('script');
                        for (var n = 0; n < arr.length; n++) {
                            eval(arr[n].innerHTML);
                        }
                    });
                },

                ajax = function (url, callback, data) {
                    try {
                        var x = new (XMLHttpRequest || ActiveXObject)('MSXML2.XMLHTTP.3.0');
                        x.open(data ? 'POST' : 'GET', url, 1);
                        x.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                        x.setRequestHeader('Content-type', 'application/json');
                        x.onreadystatechange = function () {
                            x.readyState > 3 && x.status === 200 && callback && callback(x.responseText, x);
                        };
                        x.send(data);
                    } catch (e) {
                        window.console && console.log(e);
                    }
                };

        return {
            getPreference: getPreference,
            setPreference: setPreference,
            load: load,
            ajax: ajax
        }
    })();

    Webprofiler.load();
</script>
";
        
        $__internal_61f4981f0f71d61e608e77115329e3ab3ec3db1dff26a77c04092b41e2a1197a->leave($__internal_61f4981f0f71d61e608e77115329e3ab3ec3db1dff26a77c04092b41e2a1197a_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/devel/webprofiler/templates/Profiler/webprofiler_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  105 => 38,  101 => 37,  96 => 35,  92 => 34,  88 => 33,  80 => 28,  76 => 27,  46 => 1,);
    }
}
/* <div id="webprofiler{{ token }}" class="sf-toolbar" style="display: none"></div>*/
/* */
/* <script>*/
/*     Webprofiler = (function () {*/
/*         "use strict";*/
/* */
/*         var key = 'webprofiler/profiler/',*/
/* */
/*                 getPreference = function (name) {*/
/*                     if (!window.localStorage) {*/
/*                         return null;*/
/*                     }*/
/* */
/*                     return localStorage.getItem(key + name);*/
/*                 },*/
/* */
/*                 setPreference = function (name, value) {*/
/*                     if (!window.localStorage) {*/
/*                         return null;*/
/*                     }*/
/* */
/*                     localStorage.setItem(key + name, value);*/
/*                     return true;*/
/*                 },*/
/* */
/*                 load = function () {*/
/*                     ajax('{{ profiler_url }}', function (result) {*/
/*                         var toolbar = document.getElementById('webprofiler{{ token }}');*/
/*                         toolbar.innerHTML = result;*/
/*                         toolbar.style.display = 'block';*/
/* */
/*                         if (getPreference('toolbar/displayState') == 'none') {*/
/*                             document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';*/
/*                             document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';*/
/*                             document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';*/
/*                         } else {*/
/*                             document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';*/
/*                             document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';*/
/*                             document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'none';*/
/*                         }*/
/* */
/*                         var arr = toolbar.getElementsByTagName('script');*/
/*                         for (var n = 0; n < arr.length; n++) {*/
/*                             eval(arr[n].innerHTML);*/
/*                         }*/
/*                     });*/
/*                 },*/
/* */
/*                 ajax = function (url, callback, data) {*/
/*                     try {*/
/*                         var x = new (XMLHttpRequest || ActiveXObject)('MSXML2.XMLHTTP.3.0');*/
/*                         x.open(data ? 'POST' : 'GET', url, 1);*/
/*                         x.setRequestHeader('X-Requested-With', 'XMLHttpRequest');*/
/*                         x.setRequestHeader('Content-type', 'application/json');*/
/*                         x.onreadystatechange = function () {*/
/*                             x.readyState > 3 && x.status === 200 && callback && callback(x.responseText, x);*/
/*                         };*/
/*                         x.send(data);*/
/*                     } catch (e) {*/
/*                         window.console && console.log(e);*/
/*                     }*/
/*                 };*/
/* */
/*         return {*/
/*             getPreference: getPreference,*/
/*             setPreference: setPreference,*/
/*             load: load,*/
/*             ajax: ajax*/
/*         }*/
/*     })();*/
/* */
/*     Webprofiler.load();*/
/* </script>*/
/* */
