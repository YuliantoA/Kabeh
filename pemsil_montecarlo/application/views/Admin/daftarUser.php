<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div>
    <table style="table width: 400px; margin: 30px auto; border-collapse: collapse; text-align: left;border: 1px solid black; border-radius: 5px;box-shadow: 0px 10px 20px 0px #D1D1D1;">
        <thead>
            <tr style=" border-bottom: 1px solid #cbcbcb;">
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">Name</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">E-mail</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">Address</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">Phone Number</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">Username</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">Status</th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($user as $user): ?>
          <tr style="   border-bottom: 1px solid #cbcbcb;">
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                    <?php echo $user->name;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                  <?php echo $user->email;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                  <?php echo $user->address;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                  <?php echo $user->nope;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                  <?php echo $user->username;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                  <?php echo $user->Stat;?>
              </td>
          </tr>
        <?php endforeach;?>
    </tbody>
    </table>
    </div>
</body>
</html>
