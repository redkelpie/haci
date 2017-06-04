<?php

/* themes/gavias_charityplus/templates/node/node--team.html.twig */
class __TwigTemplate_58a2d9d3b8f2abe74f059218825a0626880880e394c85f53291405c6de600450 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 15, "for" => 20);
        $filters = array("clean_class" => 5, "e" => 21, "t" => 54, "without" => 73);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'e', 't', 'without'),
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
        $context["classes"] = array(0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 5
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 3 => (($this->getAttribute(        // line 6
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 7
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 8
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 9
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 7 => "clearfix");
        // line 13
        echo " 
<!-- Start Display article for teaser page -->
";
        // line 15
        if (((isset($context["teaser"]) ? $context["teaser"] : null) == true)) {
            echo " 
<div";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
  <div class=\"team-block\">
    <div class=\"team-image\">";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_team_image", array()), "html", null, true));
            echo "
      <div class=\"socials-team\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_team_social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_link", array()), "value", array())));
                echo "\">
            <span class=\"";
                // line 22
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_icon", array()), "value", array())));
                echo "\"></span>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo " 
      </div>
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_team_name", array()), "value", array())));
            echo "</a></div>
      <div class=\"team-body\">";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
            echo "</div>
    </div>
  </div>
</div>  

<!-- End Display article for teaser page -->
";
        } else {
            // line 36
            echo "<!-- Start Display article for detail page -->

<article";
            // line 38
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_team_name", array()), "value", array())));
            echo "</div>
      <div class=\"job\">";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_team_position", array()), "value", array())));
            echo "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">";
            // line 46
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_team_description", array()), "html", null, true));
            echo "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 50
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_team_image", array()), "html", null, true));
            echo "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            <div class=\"heading\">";
            // line 54
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Contact Info")));
            echo "</div>
            <div class=\"content-inner\">";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_team_contact", array()), "html", null, true));
            echo "</div>
            <div class=\"socials\">
              ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_team_social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 58
                echo "                <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_link", array()), "value", array())));
                echo "\">
                  <i class=\"";
                // line 59
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "getFieldCollectionItem", array(), "method"), "field_team_social_icon", array()), "value", array())));
                echo "\"></i>
                </a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo " 
            </div>
          </div>
          <div class=\"team-education\">
            <div class=\"heading\">";
            // line 65
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Education")));
            echo "</div>
            <div class=\"content-inner\">";
            // line 66
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_team_education", array()), "html", null, true));
            echo "</div>
          </div>
        </div>
      </div>
    </div> 

    <div";
            // line 72
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">
      ";
            // line 73
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_team_name", "field_team_contact", "field_team_image", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true));
            echo "
    </div>

    <div class=\"team-quote\"> ";
            // line 76
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_team_quote", array()), "html", null, true));
            echo " </div>

    ";
            // line 78
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array())) {
                // line 79
                echo "      <div id=\"node-single-comment\">
        ";
                // line 80
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 82
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 89
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 89,  215 => 82,  209 => 80,  206 => 79,  204 => 78,  199 => 76,  193 => 73,  189 => 72,  180 => 66,  176 => 65,  170 => 61,  161 => 59,  156 => 58,  152 => 57,  147 => 55,  143 => 54,  136 => 50,  129 => 46,  123 => 43,  119 => 42,  112 => 38,  108 => 36,  98 => 29,  92 => 28,  86 => 24,  77 => 22,  72 => 21,  68 => 20,  63 => 18,  58 => 16,  54 => 15,  50 => 13,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  44 => 5,  43 => 2,);
    }

    public function getSource()
    {
        return "{%
  set classes = [
    'node',
    'node-detail',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}
 
<!-- Start Display article for teaser page -->
{% if teaser == true %} 
<div{{ attributes.addClass(classes) }}>
  <div class=\"team-block\">
    <div class=\"team-image\">{{ content.field_team_image }}
      <div class=\"socials-team\">
        {% for item in node.field_team_social %}
          <a class=\"gva-social\" href=\"{{ item.getFieldCollectionItem().field_team_social_link.value|e }}\">
            <span class=\"{{ item.getFieldCollectionItem().field_team_social_icon.value|e }}\"></span>
          </a>
        {% endfor %} 
      </div>
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"{{ url }}\">{{ node.field_team_name.value|e }}</a></div>
      <div class=\"team-body\">{{ content.body }}</div>
    </div>
  </div>
</div>  

<!-- End Display article for teaser page -->
{% else %}
<!-- Start Display article for detail page -->

<article{{ attributes.addClass(classes) }}>
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">{{ node.field_team_name.value|e }}</div>
      <div class=\"job\">{{ node.field_team_position.value|e }}</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">{{ content.field_team_description }}</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">{{ content.field_team_image }}</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            <div class=\"heading\">{{'Contact Info'|t}}</div>
            <div class=\"content-inner\">{{ content.field_team_contact }}</div>
            <div class=\"socials\">
              {% for item in node.field_team_social %}
                <a class=\"gva-social\" href=\"{{ item.getFieldCollectionItem().field_team_social_link.value|e }}\">
                  <i class=\"{{ item.getFieldCollectionItem().field_team_social_icon.value|e }}\"></i>
                </a>
              {% endfor %} 
            </div>
          </div>
          <div class=\"team-education\">
            <div class=\"heading\">{{'Education'|t}}</div>
            <div class=\"content-inner\">{{ content.field_team_education }}</div>
          </div>
        </div>
      </div>
    </div> 

    <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
      {{ content|without('field_team_name', 'field_team_contact', 'field_team_image', 'field_team_contact', 'field_team_quote', 'field_team_social', 'field_team_education', 'field_team_position', 'field_team_email', 'field_team_description', 'comment') }}
    </div>

    <div class=\"team-quote\"> {{content.field_team_quote}} </div>

    {% if content.comment %}
      <div id=\"node-single-comment\">
        {{ content.comment }}
      </div>
    {% endif %}  

  </div>
</article>

<!-- End Display article for detail page -->
{% endif %}

";
    }
}
