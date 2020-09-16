<?php

class __Mustache_cbd50640837008cd0f059c8e02c428a8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_view_overview_section')) {
            $context->pushBlockContext(array(
                'region' => array($this, 'block20c51b28057bc9faaeafe6f632069c2d'),
                'title' => array($this, 'block62bba13d832d6d4becc0d54649e4ed1b'),
                'placeholder' => array($this, 'blockF2ca03fecb95f213685459140a6ae494'),
                'emptymessage' => array($this, 'block0f5bfbdd5742dff1fd1fe574bca80694'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section70ba859dcad5c7079590b52af8ec5e2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' groupmessages, core_message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' groupmessages, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2119d1f764f4a635892e7279213db431(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nogroupmessages, core_message ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nogroupmessages, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block20c51b28057bc9faaeafe6f632069c2d($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'view-overview-group-messages';
    
        return $buffer;
    }

    public function block62bba13d832d6d4becc0d54649e4ed1b($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section70ba859dcad5c7079590b52af8ec5e2e($context, $indent, $value);
    
        return $buffer;
    }

    public function blockF2ca03fecb95f213685459140a6ae494($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <div class="text-center py-2">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
    
        return $buffer;
    }

    public function block0f5bfbdd5742dff1fd1fe574bca80694($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <p class="text-muted mt-2">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2119d1f764f4a635892e7279213db431($context, $indent, $value);
        $buffer .= '</p>
';
    
        return $buffer;
    }
}
