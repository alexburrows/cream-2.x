<?php

/* core/themes/classy/templates/dataset/table.html.twig */
class __TwigTemplate_f80ea49d0d7526c760b2cd86e869919ea79d9a0b617dffb47f9b3cacc4a15636 extends Twig_Template
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
        $__internal_6e98c5402e4333367d32a768538d0ddbfdc92b3622827d4840680c104312ff10 = $this->env->getExtension("native_profiler");
        $__internal_6e98c5402e4333367d32a768538d0ddbfdc92b3622827d4840680c104312ff10->enter($__internal_6e98c5402e4333367d32a768538d0ddbfdc92b3622827d4840680c104312ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/dataset/table.html.twig"));

        $tags = array("if" => 43, "for" => 47, "set" => 64);
        $filters = array();
        $functions = array("cycle" => 81);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array(),
                array('cycle')
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

        // line 42
        echo "<table";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 43
        if ((isset($context["caption"]) ? $context["caption"] : null)) {
            // line 44
            echo "    <caption>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true));
            echo "</caption>
  ";
        }
        // line 46
        echo "
  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colgroups"]) ? $context["colgroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["colgroup"]) {
            // line 48
            echo "    ";
            if ($this->getAttribute($context["colgroup"], "cols", array())) {
                // line 49
                echo "      <colgroup";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["colgroup"], "attributes", array()), "html", null, true));
                echo ">
        ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["colgroup"], "cols", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 51
                    echo "          <col";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["col"], "attributes", array()), "html", null, true));
                    echo " />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "      </colgroup>
    ";
            } else {
                // line 55
                echo "      <colgroup";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["colgroup"], "attributes", array()), "html", null, true));
                echo " />
    ";
            }
            // line 57
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
  ";
        // line 59
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 60
            echo "    <thead>
      <tr>
        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 63
                echo "          ";
                // line 64
                $context["cell_classes"] = array(0 => (($this->getAttribute(                // line 65
$context["cell"], "active_table_sort", array())) ? ("is-active") : ("")));
                // line 68
                echo "          <";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["cell"], "attributes", array()), "addClass", array(0 => (isset($context["cell_classes"]) ? $context["cell_classes"] : null)), "method"), "html", null, true));
                echo ">";
                // line 69
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                // line 70
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                echo ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "      </tr>
    </thead>
  ";
        }
        // line 75
        echo "
  ";
        // line 76
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 77
            echo "    <tbody>
      ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 79
                echo "        ";
                // line 80
                $context["row_classes"] = array(0 => (( !                // line 81
(isset($context["no_striping"]) ? $context["no_striping"] : null)) ? (twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array()))) : ("")));
                // line 84
                echo "        <tr";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null)), "method"), "html", null, true));
                echo ">
          ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 86
                    echo "            <";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true));
                    echo ">";
                    // line 87
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                    // line 88
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "        </tr>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    </tbody>
  ";
        } elseif (        // line 93
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 94
            echo "    <tbody>
      <tr class=\"odd\">
        <td colspan=\"";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_columns"]) ? $context["header_columns"] : null), "html", null, true));
            echo "\" class=\"empty message\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            echo "</td>
      </tr>
    </tbody>
  ";
        }
        // line 100
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 101
            echo "    <tfoot>
      ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footer"]) ? $context["footer"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 103
                echo "        <tr";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">
          ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 105
                    echo "            <";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "attributes", array()), "html", null, true));
                    echo ">";
                    // line 106
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "content", array()), "html", null, true));
                    // line 107
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["cell"], "tag", array()), "html", null, true));
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "    </tfoot>
  ";
        }
        // line 113
        echo "</table>
";
        
        $__internal_6e98c5402e4333367d32a768538d0ddbfdc92b3622827d4840680c104312ff10->leave($__internal_6e98c5402e4333367d32a768538d0ddbfdc92b3622827d4840680c104312ff10_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/dataset/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 113,  272 => 111,  265 => 109,  256 => 107,  254 => 106,  249 => 105,  245 => 104,  240 => 103,  236 => 102,  233 => 101,  230 => 100,  221 => 96,  217 => 94,  215 => 93,  212 => 92,  197 => 90,  188 => 88,  186 => 87,  181 => 86,  177 => 85,  172 => 84,  170 => 81,  169 => 80,  167 => 79,  150 => 78,  147 => 77,  145 => 76,  142 => 75,  137 => 72,  128 => 70,  126 => 69,  121 => 68,  119 => 65,  118 => 64,  116 => 63,  112 => 62,  108 => 60,  106 => 59,  103 => 58,  97 => 57,  91 => 55,  87 => 53,  78 => 51,  74 => 50,  69 => 49,  66 => 48,  62 => 47,  59 => 46,  53 => 44,  51 => 43,  46 => 42,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a table.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes to apply to the <table> tag.*/
/*  * - caption: A localized string for the <caption> tag.*/
/*  * - colgroups: Column groups. Each group contains the following properties:*/
/*  *   - attributes: HTML attributes to apply to the <col> tag.*/
/*  *     Note: Drupal currently supports only one table header row, see*/
/*  *     https://www.drupal.org/node/893530 and*/
/*  *     http://api.drupal.org/api/drupal/includes!theme.inc/function/theme_table/7#comment-5109.*/
/*  * - header: Table header cells. Each cell contains the following properties:*/
/*  *   - tag: The HTML tag name to use; either TH or TD.*/
/*  *   - attributes: HTML attributes to apply to the tag.*/
/*  *   - content: A localized string for the title of the column.*/
/*  *   - field: Field name (required for column sorting).*/
/*  *   - sort: Default sort order for this column ("asc" or "desc").*/
/*  * - sticky: A flag indicating whether to use a "sticky" table header.*/
/*  * - rows: Table rows. Each row contains the following properties:*/
/*  *   - attributes: HTML attributes to apply to the <tr> tag.*/
/*  *   - data: Table cells.*/
/*  *   - no_striping: A flag indicating that the row should receive no*/
/*  *     'even / odd' styling. Defaults to FALSE.*/
/*  *   - cells: Table cells of the row. Each cell contains the following keys:*/
/*  *     - tag: The HTML tag name to use; either TH or TD.*/
/*  *     - attributes: Any HTML attributes, such as "colspan", to apply to the*/
/*  *       table cell.*/
/*  *     - content: The string to display in the table cell.*/
/*  *     - active_table_sort: A boolean indicating whether the cell is the active*/
/*          table sort.*/
/*  * - footer: Table footer rows, in the same format as the rows variable.*/
/*  * - empty: The message to display in an extra row if table does not have*/
/*  *   any rows.*/
/*  * - no_striping: A boolean indicating that the row should receive no striping.*/
/*  * - header_columns: The number of columns in the header.*/
/*  **/
/*  * @see template_preprocess_table()*/
/*  *//* */
/* #}*/
/* <table{{ attributes }}>*/
/*   {% if caption %}*/
/*     <caption>{{ caption }}</caption>*/
/*   {% endif %}*/
/* */
/*   {% for colgroup in colgroups %}*/
/*     {% if colgroup.cols %}*/
/*       <colgroup{{ colgroup.attributes }}>*/
/*         {% for col in colgroup.cols %}*/
/*           <col{{ col.attributes }} />*/
/*         {% endfor %}*/
/*       </colgroup>*/
/*     {% else %}*/
/*       <colgroup{{ colgroup.attributes }} />*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* */
/*   {% if header %}*/
/*     <thead>*/
/*       <tr>*/
/*         {% for cell in header %}*/
/*           {%*/
/*             set cell_classes = [*/
/*               cell.active_table_sort ? 'is-active',*/
/*             ]*/
/*           %}*/
/*           <{{ cell.tag }}{{ cell.attributes.addClass(cell_classes) }}>*/
/*             {{- cell.content -}}*/
/*           </{{ cell.tag }}>*/
/*         {% endfor %}*/
/*       </tr>*/
/*     </thead>*/
/*   {% endif %}*/
/* */
/*   {% if rows %}*/
/*     <tbody>*/
/*       {% for row in rows %}*/
/*         {%*/
/*           set row_classes = [*/
/*             not no_striping ? cycle(['odd', 'even'], loop.index0),*/
/*           ]*/
/*         %}*/
/*         <tr{{ row.attributes.addClass(row_classes) }}>*/
/*           {% for cell in row.cells %}*/
/*             <{{ cell.tag }}{{ cell.attributes }}>*/
/*               {{- cell.content -}}*/
/*             </{{ cell.tag }}>*/
/*           {% endfor %}*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   {% elseif empty %}*/
/*     <tbody>*/
/*       <tr class="odd">*/
/*         <td colspan="{{ header_columns }}" class="empty message">{{ empty }}</td>*/
/*       </tr>*/
/*     </tbody>*/
/*   {% endif %}*/
/*   {% if footer %}*/
/*     <tfoot>*/
/*       {% for row in footer %}*/
/*         <tr{{ row.attributes }}>*/
/*           {% for cell in row.cells %}*/
/*             <{{ cell.tag }}{{ cell.attributes }}>*/
/*               {{- cell.content -}}*/
/*             </{{ cell.tag }}>*/
/*           {% endfor %}*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tfoot>*/
/*   {% endif %}*/
/* </table>*/
/* */
