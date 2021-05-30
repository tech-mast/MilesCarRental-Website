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

/* mainpage.html.twig */
class __TwigTemplate_d1e6f98aa254eb06dfa4e7583b2cfc55805e3e005f5bb3d9bab5fdf655eed758 extends \Twig\Template
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
            'html' => [$this, 'block_html'],
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
        $this->parent = $this->loadTemplate("master.html.twig", "mainpage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <style>
        #map {
            height: 700px;
            width: 100%;
        }
        .searchBar{
            display: flex;
            flex-direction: column;
        }
    </style>
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
<div class=\"modal\" id= \"myModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title text-danger font-weight-bold\">Error List:</h5>
        ";
        // line 27
        echo "      </div>
      <div class=\"modal-body\">

        <ul class=\"text-success\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 32
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </ul>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Close</button>
        ";
        // line 40
        echo "      </div>
    </div>
  </div>
</div>

    ";
        // line 45
        if (($context["errorList"] ?? null)) {
            // line 46
            echo "         ";
            // line 47
            echo "        <script> \$('#myModal').modal('show'); console.log(\"herehere\");</script>
    ";
        }
        // line 49
        echo "
    <form method=\"post\" enctype=\"multipart/form-data\" style= \"margin-top: 55px; padding-top: 15px; padding-bottom: 15px\" class = \"form-row ynavColorBackground\">
        <select class=\"ynavColor\" id=\"pickUpLocation\" name = \"locations\" style= \"margin-left: 30px; margin-top:20px; heigth:35px\">
            <option value=\"\" disabled selected>";
        // line 52
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["translate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["pickuplocation"] ?? null) : null), "html", null, true);
        echo "</option>
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locationList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            echo " 
                ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 54) == ($context["location"] ?? null))) {
                echo "           
                <option value=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 55), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 55), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 55), "html", null, true);
                echo "</option>
                ";
            } else {
                // line 57
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 57), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 57), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 57), "html", null, true);
                echo "</option>
                ";
            }
            // line 59
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </select>     
        <select class=\"ynavColor\" id=\"dropoffLocation\" name = \"dropoffLocations\" style= \"margin-top:20px; heigth:35px\">
            <option value=\"\" disabled selected>";
        // line 62
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["translate"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["dropofflocation"] ?? null) : null), "html", null, true);
        echo "</option>
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locationList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 64
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 64) == ($context["dropoffLocation"] ?? null))) {
                echo "   
                <option value=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 65), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 65), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 65), "html", null, true);
                echo "</option>
                ";
            } else {
                // line 67
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 67), "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 67), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 67), "html", null, true);
                echo "</option>
                ";
            }
            // line 69
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </select>
        <label for=\"PickupDate\" class=\"\" style= \"margin-left: 20px; color: white; font-weight: bold;\">";
        // line 71
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["translate"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["pickupdate"] ?? null) : null), "html", null, true);
        echo "</label>
        <input type=\"datetime-local\" id=\"PickupDate\" name=\"PickupDate\" class = \"ynavColor\" style= \"width:210px \"  value =\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["pickupDate"] ?? null), "html", null, true);
        echo "\">
        <label for=\"DropoffDate\" class=\"\" style= \"margin-left: 20px; color: white; font-weight: bold;\">";
        // line 73
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["translate"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["dropoffdate"] ?? null) : null), "html", null, true);
        echo "</label>
        <input type=\"datetime-local\" id=\"DropoffDate\" name=\"DropoffDate\" class = \"ynavColor\" style= \"width:210px;\" value =\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["dropoffDate"] ?? null), "html", null, true);
        echo "\">
        <button type=\"submit\" style= \"width:95px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 5px\" class = \"btn btn-light btn-outline-success my-2 ml-2\">";
        // line 75
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["translate"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["search"] ?? null) : null), "html", null, true);
        echo " </button>
    </form>
    <div id=\"map\"></div>

     <script>

            // Initialize and add the map
        function initMap(){

            var infoWind = new google.maps.InfoWindow();
            var map = new google.maps.Map(
                document.getElementById(\"map\"),
                {
                    zoom: 12,
                    center: { lat: ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["locationList"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null), "lat", [], "any", false, false, false, 89), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["locationList"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null), "lng", [], "any", false, false, false, 89), "html", null, true);
        echo "}
                }
            );

            var marker;

            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locationList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 96
            echo "            marker = new google.maps.Marker({
                position: new google.maps.LatLng(";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "lat", [], "any", false, false, false, 97), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "lng", [], "any", false, false, false, 97), "html", null, true);
            echo "),
                map: map
            });
     
            marker.addListener('mouseover', function(){
                    // infoWind.setContent(content);
                    infoWind.setContent(\" \"+ \"<h5>\"+ \"\"+ ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "count", [], "any", false, false, false, 103), "html", null, true);
            echo " +\"\"+ \"</h5>\"+\" cars available now.\"+\"<br>\"+\"At \"+ '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "address", [], "any", false, false, false, 103), "html", null, true);
            echo "' +\"\");
                    infoWind.open(map, this); // here should be 'this' instead of 'marker'
            })

            marker.addListener('click', function(){
                window.location.href='/rent/";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["maker"] ?? null), "locationId", [], "any", false, false, false, 108), "html", null, true);
            echo "';
            })
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "        }
    </script>
";
    }

    // line 115
    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "  <script async defer
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBZuHEr7kB6hKrIAyT6PQPA_raaT0jgfG4&callback=initMap&libraries=&v=weekly\"
    ></script>

";
    }

    public function getTemplateName()
    {
        return "mainpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 116,  303 => 115,  297 => 111,  288 => 108,  278 => 103,  267 => 97,  264 => 96,  260 => 95,  249 => 89,  232 => 75,  228 => 74,  224 => 73,  220 => 72,  216 => 71,  213 => 70,  207 => 69,  197 => 67,  188 => 65,  183 => 64,  179 => 63,  175 => 62,  171 => 60,  165 => 59,  155 => 57,  146 => 55,  142 => 54,  136 => 53,  132 => 52,  127 => 49,  123 => 47,  121 => 46,  119 => 45,  112 => 40,  105 => 34,  96 => 32,  92 => 31,  86 => 27,  78 => 18,  74 => 17,  60 => 5,  56 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Login{% endblock %}
{% block head %}
    <style>
        #map {
            height: 700px;
            width: 100%;
        }
        .searchBar{
            display: flex;
            flex-direction: column;
        }
    </style>
{% endblock %}

{% block content %}

<div class=\"modal\" id= \"myModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title text-danger font-weight-bold\">Error List:</h5>
        {# <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button> #}
      </div>
      <div class=\"modal-body\">

        <ul class=\"text-success\">
            {% for error in errorList %}
                <li>{{error}}</li>
            {% endfor %}
        </ul>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Close</button>
        {# <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button> #}
      </div>
    </div>
  </div>
</div>

    {% if errorList %}
         {# <script>errorLoad()</script>  #}
        <script> \$('#myModal').modal('show'); console.log(\"herehere\");</script>
    {% endif %}

    <form method=\"post\" enctype=\"multipart/form-data\" style= \"margin-top: 55px; padding-top: 15px; padding-bottom: 15px\" class = \"form-row ynavColorBackground\">
        <select class=\"ynavColor\" id=\"pickUpLocation\" name = \"locations\" style= \"margin-left: 30px; margin-top:20px; heigth:35px\">
            <option value=\"\" disabled selected>{{ translate['pickuplocation']}}</option>
            {% for l in locationList %} 
                {% if l.address == location %}           
                <option value=\"{{l.address}}\" name = \"{{l.address}}\" selected=\"selected\">{{l.address}}</option>
                {% else %}
                <option value=\"{{l.address}}\" name = \"{{l.address}}\">{{l.address}}</option>
                {% endif %}
            {% endfor %}
        </select>     
        <select class=\"ynavColor\" id=\"dropoffLocation\" name = \"dropoffLocations\" style= \"margin-top:20px; heigth:35px\">
            <option value=\"\" disabled selected>{{ translate['dropofflocation']}}</option>
            {% for l in locationList %}
                {% if l.address == dropoffLocation %}   
                <option value=\"{{l.address}}\" name = \"{{l.address}}\" selected=\"selected\">{{l.address}}</option>
                {% else %}
                <option value=\"{{l.address}}\" name = \"{{l.address}}\">{{l.address}}</option>
                {% endif %}
            {% endfor %}
        </select>
        <label for=\"PickupDate\" class=\"\" style= \"margin-left: 20px; color: white; font-weight: bold;\">{{ translate['pickupdate']}}</label>
        <input type=\"datetime-local\" id=\"PickupDate\" name=\"PickupDate\" class = \"ynavColor\" style= \"width:210px \"  value =\"{{pickupDate}}\">
        <label for=\"DropoffDate\" class=\"\" style= \"margin-left: 20px; color: white; font-weight: bold;\">{{ translate['dropoffdate']}}</label>
        <input type=\"datetime-local\" id=\"DropoffDate\" name=\"DropoffDate\" class = \"ynavColor\" style= \"width:210px;\" value =\"{{dropoffDate}}\">
        <button type=\"submit\" style= \"width:95px; height: 30px; border-radius: 10px; padding-top: 2px;margin-left: 5px\" class = \"btn btn-light btn-outline-success my-2 ml-2\">{{ translate['search']}} </button>
    </form>
    <div id=\"map\"></div>

     <script>

            // Initialize and add the map
        function initMap(){

            var infoWind = new google.maps.InfoWindow();
            var map = new google.maps.Map(
                document.getElementById(\"map\"),
                {
                    zoom: 12,
                    center: { lat: {{locationList[0].lat}}, lng: {{locationList[0].lng}}}
                }
            );

            var marker;

            {% for l in locationList %}
            marker = new google.maps.Marker({
                position: new google.maps.LatLng({{ l.lat }}, {{ l.lng }}),
                map: map
            });
     
            marker.addListener('mouseover', function(){
                    // infoWind.setContent(content);
                    infoWind.setContent(\" \"+ \"<h5>\"+ \"\"+ {{ l.count }} +\"\"+ \"</h5>\"+\" cars available now.\"+\"<br>\"+\"At \"+ '{{l.address}}' +\"\");
                    infoWind.open(map, this); // here should be 'this' instead of 'marker'
            })

            marker.addListener('click', function(){
                window.location.href='/rent/{{ maker.locationId}}';
            })
            {% endfor %}
        }
    </script>
{% endblock %}

{% block html %}
  <script async defer
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBZuHEr7kB6hKrIAyT6PQPA_raaT0jgfG4&callback=initMap&libraries=&v=weekly\"
    ></script>

{% endblock %}", "mainpage.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\mainpage.html.twig");
    }
}
