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

/* admin/error_access_denied.html.twig */
class __TwigTemplate_17608bd58773c2a4cb12e2a504f63226e437267ae0e91b094bd8063439779a71 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/error_access_denied.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Access denied";
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
        <p class=\"ynavColor h3\">Access denied</p>
        <p class=\"ynavColor h4\">You must be logged in as Administrator to access this page.</p>
        <a class=\"nav-link ynavColor border border-success mt-3 rounded text-success\" style= \"width:250px; height: 30px; border-radius: 10px; padding-top: 2px;\" href=\"/\">";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["translate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["continue"] ?? null) : null), "html", null, true);
        echo "</a>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "admin/error_access_denied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Access denied{% endblock %}

{% block content %}

  <div class=\"container\" style=\"margin-top:100px\">
    <div class=\"row justify-content-md-center\">
      <div class=\"col-lg-8 border border-light shadow-lg p-3 mb-5 bg-body rounded d-flex flex-column justify-content-center mt-5 ml-5\">
        <p class=\"ynavColor h3\">Access denied</p>
        <p class=\"ynavColor h4\">You must be logged in as Administrator to access this page.</p>
        <a class=\"nav-link ynavColor border border-success mt-3 rounded text-success\" style= \"width:250px; height: 30px; border-radius: 10px; padding-top: 2px;\" href=\"/\">{{translate['continue']}}</a>
      </div>
    </div>
  </div>
{% endblock %}", "admin/error_access_denied.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\admin\\error_access_denied.html.twig");
    }
}
