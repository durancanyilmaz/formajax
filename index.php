<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<div class="container">
  <div class="row">
    <h1>Forms with automatic ajax</h1>
    <form action="form-result.php" class="formajax" method="post"  enctype="multipart/form-data">
      <input type="hidden" name="id" value="123">
      <div class="row">
        <input type="text" class="form-control mx-1 col" name="name" value="post method with hidden input">
        <button class="btn btn-sm btn-primary col">ajax send</button>
      </div>
    </form>
    <form action="form-result.php" class="formajax2" method="get"  enctype="multipart/form-data">
      <input type="hidden" name="id" value="123">
      <div class="row">
        <input type="text" class="form-control mx-1 col" name="name" value="get method with hidden input">
        <button class="btn btn-sm btn-primary col">ajax send</button>
      </div>
    </form>

    <form action="form-result.php" class="formajax2" method="post"  enctype="multipart/form-data">
      <div class="row">
        <input type="text" class="form-control mx-1 col" name="name" value="post method with file">
        <input type="file" class="form-control mx-1 col" name="file_name" value="">
        <button class="btn btn-sm btn-primary col">ajax send</button>
      </div>
    </form>

    <form action="form-result.php" class="formajax2" method="get"  enctype="multipart/form-data">
      <div class="row">
        <input type="text" class="form-control mx-1 col" name="name" value="get method with file, FILE NOT WORKING!!">
        <input type="file" class="form-control mx-1 col" name="file_name" value="">
        <button class="btn btn-sm btn-primary col">ajax send</button>
      </div>
    </form>

    <form action="not-found-page.php" class="formajax2" method="post"  enctype="multipart/form-data">
      <div class="row">
        <input type="text" class="form-control mx-1 col" name="name" value="send error">
        <input type="file" class="form-control mx-1 col" name="file_name" value="">
        <button class="btn btn-sm btn-danger col">show error</button>
      </div>
    </form>

    <form action="form-result.php" class="formajax2" method="post"  enctype="multipart/form-data">
      <div class="row">
        <input type="text" class="form-control mx-1 col" name="name" value="form with select">
        <select class="form-control col mx-1" name="select_name">
          <option disabled selected>Please select</option>
          <option value="123">test</option>
          <option value="456">test2</option>
        </select>
        <button class="btn btn-sm btn-primary col">ajax send</button>
      </div>
    </form>

    <form action="form-result.php" class="formajax2" method="post"  enctype="multipart/form-data">
      <div class="row">
        <input type="text" class="form-control mx-1 col" name="name" placeholder="with required inputs" required>
        <input type="file" class="form-control mx-1 col" name="file_name" required value="">
        <button class="btn btn-sm btn-primary col">ajax send</button>
      </div>
    </form>


    <script src="formajax.js" charset="utf-8"></script>
    <script>
      formajax('.formajax','result',true,false,true);
      formajax('.formajax2','',true,false,false);
    </script>

  </div>
</div>
