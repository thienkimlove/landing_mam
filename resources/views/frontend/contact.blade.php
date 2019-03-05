@extends('frontend.layout')

@section('content')
    <section class="box-contact">
        <div class="container">
            <div class="content">
                <p>
                    <img src="{{url('frontend/images/logo-contact.png')}}" alt=""/>
                </p>
                <p style="color:#b83000">Công ty TNHH Đầu tư Thương mại & Dịch vụ Vạn Thịnh Phát</p>
                <p style="color:#557032">Địa chỉ: 1506CT1 Bắc Hà, Mỗ Lao, Hà Đông, Hà Nội</p>
                <p style="color:#557032">Hotline: 0934.35.35.87</p>
            </div>
            <div class='box-frm'>
                {!! Form::open(array('url' => 'saveContact', 'id' => 'contact_form')) !!}
                    <input type='text' id="contact_name" name="name" placeholder="Họ và tên"/>
                    <input type='text' id="contact_address" name="address" placeholder="Địa chỉ"/>
                    <input type='text' id="contact_phone" name="phone" placeholder="Số điện thoại"/>
                    <textarea id="contact_content" name="content" placeholder="Nội dung"></textarea>
                    <span id="contact_errors" style="display: none">Xin hãy điền đủ thông tin!</span>
                    <button id="contact_submit">
                        <img src="{{url('frontend/images/button-send.png')}}" alt=""/>
                    </button>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function(){
            $('button#contact_submit').click(function(e){
                e.preventDefault();
                var name = $('#contact_name').val();
                var phone = $('#contact_phone').val();
                var address = $('#contact_address').val();
                var content = $('#contact_content').val();

                if (!name || !phone || !address || !content) {
                    $('#contact_errors').show();
                } else {
                    $('#contact_form').submit();
                }
                return false;
            });
        });
    </script>
@endsection