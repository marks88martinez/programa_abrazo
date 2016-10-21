@if(Session::has('message-error'))
    <div class="uk-alert uk-alert-danger" data-uk-alert="">
        <a href="#" class="uk-alert-close uk-close"></a>
        {{Session::get('message-error')}}
    </div>
@endif