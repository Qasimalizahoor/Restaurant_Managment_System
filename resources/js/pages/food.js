const foodTable = $('#foodTable');
const deleteFoodForm   = $('#deleteFoodForm');
const userId = $('#userId');

// $(document).on('click','.delete-user', function(){
//     deleteUserForm.submit();
//     // destroy($(this).data('id'));

// });
$(document).on('click','.delete-food',function(){
    var id = $(this).data('id');
    console.log(id);
    var check =  confirm('are you sure to delete this Food');
    if(check == true){
        $('#foodId').val(id);
        deleteFoodForm.submit();
    }
});

$(document).ready(function()
{
    foodTable.DataTable({
        lenghtMenu: [[10,25,50,-1],['10','25','50','All']],
        order: [[0, "desc"]],
        language: {
            searchPlaceholder: "Search Food"
        },
        processing: true,
        serverSide: true,
        ajax: {
            url: rms.routes.foods.get,
            data: function data(d)
            {
                d.status = 'all';
            }
        },
        columns: [
            {               
                data: 'id',
                name: 'id',
                render: function render(data)
                {
                    return data;
                }
            },
           
            {
               
                data: 'title',
                name: 'title',
                render: function render(data)
                {
                    return data;
                }
            },
        {
            data: 'description',
            name: 'description',
            render: function render(data)
            {
                return data;
            }
        },
        {
            
            data: 'price',
            name: 'price',
            render: function render(data)
            {
                return data;
            }
        },
        {
            data: 'id',
            name: 'id',
            orderable: true,
            searchable: true,
            render: function render(data) {
              return '<a href="foods/'+data+'/edit" class=" btn btn-primary btn-sm">Edit</a> <a href="javascript:void(0)" data-id="'+data+'" class="delete-food btn btn-danger  btn-sm">Delete</a>';
            }
          }
        ]
    });
});


// function destroy(id) {
//     alert('');
//     Swal.fire({
//       title: 'Are you sure? ',
//       text: 'Do you want to delete this Role!',
//       icon: "question",
//       showCancelButton: true,
//       confirmButtonColor: deleteButtonColor,
//       cancelButtonColor: cancelButtonColor,
//       confirmButtonText: "Delete",
//       reverseButtons: true,
//     }).then((result) => {
//       if(result.value === true){
//         roleId.val(id);
//         deleteUserForm.submit();
//       }

//     });
//   }