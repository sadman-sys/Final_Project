<?php include 'admin_header.php';?>






<html>

<head>
<title> BOOK TICKET- ONLINE BUS TICKET SYSTEM </title>
</head>
<body>
<center>
<h1> Book Bus Ticket</h1>
<table   align="center">
 <tr>
<td>
From:
</td>
<td>
<select>
   <option>Dhaka to  </option>
   <option>Dinajpur to  </option>
   <option> Thakurgaon to </option>
   <option> Satkhira  to </option>
   <option> Hili  to </option>
   <option> Bandarban to </option>
   <option> Rangamati to </option>
   <option> Kushtia to </option>
   <option> Panchagor to </option>
   </select>
</td>
</tr>

 <tr>
<td>
To:
</td>
<td>
<select>
   <option>Dinajpur </option>
   <option>Thakurgaon </option>
   <option> Satkhira</option>
   <option> Hili</option>
   <option> Bandarban</option>
   <option>Rangamati </option>
   <option> Kushtia</option>
   <option> Panchagor</option>
   <option> Cox's Bazar</option>
   </select>
</td>



<tr>
<td>
Date:
</td>
<td>
<?php


$months = array("January", "February", "March", "Apil", "May", "June", 
                "July", "August", "September", "October", "November", "Descember");
$yearFrom = 2020; 

//$yearFrom = date("Y")-80; 



echo '<select name="year" id="year">';
for ($yearFrom; $yearFrom <= date("Y"); $yearFrom++) {
  
    echo "<option value=\"$yearFrom\">$yearFrom</option>";
}
echo '</select>';


echo '<select name="month" id="month">';
foreach($months as $key=>$value) {
  
    $numericMonth = $key + 1;
    echo "<option value=\"$numericMonth\">$value</option>";
}
echo '</select>';


echo '<select name="day" id="day">';
for ($i=1; $i <= 31; $i++) {

    echo "<option value=\"$i\">$i</option>";
}
echo '</select>';
?>

</tr>

<td>
Passengers:
</td>
<td>
<select>
   <option> Male </option>
   <option> Female</option>
   </select>
</td>
</tr>
  <tr>
<td>
Bus Type:
</td>
<td>
<select>
   <option>AC </option>
   <option> NON AC</option>
   </select>
</td>
</tr>

  <tr>
  
    <tr>
<td>
Seating Type:
</td>
<td>
<select>
   <option>A1 to A10 </option>
   <option>B1 to B10 </option>
   <option>C1 to C10</option>
   <option>D1 to D10 </option>
   <option> </option>
   <option> </option>
   <option> </option>
   <option> </option>
   <option> </option>
   </select>
</td>
</tr> 
<tr>
<td>
<input type="submit" name="ticket"value="print" >
<input type="submit" name="ticket"value="cancel" >
</td>
</tr>
  
  
  
  
  
  
<td>
    <tr>
<td>
</table>
</form>
</html>


<?php include 'main_footer.php';?>