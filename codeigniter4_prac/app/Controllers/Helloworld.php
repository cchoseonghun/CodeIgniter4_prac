<?php

namespace App\Controllers;

use App\Models\HelloModel;

class Helloworld extends BaseController
{
    public function index()
    {
        $name = $this->request->getPost('name');

        // 쿼리를 통한 저장
        // $db = \Config\Database::connect();
        // $query = $db->query('INSERT INTO codeigniter4 (name) VALUES ("' . $name . '")');

        // codeigniter model을 통한 저장
        // $model = new \App\Models\HelloModel();
        $model = new HelloModel();
        $data = [
          'name' => $name
        ];
        $model->insert($data);
    }
}