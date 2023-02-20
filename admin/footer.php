   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">
       <div class="copyright">
           &copy; Musaba Technopark
       </div>
       <div class="credits">
           <!-- All the links in the footer should remain intact. -->
           <!-- You can delete the links only if you purchased the pro version. -->
           <!-- Licensing information: https://bootstrapmade.com/license/ -->
           <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
       </div>
   </footer>
   <?php

    $sql = "SELECT * FROM setting";

    $query = $db->query($sql);

    $data = $query->fetch_object();

    ?>

   <div style="display: none;" id="waktu"></div>
   <input type="hidden" id="id" value="<?= $data->id; ?>">
   <div style="display: none;" id="start_time"><?= $data->start_pemilos; ?></div>

   <script type="text/javascript">
       async function tampilkanWaktu() {

           var date = new Date(); // ambil waktu sekarang
           var tahun = date.getFullYear(); // ambil tahun
           var bulan = date.getMonth() + 1; // ambil bulan (di JavaScript, bulan dimulai dari 0)
           var tanggal = date.getDate();
           var jam = date.getHours(); // ambil jam
           var menit = date.getMinutes(); // ambil menit
           var detik = date.getSeconds(); // ambil detik

           var start = document.getElementById("start_time").innerHTML
           var id = document.getElementById("id").value

           // tambahkan angka 0 di depan jika angka hanya satu digit
           if (bulan < 10) bulan = "0" + bulan;
           if (jam < 10) jam = "0" + jam;
           if (menit < 10) menit = "0" + menit;
           if (detik < 10) detik = "0" + detik;

           // tampilkan waktu
           var waktu = tahun + "-" + bulan + "-" + tanggal + " " + jam + ":" + menit + ":" + detik;

           if (new Date(waktu) > new Date(start)) {
               var api = await fetch('http://127.0.0.1/pdm/frontend/sistem/admin/setting.php?action=start_otomatis&id=' + id + '&data=1')
               var data = await api.json()

               console.log(data)
           } else {
               var api = await fetch('http://127.0.0.1/pdm/frontend/sistem/admin/setting.php?action=start_otomatis&id=' + id + '&data=0')
               var data = await api.json()

               console.log(data)
           }

           console.log(waktu, '\n', start)
       }

       setInterval(tampilkanWaktu, 1000); // panggil fungsi tampilkanWaktu setiap 1 detik
   </script>

   <!-- End Footer -->

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
   <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../assets/vendor/chart.js/chart.umd.js"></script>
   <script src="../assets/vendor/echarts/echarts.min.js"></script>
   <script src="../assets/vendor/quill/quill.min.js"></script>
   <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
   <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
   <script src="../assets/vendor/php-email-form/validate.js"></script>

   <!-- Template Main JS File -->
   <script src="../assets/js/main.js"></script>
   </body>

   </html>