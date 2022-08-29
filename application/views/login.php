<div class="row">
  <div class="col-lg-12 mx-auto">
    <div class="bg-white rounded-lg shadow-sm p-5">
      <p class="alert alert-danger"></p>
      <?php echo form_open('Login/tryLogin', 'class="form-login"'); ?>
      <!-- <label class="label-control">Login</label> -->
      <div class="form-group">
        <input type="number" name="npk" placeholder="NPK" required class="form-control" maxlength="6" autofocus />
      </div>
      <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm">
        Login
      </button>
      </form>
    </div>
  </div>
</div>

