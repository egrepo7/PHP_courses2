<?php

?>

<html>
<head>
	<title>Courses</title>
</head>
<body>
	<h1>Add Course</h1>
	<form action="/Courses/create" method="post">
		<p>Name:<input type="text" name='name'></p>
		<p>Course:<textarea name='description'  cols="30" rows="3"></textarea>
		<input type="submit" value="Add">

	</form>
	<h1>Check out these courses</h1>
	<table>
		<thead>
			<th>Name</th>
			<th>Description</th>
			<th>Created At</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php for($i = 0; $i < count($courses); $i++) { ?>
			<tr>
				<td><?php echo $courses[$i]['name'] ?></td>
				<td><?php echo $courses[$i]['description'] ?></td>
				<td><?php echo $courses[$i]['created_at'] ?></td>
				<td><a href='<?= "/courses/removeCourseBy/{$courses[$i]['id']}" ?>'>Remove</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>