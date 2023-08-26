<script>
    $(document).ready(function (){
        $(document).on('input','#dSearch', function (){
            let search = $(this).val();
            jQuery.ajax({
                url:'{{url('/diseases-search')}}',
                datatype: 'html',
                cache:false,
                type:'post',
                data:{search:search,  '_token':'{{csrf_token()}}'},
                success:function (data){
                    $('#dSearch-result').html(data)
                },
                error:function (XMLHttpRequest, textStatus, errorThrown){
                    $('#ar').html( `Status:  ${textStatus}( ${errorThrown})`)
                }
            })
        })
    })
</script>
