<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/tables.css">
    <title>Transactions</title>
</head>
<body>
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BANK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customers.php">Transfer Money</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transactions.php">Transaction History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="https://internship.thesparksfoundation.info/" >About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><br>
  <br>
  <br>
  <br>
   
  <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>

        <br>
        <div class="table-responsive-sm">
            <table class="table table table-dark table-striped tble">
                <thead >
                    <tr>
                        <th class="text-center">S.No.</th>
                        <th class="text-center">Sender</th>
                        <th class="text-center">Receiver</th>
                        <th class="text-center">Amount</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

                    <tr>
                        <td class="text-center"><?php echo $rows['sno']; ?></td>
                        <td class="text-center"><?php echo $rows['sender']; ?></td>
                        <td class="text-center"><?php echo $rows['receiver']; ?></td>
                        <td class="text-center"><?php echo $rows['balance']; ?> </td>
                        

                        <?php
            }

        ?>
                </tbody>
            </table>

        </div>
    </div>

  
</body>
</html>