            <?php include_once 'main_header.php'; ?>
           
            <?php include_once 'side_navigation.php';?>

            <main class="mn-inner">
                <div class="row">
                    
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                 <a href="add_content_pages.php" style="float:right">Add Contents</a>
                                <span class="card-title">Content Pages</span>
                                <?php $getData = getAllData('content_pages'); ?>
                                <table id="example" class="display responsive-table datatable-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description </th>
                                            <th>Status </th>
                                            <th>Actions  </th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                        <?php while ($row = $getData->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $row['title'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                            <td><?php if ($row['status']==0) { echo "Active" ;} else{ echo "In Active" ;}?></td>
                                            <td><a href="edit_content_pages.php?uid=<?php echo $row['id']; ?>">Edit</a></td>
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