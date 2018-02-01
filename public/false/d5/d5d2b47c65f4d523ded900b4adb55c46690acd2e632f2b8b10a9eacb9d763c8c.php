<?php

/* xLoginCustomer.html */
class __TwigTemplate_d102bad33b2c39614a868690694de936f7b07870dc369c7397e40b05fb95f193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: \"Lato\", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id=\"mySidenav\" class=\"sidenav\">
  <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>
  <a href=\"#\">About</a>
  <a href=\"#\">Services</a>
  <a href=\"#\">Clients</a>
  <a href=\"#\">Contact</a>
</div>

<div id=\"main\">
  <h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right. Notice that we add a black see-through background-color to body when the sidenav is opened.</p>
  <span style=\"font-size:30px;cursor:pointer\" onclick=\"openNav()\">&#9776; open</span>
</div>

<script>
function openNav() {
    document.getElementById(\"mySidenav\").style.width = \"250px\";
    document.getElementById(\"main\").style.marginLeft = \"250px\";
    document.body.style.backgroundColor = \"rgba(0,0,0,0.4)\";
}

function closeNav() {
    document.getElementById(\"mySidenav\").style.width = \"0\";
    document.getElementById(\"main\").style.marginLeft= \"0\";
    document.body.style.backgroundColor = \"white\";
}
</script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "xLoginCustomer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "xLoginCustomer.html", "C:\\xampp\\htdocs\\slimci\\application\\View\\xLoginCustomer.html");
    }
}
