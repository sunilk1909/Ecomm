
@extends('layouts.master')
@section('content') 
<!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                       
                        @foreach($contacts as $contact)

                        <div class="posted-by">
                            <div class="pb-pic">
                                <img src="img/blog/post-by.png" alt="">
                            </div>
                            <div class="pb-text">
                                <a href="#">
                                <h5>{{$contact->name}}</h5>
                                <h5>{{$contact->email}}</h5>
                                </a>
                            <p>{{$contact->message}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endsection