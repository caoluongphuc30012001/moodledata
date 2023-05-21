<?php

class __Mustache_dffdaeb0d4ab27130d6aacc37353f0b1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<section class="footer_one ';
        $value = $context->find('footer_2');
        $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('footer_3');
        $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '  <div class="container">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('footer_column_1');
        $buffer .= $this->sectionE8fde7e8db4be793898d13a18adf391b($context, $indent, $value);
        $value = $context->find('footer_column_2');
        $buffer .= $this->sectionE15498eaa2d389e05b997f736fb10c87($context, $indent, $value);
        $value = $context->find('footer_column_3');
        $buffer .= $this->section8b00a9c8b16aa2a9f00adff3be817c2a($context, $indent, $value);
        $value = $context->find('footer_column_4');
        $buffer .= $this->section3df209cf36cfe6a2bce4cab93732cb70($context, $indent, $value);
        $value = $context->find('footer_column_5');
        $buffer .= $this->section2531a1a4773f98625748b87c6554fea9($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '<section class="footer_middle_area p0 ';
        $value = $context->find('footer_2');
        $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('footer_3');
        $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '  <div class="container">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('logo_footer');
        $buffer .= $this->sectionEfef7f07a9b7e445f9bd390ddf87603a($context, $indent, $value);
        $value = $context->find('footer_menu');
        $buffer .= $this->section2c20787b9b17c3420eeaf277096fd8a9($context, $indent, $value);
        $buffer .= $indent . '      <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 pb15 pt15">
';
        $buffer .= $indent . '        <div class="footer_social_widget mt15">
';
        $buffer .= $indent . '          <ul>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_social_icons')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</section>
';
        $value = $context->find('cocoon_copyright');
        $buffer .= $this->sectionE2abfba892c7aa01213b10abd0ca5fe6($context, $indent, $value);

        return $buffer;
    }

    private function section5a692bf08ebe51309ec5e08ade36c4aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' home3 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' home3 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section917d0f0e8f509bc19f4c2cfd238caac1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' home4 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' home4 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8fde7e8db4be793898d13a18adf391b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="{{{footer_col_1_class}}}">
          <div class="footer_contact_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
            <h4>{{{ footer_col_1_title }}}</h4>
            {{{ footer_col_1_body }}}
          </div>
        </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="';
                $value = $this->resolveValue($context->find('footer_col_1_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '          <div class="footer_contact_widget ';
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <h4>';
                $value = $this->resolveValue($context->find('footer_col_1_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('footer_col_1_body'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE15498eaa2d389e05b997f736fb10c87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="{{{footer_col_2_class}}}">
          <div class="footer_company_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
            <h4>{{{ footer_col_2_title }}}</h4>
            {{{ footer_col_2_body }}}
          </div>
        </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="';
                $value = $this->resolveValue($context->find('footer_col_2_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '          <div class="footer_company_widget ';
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <h4>';
                $value = $this->resolveValue($context->find('footer_col_2_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('footer_col_2_body'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b00a9c8b16aa2a9f00adff3be817c2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="{{{footer_col_3_class}}}">
          <div class="footer_program_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
            <h4>{{{ footer_col_3_title }}}</h4>
            {{{ footer_col_3_body }}}
          </div>
        </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="';
                $value = $this->resolveValue($context->find('footer_col_3_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '          <div class="footer_program_widget ';
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <h4>';
                $value = $this->resolveValue($context->find('footer_col_3_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('footer_col_3_body'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3df209cf36cfe6a2bce4cab93732cb70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="{{{footer_col_4_class}}}">
          <div class="footer_support_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
            <h4>{{{ footer_col_4_title }}}</h4>
            {{{ footer_col_4_body }}}
          </div>
        </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="';
                $value = $this->resolveValue($context->find('footer_col_4_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '          <div class="footer_support_widget ';
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <h4>';
                $value = $this->resolveValue($context->find('footer_col_4_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('footer_col_4_body'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2531a1a4773f98625748b87c6554fea9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="{{{footer_col_5_class}}}">
          <div class="footer_apps_widget {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
            <h4>{{{ footer_col_5_title }}}</h4>
            {{{ footer_col_5_body }}}
          </div>
        </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="';
                $value = $this->resolveValue($context->find('footer_col_5_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '          <div class="footer_apps_widget ';
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <h4>';
                $value = $this->resolveValue($context->find('footer_col_5_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('footer_col_5_body'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1633f950c0b31f366850a00b0a0a5f57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' home1 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' home1 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbcb475427c7d7727fb30e127940463d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="{{{logo_styles_footer}}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' style="';
                $value = $this->resolveValue($context->find('logo_styles_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06b0d7f0150745c41938da77afaa3d43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' <img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' <img class="img-fluid" src="';
                $value = $this->resolveValue($context->find('footerlogo1'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('logo_styles_footer');
                $buffer .= $this->sectionEbcb475427c7d7727fb30e127940463d($context, $indent, $value);
                $buffer .= '>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section254d7600dae2d4e2af67ba2cfb1315f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span>{{ sitename }}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span>';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEfef7f07a9b7e445f9bd390ddf87603a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-sm-4 col-md-3 col-lg-3 col-xl-3 pb15 pt15">
          <div class="logo-widget {{#footer_1}} home1 {{/footer_1}}  {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home3 {{/footer_3}}">
            {{#logo_image_footer}} <img class="img-fluid" src="{{{footerlogo1}}}" alt="{{ sitename }}" {{#logo_styles_footer}} style="{{{logo_styles_footer}}}" {{/logo_styles_footer}}>{{/logo_image_footer}}
            {{#logotype_footer}}<span>{{ sitename }}</span>{{/logotype_footer}}
          </div>
        </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="col-sm-4 col-md-3 col-lg-3 col-xl-3 pb15 pt15">
';
                $buffer .= $indent . '          <div class="logo-widget ';
                $value = $context->find('footer_1');
                $buffer .= $this->section1633f950c0b31f366850a00b0a0a5f57($context, $indent, $value);
                $buffer .= '  ';
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('footer_3');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                $value = $context->find('logo_image_footer');
                $buffer .= $this->section06b0d7f0150745c41938da77afaa3d43($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            ';
                $value = $context->find('logotype_footer');
                $buffer .= $this->section254d7600dae2d4e2af67ba2cfb1315f4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c20787b9b17c3420eeaf277096fd8a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 text-center pb25 pt25">
          <div class="footer_menu_widget">
            {{{footer_menu}}}
          </div>
        </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 text-center pb25 pt25">
';
                $buffer .= $indent . '          <div class="footer_menu_widget">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('footer_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2abfba892c7aa01213b10abd0ca5fe6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <section class="footer_bottom_area pt25 pb25 {{#footer_2}} home3 {{/footer_2}} {{#footer_3}} home4 {{/footer_3}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="copyright-widget text-center">
            <p>{{{ cocoon_copyright }}}</p>
            <div class="tool_usertours-resettourcontainer"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <section class="footer_bottom_area pt25 pb25 ';
                $value = $context->find('footer_2');
                $buffer .= $this->section5a692bf08ebe51309ec5e08ade36c4aa($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('footer_3');
                $buffer .= $this->section917d0f0e8f509bc19f4c2cfd238caac1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '      <div class="row">
';
                $buffer .= $indent . '        <div class="col-lg-6 offset-lg-3">
';
                $buffer .= $indent . '          <div class="copyright-widget text-center">
';
                $buffer .= $indent . '            <p>';
                $value = $this->resolveValue($context->find('cocoon_copyright'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            <div class="tool_usertours-resettourcontainer"></div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '  </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
