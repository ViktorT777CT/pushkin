/*пользовательские функции Ростов*/

var newsoutform='TITLEWEB';
var ntitle="";
var newsstring="";
var nshowstr="";
var onetime=false;
var labelfromcalendar="NEWP";

/*слайдер новых поступлений (формирование текстового файла)*/
function searchCollection(o)
{
	if(o.hasAttribute('data-string'))
		newsstring=o.getAttribute('data-string');
	else
		newsstring="";
	if(o.hasAttribute('data-once'))
		onetime=true;
	else
		onetime=false;
	if(o.hasAttribute('data-calendar'))
		newscalendar=o.getAttribute('data-calendar');
	else
		newscalendar="";
	if(o.hasAttribute('data-renew'))
		renew=o.getAttribute('data-renew');
	else
		renew="";
	if(o.hasAttribute('data-title'))
		newstitle=o.getAttribute('data-title');
	else
		newstitle="";
	if(o.hasAttribute('data-stitle'))
		nshowstr=o.getAttribute('data-stitle');
	else
		nshowstr="";
	if(o.hasAttribute('data-iddb'))
		newsdb=o.getAttribute('data-iddb');
	else
		newsdb="";
	if(o.hasAttribute('data-label'))
		newslabel=o.getAttribute('data-label');
	else
		newslabel="";
	if(o.hasAttribute('data-quant'))
		newsquant=o.getAttribute('data-quant');
	else
		newsquant="";
	if(o.hasAttribute('data-path'))
		newspath=o.getAttribute('data-path');
	if(typeof take(o).getsign('input',{type:'hidden'})[0] != "undefined")
		newsrestriction=take(o).getsign('input',{type:'hidden'})[0].value;
	else
		newsrestriction="";
	newsperiod="1";
	viewAllNews();
}