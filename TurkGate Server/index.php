<?php 
session_start();


// Get TurkGate's database configuration
$installed = @include('turkGateConfig.php');

// If the form was submitted, test survey access
if (isset($_POST['submit'])) {
    $workerID = urlencode($_POST['workerID']);
    $groupName = urlencode($_POST['groupName']);
	$surveyURL = urlencode($_POST['surveyURL']);
	$source = urlencode($_POST['source']);

    header("Location: surveyAccess.php?assignmentId=test&workerId=$workerID&group=$groupName&survey=$surveyURL&source=$source");
	exit();
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>TurkGate</title>
  </head>
  <body>
  	<h1>TurkGate</h1>
  	<h2>Installation</h2>
  	<?php
  	    if ($installed) {
  	        echo '<p>TurkGate has already been installed!</p>';
  	    } else {
  	        echo '<p>TurkGate is not yet installed. Go ' 
  	            . '<a href="install.php">here</a> to install it.</p>';
  	    }
    ?>
    <br>
    <h2>Testing</h2>
    <?php
        if (!$installed) {
        	echo '<h3>***** Testing is unlikely to work without installing ' 
        	    . 'TurkGate first. *****</h3>';
        }
	?>
    <p>To test the installation, enter a workerId and group name below and click Test.</p>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <table>
        <tr>
          <td> Worker Id: </td>
          <td>
          <input type="text" name="workerID" value="1">
          </td>
        </tr>
        <tr>
          <td> Group: </td>
          <td>
          <input type="text" name="groupName" value="test group">
          </td>
        </tr>
        <tr>
          <td> Survey URL: </td>
          <td>
            <input type="text" name="surveyURL" value="test">
          </td>
          <td><i>The default sends you to a TurkGate test page.</i></td>
        </tr>
      </table>
      <p>
      	You can also specify what kind of HIT you want to test. This changes 
      	whether TurkGate displays a link to the survey or redirects to it.
      </p>
      <p>
        <input type="radio" name="source" value="ext" checked>External HIT</input>
      </p>
      <p>
      	<input type="radio" name="source" value="js">Javascript</input>
      </p>
      <p>
      	<input type="submit" name="submit" value="Test">
      </p>
    </form>

    <h5>
      &copy; 2012 
      <a href='https://github.com/gideongoldin/TurkGate'>TurkGate</a>
    </h5>
  </body>
</html>
