 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header sty-one">
     <h1>Detail Feedback </h1>
     <ol class="breadcrumb">
       <li><a href="/superAdmin/reportFeedback">Laporan Feedback</a></li>
       <li><i class="fa fa-angle-right"></i> Detail Feedback</li>
     </ol>
   </div>

   <!-- Main content -->
   <div class="content">
     <!-- Small boxes (Stat box) -->
     <div class="page-content row">
       <!-- Page Header-->
       <!-- Page Content -->
       <div class="col-lg-12">
         <div class="block">
           <div class="block-body">
             <form class="form-horizontal">
               <div class="form-group row">
                 <label class="col-sm-1 form-control-label"><strong>Nama</strong></label>
                 <div class="col-sm-5">
                   <input type="text" class="form-control" value="<?= $feedback['nama_feedback'] ?>" readonly>
                 </div>
                 <label class="col-sm-1 form-control-label"><strong>No.HP</strong></label>
                 <div class="col-sm-3">
                   <input type="text" class="form-control" value="<?= $feedback['noHp_feedback'] ?>" readonly>
                 </div>
               </div>
               <div class="line"></div>
               <div class="form-group row">
                 <label class="col-sm-1 form-control-label"><strong>Alamat</strong></label>
                 <div class="col-sm-5">
                   <input type="text" class="form-control" value="<?= $feedback['alamat_feedback'] ?>" readonly>
                 </div>
               </div>
               <div class="line"></div>
               <div class="form-group row">
                 <label class="col-sm-1 form-control-label"><strong>Penyebab</strong></label>
                 <div class="col-sm-5">
                   <input type="textarea" class="form-control" value="<?= $feedback['penyebab_feedback'] ?>" readonly>
                 </div>
               </div>
               <div class="form-group row">
                 <label class="col-sm-1 form-control-label"><strong>Q1</strong></label>
                 <div class="col-sm-4">
                   <div class="form-group">
                     <label class="form-control-label"><strong>Apa Benar Bapak/Ibu pernah Menghubungi Ngalam 112 ?</strong></label>
                     <input type="text" class="form-control" value="<?= $feedback['q1_feedback'] ?>" readonly>
                   </div>
                 </div>
                 <label class="col-sm-1 form-control-label"><strong>Q4</strong></label>
                 <div class="col-sm-4">
                   <div class="form-group">
                     <label class="form-control-label"><strong>Bagaimana Pendapat Bapak/Ibu tentang Pelayanan Ngalam 112 ? Berikan Penilaian !</strong></label>
                     <input type="text" class="form-control" value="<?= $feedback['q4_feedback'] ?>" readonly>
                   </div>
                 </div>
               </div>
               <div class="form-group row">
                 <label class="col-sm-1 form-control-label"><strong>Q2</strong></label>
                 <div class="col-sm-4">
                   <div class="form-group">
                     <label class="form-control-label"><strong>Apakah Bapak merasa terbantu dengan adanya layanan Ngalam 112 ?</strong></label>
                     <input type="text" class="form-control" value="<?= $feedback['q2_feedback'] ?>" readonly>
                   </div>
                 </div>
                 <label class="col-sm-1 form-control-label"><strong>Q5</strong></label>
                 <div class="col-sm-4">
                   <div class="form-group">
                     <label class="form-control-label"><strong>Apakah ada saran untuk layanan 112 ?</strong></label>
                     <textarea input type="text" class="form-control" readonly><?= $feedback['q5_feedback'] ?></textarea>
                   </div>
                 </div>
               </div>
               <div class="form-group row">
                 <label class="col-sm-1 form-control-label"><strong>Q3</strong></label>
                 <div class="col-sm-4">
                   <div class="form-group">
                     <label class="form-control-label"><strong>Menurut Bapak/Ibu, Apakah Pelayanan Ngalam 112 dibutuhkan atau Tidak ?</strong></label>
                     <input type="text" class="form-control" value="<?= $feedback['q3_feedback'] ?>" readonly>
                   </div>
                 </div>

               </div>
               <div class="line"></div>
               <div class="form-group row">
                 <div class="col-lg-12 ml-auto">
                   <!-- <button type="submit" data-dismiss="modal" class="btn btn-primary">Kembali</button> -->
                   <a href="<?= base_url('superAdmin/reportFeedback') ?>" class="btn btn-primary">Kembali</a>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- /.content -->
 </div>