<br><br>

<a href="export.php"><button>EXPORT</button></a>
<script type="text/javascript" src="js/multi-delete.js"></script> <!--- include the our jquery file  -->
<form action="check-delete.php" method="post" name="data_table">
<div class="row well">
    <input name="submit" type="submit" value="Delete" id="submit">  
</div>
<div class="table-responsive">
<table class="table" id="table_data">
    <thead>
        <tr>
            <th style="text-align:center">Check All <input type="checkbox" id="check_all" value=""></th>
            <th style="text-align:center">No.</th>
            <th style="text-align:center">First Name</th>
            <th style="text-align:center">Last Name</th>
            <th style="text-align:center">Skill</th>
            <th style="text-align:center">ACTION</th>
        </tr>
      </thead>
        <?php include "config.php";
        $n = 0;
        $query=mysqli_query($con,"select * from `tblskills` order by id desc");
        while($row=mysqli_fetch_array($query))
                      { 
                        $n++;
                  ?>
                      <tr>
                        <td style="text-align:center"><input type="checkbox" value="<?php echo $row['id']; ?>" name="data[]" id="data"></td>
                        <td style="text-align:center" ><?php echo $n; echo '.';?></td>
                        <td ><?php echo $row['name'];?></td>
                        <td ><?php echo $row['lname'];?></td>
                        <td ><?php echo $row['skill'];?></td>
                        <td style="text-align:center"><a href="crud-delete.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure you want to delete <?php echo $row['name'];?> ?')"><button class="btndelete">Delete</button></a></td>
                      </tr>
                      </form>
        <?php
                      }
        ?>
        </table>
        </div>