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

/* admin/master.html.twig */
class __TwigTemplate_12fe608b044dd6e22e01eda642dae188f248b5fce94b96a90dd3ecc386663c39 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'li' => [$this, 'block_li'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'html' => [$this, 'block_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t";
        // line 5
        echo "\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\" integrity=\"sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js\" integrity=\"sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.0/css/all.css\" integrity=\"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ\" crossorigin=\"anonymous\">
\t\t";
        // line 12
        echo "\t\t<link rel=\"stylesheet\" href=\"/css/master.css\">
\t\t<title>
\t\t\t";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "\t\t\t- My Webpage</title>
\t\t";
        // line 16
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "\t</head>
\t<body>
\t\t<div class=\"container-fluid\"> <!-- \"container\" is necessary for bootstrap -->
\t\t<div class=\"header row\">
\t\t\t<nav class=\"navbar navbar-expand-lg  navbar-light bg-light  fixed-top\">
\t\t\t\t<a class=\"navbar-brand ml-3 py-0\" href=\"/\">
\t\t\t\t\t<div class=\"logo  mx-0 my-0\" style=\"box-shadow: 2px 2px 2px 2px #B3BF54;\">
\t\t\t\t\t\t<span class=\"ynavColor p-2\"> Miles Car Rental  </span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse justify-content-start\" id=\"navbarSupportedContent\" style= \"width: 50%\">
\t\t\t\t\t<ul class=\"navbar-nav mr-5\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link ynavColor\" >
\t\t\t\t\t\t\t\t<span class=\"sr-only\"> &nbsp;&nbsp;</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        ";
        // line 38
        $this->displayBlock('li', $context, $blocks);
        // line 39
        echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link ynavColor border border-success rounded m-3\" style= \"width:145px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 5px\"  href=\"/admin/cars\">";
        // line 40
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["translate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["managecars"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
                            <a class=\"nav-link ynavColor border border-success rounded m-3\" style= \"width:150px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 5px\" href=\"/admin/users\">";
        // line 43
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["translate"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["manageusers"] ?? null) : null), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</li>
            
\t\t\t\t\t\t";
        // line 49
        echo "\t\t\t\t\t\t";
        // line 52
        echo "\t\t\t\t\t\t";
        // line 61
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex ynavColorNoHover justify-content-end flex-row\">
\t\t\t\t\t";
        // line 64
        if (($context["loginSession"] ?? null)) {
            // line 65
            echo "
\t\t\t\t\t<ul class=\"navbar-nav mx-5\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<span>";
            // line 68
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["translate"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["loginas"] ?? null) : null), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loginSession"] ?? null), "firstName", [], "any", false, false, false, 68), "html", null, true);
            echo "</b> </span>
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle ynavColor\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t";
            // line 70
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["translate"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["youcan"] ?? null) : null), "html", null, true);
            echo "\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu ydropDownMeneColor\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item  ynavColor\" href=\"/logout\">";
            // line 73
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["translate"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["logout"] ?? null) : null), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item  ynavColor\" href=\"/editprofile\">";
            // line 74
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["translate"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["editprofile"] ?? null) : null), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, ($context["loginSession"] ?? null), "isAdmin", [], "any", false, false, false, 75) == 1)) {
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"dropdown-item  ynavColor\" href=\"/admin\" class=\"ynavColor\">";
                // line 76
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["translate"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["admininterface"] ?? null) : null), "html", null, true);
                echo "</a>\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t\t";
        } else {
            // line 83
            echo "\t\t\t\t\t\t<div class=\"d-flex flex-row mr-4\">
\t\t\t\t\t\t\t<a href=\"/login\" class=\"ynavColor mx-2\">";
            // line 84
            echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["translate"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["login"] ?? null) : null), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t";
            // line 86
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["translate"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["or"] ?? null) : null), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<a href=\"/register\" class=\"ynavColor  mx-2\">";
            // line 87
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["translate"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["register"] ?? null) : null), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<main>
\t\t\t";
        // line 95
        echo "\t\t\t<div>
\t\t\t\t";
        // line 96
        if (($context["flashMessage"] ?? null)) {
            // line 97
            echo "\t\t\t\t\t<div id=\"flashMessage\">";
            echo twig_escape_filter($this->env, ($context["flashMessage"] ?? null), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 99
        echo "\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 100
        echo "\t\t\t</div>
\t\t</main>
\t\t<footer class=\"footer\">
\t\t\t<div class=\"row yfooter\">
\t\t\t\t";
        // line 104
        $this->displayBlock('footer', $context, $blocks);
        // line 128
        echo "\t\t\t</div>
\t\t</footer>
\t\t</div>
\t</body>
\t";
        // line 132
        $this->displayBlock('html', $context, $blocks);
        // line 133
        echo "\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
</html>
";
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 38
    public function block_li($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 99
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 104
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "\t\t\t\t\t<div class=\"container-fluid text-center bg-light text-light py-2 mt-3 border-top border-light\">
\t\t\t\t\t\t<div class=\"row justify-content-center mt-3\"  style = \"color: #28a745\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 text-left\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 text-left yiconStyle mr-3\"><i class=\"fas fa-map-marker-alt mr-2\"></i> ";
        // line 108
        echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["translate"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["mainoffice"] ?? null) : null), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["locationList"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[0] ?? null) : null), "address", [], "any", false, false, false, 108), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t";
        // line 110
        echo "\t\t\t\t\t\t\t\t<p class=\"mb-0 text-left yiconStyle mr-3\"><i class=\"far fa-envelope mr-2\"></i> Email: customerservice@milescarrental.com</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-3 text-center\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 text-left yiconStyle\"><i class=\"fas fa-phone-volume mr-2\"></i> Tel: 888-800-8080</p>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-left yiconStyle mr-3\"> &copy; Copyright 2011 by MilesCarRental</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-3 text-center align-middle\">
\t\t\t\t\t\t\t\t<p class=\"mb-0 mt-2 yiconStyle\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter mr-2\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-square mr-2\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin mr-2\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram mr-2\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-globe\"></i>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
    }

    // line 132
    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "admin/master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 132,  258 => 110,  253 => 108,  248 => 105,  244 => 104,  238 => 99,  232 => 38,  226 => 16,  220 => 14,  214 => 133,  212 => 132,  206 => 128,  204 => 104,  198 => 100,  195 => 99,  189 => 97,  187 => 96,  184 => 95,  178 => 90,  172 => 87,  168 => 86,  163 => 84,  160 => 83,  153 => 78,  148 => 76,  144 => 75,  140 => 74,  136 => 73,  130 => 70,  123 => 68,  118 => 65,  116 => 64,  111 => 61,  109 => 52,  107 => 49,  101 => 43,  95 => 40,  92 => 39,  90 => 38,  67 => 17,  65 => 16,  62 => 15,  60 => 14,  56 => 12,  48 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t{# <link rel=\"stylesheet\" href=\"/styles.css\"/> #}
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\" integrity=\"sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js\" integrity=\"sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.0/css/all.css\" integrity=\"sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ\" crossorigin=\"anonymous\">
\t\t{# <link rel=\"stylesheet\" href=\"../css/master.css\"> #}
\t\t<link rel=\"stylesheet\" href=\"/css/master.css\">
\t\t<title>
\t\t\t{% block title %}{% endblock %}
\t\t\t- My Webpage</title>
\t\t{% block head %}{% endblock %}
\t</head>
\t<body>
\t\t<div class=\"container-fluid\"> <!-- \"container\" is necessary for bootstrap -->
\t\t<div class=\"header row\">
\t\t\t<nav class=\"navbar navbar-expand-lg  navbar-light bg-light  fixed-top\">
\t\t\t\t<a class=\"navbar-brand ml-3 py-0\" href=\"/\">
\t\t\t\t\t<div class=\"logo  mx-0 my-0\" style=\"box-shadow: 2px 2px 2px 2px #B3BF54;\">
\t\t\t\t\t\t<span class=\"ynavColor p-2\"> Miles Car Rental  </span>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse justify-content-start\" id=\"navbarSupportedContent\" style= \"width: 50%\">
\t\t\t\t\t<ul class=\"navbar-nav mr-5\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link ynavColor\" >
\t\t\t\t\t\t\t\t<span class=\"sr-only\"> &nbsp;&nbsp;</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
                        {% block li %}{% endblock %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link ynavColor border border-success rounded m-3\" style= \"width:145px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 5px\"  href=\"/admin/cars\">{{translate['managecars']}}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
                            <a class=\"nav-link ynavColor border border-success rounded m-3\" style= \"width:150px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 5px\" href=\"/admin/users\">{{translate['manageusers']}}</a>
\t\t\t\t\t\t</li>
            
\t\t\t\t\t\t{# <li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link ynavColor\" href=\"#\">PEOPLE</a>
\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t{# <li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link ynavColor\" href=\"#\">PRACTICES</a>
\t\t\t\t\t\t</li> #}
\t\t\t\t\t\t{# <li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle ynavColor\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t{{translate['language']}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu ydropDownMeneColor\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item  ynavColor\" href=\"/\">{{translate['english']}}</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item ynavColor\" href=\"/fr\" id = \"languageF\">{{translate['french']}}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li> #}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex ynavColorNoHover justify-content-end flex-row\">
\t\t\t\t\t{% if loginSession %}

\t\t\t\t\t<ul class=\"navbar-nav mx-5\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<span>{{translate['loginas']}} <b>{{ loginSession.firstName }}</b> </span>
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle ynavColor\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t{{translate['youcan']}}\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu ydropDownMeneColor\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item  ynavColor\" href=\"/logout\">{{translate['logout']}}</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item  ynavColor\" href=\"/editprofile\">{{translate['editprofile']}}</a>
\t\t\t\t\t\t\t{% if loginSession.isAdmin == 1  %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"dropdown-item  ynavColor\" href=\"/admin\" class=\"ynavColor\">{{translate['admininterface']}}</a>\t\t\t\t\t
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"d-flex flex-row mr-4\">
\t\t\t\t\t\t\t<a href=\"/login\" class=\"ynavColor mx-2\">{{translate['login']}}</a>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t{{translate['or']}}</span>
\t\t\t\t\t\t\t<a href=\"/register\" class=\"ynavColor  mx-2\">{{translate['register']}}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<main>
\t\t\t{# <div id=\"centeredContent row\"> #}
\t\t\t<div>
\t\t\t\t{% if flashMessage %}
\t\t\t\t\t<div id=\"flashMessage\">{{flashMessage}}</div>
\t\t\t\t{% endif %}
\t\t\t\t{% block content %}{% endblock %}
\t\t\t</div>
\t\t</main>
\t\t<footer class=\"footer\">
\t\t\t<div class=\"row yfooter\">
\t\t\t\t{% block footer %}
\t\t\t\t\t<div class=\"container-fluid text-center bg-light text-light py-2 mt-3 border-top border-light\">
\t\t\t\t\t\t<div class=\"row justify-content-center mt-3\"  style = \"color: #28a745\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 text-left\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 text-left yiconStyle mr-3\"><i class=\"fas fa-map-marker-alt mr-2\"></i> {{translate['mainoffice']}}{{locationList[0].address}}</p>
\t\t\t\t\t\t\t\t{# <p class=\"mb-0 text-left yiconStyle\"><i class=\"fas fa-map-marker-alt mr-2\"></i>Toronto: 123456 Rue Blue, Quebec, P5T 9G8</p> #}
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-left yiconStyle mr-3\"><i class=\"far fa-envelope mr-2\"></i> Email: customerservice@milescarrental.com</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-3 text-center\">
\t\t\t\t\t\t\t\t<p class=\"mb-1 text-left yiconStyle\"><i class=\"fas fa-phone-volume mr-2\"></i> Tel: 888-800-8080</p>
\t\t\t\t\t\t\t\t<p class=\"mb-0 text-left yiconStyle mr-3\"> &copy; Copyright 2011 by MilesCarRental</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-3 text-center align-middle\">
\t\t\t\t\t\t\t\t<p class=\"mb-0 mt-2 yiconStyle\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter mr-2\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-square mr-2\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin mr-2\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram mr-2\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-globe\"></i>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t</footer>
\t\t</div>
\t</body>
\t{% block html %}{% endblock %}
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
</html>
", "admin/master.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\admin\\master.html.twig");
    }
}
