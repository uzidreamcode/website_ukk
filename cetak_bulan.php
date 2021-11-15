<style type="text/css">
  .container{
  width: 750px;
  margin:auto;
  padding:50px;
}
</style>
<?php
$nis=$_GET['nis'];
?>

<div class="container">   
  <div class="invoice-container" ref="document" id="html">
     <table style="width:100%; height:auto;  text-align:center; " BORDER=0 CELLSPACING=0>
       <thead style="background:#fafafa; padding:8px;">
         <tr style="font-size: 20px;">
          <td> <img height="50" src="images/logo.png"></td>
           <td colspan="4" style="padding:20px 20px;text-align: left;">SMK NEGERI 1 KEPANJEN</td>
         </tr>
       </thead>
       
     </table>
     
     <table style="width:100%; height:auto; background-color:#fff; margin-top:0px;  padding:20px; font-size:12px; border: 1px solid #ebebeb; border-top:0px;">
       <thead>
         <tr style=" color: #6c757d;font-weight: bold; padding: 5px;">
           <td style="text-align: center;">No</td>
           <td style="text-align: center;">Kelas</td>
           <td style="text-align:center;">Bulan</td>
           <td style="text-align: center;padding: 10px;">PRICE</td>
         </tr>
       </thead>
       <tbody>
        <?php 
        include 'koneksi.php';
        $no=1;
        $ambil=$koneksi->query("SELECT * FROM pembayaran WHERE nis='$_GET[nis]'");
        while ($pecah=$ambil->fetch_assoc()) {?>
         <tr>
           <td style="width:20%;margin-left:10px;text-align: center;"><?php echo $no?></td>
           <td style="width:20%;margin-left:10px;text-align: center;"><?php echo $pecah['kelas'] ?></td>
           <td style="width:20%;padding: 10px; text-align:center;"><?php echo $pecah['bulan'] ?></td>
           <td style="width:20%;padding: 10px;text-align: center;">Rp <?php echo $pecah['jumlah'] ?></td>
           <td style="width:20%; ;font-weight: bold;font-size: 14px;">
             
           </td>
         </tr>
         <?php $no++?>
       <?php }?>
       </tbody>
     </table>
     <table style="width:100%; height:auto; background-color:#fff;padding:20px; font-size:12px; border: 1px solid #ebebeb; border-top:0">
       <tbody>
        <?php
        $ambil=$koneksi->query("SELECT SUM(jumlah) AS total FROM pembayaran WHERE nis='$_GET[nis]'");
          $total=$ambil->fetch_assoc();
        ?>
         <tr style="padding:20px;color:#000;font-size:15px">
           <td style="font-weight: bold;padding:5px 0px">Total</td>
           <td style="text-align:right;padding:5px 0px;font-weight: bold;font-size:16px;">Rp <?php echo $total['total'] ?></td>
         </tr>

         <tr>
           <td colspan="2" style="font-weight:bold;"><span style="">Nama :</span> <?php echo $_GET['nama']?></td>
         </tr>
         <tr>
           <td colspan="2" style="font-weight:bold;"><span style="">NIS :</span> <?php echo $_GET['nis']?></td>
         </tr>
                  </tr>
       </tbody>
       <tfoot style="padding-top:20px;font-weight: bold;">
         <tr>
           <td style="padding-top:20px;">Butuh Bantuan? Hubungi Kami <span style="color:#c61932"> SMKN1Kepanjen@spp.com </span></td>
         </tr>
       </tfoot>
     </table>
</div>
</div>
<script type="text/javascript">
<!--
window.print();
//-->
</script>