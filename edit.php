<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

//if there is a category in the url set the variable to it if not set it null
//*want to get id from the url instead of category
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

//post data to server
if(isset($_POST['submit'])){
    //create data array
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    //if statement to make sure it actually works
    if($job->update($job_id, $data)){
        //helper file with redirection
        redirect('index.php','Your job has updated', 'success');
    } else {
        redirect('index.php','Something Went Wrong', 'error');
    }
}

$template = new Template('templates/job-edit.php');

//variables
$template->categories = $job->getCategories();
$template->job = $job->getJob($job_id);

echo $template;

