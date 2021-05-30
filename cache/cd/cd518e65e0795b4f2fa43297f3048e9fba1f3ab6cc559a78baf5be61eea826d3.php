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

/* rent.html.twig */
class __TwigTemplate_62ddf32d24fa1add5a5d764993311850a8cf33acdccf82854be2c9353f314222 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "rent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["messages"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["rentcartitle"] ?? null) : null), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<script type = \"text/javascript\">
var x = false;
    function page_redirect(){  
    // window.location = \"http://milescarrental.ipd24.ca/rent\";  
    window.location = \"http://milescarrental.local:8888/rent\";  
}
</script>
<div class=\"row bg-success mb-1 mt-5 p-1 bordered rounded text-success\">
    <div class=\"col-md-12 col-sm-12 text-center bg-light p-3 align-self-center\">
        <h1 class=\" mt-5 align-self-center\">";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["messages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["chooseCar"] ?? null) : null), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"col-md-12 col-sm-12 text-center bg-light p-3 align-self-center\">
    </div>
    <div class=\"col-md-12 col-sm-12 text-center bg-light p-3  align-self-center\">
            <h4 >";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["messages"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["address"] ?? null) : null), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loc"] ?? null), "address", [], "any", false, false, false, 18), "html", null, true);
        echo "</h4>
            <h4 >";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["messages"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["city"] ?? null) : null), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loc"] ?? null), "city", [], "any", false, false, false, 19), "html", null, true);
        echo "</h4>
            <h4 >";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["messages"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["phone"] ?? null) : null), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loc"] ?? null), "phone", [], "any", false, false, false, 20), "html", null, true);
        echo "</h4>
    </div>
</div>
<div class=\"container-fluid p-1 m-0 text-warning\">
    <div class=\"row  justify-content-center\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 26
            echo "        <div class=\"col-md-5 col-sm-12 text-center bg-light p-3 border border-light shadow-lg m-5\">
            <form method=\"POST\" class=\"text-success\">
                <img class=\"img-fluid img-limit\" src=\"resources/cars2/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "imagePath", [], "any", false, false, false, 28), "html", null, true);
            echo "\" alt=\"car\">
                <h2>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "model", [], "any", false, false, false, 29), "html", null, true);
            echo "</h2>
                <h3>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "size", [], "any", false, false, false, 30), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "seats", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["messages"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["seats"] ?? null) : null), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "doors", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["messages"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["doors"] ?? null) : null), "html", null, true);
            echo ".</h3>
                <h3>\$";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "dailyCost", [], "any", false, false, false, 31), 2, ".", ","), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["messages"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["day"] ?? null) : null), "html", null, true);
            echo "</h3>
                <input type=\"text\" value='";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "' name='id' class=\"hidden\">
                <input type=\"submit\" class=\"btn btn-success bt-width mt-2\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["messages"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["select"] ?? null) : null), "html", null, true);
            echo "\">
            </form>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "rent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  137 => 33,  133 => 32,  127 => 31,  115 => 30,  111 => 29,  107 => 28,  103 => 26,  99 => 25,  89 => 20,  83 => 19,  77 => 18,  69 => 13,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}
{% block title %}{{ messages['rentcartitle']}}{% endblock title %}
{% block content %}
<script type = \"text/javascript\">
var x = false;
    function page_redirect(){  
    // window.location = \"http://milescarrental.ipd24.ca/rent\";  
    window.location = \"http://milescarrental.local:8888/rent\";  
}
</script>
<div class=\"row bg-success mb-1 mt-5 p-1 bordered rounded text-success\">
    <div class=\"col-md-12 col-sm-12 text-center bg-light p-3 align-self-center\">
        <h1 class=\" mt-5 align-self-center\">{{ messages['chooseCar']}}</h1>
    </div>
    <div class=\"col-md-12 col-sm-12 text-center bg-light p-3 align-self-center\">
    </div>
    <div class=\"col-md-12 col-sm-12 text-center bg-light p-3  align-self-center\">
            <h4 >{{ messages['address']}}: {{loc.address}}</h4>
            <h4 >{{ messages['city']}}: {{loc.city}}</h4>
            <h4 >{{ messages['phone']}}: {{loc.phone}}</h4>
    </div>
</div>
<div class=\"container-fluid p-1 m-0 text-warning\">
    <div class=\"row  justify-content-center\">
        {% for car in cars %}
        <div class=\"col-md-5 col-sm-12 text-center bg-light p-3 border border-light shadow-lg m-5\">
            <form method=\"POST\" class=\"text-success\">
                <img class=\"img-fluid img-limit\" src=\"resources/cars2/{{car.imagePath}}\" alt=\"car\">
                <h2>{{car.model}}</h2>
                <h3>{{car.size}} : {{car.seats}} {{ messages['seats']}}, {{car.doors}} {{ messages['doors']}}.</h3>
                <h3>\${{car.dailyCost|number_format(2, '.', ',')}}/{{messages['day']}}</h3>
                <input type=\"text\" value='{{car.id}}' name='id' class=\"hidden\">
                <input type=\"submit\" class=\"btn btn-success bt-width mt-2\" value=\"{{ messages['select']}}\">
            </form>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock content %}", "rent.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\rent.html.twig");
    }
}
