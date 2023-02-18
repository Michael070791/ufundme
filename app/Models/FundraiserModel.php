<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class FundraiserModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'fundraise';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = true;
	protected $protectFields        = true;
	protected $allowedFields        = [
		"uid",
        "user_id",
        "organisation",
        "cause",
		'title',
		"email",
        "country",
		"active",
        "city",
        "address_one",
		"address_two",
		"phone_number",
        "image",
		"created_at",
		"verified",
		"target_amount",
		"amount_raise",
		"updated_at"
	];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];



	
}