<?php
namespace App\Controllers;

use App\Models\EmployeeModel;
use CodeIgniter\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        $model = new EmployeeModel();
        $data['employees'] = $model->findAll();
        return view('employee', $data);
    }

    public function create()
    {
        return view('employee_create');
    }

    public function store()
    {
        $model = new EmployeeModel();

        $data = [
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'position' => $this->request->getPost('position'),
        ];

        $model->save($data);
        return redirect()->to('/employees');
    }

    public function edit($id)
    {
        $model = new EmployeeModel();
        $data['employee'] = $model->find($id);
        return view('employee_edit', $data);
    }

    public function update($id)
    {
        $model = new EmployeeModel();

        $data = [
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'position' => $this->request->getPost('position'),
        ];

        $model->update($id, $data);
        return redirect()->to('/employees');
    }

    public function delete($id)
    {
        $model = new EmployeeModel();
        $model->delete($id);
        return redirect()->to('/employees');
    }
}
