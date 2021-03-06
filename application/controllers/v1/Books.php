<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller{

    public function get_book($book_id){
        $this->load->database();
        $this->load->model('books_model');
        $data['response'] = $this->books_model->getBook($book_id);

        $this->load->view('api/api_view', $data);
    } 

    public function list_books(){
        $this->load->database();
        $this->load->model('books_model');
        $data['response'] = $this->books_model->listBooks();

        $this->load->view('api/api_view', $data);
    }

    public function list_returnbooks(){
        $this->load->database();
        $this->load->model('books_model');
        $data['response'] = $this->books_model->listReturnBooks();

        $this->load->view('api/api_view', $data);
    }

    public function update_book($book_id){
        $this->load->database();
        $this->load->model('books_model');

        $book = json_decode($this->input->raw_input_stream);

        //     var_dump($book);

        if(!is_numeric($book_id) || $book != NULL) {
            $data['response'] = $this->books_model->updateBook($book_id, $book);

            $this->load->view('api/api_view', $data);
        } else {
            $this->load->view("api/api_view", array(
                "response" => "bare problems")
                             );
        }
    }

    public function create_book(){
        $this->load->database();
        $this->load->model('books_model');
        $book = json_decode($this->input->raw_input_stream);

        $data['response'] = $this->books_model->addBook($book);

        $this->load->view('api/api_view', $data);
    }

    public function delete_book($book_id){
        $this->load->database();
        $this->load->model('books_model');
        $data['response'] = $this->books_model->deleteBook($book_id);

        $this->load->view('api/api_view', $data);
    } 

    public function search_book_by(){
        $this->load->database();
        $this->load->model('books_model');
        $book = json_decode($this->input->raw_input_stream);

        $data['response'] = $this->books_model->searchBook($book);

        $this->load->view('api/api_view', $data);
    }

    public function borrow_book(){
        $this->load->database();
        $this->load->model('books_model');

        //     $this->load->model('users_model');
        //     $session_hash = json_decode($this->input->raw_input_stream);
        //     $user_info = $this->users_model->getValuesFromSessionHash($session_hash);

        $book = json_decode($this->input->raw_input_stream);
        $data['response'] = $this->books_model->borrowBook($book);

        $this->load->view('api/api_view', $data);
    }

    public function return_book(){
        $this->load->database();
        $this->load->model('books_model');
        $book = json_decode($this->input->raw_input_stream);
        $data['response'] = $this->books_model->returnBook($book);

        $this->load->view('api/api_view', $data);
    }
}
?>