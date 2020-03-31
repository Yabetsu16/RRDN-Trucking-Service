<div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            
          <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <button type="submit" name="hideMessage" class="btn btn-default float-right">Go back to Messages</button>
                </form>
            </div>
            <?php if ($result_removed_messages->num_rows <= 0) { ?>
              <div class="col-md-12 mt-5">
                <div class="jumbotron text-center">
                  <h1 class="display-3">There are no removed quotes.</h1>
                </div>
              </div>
            <?php } 
            else { ?>
            <?php 
              while($row = $result_removed_messages->fetch_assoc()) { 
                $id = $row['remove_message_id'];
                $name = $row['name'];
                $email = $row['email'];
                $subject = $row['subject'];
                $message = $row['message'];
                $status = $row['status'];
              ?>
            <div class="col-md-4 mb-5">

              <div class="card">

                <div class="card-header text-center">
                  <h3 class="card-title"><?php echo $name; ?></h3>
                </div>

                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-envelope fa-lg mr-4"></i> <?php echo $email; ?>
                    </li>
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-building fa-lg mr-4"></i> <?php echo $subject; ?>
                    </li>
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-comment-alt fa-lg mr-4"></i> <?php echo $message; ?>
                    </li>
                  </ul>
                </div>
                
                <div class="card-footer text-center">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="submit" name="restoreMessage" class="btn btn-success">Restore</button>
                        <button type="submit" name="permanentMessage" class="btn btn-danger">Permanently Remove</button>
                    </form>
                </div>

              </div>
            </div>
              
            <?php } 
            } ?>
          </div>
        </div>
      </div>