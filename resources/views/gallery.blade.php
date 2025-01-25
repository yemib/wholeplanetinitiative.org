@extends('layouts.index2')

<?php

use App\gallery;
use App\logos;

$logo = logos::first();

$gallery = gallery::orderby('created_at', 'desc')->paginate(9);

?>

@section('title')
    Gallery
@endsection

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
@endsection

@section('content')
    <header class="jumbotron text-center bg-success text-white py-5">
        <div class="container">
            <h1 class="display-4 mb-4" style="padding-top: 50px;">Gallery </h1>
        </div>
    </header>


    <div class="container mt-5">
        <h1 class="mb-4">Photo Gallery</h1>

        <div class="row" id="gallery">
            <!-- Gallery items will be dynamically added here -->
        </div>



        <div class="row">
            <div class="pagination">

                {{ $gallery->links() }}


            </div>

        </div>

    </div>




@endsection

@section('script')
    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Sample data for images, replace these with your actual data
            const imageData = [
                <?php   foreach($gallery  as $gallerys){    ?>

                {
                    filename: '{{ $gallerys->image }}',
                    title: '{{ $gallerys->text1 }}',
                    description: ''
                },


                <?php } ?>


                // Add more image data as needed
            ];

            const galleryContainer = document.getElementById('gallery');

            // Loop through image data and create gallery items
            imageData.forEach((data, index) => {
                const galleryItem = document.createElement('div');
                galleryItem.className = 'col-lg-4 col-md-6 mb-4';
                galleryItem.innerHTML = `
        <a href="${data.filename}" data-lightbox="gallery-item" data-title="${data.title} - ${data.description}">
          <div class="card">
            <img   data-src="${data.filename}" class="card-img-top" alt="${data.title}" loading="lazy">
            <div class="card-body">
              <h5 class="card-title">${data.title}</h5>
              <p class="card-text">${data.description}</p>
            </div>
          </div>
        </a>
      `;
                galleryContainer.appendChild(galleryItem);
            });
        });
    </script>
@endsection
