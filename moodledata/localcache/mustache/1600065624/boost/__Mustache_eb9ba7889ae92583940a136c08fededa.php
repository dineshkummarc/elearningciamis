<?php

class __Mustache_eb9ba7889ae92583940a136c08fededa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav role="navigation">
';
        $buffer .= $indent . '    <ol class="breadcrumb">
';
        // 'get_items' section
        $value = $context->find('get_items');
        $buffer .= $this->sectionC54398e63f649940b1c3ff4cd3226483($context, $indent, $value);
        $buffer .= $indent . '    </ol>
';
        $buffer .= $indent . '</nav>
';

        return $buffer;
    }

    private function section6b0060da9667da720e6932d1b9543c15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' dimmed_text';
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
                
                $buffer .= ' dimmed_text';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD354c672815be9693153e2ed645cc2eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{get_title}}"';
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('get_title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE7e8e14c8337854526d714e3a4d4a9e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <a href="{{{action}}}" {{#get_title}}title="{{get_title}}"{{/get_title}}>{{{get_content}}}</a>
                </li>
            ';
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
                
                $buffer .= $indent . '                <li class="breadcrumb-item';
                // 'is_hidden' section
                $value = $context->find('is_hidden');
                $buffer .= $this->section6b0060da9667da720e6932d1b9543c15($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'get_title' section
                $value = $context->find('get_title');
                $buffer .= $this->sectionD354c672815be9693153e2ed645cc2eb($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('get_content'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC54398e63f649940b1c3ff4cd3226483(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#has_action}}
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}">
                    <a href="{{{action}}}" {{#get_title}}title="{{get_title}}"{{/get_title}}>{{{get_content}}}</a>
                </li>
            {{/has_action}}
            {{^has_action}}
                <li class="breadcrumb-item{{#is_hidden}} dimmed_text{{/is_hidden}}">{{{text}}}</li>
            {{/has_action}}
        ';
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
                
                // 'has_action' section
                $value = $context->find('has_action');
                $buffer .= $this->sectionE7e8e14c8337854526d714e3a4d4a9e8($context, $indent, $value);
                // 'has_action' inverted section
                $value = $context->find('has_action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="breadcrumb-item';
                    // 'is_hidden' section
                    $value = $context->find('is_hidden');
                    $buffer .= $this->section6b0060da9667da720e6932d1b9543c15($context, $indent, $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
