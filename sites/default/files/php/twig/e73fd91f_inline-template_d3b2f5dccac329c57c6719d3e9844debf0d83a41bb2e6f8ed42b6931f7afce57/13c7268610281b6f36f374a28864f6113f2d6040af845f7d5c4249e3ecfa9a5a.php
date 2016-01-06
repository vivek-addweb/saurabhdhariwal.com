<?php

/* {# inline_template_start #}<!-- content list sub -->
<div class="content-list-sub">

  <!-- wrap-link -->
  <div class="wrap-link">
    <a class="expand-link collapsed" data-toggle="collapse" href="#portfolioitem{{ nid }}" aria-expanded="false" aria-controls="collapseExample">
      <div class="container-lg container">
        <span class="pd-lft">{{ title }}</span>
        <div class="link-icon pd-rght">
          <div class="arrow"></div>
        </div>
      </div>
    </a>
  </div>
  <!-- End of wrap-link -->

  <div class="collapse" id="portfolioitem{{ nid }}">

    <!-- collapse-slider -->
    <div class="collapse-slider">
      <div class="container-lg container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs slider-tab" role="tablist">
          <li class="nav-item slider-item">
            <a class="nav-link active" data-toggle="tab" href="#desktop" role="tab">
              <img src="images/desk-icon.png" alt="Desktop icon">
            </a>
          </li>
          <li class="nav-item slider-item">
            <a class="nav-link" data-toggle="tab" href="#tablet" role="tab">
              <img src="images/tablet.png" alt="Tablet icon">
            </a>
          </li>
          <li class="nav-item slider-item">
            <a class="nav-link" data-toggle="tab" href="#mob" role="tab">
              <img src="images/mobile.png" alt="Mobile icon">
            </a>
          </li>
        </ul>

        <!-- Slider content -->
        <div class="tab-content">

          <!-- Desktop view slider -->
          <div class="tab-pane active" id="desktop" role="tabpanel">
            <div class="outer-frame desktop">
              <div class="frame-slide slider-list">
                <div class="frame-header">
                  <span class="fbtn"></span>
                </div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <div class="slide-item carousel-item active">
                      {{ field_desktop_images }}
                    </div>
                  </div>
                </div>
                <div class="frame-footer">
                  <span class="lbl">MacBook Air</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Tablet view slider -->
          <div class="tab-pane" id="tablet" role="tabpanel">
            <div class="outer-frame tablet">
              <div class="frame-slide slider-list">
                <div class="frame-header">
                  <span class="fbtn"></span>
                </div>
              <div id="carousel-example-generic-tablet" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="slide-item carousel-item active">
                    {{ field_tablet_images }}
                  </div>
                </div>
              </div>
              <div class="frame-footer">
                  <span class="lbl">MacBook Air</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Mobile view slider -->
          <div class="tab-pane" id="mob" role="tabpanel">
            <div class="outer-frame mob">
              <div class="frame-slide slider-list">
                <div class="frame-header">
                  <span class="fbtn"></span>
                </div>
              <div id="carousel-example-generic-mob" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="slide-item carousel-item active">
                    {{ field_mobile_images }}
                  </div>
                </div>
              </div>
              <div class="frame-footer">
                  <span class="lbl">MacBook Air</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Slider content -->
      </div> <!-- End of container-lg -->
    </div>
    <!-- End of collapse-slider -->

    <!-- collapse-content -->
    <div class="collapse-content">
      <div class="container border-b">
        <div class="container-lg container">
          <div class="txt-center">
            <a href="{{ field_website_link }}" class="btn-label btn" target="_blank">Visit-website...</a>
          </div>
          <p class="content-info">{{ body }}</p>
          <div class="wrap-info"> 
            <div class="for column">
               <div class="col-th">For</div>
               <p>{{ field_type }}</p> 
            </div> 
            <div class="role column"> 
              <div class="col-th">Role(s)</div> 
              <p>{{ field_role }}</p> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of collapse-content -->
  </div>
</div>
<!-- End content list --> */
class __TwigTemplate_a824231d2b25e0cd22db06cfebe7c9de76133a28bf92971f986c7125e8ccff50 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<!-- content list sub -->
<div class=\"content-list-sub\">

  <!-- wrap-link -->
  <div class=\"wrap-link\">
    <a class=\"expand-link collapsed\" data-toggle=\"collapse\" href=\"#portfolioitem";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["nid"]) ? $context["nid"] : null), "html", null, true));
        echo "\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
      <div class=\"container-lg container\">
        <span class=\"pd-lft\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</span>
        <div class=\"link-icon pd-rght\">
          <div class=\"arrow\"></div>
        </div>
      </div>
    </a>
  </div>
  <!-- End of wrap-link -->

  <div class=\"collapse\" id=\"portfolioitem";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["nid"]) ? $context["nid"] : null), "html", null, true));
        echo "\">

    <!-- collapse-slider -->
    <div class=\"collapse-slider\">
      <div class=\"container-lg container\">
        <!-- Nav tabs -->
        <ul class=\"nav nav-tabs slider-tab\" role=\"tablist\">
          <li class=\"nav-item slider-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#desktop\" role=\"tab\">
              <img src=\"images/desk-icon.png\" alt=\"Desktop icon\">
            </a>
          </li>
          <li class=\"nav-item slider-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tablet\" role=\"tab\">
              <img src=\"images/tablet.png\" alt=\"Tablet icon\">
            </a>
          </li>
          <li class=\"nav-item slider-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#mob\" role=\"tab\">
              <img src=\"images/mobile.png\" alt=\"Mobile icon\">
            </a>
          </li>
        </ul>

        <!-- Slider content -->
        <div class=\"tab-content\">

          <!-- Desktop view slider -->
          <div class=\"tab-pane active\" id=\"desktop\" role=\"tabpanel\">
            <div class=\"outer-frame desktop\">
              <div class=\"frame-slide slider-list\">
                <div class=\"frame-header\">
                  <span class=\"fbtn\"></span>
                </div>
                <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                  <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"slide-item carousel-item active\">
                      ";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_desktop_images"]) ? $context["field_desktop_images"] : null), "html", null, true));
        echo "
                    </div>
                  </div>
                </div>
                <div class=\"frame-footer\">
                  <span class=\"lbl\">MacBook Air</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Tablet view slider -->
          <div class=\"tab-pane\" id=\"tablet\" role=\"tabpanel\">
            <div class=\"outer-frame tablet\">
              <div class=\"frame-slide slider-list\">
                <div class=\"frame-header\">
                  <span class=\"fbtn\"></span>
                </div>
              <div id=\"carousel-example-generic-tablet\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\" role=\"listbox\">
                  <div class=\"slide-item carousel-item active\">
                    ";
        // line 75
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_tablet_images"]) ? $context["field_tablet_images"] : null), "html", null, true));
        echo "
                  </div>
                </div>
              </div>
              <div class=\"frame-footer\">
                  <span class=\"lbl\">MacBook Air</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Mobile view slider -->
          <div class=\"tab-pane\" id=\"mob\" role=\"tabpanel\">
            <div class=\"outer-frame mob\">
              <div class=\"frame-slide slider-list\">
                <div class=\"frame-header\">
                  <span class=\"fbtn\"></span>
                </div>
              <div id=\"carousel-example-generic-mob\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\" role=\"listbox\">
                  <div class=\"slide-item carousel-item active\">
                    ";
        // line 96
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_mobile_images"]) ? $context["field_mobile_images"] : null), "html", null, true));
        echo "
                  </div>
                </div>
              </div>
              <div class=\"frame-footer\">
                  <span class=\"lbl\">MacBook Air</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Slider content -->
      </div> <!-- End of container-lg -->
    </div>
    <!-- End of collapse-slider -->

    <!-- collapse-content -->
    <div class=\"collapse-content\">
      <div class=\"container border-b\">
        <div class=\"container-lg container\">
          <div class=\"txt-center\">
            <a href=\"";
        // line 117
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_website_link"]) ? $context["field_website_link"] : null), "html", null, true));
        echo "\" class=\"btn-label btn\" target=\"_blank\">Visit-website...</a>
          </div>
          <p class=\"content-info\">";
        // line 119
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</p>
          <div class=\"wrap-info\"> 
            <div class=\"for column\">
               <div class=\"col-th\">For</div>
               <p>";
        // line 123
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_type"]) ? $context["field_type"] : null), "html", null, true));
        echo "</p> 
            </div> 
            <div class=\"role column\"> 
              <div class=\"col-th\">Role(s)</div> 
              <p>";
        // line 127
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_role"]) ? $context["field_role"] : null), "html", null, true));
        echo "</p> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of collapse-content -->
  </div>
</div>
<!-- End content list -->";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<!-- content list sub -->
<div class=\"content-list-sub\">

  <!-- wrap-link -->
  <div class=\"wrap-link\">
    <a class=\"expand-link collapsed\" data-toggle=\"collapse\" href=\"#portfolioitem{{ nid }}\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
      <div class=\"container-lg container\">
        <span class=\"pd-lft\">{{ title }}</span>
        <div class=\"link-icon pd-rght\">
          <div class=\"arrow\"></div>
        </div>
      </div>
    </a>
  </div>
  <!-- End of wrap-link -->

  <div class=\"collapse\" id=\"portfolioitem{{ nid }}\">

    <!-- collapse-slider -->
    <div class=\"collapse-slider\">
      <div class=\"container-lg container\">
        <!-- Nav tabs -->
        <ul class=\"nav nav-tabs slider-tab\" role=\"tablist\">
          <li class=\"nav-item slider-item\">
            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#desktop\" role=\"tab\">
              <img src=\"images/desk-icon.png\" alt=\"Desktop icon\">
            </a>
          </li>
          <li class=\"nav-item slider-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#tablet\" role=\"tab\">
              <img src=\"images/tablet.png\" alt=\"Tablet icon\">
            </a>
          </li>
          <li class=\"nav-item slider-item\">
            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#mob\" role=\"tab\">
              <img src=\"images/mobile.png\" alt=\"Mobile icon\">
            </a>
          </li>
        </ul>

        <!-- Slider content -->
        <div class=\"tab-content\">

          <!-- Desktop view slider -->
          <div class=\"tab-pane active\" id=\"desktop\" role=\"tabpanel\">
            <div class=\"outer-frame desktop\">
              <div class=\"frame-slide slider-list\">
                <div class=\"frame-header\">
                  <span class=\"fbtn\"></span>
                </div>
                <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                  <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"slide-item carousel-item active\">
                      {{ field_desktop_images }}
                    </div>
                  </div>
                </div>
                <div class=\"frame-footer\">
                  <span class=\"lbl\">MacBook Air</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Tablet view slider -->
          <div class=\"tab-pane\" id=\"tablet\" role=\"tabpanel\">
            <div class=\"outer-frame tablet\">
              <div class=\"frame-slide slider-list\">
                <div class=\"frame-header\">
                  <span class=\"fbtn\"></span>
                </div>
              <div id=\"carousel-example-generic-tablet\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\" role=\"listbox\">
                  <div class=\"slide-item carousel-item active\">
                    {{ field_tablet_images }}
                  </div>
                </div>
              </div>
              <div class=\"frame-footer\">
                  <span class=\"lbl\">MacBook Air</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Mobile view slider -->
          <div class=\"tab-pane\" id=\"mob\" role=\"tabpanel\">
            <div class=\"outer-frame mob\">
              <div class=\"frame-slide slider-list\">
                <div class=\"frame-header\">
                  <span class=\"fbtn\"></span>
                </div>
              <div id=\"carousel-example-generic-mob\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\" role=\"listbox\">
                  <div class=\"slide-item carousel-item active\">
                    {{ field_mobile_images }}
                  </div>
                </div>
              </div>
              <div class=\"frame-footer\">
                  <span class=\"lbl\">MacBook Air</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Slider content -->
      </div> <!-- End of container-lg -->
    </div>
    <!-- End of collapse-slider -->

    <!-- collapse-content -->
    <div class=\"collapse-content\">
      <div class=\"container border-b\">
        <div class=\"container-lg container\">
          <div class=\"txt-center\">
            <a href=\"{{ field_website_link }}\" class=\"btn-label btn\" target=\"_blank\">Visit-website...</a>
          </div>
          <p class=\"content-info\">{{ body }}</p>
          <div class=\"wrap-info\"> 
            <div class=\"for column\">
               <div class=\"col-th\">For</div>
               <p>{{ field_type }}</p> 
            </div> 
            <div class=\"role column\"> 
              <div class=\"col-th\">Role(s)</div> 
              <p>{{ field_role }}</p> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of collapse-content -->
  </div>
</div>
<!-- End content list -->";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 127,  326 => 123,  319 => 119,  314 => 117,  290 => 96,  266 => 75,  242 => 54,  202 => 17,  190 => 8,  185 => 6,  178 => 1,);
    }
}
/* {# inline_template_start #}<!-- content list sub -->*/
/* <div class="content-list-sub">*/
/* */
/*   <!-- wrap-link -->*/
/*   <div class="wrap-link">*/
/*     <a class="expand-link collapsed" data-toggle="collapse" href="#portfolioitem{{ nid }}" aria-expanded="false" aria-controls="collapseExample">*/
/*       <div class="container-lg container">*/
/*         <span class="pd-lft">{{ title }}</span>*/
/*         <div class="link-icon pd-rght">*/
/*           <div class="arrow"></div>*/
/*         </div>*/
/*       </div>*/
/*     </a>*/
/*   </div>*/
/*   <!-- End of wrap-link -->*/
/* */
/*   <div class="collapse" id="portfolioitem{{ nid }}">*/
/* */
/*     <!-- collapse-slider -->*/
/*     <div class="collapse-slider">*/
/*       <div class="container-lg container">*/
/*         <!-- Nav tabs -->*/
/*         <ul class="nav nav-tabs slider-tab" role="tablist">*/
/*           <li class="nav-item slider-item">*/
/*             <a class="nav-link active" data-toggle="tab" href="#desktop" role="tab">*/
/*               <img src="images/desk-icon.png" alt="Desktop icon">*/
/*             </a>*/
/*           </li>*/
/*           <li class="nav-item slider-item">*/
/*             <a class="nav-link" data-toggle="tab" href="#tablet" role="tab">*/
/*               <img src="images/tablet.png" alt="Tablet icon">*/
/*             </a>*/
/*           </li>*/
/*           <li class="nav-item slider-item">*/
/*             <a class="nav-link" data-toggle="tab" href="#mob" role="tab">*/
/*               <img src="images/mobile.png" alt="Mobile icon">*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/* */
/*         <!-- Slider content -->*/
/*         <div class="tab-content">*/
/* */
/*           <!-- Desktop view slider -->*/
/*           <div class="tab-pane active" id="desktop" role="tabpanel">*/
/*             <div class="outer-frame desktop">*/
/*               <div class="frame-slide slider-list">*/
/*                 <div class="frame-header">*/
/*                   <span class="fbtn"></span>*/
/*                 </div>*/
/*                 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">*/
/*                   <div class="carousel-inner" role="listbox">*/
/*                     <div class="slide-item carousel-item active">*/
/*                       {{ field_desktop_images }}*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="frame-footer">*/
/*                   <span class="lbl">MacBook Air</span>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <!-- Tablet view slider -->*/
/*           <div class="tab-pane" id="tablet" role="tabpanel">*/
/*             <div class="outer-frame tablet">*/
/*               <div class="frame-slide slider-list">*/
/*                 <div class="frame-header">*/
/*                   <span class="fbtn"></span>*/
/*                 </div>*/
/*               <div id="carousel-example-generic-tablet" class="carousel slide" data-ride="carousel">*/
/*                 <div class="carousel-inner" role="listbox">*/
/*                   <div class="slide-item carousel-item active">*/
/*                     {{ field_tablet_images }}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="frame-footer">*/
/*                   <span class="lbl">MacBook Air</span>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <!-- Mobile view slider -->*/
/*           <div class="tab-pane" id="mob" role="tabpanel">*/
/*             <div class="outer-frame mob">*/
/*               <div class="frame-slide slider-list">*/
/*                 <div class="frame-header">*/
/*                   <span class="fbtn"></span>*/
/*                 </div>*/
/*               <div id="carousel-example-generic-mob" class="carousel slide" data-ride="carousel">*/
/*                 <div class="carousel-inner" role="listbox">*/
/*                   <div class="slide-item carousel-item active">*/
/*                     {{ field_mobile_images }}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="frame-footer">*/
/*                   <span class="lbl">MacBook Air</span>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <!-- End of Slider content -->*/
/*       </div> <!-- End of container-lg -->*/
/*     </div>*/
/*     <!-- End of collapse-slider -->*/
/* */
/*     <!-- collapse-content -->*/
/*     <div class="collapse-content">*/
/*       <div class="container border-b">*/
/*         <div class="container-lg container">*/
/*           <div class="txt-center">*/
/*             <a href="{{ field_website_link }}" class="btn-label btn" target="_blank">Visit-website...</a>*/
/*           </div>*/
/*           <p class="content-info">{{ body }}</p>*/
/*           <div class="wrap-info"> */
/*             <div class="for column">*/
/*                <div class="col-th">For</div>*/
/*                <p>{{ field_type }}</p> */
/*             </div> */
/*             <div class="role column"> */
/*               <div class="col-th">Role(s)</div> */
/*               <p>{{ field_role }}</p> */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <!-- End of collapse-content -->*/
/*   </div>*/
/* </div>*/
/* <!-- End content list -->*/
