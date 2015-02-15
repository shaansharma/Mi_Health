<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medical Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <style>
  .titlesDiv {
	  float:left;
  }
  .ontarioDiv {
	  float:right;
  }
    .imageDiv {
	  float:left;
  }
  .divTable {
	  float:right;
	  width: 63%;
  }
  </style>
</head>
<body>

<div class="container">
<div class="titlesDiv">
  <h1>Medical Record</h1>
  <h4>All medical information listed below.</h4>
</div>
<div class="ontarioDiv">
  <img src="Ontario Logo.jpg" align="right" height="50" width="142" />
</div>

<br /><br /><br /><br /><br /><br />
  <div class="imageDiv"><img src="healthCardFront.jpg" height="250" width="400"/><br />
	  <img src="healthCardBack.jpg" height="250" width="400" />
  </div>


  <div class="divTable">
	<table class="table" >
    <tbody>
      <tr class="success">
        <td>Name:</td>
        <td><?php echo $_POST["name"]; ?><form>
        <?php $name="Shaan Sharma"; ?>
        <input type="text"
        class = "form-control" value="Anita Jean Walker" />
        <input type ="button" class="btn" value="update" method="POST" name="nameUpdate" /></td>
        </form>
      </tr>
      <tr class="success">
        <td>Sex:</td>
        <td><form>
        <input type="text"
        class = "form-control" value="F" />
        <input type ="button" class="btn" value="update" method="POST" name="sexUpdate" /></td>
        </form>
      </tr>
      <tr class="success">
        <td>Born:</td>
        <td><form>
        <input type="text"
        class = "form-control" value="1981-12-15" />
        <input type ="button" class="btn" value="update" method="POST" name="bornUpdate" /></td>
        </form>
      </tr>
      <tr class="success">
        <td>Expiry Date:</td>
        <td><form>
        <input type="text"
        class = "form-control" value="2017-12-15" />
        <input type ="button" class="btn" value="update" method="POST" name="expUpdate" /></td>
        </form>
      </tr>
      <tr class="info">
        <td>Address:</td>       
        <td><?php echo $_POST["address"]; ?>
         <input type="text" class="form-control" value="123 Some Street" />
        <input type="button" class="btn" value="update" method="POST" name="addressUpdate" />
        </td>
        </form>
      </tr>
      <tr class="info">
      <td>Phone Number:</td>
      <td><?php echo$_POST["phonenumber"]; ?>
      <input type="text" class = "form-control" value="905-888-1234" />
      <input type="button" class="btn" value="update" method="POST" name = "phoneUpdate" />
      </td>
      </tr>
      <tr class="success">
        <td>OHIP:</td>
        <td><form>
        <input type="text"
        class = "form-control" value="5584-486-674-YM" />
        <input type ="button" class="btn" value="update" method="POST" name="ohipUpdate" /></td>
        </form>
      </tr>
      <tr class="danger">
        <td>Emergency Contact:</td>
        <td><form>
        Name:<input type="text" class = "form-control" value="John Doe" />
        Phone Number:<input type="text" class = "form-control" value="416-888-1234" />
        Relationship:<input type="text" class = "form-control" value="Father" />
        <input type ="button" class="btn" value="update" method="POST" name="donorUpdate" /></td>
        </form>
      </tr>
      <tr class="danger">
        <td>Donor:</td>
        <td><form>
        <input type="text"
        class = "form-control" value="9Z" />
        <input type ="button" class="btn" value="update" method="POST" name="donorUpdate" /></td>
        </form>
      </tr>
      <tr class="danger">
        <td>Allergies</td>
        <td><form>
        <ul>
        <li><?php echo $_POST["allergies"]; ?>
        <input type="text" class="form-control" value="Penicillin" /></li>
        <li><input type="text" class="form-control" value="Grass" /></li>
        <span id="responce"></span>
<script>
var countBox =1;
var boxName = 0;
function addInput()
{
     var boxName="textBox"+countBox; 
document.getElementById('responce').innerHTML+='<input type="text" class="form-control" id="'+boxName+'"  />';
     countBox += 1;
}
</script>
	<input type="button" class="btn" value="add" method="POST" name = "addAl" onclick="addInput()" />
        <input type="button" class="btn" value="update" method="POST" name = "allergyUpdate" />
        </ul>
        </td>
        </form>
      </tr>
    </tbody>
  </table>
  </div>

  
</div>

</body>
</html>
