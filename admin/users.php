            <?php include_once 'main_header.php'; ?>
           
            <?php include_once 'side_navigation.php';?>

            <main class="mn-inner">
                <div class="row">
                    
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                 <a href="add_users.php" style="float:right">Add User</a>
                                <span class="card-title">Users</span>
                                <?php $getData = getAllData('users'); ?>
                                <table id="example" class="display responsive-table datatable-example">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>User Email </th>
                                            <th>User Mobile </th> 
                                            <th>User Address </th>
                                            <th>Created Date</th>                                            
                                            <th>Actions</th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                        <?php while ($row = $getData->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $row['user_name'];?></td>
                                            <td><?php echo $row['user_email'];?></td>
                                            <td><?php echo $row['user_mobile'];?></td>
                                            <td><?php echo $row['user_address'];?></td>
                                            <td><?php echo $row['created_at'];?></td>
                                            <td><a href="edit_users.php?uid=<?php echo $row['id'];?>"><i class="material-icons dp48">edit</i></a><a class="click_view" data-modalId="<?php echo $row['id']?>" href="#"><i class="material-icons dp48">pageview</i></a><a href="#"><i class="material-icons dp48">delete</i></a></td>
                                            <div id="myModal_<?php echo $row['id']; ?>" class="modal fade" >
                                            <div class="modal-dialog" Style="margin-top:10%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h3 class="modal-title"><b>User Information</b></h3>
                                                    </div>
                                                    <div class="modal-body" >
                                                        <h5 class="modal-title-set"><b>Name :</b><?php echo $row['user_name'];?></h5>
                                                        <h5 class="modal-title-set"><b>Email :</b><?php echo $row['user_email'];?></h5>
                                                        <h5 class="modal-title-set"><b>Mobile :</b><?php echo $row['user_mobile'];?></h5>
                                                        <h5 class="modal-title-set"><b>Country :</b><?php $country =  getIndividualDetails($row['user_country_id'],'lkp_countries','id'); echo $country['country_name']?></h5>
                                                        <h5 class="modal-title-set"><b>State :</b><?php $country =  getIndividualDetails($row['user_state_id'],'lkp_states','id'); echo $country['state_name']?></h5>
                                                        <h5 class="modal-title-set"><b>City :</b><?php $country =  getIndividualDetails($row['user_city_id'],'lkp_cities','id'); echo $country['city_name']?></h5>
                                                        <h5 class="modal-title-set"><b>Location :</b><?php $country =  getIndividualDetails($row['user_location_id'],'lkp_locations','id'); echo $country['location_name']?></h5>
                                                        <h5 class="modal-title-set"><b>Address :</b><?php echo $row['user_address'];?></h5>
                                                        <h5 class="modal-title-set"><b>Status :</b><?php if ($row['status']==1){echo 'Active';} else {echo  'InActive';}?></h5>
                                                    </div>
                                                    <div class="modal-footer" >
                                                          <button type="button" class="btn" data-dismiss="modal" style="background-color:#f00; color:#fff">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        </tr>    

                                         
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
         <?php include_once 'footer.php'; ?>
         <!-- model pop-up Script for all pages with bootstrap js -->
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".click_view").click(function(){
                    var modalId = $(this).attr('data-modalId');
                    $("#myModal_"+modalId).modal('show');  
                });                  
            });
        </script>
