<?php require_once('inc/inc_somec.php'); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SOMEC - Sociedade de Meio Ambiente, Educa&ccedil;&atilde;o e Cidadania</title>
<link rel="shortcut icon" href="img/favicon.ico">
<style type="text/css">
<!--
body {
	background-color: #4b9601;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%"  height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" class="fd_gr"><table width="950" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top" class="fd_meio"><table width="950" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="287" valign="top"><?php include('top.php'); ?></td>
          </tr>
          <tr>
            <td valign="top"><table width="950" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20" valign="top" class="fd_lat_esq"><img src="fatias/somec_det_lat_esq_meio.jpg" width="20" height="20"></td>
                <td height="500" valign="top" bgcolor="#FFFFFF"><table width="910" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#FFFFFF"><table width="910" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="16" valign="top"><img src="fatias/somec_det_top_esq.jpg" width="16" height="10"></td>
                        <td>&nbsp;</td>
                        <td width="16" valign="top"><img src="fatias/somec_det_top_dir.jpg" width="16" height="10"></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                  <tr>
                    <td bgcolor="#FFFFFF"><table width="910" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="256" colspan="3" valign="top"><?php include('pn.php'); ?></td>
                        </tr>
                      <tr>
                        <td width="675" valign="top">&nbsp;</td>
                        <td width="15">&nbsp;</td>
                        <td width="220" valign="top">&nbsp;</td>
                      </tr>
                      <tr>
                        <td valign="top"><table width="675" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><table width="675" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="16" bgcolor="#4A6E00">&nbsp;</td>
                                <td width="10" align="left" class="ft_vd_tit_30">&nbsp;</td>
                                <td align="left" class="ft_vd_tit_30"><strong>Editais / Licita??es </strong></td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
						  <?php 				// editais e licita??es
		  

              $area=8;
			  $query=AREA($area);

	         $row_varea= mysql_fetch_assoc($query);

             $totalRows_varea = mysql_num_rows($query);	  



			  ?>
						  
                            <td><table width="670" border="0" align="left" cellpadding="0" cellspacing="0">
							
							<?php do {?> 
                              <tr>
                                <td height="20" align="left" valign="top"><strong class="ft_vd_12">
								<a id="proj" target="_self" href="editais_int.php?id=<?php echo $row_varea["id"]; ?>"><?php echo $row_varea["titulo"]; ?></a></strong></td>
                              </tr>
                              <tr>
                                <td align="left" valign="top" class="fd_list_hor"><img src="fatias/somec_list_hor_proj.jpg" width="320" height="7"></td>
                              </tr>
                              
							   <?php } while ($row_varea= mysql_fetch_assoc($query));?>	    
							  
                              <tr>
                                <td height="20" align="right" valign="top">&nbsp;</td>
                              </tr>
                            </table></td>
                          </tr>
                        </table></td>
                        <td>&nbsp;</td>
                        <td valign="top"><?php include('lat.php'); ?></td>
                      </tr>
                    </table></td>
                  </tr>
                  </table></td>
                <td width="20" valign="top" class="fd_lat_dir"><img src="fatias/somec_det_lat_dir_meio.jpg" width="20" height="20"></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td valign="top"><?php include('rod.php'); ?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>