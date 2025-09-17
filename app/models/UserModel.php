<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserModel extends Model {
    protected $table = 'students';
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Pagination + Search
     */
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

            // ✅ Search in lastname, firstname, email, role
            if (!empty($q)) {
                $query->like('lastname', '%'.$q.'%')
                      ->or_like('firstname', '%'.$q.'%')
                      ->or_like('email', '%'.$q.'%')
                      ->or_like('role', '%'.$q.'%');
            }

            // ✅ Count total rows
            $countQuery = clone $query;
            $data['total_rows'] = $countQuery->select_count('*', 'count')->get()['count'];

            // ✅ Fetch paginated records
            $data['records'] = $query->pagination($records_per_page, $page)->get_all();

            return $data;
        }
    }
}
