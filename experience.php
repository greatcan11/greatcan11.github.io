<?php 
include("includes/init.php"); 
$experience_title = "active";
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

<div class = "leadership">
  <div>
<h3>Platform Systems Engineering Intern</h3>
  <h4>Collins Aerospace in Cedar Rapids, Iowa</h4>
  <ul class = "description">
      <li>Tested with other subsystem teams in the Systems Integration Lab by scripting in Python and checking bus values</li>
      <li>Corrected tests to ensure readability and robustness through referencing requirements by the customer and DoD</li>
      <li>Used Jira to report problems from testing and track work packages, including updating documentation </li>
  </ul>

  <h3>Maze Navigating Robot </h3>
  <h5>(Intelligent Physical Systems)</h5>
  <h4>Cornell University in Ithaca, New York</h4>
  <ul class = "description">
      <li>Developed a robot that can follow lines on the floor, sense walls, and avoid other robots while transmitting its route on a monitor, which included constructing a DAC, using an Arduino, servos, sensors, and a DE0-Nano FPGA   </li>
      <li>Performed FFT analysis using a microphone, op amp, and various resistors and capacitors</li>
  </ul>

  <h3>Pipelined Processor </h3>
  <h5>(Computer Architecture)</h5>
  <h4>Cornell University in Ithaca, New York</h4>
  <ul class = "description">
      <li>Implemented and evaluated two five-stage pipelined processor microarchitectures with stalling and bypassing</li>
      <li>Verified functionality of the design by writing various test cases for 28 TinyRV2 instructions</li>
  </ul>

  <h3>Virtual Reality Project </h3>
  <h5>(Virtual Imaging)</h5>
  <h4>Cornell University in Ithaca, New York</h4>
  <ul class = "description">
      <li>Created an immersive environment using Unreal Engine where the player uses an Oculus Rift</li>
      <li>Collaborated with two other student engineers and architect when developing the program</li>
  </ul>
</div>

<!-- Picture of robot. -->
<div><img class = "robot" src="images/robot.jpg" alt="Picture of robot."></div>

</div>
<?php include("includes/footer.php"); ?>  
</body>

</html>
