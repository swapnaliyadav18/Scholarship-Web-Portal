<?php

    include '../header.php';

    include '../navbar.php';
?>

<!--Main Start-->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="../insert/adscheme.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-12 text-center">
                                    <span class="fs-5">Add Scheme</span>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="collegename">Scheme Name</label>
                                    <input class="form-control" name="scheme" id="collegename" type="text" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="collegename1">End Date</label>
                                    <input class="form-control" name="date" id="collegename1" type="date" required>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Add Scheme</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Main End-->

<?php
    include '../footer.php';
?>