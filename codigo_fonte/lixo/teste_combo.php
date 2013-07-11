<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap 101 Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap-combobox.css" media="screen" rel="stylesheet" type="text/css">
  <script>
  </script>
</head>
<body>


      <div class="row">
        <form>
          <fieldset>
            <legend>Transforms a select box into a autoselecting combobox</legend>
            <label>Turns this</label>
            <select class="input-large">
              <option value="">Choose a State</option>
              <option value="PA">Pennsylvania</option>
              <option value="CT">Connecticut</option>
              <option value="NY">New York</option>
              <option value="MD">Maryland</option>
              <option value="VA">Virginia</option>
            </select>
              <label>Into this</label>
              <select class="combobox input-large" name="normal">
                <option value="">Choose a State</option>
                <option value="PA">Pennsylvania</option>
                <option value="CT">Connecticut</option>
                <option value="NY">New York</option>
                <option value="MD">Maryland</option>
                <option value="VA">Virginia</option>
              </select>
          </fieldset>
        </form>
      </div>
 <script src="js/bootstrap-combobox.js" type="text/javascript"></script>
    <script type="text/javascript">
      //<![CDATA[
        $(document).ready(function(){
          $('.combobox').combobox()
        });
      //]]>
    </script>
</body>
</html>