<?php 

class Course extends CI_Model {
	//Summary:
	//PURPOSE: Grabbing all courses from the table
	// $query = SQL Query that grabs all courses

	public function getCourses()
	{
		$query = "SELECT * FROM Courses";
		return $this->db->query($query)->result_array();

	}

	//SUMMARY
	//function taht removes a course
	//takes in $id as a parameter of the id of the course to be removed
	//$query is the SQL query that we run with the database
	public function removeCourseBy($id)
	{
		$query = "DELETE FROM Courses WHERE id = ?";
		$values = [$id];
		return $this->db->query($query, $values);

	}
	public function addCourse($post)
	{
		$query = "INSERT INTO Courses (name, description, created_at) VALUES (?, ?, NOW())";''
		$values = [$post['name'], $post['description']];
		return $this->db->query($query, $values);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */