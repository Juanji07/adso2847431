@extends('layouts.app')
@section('title', 'Create User')

@section('content')
@include('layouts.navbar')
<!-- Authentication -->
<h1 class="text 3xl pt-30 flex gap-2 items-center text-white font-bold mb-10 pb-2 border-b-2">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
    </svg>
    Create User
</h1>

<div class="breadcrumbs text-sm text-white">
  <ul>
    <li><a href="{{ url('users') }}">User Module</a></li>
    <li>Create User</li>
  </ul>
</div>

<form method="post" action="{{ route('users.store') }}" class="pt-6 pb-20" enctype="multipart/form-data"> <!-- Importante para subir imagenes el enctype -->
        @csrf
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
                            <img id="preview" src="{{ asset('images/no-photo.jpg') }}" />
                        </div>
                        <small class="font-bold text-gray-500 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            upload photo
                        </small>
                </div>
                <input type="file" name="photo" id="photo" class="hidden" accept="image/*">

                <label class="fieldset-label">Document</label>
        <input type="number" name="document" class="input rounded-full w-full" placeholder="1002523853"
          value="{{old('document')}}" />

        <label class="fieldset-label">Fullname</label>
        <input type="text" name="fullname" class="input rounded-full w-full" placeholder="Jhon Wick"
          value="{{old('fullname')}}" />

        <label class="fieldset-label">Gender</label>
        <select name="gender" class="input rounded-full w-full">
          <option value="">Select Gender...</option>
          <option value="female" @if(old('gender') == 'female') selected @endif>Female</option>
          <option value="male" @if(old('gender') == 'male') selected @endif>Male</option>
        </select>

    <label class="fieldset-label">Birthdate</label>
    <input type="date" name="birthdate" class="input rounded-full w-full" />

    <label class="fieldset-label">Phone</label>
    <input type="number" name="phone" class="input rounded-full w-full" placeholder="3113200765"
      value="{{old('phone')}}" />

    <label class="fieldset-label">Email</label>
    <input type="email" name="email" class="input rounded-full w-full" placeholder="Jhon@gmail.com"
      value="{{old('email')}}" />

      <label class="fieldset-label">Password</label>
      <input type="password" name="password" class="input rounded-full w-full" placeholder="secret"/>

      <label class="fieldset-label">Confirm Password</label>
      <input type="password" class="input rounded-full w-full" name="password_confirmation" placeholder="secret">


    <button class="btn bg-cyan-800 text-white rounded-full">Create</button>
    </fieldset>
    </form>

@endsection

@section('js')
<script>
    const upload = document.querySelector('#upload')
    const photo = document.querySelector('#photo')

    upload.addEventListener('click', function(e) {
        photo.click()
    })

    photo.addEventListener('change', function(e) {

    preview.src= window.URL.createObjectURL(this.files[0])

    })
</script>

@endsection
