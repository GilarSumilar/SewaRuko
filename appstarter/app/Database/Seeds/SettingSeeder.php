<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $validationBannedUserPermission = [
            'reason' => [
                'label' => 'Reason',
                'rules' => [
                    'required',
                    'max_length[254]',
                    'min_length[3]'
                ],
            ],
        ];
        setting()->set('Validation.bannedUserPermission', $validationBannedUserPermission);
    }
}
