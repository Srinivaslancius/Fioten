<?php include_once 'main_header.php'; ?>
           
<?php include_once 'side_navigation.php';?>
<?php  
 if (!isset($_POST['submit']))  {
            echo "";
    } else  {            
    $id=1;
    $admin_title = $_POST['admin_title'];  
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $footer_text = $_POST['footer_text'];
    $address = $_POST['address'];
    if($_FILES["logo"]["name"]!='') {
                                          
        $logo = $_FILES["logo"]["name"];        
        $target_dir = "../uploads/logo/";
        $target_file = $target_dir . basename($_FILES["logo"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        $getImgUnlink = getImageUnlink('logo','site_settings','id',$id,$target_dir);
        //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder

        if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
            $sql = "UPDATE `site_settings` SET admin_title = '$admin_title', email='$email', mobile='$mobile', logo = '$logo', footer_text='$footer_text', address='$address' WHERE id = '$id' ";
            if($conn->query($sql) === TRUE){
               echo "<script>alert('Data Updated Successfully');window.location.href='site_settings.php';</script>";
            } else {
               echo "<script>alert('Data Updation Failed');window.location.href='site_settings.php';</script>";
            }
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }  else {
        $sql = "UPDATE `site_settings` SET admin_title = '$admin_title', email='$email', mobile='$mobile', footer_text='$footer_text', address='$address' WHERE id = '$id' ";
        if($conn->query($sql) === TRUE){
           echo "<script>alert('Data Updated Successfully');window.location.href='site_settings.php';</script>";
        } else {
           echo "<script>alert('Data Updation Failed');window.location.href='site_settings.php';</script>";
        }
    }   
    
}
?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Site Settings</div>
        </div>
        <div class="col s12 m12 l2"></div>
        <div class="col s12 m12 l8">
            <div class="card">
                <div class="card-content">                                
                    <div class="row">
                        <form class="col s12" method="post" enctype="multipart/form-data">
                            <div class="row">
                            <?php $getSiteSettings = getAllDataWhere('site_settings', 'id', 1); 
                            $getSiteSettingsData = $getSiteSettings->fetch_assoc(); ?>
                                <div class="input-field col s12">
                                    <input id="title" type="text" class="validate" name="admin_title" required value="<?php echo $getSiteSettingsData['admin_title'];?>">
                                    <label for="title">Admin Title</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="title" type="text" class="validate" name="email" required value="<?php echo $getSiteSettingsData['email'];?>">
                                    <label for="title">Email</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="title" type="text" class="validate" name="mobile" required value="<?php echo $getSiteSettingsData['mobile'];?>">
                                    <label for="title">Mobile</label>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-lg-3 col-sm-3 control-label"></label>
                                    <div class="col-lg-9">
                                        <img src="<?php echo $base_url . 'uploads/logo/'.$getSiteSettingsData['logo'] ?>" height="100" width="100"/>
                                    </div>
                                </div> 
                                
                                <div class="input-field col s6">
                                   Image : <input type="file" name="logo" id="logo">                                     
                                </div>
                                <div class="input-field col s12">
                                    <input id="title" type="text" class="validate" name="footer_text" required value="<?php echo $getSiteSettingsData['footer_text'];?>">
                                    <label for="title">Footer Text</label>
                                </div> 
                                <div class="input-field col s12">
                                    <input id="title" type="text" class="validate" name="address" required value="<?php echo $getSiteSettingsData['address'];?>">
                                    <label for="title">Address</label>
                                </div>                        
                                <div class="input-field col s12">
                                    <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn teal">
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