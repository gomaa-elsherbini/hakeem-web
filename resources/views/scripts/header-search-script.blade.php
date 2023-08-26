<script>
    $(document).ready(function (){
        $(document).on('input','#search', function (){
            let search = $(this).val();
            jQuery.ajax({
                url:'{{url('search')}}',
                datatype: 'html',
                cache:false,
                type:'post',
                data:{search:search,  '_token':'{{csrf_token()}}'},
                success:function (data){
                    $('#search-result').html(data)
                },
                error:function (XMLHttpRequest, textStatus, errorThrown){
                    $('#ar').html( `Status:  ${textStatus}( ${errorThrown})`)
                }
            })
        })
    })
</script>
