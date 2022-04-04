<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://rawcdn.githack.com/franz1628/validacionKeyCampo/bce0e442ee71a4cf8e5954c27b44bc88ff0a8eeb/validCampoFranz.js"></script>
  <script>
    $(document).ready(function() {
      $('#nombre').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou123456789');
      $('#promedio').validCampoFranz('0123456789.');

    });
  </script>
  <title>Hello, world!</title>
</head>
<body>
  
  
    <div class="form-outline mb-4">
      <input type="text" id="nombre" value='' class="form-control" required/>
      <label class="nombre" for="form1Example1" >nombre</label>
    </div>
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="cedula" id="cedula" class="form-control" required/>
      <label class="cedula" for="cedula">cedula</label>
    </div>
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="promedio" id="promedio" class="form-control" required/>
      <label class="promedio" for="promedio">promedio</label>
    </div>
    <div class="form-outline mb-4">
      <input type="file" id="imagen" class="form-control" required/>
      <label class="imagen" for="cedula">imagen</label>
    </div>
    <div class="form-outline mb-4">
      <input type="radio" id="si" /> SI
      <input type="radio" id="no" /> NO
    </div>

    <select name="select" required>
      <option value="value1">Value 1</option>
      <option value="value2" selected>Value 2</option>
      <option value="value3">Value 3</option>
    </select>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
          <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
          <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
          <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
          <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
          <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
      </div>
    </div>
    <!-- Submit button -->
    <input type="submit" id='submit' name='submit' >
  

</body>

</html>