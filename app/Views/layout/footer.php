 <!-- jQuery 3 -->
 <script src="<?= base_url() ?>/adminpages/dist/js/jquery.min.js"></script>

 <!-- v4.0.0-alpha.6 -->
 <script src="<?= base_url() ?>/adminpages/dist/bootstrap/js/bootstrap.min.js"></script>

 <!-- template -->
 <script src="<?= base_url() ?>/adminpages/dist/js/niche.js"></script>

 <!-- Morris JavaScript -->
 <script src="<?= base_url() ?>/adminpages/dist/plugins/functions/morris-init.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

 <!-- Chartjs JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
 <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>

 <!-- Data Table Link  -->
 <script src="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"></script>
 <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>


 <!-- Data Table Script  -->
 <script>
     $(document).ready(function() {
         $('#newsTable').DataTable({
             dom: 'Bfrtip',
             buttons: [
                 'csv', 'excel', 'pdf'
             ]
         });
         $('#pengumumanTable').DataTable();
         $('#rfeedbackTable').DataTable({
             dom: 'Bfrtip',
             buttons: [
                 'csv', 'excel', 'pdf'
             ]
         });
         $('#rlaporanTable').DataTable({
             dom: 'Bfrtip',
             buttons: [
                 'csv', 'excel', 'pdf'
             ]
         });
         $('#userTable').DataTable();
     });
 </script>

 <!-- Data Table Script Download -->
 <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
 <!-- dropify -->
 <script src="<?= base_url() ?>/adminpages/dist/plugins/dropify/dropify.min.js"></script>

 <!-- Chart Script -->
 <script>
     $(document).ready(function() {
         // Basic
         $('.dropify').dropify();

         // Translated
         $('.dropify-fr').dropify({
             messages: {
                 default: 'Glissez-d??posez un fichier ici ou cliquez',
                 replace: 'Glissez-d??posez un fichier ou cliquez pour remplacer',
                 remove: 'Supprimer',
                 error: 'D??sol??, le fichier trop volumineux'
             }
         });

         // Used events
         var drEvent = $('#input-file-events').dropify();

         drEvent.on('dropify.beforeClear', function(event, element) {
             return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
         });

         drEvent.on('dropify.afterClear', function(event, element) {
             alert('File deleted');
         });

         drEvent.on('dropify.errors', function(event, element) {
             console.log('Has Errors');
         });

         var drDestroy = $('#input-file-to-destroy').dropify();
         drDestroy = drDestroy.data('dropify')
         $('#toggleDropify').on('click', function(e) {
             e.preventDefault();
             if (drDestroy.isDropified()) {
                 drDestroy.destroy();
             } else {
                 drDestroy.init();
             }
         })
     });
 </script>

 </body>

 <body>

     <?php
        $koneksi = mysqli_connect("localhost", "root", "", "ngalam112db");
        ?>

     <!-- chart laporan -->
     <script>
         new Chart(document.getElementById("pie-chart-laporan"), {
             type: 'pie',
             data: {
                 labels: ['Angin Topan', 'Banjir', 'Gempa Bumi', 'Listrik Putus', 'Kebakaran', 'Kecelakaan', 'Tanah Longsor', 'Pohon Tumbang', 'Lainnya'],
                 datasets: [{
                     'label': 'My First Dataset',
                     data: [<?php
                            $jumlah_angintopan = mysqli_query($koneksi, "select * from report where kejadian='angin topan'");
                            echo mysqli_num_rows($jumlah_angintopan);
                            ?>,
                         <?php
                            $jumlah_banjir = mysqli_query($koneksi, "select * from report where kejadian='banjir'");
                            echo mysqli_num_rows($jumlah_banjir);
                            ?>,
                         <?php
                            $jumlah_gempabumi = mysqli_query($koneksi, "select * from report where kejadian='gempa bumi'");
                            echo mysqli_num_rows($jumlah_gempabumi);
                            ?>,
                         <?php
                            $jumlah_listrikputus = mysqli_query($koneksi, "select * from report where kejadian='listrik putus'");
                            echo mysqli_num_rows($jumlah_listrikputus);
                            ?>,
                         <?php
                            $jumlah_kebakaran = mysqli_query($koneksi, "select * from report where kejadian='kebakaran'");
                            echo mysqli_num_rows($jumlah_kebakaran);
                            ?>,
                         <?php
                            $jumlah_kecelakaan = mysqli_query($koneksi, "select * from report where kejadian='kecelakaan'");
                            echo mysqli_num_rows($jumlah_kecelakaan);
                            ?>,
                         <?php
                            $jumlah_tanahlongsor = mysqli_query($koneksi, "select * from report where kejadian='tanah longsor'");
                            echo mysqli_num_rows($jumlah_tanahlongsor);
                            ?>,
                         <?php
                            $jumlah_pohontumbang = mysqli_query($koneksi, "select * from report where kejadian='pohon tumbang'");
                            echo mysqli_num_rows($jumlah_pohontumbang);
                            ?>,
                         <?php
                            $jumlah_lainnya = mysqli_query($koneksi, "select * from report where kejadian='lainnya'");
                            echo mysqli_num_rows($jumlah_lainnya);

                            ?>
                     ],
                     backgroundColor: ['rgb(242, 28, 17)',
                         'rgb(250, 238, 12)',
                         'rgb(99, 250, 12)',
                         'rgb(16, 40, 222)',
                         'rgb(227, 5, 123)',
                         'rgb(19, 203, 209)',
                         'rgb(129, 132, 133)',
                         'rgb(247, 146, 5)',
                         'rgb(23, 16, 16)'
                     ],
                     data1: [
                         "<?php
                            $lokasi_angintopan = mysqli_query($koneksi, "select * from report where kejadian='angin topan'");
                            while ($row = mysqli_fetch_object($lokasi_angintopan)) {
                                echo $row->lokasi_kejadian . ", ";
                            }
                            ?>",
                         "<?php
                            $lokasi_banjir = mysqli_query($koneksi, "select * from report where kejadian='banjir'");
                            while ($row = mysqli_fetch_object($lokasi_banjir)) {
                                echo $row->lokasi_kejadian . ", ";
                            }
                            ?>",
                         "<?php
                            $lokasi_gempabumi = mysqli_query($koneksi, "select * from report where kejadian='gempa bumi'");
                            while ($row = mysqli_fetch_object($lokasi_gempabumi)) {
                                echo $row->lokasi_kejadian . ", ";
                            }
                            ?>",
                         "<?php
                            $lokasi_listrikputus = mysqli_query($koneksi, "select * from report where kejadian='listrik putus'");
                            while ($row = mysqli_fetch_object($lokasi_listrikputus)) {
                                echo $row->lokasi_kejadian . ", ";
                            }
                            ?>",
                         "<?php
                            $lokasi_kebakaran = mysqli_query($koneksi, "select * from report where kejadian='kebakaran'");
                            while ($row = mysqli_fetch_object($lokasi_kebakaran)) {
                                echo $row->lokasi_kejadian . ", ";
                            }
                            ?>",
                         "<?php
                            $lokasi_kecelakaan = mysqli_query($koneksi, "select * from report where kejadian='kecelakaan'");
                            while ($row = mysqli_fetch_object($lokasi_kecelakaan)) {
                                echo $row->lokasi_kejadian . ", ";
                            }
                            ?>",
                         "<?php
                            $lokasi_tanahlongsor = mysqli_query($koneksi, "select * from report where kejadian='tanah longsor'");
                            while ($row = mysqli_fetch_object($lokasi_tanahlongsor)) {
                                echo $row->lokasi_kejadian . ", ";
                            }
                            ?>",
                         "<?php
                            $lokasi_pohontumbang = mysqli_query($koneksi, "select * from report where kejadian='pohon tumbang'");
                            while ($row = mysqli_fetch_object($lokasi_pohontumbang)) {
                                echo $row->lokasi_kejadian . ", ";
                            }
                            ?>",
                         "<?php
                            $lokasi_lainnya = mysqli_query($koneksi, "select * from report where kejadian='lainnya'");
                            while ($row = mysqli_fetch_object($lokasi_lainnya)) {
                                echo $row->lokasi_kejadian . ", ";
                            }

                            ?>"
                     ]
                 }]
             },
             options: {
                 responsive: true,

                 tooltips: {

                     mode: 'label',
                     callbacks: {
                         label: function(tooltipItem, data) {
                             var indice = tooltipItem.index;
                             return data.labels[indice] + ': ' + data.datasets[0].data[indice] + '';
                         },
                         afterLabel: function(tooltipItem, data) {
                             return 'Lokasi: ' + data.datasets[tooltipItem.datasetIndex].data1[tooltipItem.index];
                         }

                     }

                 }


             }
         });
     </script>

     <script>
         (jQuery);
         $(function() {
             //Laporan Feedback
             var data = [{
                 data: [
                     <?php
                        $jumlah_sangatbagus = mysqli_query($koneksi, "select * from feedback where q4_feedback='Sangat Bagus'");
                        echo mysqli_num_rows($jumlah_sangatbagus);
                        ?>,
                     <?php
                        $jumlah_bagus = mysqli_query($koneksi, "select * from feedback where q4_feedback='Bagus'");
                        echo mysqli_num_rows($jumlah_bagus);
                        ?>,
                     <?php
                        $jumlah_cukup = mysqli_query($koneksi, "select * from feedback where q4_feedback='Cukup'");
                        echo mysqli_num_rows($jumlah_cukup);
                        ?>,
                     <?php
                        $jumlah_kurang = mysqli_query($koneksi, "select * from feedback where q4_feedback='Kurang'");
                        echo mysqli_num_rows($jumlah_kurang);
                        ?>,
                     <?php
                        $jumlah_sangatkurang = mysqli_query($koneksi, "select * from feedback where q4_feedback='Sangat Kurang'");
                        echo mysqli_num_rows($jumlah_sangatkurang);
                        ?>,
                 ],
                 backgroundColor: [
                     'rgb(242, 28, 17)',
                     'rgb(250, 238, 12)',
                     'rgb(99, 250, 12)',
                     'rgb(16, 40, 222)',
                     'rgb(227, 5, 123)',
                     'rgb(23, 16, 16)'
                 ],
                 borderColor: "#fff"
             }];

             var options = {
                 tooltips: {
                     enabled: true
                 },
                 options: {
                     responsive: true,
                     maintainAspectRatio: true,
                     plugins: {
                         labels: {
                             render: 'percentage',
                             precision: 2
                         }
                     },
                 }
             };

             var ctx = document.getElementById("pie-chart-feedback").getContext('2d');
             var myChart = new Chart(ctx, {
                 type: 'pie',
                 data: {
                     labels: ['Sangat Bagus', 'Bagus', 'Cukup', 'Kurang', 'Sangat Kurang'],
                     datasets: data
                 },
                 options: options
             });

         })
     </script>

 </body>

 </html>

 <br><br><br>

 <!-- /.content-wrapper -->
 <footer class="main-footer fix-bottom">
     <div class="pull-right hidden-xs">Version 1.0 Beta</div>
     Copyright ?? 2021 Dinas Komunikasi dan Informatika Kota Malang. All rights reserved.
 </footer>
 </div>

 <!-- ./wrapper -->