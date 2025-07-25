@extends('layouts.app')
@section('title', 'Create Pet')

@section('content')
@include('layouts.navbar')
<!-- Authentication -->
<h1 class="text 3xl pt-30 flex gap-2 items-center text-white font-bold mb-10 pb-2 border-b-2">
    <svg class="size-12" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#ffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path class="st0" d="M120.113,139.014c4.529,13.248,13.07,24.156,23.738,31.637c10.672,7.491,23.51,11.665,36.848,11.673 c6.896,0,13.906-1.126,20.726-3.458l0.023-0.008c13.24-4.528,24.144-13.066,31.626-23.738c7.49-10.664,11.668-23.502,11.672-36.844 c0-6.891-1.126-13.917-3.469-20.753c-4.525-13.232-13.063-24.14-23.726-31.63c-10.668-7.49-23.502-11.672-36.848-11.672 c-6.888,0-13.913,1.119-20.765,3.474c-13.236,4.528-24.14,13.066-31.614,23.731c-7.494,10.664-11.672,23.501-11.676,36.843 c0,6.876,1.122,13.878,3.45,20.698L120.113,139.014z M154.716,99.964c3.749-5.308,9.042-9.475,15.689-11.751l-1.39,0.473 l1.41-0.489c3.43-1.174,6.868-1.717,10.278-1.717c6.565-0.008,12.984,2.072,18.296,5.813c5.312,3.749,9.475,9.042,11.759,15.682 v0.007c1.182,3.442,1.728,6.892,1.728,10.294c0.004,6.569-2.075,12.988-5.808,18.304c-3.749,5.317-9.042,9.475-15.689,11.759h0.023 c-3.458,1.174-6.915,1.717-10.314,1.717c-6.572,0.008-12.991-2.071-18.304-5.804c-5.3-3.733-9.456-9.01-11.743-15.641l-0.016-0.04 c-1.182-3.458-1.729-6.9-1.729-10.302C148.904,111.7,150.983,105.281,154.716,99.964z"></path> <path class="st0" d="M120.109,139.014c-0.003-0.016-0.003-0.032-0.012-0.048l-0.422-1.228L120.109,139.014z"></path> <path class="st0" d="M312.969,175.244l-2.182-0.748l2.198,0.756c6.833,2.339,13.846,3.458,20.73,3.458 c13.346-0.008,26.18-4.182,36.852-11.672c10.668-7.482,19.21-18.391,23.738-31.63c2.343-6.844,3.466-13.862,3.466-20.753 c-0.004-13.342-4.182-26.18-11.676-36.851c-7.478-10.664-18.39-19.21-31.634-23.731l0.007,0.007 c-6.828-2.347-13.849-3.481-20.753-3.481c-13.342,0.008-26.18,4.19-36.848,11.68c-10.664,7.482-19.205,18.39-23.726,31.638 c-2.344,6.829-3.47,13.854-3.47,20.746c0.004,13.342,4.182,26.18,11.672,36.843C288.825,162.169,299.729,170.715,312.969,175.244z M303.659,104.367c2.284-6.655,6.446-11.948,11.759-15.697c5.312-3.734,11.727-5.813,18.296-5.813c3.39,0,6.84,0.552,10.294,1.732 l0.008,0.008c6.648,2.276,11.936,6.435,15.686,11.751c3.733,5.316,5.812,11.735,5.808,18.304c0,3.403-0.548,6.852-1.725,10.302 c-2.284,6.64-6.45,11.932-11.763,15.682c-5.312,3.734-11.736,5.812-18.308,5.812c-3.403,0-6.856-0.552-10.302-1.725l2.182,0.748 l-2.166-0.74c-6.647-2.292-11.94-6.458-15.689-11.767c-3.733-5.317-5.812-11.736-5.808-18.304 C301.931,111.259,302.478,107.809,303.659,104.367z"></path> <path class="st0" d="M500.324,202.392c-7.478-10.664-18.391-19.209-31.634-23.73h0.008c-6.829-2.339-13.85-3.474-20.753-3.466 c-13.342,0-26.18,4.174-36.848,11.672c-10.664,7.482-19.205,18.398-23.726,31.638c-2.343,6.829-3.469,13.854-3.469,20.754 c0.003,13.334,4.182,26.172,11.672,36.836c7.483,10.672,18.387,19.209,31.626,23.738l0.016,0.008 c6.832,2.332,13.846,3.458,20.73,3.458c13.346-0.008,26.18-4.182,36.852-11.673c10.668-7.482,19.209-18.39,23.738-31.638 c2.343-6.836,3.466-13.854,3.466-20.746C511.996,225.902,507.818,213.064,500.324,202.392z M478.015,249.546 c-2.284,6.639-6.45,11.932-11.763,15.681c-5.312,3.733-11.736,5.812-18.308,5.804c-3.403,0-6.856-0.543-10.302-1.717h0.016 c-6.647-2.284-11.94-6.45-15.689-11.766c-3.733-5.308-5.812-11.727-5.808-18.288c0-3.403,0.547-6.852,1.728-10.302 c2.284-6.655,6.446-11.948,11.759-15.697c5.312-3.732,11.727-5.812,18.296-5.804c3.39,0,6.84,0.544,10.293,1.725l0.008,0.008 c6.647,2.276,11.936,6.442,15.685,11.751c3.733,5.308,5.812,11.736,5.809,18.304C479.74,242.646,479.192,246.096,478.015,249.546z"></path> <path class="st0" d="M124.634,259.989c2.343-6.836,3.466-13.854,3.466-20.746c-0.004-13.342-4.183-26.18-11.677-36.852 c-7.478-10.664-18.39-19.209-31.634-23.73l-0.024-0.008c-6.816-2.331-13.83-3.466-20.722-3.458 c-13.342,0-26.18,4.174-36.848,11.672C16.532,194.35,7.99,205.266,3.469,218.506v-0.007C1.126,225.335,0,232.36,0,239.26 c0.004,13.334,4.182,26.172,11.672,36.836c7.483,10.672,18.387,19.209,31.626,23.738l0.016,0.008 c6.832,2.332,13.846,3.458,20.73,3.458c13.346-0.008,26.18-4.182,36.852-11.673C111.564,284.145,120.106,273.237,124.634,259.989z M94.114,249.546c-2.284,6.639-6.451,11.932-11.763,15.681c-5.312,3.733-11.735,5.812-18.308,5.804 c-3.402,0-6.856-0.543-10.302-1.717h0.016c-6.647-2.284-11.94-6.45-15.689-11.766c-3.734-5.308-5.813-11.727-5.808-18.288 c0-3.411,0.547-6.852,1.728-10.302l0.012-0.032c2.288-6.639,6.442-11.924,11.746-15.666c5.313-3.732,11.728-5.812,18.296-5.804 c3.391,0,6.84,0.544,10.294,1.725l3.052,1.048l-3.044-1.04c6.647,2.276,11.936,6.442,15.686,11.751 c3.732,5.308,5.812,11.736,5.808,18.304C95.839,242.646,95.292,246.096,94.114,249.546z"></path> <path class="st0" d="M338.475,234.219c-12.318-9.83-25.66-17.973-39.687-23.754c-14.02-5.766-28.774-9.168-43.739-9.168 c-19.966,0.016-39.502,6.017-57.526,15.712c-27.039,14.594-51.025,37.529-68.734,64.182c-17.626,26.66-29.134,57.18-29.204,87.755 c0,11.105,1.568,22.194,5.04,32.898c3.666,11.318,8.585,20.981,14.674,29c9.097,12.066,20.891,20.115,33.122,24.636 c12.259,4.56,24.829,5.915,36.864,5.922c13.24-0.007,25.975-1.654,37.364-3.174c11.349-1.544,21.458-2.915,28.401-2.882 c6.938-0.032,17.051,1.339,28.397,2.882c11.393,1.52,24.128,3.166,37.368,3.174c15.988-0.015,33.17-2.402,48.867-11.633 c7.801-4.599,15.047-10.908,21.119-18.925c6.088-8.018,11.007-17.682,14.674-28.992c3.473-10.711,5.04-21.8,5.04-32.905 c-0.016-20.376-5.21-40.751-13.814-59.952C383.734,280.207,363.084,253.893,338.475,234.219z M374.788,391.897 c-2.733,8.427-6.08,14.689-9.688,19.446c-5.446,7.096-11.42,11.137-18.718,13.917c-7.274,2.732-15.996,3.891-25.569,3.883 c-10.51,0.008-21.899-1.378-33.076-2.882c-11.215-1.489-22.112-3.142-32.689-3.174c-10.577,0.031-21.474,1.685-32.689,3.165 c-11.176,1.512-22.565,2.899-33.076,2.891c-12.818,0.016-23.896-2.056-32.457-7.152c-4.328-2.575-8.207-5.898-11.83-10.648 c-3.607-4.757-6.954-11.018-9.688-19.446c-2.332-7.199-3.466-14.87-3.466-22.951c-0.015-14.791,3.879-30.929,10.987-46.737 c10.605-23.714,28.436-46.484,48.906-62.772c10.223-8.159,21.072-14.712,31.846-19.138c10.782-4.442,21.438-6.75,31.465-6.742 c13.354-0.016,27.893,4.127,42.239,11.861c21.517,11.53,42.258,31.094,57.136,53.596c14.96,22.478,23.899,47.76,23.829,69.931 C378.254,377.027,377.119,384.698,374.788,391.897z"></path> </g> </g>
        </svg>
    Create Pet
</h1>

<div class="breadcrumbs text-sm text-white">
  <ul>
    <li><a href="{{ url('pets') }}">Pet Module</a></li>
    <li>Create Pet</li>
  </ul>
</div>

<form method="post" action="{{ route('pets.store') }}" class="pt-6 pb-20" enctype="multipart/form-data"> <!-- Importante para subir imagenes el enctype -->
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
                            <img id="preview" src="{{ asset('images/no-pet.jpg') }}" />
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
          value="{{old('location')}}" />

        <label class="fieldset-label">Name</label>
        <input type="text" name="name" class="input rounded-full w-full" placeholder="Paco"
          value="{{old('name')}}" />

        <label class="fieldset-label">Kind</label>
        <select name="kind" class="input rounded-full w-full">
          <option value="">Select Kind...</option>
          <option value="Dog" @if(old('kind') == 'Dog') selected @endif>Dog</option>
          <option value="Cat" @if(old('kind') == 'Cat') selected @endif>Cat</option>
          <option value="Fish" @if(old('kind') == 'Fish') selected @endif>Fish</option>
          <option value="Mouse" @if(old('kind') == 'Mouse') selected @endif>Mouse</option>
          <option value="Bird" @if(old('kind') == 'Bird') selected @endif>Bird</option>
        </select>


        <label class="fieldset-label">Weight</label>
        <input type="text" name="weight" class="input rounded-full w-full" placeholder="50"
        value="{{old('weight')}}"/>

        <label class="fieldset-label">Age</label>
        <input type="number" name="age" class="input rounded-full w-full" placeholder="1 - 15"
        value="{{old('age')}}" />

        <label class="fieldset-label">Breed</label>
        <input type="text" name="breed" class="input rounded-full w-full" placeholder="Shiba inu"
        value="{{old('breed')}}"/>

        <label class="fieldset-label">Description</label>
        <input type="text" name="description" class="input rounded-full w-full" placeholder="Blanco y esponjoso"
        value="{{old('description')}}" />

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
