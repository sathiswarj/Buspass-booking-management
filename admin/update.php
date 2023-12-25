<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $user_name =$_POST['user_name'];
        $user_type =$_POST['user_type'];
        $clg_name = $_POST['clg_name'];
        $user_age = $_POST['user_age'];
        $user_gender =$_POST['user_gender'];
        $user_dob = $_POST['user_dob'];
        $user_add = $_POST['user_add'];
        $user_no = $_POST['user_no'];
        $from_stop =$_POST['from_stop'];
        $to_stop = $_POST['to_stop'];
        $sql = "UPDATE reg SET user_name='$user_name',user_type='$user_type',clg_name='$clg_name',user_gender='$user_gender',user_dob='$user_dob',user_age='$user_age',user_add='$user_add',user_no='$user_no',from_stop='$from_stop',to_stop='$to_stop',user_proof='[value-12]',user_passport='[value-13]',user_aadhar_img='[value-14]',user_password='$user_password',bus_pass_status='$bus_pass_status',created_at='$created_at'  WHERE id=$edit_id"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

        <h2>User Update Form</h2>

        <form action="update.php" method="post">

        <div class="container" id="container-id">
    <div class="row">
        <div class="h1-cls"><center><h1>Registration</h1></center><br>
            <br>
        <div class="col-md-4">
        <label for="user_name" id="user_name">Name</label></td>
        <input type="text" id="user_name" name="user_name"></td>
        </div>
        <div class="col-md-4">
        <label for="user_type">Type of Users</label>
                <select name="user_type" id="user_type">
                          <option value="0">Select</option>
                              <option value="School student">School student</option>
                              <option value="College student">College student</option>
                              <option value="Working employee">Working employee</option>
                              <option value="Senior Citizen">Senior Citizen</option>
                              <option value="Physically challenged">Physically challenged</option>
                          
                            </select>
        </div>
        <div class="col-md-4">
        <label for="clg_name" id="clg_ame">OrgnName</label></td>
        <input type="text" id="clg_name" name="clg_name"></td>
            </div>
</div>
</div>
</div>
<div class="container" >
            <div class="row" id="container-id1">
        <div class="col-md-4">
        <label for="user_gender">Gender</label>
        <select name="user_gender" id="user_gender">
                          <option value="0">Select</option>
                          <option value="male">Male</option>
                              <option value="female">Female</option>
                            </select>
        </div>
        <div class="col-md-4">
        <label for="user_dob" >Date of birth</label>
        <input type="date" id="user_dob" name="user_dob"  > 
        </div>
        <div class="col-md-4">
        <label for="user_age">Age</label>
        <input type="text" id="user_age" name="user_age">
        </div>

</div>

<div class="row" id="container-id2">

        <div class="col-md-4">
        <label for="user_proof" >Upload file</label>
        <input type="file" id="user_ptoof" name="uploadfile"><span id="proofid">*Please submit bonofide or any proof</span></td>
            </div>
        <div class="col-md-4">
        <label for="user_img" >Passport size photo</label>
        <input type="file" id="user_passport" name="uploadfiles"><span id="proofid">*photo must be in (JPEG) format </span>     </div>
        <div class="col-md-4">
        <label for="user_aadhar_img" >Aadhar photo</label>
        <input type="file" id="user_aadhar_img" name="uploadfiless">
        </div>
</div>
<div class="row" id="container-id3">
        <div class="col-md-6">
        <label for="user_add">Address</label>
        <textarea  id="user_add" name="user_add" rows="3" cols="40"></textarea>
        </div>
        <div class="col-md-6">
        <label for="user_no">Mobile no</label> 
        <input type="text" id="user_no" name="user_no"   >
        </div>
</div>
<div class="row" id="container-id3">
        <div class="col-md-6">
        <label for="from_stop">From stop</label>
        <input type="text" id="from_stop" name="from_stop">
        </div>
        <div class="col-md-6">
        <label for="to_stop">To stop</label>
        <input type="text" id="to_stop" name="to_stop" >
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-2" id="submit-btn">  
                <input type="submit" name='update' id='update' value="Apply" >
    
        <input type=submit name=update value=submit><br><br>    </div>
</div>
</div>
</div>
</div>
</div>
</pre>        </form> 
        </body>
        </html> 


    <?php

    } else{ 

        //header('Location: view.php');

    } 

}

?> 