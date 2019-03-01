<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/frontpage.php');

//if there is a category in the url set the variable to it if not set it null
$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category) {
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Jobs In '. $job->getCategory($category)->name;
} else {
    $template->title = 'Jobs. Not Leads.';
    $template->jobs = $job->getAllJobs();
}


$template->categories = $job->getCategories();

echo $template;

