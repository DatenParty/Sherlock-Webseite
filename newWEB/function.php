<?php
$json=file_get_contents( "http://maschini.de:5001/"); 
$test=json_decode($json, true);
foreach($test as $testt){
    echo $testt["author"];
}
?>
<style>
    .left{
        float: left;
        width: 38%;
        height: auto;
        margin-right: 2%;
    }
    .right{
        float: right;
        width: 60%;
    }
</style>
    <img class="left" src="img.jpg" />
<div class="right">
    <h2>Trump zu Aussage unter Eid bereit</h2>
    <h5>Stand 10.06.2017 06:51 Uhr</h5>
    <h5>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</h5>
</div>