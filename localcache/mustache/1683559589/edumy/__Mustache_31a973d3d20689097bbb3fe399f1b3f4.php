<?php

class __Mustache_31a973d3d20689097bbb3fe399f1b3f4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_edumy/head_dashboard')) {
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
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_dashboard_navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $value = $context->find('disable_dashboard_drawer');
        if (empty($value)) {
            
            $buffer .= $indent . '      <section class="dashboard_sidebar dn-1199 ';
            $value = $context->find('dashboard_scroll_drawer');
            $buffer .= $this->section12532e1dc9117044dfc158d5a8b9df7f($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '        <div class="dashboard_sidebars">
';
            $buffer .= $indent . '          <div class="user_board">
';
            $value = $context->find('dashboard_nav_user');
            $buffer .= $this->sectionA4da79707fe73da7bc1aa1b8a1f6aa93($context, $indent, $value);
            $value = $context->find('dashboard_nav_flat');
            $buffer .= $this->sectionC789749f32bc74cff3346c1f66c60f75($context, $indent, $value);
            $buffer .= $indent . '            <div class="pl30 pr30">
';
            $buffer .= $indent . '              ';
            $value = $this->resolveValue($context->find('leftblocks'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '      </section>
';
        }
        $buffer .= $indent . '    <div class="our-dashbord dashbord ';
        $value = $context->find('disable_dashboard_drawer');
        $buffer .= $this->sectionBd5bd32c98c144701aa16896ce1b6b9d($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '      <div class="dashboard_main_content">
';
        $buffer .= $indent . '        <div class="container-fluid">
';
        $buffer .= $indent . '          <div class="main_content_container" id="region-main">
';
        $buffer .= $indent . '            <div class="row">
';
        $buffer .= $indent . '              <div class="col-xl-12">
';
        $buffer .= $indent . '                <div class="row">
';
        $buffer .= $indent . '                  <div class="col-lg-12">
';
        $buffer .= $indent . '                    <nav class="breadcrumb_widgets ';
        $value = $this->resolveValue($context->find('breadcrumb_clip_dash'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" aria-label="breadcrumb mb30">
';
        $buffer .= $indent . '                      <h4 class="title float-left">';
        $value = $this->resolveValue($context->find('pageheading'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '                      <ol class="breadcrumb float-right">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.navbar'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                      </ol>
';
        $buffer .= $indent . '                    </nav>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="row">
';
        $value = $context->find('has_blocks_fullwidth_top');
        $buffer .= $this->section4d99d9331bdbd202f759be458862a023($context, $indent, $value);
        $value = $context->find('disable_dashboard_drawer');
        $buffer .= $this->section852f27a2cede88e359a504844bdb3a16($context, $indent, $value);
        $value = $context->find('disable_dashboard_drawer');
        if (empty($value)) {
            
            $buffer .= $indent . '                    <div class="';
            $value = $context->find('sidebar_right');
            $buffer .= $this->section653a813f608b603ab96a73c0bbfbf5ff($context, $indent, $value);
            $buffer .= ' ';
            $value = $context->find('sidebar_right');
            if (empty($value)) {
                
                $buffer .= 'col-lg-12';
            }
            $buffer .= '">
';
        }
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('secondarymoremenu');
        $buffer .= $this->section028c293e61ecb72ac0754e0de48e79e2($context, $indent, $value);
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                  <div id="ccnSettingsMenuContainer">
';
        $buffer .= $indent . '                    <div id="ccnSettingsMenuInner">';
        $buffer .= '
';
        $value = $context->find('show_settings_controls');
        $buffer .= $this->section3299da5cfa91e83aadb108d00b6baa90($context, $indent, $value);
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $value = $context->find('has_blocks_above_content');
        $buffer .= $this->sectionE2c8d9cef5553e01c2a90ac145c9b299($context, $indent, $value);
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('headercontent');
        $buffer .= $this->section3b65462a0fc972b85382eb245dd5f0bf($context, $indent, $value);
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('in_course_activity');
        $buffer .= $this->sectionAe669a8cb4c4969d5340ff4f5c353a49($context, $indent, $value);
        $buffer .= $indent . '                  ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('has_blocks_below_content');
        $buffer .= $this->section12e87b5b25c5ab3f8a2d39dee54de1a8($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $value = $context->find('sidebar_right');
        $buffer .= $this->sectionBbab17abd406f11cfd7dfa6e3657c1a0($context, $indent, $value);
        $value = $context->find('has_blocks_fullwidth_bottom');
        $buffer .= $this->sectionC31d5ba921972ecb0d6f53ba914207f9($context, $indent, $value);
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_dashboard_footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '          ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
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

    private function section12532e1dc9117044dfc158d5a8b9df7f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ccn_dashboard_scroll_drawer ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ccn_dashboard_scroll_drawer ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91b6a1010af6596c0971a233aff82cc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' start, theme_edumy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' start, theme_edumy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA4da79707fe73da7bc1aa1b8a1f6aa93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <div class="user_profile">
                <div class="media">
                  <div class="media-body">
                    <h4 class="mt-0">{{#str}} start, theme_edumy {{/str}}</h4>
                  </div>
                </div>
              </div>
              <div class="dashbord_nav_list">
                {{{ output.user_menu }}}
              </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              <div class="user_profile">
';
                $buffer .= $indent . '                <div class="media">
';
                $buffer .= $indent . '                  <div class="media-body">
';
                $buffer .= $indent . '                    <h4 class="mt-0">';
                $value = $context->find('str');
                $buffer .= $this->section91b6a1010af6596c0971a233aff82cc5($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '              <div class="dashbord_nav_list">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '              </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC789749f32bc74cff3346c1f66c60f75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <div class="user_profile">
                <div class="media">
                  <div class="media-body">
                    <h4 class="mt-0">{{#str}} start, theme_edumy {{/str}}</h4>
                  </div>
                </div>
              </div>
              <div class="dashbord_nav_list ccn_dashbord_nav_list">
                {{> theme_boost/flat_navigation2 }}
              </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              <div class="user_profile">
';
                $buffer .= $indent . '                <div class="media">
';
                $buffer .= $indent . '                  <div class="media-body">
';
                $buffer .= $indent . '                    <h4 class="mt-0">';
                $value = $context->find('str');
                $buffer .= $this->section91b6a1010af6596c0971a233aff82cc5($context, $indent, $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                  </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '              </div>
';
                $buffer .= $indent . '              <div class="dashbord_nav_list ccn_dashbord_nav_list">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/flat_navigation2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '              </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd5bd32c98c144701aa16896ce1b6b9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' ccn_dashbord_disable_drawer ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ccn_dashbord_disable_drawer ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d99d9331bdbd202f759be458862a023(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                      {{{ blocks_fullwidth_top }}}
                    </div>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
';
                $buffer .= $indent . '                      ';
                $value = $this->resolveValue($context->find('blocks_fullwidth_top'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
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

    private function section74a07414e62a6c49ca93d5e7a00c74dc(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                      <div class="';
                $value = $context->find('sidebar_double');
                $buffer .= $this->section0d4e4b25bc133217e63d22bde9040707($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('sidebar_double');
                if (empty($value)) {
                    
                    $buffer .= ' col-lg-4 col-xl-4 ';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="ccn-sidebar-region" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                          ';
                $value = $this->resolveValue($context->find('leftblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                      </div>
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

    private function section852f27a2cede88e359a504844bdb3a16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#sidebar_left}}
                      <div class="{{#sidebar_double}} col-lg-3 col-xl-3 {{/sidebar_double}} {{^sidebar_double}} col-lg-4 col-xl-4 {{/sidebar_double}}">
                        <div class="ccn-sidebar-region" aria-label="{{#str}}blocks{{/str}}">
                          {{{ leftblocks }}}
                        </div>
                      </div>
                    {{/sidebar_left}}
                    <div class="
                      {{#sidebar_none}} col-md-12 col-lg-12 col-xl-12 {{/sidebar_none}}
                      {{#sidebar_double}} col-lg-6 {{/sidebar_double}}
                      {{#sidebar_single_left}} col-lg-8 col-xl-8 {{/sidebar_single_left}}
                      {{#sidebar_single_right}} col-lg-8 col-xl-8 {{/sidebar_single_right}}
                    ">
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('sidebar_left');
                $buffer .= $this->section74a07414e62a6c49ca93d5e7a00c74dc($context, $indent, $value);
                $buffer .= $indent . '                    <div class="
';
                $buffer .= $indent . '                      ';
                $value = $context->find('sidebar_none');
                $buffer .= $this->section8a83276f77018d8024cdfa9f88cb26a4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                      ';
                $value = $context->find('sidebar_double');
                $buffer .= $this->section48a89749267005c08cb744ec12db6900($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                      ';
                $value = $context->find('sidebar_single_left');
                $buffer .= $this->sectionEe15739d06a889ded9d487c62d2d53f5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                      ';
                $value = $context->find('sidebar_single_right');
                $buffer .= $this->sectionEe15739d06a889ded9d487c62d2d53f5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section653a813f608b603ab96a73c0bbfbf5ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-lg-8 col-xl-8';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'col-lg-8 col-xl-8';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section028c293e61ecb72ac0754e0de48e79e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="ccn-4-navigation">
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
                
                $buffer .= $indent . '                    <div class="ccn-4-navigation">
';
                $buffer .= $indent . '                      <div class="secondary-navigation">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                      </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
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

    private function section320241a0799dc6e3e09d268352fde6ad(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                          <div id="region-main-settings-menu" class="d-print-none ';
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '                          </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3299da5cfa91e83aadb108d00b6baa90(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->section320241a0799dc6e3e09d268352fde6ad($context, $indent, $value);
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

    private function section3b65462a0fc972b85382eb245dd5f0bf(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '                      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe669a8cb4c4969d5340ff4f5c353a49(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12e87b5b25c5ab3f8a2d39dee54de1a8(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('blocks_below_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3c4c2ffaf0775e6a44d1fd4a46f3d44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{#sidebar_double}} col-lg-3 col-xl-3 {{/sidebar_double}} {{^sidebar_double}} col-lg-4 col-xl-4 {{/sidebar_double}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $context->find('sidebar_double');
                $buffer .= $this->section0d4e4b25bc133217e63d22bde9040707($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('sidebar_double');
                if (empty($value)) {
                    
                    $buffer .= ' col-lg-4 col-xl-4 ';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbab17abd406f11cfd7dfa6e3657c1a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <div
                    class="{{#disable_dashboard_drawer}} {{#sidebar_double}} col-lg-3 col-xl-3 {{/sidebar_double}} {{^sidebar_double}} col-lg-4 col-xl-4 {{/sidebar_double}}{{/disable_dashboard_drawer}} {{^disable_dashboard_drawer}}col-lg-4 col-xl-4 {{/disable_dashboard_drawer}}">
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
                
                $buffer .= $indent . '                  <div
';
                $buffer .= $indent . '                    class="';
                $value = $context->find('disable_dashboard_drawer');
                $buffer .= $this->sectionB3c4c2ffaf0775e6a44d1fd4a46f3d44($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('disable_dashboard_drawer');
                if (empty($value)) {
                    
                    $buffer .= 'col-lg-4 col-xl-4 ';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="ccn-sidebar-region" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                      ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                  </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC31d5ba921972ecb0d6f53ba914207f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    {{{ blocks_fullwidth_bottom }}}
                  </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('blocks_fullwidth_bottom'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                  </div>
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
