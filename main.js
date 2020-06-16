<script>
    $('.openModal').click(function(){
        var id = $(this).attr('data-id');
        $.ajax({url:"ajax_modal.php?id="+id,cache:false,success:function(result){
            $(".modal-content").html(result);
        }});
    });
</script>