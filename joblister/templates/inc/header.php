<!DOCTYPE html>
<html>
<head>
	<title>Job Lister</title>
	<link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

 <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="index.php">Home</a></li>
            <li role="presentation"><a href="create.php">Add Job</a></li>
            
          </ul>
        </nav>
        <h3 class="text-muted"> <?php echo SITE_TITLE; ?> </h3>
      </div>

      <? php displayMessage();
      ?>


