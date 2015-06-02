@extends('layout.main')

@section('content')

 
<div id="primary">
    
        <div class="entry-heading"><div class="entry-center">Cenas</div></div>
<hr>
    <table class="show-first">
        <tr>
          <th>Programmas izstrādāšana</th>
          <th>Cena</th>		
        </tr>
        <tr>
          <td><p>Izstrāde no šablonvektora (CDR, AI, EPS, SVG, CMX utt.)</p></td>
          <td>no 5.00 €</td>		

        </tr>
        <tr>
            <td><p>Izstrāde no rastra šablona (JPG, BMP, PNG, TIF, GIF utt.)<p></td>
          <td>no 7.00 €</td>		

        </tr>
    </table>
<hr>
    <table class="show-first">
        <tr>
          <th>Daudzums, gab.</th>
          <th>Cena uz griezuma <br> par 1000 dūr.</th>
          <th>Cena uz gatava izstrādājuma <br> par 1000 dūr.</th>
        </tr>
        <tr>
          <td>no 1 līdz 10</td>
          <td>no 0.20 €</td>
          <td>0.25 €</td>

        </tr>
        <tr>
            <td>no 11 līdz 50</td>
          <td>no 0.18 €</td>
          <td>0.20 €</td>
        </tr>
        <tr>
            <td>no 51 līdz 100</td>
          <td>no 0.15 €</td>
          <td>0.18 €</td>
        </tr>
        <tr>
            <td>no 101 un vairāk</td>
          <td>pēc vienošanās</td>
          <td>pēc vienošanās</td>
        </tr>
    </table>
<hr>
</div>
<div id="antiprimary">
<table class="show-first">
    <tr>
        <th>
    <p>Aplikācijas un/vai kādas citas speciālas furnitūras palīgmateriālu izmantošanas gadījumā darba vērtība tiek aprēķināta katram dizainam individuāli.</p> 
    <p>Par izšūšanu ar metalizētiem diegiem (sudrabs, zelts un citi) vērtība pieaug par 40% materiālu un procesa darbietilpības dēļ.</p>
    <p>Ļoti lielu vai ļoti mazu dizainu izšūšana var tikt korektēta pēc pasūtītāja un izpildītāja vienošanās.</p>
    <p>Pec paša vēlmes pasūtītājs pats piegādā savus materiālus, paziņo (vai vienkārši atzīmē) izvēlētā zīmējuma atrašanās vietu un diegu krāsu izšūšanai.</p> 
    <p>Ja izšūšanas materiālus piemeklē un izvēlas pats izpildītājs, tad to vērtība tiek iekļauta darba kopējā cena.</p>
    <p>Pēc pasūtītāja pieprasījuma un vēlmes izstrādājums var tikt iepakots iepakojumā, kuru nodrošina vai nu pasūtītājs, vai nu izpildītājs.</p>
        </th>
    </tr>
</table>
</div>
<div id="footer">
   <hr style="height:30pt; visibility:hidden;" />
      <footer>
          @include('includes.footer')
</footer> 
</div>
@stop