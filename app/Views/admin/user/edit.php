 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header sty-one">
     <h1>Edit User </h1>
     <ol class="breadcrumb">
       <li><a href="/superAdmin/pengumuman">User</a></li>
       <li><i class="fa fa-angle-right"></i>Edit User</li>
     </ol>
   </div>

   <!-- Main content -->
   <div class="content">
     <!-- Small boxes (Stat box) -->
     <div class="page-content row">
       <!-- Page Header-->
       <!-- Page Content -->
       <div class="form-group row">
         <div class="col-sm-11 ml-auto">
           <!-- <button type="submit" data-dismiss="modal" class="btn btn-primary">Kembali</button> -->
           <a href="<?= base_url('superadmin/user') ?>" class="btn btn-primary">Kembali</a>
         </div>
       </div>
       <div class="col-lg-12">
         <div class="block">
           <div class="block-body">
             <form class="form-horizontal row" action="/user/edit/" method="post">
               <input type="hidden" name="id" value="<?= $userdata[0]['id_user']; ?>" />
               <div class="form-group col-lg-4">
                 <label class="col-sm-1 form-control-label"><strong>Email</strong></label>
                 <input type="text" class="form-control" value="<?= $userdata[0]['email']; ?>" name="email" id="email" required>
               </div>
               <div class="form-group col-lg-4">
                 <label class="col-sm-1 form-control-label"><strong>Level</strong></label>
                 <select name="level" class="form-control" id="level">
                   <option value="Super Admin" <?= $userdata[0]['level'] == "Super Admin" ? "selected" : ""; ?>>Super Admin</option>
                   <option value="Admin" <?= $userdata[0]['level'] == "Admin" ? "selected" : ""; ?>>Admin</option>
                 </select>
               </div>
               <div class="form-group col-lg-4">
               </div>
               <div class="form-group col-lg-4">
                 <label class="col-sm-1 form-control-label"><strong>Username</strong></label>
                 <input type="text" class="form-control" value="<?= $userdata[0]['username']; ?>" name="username" id="username" required>
               </div>
               <div class="form-group col-lg-4">
                 <label class="col-sm-1 form-control-label"><strong>Password</strong></label>
                 <input type="text" class="form-control" value="<?= $userdata[0]['password']; ?>" name="password" id="password" required>
               </div>

               <div class="line"></div>
               <div class="col-lg-12">
                 <button type="submit" class="btn btn-warning">Update</a>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- /.content -->
 </div>