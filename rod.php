
<table width="950" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><table width="950" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="36"><img src="fatias/somec_lat_esq_rod.jpg" width="36" height="27"></td>
        <td class="fd_sup_rod">&nbsp;</td>
        <td width="36"><img src="fatias/somec_lat_dir_rod.jpg" width="36" height="27"></td>
      </tr>
      <tr>
        <td valign="top" class="fd_lat_esq_rod">&nbsp;</td>
        <td width="878" valign="top" bgcolor="#326301"><table width="878" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="131"><img src="fatias/somec_mapa.jpg" width="131" height="179" /></td>
            <td width="186" class="ft_br_12">
			
			 <?php // rodape end

			  
              $id=5;
			  $query=NEWS($id) ;

	         $row_news= mysql_fetch_assoc($query);

             $totalRows_news = mysql_num_rows($query);  
?>

<?php echo $row_news["texto"]; ?>
			  
			  
			  </td>
            <td width="21"><img src="fatias/somec_listra_meio.jpg" width="21" height="180" /></td>
            <td width="148" valign="top"><table width="140" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="ft_br_22">Somec</td>
              </tr>
              <tr>
                <td height="5" align="left" class="ft_br_12">&nbsp;</td>
              </tr>
              <tr>
                <td align="left"><a id="mn" href="quem_somos.php" target="_top">Quem somos</a></td>
              </tr>
              <tr>
                <td align="left"><a id="mn" href="projetos.php" target="_top">Projetos</a></td>
              </tr>
              <tr>
                <td align="left"><a id="mn" href="noticias.php" target="_top">Not&iacute;cias</a></td>
              </tr>
              <tr>
                <td align="left"><a id="mn" href="fotos.php" target="_top">Fotos</a></td>
              </tr>
              <tr>
                <td align="left"><a id="mn" href="videos.php" target="_top">V&iacute;deos</a></td>
              </tr>
              <tr>
                <td align="left"><a id="mn" href="parceiros.php" target="_top">Parceiros</a></td>
              </tr>
            </table></td>
            <td width="9"><img src="fatias/somec_listra_meio.jpg" width="21" height="180" /></td>
            <td width="184" valign="top"><table width="170" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="ft_br_22">Fale Conosco</td>
              </tr>
              <tr>
                <td height="5" align="left">&nbsp;</td>
              </tr>
              <tr>
                <td align="left"><a id="mn" href="Editais.php" target="_top">Editais e Licitações</a> </td>
              </tr>
              <tr>
                <td align="left"><a id="mn" href="contatos.php" target="_top">Contato</a></td>
              </tr>
              <tr>
                <td align="left"><a id="mn" href="curriculumonline.php" target="_top">Curriculum Online</a></td>
              </tr>
            </table></td>
            <td width="21"><img src="fatias/somec_listra_meio.jpg" width="21" height="180" /></td>
            <td width="169" valign="top"><table width="160" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="ft_br_22">Siga-nos</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table width="130" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="fatias/icon_orkut.png" width="28" height="28" /></td>
                    <td><a href="http://www.facebook.com/pages/Somec/182601108459200"><img src="fatias/icon_facebook.png" width="28" height="28" /></a></td>
                    <td><img src="fatias/icon_twitter.png" width="28" height="28" /></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td valign="top" class="fd_lat_dir_rod">&nbsp;</td>
      </tr>
      <tr>
        <td><img src="fatias/somec_inf_esq_rod.jpg" width="36" height="32"></td>
        <td class="fd_inf_rod">&nbsp;</td>
        <td><img src="fatias/somec_inf_dir_rod.jpg" width="36" height="32"></td>
      </tr>
    </table></td>
  </tr>
</table>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22907432-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
