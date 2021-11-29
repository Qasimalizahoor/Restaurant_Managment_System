const userTable = $('#userTable');
$(document).ready(function()
{
    userTable.DataTable({
        lenghtMenu: [[10,25,50,-1],['10','25','50','All']],
        order: [[0, "desc"]],
        language: {
            searchPlaceholder: "Type Here User Name"
        },
        processing: true,
        serverSide: true,
        ajax: {
            url: rms.routes.users.get,
            data: function data(d)
            {
                d.status = 'all';
            }
        },
        columns: [
            // {               
            //     data: 'id',
            //     name: 'id',
            //     render: function render(data)
            //     {
            //         return data;
            //     }
            // },
            {
               
                data: 'name',
                name: 'name',
                render: function render(data)
                {
                    return data;
                }
            },
        //     {
        // //     // data:'status_id',
        // //     // name: 'status_id',
        //     data: 'full_name',
        //     name: 'full_name',
        //     render: function render(data)
        //     {
        //         return data;
        //     }
        // },
        // {
            
        //     data: 'username',
        //     name: 'username',
        //     render: function render(data)
        //     {
        //         return data;
        //     }
       // }
        {
            data: 'email',
            name: 'email',
            render: function render(data)
            {
                return data;
            }
        },
        // {
           
        //     data: 'gender',
        //     name: 'gender',
        //     render: function render(data){
        //         return data;
        //     }
        // },
        // {
           
        //     data: 'dob',
        //     name: 'dob',
        //     render: function render(data){
        //         return data;
        //     }
        // },
        // {
           
        //     data: 'eithnicity',
        //     name: 'eithnicity',
        //     render: function render(data){
        //         return data;
        //     }
        // },
        {
            data: 'id',
            name: 'id',
            orderable: true,
            searchable: true,
            render: function render(data) {
              return '<a href="roles/'+data+'/edit" class=" btn btn-primary btn-sm">Edit</a> <a href="javascript:void(0)" data-id="'+data+'" class="delete-user btn btn-danger  btn-sm">Delete</a>';
            }
          }
        ]
    });
});