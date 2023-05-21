<?php

class __Mustache_cd4f42c9dc065a2e445f9c7d39631580 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="result">
';
        $buffer .= $indent . '    <h4 class="result-title">
';
        $buffer .= $indent . '        ';
        $value = $context->find('icon');
        $buffer .= $this->sectionBe9bc86f74bfdde41657f2bc48d8c163($context, $indent, $value);
        $buffer .= '<a href="';
        $value = $this->resolveValue($context->find('docurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    </h4>
';
        $value = $context->find('content');
        $buffer .= $this->section9ba5c06ec76715bd1f019a91b9cca05a($context, $indent, $value);
        $value = $context->find('description1');
        $buffer .= $this->sectionC3c1f587f4bf50745f154d50104733a8($context, $indent, $value);
        $value = $context->find('description2');
        $buffer .= $this->section0fd97124b977a8a817de0e857087d046($context, $indent, $value);
        $value = $context->find('filename');
        $buffer .= $this->sectionD18078ef3691e5a7dbd8624c89a838cd($context, $indent, $value);
        $value = $context->find('multiplefiles');
        $buffer .= $this->section6534992ddde257a066783b3f5a6be78e($context, $indent, $value);
        $buffer .= $indent . '    <div class="result-context-info">
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->find('contexturl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section72b41fde46a507da164ba4ffbcd58f5c($context, $indent, $value);
        $buffer .= '</a> -
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->find('courseurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section3059f2495e1134ecc3e42f20e8f526c8($context, $indent, $value);
        $buffer .= '</a>
';
        $value = $context->find('userfullname');
        $buffer .= $this->section850ee5c94ddfaff559317a2663178b39($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionBe9bc86f74bfdde41657f2bc48d8c163(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img class="icon" alt="" src="{{{icon}}}">';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<img class="icon" alt="" src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ba5c06ec76715bd1f019a91b9cca05a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="result-content">{{{content}}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="result-content">';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3c1f587f4bf50745f154d50104733a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="result-content">{{{description1}}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="result-content">';
                $value = $this->resolveValue($context->find('description1'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fd97124b977a8a817de0e857087d046(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="result-content">{{{description2}}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="result-content">';
                $value = $this->resolveValue($context->find('description2'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21a43731469c3940c39781cd2bc48eb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'matchingfile, search, {{{filename}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'matchingfile, search, ';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD18078ef3691e5a7dbd8624c89a838cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="result-content-filename">
            {{#str}}matchingfile, search, {{{filename}}}{{/str}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="result-content-filename">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section21a43731469c3940c39781cd2bc48eb6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50e4dd6e3afa97fac8361728ac14d024(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'matchingfiles, search';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'matchingfiles, search';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBba930249804d744516a4d03d2f165ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li><span class="filename">{{.}}</span></li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li><span class="filename">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6534992ddde257a066783b3f5a6be78e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="result-content-filenames">
            {{#str}}matchingfiles, search{{/str}}<br>
            <ul class="list">
            {{#filenames}}
                <li><span class="filename">{{.}}</span></li>
            {{/filenames}}
            </ul>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="result-content-filenames">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section50e4dd6e3afa97fac8361728ac14d024($context, $indent, $value);
                $buffer .= '<br>
';
                $buffer .= $indent . '            <ul class="list">
';
                $value = $context->find('filenames');
                $buffer .= $this->sectionBba930249804d744516a4d03d2f165ab($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72b41fde46a507da164ba4ffbcd58f5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewresultincontext, search';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewresultincontext, search';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3059f2495e1134ecc3e42f20e8f526c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'incourse, search, {{{coursefullname}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'incourse, search, ';
                $value = $this->resolveValue($context->find('coursefullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0fe60783c819ddd6f2e36228c69b6c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'byname, moodle, {{{userfullname}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'byname, moodle, ';
                $value = $this->resolveValue($context->find('userfullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section850ee5c94ddfaff559317a2663178b39(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            - <a href="{{{userurl}}}">{{#str}}byname, moodle, {{{userfullname}}}{{/str}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            - <a href="';
                $value = $this->resolveValue($context->find('userurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionF0fe60783c819ddd6f2e36228c69b6c8($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
