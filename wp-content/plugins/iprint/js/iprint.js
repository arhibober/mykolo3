var decodeEntities = (function() {
  // this prevents any overhead from creating the object each time
  var element = document.createElement('div');

  function decodeHTMLEntities (str) {
    if(str && typeof str === 'string') {
      // strip script/html tags
      str = str.replace(/<script[^>]*>([\S\s]*?)<\/script>/gmi, '');
      str = str.replace(/<\/?\w(?:[^"'>]|"[^"]*"|'[^']*')*>/gmi, '');
      element.innerHTML = str;
      str = element.textContent;
      element.textContent = '';
    }

    return str;
  }

  return decodeHTMLEntities;
})();
function PrintElem(url,date,title,content){
		Print(url,date,decodeEntities(title),decodeEntities(content));
		//Print(url,date,title,content);
}
//function PrintElem(data)
function Print(url,date,title,content)
    {
		var mywindow = window.open('', 'print_window', 'height=400,width=600');
        mywindow.document.write('<html><head>');
		mywindow.document.write('<meta charset="UTF-8" />');
		mywindow.document.write('<title>print</title>');
        mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
		mywindow.document.write('<script>');
		mywindow.document.write('function print_confirm() {');
		mywindow.document.write('if (opener && !opener.closed) {');
		mywindow.document.write('window.document.close();');
		mywindow.document.write('window.focus();');
		mywindow.document.write('window.print();');
		mywindow.document.write('}');
		mywindow.document.write('window.close();'); 
		mywindow.document.write('}');
		mywindow.document.write('</script>');
        mywindow.document.write('</head><body >');
        //mywindow.document.write(data);
		mywindow.document.write('<input type="button" value="Print" onclick="print_confirm()" />'+'<br>');
		mywindow.document.write(url+'<br>');
		mywindow.document.write(date+'<br>');
		mywindow.document.write('<h1>'+title+'</h1>');
		mywindow.document.write('<div>'+content+'</div>');
        mywindow.document.write('</body></html>');

        /*mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();*/

        return true;
    }
