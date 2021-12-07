const reservationTable = $('#reservationTable');


// $(document).on('click','.delete-user', function(){
//     deleteUserForm.submit();
//     // destroy($(this).data('id'));

// });


$(document).ready(function()
{
   
    reservationTable.DataTable({
        
        lenghtMenu: [[10,25,50,-1],['10','25','50','All']],

        order: [[0, "desc"]],
        language: {
            searchPlaceholder: "Search Reservation"
        },
        processing: true,
        serverSide: true,
        ajax: {
            url: rms.routes.reservations.get,
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
            data: 'email',
            name: 'email',
            render: function render(data)
            {
                return data;
            }
        },
        {
            
            data: 'phone',
            name: 'phone',
            render: function render(data)
            {
                return data;
            }
        },
        {
            
            data: 'guest',
            name: 'guest',
            render: function render(data)
            {
                return data;
            }
        },
        {
            
            data: 'date',
            name: 'date',
            render: function render(data)
            {
                return data;
            }
        },
        {
            
            data: 'time',
            name: 'time',
            render: function render(data)
            {
                return data;
            }
        },
        {
            
            data: 'message',
            name: 'message',
            render: function render(data)
            {
                return data;
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