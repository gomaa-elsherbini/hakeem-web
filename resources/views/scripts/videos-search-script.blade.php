<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function (){
        $(document).on('input','#vSearch', function (){
            let search = $(this).val();
            jQuery.ajax({
                url:'{{url('/videos-search')}}',
                datatype: 'html',
                cache:false,
                type:'post',
                data:{search:search,  '_token':'{{csrf_token()}}'},
                success:function (data){
                    $('#vSearch-result').html(data)
                },
                error:function (XMLHttpRequest, textStatus, errorThrown){
                    $('#ar').html( `Status:  ${textStatus}( ${errorThrown})`)
                }
            })
        })
    })
</script>
