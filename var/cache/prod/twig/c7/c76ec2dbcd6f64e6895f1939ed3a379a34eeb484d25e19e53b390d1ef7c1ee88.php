<?php

/* @PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig */
class __TwigTemplate_4a37b6f9c8d30f6a07e8d1044db6c391667c04af0e7bacd15c31c628ceea9410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_preferences_page' => array($this, 'block_product_preferences_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig", 27);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('product_preferences_page', $context, $blocks);
    }

    public function block_product_preferences_page($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"col-xl-10\">
  <div class=\"card\" id=\"configuration_fieldset_fo_product_page\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">shopping_basket</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product page", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display available quantities on the product page", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_quantities", array()), 'errors');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_quantities", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 47
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display remaining quantities when the quantity is lower than", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set to \"0\" to disable this feature.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_last_quantities", array()), 'errors');
        echo "
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_last_quantities", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display unavailable product attributes on the product page", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_unavailable_attributes", array()), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_unavailable_attributes", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 63
        echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display the \"add to cart\" button when a product has attributes", array(), "Admin.Shopparameters.Feature"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display or hide the \"add to cart\" button on category pages for products that have attributes forcing customers to see product details.", array(), "Admin.Shopparameters.Help"));
        echo "
          <div class=\"col-sm\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "allow_add_variant_to_cart_from_listing", array()), 'errors');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "allow_add_variant_to_cart_from_listing", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Separator of attribute anchor on the product links", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "attribute_anchor_separator", array()), 'errors');
        echo "
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "attribute_anchor_separator", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display discounted price", array(), "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_discount_price", array()), 'errors');
        echo "
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["pageForm"] ?? null), "display_discount_price", array()), 'widget');
        echo "
            <small class=\"form-text\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In the volume discounts board, display the new price with the applied discount instead of showing the discount (ie. \"-5%\").", array(), "Admin.Shopparameters.Help"), "html", null, true);
        echo "</small>
          </div>
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 92
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
        return "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 92,  148 => 85,  144 => 84,  140 => 83,  134 => 80,  126 => 75,  122 => 74,  116 => 71,  108 => 66,  104 => 65,  99 => 63,  92 => 59,  88 => 58,  82 => 55,  74 => 50,  70 => 49,  65 => 47,  58 => 43,  54 => 42,  48 => 39,  39 => 33,  34 => 30,  28 => 29,  25 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig", "D:\\xamppp\\htdocs\\jms_shella\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\ShopParameters\\Blocks\\product_preferences_page.html.twig");
    }
}
