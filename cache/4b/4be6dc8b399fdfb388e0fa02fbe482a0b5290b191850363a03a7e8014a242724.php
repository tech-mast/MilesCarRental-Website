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

/* login.html.twig */
class __TwigTemplate_86d7a993fdff63f97947b11f46cce0201b332c77a8d82cc78b794a76fea046c3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container\" style=\"margin-top:100px\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-lg-8 border border-light shadow-lg p-3 mb-5 bg-body rounded d-flex flex-column justify-content-center mt-5 ml-5\">
        <form method=\"POST\">
            <div class=\"row mt-2 p-0\"><div class=\"col-2 ynavColorNoHover\">";
        // line 11
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["messages"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["email"] ?? null) : null), "html", null, true);
        echo ": </div> <div class=\"col-8\"><input type=\"text\" name =\"email\"class=\"form-input border-success border-2\" ></div>
            <div class=\"row mt-2\"><div class=\"col-2 ynavColorNoHover\">";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["messages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["password"] ?? null) : null), "html", null, true);
        echo ": </div> <div class=\"col-8\"><input type=\"password\" name =\"password\" class=\"form-input border-success border-2\"></div>
            <div class=\"row mt-4\"><div class=\"col-2\"></div> <div class=\"col-8\"><input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["messages"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["submit"] ?? null) : null), "html", null, true);
        echo "\" class=\"bg-success text-light rounded\"></div></div>
        </form>
        </div>
    </div>
</div>

";
        // line 19
        if (($context["errorList"] ?? null)) {
            // line 20
            echo "    <div class=\"container\">
        <ul class=\"errorMessage\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 23
                echo "                <li class=\"row\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>
    </div>
";
        }
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  101 => 25,  92 => 23,  88 => 22,  84 => 20,  82 => 19,  73 => 13,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Login{% endblock %}

{% block content %}

<div class=\"container\" style=\"margin-top:100px\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-lg-8 border border-light shadow-lg p-3 mb-5 bg-body rounded d-flex flex-column justify-content-center mt-5 ml-5\">
        <form method=\"POST\">
            <div class=\"row mt-2 p-0\"><div class=\"col-2 ynavColorNoHover\">{{ messages['email'] }}: </div> <div class=\"col-8\"><input type=\"text\" name =\"email\"class=\"form-input border-success border-2\" ></div>
            <div class=\"row mt-2\"><div class=\"col-2 ynavColorNoHover\">{{ messages['password'] }}: </div> <div class=\"col-8\"><input type=\"password\" name =\"password\" class=\"form-input border-success border-2\"></div>
            <div class=\"row mt-4\"><div class=\"col-2\"></div> <div class=\"col-8\"><input type=\"submit\" value=\"{{ messages['submit'] }}\" class=\"bg-success text-light rounded\"></div></div>
        </form>
        </div>
    </div>
</div>

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
", "login.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\login.html.twig");
    }
}
