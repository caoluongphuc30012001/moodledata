<?php

class __Mustache_c07add22bd2554342d7282fba4ba37e9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="ccn-calendar-header">
';
        if ($partial = $this->mustache->loadPartial('core_calendar/view_selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $value = $context->find('filter_selector');
        $buffer .= $this->section92fd5cb5b6129fa9e667125991184593($context, $indent, $value);
        if ($partial = $this->mustache->loadPartial('core_calendar/add_event_button')) {
            $buffer .= $partial->renderInternal($context, $indent . '  ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section92fd5cb5b6129fa9e667125991184593(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="ccn-calendar-header-option">
      {{{filter_selector}}}
    </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="ccn-calendar-header-option">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('filter_selector'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
