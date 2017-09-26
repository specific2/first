<html>
<head>


  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">


</script>

<script>
function showpdf() { $('.showpdf').toggle(); $('#theframe').attr('src','DVD RW Drive'//'http://tools.wmflabs.org/langviews/?project=en.wikipedia.org&platform=all-access&agent=user&range=all-time&sort=views&direction=1&view=list&page=Basketball' //
 ); }

</script>  
<script>

//function showtext() { $('.showtext').toggle(); $('#theframes').attr('src','new songs.txt'); }
function showtext() { $('.showtext').toggle(); $('#theframes').attr('src',''); }

</script>  


<script>

// Lejupielādēju uzreiz 100x tiem failu, lai nav jāgaida, utt, exe, utt°



// Ja lieku exe, tad uzreiz lejupielādē!!! function showfile() { $('.showfile').toggle(); $('#theframess').attr('src','mspaint.exe'); } Ne tikai mspaint, bet arī calc un pārējos
// exe nevar, vajag ko citu!!! 

//http://stackoverflow.com/questions/10248909/download-exe-file-via-jquery. avi, wma = pieprasa plugin

// http://www.webdeveloper.com/forum/showthread.php?178534-How-to-run-exe-file-using-JavaScript. Put exe on bat and run batch file. Doc arī uzreiz lejupielādē,
// tāpat domāju excel

// dll, rāda, ka var apdraudēt kompi. daa failus- uzreiz lejupielādē!!!

function showfile() { $('.showfile').toggle(); $('#theframess').attr('src',''); }
</script> 

<link rel="stylesheet" type="text/css" href="style.css"/>




</head>
<body>
<div id="cont1">

<div class="showpdf" style="display:none;" onclick="showpdf();"> slēpt</div>


<div class="showpdf" style="display:block;" onclick="showpdf();">rādīt</div> 

<iframe style="display:none;" src="http://tools.wmflabs.org/langviews/?project=en.wikipedia.org&platform=all-access&agent=user&range=all-time&sort=views&direction=1&view=list&page=Basketball"></iframe> 

<div class="showpdf" style="display:none;">
    <iframe class="showpdf" id="theframe" width="600" height="300" style="display:none;"
        src="">
    </iframe>
</div>
</div>

</br>



<div id="cont2">
<div class="showtext" style="display:none;" onclick="showtext();">slēpt</div>


<div class="showtext" style="display:block;" onclick="showtext();">rādīt</div> 






<iframe style="display:none;" src="new songs.txt"></iframe> 



<div class="showtext" style="display:none;">
    <iframe class="showtext" id="theframes" style="display:none;"
        src="">
    </iframe>
</div>

</div>
</br>


<div id="cont3">
<div class="showfile" style="display:none;" onclick="showfile();">slēpt</div>


<div class="showfile" style="display:block;" onclick="showfile();">rādīt</div> 






<iframe style="display:none;" src=""></iframe> 



<div class="showfile" style="display:none;">
    <iframe class="showfile" id="theframess" style="display:none;"
        src="">
    </iframe>
</div>

</div>

<a href="Europass-CV-20141010-Galveits-LV.pdf"> Links </a>

</body>



</html>
