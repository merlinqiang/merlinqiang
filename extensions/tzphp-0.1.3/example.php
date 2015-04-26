<html>
<body>
<table align="center" border="0" cellpadding="5">
<?php
  include('tz.php');

  $color = array("#FFFFFF", "#CCCCCC");
//  date_default_timezone_set("PRC");

  $time=time();
   var_dump($time);

  $x = 0;
  while(list($zone,$null) = each($tz_zone)) {
    $there = tz_localtime($time, $zone);
//      $timea=sprintf("%02d/%02d/%d %02d:%02d:%02d\n", $there[4]+1, $there[3], $there[5]+1900, $there[2], $there[1], $there[0]);
      $timea=sprintf("%02d/%02d/%d %02d:%02d:%02d\n", $there[4]+1, $there[3], $there[5]+1900, $there[2], $there[1], $there[0]);
      $timeb=strtotime($timea);
      $timec=($timeb-$time)/3600+8;
      $arr[]=$zone.$timec;
    echo "<tr bgcolor=\"" . $color[$x%2] . "\"><td>$zone.$timec</td><td>$timec</td><td>" .$timea. "</td><td>" . ($there[9]?'DST':'') . "</td></tr>\n";
    $x++;
  }
//foreach($arr as $key){
//    echo $key."<br/>";
//}
?>
</table>

<select>
    <?php
//    include('tz.php');
//
//
//    $time = time();
//
//
//    while(list($zone,$null) = each($tz_zone)) {
//        $there = tz_localtime($time, $zone);
//
//
//       $timea=sprintf("%02d/%02d/%d %02d:%02d:%02d\n", $there[4]+1, $there[3], $there[5]+1900, $there[2], $there[1], $there[0]);
//        echo $timea;
//       echo "<option>".$zone.sprintf("%02d/%02d/%d %02d:%02d:%02d\n", $there[4]+1, $there[3], $there[5]+1900, $there[2], $there[1], $there[0])."</option>";
//    }
    ?>
</select>
</body>
</html>





