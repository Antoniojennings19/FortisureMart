<script>

    //Ajax Function (Update Cart Modal Info & Cart Qty Indicator)
    function ajaxCard(prodCode, prodName, prodImg, prodPrice)
    {
        //Ajax Function
        $.ajax({

            type: "POST",
            url: "./Controller/ajax-card.php",
            data: "code=" + prodCode + "&name=" + prodName + "&img=" + prodImg + "&price=" + prodPrice,
            success: function(data){
                $("#modal-body").html(data)
            },
            error: function(data){
                alert('An error occured while trying to add this item.');
            },

        });
    }

</script>