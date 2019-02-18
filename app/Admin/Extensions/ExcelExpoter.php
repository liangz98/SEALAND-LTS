<?php
/**
 * Created by LiangZ.
 * Date: 2018/9/5 11:05
 */

namespace App\Admin\Extensions;

use Encore\Admin\Grid\Exporters\AbstractExporter;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExpoter extends AbstractExporter {
    
    protected $sheetName = '';
    protected $head = [];
    protected $body = [];
    
    public function setAttr($sheetName, $head, $body) {
        $this->sheetName = $sheetName;
        $this->head = $head;
        $this->body = $body;
    }
    
    public function export() {
        Excel::create($this->sheetName, function ($excel) {
            
            $excel->sheet($this->sheetName, function ($sheet) {
                
                // 这段逻辑是从表格数据中取出需要导出的字段
                // $rows = collect($this->getData())->map(function ($item) {
                //     return array_only($item, ['id',
                //         'title',
                //         'content',
                //         'rate',
                //         'keywords']);
                // });
                // $sheet->rows($rows);
    
                // 这段逻辑是从表格数据中取出需要导出的字段
                $head = $this->head;
                $body = $this->body;
                $bodyRows = collect($this->getData())->map(function ($item) use ($body) {
                    foreach ($body as $keyName) {
                        $arr[] = array_get($item, $keyName);
                    }
                    return $arr;
                });
                $rows = collect([$head])->merge($bodyRows);
                $sheet->rows($rows);
            });
            
        })->export('xls');
    }
}