<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script>
$(function(){
   $('a[href^=#]').click(function() {
      var speed = 1000; 
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var 写真 = target.offset().top;
      $('body,html').animate({scrollTop:写真}, speed, 'swing');
      return false;
   });
});
</script>
<?php
$count = 0;
$gazoudir = opendir("./jpg");
while (false !== ($file[] = readdir($gazoudir)));
closedir($gazoudir);
sort($file);
reset($file);
while (false !== ($gazou = each($file))){
    if ((preg_match ("|.jpg$|", $gazou[1]))||(preg_match ("|.JPG$|", $gazou[1]))) {
        print "<img src='./jpg/" . $gazou[1] . "' width='40px' height='40px'>";
       print "<a href=\"#pos$count\">写真$count</a>  $gazou[1]><br>";
       $count= $count + 1;
    }
}
reset($file);
$count = 0;
while (false !== ($gazou = each($file))){
    if ((preg_match ("|.jpg$|", $gazou[1]))||(preg_match ("|.JPG$|", $gazou[1]))) {

        print "<div id=\"pos$count\">";
        print "</div><br>";
        print "<table  border='1'><br>";
        print "<tr><br>";
        print "<td><img src='./jpg/" . $gazou[1] . "' width='400px' height='400px'></td><br>";
        print "</tr><br>";
        print "<tr><br>";
        print "<td align='center'>" . $gazou[1] . "</td><br>";
        print "</tr><br>";
        print "</table><br>";
	print "<a class=\"button\" href=\"#index\">▲戻る</a>";
        $count= $count + 1;
   }
}
?>