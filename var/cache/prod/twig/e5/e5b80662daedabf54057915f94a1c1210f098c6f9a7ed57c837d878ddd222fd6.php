<?php

/* @PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig */
class __TwigTemplate_d3998135770561086fb6ab93a413d54d47bb53e6498808327d326b8bd119cdd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_preferences_general' => array($this, 'block_product_preferences_general'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('product_preferences_general', $context, $blocks);
    }

    public function block_product_preferences_general($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"col-xl-10\">
  <div class=\"card\" id=\"configuration_fieldset_products\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products (general)", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          ";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Catalog mode", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The catalog mode is actually to disable products checkout (prices, add to cart, etc.) on your shop, like a retail website does.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "catalog_mode", array()), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "catalog_mode", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of days for which the product is considered 'new'", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "new_days_number", array()), 'errors');
        echo "
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "new_days_number", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 54
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max size of product summary", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set the maximum size of the summary of your product description (in characters).", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "short_description_limit", array()), 'errors');
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "short_description_limit", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 61
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity discounts based on", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How to calculate quantity discounts.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "quantity_discount", array()), 'errors');
        echo "
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "quantity_discount", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 68
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Force update of friendly URL", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When active, friendly URL will be updated on every save.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "force_friendly_url", array()), 'errors');
        echo "
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "force_friendly_url", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 75
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default activation status", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When active, new products will be activated by default during creation.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "default_status", array()), 'errors');
        echo "
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? null), "default_status", array()), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 85
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
        return "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 85,  138 => 78,  134 => 77,  129 => 75,  122 => 71,  118 => 70,  113 => 68,  106 => 64,  102 => 63,  97 => 61,  90 => 57,  86 => 56,  81 => 54,  74 => 50,  70 => 49,  64 => 46,  56 => 41,  52 => 40,  47 => 38,  39 => 33,  34 => 30,  28 => 29,  25 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig", "D:\\xamppp\\htdocs\\jms_shella\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\Blocks\\product_preferences_general.html.twig");
    }
}
