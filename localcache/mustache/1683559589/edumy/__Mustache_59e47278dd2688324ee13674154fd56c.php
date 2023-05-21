<?php

class __Mustache_59e47278dd2688324ee13674154fd56c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="candidate_revew_search_box course mb30 fn-520 ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $value = $context->find('inform');
        if (empty($value)) {
            
            $buffer .= $indent . '    <form autocomplete="off" action="';
            $value = $this->resolveValue($context->find('action'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" method="get" accept-charset="utf-8" class="form-inline my-2 my-lg-0">
';
        }
        $value = $context->find('hiddenfields');
        $buffer .= $this->section94a4232588cb3e7c5f3ca9b3123f8e23($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <input type="text"
';
        $buffer .= $indent . '           id="searchinput-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '           class="form-control"
';
        $buffer .= $indent . '           placeholder="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '           aria-label="';
        $value = $this->resolveValue($context->find('searchstring'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '           name="';
        $value = $this->resolveValue($context->find('inputname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '           data-region="input"
';
        $buffer .= $indent . '           autocomplete="off"
';
        $buffer .= $indent . '           value="';
        $value = $this->resolveValue($context->find('query'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '        <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('otherfields');
        $buffer .= $this->sectionA58913bae96565fe5a2b538e8d0b4d44($context, $indent, $value);
        $value = $context->find('inform');
        if (empty($value)) {
            
            $buffer .= $indent . '    </form>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section94a4232588cb3e7c5f3ca9b3123f8e23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <input type="hidden" name="{{ name }}" value="{{ value }}">
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <input type="hidden" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA58913bae96565fe5a2b538e8d0b4d44(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div  class="ml-2">{{{ otherfields }}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div  class="ml-2">';
                $value = $this->resolveValue($context->find('otherfields'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
