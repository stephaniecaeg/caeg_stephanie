<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

<<<<<<< HEAD
class UserController extends Controller {
    public function __construct()
    {
        parent::__construct();

        //$this->call->model('UserModel');
        $this->call->library('pagination'); 
        $this->call->library('auth'); 

        // ✅ Require login
        if (!$this->auth->is_logged_in()) {
            redirect('auth/login');
        }
    }

 

    public function show()
    {
        $page = 1;
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $page = $this->io->get('page');
        }

        $q = '';
        if (isset($_GET['q']) && !empty($_GET['q'])) {
            $q = trim($this->io->get('q'));
        }

        $records_per_page = 5;

        $all = $this->UserModel->page($q, $records_per_page, $page);
        $data['students'] = $all['records'];
        $total_rows = $all['total_rows'];

        // Pagination setup
=======
/**
 * Controller: StudentsController
 * 
 * Automatically generated via CLI.
 */
class UserController extends Controller {
   public function __construct()
    {
        parent::__construct();
        $this->call->model('UserModel');
        $this->call->library('pagination');

       
    }

    public function index()
    {      
        // Get current page (default 1)
        $page = 1;
        if(isset($_GET['page']) && ! empty($_GET['page'])) {
            $page = $this->io->get('page');
        }

        // Get search query (optional)
        $q = '';
        if(isset($_GET['q']) && ! empty($_GET['q'])) {
            $q = trim($this->io->get('q'));
        }

        $records_per_page = 5; // number of users per page

        // Call model's pagination method
        $all = $this->UserModel->page($q, $records_per_page, $page);
        $data['users'] = $all['records'];
        $total_rows = $all['total_rows'];

        // Configure pagination
>>>>>>> f72712ed06d5ddc949ff389dcb9a453e2a1a5c0b
        $this->pagination->set_options([
            'first_link'     => '⏮ First',
            'last_link'      => 'Last ⏭',
            'next_link'      => 'Next →',
            'prev_link'      => '← Prev',
            'page_delimiter' => '&page='
        ]);
<<<<<<< HEAD

        $this->pagination->set_theme('default');
        $this->pagination->initialize(
            $total_rows,
            $records_per_page,
            $page,
            site_url('/students') . '?q=' . urlencode($q)
        );
        $data['page'] = $this->pagination->paginate();

        $this->call->view('students/show', $data);
    }

    function create(){
        if ($_SESSION['role'] !== 'admin') {
    // redirect regular users to the dashboard
    redirect(site_url('auth/dashboard'));
    exit;
}


        if ($this->io->method() == 'post') {
            $firstname= $this->io->post('first_name');
            $lastname= $this->io->post('last_name');
            $email= $this->io->post('email');
             $role= $this->io->post('role');

            $data = array(
                'first_name' => $firstname,
                'last_name' => $lastname,
                'email' => $email,
                'Role' => $role
            );

            if ($this->UserModel->insert($data)) {
                redirect(site_url('/students'));
            } else {
                echo 'Error creating student.';
            }
        } else {
=======
        $this->pagination->set_theme('tailwind'); // themes: bootstrap, tailwind, custom
        $this->pagination->initialize($total_rows, $records_per_page, $page,'?q='.$q);

        // Send data to view
        $data['page'] = $this->pagination->paginate();
        $this->call->view('Showdata', $data);
    }

    function create(){
        if($this->io->method() == 'post'){
            $first_name = $this->io->post('first_name');
            $last_name = $this->io->post('last_name');
            $email = $this->io->post('email');
             $role = $this->io->post('role');

            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'role' => $role
            ];

            if($this->UserModel->insert($data)){
                redirect(site_url('/'));
            }else{
                echo "Error in creating user.";
            }

        }else{
>>>>>>> f72712ed06d5ddc949ff389dcb9a453e2a1a5c0b
            $this->call->view('Create');
        }
    }

<<<<<<< HEAD
     function update($id){
        if ($_SESSION['role'] !== 'admin') {
    // redirect regular users to the dashboard
    redirect(site_url('auth/dashboard'));
    exit;
}


        $students = $this->UserModel->find($id);
        if(!$students) {
            echo "Student not found.";
            return;
        }

        if ($this->io->method() == 'post') {
            $firstname= $this->io->post('first_name');
            $lastname= $this->io->post('last_name');
            $email= $this->io->post('email');
            $role= $this->io->post('role');
            

            $data = array(
                'first_name' => $firstname,
                'last_name' => $lastname,
                'email' => $email,
                'Role' => $role
            );

            if ($this->UserModel->update($id, $data)) {
                redirect(site_url('/students'));
            } else {
                echo 'Error updating student.';
            }
        } else {
            $data['student'] = $students;
            $this->call->view('Update', $data);
        }
    }
     function delete($id){
        if ($_SESSION['role'] !== 'admin') {
    // redirect regular users to the dashboard
    redirect(site_url('auth/dashboard'));
    exit;
}


        if($this->UserModel->delete($id)){
            redirect(site_url('/students'));
        } else {
            echo 'Error deleting student.';
        }
    }


    /*public function soft_delete($id)
    {
        // ✅ Admin only
        if ($_SESSION['role'] !== 'admin') {
            redirect(site_url('auth/dashboard'));
            exit;
        }

        if ($this->UserModel->soft_delete($id)) {
            redirect('user/show');
        } else {
            echo 'Failed to delete data.';
        }
    }
        */

    public function restore($id)
    {
        // ✅ Admin only
        if ($_SESSION['role'] !== 'admin') {
            redirect(site_url('auth/dashboard'));
            exit;
        }

        if ($this->UserModel->restore($id)) {
            redirect('/students');
        } else {
            echo 'Failed to restore data.';
        }
    }
}
=======
    function update($id){
        $user = $this->UserModel->find($id);
        if(!$user){
            echo "User not found.";
            return;
        }

        if($this->io->method() == 'post'){
           $first_name = $this->io->post('first_name');
            $last_name = $this->io->post('last_name');
            $email = $this->io->post('email');
             $role = $this->io->post('role');

            $data = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'role' => $role
            ];

            if($this->UserModel->update($id, $data)){
                redirect(site_url('/'));
            }else{
                echo "Error in updating user.";
            }
        }else{
            $data['user'] = $user;
            $this->call->view('Update', $data);
        }
    }
    
    function delete($id){
        if($this->UserModel->delete($id)){
            redirect();
        }else{
            echo "Error in deleting user.";
        }
    }
}    
>>>>>>> f72712ed06d5ddc949ff389dcb9a453e2a1a5c0b
