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

/* admin/users.html.twig */
class __TwigTemplate_e759de2246c77e17301a3b1d24a203b3c9274e04f099177428eca0b9815ec64a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/users.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "User List";
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script src=\"../../js/users.js\"></script>
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class = \"container-fluid\" style =\"margin-top:80px\">
    <table class=\"table table-hover table-light ynavColorNoHover border-bottom border-success\">
        <thead class=\"table-success\">
            <tr>
            <th scope=\"col\">User Id</th>
            <th scope=\"col\">First Name</th>
            <th scope=\"col\">Last Name</th>
            <th scope=\"col\">Date of Birth</th>
            <th scope=\"col\">Phone</th>
            <th scope=\"col\">Driver Lisence</th>
            <th scope=\"col\">Company</th>
            <th scope=\"col\">email</th>
            <th scope=\"col\">Mailing List</th>
            <th scope=\"col\">Admin</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 27
            echo "                ";
            $context["uid"] = twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 27);
            // line 28
            echo "                <tr>
                <th scope=\"row\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</th>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "firstName", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "lastName", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "DateOfBirth", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "phoneNumber", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td id=\"driver_";
            // line 34
            echo twig_escape_filter($this->env, ($context["uid"] ?? null), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "driversLiscenceNum", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "companyName", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo (((twig_get_attribute($this->env, $this->source, $context["u"], "mailingList", [], "any", false, false, false, 37) == 0)) ? ("No") : ("Yes"));
            echo "</td>
                <td id=\"admin_";
            // line 38
            echo twig_escape_filter($this->env, ($context["uid"] ?? null), "html", null, true);
            echo "\">";
            echo (((twig_get_attribute($this->env, $this->source, $context["u"], "isAdmin", [], "any", false, false, false, 38) == 1)) ? ("Yes") : ("No"));
            echo "</td>
                <td>
                ";
            // line 40
            if ((($context["adminid"] ?? null) == ($context["uid"] ?? null))) {
                // line 41
                echo "                <button id=\"grant_";
                echo twig_escape_filter($this->env, ($context["uid"] ?? null), "html", null, true);
                echo "\" onclick=\"grant(this)\" disabled class=\"btn btn-outline-success\"><i class=\"fas fa-crown\"></i></button>
                ";
            } else {
                // line 43
                echo "                <button id=\"grant_";
                echo twig_escape_filter($this->env, ($context["uid"] ?? null), "html", null, true);
                echo "\" onclick=\"grant(this)\" class=\"btn btn-outline-success\"><i class=\"fas fa-crown\"></i></button>
                ";
            }
            // line 45
            echo "                <button id=\"reset_";
            echo twig_escape_filter($this->env, ($context["uid"] ?? null), "html", null, true);
            echo "\" onclick=\"reset(this)\" class=\"btn btn-outline-success\"><i class=\"fas fa-fingerprint\"></i></button>
                </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            <tr id=\"newuser\">
                <th id=\"newuser_id\"></th>
                <td><input id=\"newuser_fname\" type=\"text\" name =\"firstname\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_lname\" type=\"text\" name =\"lastname\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_birth\" type=\"text\" name =\"birth\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_phone\" type=\"text\" name =\"phone\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_driver\" type=\"text\" name =\"license\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_company\" type=\"text\" name =\"company\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_email\" type=\"text\" name =\"email\" size=\"15\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_mailing\" type=\"checkbox\" name=\"mailing\" value=\"yes\" class=\"form-check-input border-success border-2\"></td>
                <td><input id=\"newuser_admin\" type=\"checkbox\" name=\"isadmin\" value=\"yes\" class=\"form-check-input border-success border-2\"></td>
                <td>
                    <button type=\"button\" class=\"btn-s btn-success\" onclick=\"add()\">Create</button>
                </td>
                </tr>
        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 49,  157 => 45,  151 => 43,  145 => 41,  143 => 40,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  95 => 28,  92 => 27,  88 => 26,  68 => 8,  64 => 7,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}
{% block title %}User List{% endblock title %}
{% block head %}
    <script src=\"../../js/users.js\"></script>
{% endblock head %}

{% block content %}
<div class = \"container-fluid\" style =\"margin-top:80px\">
    <table class=\"table table-hover table-light ynavColorNoHover border-bottom border-success\">
        <thead class=\"table-success\">
            <tr>
            <th scope=\"col\">User Id</th>
            <th scope=\"col\">First Name</th>
            <th scope=\"col\">Last Name</th>
            <th scope=\"col\">Date of Birth</th>
            <th scope=\"col\">Phone</th>
            <th scope=\"col\">Driver Lisence</th>
            <th scope=\"col\">Company</th>
            <th scope=\"col\">email</th>
            <th scope=\"col\">Mailing List</th>
            <th scope=\"col\">Admin</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            {% for u in userList %}
                {% set uid = u.id %}
                <tr>
                <th scope=\"row\">{{u.id}}</th>
                <td>{{u.firstName}}</td>
                <td>{{u.lastName}}</td>
                <td>{{u.DateOfBirth}}</td>
                <td>{{u.phoneNumber}}</td>
                <td id=\"driver_{{uid}}\" >{{u.driversLiscenceNum}}</td>
                <td>{{u.companyName}}</td>
                <td>{{u.email}}</td>
                <td>{{u.mailingList==0?\"No\":\"Yes\"}}</td>
                <td id=\"admin_{{uid}}\">{{u.isAdmin==1?\"Yes\":\"No\"}}</td>
                <td>
                {% if adminid == uid %}
                <button id=\"grant_{{uid}}\" onclick=\"grant(this)\" disabled class=\"btn btn-outline-success\"><i class=\"fas fa-crown\"></i></button>
                {% else %}
                <button id=\"grant_{{uid}}\" onclick=\"grant(this)\" class=\"btn btn-outline-success\"><i class=\"fas fa-crown\"></i></button>
                {% endif %}
                <button id=\"reset_{{uid}}\" onclick=\"reset(this)\" class=\"btn btn-outline-success\"><i class=\"fas fa-fingerprint\"></i></button>
                </td>
                </tr>
            {% endfor %}
            <tr id=\"newuser\">
                <th id=\"newuser_id\"></th>
                <td><input id=\"newuser_fname\" type=\"text\" name =\"firstname\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_lname\" type=\"text\" name =\"lastname\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_birth\" type=\"text\" name =\"birth\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_phone\" type=\"text\" name =\"phone\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_driver\" type=\"text\" name =\"license\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_company\" type=\"text\" name =\"company\" size=\"10\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_email\" type=\"text\" name =\"email\" size=\"15\" class=\"form-input border-success border-2\"></td>
                <td><input id=\"newuser_mailing\" type=\"checkbox\" name=\"mailing\" value=\"yes\" class=\"form-check-input border-success border-2\"></td>
                <td><input id=\"newuser_admin\" type=\"checkbox\" name=\"isadmin\" value=\"yes\" class=\"form-check-input border-success border-2\"></td>
                <td>
                    <button type=\"button\" class=\"btn-s btn-success\" onclick=\"add()\">Create</button>
                </td>
                </tr>
        </tbody>
    </table>
</div>
{% endblock content %}
", "admin/users.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\admin\\users.html.twig");
    }
}
