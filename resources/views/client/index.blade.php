@extends('client.master.index')
@section('title') {{ __('app.title') }}  @endsection

<!--CUSTOM END-->



<!--BANNER START-->

@include('client.essential.banner_top')

<!--BANNER END-->

<!--CTA1 START-->

@include('client.essential.citation')


<!--CTA1 END-->

<!--SERVICE START-->

@include('client.essential.service')


<!--SERVICE END-->
<!--PORTFOLIO END-->

<!--TEAM START-->

@include('client.essential.team')

<!--TEAM END-->

<!--CTA2 START-->

@include('client.essential.citation')

<!--CTA2 END-->

<!--CONTACT START-->

@include('client.essential.contact')

<!--CONTACT END-->

