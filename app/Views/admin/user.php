 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header sty-one">
     <h1>Pengguna</h1>
     <ol class="breadcrumb">
       <li><a href="#">Home</a></li>
       <li><i class="fa fa-angle-right"></i>Pengguna</li>
     </ol>
   </div>

   <!-- FlashMessage -->
   <?php if (session()->getFlashdata('pesan')) : ?>
     <div class="alert alert-success alert-dismissible fade show" role="alert"> <?= session()->getFlashdata('pesan'); ?>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
     </div>
   <?php endif; ?>
   <!-- End FlashMessage -->

   <!-- Main content -->
   <div class="content">
     <!-- Small boxes (Stat box) -->
     <div class="page-content">
       <!-- Page Header-->
       <div class="page-content">
         <!-- Page Header-->
         <div class="container-fluid">
           <div class="col-lg-12">
             <div class="block">
               <!-- <div class="title"><strong>Tabel User</strong></div> -->
               <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success"><i class="fa  fa-plus-square"></i>Tambah Pengguna</button>
               <br>
               <br>
               <div class="table-responsive">
                 <table class="table table-bordered table-hoverr" id="rfeedbackTable">
                   <thead>
                     <tr>
                       <th>#</th>
                       <th>Nama Petugas</th>
                       <th>Username</th>
                       <th>Password</th>
                       <th>Level</th>
                       <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php
                      $no = 1;
                      foreach ($user as $r) : ?>
                       <tr>
                         <th scope="row"><?= $no; ?></th>
                         <td><?= $r['nama_petugas']; ?></td>
                         <td><?= $r['username']; ?></td>
                         <td><?= $r['password']; ?></td>
                         <td><?= $r['level']; ?></td>
                         <td>
                           <a href="/user/editUser/<?= $r['id_user']; ?>" class="btn btn-warning btn-sm">Edit</a>
                           <a href="/user/delete/<?= $r['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                         </td>
                       </tr>
                     <?php
                        $no++;
                      endforeach; ?>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
           <!-- Modal-->
           <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" aria-hidden="true" style="display: none;">
             <div role="document" class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Tambah Pengguna</strong>
                   <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                 </div>
                 <div class="modal-body">
                   <form method="post" action="<?= site_url('/user/addUser') ?>" enctype="multipart/form-data">
                     <form>
                       <div class="form-group">
                         <label>Nama Petugas</label>
                         <input type="text" name="nama_petugas" id="nama_petugas" placeholder="Nama Petugas" class="form-control" required>
                       </div>
                       <div class="form-group">
                         <label>Username</label>
                         <input type="username" name="username" id="username" placeholder="Username" class="form-control" required>
                       </div>
                       <div class="form-group">
                         <label>Password</label>
                         <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                       </div>
                       <div class="form-group">
                         <label>Level</label>
                           <select name="level" class="form-control" required>
                             <option>Admin</option>
                             <option>Super Admin</option>
                           </select>
                       </div>
                       <div class="modal-footer">
                         <button type="submit" class="btn btn-success">Simpan</button>
                       </div>
                     </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     </section>
   </div>
   <!-- /.content -->
 </div>