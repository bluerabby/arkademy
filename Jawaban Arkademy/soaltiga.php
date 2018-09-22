<!DOCTYPE html>
<?php
  error_reporting(0);
  if(isset($_POST["jumlah"])){
  $jumlah="jumlah";

  $jumlah=$_POST[uang] - $_POST[total];

  $Pecahan1=$jumlah/50000;
  $Sisa1=$jumlah%50000;

  $Pecahan2=$Sisa1/20000;
  $Sisa2=$Sisa1%20000;

  $Pecahan3=$Sisa2/10000;
  $Sisa3=$Sisa2%10000;

  $Pecahan4=$Sisa3/5000;
  $Sisa4=$Sisa3%5000;

  $Pecahan5=$Sisa4/2000;
  $Sisa5=$Sisa4%2000;

  $Pecahan6=$Sisa5/1000;
  $Sisa6=$Sisa5%1000;

  $Pecahan7=$Sisa6/500;
  $Sisa7=$Sisa6%500;

  echo 'Jumlah kembalian:Rp.'.number_format($jumlah),'<br/>';
  echo '<br/>';
  echo 'Anda akan menerima uang dengan ketentuan berikut,<br/>';
  echo '<br/>';
  echo 'Pecahan Rp.50000 = '.(int) $Pecahan1.' Lembar';
  echo '<br/>';
  echo 'Pecahan Rp.20000 = '.(int) $Pecahan2.' Lembar';
  echo '<br/>';
  echo 'Pecahan Rp.10000 = '.(int) $Pecahan3.' Lembar';
  echo '<br/>';
  echo 'Pecahan Rp.5000 = '.(int) $Pecahan4.' Lembar';
  echo '<br/>';
  echo 'Pecahan Rp.2000 = '.(int) $Pecahan5.' Lembar';
  echo '<br/>';
  echo 'Pecahan Rp.1000 = '.(int) $Pecahan6.' Lembar';
  echo '<br/>';
  echo 'Pecahan Rp.500 = '.(int) $Pecahan7.' Koin';
  echo '<br/>';
  }
?>
<html>
  <head>
  </head>
  <body>
    <form action="" method="POST">
    <input type="text" name="total" placeholder="total pembelian anda" pattern="[0-9]{3,}"><br/>
    <input type="text" name="uang" placeholder="uang pembayaran anda"><br/>
    <input type="submit" name="jumlah" value="Tekan tombol untuk mengetahui kembalian anda"> <br>
    </form>
  </body>
</html>
