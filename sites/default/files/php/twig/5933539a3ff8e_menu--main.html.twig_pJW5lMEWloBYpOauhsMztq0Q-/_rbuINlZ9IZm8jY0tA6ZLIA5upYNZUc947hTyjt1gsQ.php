<?php

/* themes/gavias_charityplus/templates/navigation/menu--main.html.twig */
class __TwigTemplate_3e62b66bac9c282ca840f93cfc55bf46f348d6399bb6859f3053b9d1bcc4d6f0 extends Twig_Template
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
        $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 40, "set" => 41);
        $filters = array("join" => 47, "without" => 60, "trim" => 62);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array('join', 'without', 'trim'),
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

        // line 21
        echo "
<div class=\"gva-navigation\">
";
        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
        // line 73
        echo "</div>

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 34
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 35
                    echo "      <ul ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "gva_menu gva_menu_main"), "method"), "html", null, true));
                    echo ">
      
    ";
                } else {
                    // line 38
                    echo "      <ul class=\"menu sub-menu\">
    ";
                }
                // line 40
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 41
                    echo "      ";
                    $context["class_mega_menu"] = "";
                    // line 42
                    echo "      ";
                    $context["class_columns"] = "";
                    // line 43
                    echo "      ";
                    if ((($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout", array()) == "menu-block") && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0))) {
                        // line 44
                        echo "        ";
                        $context["class_mega_menu"] = "gva-mega-menu mega-menu-block";
                        echo " 
      ";
                    } elseif ((($this->getAttribute($this->getAttribute(                    // line 45
$context["item"], "attributes", array()), "gva_layout", array()) == "menu-grid") && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0))) {
                        echo "   
        ";
                        // line 46
                        $context["class_mega_menu"] = "gva-mega-menu megamenu menu-grid";
                        echo " 
        ";
                        // line 47
                        $context["class_columns"] = twig_join_filter(array(0 => "menu-columns-", 1 => $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout_columns", array())), "");
                        // line 48
                        echo "      ";
                    }
                    echo "    
      ";
                    // line 50
                    $context["classes"] = array(0 => "menu-item", 1 => (($this->getAttribute(                    // line 52
$context["item"], "is_expanded", array())) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 53
$context["item"], "is_collapsed", array())) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 54
$context["item"], "in_active_trail", array())) ? ("menu-item--active-trail") : ("")), 4 => $this->getAttribute($this->getAttribute(                    // line 55
$context["item"], "attributes", array()), "gva_class", array()), 5 =>                     // line 56
(isset($context["class_mega_menu"]) ? $context["class_mega_menu"] : null), 6 =>                     // line 57
(isset($context["class_columns"]) ? $context["class_columns"] : null));
                    // line 60
                    echo "      <li ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "gva_icon", "gva_class", "gva_layout_columns", "gva_block", "gva_layout"), "html", null, true));
                    echo ">
        <a href=\"";
                    // line 61
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\">";
                    if (($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_icon", array()) != "")) {
                        echo " <i class=\"fa ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_icon", array()), "html", null, true));
                        echo "\"></i>";
                    }
                    // line 62
                    echo "          ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim($this->getAttribute($context["item"], "title", array())), "html", null, true));
                    if (($this->getAttribute($context["item"], "below", array()) || (($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout", array()) == "menu-block") && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)))) {
                        echo "<span class=\"icaret nav-plus fa fa-angle-down\"></span>";
                    }
                    // line 63
                    echo "        </a>
        ";
                    // line 64
                    if ((($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout", array()) == "menu-block") && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0))) {
                        // line 65
                        echo "          <div class=\"sub-menu\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim($this->getAttribute($context["item"], "gva_block_content", array())), "html", null, true));
                        echo "</div>
        ";
                    }
                    // line 66
                    echo "  
        ";
                    // line 67
                    if ($this->getAttribute($context["item"], "below", array())) {
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                    }
                    // line 68
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 70,  176 => 68,  172 => 67,  169 => 66,  163 => 65,  161 => 64,  158 => 63,  152 => 62,  144 => 61,  139 => 60,  137 => 57,  136 => 56,  135 => 55,  134 => 54,  133 => 53,  132 => 52,  131 => 50,  126 => 48,  124 => 47,  120 => 46,  116 => 45,  111 => 44,  108 => 43,  105 => 42,  102 => 41,  97 => 40,  93 => 38,  86 => 35,  83 => 34,  80 => 33,  77 => 32,  63 => 31,  57 => 73,  52 => 29,  49 => 24,  47 => 23,  43 => 21,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}

<div class=\"gva-navigation\">
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul {{ attributes.addClass('gva_menu gva_menu_main') }}>
      
    {% else %}
      <ul class=\"menu sub-menu\">
    {% endif %}
    {% for item in items %}
      {% set class_mega_menu = '' %}
      {% set class_columns = '' %}
      {% if item.attributes.gva_layout == 'menu-block' and menu_level == 0 %}
        {% set class_mega_menu = 'gva-mega-menu mega-menu-block' %} 
      {% elseif item.attributes.gva_layout == 'menu-grid' and menu_level == 0 %}   
        {% set class_mega_menu = 'gva-mega-menu megamenu menu-grid' %} 
        {% set class_columns = ['menu-columns-', item.attributes.gva_layout_columns]|join('') %}
      {% endif %}    
      {%
        set classes = [
          'menu-item',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
          item.attributes.gva_class,
          class_mega_menu,
          class_columns
        ]
      %}
      <li {{ item.attributes.addClass(classes)|without('gva_icon', 'gva_class', 'gva_layout_columns', 'gva_block', 'gva_layout') }}>
        <a href=\"{{ item.url }}\">{% if item.attributes.gva_icon != '' %} <i class=\"fa {{ item.attributes.gva_icon }}\"></i>{% endif %}
          {{ item.title|trim }}{% if item.below or item.attributes.gva_layout == 'menu-block' and menu_level == 0 %}<span class=\"icaret nav-plus fa fa-angle-down\"></span>{% endif %}
        </a>
        {% if item.attributes.gva_layout == 'menu-block' and menu_level == 0 %}
          <div class=\"sub-menu\">{{ item.gva_block_content|trim }}</div>
        {% endif %}  
        {% if item.below %}{{ menus.menu_links(item.below, attributes, menu_level + 1) }}{% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}
</div>

";
    }
}
