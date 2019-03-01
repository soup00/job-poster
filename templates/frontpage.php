<?php include 'inc/header.php'?>

<body>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Find a Job.</h1>
  <p class="lead">Here you can find a listing of the availible jobs</p>
  <form method="GET" action="index.php">
        <select name="category" class="custom-select form-control">
            <option value="0">Choose a Category</option>
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
            <?php endforeach; ?>
        </select>
    <input type="submit" class="mt-3 mb-5 btn btn-outline-primary" value="FIND">
  </form>
</div>

<div class="container">
<h3><?php echo $title; ?></h3>
  <?php foreach($jobs as $job): ?>
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo $job->job_title; ?></h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?php echo $job->salary; ?></h1>
        <div class="mt-3 mb-4">
          <p><?php echo $job->description; ?> 
           </p>
        </div>
        <a class="btn btn-lg btn-block btn-outline-primary" href="job.php?id=<?php echo $job->id; ?>">View</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>


<?php include 'inc/footer.php'?>