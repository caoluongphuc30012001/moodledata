<?php

class __Mustache_c1a815001a093b58fb6a3d47fac60b26 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '  id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '  class="
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('hidden');
        $buffer .= $this->section5a8152d3d9f2c97a8df7cb314c7a68ea($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('hascontrols');
        $buffer .= $this->section907e64204c44a106808f35376375ac8c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('ccn_block');
        if (empty($value)) {
            
            $buffer .= ' ccnDashBl mb30 ';
        }
        $buffer .= '"
';
        $buffer .= $indent . '  style="';
        $value = $this->resolveValue($context->find('ccn_style'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '  role="';
        $value = $this->resolveValue($context->find('ariarole'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '  data-block="';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '  ';
        $value = $context->find('arialabel');
        $buffer .= $this->sectionDb14b0433b75775f6950a398f9e5ea76($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('arialabel');
        if (empty($value)) {
            
            $buffer .= ' ';
            $value = $context->find('hascontrols');
            $buffer .= $this->section27d026ff9e47a4aa109bbd48282ecb55($context, $indent, $value);
            $buffer .= ' ';
        }
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $value = $context->find('showskiplink');
        $buffer .= $this->section501ef804c92c5d19e54dc012d0594119($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('ccn_block');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $context->find('title');
            $buffer .= $this->section34986f1d0f60cb9d4960eae633caf92c($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('hascontrols');
        $buffer .= $this->section9a83e0df0ba9e5ca79884f6110e58362($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="ccnBlockContent ';
        $value = $context->find('ccn_block');
        if (empty($value)) {
            
            $buffer .= ' ccnDashBlCt ';
        }
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('annotation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('showskiplink');
        $buffer .= $this->section86d94a2947bb1f44baa191a3197437e1($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section5a8152d3d9f2c97a8df7cb314c7a68ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hidden ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hidden ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section907e64204c44a106808f35376375ac8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' block_with_controls ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' block_with_controls ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6443b7c1cd72c62cb76e0217440a25a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{arialabel}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('arialabel'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb14b0433b75775f6950a398f9e5ea76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-label={{#quote}}{{{arialabel}}}{{/quote}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria-label=';
                $value = $context->find('quote');
                $buffer .= $this->section6443b7c1cd72c62cb76e0217440a25a3($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA475f296584083f606e1fbb3973c6748(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-labelledby="instance-{{blockinstanceid}}-header" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria-labelledby="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-header" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27d026ff9e47a4aa109bbd48282ecb55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{#title}} aria-labelledby="instance-{{blockinstanceid}}-header" {{/title}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $context->find('title');
                $buffer .= $this->sectionA475f296584083f606e1fbb3973c6748($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB72e1405931a305b04da0656eec2aca0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'skipa, access, {{title}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'skipa, access, ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section501ef804c92c5d19e54dc012d0594119(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="#sb-{{skipid}}" class="sr-only sr-only-focusable">{{#str}}skipa, access, {{title}}{{/str}}</a>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a href="#sb-';
                $value = $this->resolveValue($context->find('skipid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="sr-only sr-only-focusable">';
                $value = $context->find('str');
                $buffer .= $this->sectionB72e1405931a305b04da0656eec2aca0($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34986f1d0f60cb9d4960eae633caf92c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4 id="instance-{{blockinstanceid}}-header" class="title ccnDashBlHd">{{{title}}}</h4>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h4 id="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-header" class="title ccnDashBlHd">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb3a994033f3c4bf9a8bb68803e60ba1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' live_customizer, theme_edumy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' live_customizer, theme_edumy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section41b5aa76f38dd1262e6b9a2f6a60a40f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="ccnBlockControls--lc-vb">
          <a class="ccnBlockControls--lc-vb--btn" href="{{{ccn_lc_vb}}}">
            <span class="ccn-flaticon-magic-wand"></span>
            {{#str}} live_customizer, theme_edumy {{/str}}
          </a>
        </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="ccnBlockControls--lc-vb">
';
                $buffer .= $indent . '          <a class="ccnBlockControls--lc-vb--btn" href="';
                $value = $this->resolveValue($context->find('ccn_lc_vb'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="ccn-flaticon-magic-wand"></span>
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionFb3a994033f3c4bf9a8bb68803e60ba1($context, $indent, $value);
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

    private function section9a83e0df0ba9e5ca79884f6110e58362(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span id="instance-{{blockinstanceid}}-header" class="hidden ccn-hidden ccnInvisTitle">{{{title}}}</span>
    <div class="ccnBlockControls">
      {{#ccn_lc_vb}}
        <div class="ccnBlockControls--lc-vb">
          <a class="ccnBlockControls--lc-vb--btn" href="{{{ccn_lc_vb}}}">
            <span class="ccn-flaticon-magic-wand"></span>
            {{#str}} live_customizer, theme_edumy {{/str}}
          </a>
        </div>
      {{/ccn_lc_vb}}
      <div class="block-controls header">
        {{{controls}}}
      </div>
    </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span id="instance-';
                $value = $this->resolveValue($context->find('blockinstanceid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-header" class="hidden ccn-hidden ccnInvisTitle">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '    <div class="ccnBlockControls">
';
                $value = $context->find('ccn_lc_vb');
                $buffer .= $this->section41b5aa76f38dd1262e6b9a2f6a60a40f($context, $indent, $value);
                $buffer .= $indent . '      <div class="block-controls header">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('controls'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86d94a2947bb1f44baa191a3197437e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span id="sb-{{skipid}}"></span>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span id="sb-';
                $value = $this->resolveValue($context->find('skipid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
