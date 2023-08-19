<div class="form">
    <form action="{{route('post.contact')}}" method="post" role="form" class="php-email-form" id="cform">
        @csrf
        <div class="row">

            <div class="form-group col-md-6">
                <label>{{__('a.full name')}} <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" id="name" placeholder="{{__('a.your full name')}}" autocomplete="off">
                <span class="text-danger name_err"></span>
            </div>
            <div class="form-group col-md-6">
                <label>{{__('a.WhatsApp number')}} <span class="text-danger">*</span></label>
                <input class="form-control tele"  type="tel" name="phone_number" id="phone_number" autocomplete="off">
                <span class="text-danger whats_err"></span>
            </div>

            <div class="form-group col-md-6">
                <label>{{__('a.email address')}}</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="{{__('a.your email address')}}" autocomplete="off">
                <span class="text-danger email_err"></span>
            </div>
            <div class="form-group col-md-6">
                <label>{{__('a.subject')}} <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="{{__('a.The subject of your message')}}" autocomplete="off">
                <span class="text-danger subject_err"></span>
            </div>
            <div class="form-group">
                <label>{{__('a.message')}} <span class="text-danger">*</span></label>
                <textarea id="message" class="form-control" name="message" rows="5" placeholder="{{__('a.your message')}}" autocomplete="off"></textarea>
                <span class="text-danger message_err"></span>
            </div>
        </div>

        <div class="mt-1 mb-2">
            <div class="loading">{{__('a.sending')}}</div>
            <div class="error-message"></div>
            <div class="sent-message">{{__('a.Your message has been sent. We will contact you shortly. Thank you!')}}</div>
        </div>
        <div class="text-center"><button class="send_contact" type="button">{{__('a.Send')}}</button></div>
    </form>
</div>
