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

/* admin/cars_addedit.html.twig */
class __TwigTemplate_34a698605221fe81ffac66a2e47ca7352f02b37487d18c295aab4657067977e1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/cars_addedit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Update car information";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

    ";
        // line 8
        if (($context["errorList"] ?? null)) {
            // line 9
            echo "        <ul class=\"errorMessage\" style =\"margin-top:80px\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </ul>
    ";
        }
        // line 15
        echo "
        <div class=\"container\" style =\"margin-top:60px\">
            <form class=\"row g-3\" method=\"POST\" enctype=\"multipart/form-data\">
                <div class=\"col-12\">
                    <label for=\"carId\" class=\"form-label fw-bold fs-3 ynavColor\">ID: </label>
                    <label class=\"form-label fw-bold fs-3 ynavColor\" id=\"carId\" name=\"carId\" >";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "</label>
                </div>

                <div class=\"col-md-6\">
                    <label for=\"model\" class=\"form-label ynavColor\">";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["translate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["model"] ?? null) : null), "html", null, true);
        echo "</label>
                    <input type=\"text\" class=\"form-control\" id=\"model\" name=\"model\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "model", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-6\">
                    <label for=\"size\" class=\"form-label ynavColor\">";
        // line 28
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["translate"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["size"] ?? null) : null), "html", null, true);
        echo "</label>
                    <input type=\"text\" class=\"form-control\" id=\"size\" name=\"size\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "size", [], "any", false, false, false, 29), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-6\">
                    <label for=\"mileagePerLitre\" class=\"form-label ynavColor\">";
        // line 32
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["translate"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["mileageperlitre"] ?? null) : null), "html", null, true);
        echo "</label>
                    ";
        // line 34
        echo "                    <input type=\"number\" name=\"mileagePerLitre\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "mileagePerLitre", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
                </div>
                <div class=\"col-md-6\">
                    <label for=\"seats\" class=\"form-label ynavColor\">";
        // line 37
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["translate"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["seats"] ?? null) : null), "html", null, true);
        echo "</label>
                    <input type=\"number\" name=\"seats\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "seats", [], "any", false, false, false, 38), "html", null, true);
        echo "\" min=\"2\">
                </div>
                <div class=\"col-md-6\">
                    <label for=\"doors\" class=\"form-label ynavColor\">";
        // line 41
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["translate"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["doors"] ?? null) : null), "html", null, true);
        echo "</label>
                    <input type=\"number\" name=\"doors\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "doors", [], "any", false, false, false, 42), "html", null, true);
        echo "\" min =\"2\" max =\"10\">
                </div>
                <div class=\"col-md-6\">
                    <label for=\"dailyCost\" class=\"form-label ynavColor\">";
        // line 45
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["translate"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["dailycost"] ?? null) : null), "html", null, true);
        echo "</label>
                    <input type=\"number\" name=\"dailyCost\" class=\"form-control\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "dailyCost", [], "any", false, false, false, 46), "html", null, true);
        echo "\" min=\"0\" step=\".01\">
                </div>
                <div class=\"col-12\">
                    <label for=\"inputAddress\" class=\"form-label ynavColor\">";
        // line 49
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["translate"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["localaddress"] ?? null) : null), "html", null, true);
        echo "</label>
                    ";
        // line 51
        echo "                    <select id=\"inputAddress\" name = \"inputAddress\" class=\"form-select\" aria-label=\"Default select example\">
                        <option value=\"\" disabled selected>select drop-off location</option>
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 54
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "locationId", [], "any", false, false, false, 54) == twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 54))) {
                echo "   
                            <option value=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 55), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 57
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 57), "html", null, true);
                echo "</option>
                            ";
            }
            // line 59
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </select>

                </div>
                <div class=\"col-12\">
                    <label for=\"picture\" class=\"form-label ynavColor\">";
        // line 64
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["translate"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["picture"] ?? null) : null), "html", null, true);
        echo "</label>
                    <div class=\"text-center d-flex flex-row justify-content-center align-items-center\">
                        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "imageData", [], "any", false, false, false, 66)) {
            echo "             
                        <img width=\"200px\" src=\"/displaycars/image/";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"rounded \" id=\"oldImage\"> 
                        ";
            // line 69
            echo "                        <p style=\"display:block; width:200px; height:60px;cursor: pointer\" onclick=\"document.getElementById('getFile').click();document.getElementById('getFile').style.display = 'inline-block';document.getElementById('oldImage').style.display = 'none';document.getElementById('changeimage').style.display = 'none';\" id=\"changeimage\" class=\"h6 ynavColor\">Click Here To Change the Picture</p>
                        <input type='file' id=\"getFile\"  name =\"image\" style=\"display:none\"> 
                        ";
        } else {
            // line 72
            echo "                        <input type=\"file\" name=\"image\"/>
                        ";
        }
        // line 74
        echo "                    </div> 
                </div>
                <div class=\"col-12\">
                    <button type=\"submit\" class=\"btn btn-success float-end\">";
        // line 77
        if ((($context["op"] ?? null) == "edit")) {
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["translate"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["updatecare"] ?? null) : null), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["translate"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["addcars"] ?? null) : null), "html", null, true);
        }
        echo "</button>
                </div>
            </form>
            <div class = \"d-flex justify-content-end\">
              <a class=\"nav-link ynavColor border border-success mt-3 rounded text-success\" style= \"width:250px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 50px\" href=\"/admin/cars\">";
        // line 81
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["translate"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["cancel"] ?? null) : null), "html", null, true);
        echo "</a>
            </div>
        </div>
";
        // line 91
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/cars_addedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 91,  249 => 81,  238 => 77,  233 => 74,  229 => 72,  224 => 69,  220 => 67,  216 => 66,  211 => 64,  205 => 60,  199 => 59,  187 => 57,  176 => 55,  171 => 54,  167 => 53,  163 => 51,  159 => 49,  153 => 46,  149 => 45,  143 => 42,  139 => 41,  133 => 38,  129 => 37,  122 => 34,  118 => 32,  112 => 29,  108 => 28,  102 => 25,  98 => 24,  91 => 20,  84 => 15,  80 => 13,  71 => 11,  67 => 10,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Update car information{% endblock %}

{% block content %}


    {% if errorList %}
        <ul class=\"errorMessage\" style =\"margin-top:80px\">
        {% for error in errorList %}
            <li>{{error}}</li>
        {% endfor %}
        </ul>
    {% endif %}

        <div class=\"container\" style =\"margin-top:60px\">
            <form class=\"row g-3\" method=\"POST\" enctype=\"multipart/form-data\">
                <div class=\"col-12\">
                    <label for=\"carId\" class=\"form-label fw-bold fs-3 ynavColor\">ID: </label>
                    <label class=\"form-label fw-bold fs-3 ynavColor\" id=\"carId\" name=\"carId\" >{{c.id}}</label>
                </div>

                <div class=\"col-md-6\">
                    <label for=\"model\" class=\"form-label ynavColor\">{{translate['model']}}</label>
                    <input type=\"text\" class=\"form-control\" id=\"model\" name=\"model\" value=\"{{ c.model }}\">
                </div>
                <div class=\"col-md-6\">
                    <label for=\"size\" class=\"form-label ynavColor\">{{translate['size']}}</label>
                    <input type=\"text\" class=\"form-control\" id=\"size\" name=\"size\" value=\"{{ c.size }}\">
                </div>
                <div class=\"col-md-6\">
                    <label for=\"mileagePerLitre\" class=\"form-label ynavColor\">{{translate['mileageperlitre']}}</label>
                    {# <input type=\"email\" class=\"form-control\" id=\"inputEmail4\"> #}
                    <input type=\"number\" name=\"mileagePerLitre\" class=\"form-control\" value=\"{{ c.mileagePerLitre }}\">
                </div>
                <div class=\"col-md-6\">
                    <label for=\"seats\" class=\"form-label ynavColor\">{{translate['seats']}}</label>
                    <input type=\"number\" name=\"seats\" class=\"form-control\" value=\"{{ c.seats }}\" min=\"2\">
                </div>
                <div class=\"col-md-6\">
                    <label for=\"doors\" class=\"form-label ynavColor\">{{translate['doors']}}</label>
                    <input type=\"number\" name=\"doors\" class=\"form-control\" value=\"{{c.doors}}\" min =\"2\" max =\"10\">
                </div>
                <div class=\"col-md-6\">
                    <label for=\"dailyCost\" class=\"form-label ynavColor\">{{translate['dailycost']}}</label>
                    <input type=\"number\" name=\"dailyCost\" class=\"form-control\" value=\"{{c.dailyCost}}\" min=\"0\" step=\".01\">
                </div>
                <div class=\"col-12\">
                    <label for=\"inputAddress\" class=\"form-label ynavColor\">{{translate['localaddress']}}</label>
                    {# <input type=\"text\" class=\"form-control\" id=\"inputAddress\" placeholder=\"\" name =\"inputAddress\" value=\"{{ c.address }}\"> #}
                    <select id=\"inputAddress\" name = \"inputAddress\" class=\"form-select\" aria-label=\"Default select example\">
                        <option value=\"\" disabled selected>select drop-off location</option>
                        {% for l in locations %}
                            {% if c.locationId == l.id %}   
                            <option value=\"{{l.id}}\" name = \"{{l.id}}\" selected=\"selected\">{{l.id}} - {{l.address}}</option>
                            {% else %}
                            <option value=\"{{l.id}}\" name = \"{{l.id}}\">{{l.id}} - {{l.address}}</option>
                            {% endif %}
                        {% endfor %}
                    </select>

                </div>
                <div class=\"col-12\">
                    <label for=\"picture\" class=\"form-label ynavColor\">{{translate['picture']}}</label>
                    <div class=\"text-center d-flex flex-row justify-content-center align-items-center\">
                        {% if (c.imageData) %}             
                        <img width=\"200px\" src=\"/displaycars/image/{{ c.id }}\" class=\"rounded \" id=\"oldImage\"> 
                        {# <img width=\"200px\" src=\"/uploads/{{ c.imagePath }}\" class=\"rounded \" id=\"oldImage\">  #}
                        <p style=\"display:block; width:200px; height:60px;cursor: pointer\" onclick=\"document.getElementById('getFile').click();document.getElementById('getFile').style.display = 'inline-block';document.getElementById('oldImage').style.display = 'none';document.getElementById('changeimage').style.display = 'none';\" id=\"changeimage\" class=\"h6 ynavColor\">Click Here To Change the Picture</p>
                        <input type='file' id=\"getFile\"  name =\"image\" style=\"display:none\"> 
                        {% else %}
                        <input type=\"file\" name=\"image\"/>
                        {% endif %}
                    </div> 
                </div>
                <div class=\"col-12\">
                    <button type=\"submit\" class=\"btn btn-success float-end\">{% if op == 'edit' %}{{translate['updatecare']}}{% else %}{{translate['addcars']}}{% endif %}</button>
                </div>
            </form>
            <div class = \"d-flex justify-content-end\">
              <a class=\"nav-link ynavColor border border-success mt-3 rounded text-success\" style= \"width:250px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 50px\" href=\"/admin/cars\">{{translate['cancel']}}</a>
            </div>
        </div>
{# 
        <script>
            document.getElementById(\"btChangePhoto\").onclick = function() {
                <input type=\"file\" name=\"image\" placeholder=\"Click here to choose a picture\"/>
            };

        </script> #}

{% endblock %}", "admin/cars_addedit.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\admin\\cars_addedit.html.twig");
    }
}
