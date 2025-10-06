<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: StudentsModel
 * 
 * Automatically generated via CLI.
 */
class UserModel extends Model {
<<<<<<< HEAD

    /**
     * Table associated with the model.
     * @var string
     */
    protected $table = 'students';

    /**
     * Primary key of the table.
     * @var string
     */

    protected $allowed_fields = ['first_name', 'last_name', 'email', 'Role'];
    protected $validation_rules = [
        'first_name' => 'required|min_length[2]|max_length[100]',
        'last_name' => 'max_length[100]',
        'email' => 'required|valid_email|max_length[150]',
         'Role'       => 'max_length[50]'
    ];

=======
    protected $table = 'students';
>>>>>>> f72712ed06d5ddc949ff389dcb9a453e2a1a5c0b
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }

<<<<<<< HEAD
    public function page($q = '', $records_per_page = null, $page = null)
    {
        if (is_null($page)) {
            // return all without pagination
            return [
                'total_rows' => $this->db->table($this->table)->count_all(),
                'records'    => $this->db->table($this->table)->get_all()
            ];
        } else {
            $query = $this->db->table($this->table);

            if (!empty($q)) {
                $query->like('first_name', '%'.$q.'%')
                      ->or_like('last_name', '%'.$q.'%')
                      ->or_like('email', '%'.$q.'%')
                      ->or_like('Role', '%'.$q.'%');
            }

            // count total rows
            $countQuery = clone $query;
            $data['total_rows'] = $countQuery->select_count('*', 'count')->get()['count'];

            // fetch paginated records
            $data['records'] = $query->pagination($records_per_page, $page)->get_all();

            return $data;
        }
        
    }

     public function get_all()
    {
        return $this->db->table('students')->get_all();
    }
}
=======
    public function page($q, $records_per_page = null, $page = null) {
        if (is_null($page)) {
            return $this->db->table($this->table)->get_all();
        } else {
            $query = $this->db->table($this->table);

            // Build LIKE conditions for search
            $query->like('id', '%'.$q.'%')
                  ->or_like('first_name', '%'.$q.'%')
                  ->or_like('last_name', '%'.$q.'%')
                  ->or_like('email', '%'.$q.'%')
                   ->or_like('role', '%'.$q.'%');

            // Clone before pagination for counting
            $countQuery = clone $query;

            $data['total_rows'] = $countQuery->select_count('*', 'count')
                                             ->get()['count'];

            $data['records'] = $query->pagination($records_per_page, $page)
                                     ->get_all();

            return $data;
        }
    }
}  
>>>>>>> f72712ed06d5ddc949ff389dcb9a453e2a1a5c0b
