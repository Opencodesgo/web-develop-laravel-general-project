<?php
/**
 * App, Http, 控制器, Demo03
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\APP;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Demo03Controller extends BaseController {
	
	public function index() {
		//echo 'demo03 index';
		//$db = new \Illuminate\Support\Facades\Db();
		//dd($db::connection());
		
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		//var_dump($spreadsheet);

		$sheet->setCellValue('A1', 'Hello');
		$sheet->setCellValue('B1', 'World!');
		
		$writer = new Xlsx($spreadsheet);
        ob_start();
        $writer->save('php://output');
        $content = ob_get_clean(); // 获取缓冲区内容并清空

        return response($content, 200, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment; filename="report.xlsx"',
            'Cache-Control' => 'max-age=0',
        ]);
		exit;
		
	}
    
}
