$(function () {
    $('.js-delete-brand').on('click', function () {
        var self = $(this); // truy cap vao dung phan tu dang dc click
        if(confirm('Ban muon xoa khong ?')){
            var id = self.attr('id');
            var status = self.attr('data-status');
            if($.isNumeric(id) && $.isNumeric(status)) {
                $.ajax({
                    url: urlAjax,
                    type: "POST",
                    data: {id: id, status: status},
                    beforeSend: function () {
                        self.html('<i class="fas fa-spinner fa-1x"></i>');
                        //self.text('Loading ...');
                    },
                    success: function (result) {
                     if(status === '0'){
                            self.html('<i class="fas fa-unlock-alt"></i>');
                        } else if(status === '1'){
                            self.html('<i class="fas fa-lock"></i>');
                        }

                        result = $.trim(result);
                        if(result === 'fail' || result === 'err'){
                            alert('Co loi xay ra, vui long thu lai')
                        } else {
                            alert('Thao tac thanh cong');
                            window.location.reload(true);
                        }


                    }
                })
           }
        }
    });


});
