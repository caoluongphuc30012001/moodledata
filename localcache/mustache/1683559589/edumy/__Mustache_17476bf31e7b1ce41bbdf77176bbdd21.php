<?php

class __Mustache_17476bf31e7b1ce41bbdf77176bbdd21 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="loading-placeholder-content" aria-hidden="true">
';
        $value = $context->find('cards');
        $buffer .= $this->sectionEec4b2783155f8f3af3abf56ae08ce8f($context, $indent, $value);
        $value = $context->find('list');
        $buffer .= $this->sectionC23d99054caba2d536ccdfcdf8055312($context, $indent, $value);
        $value = $context->find('summary');
        $buffer .= $this->section43593b404fd824744d06c4f3fc9bf1ba($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionEec4b2783155f8f3af3abf56ae08ce8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="card-deck dashboard-card-deck one-row" style="height: 13rem">
            {{> core_course/placeholder-course }}
            {{> core_course/placeholder-course }}
            {{> core_course/placeholder-course }}
            {{> core_course/placeholder-course }}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="card-deck dashboard-card-deck one-row" style="height: 13rem">
';
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC23d99054caba2d536ccdfcdf8055312(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul class="list-group">

            {{> theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item }}
            {{> theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item }}
            {{> theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item }}
            {{> theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item }}
        </ul>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <ul class="list-group">
';
                $buffer .= $indent . '
';
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section43593b404fd824744d06c4f3fc9bf1ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <ul class="list-group">
            {{> theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item }}
            {{> theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item }}
            {{> theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item }}
            {{> theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item }}
        </ul>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <ul class="list-group">
';
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/placeholder-course-list-item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
