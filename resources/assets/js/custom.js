var datepicker_ops={
    format: 'yyyy-mm-dd',
    autoclose:true,
    todayHighlight:true
};
$(function(e){
  $('.date').datepicker(datepicker_ops);
  $('.date').on('changeDate', function() {
    //  $(this).hide();
  });
  $('.tagsinput').tagsinput({
    trimValue: true,
    confirmKeys: [44],
    splitOn: ','
  });
  $('form').on('reset',function(){
    $(this).find('.tagsinput').tagsinput('removeAll');
    //$('.date').val("").datepicker("update");
    //$(this).find(".date").datepicker("clearDates");
    //$(this).find(".date").datepicker('destroy');
    //$(this).find(".date").datepicker(datepicker_ops);
  });
});
