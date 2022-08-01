@extends('email.layout')

@section('content')
    <div class="content">
        <div class="content-header content-header--blue">
             @lang('view_pages.reset_your_password') 
        </div>
        <div class="content-body">
            <p>Hi {{ $user->name }},</p>
            <p>@lang('view_pages.password_message').</p>

            <div class="text-center">
                
                <a href="{{ 'https://angularpwa-d828e.firebaseapp.com/reset-password/' . $token . '/' .$user->email }}"
                   target="_blank" class="btn btn-default">
                   @lang('view_pages.reset_password')
                </a>
            </div>

            <p> @lang('view_pages.ignore_text').</p>
        </div>
    </div>
@endsection
