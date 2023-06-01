<?php 
$e = 0;
$a = 100000000;
$b = 200000000;
$c = 500000000;


?>

<div class="container">
  <table class="table table-hover mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Marketing</th>
      <th scope="col">Bulan</th>
      <th scope="col">Omzet</th>
      <th scope="col">Komisi</th>
      <th scope="col">Komisi Nominal</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach($jual as $key => $value) : ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $value->nama_marketing; ?></td>
      <td><?= date(" M", strtotime( $value->date)) ?></td>
      <td>Rp. <?= @number_format($value->grand_total); ?></td>
      <td>
        <?php 
            if($a >= $value->grand_total AND $e <= $value->grand_total ) {
              echo "0%";
            }elseif( $value->grand_total  >= $a AND  $value->grand_total  <= $b) {
              echo "2.5%";
            }elseif( $value->grand_total >= $b  AND  $value->grand_total <= $c ) {
              echo "5%";
            }elseif($value->grand_total >= $c  ) {
              echo "10%";
            }

         ?>
      </td>
      <td>Rp. <?= @number_format($value->grand_total); ?></td>
      

    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>