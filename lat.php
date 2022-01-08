
<link href="estilos.css" rel="stylesheet" type="text/css" />
<table width="220" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30" class="fd_tit"><table width="220" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" class="ft_vd_tit"><strong>Parceiros</strong></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <?php 				// parceiros
		  

              
			  $query=RAWDOPARCEIROS();

	         $row_vraw= mysql_fetch_assoc($query);

             $totalRows_vraw = mysql_num_rows($query);	  

          do {

			  ?>
  
  <tr>
    <td height="90" align="center"  class="ft_br_22">
	<img name="<?php echo $row_vraw["titulo"]; ?>" src="<?php echo $row_vraw["foto"]; ?>" width="220" height="90" alt="<?php echo $row_vraw["titulo"]; ?>" ></td>
  </tr>
  <tr>
    <td valign="top"><img src="fatias/somec_meio_parceiros.jpg" width="6" height="6" /></td>
  </tr>
  <?php } while ($row_vraw= mysql_fetch_assoc($query)); ?>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><a id="bts2" href="parceiros.php" target="_self"></a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
	<script src="http://connect.facebook.net/pt_BR/all.js#xfbml=1">
	</script>
	<fb:like-box href="http://www.facebook.com/pages/Somec/182601108459200" width="220" heith="287" show_faces="true" stream="false" header="true"></fb:like-box>	
	</td>
  </tr>
</table>
