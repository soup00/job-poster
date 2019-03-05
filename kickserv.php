<?php 
$chh = curl_init();
curl_setopt($chh, CURLOPT_URL, "https://kickservapp.com/prestigeconstruction/jobs.xml?page=12&state=uncompleted%20in_progress&include=job_charges%20job_status");
curl_setopt($chh, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($chh, CURLOPT_USERPWD, "01fa11c1f2f6442b681f00d13ee024a91d663452:01fa11c1f2f6442b681f00d13ee024a91d663452");
curl_setopt($chh, CURLOPT_RETURNTRANSFER, true);
curl_setopt($chh, CURLINFO_HEADER_OUT, true);
curl_setopt($chh, CURLOPT_ENCODING, "");

$headers = [

    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
 
];

curl_setopt($chh, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($chh);
curl_close($chh);

$xmldata = simplexml_load_string($response);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://kickservapp.com/prestigeconstruction/jobs.xml?page=11&state=uncompleted%20in_progress&include=job_charges%20job_status");
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "01fa11c1f2f6442b681f00d13ee024a91d663452:01fa11c1f2f6442b681f00d13ee024a91d663452");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_ENCODING, "");

$headerss = [

    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
 
];

curl_setopt($ch, CURLOPT_HTTPHEADER, $headerss);

$response2 = curl_exec($ch);
curl_close($ch);

$xmldata2 = simplexml_load_string($response2);

// //newconnect
// $urls = array(
//   'https://kickservapp.com/prestigeconstruction/jobs.xml?page=11&state=uncompleted%20in_progress&include=job_charges%20job_status',
//   'https://kickservapp.com/prestigeconstruction/jobs.xml?page=12&state=uncompleted%20in_progress&include=job_charges%20job_status',

// );

// foreach ($urls as $url) {
//   $chh = curl_init();
//   curl_setopt($chh, CURLOPT_URL, $url);
//   curl_setopt($chh, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//   curl_setopt($chh, CURLOPT_USERPWD, "01fa11c1f2f6442b681f00d13ee024a91d663452:01fa11c1f2f6442b681f00d13ee024a91d663452");
//   curl_setopt($chh, CURLOPT_RETURNTRANSFER, true);
//   curl_setopt($chh, CURLINFO_HEADER_OUT, true);
//   curl_setopt($chh, CURLOPT_ENCODING, "");
//   $headers = [

//     'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
  
//   ];
  
//   curl_setopt($chh, CURLOPT_HTTPHEADER, $headers);
  
//   $response = curl_exec($chh);
//   curl_close($chh);

//   $xmldata = simplexml_load_string($response);


// }


// foreach($xmldata->job as $job) {
    
//         echo "<h1>".$job->name."</h1>";
//         echo "<p>".$job->description."</p>";
    

//         foreach($job->{'job-charges'}->{'job-charge'} as $jc) {
//             echo "<h3>".$jc->description."</h3>";
//             echo "<p>".$jc->details."</p>";
//         }
// }
php?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <style>body {
        padding: 2em;
      }

.filterDiv {

  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

    </style>
    <body>
      
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Find a Job.</h1>
    <p class="lead">Here you can find a listing of the availible jobs</p>
    <div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('Framing')"> Framing</button>
  <button class="btn" onclick="filterSelection('Plumbing')"> Plumbing</button>
  <button class="btn" onclick="filterSelection('Landscaping')"> Landscaping</button>
  <button class="btn" onclick="filterSelection('Demo')"> Demo</button>
  <button class="btn" onclick="filterSelection('Interior')"> Interior Paint</button>
  <button class="btn" onclick="filterSelection('Exterior')"> Exterior Paint</button>
</div>
</div>

  <ul class="collapsible popout">
  <?php foreach($xmldata2->job as $job): ?>
      <?php foreach($job->{'job-charges'}->{'job-charge'} as $jc): ?>
        <li style="margin-bottom: 10px;">
          <div class="collapsible-header filterDiv <?php echo $jc->description; ?> ">
          <?php echo "<p>".$job->{'created-at'}."</p>"; ?>
          <?php echo "<p>".$job->description."</p>"; ?>
            <?php echo "<h3>".$jc->description."</h3>"; ?>
          </div>
          <div class="collapsible-body">
          <? echo "<p>".$jc->details."</p>"; ?>
          <a class="waves-effect waves-light btn-large" href="tel:1-720-327-3321">CALL NOW</a>
          </div>
        </li>
        <?php endforeach; ?>
    <?php endforeach; ?>


    <?php foreach($xmldata->job as $job): ?>
      <?php foreach($job->{'job-charges'}->{'job-charge'} as $jc): ?>
        <li style="margin-bottom: 10px;">
          <div class="collapsible-header filterDiv <?php echo $jc->description; ?> ">
          <?php echo "<p>".$job->{'created-at'}."</p>"; ?>
          <?php echo "<p>".$job->description."</p>"; ?>
            <?php echo "<h3>".$jc->description."</h3>"; ?>
          </div>
          <div class="collapsible-body">
          <? echo "<p>".$jc->details."</p>"; ?>
          <a class="waves-effect waves-light btn-large" href="tel:1-720-327-3321">CALL NOW</a>
          </div>
        </li>
        <?php endforeach; ?>
    <?php endforeach; ?>
  </ul>



<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  //if all is selected do nothing
  if (c == "all") c = "";
  //iterates through all "filterDiv"
  for (i = 0; i < x.length; i++) {
///not sure
    RemoveClass(x[i], "show");
    //if 'filterDiv' has whatever 'c' is then add class show to all 'filterDiv'
    //filterDiv[i].className(returns value of class name).indexOf(i.e plumbing, framing etc)
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

// Show filtered elements
(filterDiv, show)
function AddClass(element, name) {
  var i, arr1, arr2;
  //turns 'filterDiv' into an array
  arr1 = element.className.split(" ");
  //turns 'show' into an array
  arr2 = name.split(" ");
  //iterates over all the elements with show??
  for (i = 0; i < arr2.length; i++) {
    //check to see if 'filterDiv' has 'show' (== -1 means if not present) 
    if (arr1.indexOf(arr2[i]) == -1) {
      //so if not present then add 'show' to the 'filterDiv'
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function RemoveClass(element, name) {
  var i, arr1, arr2;
  //converts element filterDiv into array
  arr1 = element.className.split(" ");
  //converts name('show') into array
  arr2 = name.split(" ");
  //since every class has "show in it, this iterates over all the ("show")s aka all the divs?
  for (i = 0; i < arr2.length; i++) {
    //checks to see if an element is present? > -1 if one exsists
    while (arr1.indexOf(arr2[i]) > -1) {
      //if the element exsists then splice element(remove class 'show') and 
      //it determines what to splice from(indexOf(arr2(show)[i],1) (item, start)??????
      //it find all the framing divs with 'show' and then show is removed
      //e.x framing.splice(framing.indexOf(show[1]), 1)...some how it goes from framing, to framing and show
      arr1.splice(arr1.indexOf(arr2[i]), 1); 
    }
  }
  //turns element from array back to string
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script> M.AutoInit();</script>
     
    </body>
  </html>
