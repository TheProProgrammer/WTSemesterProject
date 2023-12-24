@extends('layouts/parentLayout')

@section('title', 'Post')
@section('content')

<div class="loginDiv">
    <h1>Add a New Product</h1>
    <form method="POST" action="/post">
        @csrf
        <label for="title">Title:</label>
        <input type="text"  id="title" name="title" required>

        <label for="description">Description:</label>
        <textarea  id="description" name="description" rows="3" required></textarea>
        
        <label for="price">Price:</label>
        <input type="number"  id="price" name="price" required>
        
        <label for="image">Image:</label>
        <input type="file"  id="image" name="image" required>    
        
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection