// var DatatableHtmlTableDemo=function(){var e=function(){$(".m-datatable").mDatatable({data:{pageSize:100}},{search:{input:$("#generalSearch")}})};

var DatatableHtmlTableDemo=function(){var e=function(){$(".m-datatable").mDatatable({search:{input:$("#generalSearch")},columns:[{field:"Created_Time",type:"text",width:120,sortable:"desc"},{field:"Project_Name",type:"text",width:250},{field:"Project_Number",type:"text",width:200},{field:"Contract_date",type:"text",width:300},{field:"Job_No",type:"number",width:110},{field:"G702",type:"text",width:35},{field:"G703",type:"text",width:35},{field:"Del",type:"text",width:35}],data:{pageSize:100}})};


return{init:function(){e()}}}();
jQuery(document).ready(function(){DatatableHtmlTableDemo.init()});
