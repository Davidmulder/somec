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
    <td width="675" valign="top"><object id="pn" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="675" height="256">
      <param name="movie" value="swf/banner.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="transparent" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="swf/banner.swf" width="675" height="256">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="swfversion" value="8.0.35.0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object></td>
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
