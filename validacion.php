<H1>Validación de formularios</H1>

<H2>Búsqueda de canciones</H2>

<FORM CLASS="borde" ACTION="ejercicio5.php" METHOD="POST">

<P><LABEL>Texto a buscar:</LABEL>
<INPUT TYPE="TEXT" SIZE="40" NAME="texto"

<?PHP
   if (isset($buscar))
      print ("VALUE='$texto'>\n");
   else
      print (">\n");
   if ($errores["texto"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["texto"] . "</SPAN>");
?>

</P>

<P><LABEL>Buscar en:</LABEL>
<INPUT TYPE="RADIO" NAME="donde" VALUE="titulo">Títulos de canción
<INPUT TYPE="RADIO" NAME="donde" VALUE="album">Nombres de álbum
<INPUT TYPE="RADIO" NAME="donde" VALUE="ambos" CHECKED>Ambos campos</P>

<P><LABEL>Género musical:</LABEL>
<SELECT NAME="genero">
   <OPTION SELECTED>Todos
   <OPTION>Acústica
   <OPTION>Banda Sonora
   <OPTION>Blues
   <OPTION>Electrónica
   <OPTION>Folk
   <OPTION>Jazz
   <OPTION>New Age
   <OPTION>Pop
   <OPTION>Rock
</SELECT></P>

<P><INPUT TYPE="SUBMIT" NAME="buscar" VALUE="Buscar"></P>

</FORM>

<?PHP
   }
?>

</BODY>
</HTML>