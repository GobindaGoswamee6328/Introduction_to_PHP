<!doctype html>
<html>
    <body>
        <?php
        echo"Today is ".date("y/m/d")."<br>";
        echo"Today is ".date("y.m.d")."<br>";
        echo"Today is ".date("y-m-d")."<br>";//year,month-day
        echo"Today is ".date("l")."<br>";//weekend day
        echo date("Y")."<br>";//year

        echo "The time is: ".date("h:i:sa")."<br>";//h= 12hour format,H= 24hour format,i=minutes,s=seconds,a=am/pm
         

        //mktime(hour, minute, second, month, day, year):
        $d=mktime(11, 34, 54, 8, 12, 2014);
        echo "Created Date is ".date("y-m-d h:i:sa",$d)."<br>";

        //strtotime(time,now):
        $a=strtotime("tomorrow");
        echo date("y-m-d h:i:sa",$a)."<br>";

        $a=strtotime("next Saturday");
        echo date("y-m-d h:i:sa",$a)."<br>";

        $a=strtotime("+3 Months");
        echo date("y-m-d h:i:sa",$a)."<br>";


        $startdate=strtotime("Saturday");
        $enddate=strtotime("+6 Weeks",$startdate);
        while($startdate < $enddate)
        {
               echo date("M d",$startdate)."<br>";
               $startdate=strtotime("+1 Week", $startdate);

        }

        ?>
    </body>
</html>