@extends('layouts.master')

@section('content')

<div class="container py-5">
<form method="POST" action="/makeProduct" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Product Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Name of the Product" required>
    </div>
    
    <div class="form-group">
      <label for="color">Color</label>
      <select class="form-control" id="color" name="color" required>
        <option>Black</option>
        <option>White</option>
        <option>Red</option>
        <option>Blue</option>
        <option>Purple</option>
        <option>Green</option>
      </select>
    </div>



    <div class="form-group">
        <label for="size">Size</label>
        <select class="form-control" id="size" name="size" required>
          <option>S</option>
          <option>M</option>    
          <option>L</option>
          <option>XL</option>
        </select>
      </div>

      <div class="form-group">
        <label for="type">Type</label>
        <select class="form-control" id="type" name="type" required>
          <option>Sport</option>
          <option>Casual</option>
          <option>Beachwear</option>
          <option>Dress</option>
          <option>Shoes</option>
          <option>Bags</option>
          <option>Coat</option>
        </select>
      </div>

      <div class="form-group">
        <label for="name"> Price</label>
        <input type="integer" class="form-control" id="price"  name="price" required>
      </div>

      <div class="form-group">
        <label for="color">Brand</label>
        <select class="form-control" id="brand" name="brand" required>
          <option>Polo</option>
          <option>Denim</option>
          <option>Calvin</option>
          <option>Tommy</option>
          <option>Nike</option>
          <option>Addidas</option>
          <option>Diesel</option>
        </select>
      </div>

      <div class="form-group">
        <label for="color">Category</label>
        <select class="form-control" id="category" name="category" required>
          <option>Male</option>
          <option>Female</option>
          <option>Children</option>
        </select>
      </div>

      <div class="form-group">
        <label for="color">onSale</label>
       
       <input type="radio" id="true" name="onSale" value=0>
       <label for="true">No</label>
       <input type="radio" id="false" name="onSale" value=1>
       <label for="false">Yes</label><br>
      </div>

      <div class="custom-file form-group mb-3">
          <input type="file" class="custom-file-input" id="customFile" name="image">
          <label class="custom-file-label" for="customFile">Choose file</label>
      </div>

      <div class="form-group primary">
          <button type="submit" value="Submit">Submit</button>
      </div>

   
  </form>

</div>

@endsection