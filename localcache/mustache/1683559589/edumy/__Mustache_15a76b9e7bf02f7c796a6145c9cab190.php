<?php

class __Mustache_15a76b9e7bf02f7c796a6145c9cab190 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="mt-5 mb-5 activity-navigation">
';
        $buffer .= $indent . '  ';
        if ($parent = $this->mustache->loadPartial('core/columns-1to1to1')) {
            $context->pushBlockContext(array(
                'column1' => array($this, 'block2c42d91a1e2bb2fba07a1c832d35034e'),
                'column2' => array($this, 'block2f483f7d6ec0ef2bd5cace4ff8345122'),
                'column3' => array($this, 'block020cf95b47d86a19bf2796a0c4b9c13e'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section490440062d62727ec9d762c45f0157fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/action_link }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38cbdd58a4e67e3cb86ecb5ee6001b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/url_select }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block2c42d91a1e2bb2fba07a1c832d35034e($context)
    {
        $indent = $buffer = '';
        $buffer .= '  <div class="float-left ui_kit_btn">
';
        $buffer .= $indent . '    ';
        $value = $context->find('prevlink');
        $buffer .= $this->section490440062d62727ec9d762c45f0157fb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
    
        return $buffer;
    }

    public function block2f483f7d6ec0ef2bd5cace4ff8345122($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '  <div class="mdl-align">
';
        $buffer .= $indent . '    ';
        $value = $context->find('activitylist');
        $buffer .= $this->sectionF38cbdd58a4e67e3cb86ecb5ee6001b3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
    
        return $buffer;
    }

    public function block020cf95b47d86a19bf2796a0c4b9c13e($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '  <div class="float-right ui_kit_btn">
';
        $buffer .= $indent . '    ';
        $value = $context->find('nextlink');
        $buffer .= $this->section490440062d62727ec9d762c45f0157fb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '  </div>
';
    
        return $buffer;
    }
}
