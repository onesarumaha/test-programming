
<div class="container">

  <button class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Pembayaran</button>  

  <?php if(session()->getFlashdata('success')) : ?>
            <div class="bd-example mb-2">
              <div class="alert alert-solid alert-success rounded-0 alert-dismissible fade show " role="alert">
                  <span> Success !</span>
                  <?= session()->getFlashdata('success'); ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          </div>
      <?php endif; ?>
  <table class="table table-hover mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Trancsaction Number</th>
      <th scope="col">Marketing ID</th>
      <th scope="col">Date</th>
      <th scope="col">Cargo Fee</th>
      <th scope="col">Total Balance</th>
      <th scope="col">Grand Total</th>
      <th scope="col" colspan="2">Action </th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach($jual as $value) : ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $value['transaction_number']; ?></td>
      <td><?= $value['id_marketing']; ?></td>
      <td> <?= date("d/m/Y", strtotime( $value['date'])) ?></td>
      <td><?= $value['cargo_fee']; ?></td>
      <td><?= $value['total_balance']; ?></td>
      <td><?= $value['grand_total']; ?></td>
      <td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $value['id_penjualan']; ?>">Edit</button></td>
      <td><a href="<?= base_url('penjualan/delete/'.$value['id_penjualan']) ?>"><button class="btn btn-danger">Hapus</button></a></td>

    </tr>



<!-- Modal -->
<div class="modal fade" id="exampleModal<?= $value['id_penjualan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pembayaran <?= $value['id_penjualan']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="<?= base_url('penjualan/edit/'.$value['id_penjualan']) ?>" method="POST">
            <?= csrf_field() ?>
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label"> Trancsaction Number</label>
              <input type="text" class="form-control" value="<?= $value['transaction_number']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="transaction_number">
            </div>
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label"> Marketing ID</label>
              <select class="form-select" aria-label="Default select example" name="id_marketing">
                <option value="<?= $value['id_marketing']; ?>">-- Pilih Marketing ID --</option>
                <?php foreach($mar as  $m)  :?>
                <option value="<?= $m['id_marketing'] ?>"><?= $m['id_marketing'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
             <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label">Date</label>
              <input type="text" value="<?= $value['date']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date">
            </div>
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label">Cargo Fee  </label>
              <input type="number" value="<?= $value['cargo_fee']; ?>" class="form-control" id="exampleInputEmail1" name="cargo_fee" aria-describedby="emailHelp">
            </div> 
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label">Total Balance    </label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="total_balance" aria-describedby="emailHelp" value="<?= $value['total_balance']; ?>">
            </div> 
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label">Grand Total   </label>
              <input type="number" value="<?= $value['grand_total']; ?>" class="form-control" id="exampleInputEmail1" name="grand_total" aria-describedby="emailHelp">
            </div>  
             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>

    </div>
  </div>
</div>









    <?php endforeach ?>
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pembayaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="<?= base_url('penjualan/create') ?>" method="POST">
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label"> Trancsaction Number</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="transaction_number">
            </div>
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label"> Marketing ID</label>
              <select class="form-select" aria-label="Default select example" name="id_marketing">
                <option selected>-- Pilih Marketing ID --</option>
                <?php foreach($mar as  $m)  :?>
                <option value="<?= $m['id_marketing'] ?>"><?= $m['id_marketing'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
             <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label">Date</label>
              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date">
            </div>
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label">Cargo Fee  </label>
              <input type="number" class="form-control" id="exampleInputEmail1" name="cargo_fee" aria-describedby="emailHelp">
            </div> 
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label">Total Balance    </label>
              <input type="number" class="form-control" id="exampleInputEmail1" name="total_balance" aria-describedby="emailHelp">
            </div> 
            <div class="mb-0">
              <label for="exampleInputEmail1" class="form-label">Grand Total   </label>
              <input type="number" class="form-control" id="exampleInputEmail1" name="grand_total" aria-describedby="emailHelp">
            </div>  
             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>

    </div>
  </div>
</div>