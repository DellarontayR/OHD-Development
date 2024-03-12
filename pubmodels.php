<?php include('../AgTechModels.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Tags for Social Media -->
  <meta name="author" content="Dellarontay Readus" />
  <meta
  name="description"
  content="An argi-tech company seeking to build scalable farming infrastructures and processes to enable more people to grow more of what they love."/>

  <meta property="og:title" content="Organic Harvest Digital AgTech Model List" />
  <meta property="og:description" content="OHD is an Argi-Tech company seeking to build scalable farming infrastructures and processes to enable more people to grow more of what they love. " />
  <meta property="og:image" content="www.organicharvestdigital.org/Images/IMG-4303-2.jpg" />
  <meta property="og:url" content="www.organicharvestdigital.org"/>
  <meta property="og:type" content="profile" />
  <meta name="twitter:card" content="summary_large_image"/>

  <meta property="profile:first_name" content="Dellarontay" />
  <meta property="profile:last_name" content="Readus" />

  <!-- Page Icon -->
  <link rel="icon" href="Images/Color/1x/Social Media Icon.png" type="image/gif">

    <title>OHD Inc. AgTech Model List</title>
  </head>
<div class="container">

<div class="row">
<?php foreach($models as $model) { ?>
<h6 ><?php echo htmlspecialchars($model["modelName"]);  ?></h6>
<h6 ><?php echo htmlspecialchars($model["summary"]);  ?></h6>
<h6 ><?php echo htmlspecialchars($model["link"]);  ?></h6>
<h6 ><?php echo htmlspecialchars($model["technologyUsed"]);  ?></h6>
<h6 ><?php echo htmlspecialchars($model["licenseType"]);  ?></h6>


<?php }?>
</div>

</div>

</html>