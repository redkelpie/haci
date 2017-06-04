<?php

/* themes/gavias_charityplus/templates/fields/field--node--field-campaign-goal.html.twig */
class __TwigTemplate_508217210edd0be518101b92a6128b29c3b94fe635dba5fba7a7aa3e96890343 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 16, "for" => 19);
        $filters = array("clean_class" => 4);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class'),
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

        // line 2
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 4
(isset($context["field_name"]) ? $context["field_name"] : null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 5
(isset($context["field_type"]) ? $context["field_type"] : null))), 3 => ("field--label-" .         // line 6
(isset($context["label_display"]) ? $context["label_display"] : null)));
        // line 10
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 12
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 15
        echo "
";
        // line 16
        if ((isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 17
            echo "  ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 18
                echo "    <span";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "field__items"), "method"), "html", null, true));
                echo ">
      ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 20
                    echo "        <span";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "</span>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "    </span>
  ";
            } else {
                // line 24
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 25
                    echo "      <span";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "field__item"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "</span>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "  ";
            }
        } else {
            // line 29
            echo "  <span";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    <span";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</span>
    ";
            // line 31
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 32
                echo "      <span class=\"field__items\">
    ";
            }
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "      <span";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "</span>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 38
                echo "      </span>
    ";
            }
            // line 40
            echo "  </span>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/fields/field--node--field-campaign-goal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 40,  139 => 38,  136 => 37,  125 => 35,  120 => 34,  116 => 32,  114 => 31,  108 => 30,  103 => 29,  99 => 27,  88 => 25,  83 => 24,  79 => 22,  68 => 20,  64 => 19,  59 => 18,  56 => 17,  54 => 16,  51 => 15,  49 => 12,  48 => 10,  46 => 6,  45 => 5,  44 => 4,  43 => 2,);
    }

    public function getSource()
    {
        return "{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
  ]
%}
{%
  set title_classes = [
    'field__label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}

{% if label_hidden %}
  {% if multiple %}
    <span{{ attributes.addClass(classes, 'field__items') }}>
      {% for item in items %}
        <span{{ item.attributes.addClass('field__item') }}>{{ item.content }}</span>
      {% endfor %}
    </span>
  {% else %}
    {% for item in items %}
      <span{{ attributes.addClass(classes, 'field__item') }}>{{ item.content }}</span>
    {% endfor %}
  {% endif %}
{% else %}
  <span{{ attributes.addClass(classes) }}>
    <span{{ title_attributes.addClass(title_classes) }}>{{ label }}</span>
    {% if multiple %}
      <span class=\"field__items\">
    {% endif %}
    {% for item in items %}
      <span{{ item.attributes.addClass('field__item') }}>{{ item.content }}</span>
    {% endfor %}
    {% if multiple %}
      </span>
    {% endif %}
  </span>
{% endif %}
";
    }
}
