<!---thhe banner is here  ---->
@extends('layouts.index2')

@section('content')

    <?php

    use App\servicess;
    use App\page;

    $page = page::where('id', 16)->first();

    ?>


@section('title')
    Volunteer Form
@endsection


<header class="jumbotron text-center bg-success text-white py-5">
    <div class="container">
        <h1 class="display-4 mb-4" style="padding-top: 50px;"> Volunteer Form </h1>
    </div>
</header>















    <div class="contact-section">
        <div class="container">

            <div> {!! $page->body !!} </div>



            <form method="post" action="/send_volunteer">

                {{ csrf_field() }}


                <div class="form-group">

                    <label> Name </label>
                    <input required placeholder="Name" name="name" class="form-control" />

                </div>


                <div class="form-group">

                    <label> Phone Number </label>


                    <input required class="form-control" name="phone" placeholder="Phone Number"
                        type="" />
                </div>

                <div class="form-group">

                    <label> Email Address </label>


                    <input required class="form-control" name="email" type="email" />
                </div>


                <div class="form-group">

                    <label> Message </label>

                    <textarea required class="form-control" name="message" placeholder="Message"></textarea>


                </div>



                <div class="form-group">

                    <input type="submit" value="Submit" class="btn btn-success" />
                </div>


            </form>


        </div>
    </div>



@endsection
