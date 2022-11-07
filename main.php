<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FirstTime</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="flex-container">

        <div class="header">
               <?php include 'logo.inc.php' ?>
               <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="Img1.png">'; ?>
                </div>

                <div class="fullname">
                    <p> My name is
                    <?php echo $name, ' ', $surname . '<br>';
		             echo 'from', ' ', $city; ?>
                    </p>
                    <p> I am
                    <?php  echo $age;   ?>
                    years old </p>
                    <p> I've learned: </p>
	        <ul class="iam">
		<li> How to create variables  </li>
                    <li> and perform simple operations to them </li>
		</ul>

                </div>
            </div>
</div>
</div>

             <div class="knowledge">
<p class="text">For instance, here you can check the number of full days between any date and today: <br>
P.S. This piece of code was brazenly borrowed by me, which I honestly admit</p>
<br>
            <form action="action_page.php" method="POST">
  <label for="appt">Select date:</label>
  <input type="date" id="appt" name="appt">
 <input name="submit" type="submit" value="CALCULATE">
  </form>


</div>



 <div>


            <div class="article">
                <p class="text">
                    If you're reading this, it means my code is working, but my brain isn't :D
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>