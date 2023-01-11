      <footer class="footer">
          <div class="container-fluid">
              <div class="copyright float-right">
                  &copy;
                  <script>
                      document.write(new Date().getFullYear());
                  </script>
                  , made with <i class="tim-icons icon-heart-2"></i> by
                  <a href="" target="_blank">Musaba Technopark Tim</a>
                  for a better web.
              </div>

              <!-- your footer here -->
          </div>
      </footer>
      </div>
      </div>
      <!-- Chartist JS -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <!--   Core JS Files   -->
      <script>
          // General configuration for the charts with Line gradientStroke
          gradientChartOptionsConfiguration = {
              maintainAspectRatio: false,
              legend: {
                  display: false,
              },

              tooltips: {
                  backgroundColor: "#fff",
                  titleFontColor: "#333",
                  bodyFontColor: "#666",
                  bodySpacing: 4,
                  xPadding: 12,
                  mode: "nearest",
                  intersect: 0,
                  position: "nearest",
              },
              responsive: true,
              scales: {
                  yAxes: [{
                      barPercentage: 1.6,
                      gridLines: {
                          drawBorder: false,
                          color: "rgba(29,140,248,0.0)",
                          zeroLineColor: "transparent",
                      },
                      ticks: {
                          suggestedMin: 50,
                          suggestedMax: 110,
                          padding: 20,
                          fontColor: "#9a9a9a",
                      },
                  }, ],

                  xAxes: [{
                      barPercentage: 1.6,
                      gridLines: {
                          drawBorder: false,
                          color: "rgba(220,53,69,0.1)",
                          zeroLineColor: "transparent",
                      },
                      ticks: {
                          padding: 20,
                          fontColor: "#9a9a9a",
                      },
                  }, ],
              },
          };

          var ctx = document.getElementById("chartsuara").getContext("2d");

          var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

          gradientStroke.addColorStop(1, "rgba(72,72,176,0.2)");
          gradientStroke.addColorStop(0.2, "rgba(72,72,176,0.0)");
          gradientStroke.addColorStop(0, "rgba(119,52,169,0)"); //purple colors

          var data = {
              labels: [
                  "Calon 1",
                  "Calon 2",
                  "Calon 3",
                  "Calon 4",
                  "Calon 5",
                  "Calon 6",
                  "Calon 7",
                  "Calon 8",
                  "Calon 9",
                  "Calon 10",
                  "Calon 11",
                  "Calon 12",
                  "Calon 13",
              ],
              datasets: [{
                  label: "Suara Teratas",
                  fill: true,
                  backgroundColor: gradientStroke,
                  borderColor: "#9ed9a6",
                  borderWidth: 2,
                  borderDash: [],
                  borderDashOffset: 0.0,
                  pointBackgroundColor: "#9ed9a6",
                  pointBorderColor: "rgba(255,255,255,0)",
                  pointHoverBackgroundColor: "#9ed9a6",
                  pointBorderWidth: 20,
                  pointHoverRadius: 4,
                  pointHoverBorderWidth: 15,
                  pointRadius: 4,
                  data: [60, 110, 70, 100, 75, 90, 80, 100, 70, 80, 120, 80, 50],
              }, ],
          };

          var myChart = new Chart(ctx, {
              type: "bar",
              data: data,
              options: gradientChartOptionsConfiguration,
          });
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      </body>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js" integrity="sha512-X41/A5OSxoi5uqtS6Krhqz8QyyD8E/ZbN7B4IaBSgqPLRbWVuXJXr9UwOujstj71SoVxh5vxgy7kmtd17xrJRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/black-dashboard.js?v=1.0.0" type="text/javascript"></script>
      </body>

      </html>