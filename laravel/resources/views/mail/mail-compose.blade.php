@extends('layouts.main')

@section('title','Mail Compose')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center wrap">
            也称乱数
        </div>
        <form class="wrapcontent">
            <div class="row wrap-icon">
                <div class="col-2">
                    哑元文本:
                </div>
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                        <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                    </svg>
                </div>
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                        <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                    </svg>
                </div>
                <div class="col-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                        <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                    </svg>
                </div>
                <div class="col-6">
                    ZOOM
                </div>
            </div>
            <div class="row wrap-title">
                <div class="col-2">
                    哑元文本<span class="star-red">* </span>:
                </div>
                <div class="col-10">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="row wrap-date">
                <div class="col-2">
                    哑元文本<span class="star-red">* </span>:
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-1-xs">
                    ~
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="row wrap-mailcompose">
                <div class="col-2">
                    哑元文本<span class="star-red">* </span>:
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-1">
                    <div class="form-group">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <fieldset class="scheduler-border">
                <legend class="scheduler-border"> 它起源于哪里</legend>
                <div class="row wrap-mail">
                    <div class="col-2">
                        哑元文本<span class="star-red">* </span>:
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <input type="text" class="form-control ip-fieldset" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                                <a href="#" data-toggle="modal" data-target="#ModalEdit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill icon-fieldset" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                </a>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">它起源于哪里</legend>
                <div class="row wrap-mail">
                    <div class="col-2">
                        哑元文本<span class="star-red">* </span>:
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <input type="email" class="form-control ip-fieldset" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill icon-fieldset" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                    </svg>
                                </a>
                        </div>
                    </div>
                </div>
                <div class="row wrap-title">
                    <div class="col-2">
                        哑元文本<span class="star-red">* </span>:
                    </div>
                    <div class="col-10">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
                <div class="row wrap-title">
                    <div class="col-2">
                        哑元文本<span class="star-red">* </span>:
                    </div>
                    <div class="col-10">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row wrap-title">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" disabled></textarea>
                        </div>
                    </div>
                </div>
                <div class="row wrap-title">
                    <div class="col-2">
                        哑元文本:
                    </div>
                    <div class="col-10">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="scheduler-border">
                <legend class="scheduler-border"> 它起源于哪里</legend>
                <div class="row wrap-mail">
                    <div class="col-2">
                    </div>
                    <div class="col-9">
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-primary">的荒谬</button>
                    </div>
                </div>
            </fieldset>
            <div class="row wrap-title">
                <div class="col-2">
                    哑元文本:
                </div>
                <div class="col-1-xs radio-title">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        刻意的幽
                    </label>
                </div>
                <div class="col-1-xs radio-title">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        刻意的幽
                    </label>
                </div>
                <div class="col-1-xs radio-title">
                    <label class="form-check-label" for="flexRadioDefault1">
                        刻意的幽
                    </label>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled>
                    </div>
                </div>
            </div>
            <div class="row wrap-title">
                <div class="col-10">
                    <button type="button" class="btn btn-primary">的荒谬</button>
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-primary">的荒谬</button>
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-primary">的荒谬</button>
                </div>

            </div>
            <div class="row wrap-title">
            </div>
        </form>
    </div>
    @include('mail.modal-mailcompose')
{{--    <a class="btn btn-success js-edit" data-old="{{ $sp->name_cat }}" data-id="{{ $sp->id }}" href="#" data-toggle="modal" data-target="#ModalEdit({{$sp->id}})" style="margin: 0 4px 4px 0;">@lang('lang.edit')</a>--}}
@endsection
