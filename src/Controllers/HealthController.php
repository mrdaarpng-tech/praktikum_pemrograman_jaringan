<?php
namespace Src\Controllers;

class HealthController extends BaseController {

    public function show() {
        $this->ok([
            'status' => 'ok',
            'time' => date('c')
        ]);
    }

    public function contract() {
        // Path absolut ke file contract
        $file = __DIR__ . '/../../public/api_contract.php';

        if (file_exists($file)) {
            
            header('Content-Type: text/html; charset=utf-8');
            include $file;
            exit;
        } else {
            
            $this->error('File tidak ditemukan: ' . $file, 404);
        }
    }
}