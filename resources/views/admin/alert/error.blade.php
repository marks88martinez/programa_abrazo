@if(Session::has('message-error'))
    <div class="uk-alert rt-danger" data-uk-alert="">
        <a href="#" class="uk-aluk-aleert-close uk-close"></a>
        {{Session::get('message')}}
    </div>
@endif