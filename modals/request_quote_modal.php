<div class="modal fade" id="modalRequestQuote" tabindex="-1" role="dialog" aria-labelledby="modalRequestQuoteLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Request a Quote</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        <div class="modal-body mx-3">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <input placeholder="First name Last name" type="text" name="name" id="name" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="name">Full Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" name="email" id="email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="email">Email</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-5">
                        <i class="fas fa-building prefix grey-text"></i>
                        <input type="text" name="company" id="company" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="company">Company</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-phone prefix grey-text"></i>
                        <input type="tel" name="phone" id="phone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="phone">Phone</label>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-calendar-alt prefix grey-text"></i>
                        <input type="date" name="pick_up_date" id="pick_up_date" class="form-control">
                        <label data-error="wrong" data-success="right" for="pick_up_date">Pick up Date and Time</label>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-clock prefix grey-text"></i>
                        <input type="time" name="pick_up_time" id="pick_up_date" class="form-control">
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-map-marker prefix grey-text"></i>
                        <input type="text" name="pick_up_location" id="pick_up_location" class="form-control">
                        <label data-error="wrong" data-success="right" for="pick_up_location">Pick up Location</label>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-map-marker-alt prefix grey-text"></i>
                        <input type="text" name="drop_location" id="drop_location" class="form-control">
                        <label data-error="wrong" data-success="right" for="drop_location">Drop Location</label>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form" style="padding-right: 60px;">
                        <i class="fas fa-truck prefix grey-text"></i>
                        <select class="form-control selectpicker ml-5" name="truck" data-live-search="true">
                            <option>Freezer Van</option>
                            <option>Cargo Truck</option>
                            <option>Close Van with Wing Doors</option>
                            <option>Close Van (Rear Door)</option>
                        </select>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-truck-loading prefix grey-text"></i>
                        <input type="text" name="cargo" id="cargo" class="form-control">
                        <label data-error="wrong" data-success="right" for="cargo">Type of Cargo</label>
                    </div>                    
                </div>
                <div class="col-md-12">
                    <div class="md-form">
                        <i class="fas fa-pencil-alt prefix grey-text"></i>
                        <textarea id="remarks" name="remarks" class="md-textarea form-control" rows="5"></textarea>
                        <label for="remarks">Remarks</label>
                    </div>                   
                </div>
            </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" name="sendQuote" class="btn btn-primary">Send <i class="fa fa-paper-plane ml-1"></i></button>
                </div>
            </div>
      </form>
    </div>
  </div>
</div>

