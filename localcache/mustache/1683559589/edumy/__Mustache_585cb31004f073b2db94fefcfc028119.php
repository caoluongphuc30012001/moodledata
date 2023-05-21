<?php

class __Mustache_585cb31004f073b2db94fefcfc028119 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '  <li class="user_setting ccn-settings-nav ccn-lang-menu">
';
        $buffer .= $indent . '    <div class="dropdown">
';
        $buffer .= $indent . '      <a class="lang_icon" href="#" data-toggle="dropdown"><img class="lang_icon" src="';
        $value = $this->resolveValue($context->find('current_icon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" /></a>
';
        $buffer .= $indent . '      <div class="dropdown-menu notification_dropdown_content">
';
        $buffer .= $indent . '        <div class="so_heading">
';
        $buffer .= $indent . '          <p>';
        $value = $this->resolveValue($context->find('strlang'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="user_setting_content">
';
        $buffer .= $indent . '          <div class="so_content" data-simplebar="init">
';
        $buffer .= $indent . '            <nav class="list-group">
';
        $value = $context->find('langs');
        $buffer .= $this->sectionB633180f7c5d18fd3734f25d4592297b($context, $indent, $value);
        $buffer .= $indent . '            </nav>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </li>
';

        return $buffer;
    }

    private function sectionB633180f7c5d18fd3734f25d4592297b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{{url}}}">
                  <div class="lang_icon_flag"><img src="{{icon}}" /></div>{{name}}
                </a>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                  <div class="lang_icon_flag"><img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" /></div>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
