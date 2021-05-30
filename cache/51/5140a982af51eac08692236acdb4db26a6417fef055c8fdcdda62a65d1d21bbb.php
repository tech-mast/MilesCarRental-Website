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

/* profile.html.twig */
class __TwigTemplate_e955de29a5a92a1745b1f826d49bb8c28bc310d90f81516c8346186ab0a12b5e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit Profile";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (($context["v"] ?? null)) {
            // line 7
            echo "    <div class=\"container\" style=\"margin-top:50px\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-lg-8 border border-light shadow-lg p-3 mb-5 bg-body rounded d-flex flex-column justify-content-center mt-5 ml-5\">
                <form method=\"POST\">
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 11
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["messages"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["first"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"firstname\"  class=\"form-input border-success border-2\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "firstname", [], "any", false, false, false, 11), "html", null, true);
            echo "></div></div>
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 12
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["messages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["last"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"lastname\" class=\"form-input border-success border-2\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "lastname", [], "any", false, false, false, 12), "html", null, true);
            echo " ></div></div>
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 13
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["messages"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["phone"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"phone\" class=\"form-input border-success border-2\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "phonenumber", [], "any", false, false, false, 13), "html", null, true);
            echo "></div></div>
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 14
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["messages"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["lisence"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"license\" class=\"form-input border-success border-2\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "driversliscencenum", [], "any", false, false, false, 14), "html", null, true);
            echo "></div></div>
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 15
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["messages"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["company"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"company\" class=\"form-input border-success border-2\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "companyname", [], "any", false, false, false, 15), "html", null, true);
            echo "></div></div>
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 16
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["messages"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["email"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"email\" class=\"form-input border-success border-2 ynavColorNoHover\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "email", [], "any", false, false, false, 16), "html", null, true);
            echo " ></div></div>
                    <div class=\"row mt-4\"><div class=\"col-3 ynavColorNoHover\"></div><div class=\"col-8\"><input type=\"submit\" class=\"bg-success text-light rounded\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["messages"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["update"] ?? null) : null), "html", null, true);
            echo "\"></div></div>
                </form>
            </div>
        </div>
    </div>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        if (($context["errorList"] ?? null)) {
            // line 25
            echo "    <div class=\"container\">
        <ul class=\"errorMessage\">
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 28
                echo "                <li class=\"row\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </ul>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 30,  125 => 28,  121 => 27,  117 => 25,  115 => 24,  112 => 23,  103 => 17,  97 => 16,  91 => 15,  85 => 14,  79 => 13,  73 => 12,  67 => 11,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Edit Profile{% endblock %}

{% block content %}
    {% if v %}
    <div class=\"container\" style=\"margin-top:50px\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-lg-8 border border-light shadow-lg p-3 mb-5 bg-body rounded d-flex flex-column justify-content-center mt-5 ml-5\">
                <form method=\"POST\">
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['first'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"firstname\"  class=\"form-input border-success border-2\" value={{v.firstname}}></div></div>
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['last'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"lastname\" class=\"form-input border-success border-2\" value={{v.lastname}} ></div></div>
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['phone'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"phone\" class=\"form-input border-success border-2\" value={{v.phonenumber}}></div></div>
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['lisence'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"license\" class=\"form-input border-success border-2\" value={{v.driversliscencenum}}></div></div>
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['company'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"company\" class=\"form-input border-success border-2\" value={{v.companyname}}></div></div>
                    <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['email'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"email\" class=\"form-input border-success border-2 ynavColorNoHover\" value={{v.email}} ></div></div>
                    <div class=\"row mt-4\"><div class=\"col-3 ynavColorNoHover\"></div><div class=\"col-8\"><input type=\"submit\" class=\"bg-success text-light rounded\" value=\"{{ messages['update'] }}\"></div></div>
                </form>
            </div>
        </div>
    </div>
    {% endif %}

    {% if errorList %}
    <div class=\"container\">
        <ul class=\"errorMessage\">
            {% for error in errorList %}
                <li class=\"row\">{{error}}</li>
            {% endfor %}
        </ul>
    </div>
    {% endif %}
{% endblock %}
", "profile.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\profile.html.twig");
    }
}
