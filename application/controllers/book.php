<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Vietlt
 * Date: 11/12/13
 * Time: 7:44 PM
 * To change this template use File | Settings | File Templates.
 */
class Book extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        echo "<h3>Hello Worldsssssssssssssssss</h3>";
        $this->load->view('master_view');
    }

    public function about(){
        $data['title'] = 'Giới thiệu trang cá nhân Việt lại';
        $data['des'] = 'Việt tên đầy đủ là Lại Tiến Việt , sỉnh ra và lớn lên tại Phả Lại CHí Linh Hải Dương';
        $data['myval'] = array(
            'author' => 'Lại Tiến Việt',
            'website' => 'vietlt.vn',
            'facebook' => 'facebook/vietlt'
        );
        $this->load->view('master_view',$data);
    }

    public function list_book(){

        $this->load->model('model');
        $data['items'] = $this->model->getAllBook();
        $data['list'] = 'list';
        $this->load->view('master_book', $data);
    }

    public function insert(){
        $this->load->model('model');

        $data['bookName'] = $this->input->post('txtbookName');
        $data['quantity'] = $this->input->post('txtQuantity');
        $insert = $this->model->insert($data);
        if($insert){
            $this->list_book();
        }else{
            echo 'Error';
        }

    }

    public function delete($id){
        $this->load->model('model');
        if($this->model->delete($id))
            $this->list_book();
        else
            echo "Error";
    }

    public function pre_edit($id){
        $this->load->model('model');
        $data['items'] = $this->model->get_by($id);
        $this->load->view('edit',$data);
    }

    public function edit(){
        $data['bookName'] = $this->input->post('txtbookName');
        $data['quantity'] = $this->input->post('txtQuantity');

    }
}