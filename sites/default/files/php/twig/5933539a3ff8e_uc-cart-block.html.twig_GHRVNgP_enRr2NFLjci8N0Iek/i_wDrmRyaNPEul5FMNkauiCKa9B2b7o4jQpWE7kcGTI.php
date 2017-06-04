<?php

/* modules/ubercart/uc_cart/templates/uc-cart-block.html.twig */
class __TwigTemplate_475eb187a45e4c3f552ee91c0addc2372eefe5f9da6576d3838cbcc576efc97b extends Twig_Template
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
        $tags = array("if" => 21, "for" => 23, "trans" => 45);
        $filters = array("t" => 38);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'trans'),
                array('t'),
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
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 22
            echo "  <table ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">
  ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "    <tr>
      <td class=\"cart-block-item-qty\">";
                // line 25
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "qty", array()), "html", null, true));
                echo " ×</td>
      ";
                // line 26
                if ($this->getAttribute($context["item"], "desc", array())) {
                    // line 27
                    echo "        <td class=\"cart-block-item-title\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "<br />
        <span class=\"cart-block-item-desc\">";
                    // line 28
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "desc", array()), "html", null, true));
                    echo "</span></td>
      ";
                } else {
                    // line 30
                    echo "        <td class=\"cart-block-item-title\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "</td>
      ";
                }
                // line 32
                echo "      <td class=\"cart-block-item-price\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true));
                echo "</td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </table>
";
        } else {
            // line 37
            echo "  <p ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">
    ";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("There are no products in your shopping cart.")));
            echo "
  </p>
";
        }
        // line 41
        echo "
<table class=\"cart-block-summary\">
  <tr>
    <td class=\"cart-block-summary-items\">
      ";
        // line 45
        echo \Drupal::translation()->formatPlural(abs(        // line 47
(isset($context["item_count"]) ? $context["item_count"] : null)), "<span class=\"num-items\">1</span> Item", "<span class=\"num-items\">@item_count</span> Items", array("@item_count" =>         // line 48
(isset($context["item_count"]) ? $context["item_count"] : null), ));
        // line 50
        echo "    </td>
    <td class=\"cart-block-summary-total\">
      <strong>";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Total")));
        echo ":</strong> ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true));
        echo "
    </td>
  </tr>
</table>

";
        // line 57
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 58
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["summary_links"]) ? $context["summary_links"] : null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_cart/templates/uc-cart-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 58,  128 => 57,  118 => 52,  114 => 50,  112 => 48,  111 => 47,  110 => 45,  104 => 41,  98 => 38,  93 => 37,  89 => 35,  79 => 32,  73 => 30,  68 => 28,  63 => 27,  61 => 26,  57 => 25,  54 => 24,  50 => 23,  45 => 22,  43 => 21,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a shopping cart block.
 *
 * Available variables:
 * - items: An associative array of cart item information containing:
 *   - qty: Quantity in cart.
 *   - title: Item title.
 *   - price: Item price.
 *   - desc: (optional) Item description.
 * - item_count: The number of items in the shopping cart.
 * - total: The formatted subtotal of all the products in the shopping cart.
 * - summary_links: A set of links used in the cart summary.
 * - attributes: HTML attributes for the main content element.
 *
 * @see template_preprocess_uc_cart_block()
 *
 * @ingroup themeable
#}
{% if items %}
  <table {{ attributes }}>
  {% for item in items %}
    <tr>
      <td class=\"cart-block-item-qty\">{{ item.qty }} ×</td>
      {% if item.desc %}
        <td class=\"cart-block-item-title\">{{ item.title }}<br />
        <span class=\"cart-block-item-desc\">{{ item.desc }}</span></td>
      {% else %}
        <td class=\"cart-block-item-title\">{{ item.title }}</td>
      {% endif %}
      <td class=\"cart-block-item-price\">{{ item.price }}</td>
    </tr>
  {% endfor %}
  </table>
{% else %}
  <p {{ attributes }}>
    {{ 'There are no products in your shopping cart.'|t }}
  </p>
{% endif %}

<table class=\"cart-block-summary\">
  <tr>
    <td class=\"cart-block-summary-items\">
      {% trans %}
        <span class=\"num-items\">1</span> Item
      {% plural item_count %}
        <span class=\"num-items\">{{ item_count }}</span> Items
      {% endtrans %}
    </td>
    <td class=\"cart-block-summary-total\">
      <strong>{{ 'Total'|t }}:</strong> {{ total }}
    </td>
  </tr>
</table>

{% if items %}
  {{ summary_links }}
{% endif %}
";
    }
}
