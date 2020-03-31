<div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            
          <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <button type="submit" name="showQuote" class="btn btn-default float-right">Show removed quotes</button>
                </form>
            </div>
            <?php if ($result->num_rows <= 0) { ?>
              <div class="col-md-12 mt-5">
                <div class="jumbotron text-center">
                  <h1 class="display-3">There are no quotes sent.</h1>
                </div>
              </div>
            <?php } 
            else { ?>
            <?php 
              while($row = $result->fetch_assoc()) { 
                $id = $row['quote_id'];
                $name = $row['name'];
                $email = $row['email'];
                $company = $row['company'];
                $phone = $row['phone'];
                $pick_up_date = $row['pick_up_date'];
                $pick_up_time = date("h:i a", strtotime($row['pick_up_time']));
                $pick_up_location = $row['pick_up_location'];
                $drop_location = $row['drop_location'];
                $truck = $row['truck'];
                $service = $row['service'];
                $remarks = $row['remarks'];
                $status = $row['status'];
              ?>
            <div class="col-md-4 mb-5">

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
                      <div class="md-v-line"></div><i class="fas fa-building fa-lg mr-4"></i> <?php echo $company; ?>
                    </li>
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-phone fa-lg mr-4"></i> <?php echo $phone; ?>
                    </li>
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-calendar-alt fa-lg mr-4"></i> <?php echo $pick_up_date; ?>
                    </li>
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-clock fa-lg mr-4"></i> <?php echo $pick_up_time; ?>
                    </li>
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-map-marker fa-lg mr-4"></i> <?php echo $pick_up_location; ?>
                    </li>
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-map-marker-alt fa-lg mr-4"></i> <?php echo $drop_location; ?>
                    </li>
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-truck fa-lg mr-4"></i> <?php echo $truck; ?>
                    </li>
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-truck-loading fa-lg mr-4"></i> <?php echo $service; ?>
                    </li>
                    <li class="list-group-item">
                      <div class="md-v-line"></div><i class="fas fa-pencil-alt fa-lg mr-4"></i> <?php echo $remarks; ?>
                    </li>
                  </ul>
                </div>
                
                <div class="card-footer text-center">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <input type="hidden" name="status" value="<?php echo $status ?>">
                        <button type="submit" name="markQuote" class="btn btn-primary"> 
                            <?php if ($status == 0) { ?> Mark <i class="fa fa-check" aria-hidden="true"></i></button> 
                            <?php } else { ?> Unmark <i class="fa fa-times" aria-hidden="true"></i></button> <?php } ?>
                        <button type="submit" name="removeQuote" class="btn btn-danger">Remove</button>
                    </form>
                </div>

              </div>
            </div>
              
            <?php } 
            } ?>
          </div>
        </div>
      </div>