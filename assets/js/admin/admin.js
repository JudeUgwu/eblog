$(document).ready(function(){
    $(".delete_data").click(handleDelete);
})

function handleDelete(event){
    event.preventDefault();
    const element = $(this);
    const id = element.data("id");
    const type = element.data("type");
    const url = element.attr("href");
    const formData = {id,url,type};
    Swal.fire(
        '',
        'Are you sure you want to delete',
        'info'
    ).then(response =>{
       const {isConfirmed} = response;
       if(isConfirmed){
           $.ajax({
               method:"POST",
               url:formData.url,
               data:formData,
               success:function(response){
                   const res = JSON.parse($.trim(response))
                   Swal.fire(
                    '',
                    `${res.message}`,
                    `${res.status}`
                   ).then(res=>{
                       $(`#row${id}`).remove();
                   })
               }
           })
       }
    
    })
}