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

/* admin/cars_list.html.twig */
class __TwigTemplate_ffb88f38c7cf60eef10e3939fdb2381f479ed3635f1ff28c78d9a2617e0219f5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'li' => [$this, 'block_li'],
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/cars_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Car List";
    }

    // line 3
    public function block_li($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <li class=\"nav-item\">
        <a class=\"nav-link ynavColor border border-success rounded m-3 bg-success text-light\" style= \"width:120px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 5px\" href=\"/admin/cars/add\">";
        // line 6
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["translate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["addcars"] ?? null) : null), "html", null, true);
        echo "</a>
    </li>

";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<div class = \"container-fluid\" style =\"margin-top:80px\">
    <table class=\"table table-hover table-light ynavColorNoHover border-bottom border-success\">
        <thead class=\"table-success\">
            <tr>
            <th scope=\"col\">Car Id</th>
            <th scope=\"col\">Model</th>
            <th scope=\"col\">Size</th>
            <th scope=\"col\">Mileage/L</th>
            <th scope=\"col\">Seat</th>
            <th scope=\"col\">Door</th>
            <th scope=\"col\">Daily Cost</th>
            <th scope=\"col\">Location</th>
            <th scope=\"col\">PhoneNumber</th>
            <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 30
            echo "                <tr>
                <th scope=\"row\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</th>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "model", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "size", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "mileagePerLitre", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "seats", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "doors", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "dailyCost", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "address", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "phone", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>
                <button onclick=\"window.location='/admin/cars/edit/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "';\" class=\"btn btn-outline-success\"><i class=\"fas fa-edit\"></i></button>
                <button onclick=\"window.location='/admin/cars/delete/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "';\" class=\"btn btn-outline-success\"><i class=\"fas fa-trash-alt\"></i></button>
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/cars_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 46,  142 => 42,  138 => 41,  133 => 39,  129 => 38,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  98 => 30,  94 => 29,  75 => 12,  71 => 11,  63 => 6,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
{% block title %}Car List{% endblock %}
{% block li %}

    <li class=\"nav-item\">
        <a class=\"nav-link ynavColor border border-success rounded m-3 bg-success text-light\" style= \"width:120px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 5px\" href=\"/admin/cars/add\">{{translate['addcars']}}</a>
    </li>

{% endblock %}

{% block content %}
<div class = \"container-fluid\" style =\"margin-top:80px\">
    <table class=\"table table-hover table-light ynavColorNoHover border-bottom border-success\">
        <thead class=\"table-success\">
            <tr>
            <th scope=\"col\">Car Id</th>
            <th scope=\"col\">Model</th>
            <th scope=\"col\">Size</th>
            <th scope=\"col\">Mileage/L</th>
            <th scope=\"col\">Seat</th>
            <th scope=\"col\">Door</th>
            <th scope=\"col\">Daily Cost</th>
            <th scope=\"col\">Location</th>
            <th scope=\"col\">PhoneNumber</th>
            <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            {% for c in carsList %}
                <tr>
                <th scope=\"row\">{{c.id}}</th>
                <td>{{c.model}}</td>
                <td>{{c.size}}</td>
                <td>{{c.mileagePerLitre}}</td>
                <td>{{c.seats}}</td>
                <td>{{c.doors}}</td>
                <td>{{c.dailyCost}}</td>
                <td>{{c.address}}</td>
                <td>{{c.phone}}</td>
                <td>
                <button onclick=\"window.location='/admin/cars/edit/{{c.id}}';\" class=\"btn btn-outline-success\"><i class=\"fas fa-edit\"></i></button>
                <button onclick=\"window.location='/admin/cars/delete/{{c.id}}';\" class=\"btn btn-outline-success\"><i class=\"fas fa-trash-alt\"></i></button>
                </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}", "admin/cars_list.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\admin\\cars_list.html.twig");
    }
}
