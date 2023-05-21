<?php

class __Mustache_a04d3099397f70d70d4db8e2260e5140 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('disabled');
        if (empty($value)) {
            
            $buffer .= $indent . '    <a href="';
            $value = $this->resolveValue($context->find('url'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" id="';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" class="';
            $value = $this->resolveValue($context->find('classes'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" ';
            $value = $context->find('attributes');
            $buffer .= $this->sectionBe04d4b857ac198446bb63585b81c834($context, $indent, $value);
            $buffer .= '>';
            $value = $context->find('icon');
            $buffer .= $this->sectionB28e55fd482fa94ff63f65ecf14ca658($context, $indent, $value);
            $value = $this->resolveValue($context->find('text'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</a>
';
            $value = $context->find('hasactions');
            $buffer .= $this->section193ac8288144ab8766a418c22811fbde($context, $indent, $value);
        }
        $value = $context->find('disabled');
        $buffer .= $this->section3906c3c7d9a6227cf42eb4d519d55bc9($context, $indent, $value);

        return $buffer;
    }

    private function sectionE1aa2fd25fafc048534b66e7545a9f28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{value}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe04d4b857ac198446bb63585b81c834(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}}={{#quote}}{{value}}{{/quote}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '=';
                $value = $context->find('quote');
                $buffer .= $this->sectionE1aa2fd25fafc048534b66e7545a9f28($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8bc88bd0061bedf9c626efe42e91428(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{key}}, {{component}}, {{title}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB28e55fd482fa94ff63f65ecf14ca658(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#pix}}{{key}}, {{component}}, {{title}}{{/pix}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('pix');
                $buffer .= $this->sectionF8bc88bd0061bedf9c626efe42e91428($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section193ac8288144ab8766a418c22811fbde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/actions }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/actions')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3906c3c7d9a6227cf42eb4d519d55bc9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="currentlink {{classes}}" {{#attributes}} {{name}}={{#quote}}{{value}}{{/quote}} {{/attributes}}>{{#icon}}{{#pix}}{{key}}, {{component}}, {{title}}{{/pix}}{{/icon}}{{{text}}}</span>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="currentlink ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('attributes');
                $buffer .= $this->sectionBe04d4b857ac198446bb63585b81c834($context, $indent, $value);
                $buffer .= '>';
                $value = $context->find('icon');
                $buffer .= $this->sectionB28e55fd482fa94ff63f65ecf14ca658($context, $indent, $value);
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
