@extends('layouts.app')
@section('title')
<title>{{ config('app.name') ?? "A&H" }}</title>
@endsection

@section('sidebar')
    @parent
@endsection
@section('content')

<x-header :$title :$subtitle :$phrase :$imgPathDesktop :$imgPathMovil :$headerType />

<section>
    <style>
        @media (min-width: 640px) {
            #contact-form-frame {
                height: 1400px;
            }
        }

        @media (min-width: 825px) {
            #contact-form-frame {
                height: 1700px;
            }
        }
    </style>
    <div>
        <div>
            <iframe
                id="contact-form-frame"
                width="100%"
                height="auto"
                src="https://forms.office.com/r/ppxwxqh4MR?embed=true"
                class="w-full h-[1500px] border-none max-w-[100%]"
                frameborder="0"
                marginwidth="0"
                marginheight="0"
                allowfullscreen
                webkitallowfullscreen
                mozallowfullscreen
                msallowfullscreen
            ></iframe>
        </div>
    </div>
</section>

@endsection
