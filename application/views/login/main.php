<div class="jumbotron">
        <?php echo validation_errors(); ?>
        <?php
        $attrb = array(
          'autocomplete' => 'off',
          'class' => 'form-horizontal'
      );
        echo form_open('login/process',$attrb);
        ?>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">รหัสนักเรียน</label>
    <div class="col-sm-8">
      <input type="text" name="username" class="form-control" placeholder="กรุณากรอกรหัสนักเรียน" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">รหัสผ่าน</label>
    <div class="col-sm-8">
      <input type="password" name="password" class="form-control" placeholder="กรุณากรอกรหัสผ่าน" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-10">
      <button type="submit" class="btn btn-primary">ลงชื่อเข้าใช้</button>
    </div>
  </div>

</form>
</div>

<div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">ข่าวประชาสัมพันธ์</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <!--- Rs-News --->
            </div>
          </div>
        </div>
      </div>


      <footer class="footer">
        <p>&copy; โรงเรียนสกลนครพัฒนศึกษา</p>
      </footer>

</div>
