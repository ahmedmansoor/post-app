<html>
<title>Upload an image</title>

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Upload an Image') }}
        </h2>
    </x-slot>

    <div class=" flex bg-local">
        <div class=" mt-4 mx-auto max-w-6xl py-20 px-12 lg:px-24  mb-24">
            <div class="mt-5">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <img src="images/{{ Session::get('image') }}">
                @endif
                <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                        @csrf
                        <div>
                            <label class="uppercase tracking-wide text-black text-xs font-bold">
                                Title
                            </label>
                            <input type="text" name="name" placeholder="Image name"
                                class="w-full bg-gray-200 text-black border border-gray-200 rounded  px-4 mb-3"><br>
                        </div>
                        <div>
                            <label class="uppercase tracking-wide text-black text-xs font-bold">
                                Description
                            </label>
                            <input type="text" name="details" placeholder="Description"
                                class="w-full bg-gray-200 text-black border border-gray-200 rounded  px-4 mb-3"><br>
                        </div>
                        <div>
                            <input type="file" name="image" class="w-full  py-2 px-4 mb-3">
                        </div>
                        <div class="d-grid gap-1">
                            <button type="submit" class="md:w-full px-3">
                                <button
                                    class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-md">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

</html>