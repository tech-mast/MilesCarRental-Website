<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* exit_summary.html.twig */
class __TwigTemplate_06dea0f4a7d0aaa699496c1dd0ef76be6fd122f4b59e8a9437859d86cb0044f5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "exit_summary.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["messages"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["ordersummarytitle"] ?? null) : null), "html", null, true);
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"container-fluid p-1 mt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 text-center bg-success p-3 text-warning\">
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["messages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["ordersummarytitle"] ?? null) : null), "html", null, true);
        echo "</h1>
            <img class=\"img-fluid img-limit\" src=\"resources/cars2/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "selectedCar", [], "any", false, false, false, 9), "imagePath", [], "any", false, false, false, 9), "html", null, true);
        echo "\" alt=\"cosen car\">
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["messages"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["caryouchose"] ?? null) : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "selectedCar", [], "any", false, false, false, 10), "model", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
            <h2>";
        // line 11
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["messages"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["rentperiod"] ?? null) : null), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "rentalPeriod", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["messages"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["dayplural"] ?? null) : null), "html", null, true);
        echo "</h2>
            <h2>";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["messages"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["rentcoststring"] ?? null) : null), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "selectedCar", [], "any", false, false, false, 12), "dailyCost", [], "any", false, false, false, 12), 2, ".", ","), "html", null, true);
        echo " x ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "rentalPeriod", [], "any", false, false, false, 12), "html", null, true);
        echo " days = ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "subCost", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"col-md-6 col-sm-6 text-center bg-success p-3 text-warning\">
            <h2>";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["messages"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["pickuploc"] ?? null) : null), "html", null, true);
        echo " :</h2>
            <h3>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "carLocation", [], "any", false, false, false, 16), "address", [], "any", false, false, false, 16), "html", null, true);
        echo "</h3>
            <h3>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "carLocation", [], "any", false, false, false, 17), "city", [], "any", false, false, false, 17), "html", null, true);
        echo "</h3>
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "carLocation", [], "any", false, false, false, 18), "phone", [], "any", false, false, false, 18), "html", null, true);
        echo "</h3>
            <h3>Date: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "startDateFormatted", [], "any", false, false, false, 19), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"col-md-6 col-sm-6 text-center bg-success p-3 text-warning\">
            <h2>";
        // line 22
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["messages"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["droploc"] ?? null) : null), "html", null, true);
        echo " :</h2>
            <h3>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "carEndLocation", [], "any", false, false, false, 23), "address", [], "any", false, false, false, 23), "html", null, true);
        echo "</h3>
            <h3>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "carEndLocation", [], "any", false, false, false, 24), "city", [], "any", false, false, false, 24), "html", null, true);
        echo "</h3>
            <h3>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "carEndLocation", [], "any", false, false, false, 25), "phone", [], "any", false, false, false, 25), "html", null, true);
        echo "</h3>
            <h3>Date: ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "endDateFormatted", [], "any", false, false, false, 26), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"col-md-12 col-sm-12 text-center bg-success p-3 text-warning\">
            ";
        // line 29
        if ((($context["hasItem"] ?? null) > 0)) {
            // line 30
            echo "            <h2>";
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["messages"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["extrasaddedstring"] ?? null) : null), "html", null, true);
            echo ":</h2>
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["chosenExtras"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["item"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 33
                    echo "                <h3>-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "name", [], "any", false, false, false, 33), "html", null, true);
                    echo " + \$";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub"], "cost", [], "any", false, false, false, 33), "html", null, true);
                    echo "</h3>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            ";
        }
        // line 37
        echo "            <h2>";
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["messages"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["totalrecieptstring"] ?? null) : null), "html", null, true);
        echo ": \$";
        echo twig_escape_filter($this->env, ($context["totalCost"] ?? null), "html", null, true);
        echo "</h2>
            ";
        // line 38
        if (($context["loginSession"] ?? null)) {
            // line 39
            echo "            <h2>";
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["messages"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["payas"] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loginSession"] ?? null), "firstName", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loginSession"] ?? null), "lastName", [], "any", false, false, false, 39), "html", null, true);
            echo "</h2>
            ";
        } else {
            // line 41
            echo "            <h2>";
            echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["messages"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["payas"] ?? null) : null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["messages"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["guest"] ?? null) : null), "html", null, true);
            echo "</h2>
            ";
        }
        // line 43
        echo "
            <div id=\"paybt\"></div>
        </div>
    </div>
</div>
  <script src=\"https://www.paypal.com/sdk/js?client-id=AXhVH5rwOb9b4UKP98Y3ekIisCcZtCDSfpb_Z5Dxh4v6aUsmzunShTExTsqPNSPolqwlf92bXwMbt-dJ&disable-funding=credit,card\"></script>
  <script>
  var checkoutAmount = \"";
        // line 50
        echo twig_escape_filter($this->env, ($context["totalCost"] ?? null), "html", null, true);
        echo "\";

paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: checkoutAmount
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            window.location = \"http://milescarrental.ipd24.ca/payment_success\";
          });
        }
      }).render('#paybt');

    </script>   
    
";
    }

    public function getTemplateName()
    {
        return "exit_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 50,  204 => 43,  196 => 41,  186 => 39,  184 => 38,  177 => 37,  174 => 36,  168 => 35,  157 => 33,  152 => 32,  148 => 31,  143 => 30,  141 => 29,  135 => 26,  131 => 25,  127 => 24,  123 => 23,  119 => 22,  113 => 19,  109 => 18,  105 => 17,  101 => 16,  97 => 15,  85 => 12,  77 => 11,  71 => 10,  67 => 9,  63 => 8,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}{{ messages['ordersummarytitle']}}{% endblock title %}
{% block content %}
<div class=\"container-fluid p-1 mt-5\">
    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 text-center bg-success p-3 text-warning\">
            <h1>{{ messages['ordersummarytitle']}}</h1>
            <img class=\"img-fluid img-limit\" src=\"resources/cars2/{{userSession.selectedCar.imagePath}}\" alt=\"cosen car\">
            <h2>{{ messages['caryouchose']}} {{userSession.selectedCar.model}}</h2>
            <h2>{{ messages['rentperiod']}}: {{userSession.rentalPeriod}} {{messages['dayplural']}}</h2>
            <h2>{{ messages['rentcoststring']}}: {{userSession.selectedCar.dailyCost|number_format(2, '.', ',')}} x {{userSession.rentalPeriod}} days = {{userSession.subCost}}</h2>
        </div>
        <div class=\"col-md-6 col-sm-6 text-center bg-success p-3 text-warning\">
            <h2>{{ messages['pickuploc']}} :</h2>
            <h3>{{userSession.carLocation.address}}</h3>
            <h3>{{userSession.carLocation.city}}</h3>
            <h3>{{userSession.carLocation.phone}}</h3>
            <h3>Date: {{userSession.startDateFormatted}}</h3>
        </div>
        <div class=\"col-md-6 col-sm-6 text-center bg-success p-3 text-warning\">
            <h2>{{ messages['droploc']}} :</h2>
            <h3>{{userSession.carEndLocation.address}}</h3>
            <h3>{{userSession.carEndLocation.city}}</h3>
            <h3>{{userSession.carEndLocation.phone}}</h3>
            <h3>Date: {{userSession.endDateFormatted}}</h3>
        </div>
        <div class=\"col-md-12 col-sm-12 text-center bg-success p-3 text-warning\">
            {% if hasItem > 0 %}
            <h2>{{ messages['extrasaddedstring']}}:</h2>
            {% for item in chosenExtras %}
            {% for sub in item %}
                <h3>-{{sub.name}} + \${{sub.cost}}</h3>
            {% endfor %}
            {% endfor %}
            {% endif %}
            <h2>{{ messages['totalrecieptstring']}}: \${{totalCost}}</h2>
            {% if loginSession %}
            <h2>{{ messages['payas']}} {{loginSession.firstName}} {{loginSession.lastName}}</h2>
            {% else %}
            <h2>{{ messages['payas']}} {{ messages['guest']}}</h2>
            {% endif %}

            <div id=\"paybt\"></div>
        </div>
    </div>
</div>
  <script src=\"https://www.paypal.com/sdk/js?client-id=AXhVH5rwOb9b4UKP98Y3ekIisCcZtCDSfpb_Z5Dxh4v6aUsmzunShTExTsqPNSPolqwlf92bXwMbt-dJ&disable-funding=credit,card\"></script>
  <script>
  var checkoutAmount = \"{{totalCost}}\";

paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: checkoutAmount
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            window.location = \"http://milescarrental.ipd24.ca/payment_success\";
          });
        }
      }).render('#paybt');

    </script>   
    
{% endblock content %}
", "exit_summary.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\exit_summary.html.twig");
    }
}
