---
title: About Online Quiz
description: A little bit about the Online Quiz platform
---
@extends('_layouts.master')

@section('body')
    <h1>About</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">
        <a href="http://onlinequiz.io/">OnlineQuiz.io</a> is an open platform to organize online quiz contests. This platform is optimized to host large contests with thousands of participants.
    </p>

    <p class="mb-6">
        This plaatform can be used to register the participants, create contests, and publish results. From the applicatoin backend contest organizer can create question pool, from where individual question set will be created automatically and will be assigned to the participants.
    </p>

    <p class="mb-6">
        We can send newsletters/ event updates to the participants. This can be configured to send by individual, by categories or to all the registered participants.
    </p>

    <p class="mb-6">
        Please <a href="/contact">contact us</a> if you want to host your next contest from the <a href="http://onlinequiz.io/">OnlineQuiz.io</a>.
    </p>
@endsection
