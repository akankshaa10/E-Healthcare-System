 <!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
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
  width: 50%;
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
  font-size: 50px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
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

select
{
  width: 500px;
  margin: 20px;

}

select : focus
{
  min-width: 500px;
  width: auto;
}

table {
    border-collapse: separate;
    border-spacing: 40px 30px;
  }

body {
    font-family: Arial, Helvetica, sans-serif;
  background-image: url('bgmyacc1.jpg');
  color: white;
}

h1{
  color: pink;
}

h2{
  color: pink;
}

h3{
  color: pink;
}

h4{
  color: pink;
}

h5{
  color: pink;
}

h6
{
  color: pink;
}

p{
  color: white;
}

label{
  color: white;
}

a{
  color: orange;
}
 
input[type="text"]:disabled {
  background: #dddddd;
}
</style>
</head>
<body style="background-color:LightGray;">
<h1>Cake Hub - Online Cake Ordering Website</h1>
<h6>Free Delivery, Great Discounts, Variety Of Products...</h6>
 


<?php
if(isset($_SESSION["cart_item"]))
    $total_quantity = 0;
    $total_price = 0;
?>  


<?php  
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
    ?>
       
        <?php
        $total_quantity += $item["quantity"];
        $total_price += ($item["price"]*$item["quantity"]);
    }
    ?>


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
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>

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
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>

              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" requireds>
              </div>
            </div>


            <label for="amtpd">Amount Paid</label>
            <input type="text" id="amtpd" name="amtpd" placeholder="2300" value="<?php echo "Rs.800" ?>" required disabled>
          </div>
         
        </div>
        <br><br>
        <input type="submit" value="Make Payment" class="btn">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="reset" value="Cancel Payment" class="btn">
      </form>
    </div>
  </div>
 
</div><br><br>

<hr><legend style="color: yellow"><center>OR</center></legend><br>
   
<table>
  <tr>
    <td>
<a href="https://paytm.com/" style="text-decoration: none;">
    <figure>
   <img src="https://www.logotaglines.com/wp-content/uploads/2016/08/Paytm-Logo-1200x1200.jpg" width="100" height="100"/>
   
 </figure>
</a>
</a>
</a>
</td>

<td>
<a href="https://pay.google.com/gp/w/u/0/home/signup?sctid=3125603313022167" style="text-decoration: none;">
    <figure>
   <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Google-Pay-Logo-Icon-PNG.png" width="100" height="100"/>
   
 </figure>
</a>
</a>
</a>
</td>

<td>
<a href="https://www.phonepe.com/how-to-pay/pay-by-phonepe/web/" style="text-decoration: none;">
    <figure>
   <img src="https://yt3.ggpht.com/ytc/AAUvwnghpgq-Phq3sHMSZ36_J9IQIGDMkbtDmydvSfh0Jw=s900-c-k-c0x00ffffff-no-rj" width="100" height="100"/>
   
 </figure>
</a>
</a>
</a>
</td>

<td>
<a href="https://www.paypal.com/in/webapps/mpp/home?kid=p39982204654&gclid=CjwKCAjwtJ2FBhAuEiwAIKu19jxTnSujcw60D6h-Gju3ZccHtUo2GREHkt-J-uN9GgYPAjatOHinRhoCkXwQAvD_BwE&gclsrc=aw.ds" style="text-decoration: none;">
    <figure>
   <img src="https://i0.wp.com/www.logotaglines.com/wp-content/uploads/2018/11/PayPal-Logo-Tagline.jpg?fit=900%2C900&ssl=1" width="100" height="100"/>
   
 </figure>
</a>
</a>
</a>
</td>

</tr>
</table>

</body>
</html>
