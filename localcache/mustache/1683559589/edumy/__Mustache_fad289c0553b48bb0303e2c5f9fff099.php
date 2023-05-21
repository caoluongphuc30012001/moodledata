<?php

class __Mustache_fad289c0553b48bb0303e2c5f9fff099 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<article id="p';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="forum-post-container mb-2" data-post-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-region="post" data-target="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-target" tabindex="0" aria-labelledby="post-header-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-describedby="post-content-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '  <!-- The firstpost and starter classes below aren\'t used for anything other than to identify the first post in behat -->
';
        $buffer .= $indent . '  <div class="d-flex border p-2 mb-2 forumpost focus-target ';
        $value = $context->find('unread');
        $buffer .= $this->section3ed6c5fc72aa7724e442457028079947($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('firstpost');
        $buffer .= $this->section21f91dd58d78aa33caec1006870d7c95($context, $indent, $value);
        $buffer .= '" aria-label=\'';
        $value = $context->find('str');
        $buffer .= $this->section2d7e7bb37b1c76e06dcc1842169465b6($context, $indent, $value);
        $buffer .= '\'
';
        $buffer .= $indent . '    data-post-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-content="forum-post">
';
        $buffer .= $indent . '    ';
        $value = $context->find('isfirstunread');
        $buffer .= $this->section8385bd492ccda898f38e149a71c97f98($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="d-flex flex-column w-100 ccn-form-post-core" data-region-content="forum-post-core">
';
        $buffer .= $indent . '      <header class="mb-2 row d-flex">
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $value = $context->find('author');
            $buffer .= $this->sectionFa555a50807ed80b8f0a636c86253c9f($context, $indent, $value);
        }
        $buffer .= $indent . '        <div class="d-flex flex-column">
';
        $value = $context->find('parentauthorname');
        $buffer .= $this->section1f04f761f99dc5472d10ab35652dd6c0($context, $indent, $value);
        $buffer .= $indent . '          <h4 ';
        $buffer .= 'class="mb-0" ';
        $buffer .= 'data-region-content="forum-post-core-subject" ';
        $buffer .= 'data-reply-subject="';
        $value = $this->resolveValue($context->find('replysubject'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $buffer .= '>';
        $blockFunction = $context->findInBlock('subject');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('subject'), $context);
            $buffer .= ($value === null ? '' : $value);
        }
        $buffer .= '</h4>
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $buffer .= $indent . '            <small tabindex="-1">
';
            $buffer .= $indent . '              ';
            $value = $context->findDot('html.authorsubheading');
            $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
            $buffer .= '
';
            $value = $context->findDot('html.authorsubheading');
            if (empty($value)) {
                
                $buffer .= $indent . '                <time>
';
                $buffer .= $indent . '                  ';
                $value = $context->find('userdate');
                $buffer .= $this->sectionA250390b54f037d9cfd646f27f499bd4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </time>
';
            }
            $buffer .= $indent . '            </small>
';
        }
        $value = $context->find('isprivatereply');
        $buffer .= $this->section49da7f05bf3eda2ff4a45e388ed7f13b($context, $indent, $value);
        $value = $context->find('hasreplycount');
        $buffer .= $this->sectionD8590651c734b8804a63040ad3db8fb6($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </header>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div class="d-flex body-content-container">
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $value = $context->find('author');
            $buffer .= $this->section4be77684d2043ee264d1c8e96e985a75($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="no-overflow w-100 content-alignment-container">
';
        $buffer .= $indent . '          <div id="post-content-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="post-content-container">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $value = $context->find('haswordcount');
            $buffer .= $this->section2fafef6e3dfc26159a16dedf11a625f9($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('attachments');
            $buffer .= $this->sectionDbac8adf67f126e873754f2d2e2dceda($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->findDot('html.taglist'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '
';
            $value = $context->find('attachments');
            $buffer .= $this->sectionC82463aa6550b757b96658971671b4c0($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <div class="ccn-forum-post-actions">
';
            $buffer .= $indent . '              <div class="ccn-forum-post-actions-footer">
';
            $buffer .= $indent . '                ';
            $blockFunction = $context->findInBlock('footer');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            }
            $buffer .= '
';
            $buffer .= $indent . '              </div>
';
            $buffer .= $indent . '              <div class="d-flex flex-wrap ccn-forum-post-actions-buttons">
';
            $value = $context->findDot('html.rating');
            $buffer .= $this->sectionE4c71884e5891c6edd51a8b2282fcda0($context, $indent, $value);
            $blockFunction = $context->findInBlock('actions');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            } else {
                $value = $context->find('readonly');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                  <div class="post-actions d-flex align-self-end justify-content-end flex-wrap ml-auto" data-region="post-actions-container" role="menubar"
';
                    $buffer .= $indent . '                    aria-label=\'';
                    $value = $context->find('str');
                    $buffer .= $this->section2d7e7bb37b1c76e06dcc1842169465b6($context, $indent, $value);
                    $buffer .= '\' aria-controls="p';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $value = $context->find('capabilities');
                    $buffer .= $this->sectionF73722b172ee205c6702bcf238db7ae0($context, $indent, $value);
                    $buffer .= $indent . '                  </div>
';
                }
            }
            $buffer .= $indent . '              </div>
';
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div data-region="replies-container">
';
        $blockFunction = $context->findInBlock('replies');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '    <div>
';
            $value = $context->find('hasreplies');
            $buffer .= $this->sectionC2d2e38f8fe21b6e49a2012de2fc733c($context, $indent, $value);
            $buffer .= $indent . '    </div>
';
        }
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</article>
';

        return $buffer;
    }

    private function section3ed6c5fc72aa7724e442457028079947(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unread';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'unread';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21f91dd58d78aa33caec1006870d7c95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firstpost starter';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'firstpost starter';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d7e7bb37b1c76e06dcc1842169465b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postbyuser, mod_forum, {"post": "{{subject}}", "user": "{{author.fullname}}"} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' postbyuser, mod_forum, {"post": "';
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", "user": "';
                $value = $this->resolveValue($context->findDot('author.fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"} ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8385bd492ccda898f38e149a71c97f98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a id="unread" aria-hidden="true"></a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a id="unread" aria-hidden="true"></a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3a99ebfecb94beea6e88f9141126424(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{author.fullname}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->findDot('author.fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF794cf2f6b1391ba03377b9a6beea3e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <img class="rounded-circle w-100" src="{{{.}}}" alt="{{#str}} pictureof, core, {{author.fullname}} {{/str}}" aria-hidden="true" title="{{#str}} pictureof, core, {{author.fullname}} {{/str}}">
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <img class="rounded-circle w-100" src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="';
                $value = $context->find('str');
                $buffer .= $this->sectionD3a99ebfecb94beea6e88f9141126424($context, $indent, $value);
                $buffer .= '" aria-hidden="true" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionD3a99ebfecb94beea6e88f9141126424($context, $indent, $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa555a50807ed80b8f0a636c86253c9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="mr-3" style="width: 45px;">
              {{#urls.profileimage}}
                <img class="rounded-circle w-100" src="{{{.}}}" alt="{{#str}} pictureof, core, {{author.fullname}} {{/str}}" aria-hidden="true" title="{{#str}} pictureof, core, {{author.fullname}} {{/str}}">
              {{/urls.profileimage}}
            </div>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="mr-3" style="width: 45px;">
';
                $value = $context->findDot('urls.profileimage');
                $buffer .= $this->sectionF794cf2f6b1391ba03377b9a6beea3e2($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbc21c36d03664580b5227e5ce50ba02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' inreplyto, mod_forum, {{.}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' inreplyto, mod_forum, ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f04f761f99dc5472d10ab35652dd6c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="sr-only">{{#str}} inreplyto, mod_forum, {{.}} {{/str}}</span>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionBbc21c36d03664580b5227e5ce50ba02($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe063bea9e3828a4ceaa260d495c44b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedaydatetime, core_langconfig ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' strftimedaydatetime, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA250390b54f037d9cfd646f27f499bd4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{timecreated}}, {{#str}} strftimedaydatetime, core_langconfig {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('timecreated'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $context->find('str');
                $buffer .= $this->sectionBe063bea9e3828a4ceaa260d495c44b9($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA308eba18ba8e2ab8f95747bd19a5e97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'postisprivatereply, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'postisprivatereply, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49da7f05bf3eda2ff4a45e388ed7f13b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="privatereplyinfo">
              {{#str}}postisprivatereply, forum{{/str}}
            </div>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="privatereplyinfo">
';
                $buffer .= $indent . '              ';
                $value = $context->find('str');
                $buffer .= $this->sectionA308eba18ba8e2ab8f95747bd19a5e97($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97736c50c16d72b49b1eb58fe3695bea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' numberofreplies, mod_forum, {{replycount}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' numberofreplies, mod_forum, ';
                $value = $this->resolveValue($context->find('replycount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8590651c734b8804a63040ad3db8fb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="sr-only">{{#str}} numberofreplies, mod_forum, {{replycount}} {{/str}}</span>
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section97736c50c16d72b49b1eb58fe3695bea($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9676b028b46e3df83a3055c6a32599ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' memberofgroup, group, {{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' memberofgroup, group, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE103d4001a9c5c8aed5c9292425b5842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{name}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB978906129045146cd07bae6b5179462(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{urls.group}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                      <img class="rounded-circle w-100" src="{{{.}}}" alt="{{#str}} pictureof, core, {{name}} {{/str}}" aria-hidden="true" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                    </a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->findDot('urls.group'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="button" aria-label=\'';
                $value = $context->find('str');
                $buffer .= $this->section9676b028b46e3df83a3055c6a32599ed($context, $indent, $value);
                $buffer .= '\'>
';
                $buffer .= $indent . '                      <img class="rounded-circle w-100" src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '" aria-hidden="true" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98812a9d2ad6c47db99fc5831d85d351(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  {{#urls.image}}
                    <a href="{{urls.group}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                      <img class="rounded-circle w-100" src="{{{.}}}" alt="{{#str}} pictureof, core, {{name}} {{/str}}" aria-hidden="true" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                    </a>
                  {{/urls.image}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('urls.image');
                $buffer .= $this->sectionB978906129045146cd07bae6b5179462($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17a1fd736d7b11794728449bf975e4a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <img class="rounded-circle w-100" src="{{{.}}}" alt="{{#str}} pictureof, core, {{name}} {{/str}}" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <img class="rounded-circle w-100" src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04fecca6fc7b445fe0585c7c9fe3f5f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <div class="mr-2 author-groups-container" style="width: 45px; flex-shrink: 0">
                {{#urls.group}}
                  {{#urls.image}}
                    <a href="{{urls.group}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                      <img class="rounded-circle w-100" src="{{{.}}}" alt="{{#str}} pictureof, core, {{name}} {{/str}}" aria-hidden="true" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                    </a>
                  {{/urls.image}}
                {{/urls.group}}
                {{^urls.group}}
                  {{#urls.image}}
                    <img class="rounded-circle w-100" src="{{{.}}}" alt="{{#str}} pictureof, core, {{name}} {{/str}}" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                  {{/urls.image}}
                {{/urls.group}}
              </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              <div class="mr-2 author-groups-container" style="width: 45px; flex-shrink: 0">
';
                $value = $context->findDot('urls.group');
                $buffer .= $this->section98812a9d2ad6c47db99fc5831d85d351($context, $indent, $value);
                $value = $context->findDot('urls.group');
                if (empty($value)) {
                    
                    $value = $context->findDot('urls.image');
                    $buffer .= $this->section17a1fd736d7b11794728449bf975e4a8($context, $indent, $value);
                }
                $buffer .= $indent . '              </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4be77684d2043ee264d1c8e96e985a75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#groups}}
              <div class="mr-2 author-groups-container" style="width: 45px; flex-shrink: 0">
                {{#urls.group}}
                  {{#urls.image}}
                    <a href="{{urls.group}}" role="button" aria-label=\'{{#str}} memberofgroup, group, {{name}}{{/str}}\'>
                      <img class="rounded-circle w-100" src="{{{.}}}" alt="{{#str}} pictureof, core, {{name}} {{/str}}" aria-hidden="true" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                    </a>
                  {{/urls.image}}
                {{/urls.group}}
                {{^urls.group}}
                  {{#urls.image}}
                    <img class="rounded-circle w-100" src="{{{.}}}" alt="{{#str}} pictureof, core, {{name}} {{/str}}" title="{{#str}} pictureof, core, {{name}} {{/str}}">
                  {{/urls.image}}
                {{/urls.group}}
              </div>
            {{/groups}}
          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('groups');
                $buffer .= $this->section04fecca6fc7b445fe0585c7c9fe3f5f6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5bb1649427fd639aeb93fcd9f945e21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' numwords, core, {{wordcount}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' numwords, core, ';
                $value = $this->resolveValue($context->find('wordcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fafef6e3dfc26159a16dedf11a625f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              <p class="font-italic mb-0"><small>{{#str}} numwords, core, {{wordcount}} {{/str}}</small></p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '              <p class="font-italic mb-0"><small>';
                $value = $context->find('str');
                $buffer .= $this->sectionC5bb1649427fd639aeb93fcd9f945e21($context, $indent, $value);
                $buffer .= '</small></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section276cb37c59a636c58d4c95f526f34076(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' attachmentname, mod_forum, {{filename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' attachmentname, mod_forum, ';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63f7f582e0283c9cd8898a1aa8039d60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' addtoportfolio, core_portfolio ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' addtoportfolio, core_portfolio ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC95b897453b8a2454a363ea092e35f3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/portfolioadd, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/portfolioadd, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa87aef5239400a0eeb4294c53fcdc88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                      {{#pix}} t/portfolioadd, core {{/pix}}
                    </a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section63f7f582e0283c9cd8898a1aa8039d60($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                      ';
                $value = $context->find('pix');
                $buffer .= $this->sectionC95b897453b8a2454a363ea092e35f3e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a720c0112c2e869d2e790335e00d142(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>{{{.}}}</div>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96b5ff89a3e2b268c9c8454270eaf816(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="attachedimages">
                  <img src="{{{url}}}" alt="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}" style="max-width: 100%">
                  {{#urls.export}}
                    <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                      {{#pix}} t/portfolioadd, core {{/pix}}
                    </a>
                  {{/urls.export}}
                  {{#html.plagiarism}}
                    <div>{{{.}}}</div>
                  {{/html.plagiarism}}
                </div>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="attachedimages">
';
                $buffer .= $indent . '                  <img src="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="';
                $value = $context->find('str');
                $buffer .= $this->section276cb37c59a636c58d4c95f526f34076($context, $indent, $value);
                $buffer .= '" style="max-width: 100%">
';
                $value = $context->findDot('urls.export');
                $buffer .= $this->sectionDa87aef5239400a0eeb4294c53fcdc88($context, $indent, $value);
                $value = $context->findDot('html.plagiarism');
                $buffer .= $this->section9a720c0112c2e869d2e790335e00d142($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbac8adf67f126e873754f2d2e2dceda(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              {{#isimage}}
                <div class="attachedimages">
                  <img src="{{{url}}}" alt="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}" style="max-width: 100%">
                  {{#urls.export}}
                    <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                      {{#pix}} t/portfolioadd, core {{/pix}}
                    </a>
                  {{/urls.export}}
                  {{#html.plagiarism}}
                    <div>{{{.}}}</div>
                  {{/html.plagiarism}}
                </div>
              {{/isimage}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isimage');
                $buffer .= $this->section96b5ff89a3e2b268c9c8454270eaf816($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96fdf38a3da828f079856309b8856872(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{icon}}, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4582362bca17629710ca07a1cd978e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' exportattachmentname, mod_forum, {{filename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' exportattachmentname, mod_forum, ';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08a7cafbcd836c7aff799034f4b96b49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{{.}}}" title="{{#str}} exportattachmentname, mod_forum, {{filename}} {{/str}}">
                      {{#pix}} t/portfolioadd, core {{/pix}}
                    </a>
                  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionE4582362bca17629710ca07a1cd978e3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                      ';
                $value = $context->find('pix');
                $buffer .= $this->sectionC95b897453b8a2454a363ea092e35f3e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC82463aa6550b757b96658971671b4c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
              {{^isimage}}
                <div>
                  <a href="{{{url}}}" aria-label="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}">
                    {{#pix}} {{icon}}, core {{/pix}} {{filename}}
                  </a>
                  {{#urls.export}}
                    <a href="{{{.}}}" title="{{#str}} exportattachmentname, mod_forum, {{filename}} {{/str}}">
                      {{#pix}} t/portfolioadd, core {{/pix}}
                    </a>
                  {{/urls.export}}
                  {{#html.plagiarism}}
                    <div>{{{.}}}</div>
                  {{/html.plagiarism}}
                </div>
              {{/isimage}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isimage');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <div>
';
                    $buffer .= $indent . '                  <a href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->section276cb37c59a636c58d4c95f526f34076($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('pix');
                    $buffer .= $this->section96fdf38a3da828f079856309b8856872($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('filename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                    $buffer .= $indent . '                  </a>
';
                    $value = $context->findDot('urls.export');
                    $buffer .= $this->section08a7cafbcd836c7aff799034f4b96b49($context, $indent, $value);
                    $value = $context->findDot('html.plagiarism');
                    $buffer .= $this->section9a720c0112c2e869d2e790335e00d142($context, $indent, $value);
                    $buffer .= $indent . '                </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4c71884e5891c6edd51a8b2282fcda0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <div class="mt-2">{{{.}}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <div class="mt-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c38fbb8f8f3e49e4120d021d07feb2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permanentlinktopost, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' permanentlinktopost, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section763a3604c774c34d64897ef31abbb560(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permalink, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' permalink, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA52dce297498967f31bf6486e425f260(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a data-region="post-action" href="{{{urls.view}}}" class="btn btn-link" title="{{#str}} permanentlinktopost, mod_forum {{/str}}" aria-label="{{#str}} permanentlinktopost, mod_forum {{/str}}">
                          {{#str}} permalink, mod_forum {{/str}}
                        </a>
                      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a data-region="post-action" href="';
                $value = $this->resolveValue($context->findDot('urls.view'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-link" title="';
                $value = $context->find('str');
                $buffer .= $this->section7c38fbb8f8f3e49e4120d021d07feb2f($context, $indent, $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section7c38fbb8f8f3e49e4120d021d07feb2f($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                          ';
                $value = $context->find('str');
                $buffer .= $this->section763a3604c774c34d64897ef31abbb560($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb5abb8e3c94408fa1d289b5ef3f447(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markread, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' markread, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9262b15c0bea970581b692832a9e6901(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                          <a data-region="post-action" href="{{{urls.markasread}}}" class="btn btn-link">
                            {{#str}} markread, mod_forum {{/str}}
                          </a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                          <a data-region="post-action" href="';
                $value = $this->resolveValue($context->findDot('urls.markasread'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-link">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionFcb5abb8e3c94408fa1d289b5ef3f447($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                          </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31d13d35264fbc819e59cd4918196342(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markunread, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' markunread, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f6442aa53a3a095be88d58e6e3ac943(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#unread}}
                          <a data-region="post-action" href="{{{urls.markasread}}}" class="btn btn-link">
                            {{#str}} markread, mod_forum {{/str}}
                          </a>
                        {{/unread}}
                        {{^unread}}
                          <a data-region="post-action" href="{{{urls.markasunread}}}" class="btn btn-link">
                            {{#str}} markunread, mod_forum {{/str}}
                          </a>
                        {{/unread}}
                      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('unread');
                $buffer .= $this->section9262b15c0bea970581b692832a9e6901($context, $indent, $value);
                $value = $context->find('unread');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                          <a data-region="post-action" href="';
                    $value = $this->resolveValue($context->findDot('urls.markasunread'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="btn btn-link">
';
                    $buffer .= $indent . '                            ';
                    $value = $context->find('str');
                    $buffer .= $this->section31d13d35264fbc819e59cd4918196342($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                          </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fb7958d41ca7a880e19a003139c431d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permanentlinktoparentpost, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' permanentlinktoparentpost, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf5fdc3805ec5d1701e4bc484d707b5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' parent, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' parent, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9130e3b128100557de757bdc16f163e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a data-region="post-action" href="{{{.}}}" class="btn btn-link" title="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}" aria-label="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}">
                          {{#str}} parent, mod_forum {{/str}}
                        </a>
                      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a data-region="post-action" href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-link" title="';
                $value = $context->find('str');
                $buffer .= $this->section0fb7958d41ca7a880e19a003139c431d($context, $indent, $value);
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section0fb7958d41ca7a880e19a003139c431d($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                          ';
                $value = $context->find('str');
                $buffer .= $this->sectionCf5fdc3805ec5d1701e4bc484d707b5c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD08a060cc097f193c29c5510c81c4ca5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' edit, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' edit, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2920ccce3c9710c0757cf05afbf38ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a data-region="post-action" href="{{{urls.edit}}}" class="btn btn-link">
                          {{#str}} edit, mod_forum {{/str}}
                        </a>
                      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a data-region="post-action" href="';
                $value = $this->resolveValue($context->findDot('urls.edit'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-link">
';
                $buffer .= $indent . '                          ';
                $value = $context->find('str');
                $buffer .= $this->sectionD08a060cc097f193c29c5510c81c4ca5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0066cb1b087bd9f8c261a80ff7434d10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' prune, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' prune, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18c5f82abfb6aff9bab0073f7ef1621b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a data-region="post-action" href="{{{urls.split}}}" class="btn btn-link">
                          {{#str}} prune, mod_forum {{/str}}
                        </a>
                      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a data-region="post-action" href="';
                $value = $this->resolveValue($context->findDot('urls.split'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-link">
';
                $buffer .= $indent . '                          ';
                $value = $context->find('str');
                $buffer .= $this->section0066cb1b087bd9f8c261a80ff7434d10($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC033b8edefb34009ad7ec794e2a13909(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' delete, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' delete, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA85ac974751c1756c51fd8c9d0457af0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a data-region="post-action" href="{{{urls.delete}}}" class="btn btn-link">
                          {{#str}} delete, mod_forum {{/str}}
                        </a>
                      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a data-region="post-action" href="';
                $value = $this->resolveValue($context->findDot('urls.delete'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-link">
';
                $buffer .= $indent . '                          ';
                $value = $context->find('str');
                $buffer .= $this->sectionC033b8edefb34009ad7ec794e2a13909($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe37fdeec206de815fa124c8b1578fdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reply, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reply, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC02021c9e673fcd0d47f111978b31359(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{$replyoutput}}
                        <a data-region="post-action" href="{{{urls.reply}}}" class="btn btn-link" data-post-id="{{id}}" data-action="collapsible-link" data-can-reply-privately="{{canreplyprivately}}" title="{{#str}} reply, mod_forum {{/str}}">
                          {{#str}} reply, mod_forum {{/str}}
                        </a>
                        {{/replyoutput}}
                      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('replyoutput');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                        <a data-region="post-action" href="';
                    $value = $this->resolveValue($context->findDot('urls.reply'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="btn btn-link" data-post-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-action="collapsible-link" data-can-reply-privately="';
                    $value = $this->resolveValue($context->find('canreplyprivately'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                          ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                        </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section384aad1c4028d886594ab0821878b74e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                          {{$replyoutput}}
                          <a href="{{{urls.reply}}}" class="btn btn-link" data-post-id="{{id}}" data-can-reply-privately="{{canreplyprivately}}" title="{{#str}} reply, mod_forum {{/str}}">
                            {{#str}} reply, mod_forum {{/str}}
                          </a>
                          {{/replyoutput}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('replyoutput');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                          <a href="';
                    $value = $this->resolveValue($context->findDot('urls.reply'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '" class="btn btn-link" data-post-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" data-can-reply-privately="';
                    $value = $this->resolveValue($context->find('canreplyprivately'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                            ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                          </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28c3835f4f0a1d01b83ad86c96be0b7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a data-region="post-action" href="{{{urls.export}}}" class="btn btn-link">
                          {{#str}} addtoportfolio, core_portfolio {{/str}}
                        </a>
                      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a data-region="post-action" href="';
                $value = $this->resolveValue($context->findDot('urls.export'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-link">
';
                $buffer .= $indent . '                          ';
                $value = $context->find('str');
                $buffer .= $this->section63f7f582e0283c9cd8898a1aa8039d60($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF73722b172ee205c6702bcf238db7ae0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                      {{#view}}
                        <a data-region="post-action" href="{{{urls.view}}}" class="btn btn-link" title="{{#str}} permanentlinktopost, mod_forum {{/str}}" aria-label="{{#str}} permanentlinktopost, mod_forum {{/str}}">
                          {{#str}} permalink, mod_forum {{/str}}
                        </a>
                      {{/view}}
                      {{#controlreadstatus}}
                        {{#unread}}
                          <a data-region="post-action" href="{{{urls.markasread}}}" class="btn btn-link">
                            {{#str}} markread, mod_forum {{/str}}
                          </a>
                        {{/unread}}
                        {{^unread}}
                          <a data-region="post-action" href="{{{urls.markasunread}}}" class="btn btn-link">
                            {{#str}} markunread, mod_forum {{/str}}
                          </a>
                        {{/unread}}
                      {{/controlreadstatus}}
                      {{#urls.viewparent}}
                        <a data-region="post-action" href="{{{.}}}" class="btn btn-link" title="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}" aria-label="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}">
                          {{#str}} parent, mod_forum {{/str}}
                        </a>
                      {{/urls.viewparent}}
                      {{#edit}}
                        <a data-region="post-action" href="{{{urls.edit}}}" class="btn btn-link">
                          {{#str}} edit, mod_forum {{/str}}
                        </a>
                      {{/edit}}
                      {{#split}}
                        <a data-region="post-action" href="{{{urls.split}}}" class="btn btn-link">
                          {{#str}} prune, mod_forum {{/str}}
                        </a>
                      {{/split}}
                      {{#delete}}
                        <a data-region="post-action" href="{{{urls.delete}}}" class="btn btn-link">
                          {{#str}} delete, mod_forum {{/str}}
                        </a>
                      {{/delete}}
                      {{#reply}}
                        {{$replyoutput}}
                        <a data-region="post-action" href="{{{urls.reply}}}" class="btn btn-link" data-post-id="{{id}}" data-action="collapsible-link" data-can-reply-privately="{{canreplyprivately}}" title="{{#str}} reply, mod_forum {{/str}}">
                          {{#str}} reply, mod_forum {{/str}}
                        </a>
                        {{/replyoutput}}
                      {{/reply}}
                      {{^reply}}
                        {{#selfenrol}}
                          {{$replyoutput}}
                          <a href="{{{urls.reply}}}" class="btn btn-link" data-post-id="{{id}}" data-can-reply-privately="{{canreplyprivately}}" title="{{#str}} reply, mod_forum {{/str}}">
                            {{#str}} reply, mod_forum {{/str}}
                          </a>
                          {{/replyoutput}}
                        {{/selfenrol}}
                      {{/reply}}
                      {{#export}}
                        <a data-region="post-action" href="{{{urls.export}}}" class="btn btn-link">
                          {{#str}} addtoportfolio, core_portfolio {{/str}}
                        </a>
                      {{/export}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('view');
                $buffer .= $this->sectionA52dce297498967f31bf6486e425f260($context, $indent, $value);
                $value = $context->find('controlreadstatus');
                $buffer .= $this->section6f6442aa53a3a095be88d58e6e3ac943($context, $indent, $value);
                $value = $context->findDot('urls.viewparent');
                $buffer .= $this->section9130e3b128100557de757bdc16f163e1($context, $indent, $value);
                $value = $context->find('edit');
                $buffer .= $this->sectionD2920ccce3c9710c0757cf05afbf38ea($context, $indent, $value);
                $value = $context->find('split');
                $buffer .= $this->section18c5f82abfb6aff9bab0073f7ef1621b($context, $indent, $value);
                $value = $context->find('delete');
                $buffer .= $this->sectionA85ac974751c1756c51fd8c9d0457af0($context, $indent, $value);
                $value = $context->find('reply');
                $buffer .= $this->sectionC02021c9e673fcd0d47f111978b31359($context, $indent, $value);
                $value = $context->find('reply');
                if (empty($value)) {
                    
                    $value = $context->find('selfenrol');
                    $buffer .= $this->section384aad1c4028d886594ab0821878b74e($context, $indent, $value);
                }
                $value = $context->find('export');
                $buffer .= $this->section28c3835f4f0a1d01b83ad86c96be0b7c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5069a0eb3c4f1e71271352c51cff5a5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
          {{> mod_forum/forum_discussion_post }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
                    $buffer .= $partial->renderInternal($context, $indent . '          ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2d2e38f8fe21b6e49a2012de2fc733c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#replies}}
          {{> mod_forum/forum_discussion_post }}
        {{/replies}}
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('replies');
                $buffer .= $this->section5069a0eb3c4f1e71271352c51cff5a5e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
