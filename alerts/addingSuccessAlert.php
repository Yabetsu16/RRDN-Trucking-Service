<?php 
    if ($quote) {
        $alert = 'Quote';
    }
    else {
        $alert = 'Message';
    }
?>

<div class="text-center d-flex justify-content-center fixed-top page-sticky" style="top: 50px;">
    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
        <?php echo $alert ?> Sent!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
