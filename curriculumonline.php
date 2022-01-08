<?php require_once('Connections/conexao.php'); ?>
<?php require_once('inc/inc_somec.php'); ?>

<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO curricu (nome, cpf, rg, nasc, sexo, civil, email, tel, cel, tel2, `end`, bairro, cidade, uf, Finstitu, Fcurso, Fnivel, F2institu, F2curso, F2nivel, F3institu, F3curso, F3nivel, Cintitui, Ccurso, Cduracao, C2intitui, C2curso, C2duracao, Eempresa, Ecargo, Eduracao, E2empresa, E2cargo, E2duracao, E3empresa, E3cargo, E3duracao, Iturno, Iviagem, Iatuacao, Iresumo, `data`) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nome'], "text"),
                       GetSQLValueString($_POST['cpf'], "text"),
                       GetSQLValueString($_POST['rg'], "text"),
                       GetSQLValueString($_POST['nasc'], "text"),
                       GetSQLValueString($_POST['sexo'], "text"),
                       GetSQLValueString($_POST['EstadoCivil'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['tel'], "text"),
                       GetSQLValueString($_POST['cel'], "text"),
                       GetSQLValueString($_POST['tel2'], "text"),
                       GetSQLValueString($_POST['end'], "text"),
                       GetSQLValueString($_POST['bairro'], "text"),
                       GetSQLValueString($_POST['cidade'], "text"),
                       GetSQLValueString($_POST['Estado'], "text"),
                       GetSQLValueString($_POST['Finst'], "text"),
                       GetSQLValueString($_POST['Fcurso'], "text"),
                       GetSQLValueString($_POST['FNivel'], "text"),
                       GetSQLValueString($_POST['F2inst'], "text"),
                       GetSQLValueString($_POST['F2curso'], "text"),
                       GetSQLValueString($_POST['FNivel2'], "text"),
                       GetSQLValueString($_POST['F3inst'], "text"),
                       GetSQLValueString($_POST['F3curso'], "text"),
                       GetSQLValueString($_POST['FNivel3'], "text"),
                       GetSQLValueString($_POST['Cinst'], "text"),
                       GetSQLValueString($_POST['Ccurso'], "text"),
                       GetSQLValueString($_POST['Cdura'], "text"),
                       GetSQLValueString($_POST['C2inst'], "text"),
                       GetSQLValueString($_POST['C2curso'], "text"),
                       GetSQLValueString($_POST['C2dura'], "text"),
                       GetSQLValueString($_POST['Eempresa'], "text"),
                       GetSQLValueString($_POST['Ecargo'], "text"),
                       GetSQLValueString($_POST['Eduracao'], "text"),
                       GetSQLValueString($_POST['E2empresa'], "text"),
                       GetSQLValueString($_POST['E2cargo'], "text"),
                       GetSQLValueString($_POST['E2duracao'], "text"),
                       GetSQLValueString($_POST['E3empresa'], "text"),
                       GetSQLValueString($_POST['E3cargo'], "text"),
                       GetSQLValueString($_POST['E3duracao'], "text"),
                       GetSQLValueString($_POST['Pturno'], "text"),
                       GetSQLValueString($_POST['Pviagem'], "text"),
                       GetSQLValueString($_POST['Parea'], "text"),
                       GetSQLValueString($_POST['Presumo'], "text"),
                       GetSQLValueString($_POST['data'], "date"));

  mysql_select_db($database_conexao, $conexao);
  $Result1 = mysql_query($insertSQL, $conexao) or die(mysql_error());

  $insertGoTo = "ok.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
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
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' email invalido.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' invalidos.\n'; }
  } if (errors) alert('Campos Invalidos\n'+errors);
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
                    <td valign="top" bgcolor="#FFFFFF" class="ft_vd_tit_30"><table width="910" border="0" cellspacing="0" cellpadding="0">
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
                                <td align="left" class="ft_vd_tit_30"><strong>Curriculum Online</strong></td>
                                </tr>
                              </table></td>
                            </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top"><table width="675" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="26">&nbsp;</td>
                                <td align="left" valign="top" class="ft_vd_tit_30"><form action="<?php echo $editFormAction; ?>" method="POST" name="form1" onSubmit="MM_validateForm('nome','','R','cpf','','R','rg','','R','nasc','','R','email','','R','tel','','R','bairro','','R','cidade','','R');return document.MM_returnValue">
                                  <table width="100%" border="0" cellspacing="2" cellpadding="2">
                                    <tr>
                                      <td width="2%" bgcolor="#4A6E00">&nbsp;</td>
                                      <td width="98%" bgcolor="#ededed">Dados Pessoais </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" valign="top"><table width="600" border="0" cellspacing="0" cellpadding="0">
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
                                          <td class="ft_cz_12">CPF</td>
                                        </tr>
                                        <tr>
                                          <td><input name="cpf" type="text" class="cx_form" id="cpf" size="15"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">RG</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><input name="rg" type="text" class="cx_form" id="rg" size="15"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Data de nascimento </td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><input name="nasc" type="text" class="cx_form" id="nasc" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Sexo: 
                                            <input name="sexo" type="radio" value="Masc">
                                            Masc 
                                            <input name="sexo" type="radio" value="Fem">
                                            Fem</td>
                                        </tr>
                                        <tr>
                                          <td valign="top">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td valign="top" class="ft_cz_12">Estado Civil : <select name="EstadoCivil" class="cx_form">

                          <option value="">- selecione -</option>

                          <option value="Solteiro(a)">Solteiro(a)</option>

                          <option value="Casado(a)">Casado(a)</option>

                          <option value="Separado(a)">Separado(a)</option>

                          <option value="Viuvo(a)">Viúvo(a)</option>

                        </select> </td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td><label></label></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#4A6E00">&nbsp;</td>
                                      <td bgcolor="#ededed">Dados de Contato </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><table width="600" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td colspan="2" class="ft_cz_12">Email:</td>
                                        </tr>
                                        <tr>
                                          <td colspan="2"><label>
                                            <input name="email" type="text" class="cx_form" id="email" size="50">
                                          </label></td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="ft_cz_12">Telefone de Contato </td>
                                        </tr>
                                        <tr>
                                          <td colspan="2"><input name="tel" type="text" class="cx_form" id="tel" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="ft_cz_12">Celular</td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="ft_cz_12"><input name="cel" type="text" class="cx_form" id="cel" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="ft_cz_12">Telefone Comercial </td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="ft_cz_12"><input name="tel2" type="text" class="cx_form" id="tel2" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" class="ft_cz_12">Ende&ccedil;o completo </td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" valign="top"><textarea name="end" cols="50" rows="4" class="cx_form" id="end"></textarea></td>
                                        </tr>
                                        <tr>
                                          <td width="323" valign="top" class="ft_cz_12">Bairro</td>
                                          <td width="277" valign="top" class="ft_cz_12">Cidade</td>
                                        </tr>
                                        <tr>
                                          <td valign="top" class="ft_cz_12"><input name="bairro" type="text" class="cx_form" id="bairro" size="40"></td>
                                          <td valign="top" class="ft_cz_12"><input name="cidade" type="text" class="cx_form" id="cidade" size="40"></td>
                                        </tr>
                                        <tr>
                                          <td colspan="2" valign="top" class="ft_cz_12">Estado :
                                            <select name="Estado" class="combo">

                          <option value="AC">AC</option>

                          <option value="AL">AL</option>

                          <option value="AM">AM</option>

                          <option value="AP">AP</option>

                          <option value="BA">BA</option>

                          <option value="CE">CE</option>

                          <option value="DF">DF</option>

                          <option value="ES">ES</option>

                          <option value="GO">GO</option>

                          <option value="MA">MA</option>

                          <option  value="MG">MG</option>

                          <option value="MS">MS</option>

                          <option value="MT">MT</option>

                          <option selected="selected" value="PA">PA</option>

                          <option value="PB">PB</option>

                          <option value="PE">PE</option>

                          <option value="PI">PI</option>

                          <option value="PR">PR</option>

                          <option value="RJ">RJ</option>

                          <option value="RN">RN</option>

                          <option value="RO">RO</option>

                          <option value="RR">RR</option>

                          <option value="RS">RS</option>

                          <option value="SC">SC</option>

                          <option value="SE">SE</option>

                          <option value="SP">SP</option>

                          <option value="TO">TO</option>
                        </select>                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="2">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td colspan="2"><label></label></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#4A6E00">&nbsp;</td>
                                      <td bgcolor="#EDEDED">Formação Acadêmica</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><table width="600" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="600" class="ft_cz_12">Forma&ccedil;&atilde;o I </td>
                                        </tr>

                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Instituição</td>
                                        </tr>
                                        <tr>
                                          <td><input name="Finst" type="text" class="cx_form" id="Finst" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Curso</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><input name="Fcurso" type="text" class="cx_form" id="Fcurso" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Nivel</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">
                                        <select name="FNivel" class="cx_form" id="FNivel" >
											<option selected="selected" value="">- selecione -</option>

                          <option value="Fundamental">Ensino Fundamental</option>

                          <option value="Medio">Ensino Médio</option>

                          <option value="Tecnico">Técnico</option>

                          <option value="Superior">Superior</option>

                          <option value="PosGraduacao">Pós-Graduação</option>

                          <option value="Mestrado">Mestrado</option>

                          <option value="Doutorado">Doutorado</option>

                          <option value="PosDoutorado">Pós-Doutorado</option>
                                            </select>                                            </td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>

                                      </table>
                                        <table width="600" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="600" class="ft_cz_12">Forma&ccedil;&atilde;o II</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Institui&ccedil;&atilde;o</td>
                                          </tr>
                                          <tr>
                                            <td><input name="F2inst" type="text" class="cx_form" id="F2inst" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Curso</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><input name="F2curso" type="text" class="cx_form" id="F2curso" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Nivel</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><select name="FNivel2" class="cx_form" id="FNivel2" >
                                                <option selected="selected" value="">- selecione -</option>
                                                <option value="Fundamental">Ensino Fundamental</option>
                                                <option value="Medio">Ensino M&eacute;dio</option>
                                                <option value="Tecnico">T&eacute;cnico</option>
                                                <option value="Superior">Superior</option>
                                                <option value="PosGraduacao">P&oacute;s-Gradua&ccedil;&atilde;o</option>
                                                <option value="Mestrado">Mestrado</option>
                                                <option value="Doutorado">Doutorado</option>
                                                <option value="PosDoutorado">P&oacute;s-Doutorado</option>
                                              </select>                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                        </table>
                                        <table width="600" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="600" class="ft_cz_12">Forma&ccedil;&atilde;o III </td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Institui&ccedil;&atilde;o</td>
                                          </tr>
                                          <tr>
                                            <td><input name="F3inst" type="text" class="cx_form" id="F3inst" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Curso</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><input name="F3curso" type="text" class="cx_form" id="F3curso" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Nivel</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><select name="FNivel3" class="cx_form" id="FNivel3" >
                                                <option selected="selected" value="">- selecione -</option>
                                                <option value="Fundamental">Ensino Fundamental</option>
                                                <option value="Medio">Ensino M&eacute;dio</option>
                                                <option value="Tecnico">T&eacute;cnico</option>
                                                <option value="Superior">Superior</option>
                                                <option value="PosGraduacao">P&oacute;s-Gradua&ccedil;&atilde;o</option>
                                                <option value="Mestrado">Mestrado</option>
                                                <option value="Doutorado">Doutorado</option>
                                                <option value="PosDoutorado">P&oacute;s-Doutorado</option>
                                              </select>                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#4A6E00">&nbsp;</td>
                                      <td bgcolor="#ededed">Cursos Profissionalizantes </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><table width="600" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="600" class="ft_cz_12">Curso I </td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Institui&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                          <td><input name="Cinst" type="text" class="cx_form" id="Cinst" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Curso</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><input name="Ccurso" type="text" class="cx_form" id="Ccurso" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Dura&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><input name="Cdura" type="text" class="cx_form" id="Cdura" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                      </table>
                                        <table width="600" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="600" class="ft_cz_12">Curso II </td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Institui&ccedil;&atilde;o</td>
                                          </tr>
                                          <tr>
                                            <td><input name="C2inst" type="text" class="cx_form" id="C2inst" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Curso</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><input name="C2curso" type="text" class="cx_form" id="C2curso" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Dura&ccedil;&atilde;o</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><input name="C2dura" type="text" class="cx_form" id="C2dura" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                        </table>
                                        <table width="600" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="600" class="ft_cz_12">Curso III </td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Institui&ccedil;&atilde;o</td>
                                          </tr>
                                          <tr>
                                            <td><input name="C3inst" type="text" class="cx_form" id="C3inst" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Curso</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><input name="C3curso" type="text" class="cx_form" id="C3curso" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Dura&ccedil;&atilde;o</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><input name="C3dura" type="text" class="cx_form" id="C3dura" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#4A6E00">&nbsp;</td>
                                      <td bgcolor="#ededed">Experiencias Profissionais </td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><table width="600" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="600" class="ft_cz_12">Empresa  I </td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Nome da Empresa </td>
                                        </tr>
                                        <tr>
                                          <td><input name="Eempresa" type="text" class="cx_form" id="Eempresa" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Cargo</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><input name="Ecargo" type="text" class="cx_form" id="Ecargo" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Dura&ccedil;&atilde;o</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><input name="Eduracao" type="text" class="cx_form" id="Eduracao" size="50"></td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                      </table>
                                        <table width="600" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="600" class="ft_cz_12">Empresa  II </td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Nome da Empresa </td>
                                          </tr>
                                          <tr>
                                            <td><input name="E2empresa" type="text" class="cx_form" id="E2empresa" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Cargo</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><input name="E2cargo" type="text" class="cx_form" id="E2cargo" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Dura&ccedil;&atilde;o</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><input name="E2duracao" type="text" class="cx_form" id="E2duracao" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                        </table>
                                        <table width="600" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="600" class="ft_cz_12">Empresa  III </td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Nome da Empresa </td>
                                          </tr>
                                          <tr>
                                            <td><input name="E3empresa" type="text" class="cx_form" id="E3empresa" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Cargo</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><input name="E3cargo" type="text" class="cx_form" id="E3cargo" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">Dura&ccedil;&atilde;o</td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12"><input name="E3duracao" type="text" class="cx_form" id="E3duracao" size="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="ft_cz_12">&nbsp;</td>
                                          </tr>
                                        </table></td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#4A6E00">&nbsp;</td>
                                      <td bgcolor="#ededed">Interesse / Disponibilidade:</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2"><table width="600" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="600" class="ft_cz_12">Perfil</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Area de atua&ccedil;&atilde;o </td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><?php 				
										  //areas de atuação
		  

              
			  $query=AREATUACAO();

	         $row_aretu= mysql_fetch_assoc($query);

             $totalRows_aretu = mysql_num_rows($query);	  



			  ?>
										  
										  
                                            <select name="Parea" class="cx_form" id="Parea">
                                              <option value="0">----</option>
											  <?php do{ ?>
                                              <option value="<?php echo  $row_aretu["area"]; ?>"><?php echo  $row_aretu["area"]; ?></option>
											  <?php } while ($row_aretu= mysql_fetch_assoc($query));?>	    
											  
                                            </select>
                                            </td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Turno</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><input name="Pturno" type="radio" value="Manha">
                                            Manha
                                              <input name="Pturno" type="radio" value="Tarde">
                                              Tarde
<input name="Pturno" type="radio" value="Noite">
 Noite
 <input name="Pturno" type="radio" value="Todos os horarios">
 Todos</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Disponibilidade para Viagem </td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><input name="Pviagem" type="radio" value="Sim">
                                            Sim 
                                              <input name="Pviagem" type="radio" value="Nao">
                                              N&atilde;o</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12">Resumo de habilidades e competências: 	</td>
                                        </tr>
                                        <tr>
                                          <td class="ft_cz_12"><textarea name="Presumo" cols="50" rows="4" class="cx_form" id="Presumo"></textarea></td>
                                        </tr>
                                        <tr>
                                          <td align="center" class="ft_cz_12"><input name="data" type="hidden" id="data" value="<?php echo $vdata=date("y/m/d")." ".date("h:i:s"); ?>" /></td>
                                        </tr>
                                        <tr>
                                          <td align="center" class="ft_cz_12"><input name="Submit" type="submit" class="bt_form" value="Gravar Curriculum"></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td colspan="2">&nbsp;</td>
                                    </tr>
                                  </table>
                                  <input type="hidden" name="MM_insert" value="form1">
</form></td>
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