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

/* admin/cars_delete.html.twig */
class __TwigTemplate_e214d24348b917da3af66e3e33da42a56adf98afc0456bf8a6c07c318fcd7d3b extends \Twig\Template
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
        return "admin/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/cars_delete.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Delete car";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container ynavColorNoHover\" style =\"margin-top:50px\">
        <form class=\"row g-3\" method=\"POST\" enctype=\"multipart/form-data\">

            <div class=\"col-12\">
                <p class=\"h5 ynavColor\">Are you sure you want to delete the following record?</p>
            </div>

            <div class=\"col-12\">
                <label for=\"carId\" class=\"form-label fw-bold fs-3\">ID: </label>
                <label class=\"form-label fw-bold fs-3\" id=\"carId\" name=\"carId\" >";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</label>
            </div>

            <div class=\"col-md-6\">
                <label for=\"model\" class=\"form-label\">";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["translate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["model"] ?? null) : null), "html", null, true);
        echo "</label>
                <label type=\"text\" class=\"form-control\" id=\"model\" name=\"model\"> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "model", [], "any", false, false, false, 20), "html", null, true);
        echo " </label>
            </div>
            <div class=\"col-md-6\">
                <label for=\"size\" class=\"form-label\">";
        // line 23
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["translate"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["size"] ?? null) : null), "html", null, true);
        echo "</label>
                <label type=\"text\" class=\"form-control\" id=\"size\" name=\"size\"> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "size", [], "any", false, false, false, 24), "html", null, true);
        echo " </label>
            </div>
            <div class=\"col-md-6\">
                <label for=\"mileagePerLitre\" class=\"form-label\">";
        // line 27
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["translate"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["mileageperlitre"] ?? null) : null), "html", null, true);
        echo "</label>
                ";
        // line 29
        echo "                <label type=\"number\" name=\"mileagePerLitre\" class=\"form-control\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "mileagePerLitre", [], "any", false, false, false, 29), "html", null, true);
        echo " </label>
            </div>
            <div class=\"col-md-6\">
                <label for=\"seats\" class=\"form-label\">";
        // line 32
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["translate"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["seats"] ?? null) : null), "html", null, true);
        echo "</label>
                <label type=\"number\" name=\"seats\" class=\"form-control\"> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "seats", [], "any", false, false, false, 33), "html", null, true);
        echo " </label>
            </div>
            <div class=\"col-md-6\">
                <label for=\"doors\" class=\"form-label\">";
        // line 36
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["translate"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["doors"] ?? null) : null), "html", null, true);
        echo "</label>
                <label type=\"number\" name=\"doors\" class=\"form-control\"> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "doors", [], "any", false, false, false, 37), "html", null, true);
        echo " </label>
            </div>
            <div class=\"col-md-6\">
                <label for=\"dailyCost\" class=\"form-label\">";
        // line 40
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["translate"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["dailycost"] ?? null) : null), "html", null, true);
        echo "</label>
                <label type=\"number\" name=\"dailyCost\" class=\"form-control\"> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "dailyCost", [], "any", false, false, false, 41), "html", null, true);
        echo " </label>
            </div>
            <div class=\"col-12\">
                <label for=\"inputAddress\" class=\"form-label\">";
        // line 44
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["translate"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["localaddress"] ?? null) : null), "html", null, true);
        echo "</label>
                <label name=\"inputAddress\" class=\"form-control\"> ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["l"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["l"] ?? null), "address", [], "any", false, false, false, 45), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-12\">
                <label for=\"picture\" class=\"form-label\">";
        // line 48
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["translate"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["picture"] ?? null) : null), "html", null, true);
        echo "</label>
                <div class=\"text-center\">
                    ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "imageData", [], "any", false, false, false, 50)) {
            echo "             
                    <img width=\"200px\" src=\"/uploads/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "imagePath", [], "any", false, false, false, 51), "html", null, true);
            echo "\" class=\"rounded\" > 
                    ";
        }
        // line 53
        echo "                </div> 
            </div>
            <div class=\"col-12\">
                <p class=\"h5 d-flex flex-column justify-content-center\">Please confirm this action. It is irreversible</p>
                <button type=\"submit\" class=\"btn btn-success float-end\">";
        // line 57
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["translate"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["delete"] ?? null) : null), "html", null, true);
        echo "</button>
            </div>
        </form>
        <div class = \"d-flex justify-content-end\">
            <a class=\"nav-link ynavColor border border-success mt-3 rounded text-success\" style= \"width:250px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 50px\" href=\"/admin/cars\">";
        // line 61
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["translate"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["cancel"] ?? null) : null), "html", null, true);
        echo "</a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/cars_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  169 => 57,  163 => 53,  158 => 51,  154 => 50,  149 => 48,  141 => 45,  137 => 44,  131 => 41,  127 => 40,  121 => 37,  117 => 36,  111 => 33,  107 => 32,  100 => 29,  96 => 27,  90 => 24,  86 => 23,  80 => 20,  76 => 19,  69 => 15,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Delete car{% endblock %}

{% block content %}
    <div class=\"container ynavColorNoHover\" style =\"margin-top:50px\">
        <form class=\"row g-3\" method=\"POST\" enctype=\"multipart/form-data\">

            <div class=\"col-12\">
                <p class=\"h5 ynavColor\">Are you sure you want to delete the following record?</p>
            </div>

            <div class=\"col-12\">
                <label for=\"carId\" class=\"form-label fw-bold fs-3\">ID: </label>
                <label class=\"form-label fw-bold fs-3\" id=\"carId\" name=\"carId\" >{{ c.id }}</label>
            </div>

            <div class=\"col-md-6\">
                <label for=\"model\" class=\"form-label\">{{translate['model']}}</label>
                <label type=\"text\" class=\"form-control\" id=\"model\" name=\"model\"> {{ c.model }} </label>
            </div>
            <div class=\"col-md-6\">
                <label for=\"size\" class=\"form-label\">{{translate['size']}}</label>
                <label type=\"text\" class=\"form-control\" id=\"size\" name=\"size\"> {{ c.size }} </label>
            </div>
            <div class=\"col-md-6\">
                <label for=\"mileagePerLitre\" class=\"form-label\">{{translate['mileageperlitre']}}</label>
                {# <input type=\"email\" class=\"form-control\" id=\"inputEmail4\"> #}
                <label type=\"number\" name=\"mileagePerLitre\" class=\"form-control\"> {{ c.mileagePerLitre }} </label>
            </div>
            <div class=\"col-md-6\">
                <label for=\"seats\" class=\"form-label\">{{translate['seats']}}</label>
                <label type=\"number\" name=\"seats\" class=\"form-control\"> {{ c.seats }} </label>
            </div>
            <div class=\"col-md-6\">
                <label for=\"doors\" class=\"form-label\">{{translate['doors']}}</label>
                <label type=\"number\" name=\"doors\" class=\"form-control\"> {{c.doors}} </label>
            </div>
            <div class=\"col-md-6\">
                <label for=\"dailyCost\" class=\"form-label\">{{translate['dailycost']}}</label>
                <label type=\"number\" name=\"dailyCost\" class=\"form-control\"> {{c.dailyCost}} </label>
            </div>
            <div class=\"col-12\">
                <label for=\"inputAddress\" class=\"form-label\">{{translate['localaddress']}}</label>
                <label name=\"inputAddress\" class=\"form-control\"> {{l.id}} - {{l.address}}</label>
            </div>
            <div class=\"col-12\">
                <label for=\"picture\" class=\"form-label\">{{translate['picture']}}</label>
                <div class=\"text-center\">
                    {% if (c.imageData) %}             
                    <img width=\"200px\" src=\"/uploads/{{ c.imagePath }}\" class=\"rounded\" > 
                    {% endif %}
                </div> 
            </div>
            <div class=\"col-12\">
                <p class=\"h5 d-flex flex-column justify-content-center\">Please confirm this action. It is irreversible</p>
                <button type=\"submit\" class=\"btn btn-success float-end\">{{translate['delete']}}</button>
            </div>
        </form>
        <div class = \"d-flex justify-content-end\">
            <a class=\"nav-link ynavColor border border-success mt-3 rounded text-success\" style= \"width:250px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 50px\" href=\"/admin/cars\">{{translate['cancel']}}</a>
        </div>
    </div>

{% endblock %}", "admin/cars_delete.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\admin\\cars_delete.html.twig");
    }
}
