<div class="container">
<div class="jumbotron">
<center><h3 style="background-color:#3399ff;padding:10px;box-shadow:1px 2px 3px lightgray;color:white;"><i class='fa fa-gear'></i> Equipments</h3></center>
<center><table border='0' border-collapse='collapse'>
<tr style="background-color:#100030;color:white;">
<th style="padding:10px;"><i class='fa fa-file'></i> File</th>
<th style="padding:10px;"><i class='fa fa-download'></i> Download</th>
</tr>
<tr class='a'>
<?php
$dir = "Equipments/";

if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    if (!in_array($file,array('.','..')) && !is_dir($dir.$file) && $file=str_replace(' ','%20',$file))
      echo "
    <tr class='a'>
    <td width='85%'><i class='fa fa-file'></i> <a href='Equipments/$file' title='$file' class='link' id='dn' target='_blank'>".$file=str_replace('%20',' ',$file)."</a></td>
    <td><a href='$dir$file' download='$file' class='link'><i class='fa fa-download'></i> Download</a></td>";
    }
    closedir($dh);
  }
}
?>
</tr>
</table>
</center>
</div>
</div>
<style>
.a td{padding:10px;border:1px solid lightgray;}
a:hover{border:0px;color:#100030;}
</style>