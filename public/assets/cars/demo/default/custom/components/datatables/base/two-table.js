var DatatableHtmlTableDemo=function(){var e=function(){$(".m-datatable1").mDatatable({search:{input:$("#generalSearch")},columns:[{field:"Datum",type:"date",width:85,format:"DD.MM.YYYY"},{field:"Fahrzeug",sortable:"asc",type:"text",width:110},{field:"FIn",type:"text",width:150},{field:"Einkauf Netto",type:"text"},{field:"Einkauf Brutto",type:"text"},{field:"§25a",type:"text",width:60}],data:{pageSize:100}})};
return{init:function(){e()}}}();
var DatatableHtmlTableDemo1=function(){var e=function(){$(".m-datatable2").mDatatable({search:{input:$("#generalSearch")},columns:[{field:"Datum",type:"date",width:85,format:"DD.MM.YYYY"},{field:"Fahrzeug",sortable:"asc",type:"text",width:125},{field:"Fin",type:"text",width:150},{field:"Einkauf Netto",type:"text"},{field:"Einkauf-Brutto",type:"text"},{field:"§25a",type:"text",width:60}],data:{pageSize:100}})};
return{init:function(){e()}}}();

jQuery(document).ready(function(){DatatableHtmlTableDemo.init();DatatableHtmlTableDemo1.init()});