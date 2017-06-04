<?php

/* themes/gavias_charityplus/templates/page/html.html.twig */
class __TwigTemplate_591bb84f9308df430afcf246f06c41c75b35eec749ea1cc1922495597d5c1823 extends Twig_Template
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
        $tags = array("if" => 40, "set" => 52, "include" => 72);
        $filters = array("raw" => 29, "safe_join" => 30, "clean_class" => 54, "t" => 63);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'include'),
                array('raw', 'safe_join', 'clean_class', 't'),
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

        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">

    <js-placeholder token=\"";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_path"]) ? $context["theme_path"] : null), "html", null, true));
        echo "/css/custom.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_path"]) ? $context["theme_path"] : null), "html", null, true));
        echo "/css/update.css\" media=\"screen\" />

    ";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["links_google_fonts"]) ? $context["links_google_fonts"] : null)));
        echo "

    ";
        // line 40
        if ((isset($context["customize_css"]) ? $context["customize_css"] : null)) {
            // line 41
            echo "      <style type=\"text/css\">
        ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["customize_css"]) ? $context["customize_css"] : null)));
            echo "
      </style>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ((isset($context["customize_styles"]) ? $context["customize_styles"] : null)) {
            // line 47
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["customize_styles"]) ? $context["customize_styles"] : null)));
            echo "
    ";
        }
        // line 49
        echo "
  </head>

  ";
        // line 52
        $context["body_classes"] = array(0 => ((        // line 53
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("logged-in") : ("")), 1 => (( !        // line 54
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 55
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => ((        // line 56
(isset($context["node_id"]) ? $context["node_id"] : null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_id"]) ? $context["node_id"] : null)))) : ("")));
        // line 59
        echo "
  <body";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true));
        echo ">

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 65
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    
    ";
        // line 70
        if ((isset($context["addon_template"]) ? $context["addon_template"] : null)) {
            // line 71
            echo "      <div class=\"permission-save-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["save_customize_permission"]) ? $context["save_customize_permission"] : null), "html", null, true));
            echo "\">
        ";
            // line 72
            $this->loadTemplate((isset($context["addon_template"]) ? $context["addon_template"] : null), "themes/gavias_charityplus/templates/page/html.html.twig", 72)->display($context);
            // line 73
            echo "      </div>  
    ";
        }
        // line 75
        echo "    
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/page/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 75,  156 => 73,  154 => 72,  149 => 71,  147 => 70,  142 => 68,  138 => 67,  134 => 66,  130 => 65,  125 => 63,  119 => 60,  116 => 59,  114 => 56,  113 => 55,  112 => 54,  111 => 53,  110 => 52,  105 => 49,  99 => 47,  97 => 46,  94 => 45,  88 => 42,  85 => 41,  83 => 40,  78 => 38,  73 => 36,  69 => 35,  64 => 33,  59 => 31,  55 => 30,  51 => 29,  46 => 27,  43 => 26,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head> 
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">

    <js-placeholder token=\"{{ placeholder_token|raw }}\">

    <link rel=\"stylesheet\" href=\"{{ theme_path }}/css/custom.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"{{ theme_path }}/css/update.css\" media=\"screen\" />

    {{ links_google_fonts|raw }}

    {% if customize_css %}
      <style type=\"text/css\">
        {{ customize_css|raw }}
      </style>
    {% endif %}

    {% if customize_styles %}
      {{ customize_styles|raw }}
    {% endif %}

  </head>

  {% set body_classes = [
    logged_in ? 'logged-in',
    not root_path ? 'frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'node--type-' ~ node_type|clean_class,
    node_id ? 'node-' ~ node_id|clean_class,
    ]
  %}

  <body{{ attributes.addClass(body_classes) }}>

    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
    
    {% if addon_template %}
      <div class=\"permission-save-{{ save_customize_permission }}\">
        {% include addon_template %}
      </div>  
    {% endif %}
    
  </body>
</html>
";
    }
}
