<?php 

class Courses extends CI_Controller {
	//Summary:
	//PURPOSE: DISPLAY ALL COURSE INFO
	// create a model
	// load the model
	//query for the courses
	// pass through the data 
	
	public function index()
	{
		// this loads the mod<el
		$this->load->model('Course');
		// this runs the query for our model Courses2 by running the function getCourses
		$allCourses = $this->Course->getCourses();
		//pass into index view as courses. I can now access $allCourses as courses
		//on my index
		$this->load->view('index.php', ['courses' => $allCourses]);
	}

	// Summary
	// This removes Course data by $id where $id is the course id to be removed
	// load model
	// pass data through model
	// remove course
	public function removeCourseBy($id)
	{	
		//this loads the model
		$this->load->model('course');
		//this runs the removeByCourse query from the model
		$success = $this->course->removeCourseBy($id);
		redirect('/');
	}

	//SUMMARY
	//Add a course base on form submitted
	public function create()
	{
		//this laods the model
		$this->load->model('course');
		//this runs the addCourse query from the model
		$success = $this->course->addCourse($_POST);
		redirect('/');
	

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */