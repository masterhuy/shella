<?php

/* @PrestaShop/Admin/Common/_partials/_form_field.html.twig */
class __TwigTemplate_b51b5bb0a674f25b5956c0e722639ea3b2a8789fa5002ca8c44fb8c8ff9949dc extends Twig_Template
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
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("id" => ($context["formId"] ?? null)));
        echo "
";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/_partials/_form_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/_partials/_form_field.html.twig", "D:\\xamppp\\htdocs\\jms_shella\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\_partials\\_form_field.html.twig");
    }
}
