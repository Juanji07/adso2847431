@extends('layouts.app')
@section('title', 'Edite Pet')

@section('content')
@include('layouts.navbar')
<!-- Authentication -->
<h1 class="text-3xl pt-30 flex gap-2 items-center text-white font-bold mb-10 pb-2 border-b-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-12">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                                </svg>
    Edit Pet
</h1>

<div class="breadcrumbs text-sm text-white">
  <ul>
    <li><a href="{{ url('pets') }}">Pet Module</a></li>
    <li>Edit Pet</li>
  </ul>
</div>

<form method="post" action="{{ url('pets/'.$pet->id) }}" class="pt-6 pb-20" enctype="multipart/form-data"> <!-- Importante para subir imagenes el enctype -->
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $pet->id }}">
        <fieldset class="fieldset w-md bg-base-200 border border-base-300 p-4 rounded-box">
                @if (count($errors->all()) > 0)
                    <div class="flex flex-col gap-1 my-4">
                        @foreach ($errors->all() as $message)
                            <div class="badge badge-error">
                                <svg class="size-[1em]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g fill="currentColor"><rect x="1.972" y="11" width="20.056" height="2" transform="translate(-4.971 12) rotate(-45)" fill="currentColor" stroke-width="0"></rect><path d="m12,23c-6.065,0-11-4.935-11-11S5.935,1,12,1s11,4.935,11,11-4.935,11-11,11Zm0-20C7.038,3,3,7.037,3,12s4.038,9,9,9,9-4.037,9-9S16.962,3,12,3Z" stroke-width="0" fill="currentColor"></path></g></svg>
                                {{ $message }}
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="avatar mx-auto flex-col gap-2 items-center">
                        <div id="upload" class="mask mask-squircle cursor-pointer hover:scale-110 transition-transform">
                            <img id="preview" src="{{ asset('images/'.$pet->photo) }}" />
                            <input type="hidden" name="originphoto" value="{{ $pet->photo }}">
                        </div>
                        <small class="font-bold text-gray-500 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            upload photo
                        </small>
                </div>
                <input type="file" name="photo" id="photo" class="hidden" accept="image/*">

        <label class="fieldset-label">location</label>
        <input type="tex" name="location" class="input rounded-full w-full" placeholder="Colombia, Bogota"
          value="{{old('location', $pet->location)}}" />

        <label class="fieldset-label">Name</label>
        <input type="text" name="name" class="input rounded-full w-full" placeholder="Paco"
          value="{{old('name', $pet->name)}}" />

        <label class="fieldset-label">Kind</label>
        <select name="kind" class="input rounded-full w-full">
          <option value="">Select Kind...</option>
          <option value="Dog" @if(old('kind', $pet->kind) == 'Dog') selected @endif>Dog</option>
          <option value="Cat" @if(old('kind', $pet->kind) == 'Cat') selected @endif>Cat</option>
          <option value="Fish" @if(old('kind', $pet->kind) == 'Fish') selected @endif>Fish</option>
          <option value="Mouse" @if(old('kind', $pet->kind) == 'Mouse') selected @endif>Mouse</option>
          <option value="Bird" @if(old('kind', $pet->kind) == 'Bird') selected @endif>Bird</option>
        </select>


        <label class="fieldset-label">Weight</label>
        <input type="text" name="weight" class="input rounded-full w-full" placeholder="50"
        value="{{old('weight', $pet->weight)}}"/>

        <label class="fieldset-label">Age</label>
        <input type="number" name="age" class="input rounded-full w-full" placeholder="1 - 15"
        value="{{old('age', $pet->age)}}" />

        <label class="fieldset-label">Breed</label>
        <input type="text" name="breed" class="input rounded-full w-full" placeholder="Shiba inu"
        value="{{old('breed', $pet->breed)}}"/>

        <label class="fieldset-label">Description</label>
        <input type="textarea" name="description" class="input rounded-full w-full" placeholder="Blanco y esponjoso"
        value="{{old('description', $pet->description)}}" />

    <button class="btn bg-cyan-800 text-white rounded-full">Update</button>
    </fieldset>
    </form>

@endsection

@section('js')
<script>
    const upload = document.querySelector('#upload')
    const preview = document.querySelector('#preview')
    const photo = document.querySelector('#photo')

    upload.addEventListener('click', function(e) {
        photo.click()
    })

    photo.addEventListener('change', function(e) {

    preview.src= window.URL.createObjectURL(this.files[0])

    })
</script>

@endsection
