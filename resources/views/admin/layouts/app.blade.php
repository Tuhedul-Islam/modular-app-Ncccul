<!DOCTYPE html>
<html>
<head>
    <title>Ncccul</title>
     <script>
        const APP_URL = '{{url('/')}}';
        const APP_TOKEN = '{{csrf_token()}}';
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Ncccul')</title>
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/x-icon">

    @vite([
        '../../../resources/css/app.css',
    ])

</head>
<body>
    <!--start wrapper-->
    <div class="wrapper">
      @include('admin.layouts.header')
         @include('admin.layouts.aside')
        {{-- Main content --}}
         <main class="page-content">

            @yield('content')

        </main>
    </div><!--end start wrapper-->

    @vite([
            '../../../resources/js/app.js',
    ])

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{--{!! Toastr::message() !!}--}}
    <script>
      const deleteData = function(title, route, id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You want to delete "+title,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: route,
                    data: {
                        _token: APP_TOKEN,
                        id: id,
                    },
                    success: function(response) {
                        if(response.success) {
                          Swal.fire({
                              title: "Success",
                              text: response.message || (title + " Deleted"),  // Use response.message if available
                              icon: "success"
                          }).then((result) => {
                              if (result.isConfirmed) {
                                  location.reload();
                              }
                          });
                      } else if(response.error) {
                          Swal.fire({
                              title: "Error",
                              text: response.error,
                              icon: "error"
                          });
                      }
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            }
        });
    };
 </script>
    <script>
    $(document).on('shown.bs.modal', function (event) {
        let modal = $(event.target);


        modal.find('.single-select').select2({
            dropdownParent: modal,
            theme: 'bootstrap4',
            width: '100%'
        });
    });
    </script>
    @stack('scripts')
{{-- <script>
$(document).on('shown.bs.modal', function (event) {
    let modal = $(event.target);


    modal.find('.single-select').select2({
        dropdownParent: modal,
        theme: 'bootstrap4',
        width: '100%'
    });
});
</script> --}}
</body>
</html>
