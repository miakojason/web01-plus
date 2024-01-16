<style>
    span {
        color: yellow;
        font-size: 20px;
        font-weight: bold;
        font-family: "標楷體";
    }
</style>
<div class="row mb-2">
	<div class="col">
    <span>
<marquee scrollamount="18" scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
    <?php
    $ads=$Ad->all(['sh'=>1]);
    foreach($ads as $ad){
        echo $ad['text'];
        echo'&nbsp;&nbsp;/&nbsp;&nbsp;';
    }
    ?>
</marquee>
</span>
</div>
	<div style="height:32px; display:block;"></div>
</div>
<br>
