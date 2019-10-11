$('.custom-edit-pdf').on('click',function(){
    $('.newpdfinput').click();
})
$('.edit-pdf').on('click',function(){
    $('.editpdfinput').click();
})

$('.delete-pdf').on('click',function(){
    $('.check-delete').val('yes');
})
$('.btn-delete-product').on('click',function(){
   if(confirm('هل انت متأكد من الحذف')){
       return true;
   }else{
       return false;
   }
})