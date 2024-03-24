  <?php
  require 'config.php';
if (isset($_POST['submit3'])) {
    $lessorname = $_POST['lessorname'];
    $lessoradd = $_POST['lessoradd'];
    $lessorno = $_POST['lessorno'];
    $lessoremail = $_POST['lessoremail'];
    $montlyrent = $_POST['montlyrent'];

    if (!empty($_POST['line_business'])) {
      foreach ($_POST['line_business'] as $line_business ) {

        $query = "INSERT INTO forms3_tb VALUES('','$lessorname','$lessoradd','$lessorno','$lessoremail','$montlyrent','$line_business')";
          mysqli_query($conn,$query);
      echo"<script> alert('Successfully submitted'); </script>"; 

        }
      }
    }
  ?>