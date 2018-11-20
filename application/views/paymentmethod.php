<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--Content-->
<div class="paymentformmain">
         <h1>Fill the following Below Details</h1>
        <form class="paymentformvalidation" name="formvalidation">
          <label>First Name</label>
          <input type="firstname" name="firstname" placeholder="First Name"/>
          <label>Last Name</label>
          <input type="lastname" name="lastname" placeholder="Last Name"/>
          <label>Email</label>
          <input type="email" name="email" placeholder="Email"/>
          <label>Password</label>
          <input type="password" name="password" placeholder="Password"/>
          <label>Gender</label>
          <div class="genderM">
          <input type="radio" name="gender" value="male"/><span>Male</span>
          </div>
          <div class="genderM">
          <input type="radio" name="gender" value="female"/><span>Female</span>
          </div>
          <label>Age<label>
          <select>
            <option>Select Years</option>
            <option>10</option>
            <option>11</option>
          </select>
          <label>Country</label>
          <select>
            <option>Select Country</option>
            <option>India</option>
            <option>USA</option>
            <option>UK<option>
          </select>
          <label>State</label>
          <select>
            <option>Select State</option>
          </select>
          <label>District</label>
          <select>
            <option>Select District</option>
          </select>
         <label>Address</label>
         <textarea rows="10" col="10"></textarea>
         <label>Mobile Number</label>
         <input type="mobilenumber" name="mobilenumber" placeholder="Mobile Number"/>
         <button>Submited</button>
        </form>
      </div>
<!--End Content-->
<script src="<?php echo base_url() ?>media/assets/data/country_state_city_json.js"></script>
<script>
$(document).ready(function() {
    alert('ok');
});
</script>