<?php

namespace App\Controllers;

use App\Models\FileDetails;

class OtController extends BaseController
{

    public function __construct() {
        $this->file_details = new FileDetails();
    }

    public function index() {
        return view('admin/ot/manage');
    }

    public function view_load () {
        return view('admin/ot/load');
    }

    public function upload_pdf () {
        if ($this->request->isAJAX()) {
            $pdf = [];
            $file = $this->request->getFile('file');
            if (isset($_FILES['file']['name'])) {
                $file = $this->request->getFile('file');
                if (!$file->hasMoved()) {
                    $internal_path = 'public/uploads/pdf/';
                    $path = ROOTPATH . $internal_path; 
                    $name_file = $file->getRandomName();
                    $move = $file->move($path, $name_file);
                    if ($move) {
                        $pdf = array_merge(
                            $_FILES['file'], 
                            ['path' => $internal_path . $name_file]);
                    } 
                }

                $save = $this->file_details->insert($pdf);
                die(json_encode([
                    'success' => $save,
                    'message' => 'PDF guardado con éxito' 
                ]));
            } else {
                die(json_encode([
                    'success' => false,
                    'message' => 'Cargue un archivo PDF' 
                ]));
            }
        }
    }

    public function get_file_details () {
        if ($this->request->isAJAX()) {
            die(json_encode([ 'data' => $this->file_details->findAll()]));
        }
    }
}