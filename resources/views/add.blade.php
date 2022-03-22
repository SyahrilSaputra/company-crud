@extends('template.temp')
@section('title', 'Company')
@section('css')
@endsection

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <h2>Add Company</h2>
    </div>
    <div class="card-body">
       <div class="container">
        <form action="{{ route('save.company') }}" method="POST">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="desc" class="form-control @error('desc') is-invalid @enderror"></textarea>
                @error('desc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       </div>
    </div>
</div>
@endsection
@section('scripts')
    
@endsection

