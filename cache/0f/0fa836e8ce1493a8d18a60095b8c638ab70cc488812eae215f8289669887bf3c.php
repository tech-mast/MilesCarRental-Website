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

/* admin/index.html.twig */
class __TwigTemplate_46548dfb53dad6676c7d3ea5c2c89ed0e8fd2ca97fde685cb2787a3b903fc9a2 extends \Twig\Template
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
            'foot' => [$this, 'block_foot'],
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
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin main page";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
  <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
  <div class=\"container\">
    <div class=\"row justify-content-md-center\">
      <div class=\"col-lg-6 border border-light shadow-lg p-3 mb-5 bg-body rounded\">
   
        <div id=\"piechart\" style=\"width:500px; height: 400px;\"></div>
      </div>
      <div class=\"col-lg-6 border border-light shadow-lg p-3 mb-5 bg-body rounded\">
        <div id=\"columnchart\" style=\"width: 550px; height: 400px;\"></div>
      </div>
    </div>
  </div>

    ";
        // line 26
        echo "
    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data=[];
        var Header= ['Model', 'Count'];
        data.push(Header);

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modelCuontList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 37
            echo "          var temp =[];
            temp.push('";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "model", [], "any", false, false, false, 38), "html", null, true);
            echo "');
            temp.push(";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "count", [], "any", false, false, false, 39), "html", null, true);
            echo ");
            data.push(temp);
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
        var data = google.visualization.arrayToDataTable(data);        
        var options = {
          title: 'Cars Model',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>

    ";
        // line 54
        echo "    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data=[];
        var Header= ['Address', 'Availabe Cars', { role: 'style' }];
        data.push(Header);

        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vehiclesCount"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 65
            echo "          var temp =[];
            temp.push('";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "address", [], "any", false, false, false, 66), "html", null, true);
            echo "');
            temp.push(";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "count", [], "any", false, false, false, 67), "html", null, true);
            echo ");
            temp.push('fill-color: #28a745; fill-opacity: 0.7');
            data.push(temp);
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        var data = google.visualization.arrayToDataTable(data);
        var options = {
          title: 'Cars number in Location',
          legend: {position: 'bottom', textStyle: {color: '#28a745', fontSize: 16}},
          colors: ['#28a745'],
          bar: { groupWidth: '45%' },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
        chart.draw(data, options);
      }
    </script>

";
    }

    // line 84
    public function block_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "

";
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 85,  180 => 84,  164 => 71,  154 => 67,  150 => 66,  147 => 65,  143 => 64,  131 => 54,  118 => 42,  109 => 39,  105 => 38,  102 => 37,  98 => 36,  86 => 26,  71 => 12,  67 => 11,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/master.html.twig\" %}

{% block title %}Admin main page{% endblock %}

{% block head %}

  <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>

{% endblock %}

{% block content %}

  <div class=\"container\">
    <div class=\"row justify-content-md-center\">
      <div class=\"col-lg-6 border border-light shadow-lg p-3 mb-5 bg-body rounded\">
   
        <div id=\"piechart\" style=\"width:500px; height: 400px;\"></div>
      </div>
      <div class=\"col-lg-6 border border-light shadow-lg p-3 mb-5 bg-body rounded\">
        <div id=\"columnchart\" style=\"width: 550px; height: 400px;\"></div>
      </div>
    </div>
  </div>

    {# pieChart #}

    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data=[];
        var Header= ['Model', 'Count'];
        data.push(Header);

        {% for m in modelCuontList %}
          var temp =[];
            temp.push('{{m.model}}');
            temp.push({{m.count}});
            data.push(temp);
        {% endfor %}

        var data = google.visualization.arrayToDataTable(data);        
        var options = {
          title: 'Cars Model',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>

    {# Column Chart  #}
    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data=[];
        var Header= ['Address', 'Availabe Cars', { role: 'style' }];
        data.push(Header);

        {% for v in vehiclesCount %}
          var temp =[];
            temp.push('{{v.address}}');
            temp.push({{v.count}});
            temp.push('fill-color: #28a745; fill-opacity: 0.7');
            data.push(temp);
        {% endfor %}
        var data = google.visualization.arrayToDataTable(data);
        var options = {
          title: 'Cars number in Location',
          legend: {position: 'bottom', textStyle: {color: '#28a745', fontSize: 16}},
          colors: ['#28a745'],
          bar: { groupWidth: '45%' },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
        chart.draw(data, options);
      }
    </script>

{% endblock %}
{% block foot %}


{% endblock %}", "admin/index.html.twig", "E:\\Xampp\\htdocs\\ipd24\\milescarrental\\templates\\admin\\index.html.twig");
    }
}
