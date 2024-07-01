<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersPermissionModel extends Model
{
    protected $table            = 'auth_groups_users';
    protected $allowedFields    = ['user_id', 'group', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getListUsers($params = [])
    {
        $builder = $this->table($this->table);
        $builder = $builder->select('auth_groups_users.group, auth_groups_users.id, users.username, users.status');
        $builder = $builder->join('users', 'auth_groups_users.user_id = users.id');

        if (!empty($params['search'])) {
            if (!empty($params['columns'])) {
                foreach ($params['columns'] as $column) {
                    if ($column['searchable'] == "true") {
                        $builder = $builder->orLike($column['data'], $params['search']);
                    }
                }
            }
        }

        if ((isset($params['start']) && $params['start'] > 0) or (isset($params['length']) && $params['length'] > 0)) {
            $builder = $builder->limit((int) $params['length'], (int) $params['start']);
        }

        if (isset($params['order']) && $params['order'][0]['column'] != 0) {
            foreach ($params['order'] as $order) {
                if ($params['columns'][$order['column']]['orderable'] == "true") {
                    $builder = $builder->orderBy($params['columns'][$order['column']]['data'], $order['dir']);
                }
            }
        }

        return $builder->get()->getResult();
    }
}
