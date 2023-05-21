<?php

class __Mustache_821f167e799e2503223be3b9448fe271 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="heading">
';
        $buffer .= $indent . '  <h3 class="text-center">';
        $value = $context->find('str');
        $buffer .= $this->section7011f9eedafcdb8d9dc662b124b2ed1e($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '  <p class="text-center">';
        $value = $context->find('str');
        $buffer .= $this->section08fb0e976bfb85537b7eaeb783775ba7($context, $indent, $value);
        $buffer .= ' <a class="text-thm" href="index.php">';
        $value = $context->find('str');
        $buffer .= $this->sectionCbb4560469c0093048983420c21ea716($context, $indent, $value);
        $buffer .= '</a></p>
';
        $buffer .= $indent . '</div>
';
        $value = $this->resolveValue($context->find('formhtml'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';

        return $buffer;
    }

    private function section7011f9eedafcdb8d9dc662b124b2ed1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newaccount';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'newaccount';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08fb0e976bfb85537b7eaeb783775ba7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'have_an_account, theme_edumy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'have_an_account, theme_edumy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCbb4560469c0093048983420c21ea716(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login, theme_edumy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'login, theme_edumy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
