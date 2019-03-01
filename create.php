<?php include_once 'config/init.php'; ?>
<?php
$job = new Job;

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
    if($job->create($data)){
        //helper file with redirection
        redirect('index.php','Your job has posted', 'success');
    } else {
        redirect('index.php','Something Went Wrong', 'error');
    }
}

$template = new Template('templates/job-create.php');

//variables
$template->categories = $job->getCategories();

echo $template;

