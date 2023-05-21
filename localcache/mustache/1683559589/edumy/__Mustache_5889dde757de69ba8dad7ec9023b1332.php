<?php

class __Mustache_5889dde757de69ba8dad7ec9023b1332 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="list-group" aria-label="';
        $value = $this->resolveValue($context->find('firstcollectionlabel'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('flatnavigation');
        $buffer .= $this->section030b4b5023a006820339413f251a1be2($context, $indent, $value);
        $buffer .= $indent . '</nav>
';

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

    private function section9ffb43fb99658e4c2fda9fd8667c4a45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-parent-key="{{.}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'data-parent-key="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c636b8d211c8807beb0b37869ad3b26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->findDot('icon.pix'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->findDot('icon.component'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->findDot('icon.alt'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f9056ea85df6b7235b5d88f01361bd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $context->find('pix');
                $buffer .= $this->section0c636b8d211c8807beb0b37869ad3b26($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8374ffd28f660704d7a40aaebe52665d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a class=" {{#isactive}}active{{/isactive}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}"
      data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}" {{/parent.key}}>

      {{#icon.pix}}
        {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
      {{/icon.pix}}
      {{{text}}}

    </a>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a class=" ';
                $value = $context->find('isactive');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-isexpandable="';
                $value = $this->resolveValue($context->find('isexpandable'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-indent="';
                $value = $this->resolveValue($context->find('get_indent'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-showdivider="';
                $value = $this->resolveValue($context->find('showdivider'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-nodetype="';
                $value = $this->resolveValue($context->find('nodetype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '      data-collapse="';
                $value = $this->resolveValue($context->find('collapse'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-forceopen="';
                $value = $this->resolveValue($context->find('forceopen'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-isactive="';
                $value = $this->resolveValue($context->find('isactive'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-hidden="';
                $value = $this->resolveValue($context->find('hidden'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-preceedwithhr="';
                $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->findDot('parent.key');
                $buffer .= $this->section9ffb43fb99658e4c2fda9fd8667c4a45($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '
';
                $value = $context->findDot('icon.pix');
                $buffer .= $this->section8f9056ea85df6b7235b5d88f01361bd0($context, $indent, $value);
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section030b4b5023a006820339413f251a1be2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{#action}}
    <a class=" {{#isactive}}active{{/isactive}}" href="{{{action}}}" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}"
      data-collapse="{{collapse}}" data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}" {{/parent.key}}>

      {{#icon.pix}}
        {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
      {{/icon.pix}}
      {{{text}}}

    </a>
  {{/action}}
  {{^action}}
    <div class="no-action" data-key="{{key}}" data-isexpandable="{{isexpandable}}" data-indent="{{get_indent}}" data-showdivider="{{showdivider}}" data-type="{{type}}" data-nodetype="{{nodetype}}" data-collapse="{{collapse}}"
      data-forceopen="{{forceopen}}" data-isactive="{{isactive}}" data-hidden="{{hidden}}" data-preceedwithhr="{{preceedwithhr}}" {{#parent.key}}data-parent-key="{{.}}" {{/parent.key}}>


      {{#icon.pix}}
        {{#pix}}{{{icon.pix}}}, {{{icon.component}}}, {{{icon.alt}}}{{/pix}}
      {{/icon.pix}}
      {{{text}}}

    </div>
  {{/action}}
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('action');
                $buffer .= $this->section8374ffd28f660704d7a40aaebe52665d($context, $indent, $value);
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    <div class="no-action" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-isexpandable="';
                    $value = $this->resolveValue($context->find('isexpandable'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-indent="';
                    $value = $this->resolveValue($context->find('get_indent'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-showdivider="';
                    $value = $this->resolveValue($context->find('showdivider'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-type="';
                    $value = $this->resolveValue($context->find('type'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-nodetype="';
                    $value = $this->resolveValue($context->find('nodetype'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-collapse="';
                    $value = $this->resolveValue($context->find('collapse'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '      data-forceopen="';
                    $value = $this->resolveValue($context->find('forceopen'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-isactive="';
                    $value = $this->resolveValue($context->find('isactive'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-hidden="';
                    $value = $this->resolveValue($context->find('hidden'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-preceedwithhr="';
                    $value = $this->resolveValue($context->find('preceedwithhr'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" ';
                    $value = $context->findDot('parent.key');
                    $buffer .= $this->section9ffb43fb99658e4c2fda9fd8667c4a45($context, $indent, $value);
                    $buffer .= '>
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '
';
                    $value = $context->findDot('icon.pix');
                    $buffer .= $this->section8f9056ea85df6b7235b5d88f01361bd0($context, $indent, $value);
                    $buffer .= $indent . '      ';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '    </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
