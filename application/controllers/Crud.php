<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Crud extends REST_Controller {

    public function mahasiswa_get()
    {
        $query = $this->db->get('mahasiswa')->result();
        if ($query){
            $this->response(['status' => 'success',
                            'message' => $query]);
        }else{
          $this->response(['status' => 'error',
                          'message' => 'data not found']);
        }

    }

    public function any_mahasiswa_get()
    {
        $params = $this->uri->segment(3);
        $query = $this->db->get_where('mahasiswa', ['id' => $params])->row();

        if ($query){
            $this->response(['status'=>'succes',
                          'message'=> $query]);
        }else{
            $this->response(['status' => 'error',
                          'message' => 'data not found']);
        }
    }

    public function add_mahasiswa_post()
    {
        $data = [
          'nama'=> $this->post('nama'),
          'alamat' => $this->post('alamat'),
          'semester' => $this->post('semester')
        ];

        $query = $this->db->insert('mahasiswa', $data);
        if ($query) {
          $this->response(['status'=>'insert succes',
                        'message'=> $query]);
        }else{
          $this->response(['status' => 'error',
                        'message' => 'data not found']);
        }
    }

    public function edit_mahasiswa_post()
    {
        $id = $this->uri->segment(3);
        $data = [
          'nama'=> $this->post('nama'),
          'alamat' => $this->post('alamat'),
          'semester' => $this->post('semester')
        ];

        $this->db->where('id', $id);
        $query = $this->db->update('mahasiswa', $data);
        if ($query) {
          $this->response(['status'=>'update succes',
                        'message'=> $query]);
        }else{
          $this->response(['status' => 'error',
                        'message' => 'data not found']);
        }
    }


    public function delete_mahasiswa_post()
    {
        $id = $this->uri->segment(3);

        $this->db->where('id', $id);
        $query=$this->db->delete('mahasiswa');
        if ($query) {
          $this->response(['status'=>'delete succes',
                        'message'=> $query]);
        }else{
          $this->response(['status' => 'error',
                        'message' => 'data not found']);
        }
    }
}
