<?php

class __Mustache_c3b21e52917943b0c1c36fd27da681c7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="page" class="stylehome1 h0">
';
        $buffer .= $indent . '  <div class="mobile-menu">
';
        $buffer .= $indent . '    <div class="header stylehome1">
';
        $value = $context->find('logo');
        $buffer .= $this->section8720ca6c538e871ab620281df12a4689($context, $indent, $value);
        $buffer .= $indent . '      <ul class="menu_bar_home2">
';
        $value = $context->find('header_search_icon');
        $buffer .= $this->section0bb4d889d01295f81af5db5db95d5447($context, $indent, $value);
        $buffer .= $indent . '        <li class="list-inline-item ccn_mob_menu_trigger ';
        $value = $context->find('header_search_icon');
        if (empty($value)) {
            
            $buffer .= ' ccn_mob_menu_trigger_standalone ';
        }
        $buffer .= '"><a href="#menu"><span></span></a></li>
';
        $buffer .= $indent . '      </ul>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div><!-- /.mobile-menu -->
';
        $buffer .= $indent . '  <nav id="menu" class="stylehome1">
';
        $buffer .= $indent . '    <ul>
';
        $value = $context->find('display_library_list');
        $buffer .= $this->sectionC637405f66398e85ad681e4c18788226($context, $indent, $value);
        $buffer .= $indent . '      ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_header_mob_user')) {
            $buffer .= $partial->renderInternal($context, $indent . '      ');
        }
        $value = $context->find('phone');
        $buffer .= $this->section910248f4fe244ef5c9aad36a2515750e($context, $indent, $value);
        $value = $context->find('email_address');
        $buffer .= $this->section9621f17229be4278dc7b6852a7b0bb7a($context, $indent, $value);
        $value = $context->find('cta_link');
        $buffer .= $this->section19bd316c1e9dd2ea4e3abbec1437edd4($context, $indent, $value);
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '  </nav>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF4ae517f1e51da61f377c3a37c32b2b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="{{{logo_styles}}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' style="';
                $value = $this->resolveValue($context->find('logo_styles'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3fb5e0700574e823cddbb452a85b9fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <img class="nav_logo_img img-fluid float-left mt20" src="{{{headerlogo_mobile}}}" alt="{{{sitename}}}" {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <img class="nav_logo_img img-fluid float-left mt20" src="';
                $value = $this->resolveValue($context->find('headerlogo_mobile'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $value = $context->find('logo_styles');
                $buffer .= $this->sectionF4ae517f1e51da61f377c3a37c32b2b7($context, $indent, $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1ab6fd336f2f2c58614ae393c60d8e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              {{#headerlogo_mobile}}
                <img class="nav_logo_img img-fluid float-left mt20" src="{{{headerlogo_mobile}}}" alt="{{{sitename}}}" {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>
              {{/headerlogo_mobile}}
              {{^headerlogo_mobile}}
                <img class="nav_logo_img img-fluid float-left mt20" src="{{{headerlogo1}}}" alt="{{{sitename}}}" {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>
              {{/headerlogo_mobile}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('headerlogo_mobile');
                $buffer .= $this->sectionE3fb5e0700574e823cddbb452a85b9fd($context, $indent, $value);
                $value = $context->find('headerlogo_mobile');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <img class="nav_logo_img img-fluid float-left mt20" src="';
                    $value = $this->resolveValue($context->find('headerlogo1'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" alt="';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" ';
                    $value = $context->find('logo_styles');
                    $buffer .= $this->sectionF4ae517f1e51da61f377c3a37c32b2b7($context, $indent, $value);
                    $buffer .= '>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9f2d3a9498e7d8c18d9510e8a8d96ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span>{{{sitename}}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span>';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8720ca6c538e871ab620281df12a4689(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="main_logo_home2">
          <a class="mobileBrand" href="{{{ ccnLogoUrl }}}">
            {{#logo_image}}
              {{#headerlogo_mobile}}
                <img class="nav_logo_img img-fluid float-left mt20" src="{{{headerlogo_mobile}}}" alt="{{{sitename}}}" {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>
              {{/headerlogo_mobile}}
              {{^headerlogo_mobile}}
                <img class="nav_logo_img img-fluid float-left mt20" src="{{{headerlogo1}}}" alt="{{{sitename}}}" {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>
              {{/headerlogo_mobile}}
            {{/logo_image}}
            {{#logotype}}<span>{{{sitename}}}</span>{{/logotype}}
          </a>
        </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="main_logo_home2">
';
                $buffer .= $indent . '          <a class="mobileBrand" href="';
                $value = $this->resolveValue($context->find('ccnLogoUrl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $value = $context->find('logo_image');
                $buffer .= $this->sectionD1ab6fd336f2f2c58614ae393c60d8e7($context, $indent, $value);
                $buffer .= $indent . '            ';
                $value = $context->find('logotype');
                $buffer .= $this->sectionF9f2d3a9498e7d8c18d9510e8a8d96ee($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bb4d889d01295f81af5db5db95d5447(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <li class="list-inline-item">
            <div class="search_overlay">
              <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
              </a>
            </div>
          </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          <li class="list-inline-item">
';
                $buffer .= $indent . '            <div class="search_overlay">
';
                $buffer .= $indent . '              <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
';
                $buffer .= $indent . '                <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
';
                $buffer .= $indent . '              </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d7889726863be25ca4e27460768b174(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'library, theme_edumy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'library, theme_edumy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC637405f66398e85ad681e4c18788226(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="ccn_mob_menu_library">
          <a href="#vertical-menu">{{#str}}library, theme_edumy{{/str}} <i class="flaticon-right-arrow"></i></a>
          {{{ ccn_librarylist }}}
        </li>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li class="ccn_mob_menu_library">
';
                $buffer .= $indent . '          <a href="#vertical-menu">';
                $value = $context->find('str');
                $buffer .= $this->section2d7889726863be25ca4e27460768b174($context, $indent, $value);
                $buffer .= ' <i class="flaticon-right-arrow"></i></a>
';
                $buffer .= $indent . '          ';
                $value = $this->resolveValue($context->find('ccn_librarylist'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section910248f4fe244ef5c9aad36a2515750e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="ccn_mob_menu_iconed"><a href="tel:{{{phone}}}"><i class="flaticon-phone-call"></i> {{{phone}}}</a></li>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li class="ccn_mob_menu_iconed"><a href="tel:';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="flaticon-phone-call"></i> ';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9621f17229be4278dc7b6852a7b0bb7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="ccn_mob_menu_iconed"><a href="mailto:{{{email_address}}}"><i class="flaticon-paper-plane"></i> {{{email_address}}}</a></li>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li class="ccn_mob_menu_iconed"><a href="mailto:';
                $value = $this->resolveValue($context->find('email_address'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="flaticon-paper-plane"></i> ';
                $value = $this->resolveValue($context->find('email_address'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19bd316c1e9dd2ea4e3abbec1437edd4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="ccn_mob_menu_iconed"><a href="{{{cta_link}}}" class=""><i class="{{{cta_icon}}}"></i> {{{cta_text}}}</a></li>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li class="ccn_mob_menu_iconed"><a href="';
                $value = $this->resolveValue($context->find('cta_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class=""><i class="';
                $value = $this->resolveValue($context->find('cta_icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"></i> ';
                $value = $this->resolveValue($context->find('cta_text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
