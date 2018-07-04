<?php
$url = "https://rest.nexmo.com/account/get-balance/{0530d71b}/{5Bmjc9vqESyT4gPH}";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
//echo "<b>Balance : </b>".$response;
$json = json_decode($response, true);
echo "<b>Balance(ยอดเครดิตคงเหลือ)~ : </b>".number_format($json['value'],2)." EUR or ".number_format((($json['value'])*1.073),2)." USD"." or ".number_format(((($json['value'])*1.073))*34.3556,2)." BHT<br>";
echo "<b>Remain(ข้อความที่สามารถส่งได้)~ : </b>".number_format(($json['value']/0.0230))." SMSs"." | <i><u>(0.023 EUR/SMS)</u></i>";
?>
<form method="POST" action="sendme.php">
  <div class="form-group">
    <label for="to">To:</label>
    <input type="text" class="form-control" name="to" placeholder="ใส่เบอร์โทรที่มีรหัสประเทศ ประเทศไทย คือ +66 (ไม่ต้องเติม 0) เช่น +66612400249" required>
  </div>
  <div class="form-group">
    <label for="from">from:</label>
    <input type="text" class="form-control" name="from" placeholder="เป็นภาษาอังกฤษและตัวเลขเท่านั้น (ไม่รองรับภาษาไทย)" required>
  </div>
 <div class="form-group">
    <label for="Message">Message:</label>
    <input type="text" class="form-control" name="Message" placeholder="ข้อความที่ต้องการส่ง" required>
  </div>
  <div class="form-group">
    <label for="Pass">Pass:</label>
    <input type="password" class="form-control" name="Passw" placeholder="ป้อนรหัสผ่าน (ขอรหัสผ่านได้ที่ Godz)" required>
  </div>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
</body>
</html>








