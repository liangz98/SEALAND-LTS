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
        $name = $this->formatName($this->column);
        $token = csrf_token();
        $this->script = <<<EOT

var editor = new Simditor({
    textarea: $('textarea[name=$name]'),
    upload: {
        url: 'http://localhost:8000/upload_image',
        params: { _token: '$token' },
        fileKey: 'upload_file',
        connectionCount: 3,
        leaveConfirm: '文件上传中，关闭此页面将取消上传。'
    },
    pasteImage: true,
});

EOT;
        return parent::render();
    }
}