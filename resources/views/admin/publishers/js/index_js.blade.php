<script src="{{asset('assets/js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
<script>
    function redirector(page = 0, perpage = 0) {
        var queryString = $( "#search_form" ).find(':not(input[name=_token])').serialize();
        var url = "{{route('admin.publishers.index')}}" + '?' + queryString;
        console.log("{{route('admin.publishers.index')}}" + '?' + queryString);
        if(page != 0) {
            url += '&page=' + page;
        }

        if(perpage != 0) {
            url += '&perpage=' + perpage;
        }
        window.location = url;
    };

    jQuery(document).ready(function () {
        $("#search_status, #search_platform").selectpicker();

        $('#search_form').on('submit' ,function(e) {
            e.preventDefault();
            var urlParams = new URLSearchParams(window.location.search);
            var page = urlParams.get('page');
            var perpage = urlParams.get('perpage');
            redirector(page || 0, perpage || 0);        
        });     

    });  
    
    $(".delete-publisher").click(function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal.fire({
            title: "{{__('admin.publishers.are_you_sure')}}",
            text: "{{__('admin.publishers.are_you_sure_to_delete')}}",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "{{__('admin.global.yes_delete')}}",
            cancelButtonText: "{{__('admin.global.cancel')}}",
        }).then(function (e) {
            if(e.value) {
                $('#delete-publisher-' + id + '-form').submit();

            }
        });
    })
</script>