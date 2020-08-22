<HTML>
  <HEAD>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-2">
     <link rel="icon" href="https://www.kindpng.com/picc/m/276-2769621_life-ring-lifeguard-icon-hd-png-download.png">
    <TITLE>
      Równanie kwadratowe
    </TITLE>
    <STYLE>
      .kod
      {
         margin-left: 40%;
      }
      .par
      {
        margin-left: 30%;
        margin-right: 40%;
        color: red;
        background-color: yellow;
        font-family: "Trebuchet MS", sans-serif;
      }
      .obrazek
      {
         margin-right: 1px;
      }
    </STYLE>
  </HEAD>

  <BODY>
<div class="par">
<p>
  Policzmy deltę razem z załogą "Słonecznego patrolu".
</p>
</div>

<div class = "calosc"> 
<table style="width: 100%">
<tr>
<td style="width: 500px;">
  <div class = "kod">
  <? 
  // Pobiera od użytkownika współczynniki równania, a następnie
  // oblicza warto¶ci zerowe równania kwadratowego.

  $a = str_replace (",", ".", $_GET['a']); settype ($a, "double");
  $b = str_replace (",", ".", $_GET['b']); settype ($b, "double");
  $c = str_replace (",", ".", $_GET['c']); settype ($c, "double");

  if ($a || $b || $c) 
  { 
    // warto¶ci w formularzu s± ok
    print ("a = $a, b = $b, c = $c<BR>");

    if ($a) 
    {
      $delta = $b*$b-4*$a*$c;
      if ($delta < 0) 
      {
        print ('Równanie nie ma pierwiastków rzeczywistych');
      } 
      elseif ($delta == 0) 
      {
        $x1 = -$b/(2 * $a);
        print ("Równanie ma jeden pierwiastek rzeczywisty: $x1");
      } 
      else 
      {
        $x1 = (-$b-sqrt($delta)) / (2*$a);
        $x2 = (-$b+sqrt($delta)) / (2*$a);
        print ("Równanie ma dwa pierwiastki rzeczywiste: $x1 i $x2");
      }
    } 
    elseif ($b) 
    {
      $x1 = -$c/$b;
      print ("Równanie ma jeden pierwiastek rzeczywisty: $x1");
    } 
    else 
    {
      print ('Równanie nie ma pierwiastków rzeczywistych');
    }
    print '<BR><A HREF="5.php">Powrót do formularza</A>';
  } 
  else 
  { 
    // nie ma wpisanych danych, wy¶wietlamy formularz
    print '<FORM ACTION="5.php" METHOD=GET>';
    print 'a: <INPUT TYPE="text" NAME="a"><BR>';
    print 'b: <INPUT TYPE="text" NAME="b"><BR>';
    print 'c: <INPUT TYPE="text" NAME="c"><BR>';
    print '<INPUT TYPE="submit" VALUE="Wyślij">';
    print '</FORM>';
  }
  ?>
  </div>
</td>
<td>
<div class ="obrazek">
<!--
  <img style="width: 40%" src = "https://www.tapeteos.pl/data/media/1172/big/baywatch._sloneczny_patrol__2017__007.jpg"/>
-->

<a href="https://www.youtube.com/watch?v=HnsBo1NV6eo"><img style="width: 40%" src = "https://www.tapeteos.pl/data/media/1172/big/baywatch._sloneczny_patrol__2017__007.jpg"/></a>

<!--
<video width="320" height="240" controls>
  <source src="https://www.youtube.com/watch?v=HnsBo1NV6eo" type="video/mp4">
Your browser does not support the video tag.
</video>
-->
</div>
</tr>
</table>
</div>
  </BODY>
</HTML>			