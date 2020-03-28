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
                        <input type="text" id="name" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="name">Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <input type="email" id="email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="email">Email</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-5">
                        <i class="fas fa-tag prefix grey-text"></i>
                        <input type="text" id="company" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="company">Company</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-phone prefix grey-text"></i>
                        <input type="tel" id="phone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="phone">Phone</label>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-calendar-alt prefix grey-text"></i>
                        <input type="date" id="pickUpDate" class="form-control">
                        <label data-error="wrong" data-success="right">Pick up Date and Time</label>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-clock prefix grey-text"></i>
                        <input type="time" id="pickUpTime" class="form-control">
                        
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-map-marker prefix grey-text"></i>
                        <input type="text" id="pickUpLocation" class="form-control">
                        <label data-error="wrong" data-success="right" for="pickUpLocation">Pick up Location</label>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-map-marker-alt prefix grey-text"></i>
                        <input type="text" id="dropLocation" class="form-control">
                        <label data-error="wrong" data-success="right" for="dropLocation">Drop Location</label>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form" style="padding-right: 60px;">
                        <i class="fas fa-truck prefix grey-text"></i>
                        <select class="form-control selectpicker ml-5" data-live-search="true">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Barbecue</option>
                        </select>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <i class="fas fa-truck-loading prefix grey-text"></i>
                        <input type="text" id="cargo" class="form-control">
                        <label data-error="wrong" data-success="right" for="cargo">Type of Cargo</label>
                    </div>                    
                </div>
            </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary">Send <i class="fa fa-paper-plane ml-1"></i></button>
                </div>
            </div>
      </form>
    </div>
  </div>
</div>

