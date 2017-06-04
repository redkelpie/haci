<?php

/* themes/gavias_charityplus/templates/page/header-3.html.twig */
class __TwigTemplate_b1423e89ef0f12a0bbd152d91beeebd9c927889cb717bafecc07fd39ac44ec02 extends Twig_Template
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
        $tags = array("set" => 3, "if" => 4);
        $filters = array("t" => 74);
        $functions = array("path" => 14);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
                array('path')
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
        echo "<header id=\"header\" class=\"header-v3\">
  
  ";
        // line 3
        $context["class_sticky"] = "";
        // line 4
        echo "  ";
        if (((isset($context["sticky_menu"]) ? $context["sticky_menu"] : null) == 1)) {
            // line 5
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 6
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class_sticky"]) ? $context["class_sticky"] : null), "html", null, true));
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row no-margin\">
              <div class=\"col-md-2 col-sm-3 col-xs-12 no-padding branding\">
                ";
        // line 13
        if (((isset($context["demo_logo"]) ? $context["demo_logo"] : null) == "enable")) {
            // line 14
            echo "                  <a href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" class=\"site-branding-logo\"><img src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["theme_path"]) ? $context["theme_path"] : null), "html", null, true));
            echo "/images/logo-3.png\" alt=\"home\"/></a>
                ";
        } else {
            // line 15
            echo "  
                  ";
            // line 16
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array())) {
                // line 17
                echo "                    ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
                echo "
                  ";
            }
            // line 19
            echo "                ";
        }
        echo "  
              </div>

              <div class=\"col-md-10 col-sm-9 col-xs-12 no-padding p-static\">
                <div class=\"topbar hidden-xs\">
                  ";
        // line 24
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbar", array())) {
            // line 25
            echo "                    <div class=\"topbar-inner\">
                      <div class=\"container\">
                        <div class=\"row\">
                          <div class=\"col-lg-11\">
                            <div class=\"topbar-content\">";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbar", array()), "html", null, true));
            echo "</div> 
                          </div>
                          <div class=\"col-lg-1\">
                            <div class=\"language-box\">";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "language", array()), "html", null, true));
            echo "</div>
                          </div> 
                        </div>   
                      </div>
                    </div>
                  ";
        }
        // line 38
        echo "                </div>
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><span class=\"zmdi zmdi-close\"></span></div>
                            <div class=\"main-menu-inner\">
                              ";
        // line 46
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 47
            echo "                                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
                              ";
        }
        // line 49
        echo "                            </div>

                            ";
        // line 51
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "quick_menu", array())) {
            // line 52
            echo "                              <div class=\"quick-menu\">
                                <div class=\"icon\"><a><span class=\"zmdi zmdi-more\"></span></a></div>
                                <div class=\"content-inner\">
                                  ";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "quick_menu", array()), "html", null, true));
            echo "
                                </div>  
                              </div>
                            ";
        }
        // line 59
        echo "
                            ";
        // line 60
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array())) {
            // line 61
            echo "                              <div class=\"after-offcanvas hidden\">
                                ";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array()), "html", null, true));
            echo "
                              </div>
                           ";
        }
        // line 65
        echo "                          </div>   
                          <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>

                           ";
        // line 72
        if ( !twig_test_empty((isset($context["link_donation"]) ? $context["link_donation"] : null))) {
            // line 73
            echo "                          <div class=\"header-action\">
                            <a href=\"";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link_donation"]) ? $context["link_donation"] : null), "html", null, true));
            echo "\" class=\"btn-theme\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Donate Now")));
            echo "</a>
                          </div>
                          ";
        }
        // line 77
        echo "
                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_charityplus/templates/page/header-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 77,  186 => 74,  183 => 73,  181 => 72,  172 => 65,  166 => 62,  163 => 61,  161 => 60,  158 => 59,  151 => 55,  146 => 52,  144 => 51,  140 => 49,  134 => 47,  132 => 46,  122 => 38,  113 => 32,  107 => 29,  101 => 25,  99 => 24,  90 => 19,  84 => 17,  82 => 16,  79 => 15,  71 => 14,  69 => 13,  61 => 8,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "<header id=\"header\" class=\"header-v3\">
  
  {% set class_sticky = '' %}
  {% if sticky_menu == 1 %}
    {% set class_sticky = 'gv-sticky-menu' %}
  {% endif %}  

   <div class=\"header-main {{ class_sticky }}\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row no-margin\">
              <div class=\"col-md-2 col-sm-3 col-xs-12 no-padding branding\">
                {% if demo_logo == 'enable' %}
                  <a href=\"{{ path('<front>') }}\" class=\"site-branding-logo\"><img src=\"{{theme_path}}/images/logo-3.png\" alt=\"home\"/></a>
                {% else %}  
                  {% if page.branding %}
                    {{ page.branding }}
                  {% endif %}
                {% endif %}  
              </div>

              <div class=\"col-md-10 col-sm-9 col-xs-12 no-padding p-static\">
                <div class=\"topbar hidden-xs\">
                  {% if page.topbar %}
                    <div class=\"topbar-inner\">
                      <div class=\"container\">
                        <div class=\"row\">
                          <div class=\"col-lg-11\">
                            <div class=\"topbar-content\">{{ page.topbar }}</div> 
                          </div>
                          <div class=\"col-lg-1\">
                            <div class=\"language-box\">{{page.language}}</div>
                          </div> 
                        </div>   
                      </div>
                    </div>
                  {% endif %}
                </div>
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><span class=\"zmdi zmdi-close\"></span></div>
                            <div class=\"main-menu-inner\">
                              {% if page.main_menu %}
                                {{ page.main_menu }}
                              {% endif %}
                            </div>

                            {% if page.quick_menu %}
                              <div class=\"quick-menu\">
                                <div class=\"icon\"><a><span class=\"zmdi zmdi-more\"></span></a></div>
                                <div class=\"content-inner\">
                                  {{ page.quick_menu }}
                                </div>  
                              </div>
                            {% endif %}

                            {% if page.offcanvas %}
                              <div class=\"after-offcanvas hidden\">
                                {{ page.offcanvas }}
                              </div>
                           {% endif %}
                          </div>   
                          <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>

                           {% if link_donation is not empty %}
                          <div class=\"header-action\">
                            <a href=\"{{link_donation}}\" class=\"btn-theme\">{{ 'Donate Now'|t }}</a>
                          </div>
                          {% endif %}

                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
    }
}
