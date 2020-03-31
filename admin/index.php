<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RRDN Trucking Service</title>
  <?php include("header.php"); ?>
  <?php include("receiveForm.php"); ?>
  <?php include("../function/showQuotes.php"); ?>
  <?php include("../function/showMessages.php"); ?>
  <?php include("../function/showRemovedQuotes.php"); ?>
  <?php include("../function/showRemovedMessages.php"); ?>
</head>
<body onload="myFunction()">
      <nav class="navbar navbar-expand-lg navbar-dark unique-color-dark text-center">
          <a class="navbar-brand" href="index.php">RRDN Trucking Service</a>
          
      </nav>

  <div class="container-fluid">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="quotes-tab" data-toggle="tab" href="#quotes" role="tab" aria-controls="quotes"
        aria-selected="true">Quotes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages"
        aria-selected="false">Messages</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="quotes" role="tabpanel" aria-labelledby="quotes-tab">
      <?php include("quotes.php");?>
    </div>

    <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">
      <?php include("messages.php") ?>
    </div>
  </div>

  

 <?php include("scripts.php") ?>
  <script>
    $(".nav-link, .navbar-brand, .new-button").click(function() {
      var sectionTo = $(this).attr("href");
      $("html, body").animate({
          scrollTop: $(sectionTo).offset().top
        },
        1500
      );
    });
  </script>

<script>
    
$('#phone').keyup(function(){
    $(this).val($(this).val().replace(/(\d{4})\-?(\d{3})\-?(\d{4})/,'$1-$2-$3'))
});

$('.my-select').selectpicker();
</script>
</body>

</html>