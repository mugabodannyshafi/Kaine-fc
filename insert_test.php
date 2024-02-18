<form action="code.php" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Id of Meeting</label>
                                    <!-- <input type="text" class="form-control" name="md" required> -->
                                    <select class="form-select" name="md">
                                        <option selected disabled>Select Meet ID</option>
                                        <?php
                                        $mid = "SELECT M_id FROM meetings ORDER BY `meetings`.`M_id` ASC";
                                        $resu = mysqli_query($con, $mid);
                                        while ($row = mysqli_fetch_assoc($resu)) {
                                            ?>
                                            <option>
                                                <?= $row['M_id']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Id of Fan</label>
                                    <!-- <input type="text" class="form-control" name="fd" required> -->
                                    <select class="form-select" name="fd">
                                        <option selected disabled>Select Fan ID</option>
                                        <?php
                                        $fid = "SELECT F_id FROM fans ORDER BY `fans`.`F_id` ASC";
                                        $res = mysqli_query($con, $fid);
                                        while ($row = mysqli_fetch_assoc($res)) {
                                            ?>
                                            <option>
                                                <?= $row['F_id']; ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                                <br>
                                <button type="submit" name="send" class="btn btn-primary">&nbsp; Add Participate
                                    &nbsp;</button>

                            </form>