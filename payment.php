<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Payment</title>
  <style>
  body {
    background: #f8f8f8;
  }
  </style>
</head>

<body>

  <div class="d-flex" id="page">

    <?php
    include './php/sidebar.php'
  ?>

    <!-- Page Content -->
    <div id="content" class="container-fluid">

      <?php
      include './php/navbar.php'
    ?>

      <div class="mx-4 py-3 d-flex align-items-center justify-content-between">

        <h3>Payment Details</h3>

        <div>
          <img src="./images/sort.svg" class="px-2" alt="sort" />
        </div>
      </div>
      <div class="tables">
        <hr />

          <?php

  $persons = [
    array(
      'name' => 'karthi',
      'payment_schedule' => 'First',
      'bill_number' => '00012223',
      'amount_paid' => 'DHS100,000',
      'balance_amount' => 'DHS500,000',
      'date' => '05-Jan, 2022'
    ),
    array(
      'name' => 'karthi',
      'payment_schedule' => 'First',
      'bill_number' => '00012223',
      'amount_paid' => 'DHS100,000',
      'balance_amount' => 'DHS500,000',
      'date' => '05-Jan, 2022'
    ),
    array(
      'name' => 'karthi',
      'payment_schedule' => 'First',
      'bill_number' => '00012223',
      'amount_paid' => 'DHS100,000',
      'balance_amount' => 'DHS500,000',
      'date' => '05-Jan, 2022'
    ),
    array(
      'name' => 'karthi',
      'payment_schedule' => 'First',
      'bill_number' => '00012223',
      'amount_paid' => 'DHS100,000',
      'balance_amount' => 'DHS500,000',
      'date' => '05-Jan, 2022'
    )
  ];
  ?>
        <table class="table table-responsive table-borderless">
          <thead class="text-secondary fw-lighter">
            <tr>
              <th></th>
              <th>Name</th>
              <th style="white-space: nowrap !important;">Payment Schedule</th>
              <th style="white-space: nowrap !important;">Bill Number</th>
              <th style="white-space: nowrap !important;">Amount Paid</th>
              <th style="white-space: nowrap !important;">Balance amount</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($persons as $person) { ?>
            <tr class="my-table1 mx-4">
              <th></th>
              <th class="py-3 fw-normal"><?php echo $person['name']; ?></th>
              <td class="p-3"><?php echo $person['payment_schedule']; ?></td>
              <td class="py-3"><?php echo $person['bill_number']; ?></td>
              <td class="py-3" style="white-space: nowrap !important;"><?php echo $person['amount_paid']; ?></td>
              <td class="py-3" style="white-space: nowrap !important;"><?php echo $person['balance_amount']; ?></td>
              <td class="py-3" style="white-space: nowrap !important;"><?php echo $person['date']; ?></td>
              <td class="py-3"><img src="./images/eye.svg" alt="eye" /></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="./js/bootstrap.js"></script>

  <script>
  var el = document.getElementById("page");
  var toggleButton = document.getElementById("menu-toggle");
  toggleButton.onclick = function() {
    el.classList.toggle("toggled");
  };
  </script>

</body>
</html>