<?php 
include("includes/init.php"); 
$index_title = "active";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="styles/styles.css" rel="stylesheet" type="text/css">
  <title>Grace Tan</title>
</head>

<body>
<header>
  <?php include("includes/header.php"); ?>       
</header>

<h3>About Myself</h3>

<img class = "bromo_pic" src="images/GunungBoromo.jpg" alt="Mt. Bromo in Indonesia">

  <p class="about">
  Every time I come back to my home country, I watch behind the car window and see children walk in their bare feet begging in the dusty Indonesian roads, reminding me of the poor and how fortunate I am to live in America.  My parents tell me how money should not be squandered, but used wisely to help the needy.  Though I did not have an income at seven years old, I followed in my parents’ footsteps that summer when I went back to Indonesia, bringing Cookie Monster along with a few other stuffed animals I cherished.  My parents and I went to an orphanage where I gave the children my stuffed animals.  For many of them, this was the first time they had a toy of their own.
</p>
  <p class="about">
  Instead of feeling sorrowful for not being able to play with Cookie Monster anymore, I felt elated knowing that these orphans can play with stuffed animals like other children.  Since then, I’ve raised funds through Thirty Hour Famine and Girl Up Club to contribute to the fight against hunger and inequality in developing countries.  In the future, I’m interested in providing internet access to remote villages so children can learn in lack of a teacher and the sick can receive medical help in lack of a doctor.  I hope to merge my altruism with my interests in engineering to continue to use the resources I have, including education, time, and money, to give the impoverished more opportunities.  
  </p>

<!-- Contact Me -->
<?php
// Default to form
$show_form = TRUE;

// Default to no feedback
$show_first_name_feedback = FALSE;
$show_last_name_feedback = FALSE;
$show_email_feedback = FALSE;
$show_message_feedback = FALSE;

// Form default values
$input_first_name = '';
$input_last_name = '';
$input_email = '';
$input_message = '';

// Confirmation Variable
$show_summary = FALSE;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $show_summary = TRUE;

  $input_first_name = filter_input(INPUT_POST,"first_name", FILTER_SANITIZE_STRING);
  $input_last_name = filter_input(INPUT_POST,"last_name", FILTER_SANITIZE_STRING);
  $input_email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
  $input_message = filter_input(INPUT_POST,"message", FILTER_SANITIZE_STRING);

  if(empty($input_first_name)){
    $show_first_name_feedback = TRUE;
    $show_summary = FALSE;
  }
  if(empty($input_last_name)){
    $show_last_name_feedback = TRUE;
    $show_summary = FALSE;
  }
  if(empty($input_email)){
    $show_email_feedback = TRUE;
    $show_summary = FALSE;
  }
  if(empty($input_message)){
    $show_message_feedback = TRUE;
    $show_summary = FALSE;
  }
}

if ($show_summary) { ?>

  <h5> Thank you for suggesting a business idea, <?php echo htmlspecialchars($input_first_name) . " " . htmlspecialchars($input_last_name); ?>!</h5>
  <p class = "summary">
    <?php
    echo ("Your submitted business idea: " . htmlspecialchars($input_message));
    ?> </p>
   <p class = "summary">I will contact you back with the following email address: <?php echo htmlspecialchars($input_email); ?> </p>

<?php } else { ?>
  <h3>Suggest me a business idea!</h3>

<form id="contact_form" method="post" action="index.php" novalidate>

<p class="feedback <?php echo ($show_first_name_feedback) ? '' : 'hidden'; ?>">Please provide a first name.</p>
  <div class="grp_label_input">
    <label>First Name:</label>
    <input type="text" name="first_name" value="<?php echo htmlspecialchars($input_first_name); ?>"/>
  </div>

<p class="feedback <?php echo ($show_last_name_feedback) ? '' : 'hidden'; ?>">Please provide a last name.</p>
  <div class="grp_label_input">
    <label>Last Name:</label>
    <input type="text" name="last_name" value="<?php echo htmlspecialchars($input_last_name); ?>"/>
  </div>

<p class="feedback <?php echo ($show_email_feedback) ? '' : 'hidden'; ?>">Please provide an email.</p>
  <div class="grp_label_input">
    <label>Email Address:</label>
    <input type="text" name="email" value="<?php echo htmlspecialchars($input_email); ?>"/>
  </div>

<p class="feedback <?php echo ($show_message_feedback) ? '' : 'hidden'; ?>">Please provide a business idea.</p>
  <div class="grp_label_input">
    <label>Business Idea:</label>
    <input type="text" name="message" value="<?php echo htmlspecialchars($input_message); ?>"/>
  </div>

  <div class="grp_label_input">
    <span>
    </span>
    <input type="submit" value="Submit Message" />
  </div>
</form>

<?php } ?>
<?php include("includes/footer.php"); ?>  
</body>

</html>