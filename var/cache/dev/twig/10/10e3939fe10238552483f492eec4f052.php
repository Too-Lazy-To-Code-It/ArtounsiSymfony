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

/* explore/details.html.twig */
class __TwigTemplate_74a4e4a5d6ba10a5852c0afb45e9e821 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "explore/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "explore/details.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "

    ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    ";
        // line 16
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 23
        echo "



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "
    <!-- ***** Preloader Start ***** -->
    ";
        // line 43
        echo "
    <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" >
                        ";
        // line 53
        echo "                        ";
        // line 54
        echo "                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                        <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                        <li><a href=\"details.html.twig\">Item Details</a></li>
                        <li><a href=\"author.html\">Author</a></li>
                        <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
    </header>
    <div class=\"page-heading normal-space\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
            <h6>Liberty NFT Market</h6>
            <h2>View Item Details</h2>
            <span>Home > <a href=\"#\">Item Details</a></span>
            <div class=\"buttons\">
                <div class=\"main-button\">
                <a href=\"explore.html\">Explore Our Items</a>
                </div>
                <div class=\"border-button\">
                <a href=\"create.html\">Create Your NFT</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>View Details <em>For Item</em> Here.</h2>
                    </div>
                    </div>
                    <div class=\"col-lg-7\">
                    <div class=\"left-image\">
                        <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 105, $this->source); })()), "media", [], "any", false, false, false, 105), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
                    </div>
                    </div>
                    <div class=\"col-lg-5 align-self-center\">
                    <h4>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 109, $this->source); })()), "titleP", [], "any", false, false, false, 109), "html", null, true);
        echo "</h4>
                    ";
        // line 111
        echo "                    <span class=\"author\">
                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/author-02.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                        <h6>Artist<br><a href=\"#\">";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 113, $this->source); })()), "getUserName", [], "any", false, false, false, 113), "html", null, true);
        echo "</a></h6>
                    </span>
                    <p>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 115, $this->source); })()), "getDescriptionP", [], "any", false, false, false, 115), "html", null, true);
        echo "</p>
                    <div class=\"row\">
                        <div class=\"col-3\">
                        <span class=\"bid\">
                            Current Likes<br><strong>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 119, $this->source); })()), "postLikes", [], "any", false, false, false, 119), "count", [], "any", false, false, false, 119), "html", null, true);
        echo "</strong><br>
                        </span>
                        <span class=\"bid\">
                            <br><strong><a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_edit", ["id_post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 122, $this->source); })()), "getId", [], "any", false, false, false, 122)]), "html", null, true);
        echo "\">Edit Post</a></strong><br>
                            ";
        // line 123
        echo twig_include($this->env, $context, "post/_delete_form.html.twig");
        echo "
                            
                        </span>
                </div>
                        <div class=\"fb-like\" id=\"like-btn\">
                            ";
        // line 128
        echo twig_include($this->env, $context, "post_like/_form.html.twig");
        echo "             
                            <h1></h1>
                        </div> 
                    
            </div>

            </div>
            <div class=\"col-lg-12\">
            <div class=\"current-bid\">
                <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mini-heading\"><h4>Current Comments</h4></div>
                </div>
                <div class=\"col-lg-6\">
                    <fieldset>
                        <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                            <option selected>Sort By: Latest</option>
                            <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                            <option value=\"low\">Sort By: Lowest</option>
                            <option value=\"high\">Sort By: Highest</option>
                        </select>
                    </fieldset>
                </div>
                <div class=\"row\">
                
                    ";
        // line 153
        $context["commentGroups"] = twig_array_batch((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 153, $this->source); })()), 3);
        // line 154
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentGroups"]) || array_key_exists("commentGroups", $context) ? $context["commentGroups"] : (function () { throw new RuntimeError('Variable "commentGroups" does not exist.', 154, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 155
            echo "                        <div class=\"row\">
                            ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["group"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 157
                echo "                            ";
                $context["postId"] = twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 157, $this->source); })()), "getIdPost", [], "any", false, false, false, 157);
                // line 158
                echo "                            ";
                $context["commentId"] = twig_get_attribute($this->env, $this->source, $context["comment"], "getIdPost", [], "any", false, false, false, 158);
                // line 159
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getIdPost", [], "method", false, false, false, 159), "getIdPost", [], "method", false, false, false, 159) == twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 159, $this->source); })()), "getIdPost", [], "method", false, false, false, 159))) {
                    // line 160
                    echo "                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"item\">
                                        <div class=\"right-content\">
                                            <h4>Name : </h4>
                                            <a href=\"#\">";
                    // line 164
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getIdUser", [], "method", false, false, false, 164), "getName", [], "method", false, false, false, 164), "html", null, true);
                    echo "</a>
                                            <div class=\"line-dec\"></div>
                                            <h6>Comment: <em>";
                    // line 166
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getComment", [], "any", false, false, false, 166), "html", null, true);
                    echo "</em></h6>
                                            <span class=\"date\">";
                    // line 167
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getDateComment", [], "method", false, false, false, 167), "Y-m-d H:i:s"), "html", null, true);
                    echo "</span>
                                            <h6><a href=\"";
                    // line 168
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_edit", ["id_comment" => twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "any", false, false, false, 168)]), "html", null, true);
                    echo "\">edit</a></h6>
                                            <h6>";
                    // line 169
                    echo twig_include($this->env, $context, "comment/_delete_form.html.twig");
                    echo "</h6>
                                        </div>
                                    </div>
                                </div>
                                ";
                }
                // line 174
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "

                </div>
                </div>
            </div
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <form action=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_new", ["id_post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 184, $this->source); })()), "getIdPost", [], "any", false, false, false, 184)]), "html", null, true);
        echo "\" method=\"post\">
                        <input type=\"submit\" value=\"Add Comment\" style=\"font-size: 20px; padding: 10px;width: 100%;\" >
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class=\"create-nft\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
            <div class=\"section-heading\">
                <div class=\"line-dec\"></div>
                <h2>Create Your NFT & Put It On The Market.</h2>
            </div>
            </div>
            <div class=\"col-lg-4\">
            <div class=\"main-button\">
                <a href=\"create.html\">Create Your NFT Now</a>
            </div>
            </div>
            <div class=\"col-lg-4\">
            <div class=\"item first-item\">
                <div class=\"number\">
                <h6>1</h6>
                </div>
                <div class=\"icon\">
                <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-02.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <h4>Set Up Your Wallet</h4>
                <p>There are 5 different HTML pages included in this NFT <a href=\"https://templatemo.com/page/1\" target=\"_blank\" rel=\"nofollow\">website template</a>. You can edit or modify any section on any page as you required.</p>
            </div>
            </div>
            <div class=\"col-lg-4\">
            <div class=\"item second-item\">
                <div class=\"number\">
                <h6>2</h6>
                </div>
                <div class=\"icon\">
                    <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-04.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <h4>Add Your Digital NFT</h4>
                <p>If you would like to support our TemplateMo website, please visit <a rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">our contact page</a> to make a PayPal contribution. Thank you.</p>
            </div>
            </div>
            <div class=\"col-lg-4\">
            <div class=\"item\">
                <div class=\"icon\">
                <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-06.png"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <h4>Sell Your NFT &amp; Make Profit</h4>
                <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
";
        // line 244
        $this->displayBlock('footer', $context, $blocks);
        // line 257
        echo "
    ";
        // line 258
        $this->displayBlock('javascripts', $context, $blocks);
        // line 267
        echo "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 244
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 245
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
                    &nbsp;&nbsp;
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 258
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 259
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "explore/details.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  599 => 265,  595 => 264,  591 => 263,  587 => 262,  583 => 261,  579 => 260,  574 => 259,  564 => 258,  543 => 245,  533 => 244,  521 => 267,  519 => 258,  516 => 257,  514 => 244,  501 => 234,  489 => 225,  474 => 213,  442 => 184,  433 => 177,  418 => 175,  404 => 174,  396 => 169,  392 => 168,  388 => 167,  384 => 166,  379 => 164,  373 => 160,  370 => 159,  367 => 158,  364 => 157,  347 => 156,  344 => 155,  326 => 154,  324 => 153,  296 => 128,  288 => 123,  284 => 122,  278 => 119,  271 => 115,  266 => 113,  262 => 112,  259 => 111,  255 => 109,  248 => 105,  203 => 63,  197 => 60,  193 => 59,  189 => 58,  183 => 54,  181 => 53,  177 => 51,  167 => 43,  163 => 31,  153 => 30,  141 => 21,  137 => 20,  133 => 19,  129 => 18,  124 => 17,  114 => 16,  100 => 23,  98 => 16,  92 => 13,  84 => 8,  78 => 4,  68 => 3,  58 => 30,  54 => 28,  52 => 3,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block head %}
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\" rel=\"stylesheet\">

    <title>Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    {% endblock %}




{% endblock %}


    {% block body %}

    <!-- ***** Preloader Start ***** -->
    {# <div id=\"js-preloader\" class=\"js-preloader\">
        <div class=\"preloader-inner\">
        <span class=\"dot\"></span>
        <div class=\"dots\">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
    </div> #}

    <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                    <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"\" >
                        {# <img src=\"assets/images/logo.png\" alt=\"\" href=\"{{ asset('assets/images/logo.png') }}\"> #}
                        {# href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\"> #}
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"{{ path('app_home') }}\">Home</a></li>
                        <li><a href=\"{{ path('app_explore') }}\">Explore</a></li>
                        <li><a href=\"{{ path('app_blog') }}\">Blog</a></li>
                        <li><a href=\"details.html.twig\">Item Details</a></li>
                        <li><a href=\"author.html\">Author</a></li>
                        <li><a href=\"{{ path('app_post_new') }}\">Create Yours</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
    </header>
    <div class=\"page-heading normal-space\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
            <h6>Liberty NFT Market</h6>
            <h2>View Item Details</h2>
            <span>Home > <a href=\"#\">Item Details</a></span>
            <div class=\"buttons\">
                <div class=\"main-button\">
                <a href=\"explore.html\">Explore Our Items</a>
                </div>
                <div class=\"border-button\">
                <a href=\"create.html\">Create Your NFT</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>View Details <em>For Item</em> Here.</h2>
                    </div>
                    </div>
                    <div class=\"col-lg-7\">
                    <div class=\"left-image\">
                        <img src=\"{{ post.media }}\" alt=\"\" style=\"border-radius: 20px;\">
                    </div>
                    </div>
                    <div class=\"col-lg-5 align-self-center\">
                    <h4>{{ post.titleP }}</h4>
                    {# <h4>{{ post.getIdPost }} YESSSSSSSSSSSSSSSSSSS</h4> #}
                    <span class=\"author\">
                        <img src=\"{{ asset('assets/images/author-02.jpg') }}\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                        <h6>Artist<br><a href=\"#\">{{ post.getUserName }}</a></h6>
                    </span>
                    <p>{{ post.getDescriptionP }}</p>
                    <div class=\"row\">
                        <div class=\"col-3\">
                        <span class=\"bid\">
                            Current Likes<br><strong>{{ post.postLikes.count }}</strong><br>
                        </span>
                        <span class=\"bid\">
                            <br><strong><a href=\"{{ path('app_post_edit', {'id_post': post.getId}) }}\">Edit Post</a></strong><br>
                            {{ include('post/_delete_form.html.twig') }}
                            
                        </span>
                </div>
                        <div class=\"fb-like\" id=\"like-btn\">
                            {{ include('post_like/_form.html.twig') }}             
                            <h1></h1>
                        </div> 
                    
            </div>

            </div>
            <div class=\"col-lg-12\">
            <div class=\"current-bid\">
                <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"mini-heading\"><h4>Current Comments</h4></div>
                </div>
                <div class=\"col-lg-6\">
                    <fieldset>
                        <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                            <option selected>Sort By: Latest</option>
                            <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                            <option value=\"low\">Sort By: Lowest</option>
                            <option value=\"high\">Sort By: Highest</option>
                        </select>
                    </fieldset>
                </div>
                <div class=\"row\">
                
                    {% set commentGroups = comments|batch(3) %}
                    {% for group in commentGroups %}
                        <div class=\"row\">
                            {% for comment in group %}
                            {% set postId = post.getIdPost %}
                            {% set commentId = comment.getIdPost %}
                            {% if comment.getIdPost().getIdPost() == post.getIdPost() %}
                                <div class=\"col-lg-4 col-md-6\">
                                    <div class=\"item\">
                                        <div class=\"right-content\">
                                            <h4>Name : </h4>
                                            <a href=\"#\">{{ comment.getIdUser().getName() }}</a>
                                            <div class=\"line-dec\"></div>
                                            <h6>Comment: <em>{{ comment.getComment }}</em></h6>
                                            <span class=\"date\">{{ comment.getDateComment()|date('Y-m-d H:i:s') }}</span>
                                            <h6><a href=\"{{ path('app_comment_edit', {'id_comment': comment.getId}) }}\">edit</a></h6>
                                            <h6>{{ include('comment/_delete_form.html.twig') }}</h6>
                                        </div>
                                    </div>
                                </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    {% endfor %}


                </div>
                </div>
            </div
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <form action=\"{{ path('app_comment_new', { 'id_post': post.getIdPost }) }}\" method=\"post\">
                        <input type=\"submit\" value=\"Add Comment\" style=\"font-size: 20px; padding: 10px;width: 100%;\" >
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class=\"create-nft\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
            <div class=\"section-heading\">
                <div class=\"line-dec\"></div>
                <h2>Create Your NFT & Put It On The Market.</h2>
            </div>
            </div>
            <div class=\"col-lg-4\">
            <div class=\"main-button\">
                <a href=\"create.html\">Create Your NFT Now</a>
            </div>
            </div>
            <div class=\"col-lg-4\">
            <div class=\"item first-item\">
                <div class=\"number\">
                <h6>1</h6>
                </div>
                <div class=\"icon\">
                <img src=\"{{ asset('assets/images/icon-02.png') }}\" alt=\"\">
                </div>
                <h4>Set Up Your Wallet</h4>
                <p>There are 5 different HTML pages included in this NFT <a href=\"https://templatemo.com/page/1\" target=\"_blank\" rel=\"nofollow\">website template</a>. You can edit or modify any section on any page as you required.</p>
            </div>
            </div>
            <div class=\"col-lg-4\">
            <div class=\"item second-item\">
                <div class=\"number\">
                <h6>2</h6>
                </div>
                <div class=\"icon\">
                    <img src=\"{{ asset('assets/images/icon-04.png') }}\" alt=\"\">
                </div>
                <h4>Add Your Digital NFT</h4>
                <p>If you would like to support our TemplateMo website, please visit <a rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">our contact page</a> to make a PayPal contribution. Thank you.</p>
            </div>
            </div>
            <div class=\"col-lg-4\">
            <div class=\"item\">
                <div class=\"icon\">
                <img src=\"{{ asset('assets/images/icon-06.png') }}\" alt=\"\">
                </div>
                <h4>Sell Your NFT &amp; Make Profit</h4>
                <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
{% block footer %}
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
                    &nbsp;&nbsp;
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>
{% endblock %}

    {% block javascripts %}
        <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>
        <script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
        <script src=\"{{ asset('assets/js/popup.js') }}\"></script>
        <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
    {% endblock %}


    {% endblock %}
", "explore/details.html.twig", "C:\\Users\\amine\\ArtounsiSymfonyy\\templates\\explore\\details.html.twig");
    }
}
