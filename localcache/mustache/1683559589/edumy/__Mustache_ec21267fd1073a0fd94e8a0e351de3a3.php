<?php

class __Mustache_ec21267fd1073a0fd94e8a0e351de3a3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="block-myoverview-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="my_course_content_container block-myoverview block-cards" data-region="myoverview" role="navigation">
';
        $buffer .= $indent . '  <div class="my_course_content mb30">
';
        $buffer .= $indent . '    <div class="my_course_content_header">
';
        $buffer .= $indent . '        <div class="candidate_revew_select style2 text-right w-100" data-region="filter" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6dacaeff51ba425cb4a640a8ca853997($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '          <div data-region="filter" class="d-flex align-items-center" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6dacaeff51ba425cb4a640a8ca853997($context, $indent, $value);
        $buffer .= '">
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/nav-search-widget')) {
            $buffer .= $partial->renderInternal($context, $indent . '              ');
        }
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/nav-grouping-selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '              ');
        }
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/nav-sort-selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '              ');
        }
        $buffer .= $indent . '
';
        $value = $context->find('displaydropdown');
        $buffer .= $this->section6fafb3f0610ecdfd7d69fe144afa9949($context, $indent, $value);
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container-fluid p-0">
';
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/block_myoverview/courses-view')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div></div>
';
        $value = $context->find('js');
        $buffer .= $this->section386b7d71bdc9db8625cd5cfe5736c587($context, $indent, $value);

        return $buffer;
    }

    private function section6dacaeff51ba425cb4a640a8ca853997(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:controls, block_myoverview ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria:controls, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fafb3f0610ecdfd7d69fe144afa9949(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              {{!#    > theme_edumy/ccn_mdl_400/block_myoverview/nav-display-selector  }}
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section386b7d71bdc9db8625cd5cfe5736c587(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
    \'block_myoverview/main\',
],
function(
    $,
    Main
) {
    var root = $(\'#block-myoverview-{{uniqid}}\');
    Main.init(root);
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'block_myoverview/main\',
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    Main
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var root = $(\'#block-myoverview-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '    Main.init(root);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
