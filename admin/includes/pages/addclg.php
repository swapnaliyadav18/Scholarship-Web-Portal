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
                        <form action="../insert/clgadd.php" method="post">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <label class="form-label" for="collegename">College Name</label>
                                    <input class="form-control" name="cname" id="collegename" type="text" required>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Add College</button>
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