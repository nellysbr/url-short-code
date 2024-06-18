<?php

namespace App\Models;

use CodeIgniter\Model;

class UrlModel extends Model {
    protected $table = 'urls';
    protected $primaryKey = 'id';
    protected $allowedFields = ['short_key', 'original_url', 'created_at'];

    // Optionally, you can define the validation rules, if any.
    protected $validationRules = [
        'original_url' => 'required|valid_url',
    ];
}
