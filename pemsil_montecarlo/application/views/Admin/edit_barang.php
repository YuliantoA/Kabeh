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
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">No. Id</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">Kategori</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">Brand</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">Model</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">keterangan</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">Harga</th>
                <th style=" border: 1px solid black; height: 30px; padding: 2px;">Gambar</th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($produk as $produk): ?>
          <tr style="   border-bottom: 1px solid #cbcbcb;">
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                    <?php echo $produk->id;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                  <?php echo $produk->kategori;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                  <?php echo $produk->brand;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                  <?php echo $produk->model;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                  <?php echo $produk->keterangan;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                  <?php echo $produk->harga;?>
              </td>
              <td style=" border: 1px solid black; height: 30px; padding: 2px;">
                    <?php echo $produk->gambar;?>
              </td>
          </tr>
        <?php endforeach;?>
    </tbody>
    </table>
    </div>
</body>
</html>
