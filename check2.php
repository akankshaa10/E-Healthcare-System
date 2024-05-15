<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-color: black;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=number] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=date] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: dodgerblue;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color:  dodgerblue;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
h1
{
  color: pink;
}


</style>
</head>
<body>
<form action="ty.php" method="post">
  <h1><img src="https://images.vexels.com/media/users/3/128044/isolated/preview/94f0b955807b088de5dc109c019b6fc9-health-care-medical-sign-by-vexels.png" style="width:10%">E HEALTHCARE ONLINE CONSULTATION AND MEDICAL SUBSCRIPTION</h1>
 
<div class="row">
  <div class="col-75">
    <div class="container">
    
          <div class="col-50">
            <h1>Make Payment</h1>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i> 

            </div>

              
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>

            <label for="ccnum">Credit card number</label>
            <input type="number" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>

            <label for="cardtyp">Credit Card Type</label>
            <select name="cardtyp" id="cardtyp" width="500%" style="padding: 0.5%">
              <option value="selec">Please Select</option>
              <option value="visa">Visa</option>
              <option value="amexx">American Express</option>
              <option value="disc">Discover</option>
              <option value="mastcard">Mastercard</option>
            </select>
            <br><br>

            <label for="expmonth">Exp Month</label>
            
                        <select name="expmonth" id="expmonth" width="700%" style="padding: 0.8%">
              <option value="selec">Please Select</option>
              <option value="january">january</option>
              <option value="feberary">feberary</option>
              <option value="march">march</option>
              <option value="april">april</option>
               <option value="may"> may</option>
              <option value="june"> june </option>
              <option value="july"> july </option>
              <option value="august"> august </option>
              <option value="september"> september </option>
               <option value="octomber"> octomber </option>
              <option value="november"> november </option>
              <option value="december"> december</option>
             
            </select>
            <br><br>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="date" id="expyear" name="expyear" placeholder="2018" required>
              </div>

              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="number" id="cvv" name="cvv" placeholder="352" requireds>
              </div>
            </div>


            <label for="amtpd">Amount Paid</label>
            <input type="text" id="amtpd" name="amtpd" placeholder="2300" value="<?php echo "Rs.500" ?>" required disabled>
          </div>
         
        </div>
        <br><br>
        <input type="submit" value="Make Payment" class="btn"> 
      </form>
    </div>
  </div>
    </div>
  </div>
</div>

</body>
</html>
