<?php include_once 'main_header.php'; ?>
           
<?php include_once 'side_navigation.php';?>
<?php  
if (!isset($_POST['submit']))  {
            echo "";
} else  {
    //Save data into database
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    // $price = $_POST['price'];
    // $special_price = $_POST['special_price'];
    // $selling_price = $_POST['selling_price'];
    //$discount_percentage = $_POST['discount_percentage'];
    //$weight_type_id = $_POST['weight_type_id'];
    $deal_start_date = $_POST['deal_start_date'];
    $deal_end_date = $_POST['deal_end_date'];
    $quantity = $_POST['quantity'];
    $minimum_order_quantity = $_POST['minimum_order_quantity'];
    $key_features = $_POST['key_features'];
    $product_info = $_POST['product_info'];
    $about = $_POST['about'];
    $availability_id = $_POST['availability_id'];
    $status = $_POST['status'];
    $created_at = date("Y-m-d h:i:s");
    $created_by = $_SESSION['admin_user_id'];
    //save product images into product_images table    
    
     $sql1 = "INSERT INTO products (`product_name`,`category_id`, `deal_start_date`, `deal_end_date`, `quantity`, `minimum_order_quantity`, `key_features`,`product_info`,`about`,`availability_id`,`status`,`created_by`,`created_at`) VALUES ('$product_name','$category_id', '$deal_start_date', '$deal_end_date', '$quantity', '$minimum_order_quantity', '$key_features','$product_info','$about','$availability_id','$status','$created_by','$created_at')";
     $result1 = $conn->query($sql1);
     $last_id = $conn->insert_id;

    $product_weights = $_REQUEST['weight_type_id'];
    foreach($product_weights as $key=>$value){

        $product_weights1 = $_REQUEST['weight_type_id'][$key];
        $price = $_REQUEST['price'][$key];      
        $sql = "INSERT INTO product_weight_prices ( `product_id`,`weight_type_id`,`price`) VALUES ('$last_id','$product_weights1','$price')";
        $result = $conn->query($sql);
    }

    $product_images = $_FILES['product_images']['name'];
    foreach($product_images as $key=>$value){

        $product_images1 = $_FILES['product_images']['name'][$key];
        $file_tmp = $_FILES["product_images"]["tmp_name"][$key];
        $file_destination = '../uploads/product_images/' . $product_images1;
        move_uploaded_file($file_tmp, $file_destination);        
        $sql = "INSERT INTO product_images ( `product_id`,`product_image`) VALUES ('$last_id','$product_images1')";
        $result = $conn->query($sql);
    }
     
     if( $result1 == 1){
    echo "<script>alert('Data Updated Successfully');window.location.href='products.php';</script>";
    } else {
       echo "<script>alert('Data Updation Failed');window.location.href='products.php';</script>";
    }
}
?>
<main class="mn-inner">
    <div class="row">
        <div class="col s12">
            <div class="page-title">Products</div>
        </div>
        <div class="col s12 m12 l2"></div>
        <div class="col s12 m12 l8">
            <div class="card">
                <div class="card-content">                                
                    <div class="row">
                        <form class="col s12" method="post" enctype="multipart/form-data">
                            <div class="row">
                               
                                <?php
                                    $getCategories = getAllDataCheckActive('categories',0);                             
                                    $getWeights = getAllDataCheckActive('product_weights',0);
                                ?>
                                <div class="input-field col s12">
                                    <select name="category_id" required>
                                        <option value="">Select Category</option>
                                        <?php while($row = $getCategories->fetch_assoc()) {  ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
                                        <?php } ?>
                                    </select> 
                                </div>
                                <div class="input-field col s12">
                                    <input id="product_name" type="text" class="validate" name="product_name" required>
                                    <label for="product_name">Product Name</label>
                                </div>
                                
                                <div class="input-field col s12">
                                   <input id="product_price" type="text" class="validate" name="product_price" required>
                                   <label for="product_price">Product Price</label>
                                </div>
                              
                                <div class="input-field col s12">
                                   <input id="selling_price" readonly type="text" class="validate" name="selling_price[]" required>
                                   <label for="selling_price">Selling Price</label>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <label for="deal_start_date">Deal Start date</label>
                                        <input id="deal_start_date" type="text" class="datepicker">
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col s12">
                                            <label for="deal_end_date">Deal End date</label>
                                            <input id="deal_end_date" type="text" class="datepicker">
                                        </div>
                                    </div>
                                <div class="input-field col s6">
                                    <input id="quantity" type="text" class="validate" name="quantity" required>
                                    <label for="quantity">Quantity</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="minimum_order_quantity" type="text" class="validate" name="minimum_order_quantity" required>
                                    <label for="minimum_order_quantity">Minimum Order Quantity</label>
                                </div>
                                
                                <div class="input-field col s12">
                                    <span for="keyfet" class="col-lg-3 col-sm-3 control-label">Key Features</span> <br /><br />
                                    <div class="col-lg-9">
                                        <textarea id="key_features" name="key_features" required></textarea>                                        
                                    </div>
                                </div>
                                        
                                <div class="input-field col s12">
                                        <span for="name" class="col-lg-3 col-sm-3 control-label">Product Info</span> <br /><br />
                                        <div class="col-lg-9">
                                            <textarea name="product_info" required id="product_info"></textarea>                                        
                                        </div>
                                </div>  
                                
                                <div class="input-field col s12">
                                        <span for="name" class="col-lg-3 col-sm-3 control-label">About</span> <br /><br />
                                        <div class="col-lg-9">
                                            <textarea name="about" required id="about"></textarea>
                                        </div>
                                </div>
                                    
                                <div class="input-field col s12">
                                    <select name="availability_id" required>
                                        <option value="" disabled selected>Avalability</option>
                                        <option value="0">In Stock</option>
                                        <option value="1">Out Of Stock</option>                                        
                                    </select> 
                                </div>

                                <div class="input-field col s12">
                                    Product Images : <br /><br />
                                    <div class="input_fields_wrap">                                        
                                        <div><input type="file" name="product_images[]" requird> <a style="cursor:pointer" class="add_field_button">Add More Fields</a> </div><br/>
                                    </div>

                                </div>

                                <div class="input-field col s12">
                                    <select name="status" required>
                                        <option value="" disabled selected>Choose your status</option>
                                        <option value="0">Active</option>
                                        <option value="1">In Active</option>                                        
                                    </select>                                    
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

<?php include_once('ck_editor.php'); include_once 'footer.php'; ?>

<script type="text/javascript">
$(document).ready(function() {
    
    var max_fields      = 5; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="file" name="product_images[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>