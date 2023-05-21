<?php

class __Mustache_e1fadbb468b434eb48460814d48636d4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container ccn_breadcrumb_widgets clearfix">
';
        $value = $context->find('settingsmenu');
        $buffer .= $this->section43f3b5f7a23370dcccd952a1593053b4($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('pageheadingbutton');
        $buffer .= $this->sectionDc4b3cf204a8a3bc2269e39616f47bc3($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('courseheader');
        $buffer .= $this->section1cf26b407823853fb15bd565dd0f870b($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('contextheader');
        $buffer .= $this->section9d99a0dbb41492b5aefa6e4752e315c0($context, $indent, $value);
        $buffer .= $indent . '  <!--<div class="d-inline-flex align-items-center">-->
';
        $buffer .= $indent . '  <div class="d-flex align-items-center">
';
        $value = $context->find('headeractions');
        $buffer .= $this->sectionEd8fa4bbae84337d060c4f1f4134f4df($context, $indent, $value);
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section43f3b5f7a23370dcccd952a1593053b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="ccnSettingsMenu" class="context-header-settings-menu">
      {{{settingsmenu}}}
    </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="ccnSettingsMenu" class="context-header-settings-menu">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
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

    private function sectionDc4b3cf204a8a3bc2269e39616f47bc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="page-heading-button">
      {{{pageheadingbutton}}}
    </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="page-heading-button">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
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

    private function section1cf26b407823853fb15bd565dd0f870b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="course-header">
      {{{courseheader}}}
    </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="course-header">
';
                $buffer .= $indent . '      ';
                $value = $this->resolveValue($context->find('courseheader'), $context);
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

    private function section9d99a0dbb41492b5aefa6e4752e315c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{contextheader}}}
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd8fa4bbae84337d060c4f1f4134f4df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="header-actions-container flex-shrink-0" data-region="header-actions-container">
      <div class="header-action">{{{.}}}</div>
    </div>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="header-actions-container flex-shrink-0" data-region="header-actions-container">
';
                $buffer .= $indent . '      <div class="header-action">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
