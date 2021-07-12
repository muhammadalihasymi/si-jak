




  <title>Upload Data Pajak</title>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 


<body>

 <div class="container">

  <h3 align="center">UPLOAD DATA PAJAK</h3>

  <form method="post" id="import_form" enctype="multipart/form-data">

     <p><label>Pilih File Excel</label>

     <input type="file" name="file" id="file" required accept=".xls, .xlsx, .csv" /></p>

     <br />

     <input type="submit" id="import" name="import" value="import" class="btn btn-info" />

  </form>

  <br />

  <div class="table-responsive" id="customer_data">

  </div>

 </div>

</body>

</html>

 

<script>

$(document).ready(function(){ 

  function load_data(){

    $.ajax({

      url:"<?php echo base_url();?>index.php/import/fetch",

      method:"POST",

      success:function(data){

        $('#customer_data').html(data);

        console.log(data);

      }

    })

  }

  load_data();

 

  $('#import_form').on('submit', function(event){

    event.preventDefault();

    $.ajax({

      url:"<?php echo base_url();?>index.php/import/import",

      method:"POST",

      data:new FormData(this),

      contentType:false,

      cache:false,

      processData:false,

      success:function(data){

        $('#file').val('');

        load_data();

      }

    })

  });

});

</script>