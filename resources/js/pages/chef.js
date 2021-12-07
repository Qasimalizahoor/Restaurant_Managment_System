const chefTable = $('#chefTable');
const deleteFoodForm   = $('#deleteChefForm');
const userId = $('#chefId');

// $(document).on('click','.delete-user', function(){
//     deleteUserForm.submit();
//     // destroy($(this).data('id'));

// });
$(document).on('click','.delete-chef',function(){
    var id = $(this).data('id');
    console.log(id);
    var check =  confirm('are you sure to delete this Chef');
    if(check == true){
        $('#chefId').val(id);
        deleteFoodForm.submit();
    }
});

$(document).ready(function()
{
    
    chefTable.DataTable({
        lenghtMenu: [[10,25,50,-1],['10','25','50','All']],
        order: [[0, "desc"]],
        language: {
            searchPlaceholder: "Search Food"
        },
        processing: true,
        serverSide: true,
        ajax: {
            url: rms.routes.chefs.get,
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
               
                data: 'name',
                name: 'name',
                render: function render(data)
                {
                    return data;
                }
            },
        {
            data: 'speciality',
            name: 'speciality',
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
              return '<a href="chefs/'+data+'/edit" class=" btn btn-primary btn-sm">Edit</a> <a href="javascript:void(0)" data-id="'+data+'" class="delete-chef btn btn-danger  btn-sm">Delete</a>';
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