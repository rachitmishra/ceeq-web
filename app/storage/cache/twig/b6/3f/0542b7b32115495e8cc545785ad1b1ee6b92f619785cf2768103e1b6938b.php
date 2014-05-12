<?php

/* home.html.twig */
class __TwigTemplate_b63f0542b7b32115495e8cc545785ad1b1ee6b92f619785cf2768103e1b6938b extends Twig_Template
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
        return "home.html.twig";
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
