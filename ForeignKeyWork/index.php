<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>


<div class = 'container mt-3'>

        <div class="row">

            <div class="col-sm-12 col-lg-6 border border-primary">

                <form action="index.php" method = "post">

                    <div class="form-group">
                        <label for="name">EmployeeName:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="sal">Salary:</label>
                        <input type="text" class="form-control" id="sal" placeholder="Enter Your name" name="sal">
                    </div>
                  
                    <div  class="form-group">

                        <label for="dep">Select Department:</label>

                        <select name="Dep" id="dep" class="form-control">

                            <!-- get dropdown data code -->
                            <option value="">---Select---</option>
                            <?php
                            $query = 'select * from dep';
                            $rs = mysqli_query($con, $query);
                            if ($rs) {

                                while($data = mysqli_fetch_assoc($rs)){
                                    ?>

                                    <option value= " <?= $data['DepId']?>"> <?= $data['DepName'] ?> </option>
                            <?php
                                }
                            }     
                            else {
                                 ?>

                                <option> No record found</option>
                            <?php
                            }
                            ?>
                        
                        </select>


                    </div>
                       

                        
                    </div>

                </form>


            </div>
            
           

        </div>


</div>












<?php include 'footer.php'; ?>
