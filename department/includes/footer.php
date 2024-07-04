<div class="py-6 px-6 text-center">
    <p class="mb-0 fs-4">Design and Developed by <Span class="text-primary">Swapnali Yadav</Span></p>
</div>
</div>
</div>
</div>





<!---->

  <script>
    function generatePDF(){
      const element = document.getElementById("content");

      html2pdf()
      .from(element)
      .save();
    }
  </script>

  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
 
  <script src="https://kit.fontawesome.com/a242e8622b.js" crossorigin="anonymous"></scrip>
  <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/sidebarmenu.js"></script>
  <script src="../../assets/js/app.min.js"></script>
  <script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../../assets/js/dashboard.js"></script>
</body>

</html>