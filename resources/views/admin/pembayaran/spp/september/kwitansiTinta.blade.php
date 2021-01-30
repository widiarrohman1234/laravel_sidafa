<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 12 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
  {font-family:"Cambria Math";
  panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
  {font-family:Calibri;
  panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
  {font-family:Tahoma;
  panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
  {font-family:"Arial Black";
  panose-1:2 11 10 4 2 1 2 2 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {margin-top:0cm;
  margin-right:0cm;
  margin-bottom:10.0pt;
  margin-left:0cm;
  line-height:115%;
  font-size:12.0pt;
  font-family:"Times New Roman","serif";}
a:link, span.MsoHyperlink
  {color:blue;
  text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
  {color:purple;
  text-decoration:underline;}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
  {mso-style-link:"Balloon Text Char";
  margin:0cm;
  margin-bottom:.0001pt;
  font-size:8.0pt;
  font-family:"Tahoma","sans-serif";}
span.MsoPlaceholderText
  {color:gray;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
  {margin:0cm;
  margin-bottom:.0001pt;
  font-size:12.0pt;
  font-family:"Times New Roman","serif";}
span.BalloonTextChar
  {mso-style-name:"Balloon Text Char";
  mso-style-link:"Balloon Text";
  font-family:"Tahoma","sans-serif";}
.MsoChpDefault
  {font-size:12.0pt;}
.MsoPapDefault
  {margin-bottom:10.0pt;
  line-height:115%;}
@page Section1
  {size:601.0pt 209.8pt;
  margin:0cm 0cm 0cm 0cm;}
div.Section1
  {page:Section1;}
-->
</style>

</head>

<body lang=EN-US link=blue vlink=purple>

<div class=Section1>
<br>
<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 align=left
 style='border-collapse:collapse;border:none;margin-left:6.75pt;margin-right:
 80pt'>
 <tr style='height:20.65pt'>
  <td width=160 colspan=2 valign=bottom style='width:120.2pt;border:solid #D9D9D9 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:20.65pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=IN style='font-size:10.0pt'>{{$september->santri->no_pend}}</span><b><span
  style='font-size:10.0pt;font-family:"Arial Black","sans-serif"'> / </span></b><span style='font-size:10.0pt'><br>{{$september->santri->id_santri}}</span></p>
  </td>
 </tr>
 <tr style='height:28.0pt'>
  <td width=160 colspan=2 valign=top style='width:120.2pt;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:28.0pt'>
  <p class=MsoNoSpacing><span
  lang=IN style='font-size:8.0pt'>{{$september->santri->nama_santri}}</span></p>
  </td>
 </tr>
 <tr style='height:34.75pt'>
  <td width=160 colspan=2 valign=bottom style='width:120.2pt;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:34.75pt'>
  <p class=MsoNoSpacing><span
  lang=IN style='font-size:10.0pt'>{{$september->administrasi->nama_administrasi}}</span></p>
  </td>
 </tr>
 <tr style='height:18pt'>
  <td width=160 colspan=2 valign=bottom style='width:120.2pt;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.45pt'>
  <p class=MsoNoSpacing><span lang=IN style='font-size:10.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:19.1pt'>
  <td width=160 colspan=2 valign=bottom style='width:120.2pt;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:19.1pt'>
  <p class=MsoNoSpacing><span lang=IN style='font-size:9.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:22.8pt'>
  <td width=160 colspan=2 style='width:120.2pt;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:22.8pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  lang=IN>Rp.{{number_format($september->nominal)}}</span></p>
  </td>
 </tr>
 <tr style='height:36.85pt'>
  <td width=80 valign=top style='width:60.1pt;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:36.85pt'>
  <p class=MsoNoSpacing><span style='font-size:11.0pt'>R.{{$september->id}}</span><span
  lang=IN style='font-size:11.0pt'><br>{{$september->administrasi->nama_administrasi}}</span></p>

  <p class=MsoNoSpacing align=left style='text-align:left'><span
  lang=IN style='font-size:11.0pt'>{{$september->waktu}}</span></p>
  </td>
 </tr>
</table>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 align=left
 style='border-collapse:collapse;border:none;margin-left:6.75pt;margin-right:
 6.75pt'>
 <tr style='height:21.15pt'>
  <td width=425 colspan=3 valign=bottom style='width:318.9pt;border:solid #D9D9D9 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.15pt'>
  <p class=MsoNoSpacing><span
  lang=IN style='font-size:10.0pt'>{{$september->santri->no_pend}}</span><b><span
  style='font-size:10.0pt;font-family:"Arial Black","sans-serif"'> / </span></b><span style='font-size:10.0pt'>{{$september->santri->id_santri}}</span></p>
  </td>
 </tr>
 <tr style='height:17.0pt'>
  <td width=85 rowspan=3 valign=bottom style='width:63.75pt;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:17.0pt'>
  <p class=MsoNoSpacing><span lang=IN>&nbsp;</span></p>
  </td>
  <td width=340 colspan=2 valign=bottom style='width:9.0cm;border-top:none;
  border-left:none;border-bottom:solid #D9D9D9 1.0pt;border-right:solid #D9D9D9 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.0pt'>
  <p class=MsoNoSpacing><span lang=IN><b>{{$september->santri->nama_santri}}</b></span></p>
  </td>
 </tr>
 <tr style='height:22.7pt'>
  <td width=340 colspan=2 valign=bottom style='width:9.0cm;border-top:none;
  border-left:none;border-bottom:solid #D9D9D9 1.0pt;border-right:solid #D9D9D9 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.7pt'>
  <p class=MsoNoSpacing><b>{{number_format($september->nominal)}}</b></p>
  </td>
 </tr>
 <tr style='height:17.0pt'>
  <td width=340 colspan=2 valign=bottom style='width:9.0cm;border-top:none;
  border-left:none;border-bottom:solid #D9D9D9 1.0pt;border-right:solid #D9D9D9 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.0pt'>
  <p class=MsoNoSpacing><b>{{$september->administrasi->nama_administrasi}}</b></p>
  </td>
 </tr>
 <tr style='height:12.1pt'>
  <td width=425 colspan=3 valign=bottom style='width:318.9pt;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.1pt'>
  <p class=MsoNoSpacing><span lang=IN>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:12.1pt'>
  <td width=425 colspan=3 valign=bottom style='width:318.9pt;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.1pt'>
  <p class=MsoNoSpacing><span lang=IN>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:12pt'>
  <td width=227 colspan=2 rowspan=2 style='width:6.0cm;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.1pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  lang=IN><b>{{$september->status}}</b></span></p>
  </td>
  <td width=198 valign=bottom style='width:148.8pt;border-top:none;border-left:
  none;border-bottom:solid #D9D9D9 1.0pt;border-right:solid #D9D9D9 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.1pt'>
  <p class=MsoNoSpacing align=right style='text-align:right'>Ketapang,<span lang=IN>{{$september->waktu}}</span></p>
  </td>
 </tr>
 <tr style='height:11.85pt'>
  <td width=198 valign=bottom style='width:148.8pt;border-top:none;border-left:
  none;border-bottom:solid #D9D9D9 1.0pt;border-right:solid #D9D9D9 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.85pt'>
  <p class=MsoNoSpacing><span lang=IN>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:20pt'>
  <td width=227 colspan=2 valign=bottom style='width:6.0cm;border:solid #D9D9D9 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.1pt'>
  <p class=MsoNoSpacing align=center style='text-align:center'><span
  lang=IN style='font-size:16.0pt'><b>Rp.{{number_format($september->nominal)}}</b></span></p>
  </td>
  <td width=198 valign=bottom style='width:148.8pt;border-top:none;border-left:
  none;border-bottom:solid #D9D9D9 1.0pt;border-right:solid #D9D9D9 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.1pt'>
  <p class=MsoNoSpacing><span lang=IN>&nbsp;</span></p>
  </td>
 </tr>
 <tr height=0>
  <td width=85 style='border:none'></td>
  <td width=142 style='border:none'></td>
  <td width=198 style='border:none'></td>
 </tr>
</table>

<p class=MsoNormal><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal><span lang=IN>&nbsp;</span></p>

<p class=MsoNoSpacing><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal><span lang=IN>&nbsp;</span></p>

<p class=MsoNormal>&nbsp;</p>

</div>

</body>
  <script>
    window.print();
  </script>
</html>


<a href="{{url('admin/september')}}"><< kembali</a>