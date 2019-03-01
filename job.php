<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if(isset($_POST['del_id'])){
	$del_id = $_POST['del_id'];
	if($job->delete($del_id)){
		redirect('index.php', 'Job Deleted', 'success');
	} else {
		redirect('index.php', 'Job Not Deleted', 'error');
	}
}

$template = new Template('templates/job-single.php');

//if there is a category in the url set the variable to it if not set it null
//*want to get id from the url instead of category
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

//variables
$template->job = $job->getJob($job_id);

echo $template;


