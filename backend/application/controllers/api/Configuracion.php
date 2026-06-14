<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_Controller.php';

class Configuracion extends MY_Controller
{
    protected $allowed_roles = array('admin');

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Configuracion_model');
    }

    public function index()
    {
        $this->response(array(
            'success' => true,
            'data' => $this->Configuracion_model->get_all()
        ));
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->response(array('success' => false, 'message' => 'Método no permitido'), 405);
        }
        
        $input = $this->get_json_input();
        
        if (empty($input)) {
            $this->response(array('success' => false, 'message' => 'Datos requeridos'), 400);
        }
        
        $this->Configuracion_model->update_multiple($input);
        
        $this->response(array(
            'success' => true,
            'message' => 'Configuración actualizada'
        ));
    }

    /**
     * POST /api/configuracion/logo
     * Sube el logo de la empresa
     */
    public function upload_logo()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->response(array('success' => false, 'message' => 'Método no permitido'), 405);
        }
        
        $config['upload_path'] = FCPATH . 'uploads/logo/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|webp|svg';
        $config['max_size'] = 2048; // 2MB
        $config['encrypt_name'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0755, TRUE);
        }
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('logo')) {
            $this->response(array('success' => false, 'message' => $this->upload->display_errors('', '')), 400);
        }
        
        $upload_data = $this->upload->data();
        $logo_path = 'uploads/logo/' . $upload_data['file_name'];
        
        // Guardar en la base de datos
        $this->Configuracion_model->set('logo_empresa', $logo_path, 'string');
        
        $this->response(array(
            'success' => true,
            'message' => 'Logo subido exitosamente',
            'data' => array('logo_empresa' => $logo_path)
        ));
    }
}

