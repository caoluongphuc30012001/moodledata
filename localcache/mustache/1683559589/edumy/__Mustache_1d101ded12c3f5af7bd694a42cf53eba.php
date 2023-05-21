<?php

class __Mustache_1d101ded12c3f5af7bd694a42cf53eba extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_preloader')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  <div class="wrapper" id="page-content">
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div id="ccn-page-wrapper">
';
        $buffer .= $indent . '      <div id="ccnSettingsMenuContainer">
';
        $buffer .= $indent . '        <div id="ccnSettingsMenuInner">';
        $buffer .= '
';
        $value = $context->find('show_settings_controls');
        $buffer .= $this->section536fb95784afa15b9714535c2ba9be55($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '      ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '      <div>
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('secondarymoremenu');
        $buffer .= $this->sectionCbf2a059d4a11cfa0226ea35763ccbb5($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('blocks_fullwidth_top'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div id="ccn-main-region">
';
        $buffer .= $indent . '          <div class="container">
';
        $buffer .= $indent . '            <div class="row">
';
        $value = $context->find('sidebar_left');
        $buffer .= $this->section7ab151a12205bfc9e8e349fdcaabbaa5($context, $indent, $value);
        $buffer .= $indent . '              <div class="
';
        $buffer .= $indent . '                ';
        $value = $context->find('sidebar_none');
        $buffer .= $this->section8a83276f77018d8024cdfa9f88cb26a4($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $context->find('sidebar_double');
        $buffer .= $this->section48a89749267005c08cb744ec12db6900($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $context->find('sidebar_single_left');
        $buffer .= $this->sectionEe15739d06a889ded9d487c62d2d53f5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $context->find('sidebar_single_right');
        $buffer .= $this->sectionD573161f14fb065d7ebf39f684b5295f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '              ">
';
        $buffer .= $indent . '                <div id="region-main" ';
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionA21ff12f1cbdc933a3d7049f000660a7($context, $indent, $value);
        $buffer .= ' aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section64620b865834790619321d83c9d7d5dc($context, $indent, $value);
        $value = $context->find('has_blocks_above_content');
        $buffer .= $this->sectionE2c8d9cef5553e01c2a90ac145c9b299($context, $indent, $value);
        $buffer .= $indent . '                  <div id="ccn-main">
';
        $value = $context->find('is_course');
        $buffer .= $this->sectionA21b2f6484ed8dd65902a126d463bd57($context, $indent, $value);
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('headercontent');
        $buffer .= $this->section79684835407473de7cc0d4d38c885c68($context, $indent, $value);
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('in_course_activity');
        $buffer .= $this->section35b42b2b12c20d0037653b7f2cf9f475($context, $indent, $value);
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('is_course');
        $buffer .= $this->sectionE3fcb139e75c2c0cc1ed6ec4c6ec3342($context, $indent, $value);
        $buffer .= $indent . '              </div>
';
        $value = $context->find('has_blocks_below_content');
        $buffer .= $this->section93d293a739606c65e593ed418d6a7b76($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $value = $context->find('sidebar_right');
        $buffer .= $this->section7f98e6207af1d970c7275b7365dee36b($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('blocks_fullwidth_bottom'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  </div>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->section594644b43f41eedfedc914de6473d7f6($context, $indent, $value);

        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe22cbc2459b4a0600d2bfae6cf6ac0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <div id="region-main-settings-menu" class="d-print-none {{#hasblocks}}has-blocks{{/hasblocks}}">
                <div> {{{ output.region_main_settings_menu }}} </div>
              </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              <div id="region-main-settings-menu" class="d-print-none ';
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '              </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section536fb95784afa15b9714535c2ba9be55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#hasregionmainsettingsmenu}}
              <div id="region-main-settings-menu" class="d-print-none {{#hasblocks}}has-blocks{{/hasblocks}}">
                <div> {{{ output.region_main_settings_menu }}} </div>
              </div>
            {{/hasregionmainsettingsmenu}}
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hasregionmainsettingsmenu');
                $buffer .= $this->sectionBe22cbc2459b4a0600d2bfae6cf6ac0f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCbf2a059d4a11cfa0226ea35763ccbb5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          <div class="ccn-4-navigation container">
            <div class="secondary-navigation">
              {{> core/moremenu}}
            </div>
          </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '          <div class="ccn-4-navigation container">
';
                $buffer .= $indent . '            <div class="secondary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '              ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d4e4b25bc133217e63d22bde9040707(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' col-lg-3 col-xl-3 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' col-lg-3 col-xl-3 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ab151a12205bfc9e8e349fdcaabbaa5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{#sidebar_double}} col-lg-3 col-xl-3 {{/sidebar_double}} {{^sidebar_double}} col-lg-4 col-xl-4 {{/sidebar_double}}">
                  <div class="ccn-sidebar-region" aria-label="{{#str}}blocks{{/str}}">
                    {{{ leftblocks }}}
                  </div>
                </div>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="';
                $value = $context->find('sidebar_double');
                $buffer .= $this->section0d4e4b25bc133217e63d22bde9040707($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('sidebar_double');
                if (empty($value)) {
                    
                    $buffer .= ' col-lg-4 col-xl-4 ';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                  <div class="ccn-sidebar-region" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('leftblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a83276f77018d8024cdfa9f88cb26a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' col-md-12 col-lg-12 col-xl-12 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' col-md-12 col-lg-12 col-xl-12 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48a89749267005c08cb744ec12db6900(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' col-lg-6 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' col-lg-6 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe15739d06a889ded9d487c62d2d53f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' col-lg-8 col-xl-8 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' col-lg-8 col-xl-8 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD573161f14fb065d7ebf39f684b5295f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' col-md-12 col-lg-8 col-xl-9 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' col-md-12 col-lg-8 col-xl-9 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA21ff12f1cbdc933a3d7049f000660a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="--rm--has-blocks" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="--rm--has-blocks" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64620b865834790619321d83c9d7d5dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="region_main_settings_menu_proxy"></div>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2c8d9cef5553e01c2a90ac145c9b299(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{ blocks_above_content }}}
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('blocks_above_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e6cd0a936901797b090597d2d9a3d5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'course_content, theme_edumy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'course_content, theme_edumy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section873ac88669d0662d7d6427563b77436c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startdate';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'startdate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe32a136d5316d383f2228d30accc6fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <li class="list-inline-item"><a href="#">{{#str}}startdate{{/str}}: {{{ coursestartdate }}} </a></li>
                                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <li class="list-inline-item"><a href="#">';
                $value = $context->find('str');
                $buffer .= $this->section873ac88669d0662d7d6427563b77436c($context, $indent, $value);
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('coursestartdate'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section946bec447291f29362b3f4daf03b12c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'category';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'category';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a2105e85441b32a0a9e0d091d612c2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <li class="list-inline-item"><a href="#">{{#str}}category{{/str}}: {{{ coursecategory }}}</a></li>
                                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <li class="list-inline-item"><a href="#">';
                $value = $context->find('str');
                $buffer .= $this->section946bec447291f29362b3f4daf03b12c0($context, $indent, $value);
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('coursecategory'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fae5eccc1e159c38743319b0b6390b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^participant_user_profile}}
                          <div class="cs_row_three">
                            <div class="course_content">
                              <div class="cc_headers">
                                <h4 class="title">{{#str}}course_content, theme_edumy{{/str}}</h4>
                                <ul class="course_schdule float-right">
                                  {{#show_course_start}}
                                    <li class="list-inline-item"><a href="#">{{#str}}startdate{{/str}}: {{{ coursestartdate }}} </a></li>
                                  {{/show_course_start}}
                                  {{#show_course_category}}
                                    <li class="list-inline-item"><a href="#">{{#str}}category{{/str}}: {{{ coursecategory }}}</a></li>
                                  {{/show_course_category}}
                                </ul>
                              </div>
                              <br>
                        {{/participant_user_profile}}
                      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('participant_user_profile');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                          <div class="cs_row_three">
';
                    $buffer .= $indent . '                            <div class="course_content">
';
                    $buffer .= $indent . '                              <div class="cc_headers">
';
                    $buffer .= $indent . '                                <h4 class="title">';
                    $value = $context->find('str');
                    $buffer .= $this->section2e6cd0a936901797b090597d2d9a3d5d($context, $indent, $value);
                    $buffer .= '</h4>
';
                    $buffer .= $indent . '                                <ul class="course_schdule float-right">
';
                    $value = $context->find('show_course_start');
                    $buffer .= $this->sectionAe32a136d5316d383f2228d30accc6fc($context, $indent, $value);
                    $value = $context->find('show_course_category');
                    $buffer .= $this->section8a2105e85441b32a0a9e0d091d612c2c($context, $indent, $value);
                    $buffer .= $indent . '                                </ul>
';
                    $buffer .= $indent . '                              </div>
';
                    $buffer .= $indent . '                              <br>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA21b2f6484ed8dd65902a126d463bd57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                      {{^display_course_content}}
                        <div id="ccn_prohibit_course_content"></div>
                      {{/display_course_content}}
                      {{#display_course_content}}
                        {{^participant_user_profile}}
                          <div class="cs_row_three">
                            <div class="course_content">
                              <div class="cc_headers">
                                <h4 class="title">{{#str}}course_content, theme_edumy{{/str}}</h4>
                                <ul class="course_schdule float-right">
                                  {{#show_course_start}}
                                    <li class="list-inline-item"><a href="#">{{#str}}startdate{{/str}}: {{{ coursestartdate }}} </a></li>
                                  {{/show_course_start}}
                                  {{#show_course_category}}
                                    <li class="list-inline-item"><a href="#">{{#str}}category{{/str}}: {{{ coursecategory }}}</a></li>
                                  {{/show_course_category}}
                                </ul>
                              </div>
                              <br>
                        {{/participant_user_profile}}
                      {{/display_course_content}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display_course_content');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <div id="ccn_prohibit_course_content"></div>
';
                }
                $value = $context->find('display_course_content');
                $buffer .= $this->section0fae5eccc1e159c38743319b0b6390b5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section79684835407473de7cc0d4d38c885c68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core/activity_header }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35b42b2b12c20d0037653b7f2cf9f475(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                      {{{ output.activity_navigation }}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                      ';
                $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section434264244ae09a53bdb4d952edbab453(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^participant_user_profile}}
                  </div>
                </div>
                {{/participant_user_profile}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('participant_user_profile');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                  </div>
';
                    $buffer .= $indent . '                </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3fcb139e75c2c0cc1ed6ec4c6ec3342(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                      {{#display_course_content}}
                        {{^participant_user_profile}}
                  </div>
                </div>
                {{/participant_user_profile}}
                {{/display_course_content}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('display_course_content');
                $buffer .= $this->section434264244ae09a53bdb4d952edbab453($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93d293a739606c65e593ed418d6a7b76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{ blocks_below_content }}}
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('blocks_below_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f98e6207af1d970c7275b7365dee36b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="col-lg-4 col-xl-3">
              <div class="ccn-sidebar-region" aria-label="{{#str}}blocks{{/str}}">
                {{{ sidepreblocks }}}
              </div>
            </div>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="col-lg-4 col-xl-3">
';
                $buffer .= $indent . '              <div class="ccn-sidebar-region" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section594644b43f41eedfedc914de6473d7f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  M.util.js_pending(\'theme_boost/loader\');
  require([\'theme_boost/loader\'], function() {
  M.util.js_complete(\'theme_boost/loader\');
  });
  M.util.js_pending(\'theme_boost/drawer\');
  require([\'theme_boost/drawer\'], function(mod) {
  mod.init();
  M.util.js_complete(\'theme_boost/drawer\');
  });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . '  require([\'theme_boost/loader\'], function() {
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  M.util.js_pending(\'theme_boost/drawer\');
';
                $buffer .= $indent . '  require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '  mod.init();
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/drawer\');
';
                $buffer .= $indent . '  });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
