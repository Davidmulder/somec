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
                        <td valign="top"><img src="fatias/somec_det_top_centro.jpg" width="5" height="10"></td>
                        <td width="16" valign="top"><img src="fatias/somec_det_top_dir.jpg" width="16" height="10"></td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td bgcolor="#FFFFFF"><table width="910" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="256" colspan="3" valign="top"><table width="910" border="0" cellspacing="0" cellpadding="0">
                          <tr>                            </tr>
                        </table>
                          <?php include('pn.php'); ?></td>
                        </tr>
                      <tr>
                        <td width="675" valign="top">&nbsp;</td>
                        <td width="15">&nbsp;</td>
                        <td width="220" valign="top">&nbsp;</td>
                        </tr>
                      <tr>
                        <td valign="top"><table width="675" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="30" class="fd_tit"><table width="600" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="left"><span class="ft_vd_tit"><strong>Destaques</strong></span></td>
                              </tr>
                            </table></td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                            </tr>
                          <tr>
                            <td valign="top"><table width="675" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="510"><table width="100%" border="0">
								<?php 
				$query2=TECEARIO();

	         $row_terc= mysql_fetch_assoc($query2);

             $totalRows_terc = mysql_num_rows($query2);				

				?>
								
                                  <tr>
								  
								  <?php do {?>  
                                    <td align="left" valign="top">
									<table width="165" border="0" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td valign="top"><img src="<?php echo $row_terc["foto"]; ?>" width="165" height="90"></td>
                                      </tr>
                                      <tr>
                                         <td colspan="7" class="ft_pt_12"><img src="fatias/somec_det_top_centro.jpg" width="5" height="10"></td>
                                      </tr>
                                      <tr>
                                        <td valign="top"><span class="ft_pt_12">
										<a id="link" target="_self" href="<?php echo $row_terc["id"]; ?>"><?php echo $row_terc["resumo"]; ?></a>
										</span></td>
                                      </tr>
                                    </table>									</td>
									 <?php } while ($row_terc= mysql_fetch_assoc($query2));?>	 
                                  </tr>
								  
                                </table></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td><table width="675" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="323" valign="top"><table width="323" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td height="30" class="fd_tit"><table width="323" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td class="ft_vd_tit"><strong>Not&iacute;cias</strong></td>
                                      </tr>
                                    </table></td>
                                  </tr>
								  <?php 
				$query3=QUARTENARIO();

	         $row_quart= mysql_fetch_assoc($query3);

             $totalRows_quart = mysql_num_rows($query3);
			 
			 $vetor = array();
			 $vfoto=array();
			 $vresumo=array();
			 $vlink=array();
			 
			 $c=1;
			 	
				do {
				$vetor[$c]=$row_quart["titulo"];
				$vfoto[$c]=$row_quart["foto"];
				$vresumo[$c]=$row_quart["resumo"];
				$vlink[$c]=$row_quart["id"];
				
				$c=$c+1;
				
				} while ($row_quart= mysql_fetch_assoc($query3));			

				?>
								
								  
                                  <tr>
                                    <td><span class="ft_pt_12"><img src="fatias/somec_det_top_centro.jpg" width="5" height="10"></span></td>
                                  </tr>
                                  <tr>
                                    <td><img src="<?php echo $vfoto[2]; ?>" width="323" height="92"></td>
                                  </tr>
                                  <tr>
                                    <td valign="top"><span class="ft_pt_12"><img src="fatias/somec_det_top_centro.jpg" width="5" height="10"></span></td>
                                  </tr>
                                  <tr>
                                    <td class="ft_vd_12"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td><strong class="ft_vd_12"><?php echo $vetor[2]; ?></strong></td>
                                      </tr>
                                      <tr>
                                        <td class="ft_pt_12">
										<a id="link" target="_self" href="<?php echo $vlink[2]; ?>">
										<?php echo $vresumo[2]; ?></a></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td class="ft_vd_12">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><table width="323" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="153" align="left" valign="top"><table width="153" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td height="20"><span class="ft_cz_10">&nbsp;</span></td>
                                          </tr>
                                          <tr>
                                            <td height="20" align="left" valign="top"><strong class="ft_vd_12"><?php echo $vetor[1]; ?></strong></td>
                                          </tr>
                                          <tr>
                                            <td align="left" class="ft_pt_12">
											<a id="link" target="_self" href="<?php echo $vlink[1]; ?>">
											<?php echo $vresumo[1]; ?></a></td>
                                          </tr>
                                        </table></td>
                                        <td align="left" valign="top">&nbsp;</td>
                                        <td width="153" align="left" valign="top"><table width="153" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td height="20"><span class="ft_cz_10">&nbsp;</span></td>
                                          </tr>
                                          <tr>
                                            <td height="20" align="left" valign="top"><strong class="ft_vd_12"><?php echo $vetor[3]; ?></strong></td>
                                          </tr>
                                          <tr>
                                            <td align="left" class="ft_pt_12"><a id="link" target="_self" href="<?php echo $vlink[3]; ?>">
											<?php echo $vresumo[3]; ?></a></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td class="ft_pt_12">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="right"><a id="bts4" href="todas_noticias.php" target="_self"></a></td>
                                  </tr>
                                </table></td>
                                <td width="29" valign="top">&nbsp;</td>
                                <td width="323" valign="top"><table width="323" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td height="30" class="fd_tit"><table width="323" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td class="ft_vd_tit"><strong>Nosso projetos</strong></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td class="ft_cz_10">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td valign="top" class="ft_cz_10">
									 <?php 
				$query=LISTAPROJETOS();

	         $row_lista= mysql_fetch_assoc($query);

             $totalRows_lista = mysql_num_rows($query);				

				?>
									
									<table width="320" border="0" align="center" cellpadding="0" cellspacing="0">
									<?php do {?>  
                                      <tr>
                                        <td height="20" align="left" valign="top"><strong class="ft_vd_12">
										
										<a id="proj" href="projetos_int.php?id=<?php echo $row_lista["id"]; ?>" target="_parent" ><?php echo $row_lista["titulo"]; ?></a>
										
										</strong></td>
                                      </tr>
									  
                                      <tr>
                                        <td align="left" valign="top"><img src="fatias/somec_list_hor_proj.jpg" width="320" height="7"></td>
                                      </tr>
									   <?php } while ($row_lista= mysql_fetch_assoc($query));?>	 
									  
									  
                                      <tr>
                                        <td height="20" valign="top">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td height="20" align="right" valign="top"><a id="bts3" href="projetos.php" target="_self"></a></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td height="134" valign="top" class="fd_fotos"><table width="310" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="right" class="ft_pt_12"><table width="200" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td align="right" class="ft_pt_12"><a id="link" target="_self" href="fotos.php">Conheçar no trabalho em veja nossas fotos</a></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td class="ft_vd_12">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td height="134" valign="top" class="fd_videos"><table width="310" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="right" class="ft_pt_12"><table width="200" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td align="right" class="ft_pt_12"><a id="link" target="_self" href="videos.php">Matérias e projetos da somec.</a></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                  </table></td>
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