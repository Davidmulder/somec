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
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' Email invalido.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' invalido.\n'; }
  } if (errors) alert('Campos Obrigatorios:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
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
                                <td align="left" class="ft_vd_tit_30"><strong>Contatos</strong></td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td><table width="675" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="26">&nbsp;</td>
                                <td align="left" class="ft_vd_tit_30"><form action="fale_res.php" method="post" name="form1" onSubmit="MM_validateForm('nome','','R','email','','RisEmail','mensagem','','R');return document.MM_returnValue">
                                  <table width="600" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td class="ft_cz_12">Nome Completo:</td>
                                    </tr>
                                    <tr>
                                      <td><label>
                                        <input name="nome" type="text" class="cx_form" id="nome" size="80">
                                      </label></td>
                                    </tr>
                                    <tr>
                                      <td class="ft_cz_12">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="ft_cz_12">E-mail:</td>
                                    </tr>
                                    <tr>
                                      <td><input name="email" type="text" class="cx_form" id="email" size="80"></td>
                                    </tr>
                                    <tr>
                                      <td class="ft_cz_12">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td><table width="600" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="224"><span class="ft_cz_12">Telefone Residencial:</span></td>
                                          <td width="376"><span class="ft_cz_12">Telefone Celular:</span></td>
                                          </tr>
                                        <tr>
                                          <td><input name="telefone" type="text" class="cx_form" id="telefone" size="11">
                                            <span class="ft_cz_10">&nbsp; Ex.: (91) 32XX XXXX</span></td>
                                          <td><input name="celular" type="text" class="cx_form" id="celular" size="11">
                                            &nbsp; <span class="ft_cz_10">Ex.: (91) 81XX XXXX</span></td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                    <tr>
                                      <td class="ft_cz_12">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="ft_cz_12">Setor</td>
                                    </tr>
									
									<?php 
			$query=CONTATO();
	         $row_vemail= mysql_fetch_assoc($query);
             $totalRows_vemail = mysql_num_rows($query);  

						  

						  ?>
									
                                    <tr>
                                      <td class="ft_cz_12">
									   <table width="100%" border="0" cellspacing="0" cellpadding="0">

                  <?php do {?>

                        <tr>



                          <td width="5%"><input name="destino" type="radio" value="<?php echo $row_vemail["email"]; ?>" /></td>



                          <td width="92%" class="ft_cz_12"><?php echo $row_vemail["titulo"]; ?></td>
                        </tr>

						

					 <?php } while ($row_vemail= mysql_fetch_assoc($query));?>	
                      </table>									  </td>
                                    </tr>
                                    <tr>
                                      <td class="ft_cz_12">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td class="ft_cz_12">Mensagem:</td>
                                    </tr>
                                    <tr>
                                      <td><label>
                                        <textarea name="mensagem" cols="80" rows="5" class="cx_form" id="mensagem"></textarea>
                                      </label></td>
                                    </tr>
                                    <tr>
                                      <td><span class="ft_pt_11">
                                        <div align="left">
                                          <input name="assunto" type="hidden" id="assunto" value="Contato Somec" />
                                          <?php if($_GET["var"] > "0"){?>
                                          <strong>Mensagem Enviado </strong></div>
                                        <?php }?>
                                        </div>
                                      </span></td>
                                    </tr>
                                    <tr>
                                      <td><label>
                                        <input name="limpar" type="reset" class="bt_form" id="limpar" value="Limpar">
                                        <input name="enviar" type="submit" class="bt_form" id="enviar" value="Enviar">
                                        <input name="assunto" type="hidden" id="assunto" value="Contato site da SOMEC">
                                      </label></td>
                                    </tr>
                                  </table>
                                </form></td>
                              </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
						  <?php // ultimas noticia

			  
              $id=8;
			  $query=NEWS($id) ;

	         $row_news= mysql_fetch_assoc($query);

             $totalRows_news = mysql_num_rows($query);  



			  ?>
						  
						  
                          <tr>
                            <td class="ft_pt_12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_news["texto"]; ?></td>
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