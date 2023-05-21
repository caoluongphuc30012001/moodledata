<?php

class __Mustache_ce3a0f64c3c4051f185bf30723e1b029 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('header_1');
        $buffer .= $this->sectionFae2b5f155ca812409c2a87570df7c14($context, $indent, $value);
        $value = $context->find('header_2');
        $buffer .= $this->section23640e6dffc73e461057cdb634cc8e5d($context, $indent, $value);
        $value = $context->find('header_3');
        $buffer .= $this->sectionB51fb244026b6fbbcb6dd507562c384f($context, $indent, $value);
        $value = $context->find('header_4');
        $buffer .= $this->sectionEd9a35f490b24af934a6330b88d71e11($context, $indent, $value);
        $value = $context->find('header_5');
        $buffer .= $this->sectionE1b0c34153b7a086650edea54581954a($context, $indent, $value);
        $value = $context->find('header_6');
        $buffer .= $this->section42f20fec1323148cffaee1957e3ee227($context, $indent, $value);
        $value = $context->find('header_7');
        $buffer .= $this->section6d034fc441cd18a44e846bb93b1520e9($context, $indent, $value);
        $value = $context->find('header_8');
        $buffer .= $this->section5feb0c4e85540ff8b7eb6975d86cfb0e($context, $indent, $value);
        $value = $context->find('header_9');
        $buffer .= $this->section87c56b6228d9cb029d0f1c30037cd65f($context, $indent, $value);
        $value = $context->find('header_10');
        $buffer .= $this->section2d1bb5993cfa3d237b7c5b25daff2e03($context, $indent, $value);
        $value = $context->find('header_11');
        $buffer .= $this->sectionFf18b736992406611f83c6bbfb2a4347($context, $indent, $value);
        $value = $context->find('header_12');
        $buffer .= $this->sectionE4dc12d53b9233500747f15eaedfb44d($context, $indent, $value);
        $value = $context->find('header_13');
        $buffer .= $this->section735a2bb939ce5b60322e4179b4bb9a89($context, $indent, $value);
        $value = $context->find('header_14');
        $buffer .= $this->sectionA1c0b6c10b99cc63f8f0c35b24715070($context, $indent, $value);
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_modals')) {
            $buffer .= $partial->renderInternal($context);
        }
        if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_breadcrumb')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function sectionFae2b5f155ca812409c2a87570df7c14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_1 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_1 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23640e6dffc73e461057cdb634cc8e5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_2 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_2 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB51fb244026b6fbbcb6dd507562c384f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_3 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_3 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd9a35f490b24af934a6330b88d71e11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_4 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_4 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1b0c34153b7a086650edea54581954a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_5 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_5 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_5')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_5')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42f20fec1323148cffaee1957e3ee227(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_6 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_6 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_6')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_6')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d034fc441cd18a44e846bb93b1520e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_7 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_7 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_7')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_7')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5feb0c4e85540ff8b7eb6975d86cfb0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_8 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_8 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_8')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_8')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87c56b6228d9cb029d0f1c30037cd65f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_9 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_9 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_9')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_9')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d1bb5993cfa3d237b7c5b25daff2e03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_10 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_10 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_10')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_10')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf18b736992406611f83c6bbfb2a4347(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_11 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_11 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_11')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_11')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4dc12d53b9233500747f15eaedfb44d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_12 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_12 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_12')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_12')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section735a2bb939ce5b60322e4179b4bb9a89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_13 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_13 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_13')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_13')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1c0b6c10b99cc63f8f0c35b24715070(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  {{> theme_edumy/ccn_mdl_400/ccn_header_14 }}
  {{> theme_edumy/ccn_mdl_400/ccn_header_mob_14 }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_14')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                if ($partial = $this->mustache->loadPartial('theme_edumy/ccn_mdl_400/ccn_header_mob_14')) {
                    $buffer .= $partial->renderInternal($context, $indent . '  ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
