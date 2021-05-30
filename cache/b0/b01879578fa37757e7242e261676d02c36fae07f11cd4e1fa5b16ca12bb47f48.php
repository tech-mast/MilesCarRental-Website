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

/* newpassword.html.twig */
class __TwigTemplate_1487da723e66388f9006883c3c779b75f76c2527ada7b61426f31c38fa49d905 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "newpassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "New Password";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"container\" style=\"margin-top:50px\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-lg-8 border border-light shadow-lg p-3 mb-5 bg-body rounded d-flex flex-column justify-content-center mt-5 ml-5\">
                <form method=\"POST\">
                    <div class=\"ynavColorNoHover m-3\">
                        ";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["messages"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["password"] ?? null) : null), "html", null, true);
        echo " <input type=\"password\" name =\"password\" class=\"form-input border-success border-2\"><br>
                    </div>
                    <div class=\"ynavColorNoHover m-3\">
                        ";
        // line 15
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["messages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["password2"] ?? null) : null), "html", null, true);
        echo " <input type=\"password\" name =\"password2\" class=\"form-input border-success border-2\"><br>
                    </div>
                    
                    <div class=\"mx-5\">
                        <input type=\"submit\"  class=\"bg-success text-light rounded\" style=\"width:100px\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["messages"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["submit"] ?? null) : null), "html", null, true);
        echo "\">
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        // line 25
        if (($context["errorList"] ?? null)) {
            // line 26
            echo "    <ul class=\"errorMessage\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 28
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </ul>
";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "newpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  106 => 30,  97 => 28,  93 => 27,  90 => 26,  88 => 25,  79 => 19,  72 => 15,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}New Password{% endblock %}

{% block content %}

    <div class=\"container\" style=\"margin-top:50px\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-lg-8 border border-light shadow-lg p-3 mb-5 bg-body rounded d-flex flex-column justify-content-center mt-5 ml-5\">
                <form method=\"POST\">
                    <div class=\"ynavColorNoHover m-3\">
                        {{ messages['password'] }} <input type=\"password\" name =\"password\" class=\"form-input border-success border-2\"><br>
                    </div>
                    <div class=\"ynavColorNoHover m-3\">
                        {{ messages['password2'] }} <input type=\"password\" name =\"password2\" class=\"form-input border-success border-2\"><br>
                    </div>
                    
                    <div class=\"mx-5\">
                        <input type=\"submit\"  class=\"bg-success text-light rounded\" style=\"width:100px\" value=\"{{ messages['submit'] }}\">
                    </div>
                </form>
            </div>
        </div>
    </div>
{% if errorList %}
    <ul class=\"errorMessage\">
        {% for error in errorList %}
            <li>{{error}}</li>
        {% endfor %}
    </ul>
{% endif %}

{% endblock %}", "newpassword.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\newpassword.html.twig");
    }
}
