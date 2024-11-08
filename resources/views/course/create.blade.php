<x-app-layout>
    <form action="{{ route('course.store') }}" method="POST">
        @csrf
        <input class="rounded-lg shadow-md" name="name">
        <textarea class="rounded-lg shadow-md" name="description"></textarea>

        <input class="p-2 rounded-lg border-2 shadow-md" type="submit" value="Subir">
    </form>
</x-app-layout>
