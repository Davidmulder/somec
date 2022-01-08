<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<table width="910" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="675" valign="top">
	
	<!-- not really needed, i'm using it to center the gallery. -->
<div class="pikachoose">
	<ul id="pikame" >
		<?php require_once('player.php'); ?>

		
	</ul>
</div>
	
	</td>
    <td width="15">&nbsp;</td>
	 <?php 
		$query=HOME();

	         $row_home= mysql_fetch_assoc($query);

             $totalRows_home = mysql_num_rows($query);				

				?>
	
    <td width="220" valign="top"><table width="220" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="45" align="left" valign="bottom" class="ft_vd_tit_30"><strong>Seja bem-vindo</strong></td>
      </tr>
      <tr>
        <td height="40" align="left" class="ft_cz_12"><strong><?php echo $row_home["titulo"]; ?></strong></td>
      </tr>
      <tr>
        <td align="left" class="ft_pt_12"><?php echo $row_home["resumo"]; ?></td>
      </tr>
      <tr>
        <td height="40" align="right"><a id="bts" href="<?php echo $row_home["id"]; ?>" target="_self"></a></td>
      </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript">
<!--
swfobject.registerObject("pn");
//-->
</script>
