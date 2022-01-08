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
                                <td align="left" class="ft_vd_tit_30"><strong>Parceiros</strong></td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
						  
						  <?php 				// parceiros
		  

              $area=4;
			  $query=AREA($area);

	         $row_varea= mysql_fetch_assoc($query);

             $totalRows_varea = mysql_num_rows($query);	  

          

			  ?>
                   
					      <tr>
						  
                            <td><table width="675" border="0" cellspacing="0" cellpadding="0">
                                <tr>
								
								  <?php 
								     $d=1;
								  do {?> 
                                  <td width="675"><table width="220" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                      <td><img name="<?php echo $row_varea["titulo"]; ?>" src="<?php echo $row_varea["foto"]; ?>" width="220" height="90" alt="<?php echo $row_varea["titulo"]; ?>" ></td>
                                    </tr>
                                    <tr class="ft_vd_12">
                                      <td><?php echo $row_varea["titulo"]; ?></td>
                                    </tr>
                                    <tr>
                                      <td class="ft_pt_12"><?php echo $row_varea["texto"]; ?></td>
                                    </tr>
                                  </table></td>
								  
								 <?php 
			  if($d == "2"){
        echo "</tr>" ;
		$d=0;
        }?>
							
							<?php 
							$d=$d+1;
							} while ($row_varea= mysql_fetch_assoc($query));?>	
								  
                                </tr>
                              </table></td>
							 
							 
							 	
                          </tr>
						  
						  
						  
                          <tr>
                            <td>&nbsp;</td>
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