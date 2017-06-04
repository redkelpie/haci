<?php

/* themes/gavias_charityplus/templates/node/node--product.html.twig */
class __TwigTemplate_667d0349f0f3eb29f02aa8780c2557fca830831b6f8de6fbaad37b61f303a1e4 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 16);
        $filters = array("clean_class" => 5, "t" => 32, "raw" => 114, "without" => 123);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't', 'raw', 'without'),
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
        // line 16
        if (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "teaser")) {
            // line 17
            echo "
  <div class=\"campaign-block\">      
    <div class=\"portfolio-content\">
      <div class=\"image\">
        ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "uc_product_image", array()), "html", null, true));
            echo "
        <div class=\"funded\">
          <div class=\"pieChart\" data-bar-color=\"#FBB122\" data-bar-width=\"80\" data-percent=\"";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["funded"]) ? $context["funded"] : null), "html", null, true));
            echo "\"><span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["funded_label"]) ? $context["funded_label"] : null), "html", null, true));
            echo "%</span> </div>
        </div>
      </div>
      <div class=\"campaign-content\">
        <div class=\"content-inner\">
          <h4 class=\"title\"><a href=\"";
            // line 28
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a> </h4> 
          <div class=\"summary\"> ";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
            echo "</div> 
        </div>   
        <div class=\"content-action\">
          <a class=\"btn-theme\" href=\"";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Donate now")));
            echo "</a>
          <span class=\"days\">";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["days_left"]) ? $context["days_left"] : null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Days left")));
            echo " </span>
        </div> 
        <div class=\"content-raised\"><span class=\"raised\">";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["raised"]) ? $context["raised"] : null), "html", null, true));
            echo "</span> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Raised of")));
            echo " <span class=\"goal\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_campaign_goal", array()), "html", null, true));
            echo "</span> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Goal")));
            echo "</div>
      </div>
    </div>
  </div>

";
        } elseif ((        // line 40
(isset($context["view_mode"]) ? $context["view_mode"] : null) == "teaser_2")) {
            // line 41
            echo "  <div class=\"campaign-block v2\">      
    <div class=\"portfolio-content\">
      <div class=\"image\">
        ";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "uc_product_image", array()), "html", null, true));
            echo "
        <div class=\"funded\">
          <div class=\"progress\">
            <div class=\"progress-bar\" data-progress-animation=\"";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["funded"]) ? $context["funded"] : null), "html", null, true));
            echo "%\">
              <span class=\"percentage\"><span></span>";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["funded_label"]) ? $context["funded_label"] : null), "html", null, true));
            echo "%</span>
            </div>
          </div>
        </div>
      </div>
      <div class=\"campaign-content\">
        <div class=\"content-inner\">
          <h4 class=\"title\"><a href=\"";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a> </h4> 
          <div class=\"summary\"> ";
            // line 56
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
            echo "</div> 
        </div>   
        <div class=\"content-action\">
          <a class=\"btn-theme\" href=\"";
            // line 59
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Donate now")));
            echo "</a>
          <span class=\"days\">";
            // line 60
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["days_left"]) ? $context["days_left"] : null), "html", null, true));
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Days left")));
            echo " </span>
        </div> 
        <div class=\"content-raised\"><span class=\"raised\">";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["raised"]) ? $context["raised"] : null), "html", null, true));
            echo "</span> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Raised of")));
            echo " <span class=\"goal\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_campaign_goal", array()), "html", null, true));
            echo "</span> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Goal")));
            echo "</div>
      </div>
    </div>
  </div>

";
        } else {
            // line 68
            echo "<!-- Start Display article for detail page -->
<article";
            // line 69
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
  <div class=\"campaign-block campaign-single\">
    <div class=\"campaign-thumbnail\">
      ";
            // line 72
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "uc_product_image", array())) {
                // line 73
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "uc_product_image", array()), "html", null, true));
                echo " 
      ";
            }
            // line 75
            echo "    </div>
    <div class=\"campaign-block v2\">    
      <div class=\"campaign-content\">
        <div class=\"content-inner margin-top-50\">
          <div class=\"funded\">
            <div class=\"progress\">
               <div class=\"progress-bar\" data-progress-animation=\"";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["funded"]) ? $context["funded"] : null), "html", null, true));
            echo "%\">
                  <span class=\"percentage\"><span></span><b>";
            // line 82
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["funded"]) ? $context["funded"] : null), "html", null, true));
            echo "%</b></span>
               </div>
            </div>
          </div>
        </div>   
        <div class=\"row\">
          <div class=\"col-lg-5 col-sm-6 col-xs-12\"><div class=\"content-raised\"><span class=\"raised\">";
            // line 88
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["raised"]) ? $context["raised"] : null), "html", null, true));
            echo "</span> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Raised of")));
            echo " <span class=\"goal\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_campaign_goal", array()), "html", null, true));
            echo "</span> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Goal")));
            echo "</div></div>
          <div class=\"col-lg-3 col-sm-6 col-xs-12\"><span class=\"days\"><strong class=\"text-theme\">";
            // line 89
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["days_left"]) ? $context["days_left"] : null), "html", null, true));
            echo "</strong> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Days left")));
            echo " </span></div>
          <div class=\"col-lg-4 col-sm-12 col-xs-12\"><a class=\"btn btn-theme\" href=\"#\" data-toggle=\"modal\" data-target=\"#popup-add-to-cart\">";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Donation now")));
            echo "</a></div>
        </div>
      </div>
    </div>
    <div class=\"campaign-content-inner\">
      ";
            // line 95
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
         <h1";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "post-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h1>
      ";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "         
      
      <div class=\"clearfix\">
        <div id=\"popup-add-to-cart\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header clearfix\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              </div>
              <div class=\"modal-body clearfix\">
                <div class=\"funded\">
                  <div class=\"pieChart\" data-bar-color=\"#FBB122\" data-bar-width=\"150\" data-percent=\"";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["funded"]) ? $context["funded"] : null), "html", null, true));
            echo "\">
                      <span>";
            // line 110
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["funded"]) ? $context["funded"] : null), "html", null, true));
            echo "%</span>  
                  </div>
                </div>
                <div class=\"add-to-cart-content-inner\">
                  ";
            // line 114
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "add_to_cart", array())));
            echo "
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
       
      <div";
            // line 122
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">
        ";
            // line 123
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_campaign_goal", "field_campaign_start", "field_campaign_time", "taxonomy_catalog", "uc_product_image", "comment", "display_price", "add_to_cart"), "html", null, true));
            echo "
      </div>
    
      <div class=\"post-categories margin-top-20\">";
            // line 126
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy_catalog", array()), "html", null, true));
            echo "</div>

      ";
            // line 128
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array())) {
                // line 129
                echo "        <div id=\"node-single-comment\">
          ";
                // line 130
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 133
            echo "
    </div>
  </div>
</article>
<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/node/node--product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 133,  313 => 130,  310 => 129,  308 => 128,  303 => 126,  297 => 123,  293 => 122,  282 => 114,  275 => 110,  271 => 109,  256 => 97,  250 => 96,  246 => 95,  238 => 90,  232 => 89,  222 => 88,  213 => 82,  209 => 81,  201 => 75,  195 => 73,  193 => 72,  187 => 69,  184 => 68,  169 => 62,  162 => 60,  156 => 59,  150 => 56,  144 => 55,  134 => 48,  130 => 47,  124 => 44,  119 => 41,  117 => 40,  103 => 35,  96 => 33,  90 => 32,  84 => 29,  78 => 28,  68 => 23,  63 => 21,  57 => 17,  55 => 16,  50 => 13,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  44 => 5,  43 => 2,);
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

{% if view_mode == 'teaser' %}

  <div class=\"campaign-block\">      
    <div class=\"portfolio-content\">
      <div class=\"image\">
        {{ content.uc_product_image }}
        <div class=\"funded\">
          <div class=\"pieChart\" data-bar-color=\"#FBB122\" data-bar-width=\"80\" data-percent=\"{{funded}}\"><span>{{funded_label}}%</span> </div>
        </div>
      </div>
      <div class=\"campaign-content\">
        <div class=\"content-inner\">
          <h4 class=\"title\"><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a> </h4> 
          <div class=\"summary\"> {{content.body}}</div> 
        </div>   
        <div class=\"content-action\">
          <a class=\"btn-theme\" href=\"{{ url }}\">{{ 'Donate now'|t }}</a>
          <span class=\"days\">{{ days_left }} {{'Days left'|t}} </span>
        </div> 
        <div class=\"content-raised\"><span class=\"raised\">{{raised}}</span> {{'Raised of'|t}} <span class=\"goal\">{{ content.field_campaign_goal }}</span> {{'Goal'|t}}</div>
      </div>
    </div>
  </div>

{% elseif view_mode == 'teaser_2' %}
  <div class=\"campaign-block v2\">      
    <div class=\"portfolio-content\">
      <div class=\"image\">
        {{ content.uc_product_image }}
        <div class=\"funded\">
          <div class=\"progress\">
            <div class=\"progress-bar\" data-progress-animation=\"{{funded}}%\">
              <span class=\"percentage\"><span></span>{{ funded_label }}%</span>
            </div>
          </div>
        </div>
      </div>
      <div class=\"campaign-content\">
        <div class=\"content-inner\">
          <h4 class=\"title\"><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a> </h4> 
          <div class=\"summary\"> {{content.body}}</div> 
        </div>   
        <div class=\"content-action\">
          <a class=\"btn-theme\" href=\"{{ url }}\">{{ 'Donate now'|t }}</a>
          <span class=\"days\">{{ days_left }} {{'Days left'|t}} </span>
        </div> 
        <div class=\"content-raised\"><span class=\"raised\">{{raised}}</span> {{'Raised of'|t}} <span class=\"goal\">{{ content.field_campaign_goal }}</span> {{'Goal'|t}}</div>
      </div>
    </div>
  </div>

{% else %}
<!-- Start Display article for detail page -->
<article{{ attributes.addClass(classes) }}>
  <div class=\"campaign-block campaign-single\">
    <div class=\"campaign-thumbnail\">
      {% if content.uc_product_image %}
        {{ content.uc_product_image }} 
      {% endif %}
    </div>
    <div class=\"campaign-block v2\">    
      <div class=\"campaign-content\">
        <div class=\"content-inner margin-top-50\">
          <div class=\"funded\">
            <div class=\"progress\">
               <div class=\"progress-bar\" data-progress-animation=\"{{funded}}%\">
                  <span class=\"percentage\"><span></span><b>{{ funded }}%</b></span>
               </div>
            </div>
          </div>
        </div>   
        <div class=\"row\">
          <div class=\"col-lg-5 col-sm-6 col-xs-12\"><div class=\"content-raised\"><span class=\"raised\">{{raised}}</span> {{'Raised of'|t}} <span class=\"goal\">{{ content.field_campaign_goal }}</span> {{'Goal'|t}}</div></div>
          <div class=\"col-lg-3 col-sm-6 col-xs-12\"><span class=\"days\"><strong class=\"text-theme\">{{ days_left }}</strong> {{'Days left'|t}} </span></div>
          <div class=\"col-lg-4 col-sm-12 col-xs-12\"><a class=\"btn btn-theme\" href=\"#\" data-toggle=\"modal\" data-target=\"#popup-add-to-cart\">{{'Donation now'|t}}</a></div>
        </div>
      </div>
    </div>
    <div class=\"campaign-content-inner\">
      {{ title_prefix }}
         <h1{{ title_attributes.addClass('post-title') }}>{{ label }}</h1>
      {{ title_suffix }}         
      
      <div class=\"clearfix\">
        <div id=\"popup-add-to-cart\" class=\"modal fade\" role=\"dialog\">
          <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
              <div class=\"modal-header clearfix\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              </div>
              <div class=\"modal-body clearfix\">
                <div class=\"funded\">
                  <div class=\"pieChart\" data-bar-color=\"#FBB122\" data-bar-width=\"150\" data-percent=\"{{funded}}\">
                      <span>{{funded}}%</span>  
                  </div>
                </div>
                <div class=\"add-to-cart-content-inner\">
                  {{content.add_to_cart|raw}}
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
       
      <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
        {{ content|without('field_campaign_goal','field_campaign_start', 'field_campaign_time', 'taxonomy_catalog', 'uc_product_image', 'comment', 'display_price', 'add_to_cart') }}
      </div>
    
      <div class=\"post-categories margin-top-20\">{{ content.taxonomy_catalog }}</div>

      {% if content.comment %}
        <div id=\"node-single-comment\">
          {{ content.comment }}
        </div>
      {% endif %}

    </div>
  </div>
</article>
<!-- End Display article for detail page -->
{% endif %}";
    }
}
