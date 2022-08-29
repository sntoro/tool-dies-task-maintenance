<div class="row">
  <div class="col-lg-12 mx-auto">
    <div class="bg-white rounded-lg shadow-sm p-5">
      <p class="alert alert-danger"></p>
      <div class="form-group">
        <input type="text" id='tool_code' name="barcode" autocomplete="off" placeholder="QR Code" required class="form-control" />
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {

    $("#tool_code").on('keyup', function(e) {
      if (e.key === 'Enter' || e.keyCode === 13) {
        let tool_code = $("#tool_code").val();

        if (!tool_code) return;

        axios.get('http://localhost:3000/api/toolControl', {headers: {'Content-Type': 'application/json', 'key': '12345'}})
          .then(function(response) {
            console.log(response);
            let id = response.data[0].id;
            window.location.href = 'scan/transaction/' + id;
          })
          .catch(function(error) {
            console.log(error);
          });

      }
    });

  });
</script>