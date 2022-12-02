<section class="vh-100 bg-white">
        <div class="mask d-flex align-items-center gradient-custom-3">
            <div class="container p-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <h2 class="text-uppercase text-center mb-5">Create a job description</h2>
                        <form method="post" action="CreateJobDescription">
                            <!-- Company name -->
                            <div class="form-outline mb-4">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="company_name" class="form-control form-control-md" />
                            </div>
                            <!-- Company desciption -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Company Description</label>
                                <textarea class="form-control" name="company_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <!-- Company image -->
                            <div class="form-group">
                                <label for="validatedCustomFile">Company Logo</label>
                                <div class="custom-file">
                                    <input type="file" name="company_image" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose
                                        file...</label>
                                </div>
                                <?php if (!empty($response)) { ?>
                                    <div class="response <?php echo $response["type"]; ?>">
                                        <?php echo $response["message"]; ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- Job Type -->
                            <div class="form-group">
                                <label for="validatedCustomFile">Company Type</label>
                                <select class="custom-select" name="company_type" required>
<!--                                --><?php
//                                    $sql = "SELECT * FROM `business_stream`";
//                                    if ($stmt = mysqli_prepare($db, $sql)) {
//                                        if (mysqli_stmt_execute($stmt)) {
//                                            mysqli_stmt_store_result($stmt);
//                                            $num_row = mysqli_stmt_num_rows($stmt);
//                                            while ($num_row >= 1) {
//                                                mysqli_stmt_bind_result($stmt, $business_stream_id, $business_stream_name);
//                                                if (mysqli_stmt_fetch($stmt)) {
//                                                    echo "<option value='$business_stream_id'>$business_stream_name</option>";
//                                                }
//                                                $num_row = $num_row - 1;
//                                            }
//                                        }
//                                    }
//                                    ?>
                                </select>
                            </div>
                            <!-- Company url -->
                            <div class="form-outline mb-4">
                                <label class="form-label">Company URL</label>
                                <input type="text" name="company_url" class="form-control" />
                            </div>
                            <!-- Company establishment date -->
                            <div class="form-outline mb-4">
                                <label for="validationCustom03">Company Establishment Date</label>
                                <div class="input-group date" id="datepicker">
                                    <input type="date" name="company_establish_date" class="form-control form-control-md" id="date" />
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-light d-block">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <!-- Job Skill -->
                            <div class="form-group">
                                <label for="validatedCustomFile">Job Skill</label>
                                <select class="custom-select" name="job_skill" multiple required>
<!--                                    --><?php
//                                    $sql = "SELECT * FROM `skill_set`";
//                                    if ($stmt = mysqli_prepare($db, $sql)) {
//                                        if (mysqli_stmt_execute($stmt)) {
//                                            mysqli_stmt_store_result($stmt);
//                                            $num_row = mysqli_stmt_num_rows($stmt);
//                                            while ($num_row >= 1) {
//                                                mysqli_stmt_bind_result($stmt, $skill_id, $skill_name);
//                                                if (mysqli_stmt_fetch($stmt)) {
//                                                    echo "<option value='$skill_id'>$skill_name</option>";
//                                                }
//                                                $num_row = $num_row - 1;
//                                            }
//                                        }
//                                    }
//                                    ?>
                                </select>
                            </div>
                            <!-- Job Skill Level -->
                            <div class="form-group">
                                <label for="validatedCustomFile">Job Skill Level</label>
                                <select class="custom-select" name="job_skill_level" required>
                                    <option value="fresher">Fresher</option>
                                    <option value="junior">Junior</option>
                                    <option value="senior">Senior</option>
                                    <option value="professional">Professional</option>
                                </select>
                            </div>
                            <!-- Job Type -->
                            <div class="form-group">
                                <label for="validatedCustomFile">Job Type</label>
                                <select class="custom-select" name="job_type" required>
<!--                                --><?php
//                                    $sql = "SELECT * FROM `job_type`";
//                                    if ($stmt = mysqli_prepare($db, $sql)) {
//                                        if (mysqli_stmt_execute($stmt)) {
//                                            mysqli_stmt_store_result($stmt);
//                                            $num_row = mysqli_stmt_num_rows($stmt);
//                                            while ($num_row >= 1) {
//                                                mysqli_stmt_bind_result($stmt, $job_type_id, $job_type_name);
//                                                if (mysqli_stmt_fetch($stmt)) {
//                                                    echo "<option value='$job_type_id'>$job_type_name</option>";
//                                                    echo $skill_name;
//                                                }
//                                                $num_row = $num_row - 1;
//                                            }
//                                        }
//                                    }
//                                    ?>
                                </select>
                            </div>
                            <!-- Job location -->
                            <!-- Job description -->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Job Description</label>
                                <textarea class="form-control" name="job_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>