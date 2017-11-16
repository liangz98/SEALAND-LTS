<?php
/**
 * Created by LiangZ.
 * Date: 2017/11/16 15:08
 */

namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class Simditor extends Field {
    protected $view = 'admin.simditor';
    
    protected static $css = [
        '/css/simditor.css',
    ];
    
    protected static $js = [
        '/js/module.js',
        '/js/hotkeys.js',
        '/js/uploader.js',
        '/js/simditor.js',
    ];
    
    public function render() {
        $nouse = '11';
        $name = $this->formatName($this->column);
        
        $this->script = <<<EOT

var editor = new Simditor({
    textarea: $('textarea[name=$name]'),
});

EOT;
        return parent::render();
    }
}