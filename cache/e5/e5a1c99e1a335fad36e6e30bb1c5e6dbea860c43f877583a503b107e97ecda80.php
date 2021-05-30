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

/* register.html.twig */
class __TwigTemplate_2cf65a798fa4f5cd1743dbe2f8a273b8adca9d50e91561f85bad8182282af25b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Register ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (($context["v"] ?? null)) {
            // line 7
            echo "    <div class=\"container\">
        <form method=\"POST\">
            <div class=\"row mt-2\"><div class=\"col-2\">";
            // line 9
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["messages"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["first"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"firstname\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "firstname", [], "any", false, false, false, 9), "html", null, true);
            echo "></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">";
            // line 10
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["messages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["last"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"lastname\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "lastname", [], "any", false, false, false, 10), "html", null, true);
            echo "></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">";
            // line 11
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["messages"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["birth"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"birth\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "dateofbirth", [], "any", false, false, false, 11), "html", null, true);
            echo "></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">";
            // line 12
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["messages"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["phone"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"phone\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "phonenumber", [], "any", false, false, false, 12), "html", null, true);
            echo "></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">";
            // line 13
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["messages"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["lisence"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"license\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "driversliscencenum", [], "any", false, false, false, 13), "html", null, true);
            echo "></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">";
            // line 14
            echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["messages"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["company"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"company\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "companyname", [], "any", false, false, false, 14), "html", null, true);
            echo "></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">";
            // line 15
            echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["messages"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["email"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"email\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "email", [], "any", false, false, false, 15), "html", null, true);
            echo "></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">";
            // line 16
            echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["messages"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["password"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"password\" name =\"password\"></div></div>
            <div class=\"row mt-2\">
                <div class=\"col-2\">";
            // line 18
            echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["messages"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["mailing"] ?? null) : null), "html", null, true);
            echo "</div>
                <div class=\"col-8\">
                    <input type=\"radio\" value=\"yes\" name =\"mailinglist\" checked>";
            // line 20
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["messages"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["mailingyes"] ?? null) : null), "html", null, true);
            echo "
                    <input type=\"radio\" value=\"no\" name =\"mailinglist\">";
            // line 21
            echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["messages"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["mailingno"] ?? null) : null), "html", null, true);
            echo "
                </div>
            </div>
            <div class=\"row mt-2\"><div class=\"col-2\"></div><div class=\"col-8\"><input type=\"submit\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["messages"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["submit"] ?? null) : null), "html", null, true);
            echo "\"></div></div>
        </form>
    </div>
    ";
        } else {
            // line 28
            echo "
    <div class=\"container\" style=\"margin-top:50px\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-lg-8 border border-light shadow-lg p-3 mb-5 bg-body rounded d-flex flex-column justify-content-center mt-5 ml-5\">
            <form method=\"POST\">
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 33
            echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["messages"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["first"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"firstname\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 34
            echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["messages"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["last"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"lastname\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 35
            echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["messages"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["birth"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"birth\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 36
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["messages"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["phone"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"phone\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 37
            echo twig_escape_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["messages"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["lisence"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"license\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 38
            echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["messages"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["company"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"company\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 39
            echo twig_escape_filter($this->env, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["messages"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["email"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"text\" name =\"email\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">";
            // line 40
            echo twig_escape_filter($this->env, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["messages"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["password"] ?? null) : null), "html", null, true);
            echo "</div><div class=\"col-8\"><input type=\"password\" name =\"password\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\">
                    <div class=\"col-3 ynavColorNoHover\">";
            // line 42
            echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["messages"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["mailing"] ?? null) : null), "html", null, true);
            echo "</div>
                    <div class=\"col-8\">
                        <input type=\"radio\" value=\"yes\" name =\"mailinglist\" checked class=\"form-check-input border-success border-2 ynavColorNoHover mx-2\">";
            // line 44
            echo twig_escape_filter($this->env, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["messages"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["mailingyes"] ?? null) : null), "html", null, true);
            echo "
                        <input type=\"radio\" value=\"no\" name =\"mailinglist\" class=\"form-check-input border-success border-2 ynavColorNoHover mx-2\">";
            // line 45
            echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["messages"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["mailingno"] ?? null) : null), "html", null, true);
            echo "
                    </div>
                </div>
                <div class=\"row mt-4\"><div class=\"col-3\"></div><div class=\"col-8\"><input type=\"submit\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["messages"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["submit"] ?? null) : null), "html", null, true);
            echo "\" class=\"bg-success text-light rounded\"></div></div>
            </form>

        </div>
        </div>
    </div>

    ";
        }
        // line 56
        echo "    
    ";
        // line 57
        if (($context["errorList"] ?? null)) {
            // line 58
            echo "    <div class=\"container\">
        <ul class=\"errorMessage\">
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 61
                echo "                <li class=\"row\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </ul>
    </div>
    ";
        }
        // line 66
        echo "
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 66,  222 => 63,  213 => 61,  209 => 60,  205 => 58,  203 => 57,  200 => 56,  189 => 48,  183 => 45,  179 => 44,  174 => 42,  169 => 40,  165 => 39,  161 => 38,  157 => 37,  153 => 36,  149 => 35,  145 => 34,  141 => 33,  134 => 28,  127 => 24,  121 => 21,  117 => 20,  112 => 18,  107 => 16,  101 => 15,  95 => 14,  89 => 13,  83 => 12,  77 => 11,  71 => 10,  65 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %} Register {% endblock %}

{% block content %}
    {% if v %}
    <div class=\"container\">
        <form method=\"POST\">
            <div class=\"row mt-2\"><div class=\"col-2\">{{ messages['first'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"firstname\" value={{v.firstname}}></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">{{ messages['last'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"lastname\" value={{v.lastname}}></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">{{ messages['birth'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"birth\" value={{v.dateofbirth}}></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">{{ messages['phone'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"phone\" value={{v.phonenumber}}></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">{{ messages['lisence'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"license\" value={{v.driversliscencenum}}></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">{{ messages['company'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"company\" value={{v.companyname}}></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">{{ messages['email'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"email\" value={{v.email}}></div></div>
            <div class=\"row mt-2\"><div class=\"col-2\">{{ messages['password'] }}</div><div class=\"col-8\"><input type=\"password\" name =\"password\"></div></div>
            <div class=\"row mt-2\">
                <div class=\"col-2\">{{ messages['mailing'] }}</div>
                <div class=\"col-8\">
                    <input type=\"radio\" value=\"yes\" name =\"mailinglist\" checked>{{ messages['mailingyes'] }}
                    <input type=\"radio\" value=\"no\" name =\"mailinglist\">{{ messages['mailingno'] }}
                </div>
            </div>
            <div class=\"row mt-2\"><div class=\"col-2\"></div><div class=\"col-8\"><input type=\"submit\" value=\"{{ messages['submit'] }}\"></div></div>
        </form>
    </div>
    {% else %}

    <div class=\"container\" style=\"margin-top:50px\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-lg-8 border border-light shadow-lg p-3 mb-5 bg-body rounded d-flex flex-column justify-content-center mt-5 ml-5\">
            <form method=\"POST\">
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['first'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"firstname\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['last'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"lastname\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['birth'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"birth\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['phone'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"phone\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['lisence'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"license\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['company'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"company\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['email'] }}</div><div class=\"col-8\"><input type=\"text\" name =\"email\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\"><div class=\"col-3 ynavColorNoHover\">{{ messages['password'] }}</div><div class=\"col-8\"><input type=\"password\" name =\"password\" class=\"form-input border-success border-2\"></div></div>
                <div class=\"row mt-2\">
                    <div class=\"col-3 ynavColorNoHover\">{{ messages['mailing'] }}</div>
                    <div class=\"col-8\">
                        <input type=\"radio\" value=\"yes\" name =\"mailinglist\" checked class=\"form-check-input border-success border-2 ynavColorNoHover mx-2\">{{ messages['mailingyes'] }}
                        <input type=\"radio\" value=\"no\" name =\"mailinglist\" class=\"form-check-input border-success border-2 ynavColorNoHover mx-2\">{{ messages['mailingno'] }}
                    </div>
                </div>
                <div class=\"row mt-4\"><div class=\"col-3\"></div><div class=\"col-8\"><input type=\"submit\" value=\"{{ messages['submit'] }}\" class=\"bg-success text-light rounded\"></div></div>
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
", "register.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\register.html.twig");
    }
}
