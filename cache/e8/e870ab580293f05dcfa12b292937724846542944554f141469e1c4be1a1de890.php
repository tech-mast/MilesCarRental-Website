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

/* extrasother.html.twig */
class __TwigTemplate_f3e16f7a8e58a66e2b7edef4c947785ee53e53e764744c8d6cad9de68054c68c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "extrasother.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Add Extras";
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"row mx-5 bordered rounded text-success bg-light p-1 border-success\" style =\"margin-top:80px\">
        <div class=\"col-md-12 col-sm-12 text-center bg-light p-3 align-self-center\">
            <h1 class=\"text-success mt-5 mb-5\">";
        // line 8
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["messages"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["extrastitle"] ?? null) : null), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"col-md-4 col-sm-12 text-center bg-light p-3 align-self-center\">
            <img class=\"img-fluid img-limit\" src=\"resources/cars2/";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["car"] ?? null), "imagePath", [], "any", false, false, false, 11), "html", null, true);
        echo "\" alt=\"cosen car\">
        </div>
        <div class=\"col-md-4 col-sm-12 text-center bg-light p-3  align-self-center\">
                <h2 class=\"text-success \">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["car"] ?? null), "model", [], "any", false, false, false, 14), "html", null, true);
        echo "</h2>
                <h4 class=\"text-success \">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "carLocation", [], "any", false, false, false, 15), "address", [], "any", false, false, false, 15), "html", null, true);
        echo "</h4>
                <h4 class=\"text-success \">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "carLocation", [], "any", false, false, false, 16), "city", [], "any", false, false, false, 16), "html", null, true);
        echo "</h4>
                <h4 class=\"text-success \">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "carLocation", [], "any", false, false, false, 17), "phone", [], "any", false, false, false, 17), "html", null, true);
        echo "</h4>
        </div>
        <div class=\"col-md-4 col-sm-12 text-center bg-light p-3 align-self-center\">
            <h2 class=\"text-success \">";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["messages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["costestimatestring"] ?? null) : null), "html", null, true);
        echo ":</h2>
            <h2 class=\"text-success \">\$ ";
        // line 21
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["car"] ?? null), "dailyCost", [], "any", false, false, false, 21), 2, ".", ","), "html", null, true);
        echo "</h2>
        </div>
    </div>

    <form method=\"POST\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 27
            echo "        <div class=\"row bg-light m-5 shadow-lg \">
            <div class=\"col-md-4 col-sm-12 text-center bg-light p-3 align-self-center\">
                    <img class=\"img-fluid img-limit\" src=\"resources/extras/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "picReference", [], "any", false, false, false, 29), "html", null, true);
            echo "\" alt=\"extra item\">
            </div>
            <div class=\"col-md-4 col-sm-12 text-center bg-light p-3  align-self-center\">
                    <h2 class=\"text-success \">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</h2>
                    <h3 class=\"text-success \">+ \$";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "cost", [], "any", false, false, false, 33), 2, ".", ","), "html", null, true);
            echo "</h3>
            </div>
            <div class=\"col-md-4 col-sm-12 text-center bg-light p-3 align-self-center\">
                <input type=\"checkbox\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" name=\"cb";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"form-check-input border-success border-2\">
                <input type=\"text\" value='";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["car"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true);
            echo "' name='id' class=\"hidden\" >
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    <div class=\"col-md-12 col-sm-12 text-center p-3 align-self-center \">
        <input type=\"submit\" name=\"cb";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["e"] ?? null), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "\" class=\"btn btn-success bt-width mb-4\" value=\"";
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["messages"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["nextbt"] ?? null) : null), "html", null, true);
        echo "\" >
        <input type=\"text\" value='2' name='exit' class=\"hidden\" >
    </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "extrasother.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 42,  145 => 41,  135 => 37,  129 => 36,  123 => 33,  119 => 32,  113 => 29,  109 => 27,  105 => 26,  97 => 21,  93 => 20,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  69 => 11,  63 => 8,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Add Extras{% endblock title %}
{% block content %}

    <div class=\"row mx-5 bordered rounded text-success bg-light p-1 border-success\" style =\"margin-top:80px\">
        <div class=\"col-md-12 col-sm-12 text-center bg-light p-3 align-self-center\">
            <h1 class=\"text-success mt-5 mb-5\">{{ messages['extrastitle']}}</h1>
        </div>
        <div class=\"col-md-4 col-sm-12 text-center bg-light p-3 align-self-center\">
            <img class=\"img-fluid img-limit\" src=\"resources/cars2/{{car.imagePath}}\" alt=\"cosen car\">
        </div>
        <div class=\"col-md-4 col-sm-12 text-center bg-light p-3  align-self-center\">
                <h2 class=\"text-success \">{{car.model}}</h2>
                <h4 class=\"text-success \">{{userSession.carLocation.address}}</h4>
                <h4 class=\"text-success \">{{userSession.carLocation.city}}</h4>
                <h4 class=\"text-success \">{{userSession.carLocation.phone}}</h4>
        </div>
        <div class=\"col-md-4 col-sm-12 text-center bg-light p-3 align-self-center\">
            <h2 class=\"text-success \">{{ messages['costestimatestring']}}:</h2>
            <h2 class=\"text-success \">\$ {{car.dailyCost|number_format(2, '.', ',')}}</h2>
        </div>
    </div>

    <form method=\"POST\">
    {% for e in extras %}
        <div class=\"row bg-light m-5 shadow-lg \">
            <div class=\"col-md-4 col-sm-12 text-center bg-light p-3 align-self-center\">
                    <img class=\"img-fluid img-limit\" src=\"resources/extras/{{e.picReference}}\" alt=\"extra item\">
            </div>
            <div class=\"col-md-4 col-sm-12 text-center bg-light p-3  align-self-center\">
                    <h2 class=\"text-success \">{{e.name}}</h2>
                    <h3 class=\"text-success \">+ \${{e.cost|number_format(2, '.', ',')}}</h3>
            </div>
            <div class=\"col-md-4 col-sm-12 text-center bg-light p-3 align-self-center\">
                <input type=\"checkbox\" value=\"{{e.id}}\" name=\"cb{{e.id}}\" class=\"form-check-input border-success border-2\">
                <input type=\"text\" value='{{car.id}}' name='id' class=\"hidden\" >
            </div>
        </div>
    {% endfor %}
    <div class=\"col-md-12 col-sm-12 text-center p-3 align-self-center \">
        <input type=\"submit\" name=\"cb{{e.id}}\" class=\"btn btn-success bt-width mb-4\" value=\"{{ messages['nextbt']}}\" >
        <input type=\"text\" value='2' name='exit' class=\"hidden\" >
    </div>
    </form>
{% endblock content %}
", "extrasother.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\extrasother.html.twig");
    }
}
