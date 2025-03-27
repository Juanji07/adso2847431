<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>

<body>
    <h1 class="text-4xl text-center my-10">{{$title}}</h1>
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pets as $pet)
                    <!-- row 1 -->
                    <tr class="hover:bg-base-300">
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12">
                                        <img src="{{ $pet->photo }}" alt="{{ $pet->name }}" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">{{$pet->name}}</div>
                                    @if ($pet->kind == 'Dog')
                                        <div class="badge badge-sm badge-soft badge-success">{{$pet->kind}}</div>
                                    @else
                                        <div class="badge badge-sm badge-soft badge-error">{{$pet->kind}}</div>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge badge-ghost badge-sm">{{ $pet->breed }}</span>
                        </td>
                        <td>{{ $pet->location }}</td>
                        <th>
                            <a href="#" class="btn btn-sm btn-outline btn-accent btn-info" data-name="{{ $pet->name }}"
                                data-breed="{{ $pet->breed }}" data-location="{{ $pet->location }}"
                                data-kind="{{ $pet->kind }}"  data-description="{{ $pet->description }}" data-photo="{{ $pet->photo }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </a>
                        </th>


                    </tr>
                @endforeach
            </tbody>
            <div id="petModal" class="modal">
                <div class="modal-box">
                    <h2 class="text-2xl font-bold">Detalles del Animal</h2>
                    <div class="mt-4">
                        <div class="mb-4">
                            <img id="modalImage" class="rounded-xl w-full h-auto max-h-64 object-contain"
                                src="/storage/avatars/no-image.png" alt="Imagen del Animal" />
                        </div>
                        <p><strong>Nombre:</strong> <span id="modalName"></span></p>
                        <p><strong>Raza:</strong> <span id="modalBreed"></span></p>
                        <p><strong>Ubicación:</strong> <span id="modalLocation"></span></p>
                        <p><strong>Tipo:</strong> <span id="modalKind"></span></p>
                        <p><strong>Descripción:</strong> <span id="modalDescription"></span></p>
                        <div class="modal-action">
                            <button id="closeModal" class="btn">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- foot -->
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            function openModal(pet) {
                document.getElementById('modalName').textContent = pet.name;
                document.getElementById('modalBreed').textContent = pet.breed;
                document.getElementById('modalLocation').textContent = pet.location;
                document.getElementById('modalKind').textContent = pet.kind;
                document.getElementById('modalDescription').textContent = pet.description;
                document.getElementById('modalImage').src = pet.photo; // Establecer la imagen
                document.getElementById('petModal').classList.add('modal-open');
            }

            document.getElementById('closeModal').addEventListener('click', () => {
                document.getElementById('petModal').classList.remove('modal-open');
            });

            const actionButtons = document.querySelectorAll('.btn-info');

            actionButtons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    const pet = {
                        name: button.dataset.name,
                        breed: button.dataset.breed,
                        location: button.dataset.location,
                        kind: button.dataset.kind,
                        description: button.dataset.description,
                        photo: button.dataset.photo
                    };
                    openModal(pet);
                });
            });
        });
    </script>


</body>

</html>