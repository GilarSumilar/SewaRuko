<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\UsersModel;
use App\Models\UsersPermissionModel;
// use CodeIgniter\Shield\Entities\User;
use CodeIgniter\HTTP\ResponseInterface;

class UsersPermissionController extends BaseController
{
    protected $usersPermissionModel;
    protected $validation;
    // protected $usersAuthModel;
    // protected $usersModel;

    public function __construct()
    {
        $this->usersPermissionModel = new UsersPermissionModel();
        $this->validation = service('validation');
        // $this->usersAuthModel = auth()->getProvider();
        // $this->usersModel = new UsersModel();
    }

    public function index()
    {
        // $data = [];
        // $data['users'] = $this->usersModel->getListUsers();
        // dd(setting('Validation.bannedUserPermission'));

        return view('admin/manage_users/permission/index');
    }

    public function getListUserPermissions()
    {
        $post = (object) $this->request->getPost();

        $param = [];
        $param['draw'] = $post->draw != NULL ? $post->draw : '';
        $param['start'] = $post->start != NULL ? $post->start : '';
        $param['length'] = $post->length != NULL ? $post->length : '';
        $param['search'] = $post->search['value'] != NULL ? $post->search['value'] : '';
        $param['columns'] = $post->columns;
        $param['order'] = $post->order;

        $data = $this->usersPermissionModel->getListUsers($param);

        $arr = [];
        $no = $param['start'] + 1;
        foreach ($data as $d) {
            $d = (array) $d;
            $d['no'] = $no++;

            $actions = [];
            $actions[] = '<button id="buttonEdit" class="btn btn-link btn-primary btn-lg" data-bs-target="#editModal" data-bs-toggle="modal" data-id=' . $d['id'] . '><i class="fa fa-edit"></i></button>';
            $actions[] = '<button id="buttonBanned" class="btn btn-link btn-danger" data-bs-target="#bannedModal" data-bs-toggle="modal" data-id=' . $d['id'] . '><i class="fas fa-user-slash"></i></button>';
            $actions[] = '<button id="buttonUnban" class="btn btn-link btn-warning" data-bs-target="#unbanModal" data-bs-toggle="modal" data-id=' . $d['id'] . '><i class="fas fa-eraser"></i></button>';

            $d['actions'] = '<td><div class="form-button-action">' . implode('', $actions) . '</div></td>';

            $arr[] = $d;
        }

        $total_count_all = count($this->usersPermissionModel->getListUsers($param['search']));

        $res = [
            'draw' => intval($param['draw']),
            'recordsTotal' => $total_count_all,
            'recordsFiltered' => $total_count_all,
            'data' => $arr
        ];

        return $this->response->setJSON($res);
    }

    public function editUserPermission()
    {
        $post = $this->request->getPost();

        $this->usersPermissionModel->save($post);

        return redirect()->back();
    }

    public function BannedUserPermission()
    {
        $reason = $this->request->getPost('reason');
        $id = $this->request->getPost('id');
        $data = $this->request->getPost();
        // dd($data);
        $this->validation->setRules(setting('Validation.bannedUserPermission'));
        $isValidate = $this->validation->run($data);
        // dd($isValidate);
        if ($isValidate) {
            $validateData = $this->validation->getValidated();

            // dd($validateData);
            $users = auth()->getProvider();
            $user = $users->findById($id);
            $user->ban('Reason Banned: ' . esc($validateData['reason']));

            return redirect()->back()->with("success", "[BANNED SUCCESS] {$user->getBanMessage()}");
        }

        $errors = $this->validation->getErrors();

        return redirect()->back()->with("errors", $errors);
    }

    public function UnbannedUserPermission()
    {
        $id = $this->request->getPost('id');

        $users = auth()->getProvider();
        $user = $users->findById($id);
        $user->unBan();

        return redirect()->back();
    }
}
