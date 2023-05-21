<?php

class __Mustache_403e7f1290a0f97d1a89c8eaf729d318 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="moremenu navigation">
';
        $buffer .= $indent . '    <ul id="moremenu-';
        $value = $this->resolveValue($context->find('moremenuid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('navbarstyle'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="';
        $value = $context->find('istablist');
        $buffer .= $this->sectionE8d02550eef8dd78cfe22b730ceb5426($context, $indent, $value);
        $value = $context->find('istablist');
        if (empty($value)) {
            
            $buffer .= 'menubar';
        }
        $buffer .= '" class="ace-responsive-menu nav more-nav ';
        $value = $this->resolveValue($context->find('navbarstyle'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('nodecollection');
        $buffer .= $this->sectionBa3a3c58599239efed6d0371ffa7a105($context, $indent, $value);
        $value = $context->find('nodearray');
        $buffer .= $this->section05400f35ad35ba87efe057324f79f203($context, $indent, $value);
        $buffer .= $indent . '        <li role="none" class="nav-item -dropdown dropdownmoremenu d-none" data-region="morebutton">
';
        $buffer .= $indent . '            <a class="ccn-nav-item _dropdown-toggle nav-link ';
        $value = $context->find('isactive');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" href="#" id="moremenu-dropdown-';
        $value = $this->resolveValue($context->find('moremenuid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="';
        $value = $context->find('istablist');
        $buffer .= $this->sectionC225dbeabea012d1739058de23648ffe($context, $indent, $value);
        $value = $context->find('istablist');
        if (empty($value)) {
            
            $buffer .= 'menuitem';
        }
        $buffer .= '" --rm-data-toggle="dropdown" --rm-aria-haspopup="true" --rm-aria-expanded="false" --rm-tabindex="-1">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->section5575f70c07cf53c82349ae8d67eb5e68($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <ul class="sub-menu" data-region="moredropdown" aria-labelledby="moremenu-dropdown-';
        $value = $this->resolveValue($context->find('moremenuid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="menu">
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '            <!--<ul class="dropdown-menu dropdown-menu-left" data-region="moredropdown" aria-labelledby="moremenu-dropdown-';
        $value = $this->resolveValue($context->find('moremenuid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="menu">
';
        $buffer .= $indent . '            </ul>-->
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <!--<li role="none" class="nav-item dropdown dropdownmoremenu d-none ccn-activate-more-dropdown" data-region="morebutton">
';
        $buffer .= $indent . '            <a class="btn dropdown-toggle nav-link ';
        $value = $context->find('isactive');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '" href="#" id="moremenu-dropdown-';
        $value = $this->resolveValue($context->find('moremenuid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="';
        $value = $context->find('istablist');
        $buffer .= $this->sectionC225dbeabea012d1739058de23648ffe($context, $indent, $value);
        $value = $context->find('istablist');
        if (empty($value)) {
            
            $buffer .= 'menuitem';
        }
        $buffer .= '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" tabindex="-1">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->section5575f70c07cf53c82349ae8d67eb5e68($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <ul class="dropdown-menu dropdown-menu-left" data-region="moredropdown" aria-labelledby="moremenu-dropdown-';
        $value = $this->resolveValue($context->find('moremenuid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="menu">
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </li>-->
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</nav>
';
        $value = $context->find('js');
        $buffer .= $this->section959b7a1506f4d5c3c0b4e21402dfcca2($context, $indent, $value);

        return $buffer;
    }

    private function sectionE8d02550eef8dd78cfe22b730ceb5426(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tablist';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tablist';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32ac8fa1ab620997230ad40b3d63c678(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> theme_edumy/ccn_mdl_400/moremenu_children}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/moremenu_children')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa3a3c58599239efed6d0371ffa7a105(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#children}}
                {{> theme_edumy/ccn_mdl_400/moremenu_children}}
            {{/children}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('children');
                $buffer .= $this->section32ac8fa1ab620997230ad40b3d63c678($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05400f35ad35ba87efe057324f79f203(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> theme_edumy/ccn_mdl_400/moremenu_children}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/moremenu_children')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC225dbeabea012d1739058de23648ffe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tab';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tab';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5575f70c07cf53c82349ae8d67eb5e68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'moremenu, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'moremenu, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section959b7a1506f4d5c3c0b4e21402dfcca2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core/moremenu\'], function(moremenu) {
        moremenu(document.querySelector(\'#moremenu-{{moremenuid}}-{{navbarstyle}}\'));
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core/moremenu\'], function(moremenu) {
';
                $buffer .= $indent . '        moremenu(document.querySelector(\'#moremenu-';
                $value = $this->resolveValue($context->find('moremenuid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('navbarstyle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\'));
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
