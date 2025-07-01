<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <nav class="bg-gray-800 text-white p-4 flex justify-around">
        <a href="<a href="{{ route('obras.index') }}" class="{{ request()->routeIs('obras.index') ? "font-bold underline" : "hover:underline" }}">Obras</a>
        <a href="#" class="hover:text-gray-400">Elemento 2</a>
        <a href="#" class="hover:text-gray-400">Elemento 3</a>
        <a href="#" class="hover:text-gray-400">Elemento 4</a>
    </nav>

</div>