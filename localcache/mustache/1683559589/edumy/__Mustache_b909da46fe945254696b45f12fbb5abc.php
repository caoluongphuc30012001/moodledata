<?php

class __Mustache_b909da46fe945254696b45f12fbb5abc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="block_xp_rules_page_loading_error" style="display: none">
';
        $buffer .= $indent . '    <div style="background: #fff0b5; color: black; padding: 2rem; margin: 1rem 0; font-size: 18px;">
';
        $buffer .= $indent . '        <div style="text-align: left; margin-bottom: 2rem;">
';
        $buffer .= $indent . '            <div style="font-size: 32px">😧 Uh oh!</div>
';
        $buffer .= $indent . '            <p>... Something terrible seems to have happened!</p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <p style="margin-bottom: 1rem;">It appears that this page did not load properly. Generally we would do our best to handle problems like these, but we have been defeated 😐!<p>
';
        $buffer .= $indent . '        <p style="margin-bottom: 1rem;">Don\'t worry though, we\'ll sort it out together 👌. And not to brag 😎, but chances are it\'s not even <em>Level Up XP</em>\'s fault.</p>
';
        $buffer .= $indent . '        <p style="margin-bottom: 0;">Alright trooper, we have left some instructions for you, or your team, to look at and defeat this bug 🐞! Follow this link to start your adventure: <a href="https://docs.levelup.plus/xp/docs/troubleshooting/rules-page-broken?ref=blockxp_rules" target="_blank">https://docs.levelup.plus/xp/docs/troubleshooting/rules-page-broken</a>.</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <script>
';
        $buffer .= $indent . '        (function() {
';
        $buffer .= $indent . '            setTimeout(function() {
';
        $buffer .= $indent . '                try {
';
        $buffer .= $indent . '                    var elsuccess = document.getElementById(\'block_xp_rules_page_loading_success\');
';
        $buffer .= $indent . '                    var elerror = document.getElementById(\'block_xp_rules_page_loading_error\');
';
        $buffer .= $indent . '                    if (elsuccess || !elerror) {
';
        $buffer .= $indent . '                        return;
';
        $buffer .= $indent . '                    };
';
        $buffer .= $indent . '                    elerror.style = \'\';
';
        $buffer .= $indent . '                } catch (err) {
';
        $buffer .= $indent . '                    console.log(err);
';
        $buffer .= $indent . '                }
';
        $buffer .= $indent . '            }, 1000)
';
        $buffer .= $indent . '        })();
';
        $buffer .= $indent . '    </script>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
