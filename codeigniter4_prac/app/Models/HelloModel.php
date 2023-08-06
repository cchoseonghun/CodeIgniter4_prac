<?php

namespace App\Models;

use CodeIgniter\Model;

class HelloModel extends Model
{
    protected $table = 'codeigniter4'; // 데이터베이스 테이블 이름

    protected $allowedFields = ['name']; // 허용된 필드

    // 다른 모델 메소드나 로직을 추가할 수 있습니다.
}
