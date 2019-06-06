<?php

/* @PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_pagination.html.twig */
class __TwigTemplate_290ea57fcd583a9d100e43a0cb49ad47bded7d354eb4c1ad1bce452c9097890f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_preferences_pagination' => array($this, 'block_product_preferences_pagination'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_pagination.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('product_preferences_pagination', $context, $blocks);
    }

    public function block_product_preferences_pagination($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"col-xl-10\">
  <div class=\"card\" id=\"configuration_fieldset_order_by_pagination\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">view_headline</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pagination", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          ";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products per page", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of products displayed per page. Default is 10.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? null), "products_per_page", array()), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? null), "products_per_page", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 45
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default order by", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The order in which products are displayed in the product list.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? null), "default_order_by", array()), 'errors');
        echo "
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? null), "default_order_by", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 52
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default order method", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default order method for product list.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? null), "default_order_way", array()), 'errors');
        echo "
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["paginationForm"] ?? null), "default_order_way", array()), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 62,  88 => 55,  84 => 54,  79 => 52,  72 => 48,  68 => 47,  63 => 45,  56 => 41,  52 => 40,  47 => 38,  39 => 33,  34 => 30,  28 => 29,  25 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_pagination.html.twig", "D:\\xamppp\\htdocs\\jms_shella\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\Blocks\\product_preferences_pagination.html.twig");
    }
}
