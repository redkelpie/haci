<?php

/* {# inline_template_start #}<div class="event-list-item">
   <div class="event-date">{{ field_event_start }}</div>
   <div class="event-title">{{ title }}</div>
   <div class="event-body">{{body}}</div>
</div> */
class __TwigTemplate_605cb20526e2d620c39617fe91b5671672d97649e19e4cffad63e582d09a280e extends Twig_Template
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
        echo "<div class=\"event-list-item\">
   <div class=\"event-date\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_event_start"]) ? $context["field_event_start"] : null), "html", null, true));
        echo "</div>
   <div class=\"event-title\">";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
   <div class=\"event-body\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"event-list-item\">
   <div class=\"event-date\">{{ field_event_start }}</div>
   <div class=\"event-title\">{{ title }}</div>
   <div class=\"event-body\">{{body}}</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  54 => 3,  50 => 2,  47 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"event-list-item\">
   <div class=\"event-date\">{{ field_event_start }}</div>
   <div class=\"event-title\">{{ title }}</div>
   <div class=\"event-body\">{{body}}</div>
</div>";
    }
}
