<?php include_once 'main_header.php'; ?>
           
<?php include_once 'side_navigation.php';?>
<?php  
$id = $_GET['uid'];
 if (!isset($_POST['submit']))  {
            echo "";
    } else  {            

            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_mobile = $_POST['user_mobile'];
            $user_country_id = $_POST['user_country_id'];
            $user_state_id = $_POST['user_state_id'];
            $user_city_id = $_POST['user_city_id'];
            $user_location_id = $_POST['user_location_id'];
            $user_password = $_POST['user_password'];
            $country_name =  $_POST['country_name'];
            $state_name =  $_POST['state_name'];
            $city_name =  $_POST['city_name'];
            $user_address = $_POST['user_address'];
            $status = $_POST['status'];
            
            $sql = "UPDATE `users` SET user_name='$user_name', user_email='$user_email', user_mobile='$user_mobile', user_country_id='$user_country_id', user_state_id='$user_state_id', user_city_id='$user_city_id', user_location_id='$user_location_id', user_password='$user_password', user_address='$user_address', status = '$status' WHERE id = '$id' ";
            if($conn->query($sql) === TRUE){
               echo "<script>alert('Data Updated Successfully');window.location.href='users.php';</script>";
            } else {
               echo "<script>alert('Data Updation Failed');window.location.href='users.php';</script>";
            }
        }
?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Users</div>
        </div>
        <div class="col s12 m12 l2"></div>
        <div class="col s12 m12 l8">
            <div class="card">
                <div class="card-content">                                
                    <div class="row">
                        <form class="col s12" method="post">
                            <div class="row">
                                <?php $getUsers = getAllDataWhere('users', 'id', $id); $getUsers1 = $getUsers->fetch_assoc(); ?>                                    
                                    <div class="input-field col s6">
                                        <input id="user_name" type="text" class="validate" name="user_name" required value="<?php echo $getUsers1['user_name'];?>">
                                        <label for="user_name">User Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="user_email" type="email" class="validate" name="user_email" required value="<?php echo $getUsers1['user_email'];?>">
                                        <label for="user_email">User Email</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="user_mobile" type="text" class="validate" name="user_mobile" required value="<?php echo $getUsers1['user_mobile'];?>">
                                        <label for="user_mobile">User Mobile</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="user_password" type="password" class="validate" name="user_password" required value="<?php echo $getUsers1['user_password'];?>">
                                        <label for="user_password">User Pssword</label>
                                    </div>
                                     <?php $getCountries = getAllDataCheckActive('lkp_countries',0); ?>
                                <div class="input-field col s6">
                                    <select name="user_country_id" required>
                                        <option value="">Select Country</option>
                                        <?php while($row = $getCountries->fetch_assoc()) {  ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['country_name']; ?></option>
                                        <?php } ?>
                                    </select> 
                                </div>
                                <?php $getStates = getAllDataCheckActive('lkp_states',0); ?>
                                <div class="input-field col s6">
                                    <select name="user_state_id" required>
                                        <option value="">Select State</option>
                                        <?php while($row = $getStates->fetch_assoc()) {  ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['state_name']; ?></option>
                                        <?php } ?>
                                    </select> 
                                </div>
                                <?php $getCities = getAllDataCheckActive('lkp_cities',0); ?>
                                <div class="input-field col s6">
                                    <select name="user_city_id" required>
                                        <option value="">Select City</option>
                                        <?php while($row = $getCities->fetch_assoc()) {  ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['city_name']; ?></option>
                                        <?php } ?>
                                    </select> 
                                </div>
                                    <div class="input-field col s6">
                                        <select name="user_location_id" required>
                                            <option value="" disabled selected>Choose your Location</option>
                                            <option value="0" <?php if($getUsers1['user_location_id'] == 0) { echo "Selected"; }?>>Active</option>
                                            <option value="1" <?php if($getUsers1['user_location_id'] == 1) { echo "Selected"; }?>>In Active</option>                                
                                        </select>                                    
                                    </div>
                                
                                    <div class="input-field col s12">
                                        <textarea id="user_address" class="materialize-textarea" name="user_address" required><?php echo $getUsers1['user_address'];?></textarea>
                                        <label for="user_address">User Address</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select name="status" required>
                                            <option value="" disabled selected>Choose your status</option>
                                            <option value="0" <?php if($getUsers1['status'] == 0) { echo "Selected"; }?>>Active</option>
                                            <option value="1" <?php if($getUsers1['status'] == 1) { echo "Selected"; }?>>In Active</option>
                                            <option value="2" <?php if($getUsers1['status'] == 2) { echo "Selected"; }?>>Member</option>                                       
                                        </select>                                    
                                    </div>

                                </div>
                                <div class="row">                                            
                                    <div class="col s12 l3">                                                
                                        <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn blue m-b-xs">
                                    </div>                                            
                                </div>
                            </form>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col s12 m12 l2"></div>
    </div>
</main>
<?php include_once 'footer.php'; ?>