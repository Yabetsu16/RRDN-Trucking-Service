<div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            
          <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <button type="submit" name="showMessage" class="btn btn-default float-right">Show removed messages</button>
                </form>
            </div>
            <?php if ($result_message->num_rows <= 0) { ?>
              <div class="col-md-12 mt-5">
                <div class="jumbotron text-center">
                  <h1 class="display-3">There are no quotes sent.</h1>
                </div>
              </div>
            <?php } 
            else { ?>
            <?php 
              while($row = $result_message->fetch_assoc()) { 
                $id = $row['message_id'];
                $name = $row['name'];
                $email = $row['email'];
                $subject = $row['subject'];
                $message = $row['message'];
                $status = $row['status'];
              ?>
            <div class="col-md-3 mb-5">

              <div class="card">

                <div class="card-header text-center <?php if ($status == 0) { echo 'bg-danger text-white';} else { echo 'bg-success text-white'; }?>">
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
                        <input type="hidden" name="status" value="<?php echo $status ?>">
                        <button type="submit" name="markMessage" class="btn btn-primary"> 
                            <?php if ($status == 0) { ?> Mark as Readed <i class="fa fa-check" aria-hidden="true"></i></button> 
                            <?php } else { ?> Unmark as Readed <i class="fa fa-times" aria-hidden="true"></i></button> <?php } ?>
                        <button type="submit" name="removeMessage" class="btn btn-danger">Remove</button>
                    </form>
                </div>

              </div>
            </div>
              
            <?php } 
            } ?>
          </div>
        </div>
      </div>