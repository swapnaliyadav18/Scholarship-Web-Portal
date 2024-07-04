<!--Footer Start-->

<footer class="bg-light py-3 mt-3" >
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-md-12">
                    <span class="fs-6 fw-bold">
                        Scholarship Web Portal
                    </span>
                    <div class="line-a text-center">
                        <div class="line"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <span>
                        This site is designed, developed by <b class="fs-10">Swapnali Yadav</b> ,<br>
                        content provided by Scholarship web Portal.
                    </span>
                </div>
            </div>
        </div>
    </footer>
    
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
    <script src="https://kit.fontawesome.com/a242e8622b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>