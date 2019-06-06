<?php

/* @PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig */
class __TwigTemplate_301da367cf0dcea117583494ad558b0dc6e8a6f936ab894f6cd73f34780abb70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_preferences_stock' => array($this, 'block_product_preferences_stock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('product_preferences_stock', $context, $blocks);
    }

    public function block_product_preferences_stock($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"col-xl-10\">
  <div class=\"card\" id=\"configuration_fieldset_stock\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">shop</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products stock", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          ";
        // line 38
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow ordering of out-of-stock products", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By default, the Add to Cart button is hidden when a product is unavailable. You can choose to have it displayed in all cases.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "allow_ordering_oos", array()), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "allow_ordering_oos", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable stock management", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "stock_management", array()), 'errors');
        echo "
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "stock_management", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of in-stock products", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "stock_management", array()), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "in_stock_label", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of out-of-stock products with allowed backorders", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "oos_allowed_backorders", array()), 'errors');
        echo "
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "oos_allowed_backorders", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Label of out-of-stock products with denied backorders", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "oos_denied_backorders", array()), 'errors');
        echo "
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "oos_denied_backorders", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 81
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery time of in-stock products", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advised for European merchants to be legally compliant (eg: Delivered within 3-4 days)", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "delivery_time", array()), 'errors');
        echo "
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "delivery_time", array()), 'widget');
        echo "
            <small class=\"form-text\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</small>
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 89
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery time of out-of-stock products with allowed backorders", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advised for European merchants to be legally compliant (eg: Delivered within 5-7 days)", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "oos_delivery_time", array()), 'errors');
        echo "
            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "oos_delivery_time", array()), 'widget');
        echo "
            <small class=\"form-text\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "</small>
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 97
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default pack stock management", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When selling packs of products, how do you want your stock to be calculated?", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "pack_stock_management", array()), 'errors');
        echo "
            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stockForm"] ?? null), "pack_stock_management", array()), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 107
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
        return "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 107,  184 => 100,  180 => 99,  175 => 97,  168 => 93,  164 => 92,  160 => 91,  155 => 89,  148 => 85,  144 => 84,  140 => 83,  135 => 81,  128 => 77,  124 => 76,  118 => 73,  110 => 68,  106 => 67,  100 => 64,  92 => 59,  88 => 58,  82 => 55,  74 => 50,  70 => 49,  64 => 46,  56 => 41,  52 => 40,  47 => 38,  39 => 33,  34 => 30,  28 => 29,  25 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig", "D:\\xamppp\\htdocs\\jms_shella\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\Blocks\\product_preferences_stock.html.twig");
    }
}
