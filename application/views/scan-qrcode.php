<div class="row">
  <div class="col-lg-12 mx-auto">
    <div class="bg-white rounded-lg shadow-sm p-5">
      <p id="error-msg" class="alert alert-danger"></p>
      <div class="form-group">
        <input type="text" id='tool_code' name="barcode" autocomplete="off" placeholder="QR Code" required class="form-control" />
      </div>
    </div>
  </div>
</div>

<script>
  const host = 'http://localhost:5000/api';

  $(document).ready(function() {
    $("#error-msg").hide();

    $("#tool_code").on('keyup', function(e) {
      if (e.key === 'Enter' || e.keyCode === 13) {
        let tool_code = $("#tool_code").val();
        $("#error-msg").hide();

        if (!tool_code)
          return;

        axios.get(`${host}/toolControl/${tool_code}`, {
            headers: {
              'Content-Type': 'application/json',
              'key': '12345'
            }
          })
          .then(function(response) {

            if (!response.data){
              $("#error-msg").show();
              $("#error-msg").text("Barcode tidak terdaftar");
              $("#tool_code").val('');
              return;
            }else{
              window.location.href = 'scan/transaction/' + response.data.tool_code;
            }
              
          })
          .catch(function(error) {
            console.log(error);
          });

      }
    });

  });
</script>