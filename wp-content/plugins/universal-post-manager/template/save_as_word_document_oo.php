<?php 
$doc = '<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv=Content-Type content="text/html; charset='.get_option('blog_charset').'">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Universal Post Manager by">
<meta name=Originator content="ProfProjects.com">
<title>'. $doc_title.' : '. get_option('blogname') .' : '.get_option('siteurl').'</title>
<style>

<!--
 /* Font Definitions */

 @font-face

	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:204;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-1610611985 1107304683 0 0 159 0;}
	
@font-face
	{font-family:Cambria;
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:204;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-1610611985 1073741899 0 0 159 0;}
 /* Style Definitions */

 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	mso-fareast-font-family:"Times New Roman";}
h2
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"";
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	mso-outline-level:2;
	font-size:18.0pt
	font-family:"Times New Roman","serif";}

a:link, span.MsoHyperlink
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:blue;
	text-decoration:underline;
	text-underline:single;}

a:visited, span.MsoHyperlinkFollowed

	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:purple;
	text-decoration:underline;
	text-underline:single;}

span.2

	{mso-style-name:"";
	mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"";
	mso-ansi-font-size:13.0pt;
	mso-bidi-font-size:13.0pt;
	font-family:"Cambria","serif";
	mso-ascii-font-family:Cambria;
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:Cambria;
	mso-bidi-font-family:"Times New Roman";
	color:#4F81BD;
	font-weight:bold;}

@page Section1

	{size:595.3pt 841.9pt;
	margin:56.7pt 42.5pt 56.7pt 85.05pt;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}

div.Section1

	{page:Section1;}
'.get_option('pppm_save_doc_css').'

img {max-width:500px;}

-->

</style>
</head>
<body link=blue vlink=purple style=\'tab-interval:35.4pt;text-align:'.get_option('pppm_save_text_align').'\'>
<div class=Section1>
<div align=center>
<table class=MsoNormalTable border=0 cellspacing=1 cellpadding=0 width=700 style=\'width:525.0pt;mso-cellspacing:.7pt;mso-yfti-tbllook:1184;mso-padding-alt:3.75pt 3.75pt 3.75pt 3.75pt;text-align:'.get_option('pppm_save_text_align').'\'>

	<tr style=\'mso-yfti-irow:0;mso-yfti-firstrow:yes\'>
		<td style=\'background:#F9F9F9;padding:3.75pt 3.75pt 3.75pt 3.75pt\'>
	
		<p class=MsoNormal>
		<span style=\'font-size:9.0pt;color:#000000;\'>
		This page was exported from '.get_option('blogname').' 
		[ </span>
		<span style=\'font-size:9.0pt;color:#000000\'>
			<a href="'.get_option('siteurl').'" target="_blank">
				'.get_option('siteurl').'
			</a>
		</span>
		<span style=\'font-size:9.0pt;color:#000000;\'> ]
		<br>
		Export date: '. date("D M j G:i:s Y / O ") .' GMT 
		<o:p></o:p>
		</span>
		</p>

	  </td>
	</tr>

 	<tr style=\'mso-yfti-irow:1\'>
		<td style=\'background:#FFFFFF;padding:3.75pt 3.75pt 3.75pt 3.75pt\'>

  	  '.$doc_t_title.'
	
	  <p class=MsoNormal>
	  <span style=\'font-size:10.5pt;color:#000000;\'>
		<br>
		'.$doc_body.'
	  </span>
	  </p>

		</td>
	</tr>
	<tr style=\'mso-yfti-irow:2\'>
		<td style=\'background:#FFFFFF;padding:3.75pt 3.75pt 3.75pt 3.75pt\'>

		  <p class=MsoNormal>
		  <span style=\'font-size:10.0pt;color:#000000\'>
			'.$doc_t_excerpt.'
		  <o:p></o:p></span>
		  </p>

	  </td>
	</tr>

	<tr style=\'mso-yfti-irow:3\'>
		<td style=\'background:#F9F9F9;padding:3.75pt 3.75pt 3.75pt 3.75pt\'>
		
			  <p class=MsoNormal>
				  <span style=\'font-size:10.0pt;color:#000000;\'>
					'.$doc_t_date.'
					'.$doc_t_md_date.' 
					<o:p></o:p>
				   </span>
			  </p>
		
		</td>
	</tr>

	<tr style=\'mso-yfti-irow:4;mso-yfti-lastrow:yes\'>
	  <td style=\'background:#F9F9F9;padding:3.75pt 3.75pt 3.75pt 3.75pt\'>
		<p class=MsoNormal>
			<span style=\'font-size:9.0pt;color:#000000;\'>
			Powered by [ Universal Post Manager ] plugin.  MS Word saving format developed by gVectors Team
			</span>
			<span style=\'font-size:9.0pt;color:#000000\'>
			<a href="http://www.gvectors.com" target="_blank">
			www.gVectors.com
			</a>
			</span>
		</p>
	  </td>
	</tr>
</table>

</div>
<p class=MsoNormal><o:p>&nbsp;</o:p></p>
</div>
</body>
</html>';

?>


