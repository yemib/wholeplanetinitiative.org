<!---thhe banner is here  ---->
@extends('layouts.index2')

@section('content')

    <?php

    use App\servicess;
    use App\page;

    $page = page::where('id', 16)->first();

    ?>


@section('title')
 
Donate
@endsection


<header class="jumbotron text-center bg-success text-white py-5">
    <div class="container">
        <h1 class="display-4 mb-4" style="padding-top: 50px;">Donate to Support Our Cause </h1>
    </div>
</header>















    <div class="contact-section">
        <div class="container">

           
               
                  <div class="col-md-8 offset-md-2">
                   {{--  <h2 class="text-center mb-4">Donate to Support Our Cause</h2> --}}
                    <p>Thank you for considering a donation to support our organization. Your contribution helps us continue our mission and make a difference in the lives of those we serve.</p>
                    <p><strong>Please make your donation directly to our bank account:</strong></p>
                    <ul>
                      <li><strong>Bank Name:</strong>  Sterling Bank</li>
                      <li><strong>Account Name:</strong>  Whole Planet Initiative</li>
                      <li><strong>Account Number:</strong>  0077122721 </li>
                     
                    </ul>
                    <p>We greatly appreciate your generosity and support.</p>
                  </div>
             

                <style>

                    p{
                        color: black
                    }
                </style>
              




        </div>
    </div>



@endsection
