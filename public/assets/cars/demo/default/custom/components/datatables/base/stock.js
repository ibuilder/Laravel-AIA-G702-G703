// var DatatableHtmlTableDemo=function(){var e=function(){$(".m-datatable").mDatatable({data:{pageSize:100}},{search:{input:$("#generalSearch")}})};

var DatatableHtmlTableDemo=function(){var e=function(){$(".m-datatable").mDatatable({search:{input:$("#generalSearch")},columns:[{field:" ",type:"text",width:25,},{field:"Ankaufdatum",type:"text",width:110},{field:"Fahrzeugname",sortable:"asc",type:"text",width:110},{field:"FIn",type:"text",width:150},{field:"Erstzulassung",type:"data",width:110,format:"DD.MM.YYYY"},{field:"Kilometer",type:"text",width:110},{field:"Kilowatt",type:"text",width:110},{field:"Standzeit",type:"text",width:110},{field:"Einkauf Name",type:"text",width:110},{field:"Ankaufdatum",type:"data",width:100,format:"DD.MM.YYYY"},{field:"Ankaufpreis",type:"text",width:110},{field:"Verkaufsdatum",type:"data",width:110,format:"DD.MM.YYYY"},{field:"Verkauf Name",type:"text",width:110},{field:"Verkaufspreis",type:"text",width:110},],data:{pageSize:100}})};


return{init:function(){e()}}}();
jQuery(document).ready(function(){DatatableHtmlTableDemo.init()}); 