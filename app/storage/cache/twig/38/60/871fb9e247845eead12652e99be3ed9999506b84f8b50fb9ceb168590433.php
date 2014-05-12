<?php

/* dashboard.html.twig */
class __TwigTemplate_3860871fb9e247845eead12652e99be3ed9999506b84f8b50fb9ceb168590433 extends Twig_Template
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
        // line 1
        $this->env->loadTemplate("templates/header.html.twig")->display($context);
        // line 2
        echo "
<div class=\"container\" ng-view>     
</div>

";
        // line 6
        $this->env->loadTemplate("templates/footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  21 => 2,  19 => 1,);
    }
}
