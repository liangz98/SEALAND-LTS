<?php
/**
 * Created by PhpStorm.
 * User: LiangZ
 * Date: 2017/11/8
 * Time: 12:00
 */

namespace App\Handlers;

use Image;

class FileUploadHandler
{
    // 只允许以下后缀名的图片文件上传
    protected $allowed_ext = ["xls", "xlsx", "xlsm", "doc", "docx"];
    
    public function save($file, $folder, $file_prefix = false) {
        // 构建存储的文件夹规则，值如：uploads/images/avatars/201709/21/
        // 文件夹切割能让查找效率更高。
        $folder_name = "uploads/files/$folder/" . date("Ym", time()) . '/'.date("d", time()).'/';
        
        // 文件具体存储的物理路径，`public_path()` 获取的是 `public` 文件夹的物理路径。
        // 值如：/home/vagrant/Code/larabbs/public/uploads/images/avatars/201709/21/
        $upload_path = public_path() . '/' . $folder_name;
        
        // 获取文件的后缀名，此处确保后缀一直存在
        $extension = strtolower($file->getClientOriginalExtension()) ?: 'xls';
        
        // 拼接文件名，加前缀是为了增加辨析度，前缀可以是相关数据模型的 ID
        // 值如：1_1493521050_7BVc9v9ujP.png
        $filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $extension;
        
        // 如果上传的不是office文档将终止操作
        if ( ! in_array($extension, $this->allowed_ext)) {
            return false;
        }
        
        // 将文件移动到我们的目标存储路径中
        $file->move($upload_path, $filename);
    
        return [
            'path' => config('app.url') . "/$folder_name/$filename"
        ];
    }
    
    public function reduseSize($file_path, $max_width) {
        // 先实例化，传参是文件的磁盘物理路径
        $image = Image::make($file_path);
        
        // 进行大小调整的操作
        $image->resize($max_width, null, function ($constraint) {
            
            // 设定宽度是 $max_width，高度等比例双方缩放
            $constraint->aspectRatio();
            
            // 防止裁图时图片尺寸变大
            $constraint->upsize();
        });
        
        // 对图片修改后进行保存
        $image->save();
    }
}