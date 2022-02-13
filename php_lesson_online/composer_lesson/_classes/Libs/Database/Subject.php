<?php 

namespace Libs\Database;

use PDOException;

class Subject
{
    private $db = null;

    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }

    public function getAll()
    {
      $statement = $this->db->query("
              SELECT subjects.*, courses.course_name AS course_name, courses.created_at AS course_created_at
              FROM subjects LEFT JOIN courses
              ON subjects.course_id = courses.id
          ");
  
      return $statement->fetchAll();
    }
    // insert data
    // public function SubjectInsert($data)

}