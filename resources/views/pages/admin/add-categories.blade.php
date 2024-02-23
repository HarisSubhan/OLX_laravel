<x-layout>
    <x-flash />
    <div class="row">
        <x-admin-sidebar />
            <div class="col-lg-9 col-7">
                <div class="mx-auto shadow p-5 my-5 col-lg-6">
                    <form action="/add-category" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1 class="display-5 p-5 text-center ">
                            Add Category
                        </h1>
                        <label for="">Category Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter Categotry name...">
                        @error('name')
                            {{ $message }}
                        @enderror
                        <label for="">Category Background Color</label>
                        <input class="form-control" type="color" name="color" placeholder="Select Color...">
                        @error('color')
                            {{ $message }}
                        @enderror
                        <label for="">Image</label>
                        <input class="form-control" type="file" name="image" placeholder="Select Image...">
                        @error('image')
                            {{ $message }}
                        @enderror
                        <button class="btn btn-success w-100 my-2" style="text-white background:#182A3E">
                            Add Category
                        </button>
                    </form>
                </div>
            </div>
    </div>
</x-layout>