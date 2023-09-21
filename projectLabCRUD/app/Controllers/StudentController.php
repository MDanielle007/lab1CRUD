<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;
use App\Models\SectionModel;

class StudentController extends BaseController
{   
    private $students;
    private $sections;
    private $genders = ['Male','Female','Rather not say'];

    function __construct(){
        $this->students = new StudentModel();
        $this->sections = new SectionModel();
    }

    public function index()
    {
        //
        $data = [
            'students' => $this->students->findAll(),
            'sections' => $this->sections->findAll(),
            'genders' => $this->genders
        ];

        return View('index', $data);
    }

    public function studentPage(){
        //
        $data = [
            'students' => $this->students->findAll(),
            'sections' => $this->sections->findAll(),
            'genders' => $this->genders
        ];

        return View('index', $data);
    }

    public function save(){
        $id = $this->request->getVar('id');

        $data = [
            'StudID' => $this->request->getVar('studentID'),
            'StudName' => $this->request->getVar('studentName'),
            'StudGender' => $this->request->getVar('studentGender'),
            'StudCourse' => $this->request->getVar('studentCourse'),
            'StudSection' => $this->request->getVar('studentSection'),
            'StudYear' => $this->request->getVar('studentYear')
        ];

        if($id !== null) {
            // Update an existing record
            $this->students->set($data)->where('id', $id)->update();
        } else {
            // Insert a new record
            $this->students->insert($data);
        }
    
        return redirect()->to('/studentPage');
    }

    public function editStudent($id = null){
        $data = [
            'students' => $this->students->findAll(),
            'sections' => $this->sections->findAll(),
            'genders' => $this->genders,
            'studentToEdit' => $this->students->where('id', $id)->first()
        ];

        return View('index', $data);
    }

    public function deleteStudent($id = null){
        $this->students->delete($id);
        return redirect()->to('/studentPage');
    }
}
